<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Z_Networks
 */

get_header();
?>
<style>body {background:#f1f1f1!important;} .pLink:hover {text-decoration:none;} .btn-cust-orange:visited {color:#fff;}</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( is_home() ): ?>
		<div class="bd-example">
			<div id="headerSlider" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
		<?php 
		$args = array( 'category' => '2' );
		$myposts = get_posts( $args );
		$countx = 0;
		foreach( $myposts as $post ) {  setup_postdata($post);  $postId = $post->ID; $post_thumbnail_id = get_post_thumbnail_id( $post ); $image = wp_get_attachment_image_url( $post_thumbnail_id, 'full'); ?>
		
				  <div class="carousel-item <?php if($countx == 0) { echo 'active';}?>" style="background-image:url(<?php echo $image;?>);  background-size:cover; background-position:center; ">
					
						<div class="align-baseline text-center position-absolute fixed-bottom py-3 text-white" style="background: rgb(0,0,0);background: linear-gradient(180deg, rgba(0,0,0,0.5046393557422969) 0%, rgba(0,0,0,1) 100%);">
						<h1 class=" superh1"><?php echo $post->post_title;?></h1>
						<p class="text-uppercase"><?php echo $post->post_excerpt;?></p>
						<p class="button-custom order-lg-last mb-0 d-md-block"><a href="<?php the_permalink(); ?>" class="btn btn-primary py-2 px-3" style="color:#fff;">Read More</a></p>
						</div>
				  </div>
		<?php $countx++;}?>
		
				</div>
				    <a class="carousel-control-prev d-none d-md-flex" href="#headerSlider" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-none d-md-flex" href="#headerSlider" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
			</div>
		</div>
		<?php endif;?>
			<div class="container">
				<div class="row py-2">
					<div class="col">
						<?php
						if ( have_posts() ) :
							if ( is_home() && ! is_front_page() ) :
								?>
								
								<header>
									<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
								</header>
								<?php
							endif;
							/* Start the Loop */
							$count = 0;
							while ( have_posts() ) :
								the_post();

								/*
								 * Include the Post-Type-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
								 */
								 if($count == 0) {
									 echo '<div class="row py-2">';
								 } 
								echo '<div class="col-md-4 box"><div class="inner bg-white h-100 p-2">';
									get_template_part( 'template-parts/content-home', get_post_type() );
								echo '</div></div>';
								$count++;
								if($count > 2) {
									echo '</div>';
									$count = 0;
								}
							endwhile;
							echo '<div class="clearfix"></div>';
							echo '<div class="row"><div class="col">';
							the_posts_navigation();
							echo '</div></div>';
						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>
					</div>
					</div>
					
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
