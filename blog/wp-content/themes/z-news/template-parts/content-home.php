<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Z_Networks
 */
$link = get_permalink();
?>
<article id="post-<?php the_ID(); ?>" class="bg-white">
	<div style="width:100%; height:120px; overflow:hidden;">
	<?php z_networks_post_thumbnail(); ?>
	</div>
	<div>
		<?php
		if(is_home()) {
			
			the_title( '<a href="'.$link.'" class="pLink"><h6 class="entry-title text-center text-white p-2" style="background:#5692CD; width:100%;">', '</h1></a>' );
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
