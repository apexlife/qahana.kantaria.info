<?php get_header(); ?>
    <main class="al-main-news-page">
        <div class="container-fluid">
            <section class="col-md-7">
                <?php
                if(have_posts()):
                    while(have_posts()): the_post();
                        ?>
                        <article>
                            <?php get_template_part('content', 'search'); ?>
                        </article>
                        <?php
                    endwhile;
                endif;
                ?>
            </section>
            <aside class="col-md-4 col-md-offset-1 al-main-aside">
                <?php get_sidebar(); ?>
            </aside>
        </div>
    </main>


<?php get_footer(); ?>