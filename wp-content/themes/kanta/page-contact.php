<?php
/**
Template Name: Contact Page
 */
?>
<?php get_header(); ?>

<main class="al-main-contact">
    <div class="container-fluid">
        <h2 class="al-head-title">
            <?php the_title(); ?>
        </h2>
        <div class="row">
            <div class="col-md-5">
                <div class="al-map-wrapper al-radius">
                    <?php echo get_post_meta($post->ID, 'description', true); ?>
                </div>
            </div>

            <div class="col-md-6 col-md-offset-1">
                <h3><?php echo get_post_meta($post->ID, 'textUpperForm', true); ?></h3>
                <?php echo do_shortcode( '[contact-form-7 id="144" title="Contact form Page"]' ); ?>
                <div class="row al-contact-info">
                    <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                                <i class="location-icon"></i>
                            </div>
                            <div class="media-body">
                                <p><?php echo get_post_meta($post->ID, 'contactaddress', true); ?></p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="message-icon"></i>
                            </div>
                            <div class="media-body">
                                <a href="mailto:<?php echo get_post_meta($post->ID, 'contactEmail', true); ?>" class="al-st"><?php echo get_post_meta($post->ID, 'contactEmail', true); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="media">
                            <div class="media-left">
                                <i class="phone-icon"></i>
                            </div>
                            <div class="media-body">
                                <p><?php echo get_post_meta($post->ID, 'number', true); ?></p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fax-icon"></i>
                            </div>
                            <div class="media-body">
                                <p><?php echo get_post_meta($post->ID, 'fuxnumber', true); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>
