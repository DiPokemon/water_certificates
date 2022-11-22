<?php
/*
Plugin Name: Сертификаты
Description: Слайдер с сертификатами
Version: 1.0
*/

global $wpdb;

if ( ! defined( 'ABSPATH' ) ) exit;



/**************
 * Константы
 **************/
define( 'WATER_CERTIFICATES_PLUGIN_DB_VERSION', '1.0' );
define( 'WATER_CERTIFICATES_PLUGIN_NAME',     'water_certificates_plugin' );
define( 'WATER_CERTIFICATES_PLUGIN_NAME_RU',  'Сертификаты' );
define( 'WATER_CERTIFICATES_DB_TABLE_NAME',    $wpdb->prefix . WATER_CERTIFICATES_PLUGIN_NAME );
define( 'WATER_CERTIFICATES_PLUGIN_DIR',       plugin_dir_path( __FILE__ ) );
define( 'WATER_CERTIFICATES_PLUGIN_ADMIN_URL', admin_url('?page=' . WATER_CERTIFICATES_PLUGIN_NAME) );



/**************
 * Class
 **************/
require_once dirname(__FILE__) . '/inc/class-main.php';
require_once dirname(__FILE__) . '/inc/class-model.php';
$water_main_class = new WaterCertificates( __FILE__ );



/**************
 * Run
 **************/

// Правила активации:
// register_activation_hook() должен вызываться из основного файла плагина, из того где расположена директива Plugin Name
register_activation_hook(__FILE__, array($water_main_class, 'activate'));

add_action( 'wp_enqueue_scripts', 'water_certificates_script' );
function water_certificates_script(){
	wp_enqueue_script( 'water_certificates_slider-init', '/wp-content/plugins/water_certificates/static/js/certificates-slider.js', array('slick'), null, true);
}