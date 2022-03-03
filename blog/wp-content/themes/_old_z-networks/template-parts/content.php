<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Z_Networks
 */

?>
<div class="container">
<article id="post-<?php the_ID(); ?>" class="py-3">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h2 class="entry-title text-center">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title text-center"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				z_networks_posted_on();
				z_networks_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php z_networks_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		if(is_home()) {
			echo the_excerpt();
		} else {
			echo '<blockquote><i>';
			the_excerpt();
			echo '</i></blockquote> <hr>';
			the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'z-networks' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
			) );
		}
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'z-networks' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
</div>
<br/>
