<?php

declare(strict_types=1);

function nice_hair_register_patterns(): void
{
    if (! function_exists('register_block_pattern')) {
        return;
    }

    $faq_items = [
        ['question' => 'What method of extensions do you use in the salon?', 'answer' => 'We use safe and invisible hot keratin (Italian) technique.', 'is_open' => '1'],
        ['question' => 'Do you offer consultations before booking a salon appointment?', 'answer' => 'Yes, we provide free consultations to help you choose the right hair, method, and volume before your appointment.', 'is_open' => '0'],
        ['question' => 'How long does the hair last?', 'answer' => 'With proper care, our hair can last from 6 to 12 months or longer, depending on the type of hair and usage. We provide detailed care recommendations to help maintain the quality and appearance of the hair.', 'is_open' => '0'],
        ['question' => 'Where is your hair sourced from?', 'answer' => 'Our hair is ethically sourced from Russia and CIS countries. We carefully select raw materials to ensure natural texture, durability, and premium quality.', 'is_open' => '0'],
        ['question' => 'How long does shipping take?', 'answer' => "Shipping time depends on your location. International orders are shipped via DHL, and delivery timelines are shared individually after order confirmation, but usually timeframes are around 2\u201310 business days.", 'is_open' => '0'],
        ['question' => 'What guarantees do you provide?', 'answer' => 'We are confident in our skills and offer a guarantee for our services so that you can be calm about the result. If the extended capsules require adjustment within 14 days after the procedure, we will fix it free of charge. Regarding purchasing in our online shop, you can return your hair within a week if the color/length/texture does not suit you (except for hairpieces), provided that the tags and elastic bands on the bulk are not cut off.', 'is_open' => '0'],
        ['question' => 'Is your hair 100% virgin?', 'answer' => 'Yes, we work only with 100% virgin human hair.', 'is_open' => '0'],
        ['question' => 'Are your hair products handmade?', 'answer' => 'Yes, all NICEHAIR hair products are handcrafted and produced under strict quality standards.', 'is_open' => '0'],
        ['question' => 'What if I want to remove the extensions?', 'answer' => 'Extensions can be safely removed at our salon at any time. The removal process is gentle and does not damage your natural hair when performed by our specialists.', 'is_open' => '0'],
        ['question' => 'What does cold hair coloring technology mean?', 'answer' => 'Cold hair dying is a gentle industrial coloring method performed without aggressive high-temperature processing. This technology helps preserve the natural structure of the hair cuticle, preventing dryness and damage, while maintaining softness, shine, and long-lasting color quality.', 'is_open' => '0'],
        ['question' => 'Do you work with international clients and offer worldwide shipping?', 'answer' => 'Yes, we work with clients worldwide. We offer international shipping via DHL for hair orders and welcome clients from different countries at our salon by appointment.', 'is_open' => '0'],
        ['question' => 'How can I pay?', 'answer' => 'You can pay for your hair via bank transfer or using the Stripe or Zina payment systems. We accept card and cash payments for service at the salon, and also offer installment plans with Tabby and Tamara.', 'is_open' => '0'],
    ];

    $data = [
        'nh_faq_eyebrow'   => '[ FAQ ]',
        '_nh_faq_eyebrow'  => 'field_nh_faq_eyebrow',
        'nh_faq_title'     => "No stress \u2014 we\u2019ve got answers",
        '_nh_faq_title'    => 'field_nh_faq_title',
        'nh_faq_subtitle'  => 'Here are the most common questions clients ask before getting extensions.',
        '_nh_faq_subtitle' => 'field_nh_faq_subtitle',
        'nh_faq_items'     => count($faq_items),
        '_nh_faq_items'    => 'field_nh_faq_items',
    ];

    foreach ($faq_items as $i => $item) {
        $data["nh_faq_items_{$i}_question"]  = $item['question'];
        $data["_nh_faq_items_{$i}_question"] = 'field_nh_faq_question';
        $data["nh_faq_items_{$i}_answer"]    = $item['answer'];
        $data["_nh_faq_items_{$i}_answer"]   = 'field_nh_faq_answer';
        $data["nh_faq_items_{$i}_is_open"]   = $item['is_open'];
        $data["_nh_faq_items_{$i}_is_open"]  = 'field_nh_faq_is_open';
    }

    $block_json = wp_json_encode([
        'name' => 'acf/nh-faq',
        'data' => $data,
        'mode' => 'preview',
    ]);

    register_block_pattern('nice-hair/home-faq', [
        'title'      => __('Nice Hair / Home FAQ', 'nice-hair'),
        'categories' => ['nice-hair-home'],
        'content'    => '<!-- wp:acf/nh-faq ' . $block_json . ' /-->',
    ]);

    // --- Contact ---

    $map_image_url = esc_url( get_template_directory_uri() . '/assets/images/contact-map.png' );
    $arrow_url     = esc_url( get_template_directory_uri() . '/assets/images/arrow-mini.svg' );

    register_block_pattern('nice-hair/shared-contact', [
        'title'      => __('Nice Hair / Contact', 'nice-hair'),
        'categories' => ['nice-hair-shared'],
        'content'    => '<!-- wp:group {"tagName":"section","className":"nh-contact","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
<section class="wp-block-group nh-contact">
	<!-- wp:group {"className":"nh-contact__shell","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
	<div class="wp-block-group nh-contact__shell">
		<!-- wp:group {"className":"nh-contact__top","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-contact__top">
			<!-- wp:group {"className":"nh-contact__info","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-contact__info">
				<!-- wp:heading {"level":2,"className":"nh-contact__title","lock":{"move":true,"remove":true}} -->
				<h2 class="nh-contact__title">Didn\'t find your question here?</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"nh-contact__description","lock":{"move":true,"remove":true}} -->
				<p class="nh-contact__description">We\'re always <strong>online 10:00-22:00</strong> — message us on WhatsApp and we\'ll help you out.</p>
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
				<img src="' . $map_image_url . '" alt="Map — Al Sufouh, Dubai" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"className":"nh-contact__map-link","lock":{"move":true,"remove":true}} -->
			<p class="nh-contact__map-link"><a href="https://maps.google.com/?q=Al+Sufouh+Dubai">[ VIEW ON MAP ]<img class="nh-contact__map-arrow" src="' . $arrow_url . '" alt="" /></a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->',
    ]);

    // --- Gallery ---

    $gallery_base = esc_url( get_template_directory_uri() . '/assets/images/gallery' );

    register_block_pattern('nice-hair/shared-gallery', [
        'title'      => __('Nice Hair / Gallery', 'nice-hair'),
        'categories' => ['nice-hair-shared'],
        'content'    => '<!-- wp:group {"tagName":"section","className":"nh-gallery","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
<section class="wp-block-group nh-gallery">
	<!-- wp:group {"className":"nh-gallery__shell","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
	<div class="wp-block-group nh-gallery__shell">
		<!-- wp:group {"className":"nh-gallery__header","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-gallery__header">
			<!-- wp:paragraph {"className":"nh-gallery__eyebrow","lock":{"move":true,"remove":true}} -->
			<p class="nh-gallery__eyebrow">[ GALLERY ]</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"6px","className":"nh-gallery__divider","lock":{"move":true,"remove":true}} -->
			<div style="height:6px" aria-hidden="true" class="wp-block-spacer nh-gallery__divider"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"level":2,"className":"nh-gallery__title","lock":{"move":true,"remove":true}} -->
			<h2 class="nh-gallery__title">What we\'ve been doing every day for 14 years</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"className":"nh-gallery__subtitle","lock":{"move":true,"remove":true}} -->
			<p class="nh-gallery__subtitle">From raw hair to flawless results.<br>Every piece you see is the result of expert color matching,<br>custom manufacturing, and years of hands-on experience.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"className":"nh-gallery__grid","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
		<div class="wp-block-group nh-gallery__grid">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s1","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s1">
				<img src="' . $gallery_base . '/gallery-item-small-1.jpg" alt="Gallery image 1" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s2","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s2">
				<img src="' . $gallery_base . '/gallery-item-small-2.jpg" alt="Gallery image 2" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s3","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s3">
				<img src="' . $gallery_base . '/gallery-item-small-3.jpg" alt="Gallery image 3" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s4","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s4">
				<img src="' . $gallery_base . '/gallery-item-small-4.jpg" alt="Gallery image 4" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s5","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s5">
				<img src="' . $gallery_base . '/gallery-item-small-5.jpg" alt="Gallery image 5" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s6","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s6">
				<img src="' . $gallery_base . '/gallery-item-small-6.jpg" alt="Gallery image 6" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--big","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--big">
				<img src="' . $gallery_base . '/gallery-item-big.jpg" alt="Gallery featured image" />
			</figure>
			<!-- /wp:image -->

			<!-- wp:group {"className":"nh-gallery__instagram","layout":{"type":"default"},"lock":{"move":true,"remove":true}} -->
			<div class="wp-block-group nh-gallery__instagram">
				<!-- wp:heading {"level":3,"className":"nh-gallery__instagram-title","lock":{"move":true,"remove":true}} -->
				<h3 class="nh-gallery__instagram-title">More looks on our Instagram</h3>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"nh-gallery__instagram-link","lock":{"move":true,"remove":true}} -->
				<p class="nh-gallery__instagram-link">Instagram <a href="https://www.instagram.com/nice_hair_dxb/">[ @nice_hair_dxb ]</a></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"nh-gallery__item nh-gallery__item--s7","lock":{"move":true,"remove":true}} -->
			<figure class="wp-block-image size-full nh-gallery__item nh-gallery__item--s7">
				<img src="' . $gallery_base . '/gallery-item-small-7.jpg" alt="Gallery image 7" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</section>
<!-- /wp:group -->',
    ]);
}
add_action('init', 'nice_hair_register_patterns');
