<?php
/*
* Plugin Name: Wp Increase Max Upload Size
* Plugin URI: https://example.com/
* Description: A plugin that sets the upload size limit to 100 MB for all users.
* Version: 1.0
* Author: Name
* Author URI: https://example.com
* License: GPL2
*/

/**
* Filter the upload size limit for all users.
*
* @param string $size Upload size limit (in bytes).
* @return int Filtered size limit.
*/
function filter_site_upload_size_limit( $size ) {
// Set the upload size limit to 10 MB for all users.
// 10 MB.
$size = 1024 * 100000;
return $size;
}
add_filter( 'upload_size_limit', 'filter_site_upload_size_limit', 20 );