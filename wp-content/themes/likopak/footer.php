<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package likopak
 */

?>

<div class="footer-wrapper">
		<div class="footer">
			<div class="footer-list footer-nav">
				<ul>
					<?php wp_nav_menu(array("theme_location" => "menu", "container" => false)); ?></div>
				</ul>
				
				<div class="footer-list map">
				<a  href="#">Украина, Днепропетровская область, г.Днепропетровск, ул.Светлова, 28</a>
			</div>
			<div class="footer-list skype">
				<a  href="#">likopak</a>
			</div>
			<div class="footer-list mail">
				<a  href="#">likopak@gmail.com</a>
			</div>
			<div class="footer-list phone">
				<ul>
					<li>+380 (67) 382-35-88</li>
					<li>+380 (67) 382-35-88</li>
					<li>+380 (67) 382-35-88</li>
					<li>+380 (67) 382-35-88</li>
				</ul>
			</div>
				
			</div>
			
		</div>
	</div>

<?php wp_footer(); ?>

</body>
</html>
