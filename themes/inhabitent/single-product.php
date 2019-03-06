<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent
 */

get_header(); ?>

<div id="primary" class="content-area content-single-product">
		<main id="main" class="site-main" role="main">
		
		<?php while ( have_posts() ) : the_post(); ?>
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
		
		<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

		<p class="single-price">
            <?php echo CFS()->get('product_price'); ?>
        </p>
	

	<div class="entry-content-single-shop">
		<?php the_content(); ?>
		<div class="shop-button">
		
            <button class="facebook"><i class="fab fa-facebook-f"></i>LIKE</button>
            <button class="facebook"> <i class="fab fa-twitter"></i>TWEET</button>
            <button class="facebook"><i class="fab fa-pinterest-p"></i>PIN</button>
        

</div>
	</div><!-- .entry-content -->

	
</article><!-- #post-## -->
			
		
		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
