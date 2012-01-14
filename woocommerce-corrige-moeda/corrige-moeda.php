<?php 
/*
	Plugin Name: WooCommerce Corrige moeda
	Plugin URI: http://vibemidia.com/woocommerce
	Description: Corrige a moeda de exibição do WooCommerce de $ 20,00 e para R$ 20,00.
	Version: 1.0
	Author: John-Henrique <john@midianegocios.com.br>
	Author URI: http://vibemidia.com
	Requires at least: 3.1
	Tested up to: 3.3
*/
add_action('plugins_loaded', 'corrige_moeda', 0);
add_filter('woocommerce_currency_symbol', 'corrige_moeda' );
function corrige_moeda(){return 'R&#36;';}
?>