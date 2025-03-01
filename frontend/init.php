<?php
/**
*
* Autoloader Frontend
*
* @package Order Tip for WooCommerce
* @author  Adrian Emil Tudorache
* @license GPL-2.0+
* @link    https://www.tudorache.me/
**/

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$files = array(
    'services/order-tip-woo.service.php' => '',
    'controllers/config.class.php' => 'WOO_Order_Tip_Config',
    'controllers/main.class.php'   => 'WOO_Order_Tip_Main'
);
foreach( $files as $file => $init ) {
    require_once( __DIR__ . '/' . $file );
    if( $init )
        new $init;
}
?>
