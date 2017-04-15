<?php remove_action('wp_head', 'wp_generator'); ?>
<?php
    add_filter('xmlrpc_enabled','__return_false');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
?>
<?php

/*
 * Scripts
 */
function qahana_scripts() {
    //CSS
    wp_enqueue_style('styel.css', get_stylesheet_uri());
    //JavaScript
    wp_enqueue_script('jquery.min.js', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script('transition.js', get_template_directory_uri() . '/assets/js/transition.js');
    wp_enqueue_script('dropdown.js', get_template_directory_uri() . '/assets/js/dropdown.js');
    wp_enqueue_script('collapse.js', get_template_directory_uri() . '/assets/js/collapse.js');
    wp_enqueue_script('tab.js', get_template_directory_uri() . '/assets/js/tab.js');
    wp_enqueue_script('owl.carousel.min.js', get_template_directory_uri() . '/assets/js/owl.carousel.min.js');
    wp_enqueue_script('jquery.lavalamp.min.js', get_template_directory_uri() . '/assets/js/jquery.lavalamp.min.js');
    wp_enqueue_script('script.js', get_template_directory_uri() . '/assets/js/script.js');
    wp_enqueue_script('loadmore.js', get_template_directory_uri() . '/assets/js/loadmore.js');
}
add_action( 'wp_enqueue_scripts', 'qahana_scripts' );

/*
 * Navigation
 */
function qahana_theme_setup() {

    add_theme_support('menus');

    register_nav_menu('home', 'Home Page Navigation');
    register_nav_menu('global', 'Global Page Navigation');
    register_nav_menu('footer', 'Footer Navigation');
}
add_action('init', 'qahana_theme_setup');

/*
 * Theme support function
 */
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside','image','video'));
add_theme_support('html5', array('search-form'));

/*
 * Sidebar function
 */
function qahana_widget_setup() {
    register_sidebar(
        array(
            'name'          => 'Sidebar',
            'id'            => 'sidebar-1',
            'class'         => 'custom',
            'description'   => 'Какое то описание для виджета',
            'before_widget' => '<div class="widget">',
            'before_title'  => '<h4 class="al-title"><span>',
            'after_title'   => '</span></h4>',
            'after_widget'  => '</div>'
        )
    );
}
add_action('widgets_init', 'qahana_widget_setup');

/*
 *  Breadcrumb
 */
function bootstrap_breadcrumb($custom_home_icon = false, $custom_post_types = false) {
    wp_reset_query();
    global $post;

    $is_custom_post = $custom_post_types ? is_singular( $custom_post_types ) : false;

    if (!is_front_page() && !is_home()) {
        echo '<ol class="breadcrumb" id="al-breadcrumbs-glob">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        if( $custom_home_icon )
            echo $custom_home_icon;
        else
            bloginfo('name');
        echo "</a></li>";
        if ( has_category() ) {
            echo '<li class="active"><a href="'.esc_url( get_permalink( get_page( get_the_category($post->ID) ) ) ).'">';
            the_category(', ');
            echo '</a></li>';
        }
        if ( is_category() || is_single() || $is_custom_post ) {
            if ( is_category() )
                echo '<li class="active"><a href="'.esc_url( get_permalink( get_page( get_the_category($post->ID) ) ) ).'">'.get_the_category($post->ID)[0]->name.'</a></li>';
            if ( $is_custom_post ) {
                echo '<li class="active"><a href="'.get_option('home').'/'.get_post_type_object( get_post_type($post) )->name.'">'.get_post_type_object( get_post_type($post) )->label.'</a></li>';
                if ( $post->post_parent ) {
                    $home = get_page(get_option('page_on_front'));
                    for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
                        if (($home->ID) != ($post->ancestors[$i])) {
                            echo '<li><a href="';
                            echo get_permalink($post->ancestors[$i]);
                            echo '">';
                            echo get_the_title($post->ancestors[$i]);
                            echo "</a></li>";
                        }
                    }
                }
            }
            if ( is_single() )
                echo '<li class="active">'.get_the_title($post->ID).'</li>';
        } elseif ( is_page() && $post->post_parent ) {
            $home = get_page(get_option('page_on_front'));
            for ($i = count($post->ancestors)-1; $i >= 0; $i--) {
                if (($home->ID) != ($post->ancestors[$i])) {
                    echo '<li><a href="';
                    echo get_permalink($post->ancestors[$i]);
                    echo '">';
                    echo get_the_title($post->ancestors[$i]);
                    echo "</a></li>";
                }
            }
            echo '<li class="active">'.get_the_title($post->ID).'</li>';
        } elseif (is_page()) {
            echo '<li class="active">'.get_the_title($post->ID).'</li>';
        } elseif (is_404()) {
            echo '<li class="active">404</li>';
        }
        echo '</ol>';
    }
}

/*
 * Pagination
 */
function qahana_pagination() {
    global $wp_query;
    $pages = '';
    $ol = '<li>';
    $olc = '</li>';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['active'] = $current;

    $total = 1;
    $a['mid_size'] = 3;
    $a['end_size'] = 1;
    $a['prev_text'] = '&#8592; Նախորդը';
    $a['next_text'] = 'Հաջորդը &#8594;';

    if ($max > 1) echo '<ul class="pagination">';
    echo paginate_links($a);
    if ($max > 1) echo '</ul>';
}

/*
 * Include Walker File
 */
require get_template_directory() . '/inc/walker.php';

