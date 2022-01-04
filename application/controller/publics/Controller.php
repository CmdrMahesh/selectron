<?php
namespace sp\selectron\controller\publics;

defined( 'ABSPATH' ) || exit;

abstract class Controller {

	private static $_instance = null;

	public static function instance() {
		if ( ! isset( self::$_instance ) ) {
			self::$_instance = new self;
		}

		return self::$_instance;
	}

	private function __construct() {
		
	}

	public function hook_render();
	public function js_render($selector,$delay);
}
