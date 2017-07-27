<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( !class_exists('Woo2YML_YandexMarket_Core') ) {
	/**
	 * Class Woo2YML_YandexMarket_Core
	 *
	 * Plugin Core Class.
	 *
	 * @author      Andrey Mishchenko
	 * @since       1.0.0
	 * @package     woo2yml-yandex-market
	 */
	class Woo2YML_YandexMarket_Core {

		/**
		 * Current Class Instance.
		 *
		 * @var Woo2YML_YandexMarket_Core
		 */
		private static $INSTANCE = null;


		/**
		 * Return current class instance.
		 *
		 * @since       1.0.0
		 *
		 * @return      Woo2YML_YandexMarket_Core
		 */
		public static function get_instance() {

			if ( self::$INSTANCE == null ) {
				self::$INSTANCE = new Woo2YML_YandexMarket_Core();
			}

			return self::$INSTANCE;

			// get_instance
		}

	}
}