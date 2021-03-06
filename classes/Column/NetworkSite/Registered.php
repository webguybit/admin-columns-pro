<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class ACP_Column_NetworkSite_Registered extends AC_Column {

	public function __construct() {
		$this->set_type( 'registered' );
		$this->set_original( true );
	}

	public function register_settings() {
		$this->get_setting( 'width' )->set_default( 20 );
	}

}
