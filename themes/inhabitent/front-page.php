<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<?php $product_posts=inhabitent_get_latest_posts();?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
   <?php get_template_part( 'template-parts/content' ); //display content to test ?>
   <a href="<?php the_permalink(); ?>">Read me</a>
<?php endforeach; wp_reset_postdata(); ?>

<?php get_footer(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
