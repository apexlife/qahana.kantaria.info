<?php get_header(); ?>
    <main class="al-main-news-page">
        <div class="container-fluid">
            <section class="col-md-7">
                <h2><?php the_title(''); ?></h2>

                <?php
                    if(have_posts()):
                    while(have_posts()): the_post();
                ?>
                <article>
                    <?php
                    if ( has_post_thumbnail() ) {
                    ?>
                        <a href="<?php the_permalink(); ?>">
                            <figure class="al-radius">
                                <?php the_post_thumbnail(); ?>
                            </figure>
                        </a>
                    <?php
                    }
                    ?>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="al-more">Узнать подробнее</a>
                    </p>
                    <span class="al-pub-info"><i class="clock"></i><?php echo get_the_date('d.m.Y'); ?> | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?>
                        <a href="" class="fb-grey"></a>
                        <a href="" class="tw-grey"></a>
                        <a href="" class="vk-grey"></a>
                    </span>
                </article>
                <?php
                    endwhile;
                    endif;
                ?>

                <nav class="page-navigation">
                    <?php if (function_exists('qahana_pagination')) qahana_pagination(); ?>

                </nav>
            </section>
            <aside class="col-md-4 col-md-offset-1 al-main-aside">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </main>


<?php get_footer(); ?>