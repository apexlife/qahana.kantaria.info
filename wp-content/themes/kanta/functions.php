<?php remove_action('wp_head', 'wp_generator'); ?>
<?php
    add_filter('xmlrpc_enabled', '__return_false');
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wlwmanifest_link');
?>
<?php

/*
 * Scripts
 */
function qahana_scripts()
{
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

add_action('wp_enqueue_scripts', 'qahana_scripts');

/*
 * Navigation
 */
function qahana_theme_setup()
{

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
add_theme_support('post-formats', array('aside', 'image', 'video'));
add_theme_support('html5', array('search-form'));
add_theme_support('custom-logo');

/*
 * Добавление страницы настройки в админ-панель WordPress
 */
function example_customizer_menu()
{
    add_theme_page('Customize', 'Customize', 'edit_theme_options');
}
add_action('admin_menu', 'example_customizer_menu');

/*
 * Добавление индивидуальный секций, опций и элементов управления к настройщику тем
 */
function footer_text_customizer($wp_customize)
{
    $wp_customize->add_section(
        'footer',
        array(
            'title' => 'Footer',
            'description' => 'It"s text change settings section',
            'priority' => 35,
        )
    );
    $wp_customize->add_setting(
        'copyright_textbox',
        array(
            'default' => 'Powered By Kantaria Mikheili',
        )
    );
    $wp_customize->add_control(
        'copyright_textbox',
        array(
            'label' => 'Copyright text',
            'section' => 'footer',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'about_page_title',
        array(
            'default' => 'Powered By Kantaria Mikheili',
        )
    );
    $wp_customize->add_control(
        'about_page_title',
        array(
            'label' => 'About Text Title',
            'section' => 'footer',
            'type' => 'text',
        )
    );
    $wp_customize->add_setting(
        'about_page_description',
        array(
            'default' => 'Powered By Kantaria Mikheili',
        )
    );
    $wp_customize->add_control(
        'about_page_description',
        array(
            'label' => 'About Text Description',
            'section' => 'footer',
            'type' => 'textarea',
        )
    );
}
add_action('customize_register', 'footer_text_customizer');
/*
 * Custom Post Type
 */
function qahana_custom_post_type()
{
    $labelsChurches = array(
        'name' => 'Churches',
        'singular_name' => 'Churches',
        'add_new' => 'Add New Churches',
        'all_items' => 'All Churches',
        'add_new_item' => 'Add Churches',
        'edit_item' => 'Edit Churches',
        'new_item' => 'New Churches',
        'view_item' => 'View Churches',
        'search_item' => 'Search Churches',
        'not_found' => 'No Churches found',
        'not_found_in_trash' => 'No Churches found in trash',
        'parent_item_colon' => 'Parent Churches'
    );
    $argsChurches = array(
        'labels' => $labelsChurches,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    $labelsLeader = array(
        'name' => 'Leaders',
        'singular_name' => 'Leaders',
        'add_new' => 'Add New Leaders',
        'all_items' => 'All Leaders',
        'add_new_item' => 'Add Leaders',
        'edit_item' => 'Edit Leaders',
        'new_item' => 'New Leaders',
        'view_item' => 'View Leaders',
        'search_item' => 'Search Leaders',
        'not_found' => 'No Leaders found',
        'not_found_in_trash' => 'No Leaders found in trash',
        'parent_item_colon' => 'Parent Leaders'
    );
    $argsLeader = array(
        'labels' => $labelsLeader,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array('category', 'post_tag'),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('Churches', $argsChurches);
    register_post_type('Leaders', $argsLeader);
}

add_action('init', 'qahana_custom_post_type');

/*
 * Sidebar function
 */
function qahana_widget_setup()
{
    register_sidebar(
        array(
            'name' => 'Sidebar',
            'id' => 'sidebar-1',
            'class' => 'custom',
            'description' => 'Какое то описание для виджета',
            'before_widget' => '<div class="widget">',
            'before_title' => '<h4 class="al-title"><span>',
            'after_title' => '</span></h4>',
            'after_widget' => '</div>'
        )
    );
}

add_action('widgets_init', 'qahana_widget_setup');

/*
 *  Breadcrumb
 */
function bootstrap_breadcrumb($custom_home_icon = false, $custom_post_types = false)
{
    wp_reset_query();
    global $post;

    $is_custom_post = $custom_post_types ? is_singular($custom_post_types) : false;

    if (!is_front_page() && !is_home()) {
        echo '<ol class="breadcrumb" id="al-breadcrumbs-glob">';
        echo '<li><a href="';
        echo get_option('home');
        echo '">';
        if ($custom_home_icon)
            echo $custom_home_icon;
        else
            bloginfo('name');
        echo "</a></li>";
        if (has_category()) {
            echo '<li class="active"><a href="' . esc_url(get_permalink(get_page(get_the_category($post->ID)))) . '">';
            the_category(', ');
            echo '</a></li>';
        }
        if (is_category() || is_single() || $is_custom_post) {
            if (is_category())
                echo '<li class="active"><a href="' . esc_url(get_permalink(get_page(get_the_category($post->ID)))) . '">' . get_the_category($post->ID)[0]->name . '</a></li>';
            if ($is_custom_post) {
                echo '<li class="active"><a href="' . get_option('home') . '/' . get_post_type_object(get_post_type($post))->name . '">' . get_post_type_object(get_post_type($post))->label . '</a></li>';
                if ($post->post_parent) {
                    $home = get_page(get_option('page_on_front'));
                    for ($i = count($post->ancestors) - 1; $i >= 0; $i--) {
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
            if (is_single())
                echo '<li class="active">' . get_the_title($post->ID) . '</li>';
        } elseif (is_page() && $post->post_parent) {
            $home = get_page(get_option('page_on_front'));
            for ($i = count($post->ancestors) - 1; $i >= 0; $i--) {
                if (($home->ID) != ($post->ancestors[$i])) {
                    echo '<li><a href="';
                    echo get_permalink($post->ancestors[$i]);
                    echo '">';
                    echo get_the_title($post->ancestors[$i]);
                    echo "</a></li>";
                }
            }
            echo '<li class="active">' . get_the_title($post->ID) . '</li>';
        } elseif (is_page()) {
            echo '<li class="active">' . get_the_title($post->ID) . '</li>';
        } elseif (is_404()) {
            echo '<li class="active">404</li>';
        }
        echo '</ol>';
    }
}

/*
 * Pagination
 */
function qahana_pagination()
{
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

/*
 * Создаем произовльное поле для произовльных записей цервки
 */
// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);
// подключаем функцию активации мета блока (my_extra_fields)
add_action('add_meta_boxes', 'my_extra_fields', 1);
function my_extra_fields()
{
    add_meta_box('extra_fields', 'Google Map', 'extra_fields_box_func', 'churches', 'normal', 'high');
    add_meta_box('extra_fields', 'Age Leader', 'extra_fields_box_func_leaders', 'leaders', 'normal', 'high');

    global $post;

    if (!empty($post)) {
        $pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

        if ($pageTemplate == 'page-contact.php') {
            add_meta_box(
                'extra_fields', // $id
                'Google Map', // $title
                'extra_fields_box_func_contact', // $callback
                'page', // $page
                'normal', // $context
                'high'); // $priority
        }
    }

//    add_meta_box( 'extra_fields', 'Google Map', 'extra_fields_box_func', 'contact', 'normal', 'high'  );
}
// код блока
function extra_fields_box_func($post) { ?>

    <p>Add/Insert google maps iframe
        <textarea type="text" name="extra[description]"
                  style="width:100%;height:100px;resize:none;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
    </p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>"/>
    <?php }
function extra_fields_box_func_leaders($post) { ?>

    <p>
        <label for="ageLeader">Age Leader <input type="text" id="ageLeader" name="extra[ageLeader]" value="<?php echo get_post_meta($post->ID, 'ageLeader', 1); ?>"></label>
    </p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>"/>
    <?php }
function extra_fields_box_func_contact($post) { ?>

    <p>Add/Insert google maps iframe
        <textarea type="text" name="extra[description]"
                  style="width:100%;height:100px;resize:none;"><?php echo get_post_meta($post->ID, 'description', 1); ?></textarea>
    </p>
    <p>
        <label for="textUpperForm">Text Upper Form <input type="text" id="textUpperForm" name="extra[textUpperForm]" value="<?php echo get_post_meta($post->ID, 'textUpperForm', 1); ?>"></label>
        <label for="number">Phone Number <input type="text" id="number" name="extra[number]" value="<?php echo get_post_meta($post->ID, 'number', 1); ?>"></label>
        <label for="fuxnumber">Fux Number <input type="text" id="fuxnumber" name="extra[fuxnumber]" value="<?php echo get_post_meta($post->ID, 'fuxnumber', 1); ?>"></label>
        <label for="contactaddress">Address <input type="text" id="contactaddress" name="extra[contactaddress]" value="<?php echo get_post_meta($post->ID, 'contactaddress', 1); ?>"></label>
        <label for="contactEmail">E-mail <input type="text" id="contactEmail" name="extra[contactEmail]" value="<?php echo get_post_meta($post->ID, 'contactEmail', 1); ?>"></label>
    </p>

    <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>"/>
    <?php }


// включаем обновление полей при сохранении
add_action('save_post', 'my_extra_fields_update', 0);

/* Сохраняем данные, при сохранении поста */
function my_extra_fields_update($post_id)
{
    if (!isset($_POST['extra_fields_nonce']) || !wp_verify_nonce($_POST['extra_fields_nonce'], __FILE__)) return false; // проверка
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return false; // если это автосохранение
    if (!current_user_can('edit_post', $post_id)) return false; // если юзер не имеет право редактировать запись

    if (!isset($_POST['extra'])) return false;

    // Все ОК! Теперь, нужно сохранить/удалить данные
    $_POST['extra'] = array_map('trim', $_POST['extra']);
    foreach ($_POST['extra'] as $key => $value) {
        if (empty($value)) {
            delete_post_meta($post_id, $key); // удаляем поле если значение пустое
            continue;
        }

        update_post_meta($post_id, $key, $value); // add_post_meta() работает автоматически
    }
    return $post_id;
}

/*
 *
 *
 * Полезные доработки
 *
 *
 */
## Обрезка заголовка
function trim_title_chars($count, $after)
{
    $title = get_the_title();
    if (mb_strlen($title) > $count) $title = mb_substr($title, 0, $count);
    else $after = '';
    echo $title . $after;
}
## Изменение текста в подвале админ-панели
add_filter('admin_footer_text', 'footer_admin_func');
function footer_admin_func()
{
    echo 'Разработка сайта: <a href="http://kantaria.info" target="_blank">Kantaria Mikheili</a>.';
}

## Изменение длины цитаты
add_filter('excerpt_length', 'custom_excerpt_length_func');
function custom_excerpt_length_func($length)
{
    return 30; // кол-во слов
}

## Ссылка «Читать далее...» после цитаты в цикле. Замена `[...]`
add_filter('the_excerpt', 'replace_excerpt_func');
function replace_excerpt_func($content)
{
    $link = '<a class="read_more" href="' . get_permalink() . '">Կարդալ ավելին...</a>';
    return str_replace('[...]', $link, $content);
}

## удаляет из профиля поля: AIM, Yahoo IM, Jabber / Google Talk
add_filter('user_contactmethods', 'remove_contactmethod');
function remove_contactmethod($contactmethods)
{
    unset($contactmethods['aim']);
    unset($contactmethods['jabber']);
    unset($contactmethods['yim']);

    return $contactmethods;
}

## Отменяем обертку картинок в тег `<p>` в контенте
add_filter('the_content', 'remove_img_ptags_func');
function remove_img_ptags_func($content)
{
    return preg_replace('/<p>\s*(<a[^>]+>)?\s*(<img[^>]+>)\s*(a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

## Подключение скрипта html5 для IE с cdn
add_action('wp_head', 'IEhtml5_shim_func');
function IEhtml5_shim_func()
{
    echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->';
    // или если нужна еще и поддержка при печати
    // echo '<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv-printshiv.min.js"></script><![endif]-->';
}

## Установим максимальное количество ревизий записи до 5-ти
if (!defined('WP_POST_REVISIONS')) define('WP_POST_REVISIONS', 5);
## Отключим возможность редактировать файлы в админке для тем, плагинов
define('DISALLOW_FILE_EDIT', true);
## закроем возможность публикации через xmlrpc.php
add_filter('xmlrpc_enabled', '__return_false');
## Отключим выводи ошибок на странице авторизации
add_filter('login_errors', 'login_obscure_func');
function login_obscure_func()
{
    return 'Ошибка: вы ввели неправильный логин или пароль.';
}

function my_custom_login_logo()
{
    echo '<style type="text/css">
	h1 a { background-image:url(' . get_bloginfo('template_directory') . '/assets/img/wp-login-logo.png) !important; width: 67px!important; height: 111px!important;background-size: cover!important; }
	</style>';
}

add_action('login_head', 'my_custom_login_logo');
## Изменение внутреннего логотипа админки. Для версий с dashicons
add_action('add_admin_bar_menus', 'reset_admin_wplogo');
function reset_admin_wplogo()
{
    remove_action('admin_bar_menu', 'wp_admin_bar_wp_menu', 10);

    add_action('admin_bar_menu', 'my_admin_bar_wp_menu', 10);
}

## Изменяем логотип WordPress на логотип Клиента
function my_admin_bar_wp_menu($wp_admin_bar)
{
    $wp_admin_bar->add_menu(array(
        'id' => 'wp-logo',
        'title' => '<img style="width:28px;height:auto;background-size: cover!important;" src="' . get_bloginfo('template_directory') . '/assets/img/favicon.png" alt="" >',
        'href' => home_url('/about/'),
        'meta' => array(
            'title' => 'О моем сайте',
        ),
    ));
}

## Блокируем возможность обновления плагинов/wp
if (!current_user_can('edit_users')) {
    add_action('init', create_function('$a', "remove_action( 'init', 'wp_version_check' );"), 2);
    add_filter('pre_option_update_core', create_function('$a', "return null;"));
    add_filter('pre_site_transient_update_core', create_function('$a', "return null;"));
}
/**
 * Выводит данные о кол-ве запросов к БД, время выполнения скрипта и размер затраченной памяти.
 *
 * @param boolean [$visible = true] Выводить как есть или спрятать в HTML комментарий, чтобы данные
 *                                   не было видно в браузере, но их можно было посмотреть в HTML коде.
 * Функцию performance() нужно использовать в конце страницы.
 * Чтобы автоматически добавить вывод этих данных, предлагаю воспользоваться хуками:
 */
add_filter('admin_footer_text', 'performance'); // в подвале админки
add_filter('wp_footer', 'performance'); // в подвале сайта
function performance()
{
    $stat = sprintf('SQL: %d за %.3f sec. %.2f MB', get_num_queries(), timer_stop(0, 3), (memory_get_peak_usage() / 1024 / 1024));

    // echo $stat; // видно
    echo "<!-- $stat -->"; // скрыто
}

## Автоматическое создание из ссылки youtube плеер ютуба
global $wp_embed;
add_filter('widget_text', array(& $wp_embed, 'run_shortcode'), 8);
add_filter('widget_text', array(& $wp_embed, 'autoembed'), 8);
## Удаление метабоксов на странице редактирования записи
add_action('admin_menu', 'remove_default_post_screen_metaboxes');
function remove_default_post_screen_metaboxes()
{
    // для постов
    remove_meta_box('commentstatusdiv', 'post', 'normal'); // комменты
    remove_meta_box('authordiv', 'post', 'normal'); // автор

    // для страниц
    remove_meta_box('commentstatusdiv', 'page', 'normal'); // комменты
    remove_meta_box('authordiv', 'page', 'normal'); // автор
}

##  отменим показ выбранного термина наверху в checkbox списке терминов
add_filter('wp_terms_checklist_args', 'set_checked_ontop_default', 10);
function set_checked_ontop_default($args)
{
    // изменим параметр по умолчанию на false
    if (!isset($args['checked_ontop']))
        $args['checked_ontop'] = false;

    return $args;
}

## Добавляет миниатюры записи в таблицу записей в админке
if (1) {
    add_action('init', 'add_post_thumbs_in_post_list_table', 20);
    function add_post_thumbs_in_post_list_table()
    {
        // проверим какие записи поддерживают миниатюры
        $supports = get_theme_support('post-thumbnails');

        // $ptype_names = array('post','page'); // указывает типы для которых нужна колонка отдельно

        // Определяем типы записей автоматически
        if (!isset($ptype_names)) {
            if ($supports === true) {
                $ptype_names = get_post_types(array('public' => true), 'names');
                $ptype_names = array_diff($ptype_names, array('attachment'));
            } // для отдельных типов записей
            elseif (is_array($supports)) {
                $ptype_names = $supports[0];
            }
        }

        // добавляем фильтры для всех найденных типов записей
        foreach ($ptype_names as $ptype) {
            add_filter("manage_{$ptype}_posts_columns", 'add_thumb_column');
            add_action("manage_{$ptype}_posts_custom_column", 'add_thumb_value', 10, 2);
        }
    }

    // добавим колонку
    function add_thumb_column($columns)
    {
        // подправим ширину колонки через css
        add_action('admin_notices', function () {
            echo '
			<style>
				.column-thumbnail{ width:80px; text-align:center; }
			</style>';
        });

        $num = 1; // после какой по счету колонки вставлять новые

        $new_columns = array('thumbnail' => __('Thumbnail'));

        return array_slice($columns, 0, $num) + $new_columns + array_slice($columns, $num);
    }

    // заполним колонку
    function add_thumb_value($colname, $post_id)
    {
        if ('thumbnail' == $colname) {
            $width = $height = 45;

            // миниатюра
            if ($thumbnail_id = get_post_meta($post_id, '_thumbnail_id', true)) {
                $thumb = wp_get_attachment_image($thumbnail_id, array($width, $height), true);
            } // из галереи...
            elseif ($attachments = get_children(array(
                'post_parent' => $post_id,
                'post_mime_type' => 'image',
                'post_type' => 'attachment',
                'numberposts' => 1,
                'order' => 'DESC',
            ))
            ) {
                $attach = array_shift($attachments);
                $thumb = wp_get_attachment_image($attach->ID, array($width, $height), true);
            }

            echo empty($thumb) ? ' ' : $thumb;
        }
    }
}
## Удаление файлов license.txt и readme.html для защиты
if (is_admin() && !defined('DOING_AJAX')) {
    $license_file = ABSPATH . '/license.txt';
    $readme_file = ABSPATH . '/readme.html';

    if (file_exists($license_file) && current_user_can('manage_options')) {
        $deleted = unlink($license_file) && unlink($readme_file);

        if (!$deleted)
            $GLOBALS['readmedel'] = 'Не удалось удалить файлы: license.txt и readme.html из папки `' . ABSPATH . '`. Удалите их вручную!';
        else
            $GLOBALS['readmedel'] = 'Файлы: license.txt и readme.html удалены из из папки `' . ABSPATH . '`.';

        add_action('admin_notices', function () {
            echo '<div class="error is-dismissible"><p>' . $GLOBALS['readmedel'] . '</p></div>';
        });
    }
}
## Фильтр элементо втаксономии для метабокса таксономий в админке.
## Позволяет удобно фильтровать (искать) элементы таксономии по назанию, когда их очень много
add_action('admin_print_scripts', 'my_admin_term_filter', 99);
function my_admin_term_filter()
{
    $screen = get_current_screen();

    if ('post' !== $screen->base) return; // только для страницы редактирвоания любой записи
    ?>
    <script>
        jQuery(document).ready(function ($) {
            var $categoryDivs = $('.categorydiv');

            $categoryDivs.prepend('<input type="search" class="fc-search-field" placeholder="Start Write Category Name..." style="width:100%" />');

            $categoryDivs.on('keyup search', '.fc-search-field', function (event) {

                var searchTerm = event.target.value,
                    $listItems = $(this).parent().find('.categorychecklist li');

                if ($.trim(searchTerm)) {
                    $listItems.hide().filter(function () {
                        return $(this).text().toLowerCase().indexOf(searchTerm.toLowerCase()) !== -1;
                    }).show();
                }
                else {
                    $listItems.show();
                }
            });
        });
    </script>
    <?php
}

function remove_menus()
{
    global $menu;
    $restricted = array(
        //__('Dashboard'),
        //__('Posts'),
        __('Media'),
        //__('Links'),
        //__('Pages'),
        //__('Appearance'),
        __('Tools'),
        __('Users'),
        //__('Settings'),
        __('Comments'),
        //__('Plugins')
    );
    end($menu);
    while (prev($menu)) {
        $value = explode(' ', $menu[key($menu)][0]);
        if (in_array(($value[0] != NULL ? $value[0] : ""), $restricted)) {
            unset($menu[key($menu)]);
        }
    }
}

add_action('admin_menu', 'remove_menus');


