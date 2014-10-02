<?php
/**
* Plugin Name: Mzz Include CrazyStat
* Plugin URI: https://github.com/mjassen/mzz-include-crazystat
* Description: Helper plugin puts CrazyStat include tag in WordPress footer.
* Version: 0.0.1
* Author: mjassen
* Author URI: http://wieldlinux.com/
* License: MIT
*/
add_action( 'wp_footer', 'mzz_include_crazystat', 99 );

function mzz_include_crazystat() {
//echoes the crazystat include commands so that each time the WordPress footer loads, WordPress looks to load CrazyStat from the CrazyStat directory.
    //echo 'This site is using Mzz Include CrazyStat.';

	//include stat script for crazystat website hit counter;
	$set_counter_enabled = false;
	@include_once("stat/src/include.php");

}

?>
