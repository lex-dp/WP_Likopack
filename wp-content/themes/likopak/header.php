<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package likopak
 */

?>	<!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
  <title><?php bloginfo("name"); wp_title(); ?></title>
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet"  href="http://fortawesome.github.io/Font-Awesome/assets/font-awesome/css/font-awesome.css">  

  
  <?php wp_head(); ?>
 </head>
 <body>

		<div class="navigation-wrapper">
		<?php get_search_form(); ?> 
			<div class="navigation">
				<div class="nav-left">
					<a  href="<?php echo home_url(); ?>"><img  src="<?php bloginfo("template_directory");?>/images/logo.png" alt="logo"></a>
				</div>
				<div class="nav-right">
					<?php wp_nav_menu(array("theme_location" => "menu", "container" => false)); ?></div>
			</div>
		</div>	