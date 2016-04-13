<?php
/*
Plugin Name: Print-Button
Plugin URI: http://nabtron.com/print-button
Description: Adds a simple print button wherever you want. Allows shortcode and template tag
Version: 0.1
Author: Nabtron
Author URI: http://nabtron.com
Min WP Version: 2.5
Max WP Version: 4.5
*/
?>
<?php
// [print_button]
function nab_print_button_shortcode( $atts ){
return '<a class="print-link" href="javascript:window.print()"><img src="'.plugin_dir_url( __FILE__ ).'assets/img/print-icon.png"></a>';
}
add_shortcode( 'print_button', 'nab_print_button_shortcode' );
?>