<h1><?php the_title(); ?></h1>
<?php the_post_thumbnail( 'full' ) ?>
<?php the_excerpt(); ?><a href="<?php the_permalink(); ?>" class="al-more">Узнать подробнее</a>
</p>
<span class="al-pub-info"><i class="clock"></i>
<?php echo get_the_date('d.m.Y'); ?> | <?php echo get_the_date('H'); ?>:<?php echo get_the_date('i'); ?> |</span>
