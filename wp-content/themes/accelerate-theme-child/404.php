<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header();?>
<div id="container-404">
         <div id="dohimg">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/doh.jpg"/>
         </div>
         <div id="foh">
         <p>It's a 4-O-FOH!!</p>
        
         </div>
         <div class=homergif_text>
         <p>i.e the page you are looking for has gone missing...</p>
         <p>(click below to go back to the home page)</p>
         <div id=homergif>
         <a href="<?php echo site_url('') ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Simpsonhome.gif"/></a>
         </div>
</div>
   </div>





