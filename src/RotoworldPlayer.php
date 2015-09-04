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


class RotoworldPlayer {

	protected $name;
	protected $slug;
	protected $id;
	protected $position;
	protected $team;


	public function __construct( Array $player ) {


		if ( ! isset( $player['name'] ) ) {

			throw new \Exception( 'Player must have a name' );
		}

		if ( ! isset( $player['slug'] ) ) {
			throw new \Exception( 'Player must have a slug' );
		}

		if ( ! isset( $player['id'] ) ) {
			throw new \Exception( 'Player must have a ID' );
		}


		$this->name     = $player['name'];
		$this->slug     = $player['slug'];
		$this->id       = $player['id'];
		$this->position = $player['position'];
		$this->team     = $player['team'];


	}

	/**
	 * @return mixed
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * @return mixed
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * @return mixed
	 */
	public function getTeam() {
		return $this->team;
	}



}