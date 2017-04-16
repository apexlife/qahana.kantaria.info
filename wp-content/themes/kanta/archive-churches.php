<?php get_header(); ?>
    <main class="al-main-churches-page">
        <div class="container-fluid">
            <h2 class="al-head-title"><?php the_title(''); ?></h2>

                <?php
                $ink_count = 0;
                $ink_row_count = 0;
                $style_count = 1;
                if(have_posts()):
                    while(have_posts()): the_post();
                ?>
                <?php

                    if ($ink_count == 0) {
                        echo "<div class='row-" . $ink_row_count . " row'>";
                    }
                    ?>

                    <div class="col-md-6">
                        <div class="row">
                            <figure class="col-md-8 <?php if ($style_count == 3 || $style_count == 4) { echo "col-md-offset-4"; } ?> al-radius"><a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'full' ) ?></a></figure>
                            <article class="paragraph al-radius <?php if ($style_count == 3 || $style_count == 4) { echo "al-style-2"; } ?>">
                                <div class="wrapper">
                                    <h3><a href="<?php the_permalink(); ?>"><?php trim_title_chars(15, '...'); ?></a></h3>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 20, '...' ); ?>
                                        <a href="<?php the_permalink(); ?>">Узнать подробнее</a>
                                    </p>
                                </div>
                            </article>
                        </div>
                    </div>
                    <?php

                    if ($ink_count == 1) {
                        echo "</div>";
                        $ink_count = 0;
                        $ink_row_count++;
                    } else {
                        $ink_count++;
                    }

                    if($style_count == 3) {
                        $style_count++;
                    }
                    elseif ($style_count == 4) {
                        $style_count = 1;
                    }
                    else {
                        $style_count++;
                    }
                    ?>
                        <?php
                    endwhile;
                endif;
                ?>
            <div class="row">
                <div class="col-xs-12">
                    <nav class="page-navigation">
                        <?php if (function_exists('qahana_pagination')) qahana_pagination(); ?>
                    </nav>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>