<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package likopak
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("products"); ?>>
	<a href="<?php the_permalink(); ?>" >
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
			
		else :
			the_title( '<h1 class="entry-title">', '</h1>' );
	
			the_post_thumbnail( 'medium' ); 
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
</a>

<div class="products-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Подробнее %s <span class="meta-nav">&rarr;</span>', 'likopak' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'likopak' ),
				'after'  => '</div>',
			) );
		?>
</div>

	<footer class="entry-footer">
	
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
