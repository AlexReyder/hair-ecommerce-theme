<?php

declare(strict_types=1);

function nice_hair_register_acf_options(): void
{
    if (! function_exists('acf_add_options_page')) {
        return;
    }

    acf_add_options_page([
        'page_title' => __('Footer Settings', 'nice-hair'),
        'menu_title' => __('Footer', 'nice-hair'),
        'menu_slug'  => 'footer-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-screenoptions',
        'position'   => 30,
    ]);

    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'    => 'group_nh_footer',
        'title'  => 'Footer Settings',
        'fields' => [
            [
                'key'           => 'field_nh_footer_logo',
                'label'         => 'Logo',
                'name'          => 'nh_footer_logo',
                'type'          => 'image',
                'return_format' => 'url',
                'preview_size'  => 'medium',
            ],
            [
                'key'           => 'field_nh_footer_tagline',
                'label'         => 'Tagline',
                'name'          => 'nh_footer_tagline',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_nh_footer_description',
                'label'         => 'Description',
                'name'          => 'nh_footer_description',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_nh_footer_address',
                'label'         => 'Address',
                'name'          => 'nh_footer_address',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_nh_footer_phone',
                'label'         => 'Phone (display)',
                'name'          => 'nh_footer_phone',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_nh_footer_phone_link',
                'label'         => 'Phone (link)',
                'name'          => 'nh_footer_phone_link',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'           => 'field_nh_footer_hours',
                'label'         => 'Working Hours',
                'name'          => 'nh_footer_hours',
                'type'          => 'text',
                'default_value' => '',
            ],
            [
                'key'        => 'field_nh_footer_socials',
                'label'      => 'Social Links',
                'name'       => 'nh_footer_socials',
                'type'       => 'group',
                'layout'     => 'row',
                'sub_fields' => [
                    [
                        'key'   => 'field_nh_footer_telegram',
                        'label' => 'Telegram',
                        'name'  => 'telegram',
                        'type'  => 'url',
                    ],
                    [
                        'key'   => 'field_nh_footer_instagram',
                        'label' => 'Instagram',
                        'name'  => 'instagram',
                        'type'  => 'url',
                    ],
                    [
                        'key'   => 'field_nh_footer_whatsapp',
                        'label' => 'WhatsApp',
                        'name'  => 'whatsapp',
                        'type'  => 'url',
                    ],
                ],
            ],
            [
                'key'        => 'field_nh_footer_cta',
                'label'      => 'CTA Buttons',
                'name'       => 'nh_footer_cta',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'           => 'field_nh_footer_cta1_label',
                        'label'         => 'Button 1 Label',
                        'name'          => 'btn1_label',
                        'type'          => 'text',
                        'default_value' => 'VISIT SALON',
                    ],
                    [
                        'key'   => 'field_nh_footer_cta1_url',
                        'label' => 'Button 1 URL',
                        'name'  => 'btn1_url',
                        'type'  => 'url',
                    ],
                    [
                        'key'           => 'field_nh_footer_cta2_label',
                        'label'         => 'Button 2 Label',
                        'name'          => 'btn2_label',
                        'type'          => 'text',
                        'default_value' => 'VISIT SHOP',
                    ],
                    [
                        'key'   => 'field_nh_footer_cta2_url',
                        'label' => 'Button 2 URL',
                        'name'  => 'btn2_url',
                        'type'  => 'url',
                    ],
                ],
            ],
            [
                'key'   => 'field_nh_footer_privacy_url',
                'label' => 'Privacy Policy URL',
                'name'  => 'nh_footer_privacy_url',
                'type'  => 'url',
            ],
            [
                'key'        => 'field_nh_footer_credits',
                'label'      => 'Credits',
                'name'       => 'nh_footer_credits',
                'type'       => 'group',
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'           => 'field_nh_footer_designer_name',
                        'label'         => 'Designer Name',
                        'name'          => 'designer_name',
                        'type'          => 'text',
                        'default_value' => 'umapalata.space',
                    ],
                    [
                        'key'   => 'field_nh_footer_designer_url',
                        'label' => 'Designer URL',
                        'name'  => 'designer_url',
                        'type'  => 'url',
                    ],
                    [
                        'key'           => 'field_nh_footer_developer_name',
                        'label'         => 'Developer Name',
                        'name'          => 'developer_name',
                        'type'          => 'text',
                        'default_value' => 'username',
                    ],
                    [
                        'key'   => 'field_nh_footer_developer_url',
                        'label' => 'Developer URL',
                        'name'  => 'developer_url',
                        'type'  => 'url',
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'footer-settings',
                ],
            ],
        ],
        'active' => true,
    ]);
}
add_action('acf/init', 'nice_hair_register_acf_options');
