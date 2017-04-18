<?php get_header(); ?>
    <main class="al-main-leaders-page">
        <div class="container-fluid">
            <?php /* Start the Loop */
            $ink_count = 0;
            $ink_row_count = 0 ?>
            <?php if (have_posts()):
                while (have_posts()): the_post();
                    if ($ink_count == 0) {
                        echo "<div class='row-" . $ink_row_count . " row'>";
                    }
                    ?>

                    <figure class="col-md-3">
                        <div class="al-radius"><a
                                    href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full') ?></a>
                        </div>
                        <figcaption class="al-radius">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <span><?php echo get_post_meta($post->ID, 'ageLeader', true); ?></span>
                        </figcaption>
                    </figure>

                    <?php
                    if ($ink_count == 3) {
                        echo "</div>";
                        $ink_count = 0;
                        $ink_row_count++;
                    } else {
                        $ink_count++;
                    }

                endwhile;
            else:
            endif; ?>
        </div>
    </main>


<?php get_footer(); ?>