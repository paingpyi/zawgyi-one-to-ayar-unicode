<?php
/*
Plugin Name: Calendar Header Bar Image
Plugin URI: http://www.ayarunicodegroup.com/
Description: Substitute text with appropiate image for calendar week days.Representation of week days and images are Sunday=Galon Bird,Monday=Tiger,Tuesday=Lion,Wednesday=Elephant,Thusday=Rat,Friday=Guinea-pig,Saturday=Dragon
Author: Sithu Thwin
Author URI: http://www.http://www.ayarunicodegroup.com/
Version: 1.0
*/
/*Language loader*/
load_plugin_textdomain('chi','/wp-content/plugins/calendar-header-img/languages/');

function calendar_header_img() {
?>

<style type='text/css'>/* Begin Calendar CSS*/
#wp-calendar {
	empty-cells: hide;
	margin: 10px auto 0;
	width: 180px;
	padding: 0px;
	border-collapse: collapse;
 }
#wp-calendar thead tr th{
	text-indent:-5000px;
	background:transparent;
	height:25px;
}
<?php 
if (get_option('start_of_week') == "0"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/sun_calendar_th.gif) no-repeat;}
<?php
}
if (get_option('start_of_week') == "1"){
?>
#wp-calendar thead tr  {background: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/mon_calendar_th.gif) top center no-repeat;}
<?php
}
if (get_option('start_of_week') == "2"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/tue_calendar_th.gif) no-repeat;}
<?php
}
if (get_option('start_of_week') == "3"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/wed_calendar_th.gif) no-repeat;}
<?php
}
if (get_option('start_of_week') == "4"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/thu_calendar_th.gif) no-repeat;}
<?php
}
if (get_option('start_of_week') == "5"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/fri_calendar_th.gif) no-repeat;}
<?php
}
if (get_option('start_of_week') == "6"){
?>
#wp-calendar thead tr  {background:url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/calendar-header-img/images/sat_calendar_th.gif) no-repeat;}
<?php
}
?>
</style>
<!--[if IE]>
<style>
#wp-calendar thead tr  {
	text-indent:0px;
	background: url() no-repeat;
}/* End Calendar */
</style>
<![endif]-->


<?php
}
add_action('wp_head', 'calendar_header_img');
?>