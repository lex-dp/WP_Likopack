<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package likopak
 */

get_header(); ?>

		<div class="slide-bg">
			<h1 id="textShow"><?php bloginfo("name"); ?></h1>
			<div class="buttons">
				<a  href="<?php get_category_link( 7 ); ?>" id="linkShow"><?php bloginfo("description"); ?></a>
			</div>
		</div>
			<div class="slider-wrapper">
				<h2>Топ продаж:</h2>
				<div class="header-slider">
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/1.jpg" alt="1"></a></div>
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/2.jpg" alt="2"></a></div>
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/3.jpg" alt="3"></a></div>
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/4.jpg" alt="4"></a></div>
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/5.jpg" alt="5"></a></div>
					<div><a  href="<?php bloginfo("template_directory");?>/#"><img  src="<?php bloginfo("template_directory");?>/images/6.jpg" alt="6"></a></div>
				</div>
			</div>

	<div class="content-wrapper">
		<div class="content">
			<div class="content-left">
				<h1>Почему Ликопак?</h1>			
				<div class="content-list">
					<span  class="fa road"></span>
					<p>Ликопак - это частное предприятие существующее на рынке Украины более 10 лет.</p>
				</div>					
				<div class="content-list">
					<span  class="fa flag"></span>
					<p>Отличное соотношение "Цена/Качество" - именно по этой причине большинство наших клиентов работают с нами по сей день</p>
				</div>					
				<div class="content-list">
					<span  class="fa heart"></span>
					<p>Мы всегда готовы подержать наших клиентов в трудное время и найти компромис</p>
				</div>					
				<div class="content-list">
					<span  class="fa rocket"></span>
					<p>Поставка товаров и обработка заявок происходит в максимально короткие сроки</p>
				</div>						
				<div class="content-list">
					<span  class="fa smile"></span>
					<p>С нами работать - одно удовольствие.</p>
				</div>				
			</div>			
			<div class="content-right">
				<h1>Принцип работы:</h1>			
				<p>Основным принципом нашей компании является - удовлетворить потребности наших клиентов, будь то просто консультация или же непосредственная продажа.</p>
				<p>Мы всегда рады помочь в той или инной ситуации именно по этой причине наши большинство наших клиентов к нам возвращаются говоря при этом "С вами работать одно удовольствие".</p>
				<p>Основным принципом нашей компании является - удовлетворить потребности наших клиентов, будь то просто консультация или же непосредственная продажа.</p>
				<p>Мы всегда рады помочь в той или инной ситуации именно по этой причине наши большинство наших клиентов к нам возвращаются говоря при этом "С вами работать одно удовольствие".</p>
				<p>Мы всегда рады помочь в той или инной ситуации именно по этой причине наши большинство наших клиентов к нам возвращаются говоря при этом "С вами работать одно удовольствие".</p>
			</div>
		</div>
	</div>


<?php
get_sidebar();
get_footer();
