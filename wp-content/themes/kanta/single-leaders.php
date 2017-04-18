<?php get_header(); ?>

    <main class="al-main-news-inside">
        <div class="container-fluid">
            <section class="col-md-8 col-md-offset-2">
                <article>
                    <!-- Start the Loop. -->
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        <div class="text-center">
                        <h1><?php the_title(); ?></h1>

                            <?php the_post_thumbnail( 'full' ) ?>
                        </div>
                        <?php the_content(); ?>

                        <?php echo get_post_meta($post->ID, 'description', true); ?>
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
        </div>
    </main>



<?php get_footer(); ?>