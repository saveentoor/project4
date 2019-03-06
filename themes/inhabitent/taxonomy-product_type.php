<?php
/**
 * The template for displaying taxonomy pages.
 *
 * @package Inhabitent
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php if ( have_posts() ) : ?>

		<?php the_posts_navigation(); ?>
		
			<header class="page-header">

			</header>
			<section class="product-info-container">
			<h1 class="page-title">
        <?php single_cat_title(); ?>
    </h1>
	<?php
    the_archive_description('<div class="taxonomy-description">', '</div>');
    ?>
        </section>
			<section class="product-icons">
				<?php /* Start the Loop */ ?>
				
				
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<a href="<?php echo get_permalink()?>">
					<?php
					get_template_part( 'template-parts/content', 'products' );
					?>
					</a>
			</article>
				<?php endwhile; ?>


		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>