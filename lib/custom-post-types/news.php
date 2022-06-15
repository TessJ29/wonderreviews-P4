<?php

add_action('init', 'newsPostType');

function newsPostType()
{
    $args = [
        'labels' => [
            'name' => 'Reviews',
            'singular_name' => 'Reviews',
            'all_items' => 'Alle reviews',
            'edit_item' => 'Bewerk review',
            'add_new' => 'Review aanmaken',
            'add_new_item' => 'Voeg review toe',
        ],
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_admin_bar' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-media-document',
        'supports' => [
            'title',
            'editor',
        ],
        'rewrite' => [
            'slug' => 'reviews',
        ],
    ];

    \register_post_type('reviews', $args);

}

