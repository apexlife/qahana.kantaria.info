<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?><?php wp_title(' | '); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:500,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="al-news-header" class="main-header">
    <div class="container-fluid black">
        <div class="row">
            <div class="col-md-4">
                <div class="media al-header-logo-content">
                    <div class="media-left">
                        <?php
                            the_custom_logo( $blog_id );
                        ?>
                    </div>
                    <div class="media-body">
                        <a href="<?php echo get_home_url(); ?>">
                            <h1><?php bloginfo('name'); ?></h1>
                            <h2><?php echo bloginfo('description'); ?></h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-3">
                <div class="today">
                    <strong>13</strong>
                    <figure>
                        <sup>Марта</sup>
                        <sub>Сегодня</sub>
                    </figure>
                </div>
                <p class="header-quote">«Твердо храните Господа Бога твоего, в тебе <br>
                    заповеди, законы и правила». (Втор. 6:17).
                </p>
            </div>
        </div>
    </div>
</header>
<nav id="al-library-navbar" class="navbar navbar-default">
    <div class="container-fluid">
        <div class="col-md-12 al-border-bottom">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                wp_nav_menu(array(
                        'theme_location' => 'home',
                        'container' => false,
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new Walker_Nav_Home()
                    )
                );
                ?>
                <div class="col-md-3 pull-right al-news-search-box">
                    <?php get_search_form(); ?>
                    <a href="" class="al-fc-news-black"></a>
                </div>
            </div>
        </div>
    </div>
</nav>