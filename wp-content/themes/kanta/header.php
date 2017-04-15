<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Exo+2:500,700" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="al-library-header" class="main-header">
    <div class="container-fluid black">
        <div class="col-md-7">
            <a href="index.html" class="navbar-brand">
                <div>
                    <img src="../assets/img/logo.png" alt="image">
                </div>
                <p><strong>библиотека</strong>Армянской апостольской церкви<small>арарат патриаршая епархия</small></p>
            </a>
        </div>
        <div class="col-md-5">
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