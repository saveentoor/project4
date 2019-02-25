<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>Shop Stuff</h1>

			</header><!-- .page-header -->
			<section class="product">
           <?php $product_types=get_terms('product_type');?>
           <?php foreach ( $product_types as $term ) : setup_postdata( $term ); ?>
              <div>
                 <a href=<?php echo get_term_link($term)?>> <?php echo $term->name?></a>
              </div>
           <?php endforeach; wp_reset_postdata(); ?>
		</section>
		<section class="product-icons">
			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<article>
				<?php
					get_template_part( 'template-parts/content', 'products' );
				?>
				</article>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>