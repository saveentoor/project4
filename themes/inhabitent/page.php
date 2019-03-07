<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent
 */

get_header(); ?>
	
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
	<div class="find-us-page">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

	 <form action="find-us" method="post" class="find-us">

<div class="info">
    <p class="name"><label>Name <span class="required">*</span></label><span class="your-name"><input type="text" name="your-name" value="" size="40"></span> </p>
    <p class="email"><label>Email <span class="required">*</span></label><span class="your-email"><input type="email" name="your-email" value="" size="40"></span> </p>
    <p class="subject"><label>Subject <span class="required">*</span></label><span class="your-subject"><input type="text" name="your-subject" value="" size="40"></span> </p>
    <p class="message"><label>Message <span class="required">*</span></label><span class="your-message"><textarea name="your-message" cols="40" rows="10"></textarea></span> </p>
    <input type="submit" value="Submit" class="submit">
</div>
</form> 
</div>
</main>

<?php get_sidebar(); ?>
	</div> 
<?php get_footer(); ?>
