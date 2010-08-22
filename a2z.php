<?php
/*
Plugin Name: Ayar Unicode Converter
Plugin URI: http://www.ayarunicodegroup.com/
Description: Automatic unicode font converter for ayar and zawgyi font for burmese language. <a href="http://www.ayarunicodegroup.com/">Documentation</a>.
Author: Sithu Thwin
Author URL: http://www.ayarunicodegroup.com/
Version: 1.0
*/
/*Language loader*/
load_plugin_textdomain('a2z','/wp-content/plugins/ayar2zawgyi/languages/');

// Converts Latin digits to Burmese ones
function latin_2_burmese($number) {
  $latin = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9'); 
  $burmese = array('​၀', '​၁', '​၂', '​၃', '​၄', '​၅', '​၆', '​၇', '​၈', '​၉');
  return str_replace($latin, $burmese, $number);
}

if (get_bloginfo('language') == 'my-MM' ){
foreach ( array('number_format_i18n','date_i18n','mysql2date','date_format','the_date','the_date_xml','current_time','get_date_from_gmt','get_the_time','iso8601_to_datetime','forum_date_format') as $filters ) {
	add_filter( $filters, 'latin_2_burmese' );
}
}

function a2z_head() {
?>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />

<style type='text/css'>

/* Created by: Sithu Thwin (frisithu82@gmail.com) on 2/25/2010 -- */
@font-face {
  font-family: 'Ayar';
  src: url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.eot');
  src: local('Ayar'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.woff') format('woff'),
    url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.ttf') format('opentype'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.svgz#webfontsnhuR0D6') format('svg'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.svg#webfontsnhuR0D6') format('svg');
	font-weight: normal;
	font-style: normal;
    unicode-range:U+1000-1097;
    text-rendering: optimizeLegibility;
  }
@font-face {
  font-family: 'Ayar Kasone';
  src: url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar.eot');
  src: local('Ayar Kasone'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_kasone.woff') format('woff'),
    url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_kasone.ttf') format('opentype'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_kasone.svgz#webfonty96Ct56S') format('svg'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_kasone.svg#webfonty96Ct56S') format('svg');
	font-weight: bold;
	font-style: normal;
    unicode-range:U+1000-1097;
    text-rendering: optimizeLegibility;
  }
@font-face {
  font-family: 'Ayar Takhu';
  src: url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_takhu.eot');
  src: local('Ayar Takhu'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_takhu.woff') format('woff'),
    url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_takhu.ttf') format('opentype'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_takhu.svgz#webfontPga0uKRT') format('svg'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_takhu.svg#webfontPga0uKRT') format('svg');
	font-weight: bold;
	font-style: normal;
    unicode-range:U+1000-1097;
    text-rendering: optimizeLegibility;
  }
@font-face {
  font-family: 'Ayar Juno';
  src: url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_juno.eot');
  src: local('Ayar Juno'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_juno.woff') format('woff'),
    url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_juno.ttf') format('opentype'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_juno.svgz#webfontn0PFpV0z') format('svg'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_juno.svg#webfontn0PFpV0z') format('svg');
	font-weight: bold;
	font-style: normal;
    unicode-range:U+1000-1097;
    text-rendering: optimizeLegibility;
  }
@font-face {
  font-family: 'Ayar Wazo';
  src: url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_wazo.eot');
  src: local('Ayar Wazo'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_wazo.woff') format('woff'),
    url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/Ayar_Wazo.ttf') format('opentype'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_wazo.svgz#webfontFNSUhG79') format('svg'),
	url('<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ayar_wazo.svg#webfontFNSUhG79') format('svg');
	font-weight: normal;
	font-style: normal;
    unicode-range:U+1000-1097;
    text-rendering: optimizeLegibility;
  }

    @font-face {
    font-family: Zawgyi-One;
    font-style:  oblique;
    font-weight: 700;
    src: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ZAWGYIO0.eot);
  }
    @font-face {
    font-family: Zawgyi-One;
    font-style:  normal;
    font-weight: normal;
    src: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ZAWGYIO3.eot);
  }
  @font-face {
    font-family: Zawgyi-One;
    font-style:  normal;
    font-weight: 700;
    src: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ZAWGYIO2.eot);
  }
  @font-face {
    font-family: Zawgyi-One;
    font-style:  oblique;
    font-weight: normal;
    src: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/ZAWGYIO1.eot);
  }
  @font-face {
    font-family: Zawgyi-One;
    src: url(<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/eot/Zawgyi-One.ttf) ; /* TTF file for CSS3 browsers */
    unicode-range:U+1000-1097;
  }
*{
font-family: Ayar, Ayar Wazo, Ayar Takhu, Ayar Juno;
}
html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,{font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
textarea,input[type="text"],input[type="password"],input[type="file"],input[type="button"],input[type="submit"],input[type="reset"],select, option{ font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
h1, h2, h3, h4 { font-family:Ayar Wazo,Ayar Juno, Ayar Kasone, Ayar Takhu, Ayar; text-rendering: optimizeLegibility;}
.wrap h2{ font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}

p { font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
body.mceContentBody { font-family:13px/19px Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
pre { font-family:12px/18px AyarAyar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
.otf {
	font-size: 12px;
	padding: 2px 12px 2px;
	background-color: #0081A6;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
   position:fixed;
	bottom: 0px;
	right: 110px;
	width: 80px;
	z-index:10000000;
}

#bm {
-moz-border-radius-bottomleft:10px;
-moz-border-radius-bottomright:10px;
background-color:#0081A6;
font-size:12px;
margin-right:10px;
right: 0px;
padding:2px 10px;
position:absolute;
top:0;
}
.otf .selected {
	text-decoration: underline;

}
.otf a, #bm a {
	text-decoration: none;
	color:white;
	font-family: Trebuchet MS, Helvetica, sans-serif;
	font-weight: bold;
}
#bm a {
	font-weight: normal;
}
#bm a:link {
	text-decoration: underline;
}

.btot{   
font-size: 12px;
	padding: 2px 12px 2px;
	background-color: #0081A6;
	-moz-border-radius-topleft: 10px;
	-moz-border-radius-bottomright: 10px;
	-webkit-border-top-left-radius: 10px;
	-webkit-border-bottom-right-radius: 10px;
    position:fixed;
	bottom: 0px;
	left: 0px;
	width: 80px;
	z-index:10000000;
	}

.btot a{
    text-decoration: none;
	color:white;
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
	font-weight: bold;
	}
.button-primary {
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}
.button-secondary {
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}
.button{
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}
select{
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}
#searchsubmit{
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}
#adminmenu a{
	font-family: Ayar, Trebuchet MS, Helvetica, sans-serif;
}

	/*this is end of burmese css from a2z*/
	</style>
<!--[if IE]>
<style type='text/css'>
a{ font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
#adminmenu .wp-submenu a{font:normal 11px/18px Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
#adminmenu a.menu-top,#adminmenu .wp-submenu-head{font:normal 13px/18px Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
#footer,#footer a{font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
p.help,p.description,span.description,.form-wrap p{font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
#utc-time,#local-time{font-family:Ayar,Ayar Juno,Ayar Takhu, Ayar Wazo, Tahoma, Arial, Helvetica, serif; text-rendering: optimizeLegibility;}
</style>
<![endif]-->
<script type="text/javascript" src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/js/zgayar.mini.js"></script>
<script type="text/javascript" src="<?php bloginfo('wpurl'); ?>/wp-content/plugins/zawgyi-one-to-ayar-unicode/js/ayarzg.mini.js"></script>
<script type="text/javascript">

original_content_font = 'ayar';
display_content_font = 'ayar';

function init() {
// quit if this function has already been called
if (arguments.callee.done) return;

// flag this function so we don't do the same thing twice
arguments.callee.done = true;

if (original_content_font == 'zawgyione'){
toA();
}
else if (original_content_font == 'ayar'){
toZ();
}
if (display_content_font == 'zawgyione'){
toZ();
}
else if (display_content_font == 'ayar'){
toA();
}
};

/* for Mozilla /
if (document.addEventListener) {
document.addEventListener("DOMContentLoaded", init, false);
}

/ for Internet Explorer /
/*@cc_on @*/
/*@if (@_win32)
document.write("<script defer src=ie_onload.js><"+"/script>");
/*@end @*/

/ for other browsers */
window.onload = init;
</script>

<script>
function stoperror(){
return true
}
window.onerror=stoperror
</script>
<?php
}
add_action('wp_head', 'a2z_head');
add_action('admin_head', 'a2z_head');
add_action('login_head', 'a2z_head');
add_action('register_head', 'a2z_head');

 function a2z_footer() {
?>
<!-- /*a2z footer*/ -->

<div class="otf">
<a id="A" class="selected" href="javascript:" onclick="if 
(this.className=='selected')return;toA();this.className='selected';document.getElementById('Z').className=''">
AYAR FONT</a>
</div>
<div class="otf" style="right: 0px;">
<a id="Z" href="javascript:" onclick="if 
(this.className=='selected')return;toZ();this.className='selected';document.getElementById('A').className=''">

ZAWGYI FONT</a>
</div>
<?php
}
add_action('wp_footer', 'a2z_footer');
add_action('login_form', 'a2z_footer');
add_action('register_form', 'a2z_footer');
add_action('retrieve_password', 'a2z_footer');
add_action('password_reset', 'a2z_footer');
add_action('lostpassword_form', 'a2z_footer');
add_action('admin_footer', 'a2z_footer');

?>