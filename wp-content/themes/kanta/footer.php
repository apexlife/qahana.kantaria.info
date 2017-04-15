<footer class="main-footer">
    <div class="container-fluid">
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 al-copyright">
            <span>© 2017 Все права защищены</span>
            <div>
                <i class="logo"></i>
                <p>
                    Армянская <br>
                    апостольская <br>
                    церковь
                </p>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 al-about">
            <h3>О сайте</h3>
            <p>his is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean
                sollicitudinid elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan
                ipsum velit. Nam nec tellus a odio</p>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 al-actions">
            <?php
                wp_nav_menu(array('theme_location'=>'footer'));
            ?>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 al-social">
            <h3>Мы в соц сетях:</h3>
            <ul>
                <li><a href=""><span><i class="fc"></i></span><strong>Facebook</strong></a></li>
                <li><a href=""><span><i class="tw"></i></span><strong>Twitter</strong></a></li>
                <li><a href=""><span><i class="vk"></i></span><strong>Vk</strong></a></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>