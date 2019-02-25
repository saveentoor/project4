<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent
 */

?>
</div>
<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="contact-info container">
		<h3>Contact Info</h3>
		<div class="contact-content">
			<p><i class ="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
			<p><i class ="fas fa-phone"></i><a href="tel:7784567891">778-456-7891</a></p>
				
			<p><span><i class="fab fa-facebook-square"></i></span>
			<span><i class="fab fa-twitter-square"></i></span>
			<span><i class="fab fa-google-plus-square"></i></span></p>
		</div>

	</div>
	<div class="business-hours container">
		<h3>Business Hours</h3>				
			<p><strong>Monday-Friday: </strong> 9am to 5pm	</p>
			<p><strong>Saturday: </strong> 10am to 2pm</p>
			<p><strong>Sunday: </strong> Closed</p>				
	</div>
	<div class="logo container">
		<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/inhabitent-logo-text.svg" /></a>
	</div>
				
	<div class="copy-right">
			<span>Copyright &copy; 2019 Inhabitent</span>
	</div> 
</footer>
				
<?php wp_footer(); ?>

</body>
</html>
