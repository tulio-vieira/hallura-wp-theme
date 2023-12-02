<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		<span>© 2024 Hallura. All rights reserved</span>
		<span class="social-media">
			<a href="#" class="icofont icofont-facebook"></a>
			<a href="#" class="icofont icofont-twitter"></a>
			<a href="#" class="icofont icofont-behance"></a>
			<a href="#" class="icofont icofont-dribble"></a>
			<a href="#" class="icofont icofont-linkedin"></a>
		</span>
	</span>
</div><!-- .site-info -->
