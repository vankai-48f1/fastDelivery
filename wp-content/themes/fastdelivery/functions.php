<?php

// Thêm ảnh đại diện
add_theme_support('post-thumbnails');

// Ảnh này sẽ hiện ở ngoài blog
add_image_size('blog-thumbnail', 700, 350, true);

// Ảnh này sẽ hiện ở trong post
add_image_size('post-large', 900, 600, true);

add_image_size('post-small', 250, 200, true);


// Khai báo menu
function register_my_menu()
{
    register_nav_menu('home-menu', __('Home Menu'));
    register_nav_menu('main-menu', __('Main Menu'));
    register_nav_menu('footer-menu', __('Footer Menu'));
}
add_action('init', 'register_my_menu');

// Khai báo sidebar
function mini_blog_widgets_init()
{
	register_sidebar(array(
		'name'			=> __('Sidebar', 'sidebar'),
		'id' 			=> 'sidebar',
		'description' 	=> __('Sidebar')
	));
}
add_action('widgets_init', 'mini_blog_widgets_init');



function m_logo_web($wp_customize)
{
    $wp_customize->add_section(
        'logo',
        array(
            'title' => 'Logo',
            'description' => 'logo',
            'priority' => 25
        )
    );

    $wp_customize->add_setting('Logo-dark', array('default' => ''));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'Logo-dark', array(
            'label' => 'Logo Dark',
            'section' => 'logo',
            'settings' => 'Logo-dark'
        ))
    );

    $wp_customize->add_setting('Logo-light', array('default' => ''));
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'Logo-light', array(
            'label' => 'Logo Light',
            'section' => 'logo',
            'settings' => 'Logo-light'
        ))
    );
}
add_action('customize_register', 'm_logo_web');


add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('General Option'),
            'menu_title'  => __('General Option'),
            'redirect'    => false,
            'post_id' => 'options',
        ));

        // Add sub page.
        $child = acf_add_options_page(array(
            'page_title'  => __('Footer'),
            'menu_title'  => __('Footer'),
            'parent_slug' => $parent['menu_slug'],
            'post_id' => 'options_footer',
        ));
    }
}

// PAGINATION

if (!function_exists('m_paginate')) {
    function m_paginate()
    {
        if (paginate_links() != '') { ?>
            <div class="pagination-post">
                <?php
                global $wp_query;
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'format' => '?paged=%#%',
                    'prev_text'    => __('<'),
                    'next_text'    => __('>'),
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages
                ));
                ?>
            </div>
        <?php }
    }
}

// breadcrumb
require_once get_template_directory() . '/template-parts/breadcrumbs.php';


function get_latest_post($quantity)
{
    global $post;

    $latest = array(
        'post_status' => 'publish',
        'post_type' => 'post',
        'showposts' => $quantity,
        'orderby' => 'date',
        'order' => 'DESC',
    );
    $queryLatest = new WP_Query($latest);

    if ($queryLatest->have_posts()) :
        echo '<div class="latest-post">';
        while ($queryLatest->have_posts()) : $queryLatest->the_post();
            echo '<div class="latest-post__block">
                        <div class="latest-post__thumb-wrap"><a href="' . get_the_permalink() .'" class="latest-post__thumb">' . get_the_post_thumbnail() . '</a></div>
                        <a href="' . get_the_permalink() .'" class="latest-post__content">
                            <h3 class="latest-post__title">' . get_the_title() . '</h3>
                        </a>
                    </div>';
        endwhile;
        echo '</div>';
    endif;
    wp_reset_postdata();
}
