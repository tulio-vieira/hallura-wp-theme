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
		<span>© 2025 Hallura. All rights reserved</span>
		<span>The HLR dermal fillers are not commercially available in the USA</span>
		<span class="social-media" style="margin-top:12px">
			<a href="https://www.linkedin.com/company/hallura" target="_blank" class="icofont icofont-linkedin"></a>
		</span>
	</span>
</div><!-- .site-info -->
