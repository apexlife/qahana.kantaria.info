
<footer class="main-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 al-copyright">
                <div class="media">
                    <div class="media-left">
                        <a href="<?php echo get_home_url(); ?>">
                            <img class="d-flex mr-3" src="<?php //echo(ot_get_option( 'logo' )); ?>" alt="Generic placeholder image">
                        </a>
                    </div>
                    <div class="media-body">
                        <p>
                            <?php bloginfo('name'); ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php //if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : endif; ?>
            <div class="col-md-2 col-md-offset-1 al-actions">
                <h3>Какой-то заголовок</h3>
                <?php
                    wp_nav_menu(array('theme_location'=>'footer'));
                ?>
            </div>
            <div class="col-md-3 col-md-offset-1 al-social">
                <h3>Подпишитесь на рассылку</h3>
                <p>Подпишитесь на нашу рассылку и получайте самые свежие новости дня</p>
                <form action="">
                    <fieldset>
                        <input class="al-radius" type="email" placeholder="Ваш e-mail" required>
                        <input class="al-radius" type="submit" value="&#8594">
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="row al-copyright-bottom">
            <div class="col-md-9 col-md-offset-1 text-center">
                <p><?php //echo(ot_get_option( 'copyright' )); ?>© 2003-2017 Qahana.am Արարատյան Հայրապետական Թեմ</p>
            </div>
            <div class="col-md-2">
                <?php
//                if ( function_exists( 'ot_get_option' )) {
//                    $facebook = ot_get_option('facebook_url');
//                    $twitter = ot_get_option('twitter_url');
//                    $vk = ot_get_option('vk_url');
//                }
                ?>
                <ul>
                    <li><a href="<?php //echo $facebook; ?>" class="vk-footer"></a></li>
                    <li><a href="<?php //echo $twitter; ?>" class="tw-footer"></a></li>
                    <li><a href="<?php //echo $vk; ?>" class="fb-footer"></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>