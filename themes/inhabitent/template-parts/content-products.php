
<div class="image-wrapper">
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'medium' ); ?>
        <?php endif; ?>
       
<dl>
  <?php the_title( '<p class="product-title">', '</p>' ); ?>
  <dd><?php echo CFS()->get( 'product_price' ); ?></dd>
</dl>
       
</div>
    <footer class="product-footer">
        <?php red_starter_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post- -->
