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

		<?php the_posts_navigation(); ?>
		
			<header class="page-header">

			</header>
			<section class="product-info-container">
            <h2>Shop Stuff</h2>
            <?php
            $terms = get_terms(array(
                'taxonomy'   => 'product_type',
                'hide_empty' => 0,
            ));
            if (!empty($terms)):
                ?>
            <div class="product-type-blocks">
                <?php foreach ($terms as $term):
                    ?>
                <div class="product-type-block-wrapper">

                    <p>
                        <a href="<?php echo get_term_link($term); ?>">
                            <?php echo $term->name; ?></a>
                    </p>
                </div>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
        </section>
			<section class="product-icons">
				<?php /* Start the Loop */ ?>
				
				
				<?php while ( have_posts() ) : the_post(); ?>
				<article>
					<a href="<?php echo esc_url(get_permalink())?>">
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