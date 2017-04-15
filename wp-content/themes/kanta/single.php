<?php get_header(); ?>


    <main class="al-main-news-inside">
        <div class="container-fluid">
            <section class="col-md-7">

                <?php //if( function_exists('bootstrap_breadcrumb') ) bootstrap_breadcrumb(); ?>

                <article>
                    <!-- Start the Loop. -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <h1><?php the_title(); ?></h1>
                        <?php the_post_thumbnail( 'full' ) ?>
                        <?php the_content(); ?>
                        <!-- Post -->
                    <?php endwhile; ?>
                        <!-- Post Navigation -->
                    <?php else: ?>
                        <!-- No Post Found -->
                    <?php endif; ?>
                    <span class="al-pub-info">
                    <i class="clock"></i>
                        <?php echo get_the_date('d.m.Y'); ?> | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?> |
                    <a href="" class="fb-grey"></a>
                    <a href="" class="tw-grey"></a>
                    <a href="" class="vk-grey"></a>
                    <div class="al-views"></div>
                </span>
                </article>

            </section>
            <aside class="col-md-4 col-md-offset-1 al-main-aside">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </main>


<?php get_footer(); ?>