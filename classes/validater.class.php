<?php

/**
 * Created by PhpStorm.
 * User: IGNAT
 * Date: 02.02.2017
 * Time: 20:06
 */
class Validater {
	public $method_Type = 1;

	function validate_field( $name ) {
		$name = filter_input( $this->method_Type, $name );

		return $name;
	}

	function __construct() {
		$this->method_Type = $_SERVER['REQUEST_METHOD'] === 'POST' ? INPUT_POST : INPUT_GET;
	}

	public function validate_form( $data ) {
		foreach ( $data as $key => $value ) {
			$this->validate_field( $key );
		}
	}


	public function setup_data() {

	}

}