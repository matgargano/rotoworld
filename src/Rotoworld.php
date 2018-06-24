<?php
/*
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

The information obtained with this package are the intellectual 
property of Rotoworld.com and NBCSports. This is to be used for 
educational purposes and you should consult with Rotoworld.com or 
NBC Sports if you are going to use this or information obtained 
with this anyhow and anywhere.

*/

namespace Rotoworld;

use SimpleHtmlDom;
use SimpleHtmlDom\simple_html_dom_node;

/**
 * Class Rotoworld News
 */
class Rotoworld {

	protected $url;
	protected $itemIdentifier;
	protected $newsObject;
	protected $containerId;


	/**
	 * @param string $sport
	 * @param string $baseUrl
	 * @param string $itemIdentifier
	 */
	public function __construct( $sport = 'mlb', $baseUrl = 'http://www.rotoworld.com/sports/', $itemIdentifier = '.pb' ) {

		$this->url            = $baseUrl . $sport;
		$this->itemIdentifier = $itemIdentifier;
		$this->sport          = $sport;
	}


	/**
	 * @return array
	 */
	public function get() {
		$dataArray = array();
		$html      = \SimpleHtmlDom\file_get_html( $this->url );
		foreach ( $html->find( $this->itemIdentifier ) as $element ) {
			$data        = $this->parseData( $element );
			$dataArray[] = $data;
		}

		return $dataArray;
	}


	/**
	 * Convert raw DOM data to a well defined object containing player news and meta information
	 *
	 * @param simple_html_dom_node $element
	 *
	 * @return RotoworldNews
	 */
	private function parseData( simple_html_dom_node $element ) {
		$data = (object) array();
		foreach ( $element->find( '.headline, .report, .impact, .info' ) as $elementContent ) {
			$class = $elementContent->attr['class'];
			switch ( $class ) {
				case 'headline':
					$playerInfo     = explode( ' - ', $elementContent->plaintext );
					$linkInfo       = explode( '/', $elementContent->find( 'a' )[0]->attr['href'] );
					$data->name     = trim( $playerInfo[0] );
					$data->position = trim( $playerInfo[1] );
					$data->team     = trim( $playerInfo[2] );
					$data->id       = trim( $linkInfo[3] );
					$data->slug     = trim( $linkInfo[4] );
					break;
				case 'report':
					$data->report = trim( $elementContent->plaintext );
					break;

				case 'impact':
					$data->impact = trim( $elementContent->plaintext );
					break;

				case 'info':
					$relatedRaw = $elementContent->find( '.related' )[0]->find( 'a' );
					/* @var $relatedItem simple_html_dom_node */
					foreach ( $relatedRaw as $relatedItem ) {

						$name = $relatedItem->plaintext;

						$attributes = explode( '/', $relatedItem->getAllAttributes()['href'] );

						$type = $attributes[1];


						if ( 'teams' === $type ) {
							$sport = $attributes[3];
							$id    = $attributes[4];
							$slug  = $attributes[5];
						} elseif ( 'player' === $type ) {
							$sport = $attributes[2];
							$id    = $attributes[3];
							$slug  = $attributes[4];
						} else {
							continue;
						}

						$data->related[ $type ][] = (object) compact( 'name', 'sport', 'id', 'slug' );
					}

					if ( isset( $elementContent->find( '.source a' )[0]->attr['href'] ) ) {
						$data->sourceURL  = trim( $elementContent->find( '.source a' )[0]->attr['href'] );
						$data->sourceName = trim( $elementContent->find( '.source a' )[0]->plaintext );
					}
					$date       = $elementContent->find( '.date' )[0]->plaintext;
					$data->date = strtotime( str_replace( ' - ', ',', $date ) ); //convert the date by making it strtotime readable
					break;
			}
		}

		$player         = new RotoworldPlayer( array(
			'name'     => $data->name,
			'slug'     => $data->slug,
			'id'       => $data->id,
			'position' => isset($data->position) ? $data->position : null,
			'team' => isset($data->team) ? $data->team   : null,
		) );
		$relatedPlayers = null;


		if ( isset( $data->related['player'] ) && is_array( $data->related['player'] ) ) {

			foreach ( $data->related['player'] as $relatedPlayer ) {

				$relatedPlayers[] = new RotoworldPlayer(
					array(
						'name'     => $relatedPlayer->name,
						'slug'     => $relatedPlayer->slug,
						'id'       => $relatedPlayer->id,
						'position' => isset($relatedPlayer->position) ? $relatedPlayer->position : null,
						'team'     => isset( $relatedPlayer->team ) ? $relatedPlayer->team : null,
					)
				);
			}

		}


		$newsElement = new RotoworldNews(

			array(
				'player'         => $player,
				'report'         => $data->report,
				'impact'         => $data->impact,
				'sourceURL'      => isset($data->sourceURL) ? $data->sourceURL : null,
				'sourceName'     => isset($data->sourceName) ? $data->sourceName : null,
				'date'           => $data->date,
				'relatedPlayers' => isset( $relatedPlayers ) ? $relatedPlayers : null,
				'sport'          => $this->sport


			)


		);

		return $newsElement;


	}
}
