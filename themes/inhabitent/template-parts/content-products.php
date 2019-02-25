

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
        <?php the_title( '<p class="product-title">', '</p>' ); ?>
 <p><?php echo CFS()->get( 'product_price' ); ?></p>

    <footer class="product-footer">
        <?php red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post- -->
