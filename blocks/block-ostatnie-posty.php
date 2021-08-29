<?php
$id = 'wy-posty-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'wy-posty ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<?php 
    $wyroPosty = new WP_Query( array(
    'post__in' => get_option('sticky_posts'),
    'post_type' => 'post',
    'posts_per_page' => 4,
     
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="arrow">
        <div class="s-button-next s-next"><svg xmlns="http://www.w3.org/2000/svg" width="32.278" height="18.233" viewBox="0 0 32.278 18.233"><g transform="translate(2.278 2.117)"><line x1="28" transform="translate(2 7)" fill="none" stroke="#000" stroke-width="3"/><path d="M772.5,707.994l-8,7,8,7" transform="translate(-764.5 -707.994)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="3"/></g></svg></div>
        <div class="s-button-prev s-prev"><svg xmlns="http://www.w3.org/2000/svg" width="32.278" height="18.233" viewBox="0 0 32.278 18.233"><g transform="translate(-1529 -3144.883)"><line x2="28" transform="translate(1529 3154)" fill="none" stroke="#000" stroke-width="3"/><path d="M764.5,707.994l8,7-8,7" transform="translate(786.5 2439.006)" fill="none" stroke="#000" stroke-linecap="round" stroke-width="3"/></g></svg></div>
    </div>
    <div class="wy-posty-wrap">
        <div class="swiper-container wy-po">
            <div class="swiper-wrapper">
                <?php while ( $wyroPosty->have_posts() ) : $wyroPosty->the_post(); ?>
                <div class="swiper-slide">
                <?php get_template_part( 'template-parts/content-post', get_post_format() ); ?>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</section>

