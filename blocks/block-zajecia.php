<?php
$id = 'zajecia-bl-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'zajecia-bl ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
?>
<?php 
    $wyroPosty = new WP_Query( array(
    'post__in' => get_option('sticky_posts'),
    'post_type' => 'zajecia',
    'posts_per_page' => 3,
    ));
?>
<section id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <div class="zajecia-bl__wraper">
        <?php while ( $wyroPosty->have_posts() ) : $wyroPosty->the_post(); ?>
        <?php get_template_part( 'template-parts/content-zajecia', get_post_format() ); ?>
        <?php endwhile; wp_reset_query(); ?>
    </div>
</section>

