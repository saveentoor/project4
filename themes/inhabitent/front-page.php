<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent
 */

get_header(); ?>
<div class="home-page-image"></div>

<?php if (have_posts()) : while (have_posts()) : the_post();
	the_content();
	endwhile;
	else : ?>
	<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>
 

	<?php $product_types = get_terms('product_type', array(
		'hide_empty' => false,
		'orderby' => 'name',
		'order' => 'ASC'
   )); ?>
   <div class="shop-stuff-info">
	<h2 class="heading-show-stuff">SHOP STUFF</h2>
		<div class="product-types-container">
			<?php foreach ($product_types as $product) : ?>
			<div class="product-type-item">
         <img src=<?php echo get_template_directory_uri().'/images/product-type-icons/'.$product->slug . '.svg'?>>
				<p>
					<?php echo $product->description ?>
				</p>
				<input type="button" value="<?php echo $product->name ?> Stuff" class="homebutton" id="go-to-post" 
onClick="document.location.href='<?php echo esc_url( get_term_link($product))?>'" />
			
			</div>
			<?php endforeach ?>
		</div>
</div>

   

<?php $product_posts=inhabitent_get_latest_posts();?>
<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>

   <?php get_template_part( 'template-parts/content' ); //display content to test ?>
   <a href="<?php the_permalink(); ?>">Read me</a>
<?php endforeach; wp_reset_postdata(); ?>

<?php get_footer(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
