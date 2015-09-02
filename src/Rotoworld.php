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
   * @param string $sport accepts the endpoint after the baseUrl from rotoworld.com, accepts mlb, nfl, nhl, bpl, gol and nas
   * @param string $baseUrl this should never change, but it is the base url + uri for scraping the data
   * @param string $itemIdentifier this should never change, this is the sizzle style selector for grabbing each block of news
   */
  public function __construct( $sport = 'mlb', $baseUrl = 'http://www.rotoworld.com/sports/', $itemIdentifier = '.pb' ) {

    $this->url            = $baseUrl . $sport;
    $this->itemIdentifier = $itemIdentifier;
  }


  /**
   * Grab and return the data
   *
   * @return array
   */
  public function get() {
    $dataArray = array();
    $html      = \SimpleHtmlDom\file_get_html( $this->url );
    foreach ( $html->find( $this->itemIdentifier ) as $element ) {
      $data        = self::parseData( $element );
      $dataArray[] = $data;
    }

    return $dataArray;
  }


  /**
   * Convert raw DOM data to a well defined object containing player news and meta information
   *
   * @param $element
   *
   * @return \stdClass
   */
  private static function parseData( simple_html_dom_node $element ) {
    $data = (object) array();
    /* @var $elementContent simple_html_dom_node */
    foreach ( $element->find( '.headline, .report, .impact, .info' ) as $elementContent ) {
      $class = $elementContent->attr['class'];
      switch ( $class ) {
        case 'headline':
          $playerInfo              = explode( ' - ', $elementContent->plaintext );
          $linkInfo                = explode( '/', $elementContent->find( 'a' )[0]->attr['href'] );
          $data->name              = trim( $playerInfo[0] );
          $data->position          = trim( $playerInfo[1] );
          $data->team              = trim( $playerInfo[2] );
          $data->id                = trim( $linkInfo[3] );
          $data->nameDashDelimited = trim( $linkInfo[4] );
          break;
        case 'report':
          $data->report = trim( $elementContent->plaintext );
          break;

        case 'impact':
          $data->impact = trim( $elementContent->plaintext );
          break;

        case 'info':
          $data->related = null;
          $relatedRaw    = $elementContent->find( '.related' )[0]->find( 'a' );
          foreach ( $relatedRaw as $relatedItem ) {
            if ( $data->related ) {
              $data->related .= ',';
            }
            $data->related .= trim( $relatedItem->plaintext );
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

    return $data;
  }
}