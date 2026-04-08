<?php
/**
 * Title: Nice Hair / Home Hero
 * Slug: nice-hair/home-hero
 * Categories: nice-hair-home
 * Inserter: yes
 */

$hero_image_url = esc_url( get_template_directory_uri() . '/assets/images/home-hero.jpg' );
?>

<!-- wp:cover {"url":"<?php echo $hero_image_url; ?>","dimRatio":40,"customOverlayColor":"#1c1c1c","minHeight":100,"minHeightUnit":"vh","isDark":false,"align":"full","focalPoint":{"x":0.5,"y":0.5},"className":"nh-home-hero","lock":{"move":true,"remove":true}} -->
<div class="wp-block-cover alignfull is-light nh-home-hero" style="min-height:100vh">
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#1c1c1c"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo $hero_image_url; ?>" style="object-position:50% 50%" data-object-fit="cover" data-object-position="50% 50%" />
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"className":"nh-home-hero__shell","lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-home-hero__shell">

			<!-- wp:group {"className":"nh-home-hero__top","lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-home-hero__top">
				<!-- wp:group {"className":"nh-home-hero__contact","lock":{"move":true,"remove":true}} -->
				<div class="wp-block-group nh-home-hero__contact">
					<!-- wp:paragraph {"className":"nh-home-hero__phone"} -->
					<p class="nh-home-hero__phone"><a href="tel:+971585988409">+971 58 598 8409</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"nh-home-hero__address"} -->
					<p class="nh-home-hero__address">Al Noor st, Al Sufouh,<br>Al Sufouh 1, Dubai</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"nh-home-hero__content","lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-home-hero__content">

				<!-- wp:group {"className":"nh-home-hero__aside","lock":{"move":true,"remove":true}} -->
				<div class="wp-block-group nh-home-hero__aside">
					<!-- wp:heading {"level":2,"className":"nh-home-hero__secondary-title"} -->
					<h2 class="nh-home-hero__secondary-title">One Brand.<br>Two Expert Directions.</h2>
					<!-- /wp:heading -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"nh-home-hero__main","lock":{"move":true,"remove":true}} -->
				<div class="wp-block-group nh-home-hero__main">
					<!-- wp:heading {"level":1,"className":"nh-home-hero__title"} -->
					<h1 class="nh-home-hero__title">/ Full-Cycle Hair Brand — Production, Shop &amp; Salon</h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"nh-home-hero__text"} -->
					<p class="nh-home-hero__text">A professional hair extensions salon and a premium hair shop — created to give you freedom of choice. Explore services or select ready-to-order products in one place.</p>
					<!-- /wp:paragraph -->

					<!-- wp:buttons {"className":"nh-home-hero__actions"} -->
					<div class="wp-block-buttons nh-home-hero__actions">
						<!-- wp:button {"className":"nh-cta-link"} -->
						<div class="wp-block-button nh-cta-link"><a class="wp-block-button__link wp-element-button" href="#">VISIT SALON</a></div>
						<!-- /wp:button -->

						<!-- wp:button {"className":"nh-cta-link"} -->
						<div class="wp-block-button nh-cta-link"><a class="wp-block-button__link wp-element-button" href="#">VISIT SHOP</a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

			<!-- wp:group {"className":"nh-home-hero__bottom","lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-home-hero__bottom">

				<!-- wp:group {"className":"nh-home-hero__features","lock":{"move":true,"remove":true}} -->
				<div class="wp-block-group nh-home-hero__features">

					<!-- wp:group {"className":"nh-home-hero__feature","lock":{"move":true,"remove":true}} -->
					<div class="wp-block-group nh-home-hero__feature">
						<!-- wp:paragraph {"className":"nh-home-hero__feature-text"} -->
						<p class="nh-home-hero__feature-text">In-house hair<br>production</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"nh-home-hero__feature","lock":{"move":true,"remove":true}} -->
					<div class="wp-block-group nh-home-hero__feature">
						<!-- wp:paragraph {"className":"nh-home-hero__feature-text"} -->
						<p class="nh-home-hero__feature-text">14+ years of<br>expertise</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"nh-home-hero__feature","lock":{"move":true,"remove":true}} -->
					<div class="wp-block-group nh-home-hero__feature">
						<!-- wp:paragraph {"className":"nh-home-hero__feature-text"} -->
						<p class="nh-home-hero__feature-text">Certified<br>international stylists</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

					<!-- wp:group {"className":"nh-home-hero__feature","lock":{"move":true,"remove":true}} -->
					<div class="wp-block-group nh-home-hero__feature">
						<!-- wp:paragraph {"className":"nh-home-hero__feature-text"} -->
						<p class="nh-home-hero__feature-text">We’re open daily:<br>10 AM – 10 PM</p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->

				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"nh-home-hero__socials","lock":{"move":true,"remove":true}} -->
				<div class="wp-block-group nh-home-hero__socials">
					<!-- wp:paragraph {"className":"nh-home-hero__social"} -->
					<p class="nh-home-hero__social"><a href="#">Telegram</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"nh-home-hero__social"} -->
					<p class="nh-home-hero__social"><a href="#">Instagram</a></p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"className":"nh-home-hero__social"} -->
					<p class="nh-home-hero__social"><a href="#">WhatsApp</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->