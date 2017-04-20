<?php get_header(); ?>

    <header class="large-main-page">
        <div class="al-main-bg">
            <img src="<?php bloginfo('template_url') ?>/assets/img/church-inside-1.jpg" alt="image">
        </div>
        <section class="container-fluid vh-full">
            <div class="col-md-11">
                <div class="row">
                    <div class="col-md-5 pull-right">
                        <div class="al-wrapper-v">
                            <div class="al-main-news">
                                <?php
                                global $query_string;
                                query_posts( $query_string.'&posts_per_page=1');
                                ?>
                                <!-- Start the Loop. -->
                                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                    <!-- Post -->
                                    <a class="al-news-btn" href="<?php echo get_category_link( '2' ); ?>"><?php echo get_cat_name('2'); ?></a>
                                    <h1><a href="<?php the_permalink(); ?>"><?php trim_title_chars(15, '...'); ?></a></h1>
                                    <p><a href="<?php the_permalink(); ?>"><?php $new_excerpt = get_the_excerpt(); echo string_limit_words($new_excerpt, 10); ?></a>
                                    </p>
                                <?php endwhile; ?>
                                    <!-- Post Navigation -->
                                <?php else: ?>
                                    <!-- No Post Found -->
                                <?php endif; ?>


                                <?php
                                wp_reset_query(); // сброс запроса
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 carousel-news">
                <div class="col-md-11 al-line"></div>
                <div id="al-carousel-news" class="owl-carousel owl-theme">

                    <!-- Start the Loop. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- Post -->
                        <article class="item">
                            <a href="<?php the_permalink(); ?>">
                                <p><?php $cat = get_the_category(); echo $cat[0]->cat_name; ?></p>
                                <h4><?php the_title(); ?></h4>
                                <span><?php echo get_the_date('d.m.Y'); ?></span>
                            </a>
                        </article>
                    <?php endwhile; ?>
                        <!-- Post Navigation -->
                    <?php else: ?>
                        <!-- No Post Found -->
                    <?php endif; ?>

                </div>
            </div>
        </section>
    </header>
    <main class="al-all-content">
    <section class="for-students-and-calendar">
        <div class="container-fluid hot-news">
            <div class="row">
                <div class="urgent">
                    <a href="">Срочные новости:</a>
                </div>
                <div class="main-hot-news">
                    <div class="wrapper">
                        <ul class="al-list-animated">
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <li>
                                    <span class="al-seperator"></span>
                                    <a href="<?php the_permalink(); ?>" class="al-main-link">
                                        <?php the_title(); ?>

                                        (<?php echo get_the_date('D'); ?>. <?php echo get_the_date('H'); ?>
                                        :<?php echo get_the_date('i'); ?>).</a>
                                    <div class="fast-box">
                                        <span><?php echo get_the_date('Y.m.d'); ?></span>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>">Перейти</a>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <ul id="navlist" class="gallery-menu">
                <li class="active"><a href="">Семейное</a></li>
                <li><a href="">Для начинающих</a></li>
                <li><a href="">Для начинающих</a></li>
                <li><a href="">Семейное</a></li>
                <li><a href="">Для начинающих</a></li>
                <li><a href="">Для начинающих</a></li>
            </ul>
        </div>
        <div class="container-fluid gallery-owl">
            <div class="row">
                <div id="al-main-gallery-carousel" class="loop owl-carousel owl-loaded owl-drag">
                    <!-- Start the Loop. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <figure class="owl-item">
                            <?php the_post_thumbnail('full') ?>
                            <div class="al-wrapper-gallery-info">
                                <figcaption><a
                                        href="<?php the_permalink(); ?>"><?php trim_title_chars(30, '...'); ?></a>
                                </figcaption>
                                <p><a href="<?php the_permalink(); ?>"><?php $new_excerpt = get_the_excerpt();
                                        echo string_limit_words($new_excerpt, 10); ?></a></p>
                                <a href="<?php the_permalink(); ?>">Կարդալ ավելին</a>
                            </div>
                        </figure>
                    <?php endwhile; ?>
                        <!-- Post Navigation -->
                    <?php else: ?>
                        <!-- No Post Found -->
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="container-fluid beginners">
            <div class="col-md-4 al-for-beginners-news">
                <div class="al-wrapper">
                    <h2>Для начинающих</h2>
                    <?php global $query_string;
                    query_posts($query_string . '&posts_per_page=3'); ?>
                    <!-- Start the Loop. -->
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <!-- Post -->
                        <article>
                            <div class="al-img-wrapper">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                            </div>
                            <div class="al-main-content">
                                <h3><a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a></h3>
                                <p><?php $new_excerpt = get_the_excerpt();
                                    echo string_limit_words($new_excerpt, 10); ?></p>
                                <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                <span class="al-pub-info"><i class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                    | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                            </div>
                        </article>
                    <?php endwhile; ?>
                        <!-- Post Navigation -->
                    <?php else: ?>
                        <!-- No Post Found -->
                    <?php endif; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
            <div class="col-md-4 religious-holiday">
                <div class="al-wrapper">
                    <ul id="smallbar" class="gallery-menu nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#al-main-tab">Праздники</a></li>
                        <li><a data-toggle="tab" href="#al-header-tab">Заголовок</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="al-main-tab" class="tab-pane fade in active">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <div id="al-header-tab" class="tab-pane">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">CALENDAR</div>
        </div>
        <div class="container-fluid news">
            <h2 class="al-title"><span>Новости</span></h2>
            <div class="col-md-4 al-news-section-1">
                <div class="al-wrapper">
                    <ul id="threenavs" class="gallery-menu nav nav-tabs">
                        <li class="active"><a href="#news-tab-1" data-toggle="tab">Семейное</a></li>
                        <li><a href="#news-tab-2" data-toggle="tab">Молодежное</a></li>
                        <li><a href="#news-tab-3" data-toggle="tab">Детское</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="news-tab-1" class="tab-pane fade in active">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <div id="news-tab-2" class="tab-pane">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <div id="news-tab-3" class="tab-pane">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 al-news-section-2">
                <div class="al-wrapper">
                    <article>
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius"
                                     src="<?php bloginfo('template_url') ?>/assets/img/church-inside-3.jpg" alt="image">
                            </a>
                        </div>
                        <figcaption><a href="">Как нужно обращаться</a></figcaption>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet
                            mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.
                            Sed non mauris vitae eu in elit. Class aptent taciti sociosqu ad.</p>
                        <a href="" class="al-more">Կարդալ ավելին</a>
                        <span class="al-pub-info"><i class="clock"></i>13.03.2017 | 12:59</span>
                    </article>
                </div>
            </div>
            <div class="col-md-4 al-news-section-3">
                <div class="al-wrapper">
                    <ul id="smallbar2" class="gallery-menu nav nav-tabs lavalamp">
                        <div class="lavalamp-object easeOutBack"
                             style="transition-duration: 0.7s; width: 230px; height: 70px; transform: translate(0px, 0px);"></div>
                        <li class="active lavalamp-item"><a href="#al-header-tab-last-1" data-toggle="tab">Заголовок</a>
                        </li>
                        <li class="lavalamp-item"><a href="#al-header-tab-last-2" data-toggle="tab">Заголовок 2</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="al-header-tab-last-1" class="tab-pane fade in active">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                        <div id="al-header-tab-last-2" class="tab-pane">
                            <?php global $query_string;
                            query_posts($query_string . '&posts_per_page=3'); ?>
                            <!-- Start the Loop. -->
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <!-- Post -->
                                <article>
                                    <div class="al-img-wrapper">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                                    </div>
                                    <div class="al-main-content">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php trim_title_chars(25, '...'); ?></a>
                                        </h3>
                                        <p><?php $new_excerpt = get_the_excerpt();
                                            echo string_limit_words($new_excerpt, 10); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="al-more">Կարդալ ավելին</a>
                                        <span class="al-pub-info"><i
                                                class="clock"></i><?php echo get_the_date('d.m.Y'); ?>
                                            | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?></span>
                                    </div>
                                </article>
                            <?php endwhile; ?>
                                <!-- Post Navigation -->
                            <?php else: ?>
                                <!-- No Post Found -->
                            <?php endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="multimedia">
        <div class="container-fluid">
            <h2 class="al-title"><span>Фото и видео</span></h2>
            <div class="row">
                <div id="al-main-multimedia-carousel" class="loop owl-carousel owl-loaded owl-drag">
                    <figure class="owl-item">
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius"
                                     src="<?php bloginfo('template_url') ?>/assets/img/church-inside-1.jpg" alt="image">
                                <span class="al-info-video"><i class="play"></i>1:06</span>
                            </a>
                        </div>
                        <figcaption>
                            <h2><a href="">Заголовок</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate </p>
                            <a class="al-more" href="">Կարդալ ավելին</a>
                        </figcaption>
                    </figure>
                    <figure class="owl-item">
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius"
                                     src="<?php bloginfo('template_url') ?>/assets/img/church-inside-2.jpg" alt="image">
                                <span class="al-info-video"><i class="play"></i>1:06</span>
                            </a>
                        </div>
                        <figcaption>
                            <h2><a href="">Заголовок</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate </p>
                            <a class="al-more" href="">Կարդալ ավելին</a>
                        </figcaption>
                    </figure>
                    <figure class="owl-item">
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius"
                                     src="<?php bloginfo('template_url') ?>/assets/img/church-inside-3.jpg" alt="image">
                                <span class="al-info-video"><i class="play"></i>1:06</span>
                            </a>
                        </div>
                        <figcaption>
                            <h2><a href="">Заголовок</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate </p>
                            <a class="al-more" href="">Կարդալ ավելին</a>
                        </figcaption>
                    </figure>
                    <figure class="owl-item">
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius"
                                     src="<?php bloginfo('template_url') ?>/assets/img/christian-1.jpg" alt="image">
                                <span class="al-info-photo"><i class="camera"></i></span>
                            </a>
                        </div>
                        <figcaption>
                            <h2><a href="">Заголовок</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate </p>
                            <a class="al-more" href="">Կարդալ ավելին</a>
                        </figcaption>
                    </figure>
                    <figure class="owl-item">
                        <div class="al-img-wrapper al-radius">
                            <a href="">
                                <img class="al-radius" src="<?php bloginfo('template_url') ?>/assets/img/catholicos.jpg"
                                     alt="image">
                                <span class="al-info-photo"><i class="camera"></i></span>
                            </a>
                        </div>
                        <figcaption>
                            <h2><a href="">Заголовок</a></h2>
                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                                Aenean sollicitudin, lnibh id elit. Duis sed odio sit amet nibh vulputate </p>
                            <a class="al-more" href="">Կարդալ ավելին</a>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="container-fluid important-news">
            <div class="col-md-6">
                <div class="main-content">
                    <img class="al-radius" src="<?php bloginfo('template_url') ?>/assets/img/christian-2.jpg"
                         alt="image">
                    <div class="al-important-news-wrapper">
                        <h2><a href="">Важная новость</a></h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudinid elit. Duis </p>
                        <a href="" class="al-more">Կարդալ ավելին</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-content">
                    <img class="al-radius" src="<?php bloginfo('template_url') ?>/assets/img/christian-3.jpg"
                         alt="image">
                    <div class="al-important-news-wrapper">
                        <h2><a href="">Важная новость</a></h2>
                        <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
                            Aenean sollicitudinid elit. Duis </p>
                        <a href="" class="al-more">Կարդալ ավելին</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>