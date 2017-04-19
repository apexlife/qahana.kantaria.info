<?php get_header(); ?>

    <main class="al-main-media">
        <div class="container-fluid">
            <h2 class="al-head-title">Медиа</h2>
            <ul id="media-threenavs" class="al-global-style-tabs nav nav-tabs lavalamp">
                <li class="active lavalamp-item"><a href="#media-tab-videos" data-toggle="tab">Видео</a></li>
                <li class="lavalamp-item"><a href="#media-tab-audio" data-toggle="tab">Аудио</a></li>
                <li class="lavalamp-item"><a href="#media-tab-photo" data-toggle="tab">Фото</a></li>
            </ul>
            <div class="tab-content">
                <div id="media-tab-videos" class="tab-pane fade in active">
                    <section class="al-playlist">
                        <p>This is Photoshops version</p>
                        <?php /* Start the Loop */
                        $ink_count = 0;
                        $ink_row_count = 0 ?>
                        <?php if (have_posts()):
                            while (have_posts()): the_post();
                                if ($ink_count == 0) {
                                    echo "<div class='row-" . $ink_row_count . " row'>";
                                }
                                ?>

                                <figure class="col-md-2">
                                    <div class="al-radius">
                                        <img src="<?php video_thumbnail(); ?>" alt="" class="all-radius video-image">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo get_post_meta($post->ID, 'youtube', true); ?>?controls=0&rel=0&showinfo=0&loop=0&egm=0&border=0&fs=0&disablekb=1&showsearch=0" frameborder="0" allowfullscreen></iframe>
                                        <a href="javascript:;" class="al-play play-big"></a>
                                        <span class="time"></span>
                                    </div>
                                    <figcaption><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></figcaption>
                                    <span class="al-date-and-views">
                                        <i class="visible-48"></i>
                                            <span>
                                                <?php
                                                    $urlId = get_post_meta($post->ID, 'youtube', true);;
                                                ?>
                                                <script>
                                                var url = "<? echo $urlId ?>";
                                                $.getJSON('https://www.googleapis.com/youtube/v3/videos?part=statistics&id=' + url +'&key=AIzaSyCH3EK5dtl1B88epwVW0iPbaBKw6zy2vfU', function(data) {
                                                    var viewCount = data.items[0].statistics.viewCount;
                                                    $(".al-date-and-views span").html(viewCount);
                                                });
                                                $.getJSON('https://www.googleapis.com/youtube/v3/videos?part=contentDetails&id=' + url +'&key=AIzaSyCH3EK5dtl1B88epwVW0iPbaBKw6zy2vfU', function(data) {
                                                    var count = data.items[0].contentDetails.duration;
                                                function duration(duration) {
                                                    var match = duration.match(/PT(\d+H)?(\d+M)?(\d+S)?/)

                                                    var hours = (parseInt(match[1]) || 0);
                                                    var minutes = (parseInt(match[2]) || 0);
                                                    var seconds = (parseInt(match[3]) || 0);
                                                    var countrt = minutes+":"+seconds;
                                                    return (countrt);
                                                }
                                                    $(".time").text(duration(count));
                                                });
                                            </script>
                                        </span>
                                        <i class="clock-small"></i> <?php echo get_the_date('d.m.Y'); ?>
                                    </span>
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
                        <div class="show-all">
                            <a href="" class="al-radius">Показать все</a>
                        </div>
                    </section>
                    <section class="al-playlist">
                        <p>This is Photoshops version</p>
                        <div class="row">
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                        </div>
                        <p>This is Photoshops version</p>
                        <div class="row">
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                        </div>
                        <div class="row">
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                        </div>
                        <div class="show-all">
                            <a href="" class="al-radius">Показать все</a>
                        </div>
                    </section>
                    <section class="al-playlist">
                        <p>This is Photoshops version</p>
                        <div class="row">
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                        </div>
                        <p>This is Photoshops version</p>
                        <div class="row">
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                            <figure class="col-md-2">
                                <div class="al-radius">
                                    <img class="al-radius" src="../assets/img/christian-2.jpg" alt="">
                                    <a href="" class="al-play play-big"></a>
                                    <span>
                                 <i class="play"></i>
                                    2:35
                                </span>
                                </div>
                                <figcaption><a href="">This is Photoshops version of Lorem Ipsum</a></figcaption>
                                <span class="al-date-and-views">
                                <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                            </span>
                            </figure>
                        </div>
                    </section>
                    <div class="see-more al-radius">
                        <a href="" class="al-radius">Смотреть больше</a>
                    </div>
                </div>
                <div id="media-tab-audio" class="tab-pane">
                    <p>On Construction</p>
                </div>
                <div id="media-tab-photo" class="tab-pane">
                    <section class="row al-photo-album">
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                    </section>
                    <section class="row al-photo-album">
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                    </section>
                    <section class="row al-photo-album">
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="al-main-title">This is Photoshops version</p>
                            <div class="row al-st">
                                <figure class="col-md-8 al-radius">
                                    <div class="al-large-wrapper">
                                        <a class="al-link-img" href="">
                                            <img class="al-radius" src="../assets/img/church-1.jpg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera"></i></span>
                                        <a href="" class="main-content">
                                            <p>This is Photoshops version</p>
                                            <span class="al-date-and-views">
                                            <i class="view-white"></i><span>1864</span><i class="clock-white"></i> 13.03.2017
                                         </span>
                                        </a>
                                    </div>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="row al-st">
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                                <figure class="col-md-4">
                                    <div class="al-wrapper">
                                        <a href="">
                                            <img class="al-radius" src="../assets/img/church-2.jpeg" alt="image">
                                        </a>
                                        <span class="al-left-bottom-ic"><i class="camera-small"></i></span>
                                    </div>
                                    <a href="">This is Photoshops version of Lorem Ipsum</a>
                                    <span class="al-date-and-views">
                                    <i class="visible-48"></i><span>1864</span><i class="clock-small"></i> 13.03.2017
                                </span>
                                </figure>
                            </div>
                            <div class="al-arrows-holder">
                                <span class="al-radius"><i class="arrow-left-small"></i></span>
                                <span class="al-radius"><i class="arrow-right-small"></i></span>
                            </div>
                        </div>
                    </section>
                    <div class="see-more al-radius al-change">
                        <a href="" class="al-radius">Смотреть больше</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

<?php get_footer(); ?>