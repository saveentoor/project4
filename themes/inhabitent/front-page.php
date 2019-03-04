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

<section class="front-page-journal">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );
    $journal = get_posts($args);
    if (!empty($journal)): ?>
	<h2>Inhabitent Journal</h2>
	
    <ul>
        <?php foreach ($journal as $post): setup_postdata($post); ?>
        <li> <?php if (has_post_thumbnail()): ?>

            <div class="thumbnail-wrapper">
                <?php the_post_thumbnail('large'); ?>
            </div>
            <?php endif; ?>

            <div class="entry-meta-wrapper">
                <div class="entry-meta">
                    <?php red_starter_posted_on(); ?> /
                    <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> /
                    <?php red_starter_posted_by(); ?>
                </div>

                <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

                <a class="green-button" href="<?php the_permalink(); ?>">Read Entry</a>
            </div>
        </li>

        <?php endforeach;
    wp_reset_postdata(); ?>
    </ul>

    <?php endif ?>
</section>





<?php get_footer(); ?>

		</main><!-- #main -->
	</div><!-- #primary -->



<?php get_footer(); ?>
