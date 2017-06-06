<?php   
	/*Start of Upload scripts and styles*/
		
	function load_styles_scripts() {
		wp_enqueue_style("slick", get_template_directory_uri() . "/plugins/slick/slick/slick.css");
		wp_enqueue_style("slick-theme", get_template_directory_uri() . "/plugins/slick/slick/slick-theme.css");
		wp_enqueue_style("fotorama-theme", "http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css");
		wp_enqueue_style("map", get_template_directory_uri() . "/mapUkraine/css/jqvmap.css");
		wp_enqueue_style("style", get_template_directory_uri() . "/style.css");
		wp_enqueue_script("jquery-1.11.3.min.js", get_template_directory_uri() . "/js/jquery-1.11.3.min.js");
		wp_enqueue_script("slick", get_template_directory_uri() . "/plugins/slick/slick/slick.min.js");
		wp_enqueue_script("settingsOfSlickSlider", get_template_directory_uri() . "/js/settingsOfSlickSlider.js");
		wp_enqueue_script("fotorama-settings",  "http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js");
		wp_enqueue_script("settingsOfFotoramaSliderForProductsNamesPages", get_template_directory_uri() . "/js/settingsOfFotoramaSliderForProductsNamesPages.js");
		wp_enqueue_script("map-script", get_template_directory_uri() . "/mapUkraine/js/jqvmap.js");
		wp_enqueue_script("ukraine", get_template_directory_uri() . "/mapUkraine/js/ukraine.ru.js");
		wp_enqueue_script("settings-map", get_template_directory_uri() . "/js/settingsOfUkraineMap.js");
		wp_enqueue_script("scripts", get_template_directory_uri() . "/js/scripts.js");
	}	

		add_action("wp_enqueue_scripts", "load_styles_scripts");
	
	/*End of Upload scripts and styles*/
	
	if (function_exists('add_theme_support')) {
		add_theme_support('menus');
	}
	
	register_nav_menu("menu", "Меню");
	
	add_theme_support("post-thumbnails");
	
?>

