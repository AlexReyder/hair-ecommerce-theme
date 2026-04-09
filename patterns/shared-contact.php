<?php
/**
 * Title: Nice Hair / Contact
 * Slug: nice-hair/shared-contact
 * Categories: nice-hair-shared
 * Inserter: yes
 */

$map_image_url = esc_url( get_template_directory_uri() . '/assets/images/contact-map.png' );
$arrow_url     = esc_url( get_template_directory_uri() . '/assets/images/arrow-mini.svg' );
?>

<!-- wp:group {"tagName":"section","className":"nh-contact","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
<section class="wp-block-group nh-contact">
	<!-- wp:group {"className":"nh-contact__shell","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
	<div class="wp-block-group nh-contact__shell">
		<!-- wp:group {"className":"nh-contact__top","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-contact__top">
			<!-- wp:group {"className":"nh-contact__info","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-contact__info">
				<!-- wp:heading {"level":2,"className":"nh-contact__title","lock":{"move":true,"remove":true}} -->
				<h2 class="nh-contact__title">Didn't find your question here?</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"nh-contact__description","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__description">We're always <strong>online 10:00-22:00</strong> — message us on WhatsApp and we'll help you out.</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"nh-contact__actions","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-contact__actions">
				<!-- wp:paragraph {"className":"nh-text-link nh-contact__link","lock":{"move":true,"remove":true}} -->
				<p class="nh-text-link nh-contact__link"><a href="https://wa.me/971585988409">[ ASK ON WHATSAPP ]</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"nh-contact__or","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__or">OR</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"nh-contact__phone","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__phone"><a href="tel:+971585988409">+971 58 598 8409</a></p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"nh-contact__or","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__or">OR</p>
				<!-- /wp:paragraph -->

				<!-- wp:paragraph {"className":"nh-contact__address","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__address">VISIT OUR SHOWROOM IN AL SUFOUH, DUBAI</p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"nh-contact__map","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-contact__map">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-contact__map-image","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-contact__map-image">
				<img src="<?php echo $map_image_url; ?>" alt="Map — Al Sufouh, Dubai" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nh-contact__map-link","lock":{"move":true,"remove":true}} -->
			<p class="nh-contact__map-link"><a href="https://maps.google.com/?q=Al+Sufouh+Dubai">[ VIEW ON MAP ]<img class="nh-contact__map-arrow" src="<?php echo $arrow_url; ?>" alt="" /></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->
