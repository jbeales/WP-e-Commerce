<?php
/**
 * Control database upgrade to version 15
*
* @access private
* @since 4.0
*
*/
function _wpsc_db_upgrade_15() {
	_wpsc_modify_coupons_add_pre_post_tax_option();
}


function _wpsc_modify_coupons_add_pre_post_tax_option() {
	global $wpdb;
	$wpdb->query( 'ALTER TABLE ' . WPSC_TABLE_COUPON_CODES . ' ADD COLUMN after_taxes char(1) NOT NULL DEFAULT \'0\' AFTER every_product' ); 
}