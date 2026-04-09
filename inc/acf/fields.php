<?php

declare(strict_types=1);

function nice_hair_register_acf_fields(): void
{
    if (! function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group([
        'key'      => 'group_nh_faq',
        'title'    => 'Block: FAQ Section',
        'fields'   => [
            [
                'key'           => 'field_nh_faq_eyebrow',
                'label'         => 'Eyebrow',
                'name'          => 'nh_faq_eyebrow',
                'type'          => 'text',
                'default_value' => '[ FAQ ]',
                'placeholder'   => '[ FAQ ]',
            ],
            [
                'key'           => 'field_nh_faq_title',
                'label'         => 'Title',
                'name'          => 'nh_faq_title',
                'type'          => 'text',
                'default_value' => "No stress \u2014 we've got answers",
            ],
            [
                'key'           => 'field_nh_faq_subtitle',
                'label'         => 'Subtitle',
                'name'          => 'nh_faq_subtitle',
                'type'          => 'textarea',
                'rows'          => 2,
                'new_lines'     => 'br',
                'default_value' => 'Here are the most common questions clients ask before getting extensions.',
            ],
            [
                'key'        => 'field_nh_faq_items',
                'label'      => 'FAQ Items',
                'name'       => 'nh_faq_items',
                'type'       => 'repeater',
                'min'        => 1,
                'layout'     => 'block',
                'sub_fields' => [
                    [
                        'key'      => 'field_nh_faq_question',
                        'label'    => 'Question',
                        'name'     => 'question',
                        'type'     => 'text',
                        'required' => 1,
                    ],
                    [
                        'key'      => 'field_nh_faq_answer',
                        'label'    => 'Answer',
                        'name'     => 'answer',
                        'type'     => 'textarea',
                        'required' => 1,
                        'rows'     => 3,
                        'new_lines' => 'br',
                    ],
                    [
                        'key'           => 'field_nh_faq_is_open',
                        'label'         => 'Open by default',
                        'name'          => 'is_open',
                        'type'          => 'true_false',
                        'default_value' => 0,
                        'ui'            => 1,
                    ],
                ],
            ],
        ],
        'location' => [
            [
                [
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/nh-faq',
                ],
            ],
        ],
        'active' => true,
    ]);
}
add_action('acf/init', 'nice_hair_register_acf_fields');
