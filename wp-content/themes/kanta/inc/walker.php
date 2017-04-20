<?php
/*
 * Collection of Walker classes
 */

/*
 *

    wp_nav_menu()
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle al-menu-parts" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Библиотека<i class="dropdown-arrow dropdown-arrow-black"></i></a>
            <ul class="dropdown-menu">
                <li><strong>Епископы</strong></li>
                <li><a href="#">This is Photoshop's version</a></li>
                <li><a href="#">This is Photoshop's version</a></li>
                <li><a href="#">This is Photoshop's version</a></li>
                <li><a href="#">This is Photoshop's version</a></li>
            </ul>
        </li>
        <li><a href="#" class="al-menu-parts">Вопросы к священнику</a></li>
    </ul>
 *
 */

class Walker_Nav_Home extends Walker_Nav_menu {
    function start_lvl(&$output, $depth) { //ul
        $indent = str_repeat("\t" . $depth);
        $submenu = ($depth > 0) ? ' sub-menu' : '';
        $output .= "\n$indent<ul class=\"dropdown-menu$submenu depth_$depth\">\n";
    }

    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ){ //li a span

        $indent = ( $depth ) ? str_repeat("\t",$depth) : '';

        $li_attributes = '';
        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
        $classes[] = ($item->current || $item->current_item_ancestor) ? 'active' : '';
        $classes[] = 'menu-item-' . $item->ID;
        if( $depth && $args->walker->has_children ){
            $classes[] = 'dropdown-submenu';
        }

        $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = ' class="' . esc_attr($class_names) . '"';

        $id = apply_filters('nav_menu_item_id', 'menu-item-'.$item->ID, $item, $args);
        $id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

        $attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= ! empty( $item->target ) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= ! empty( $item->url ) ? ' href="' . esc_attr($item->url) . '"' : '';

        $attributes .= ( $args->walker->has_children ) ? ' class="al-menu-parts" ' : '';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
        $item_output .= ( $depth == 0 && $args->walker->has_children ) ? ' <i class="dropdown-arrow dropdown-arrow-black"></i></a>' : '</a>';
        $item_output .= $args->after;

        $output .= apply_filters ( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

    }
}
