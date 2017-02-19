<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="contactInfo">
			<h3> Contact Info</h3>
				<p><i class="fa fa-envelope-o" aria-hidden="true"></i> info@inhabitent.com</p>
				<p><i class="fa fa-phone" aria-hidden="true"></i> Phone number here</p>
				<p>
				<span><i class="fa fa-facebook-square" aria-hidden="true"></i></span>
				<span><i class="fa fa-twitter-square" aria-hidden="true"></i></span>
				<span><i class="fa fa-google-plus-square" aria-hidden="true"></i></span>
				</p>
		</div>
		<div class="businessHour"> 
			<h3>Business Hours</h3>
				<p>Monday-Friday: 9am to 5pm</p>
				<p>Saturday: 10am to 2pm</p>
				<p>Sunday: Closed</p>
		</div>
		
		<div class="footerLogo">
			<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
		</div>

		<div class="copyright">
			<p> Copyright @ 2016m inhabitent</p>
		</div>

	</footer><!-- #colophon -->
		<?php wp_footer(); ?>

	</body>
</html>
