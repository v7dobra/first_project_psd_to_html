<?php
$type = ( $_SERVER['REQUEST_METHOD'] === 'POST' ) ? INPUT_POST : INPUT_GET;

$args = array(
	'name'     => FILTER_SANITIZE_STRING,
	'surname'  => FILTER_SANITIZE_STRING,
	'email'    => FILTER_SANITIZE_EMAIL,
	'message'  => FILTER_SANITIZE_STRING,
	'addres'   => FILTER_SANITIZE_STRING,
	'phone'    => FILTER_SANITIZE_NUMBER_INT,
	'password' => FILTER_SANITIZE_STRING
);

$data = filter_input_array( $type, $args );

foreach ( $data as $key => $value ) {
	setcookie( $key, $value, time() + 3600, "/" );
}


header( 'Location: /' );