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


class RotoworldNews {


	protected $player;
	protected $report;
	protected $impact;
	protected $sourceURL;
	protected $sourceName;
	protected $date;
	protected $relatedPlayers = array();
	protected $sport;

	public function __construct( Array $news ) {


		if ( ! isset( $news['player'] ) || ! is_a( $news['player'], 'Rotoworld\RotoworldPlayer' ) ) {
			throw new \Exception( 'Must have a player object set.' );
		}

		if ( ! isset( $news['report'] ) ) {
			throw new \Exception( 'Must have a report' );
		}

		if ( isset( $news['relatedPlayers'] ) && ! is_array( $news['relatedPlayers'] ) ) {

			throw new \Exception( 'Related players must be an array' );

		}

		$this->player         = $news['player'];
		$this->report         = $news['report'];
		$this->impact         = $news['impact'];
		$this->sourceURL      = $news['sourceURL'];
		$this->sourceName     = $news['sourceName'];
		$this->date           = $news['date'];
		$this->relatedPlayers = $news['relatedPlayers'];
		$this->sport          = $news['sport'];


	}

	/**
	 * @return mixed
	 */
	public function getPlayer() {
		return $this->player;
	}

	/**
	 * @return mixed
	 */
	public function getReport() {
		return $this->report;
	}

	/**
	 * @return mixed
	 */
	public function getImpact() {
		return $this->impact;
	}

	/**
	 * @return mixed
	 */
	public function getSourceURL() {
		return $this->sourceURL;
	}

	/**
	 * @return mixed
	 */
	public function getSourceName() {
		return $this->sourceName;
	}

	/**
	 * @return mixed
	 */
	public function getDate() {
		return $this->date;
	}

	/**
	 * @return array
	 */
	public function getRelatedPlayers() {
		return $this->relatedPlayers;
	}

	/**
	 * @return mixed
	 */
	public function getSport() {
		return $this->sport;
	}


}