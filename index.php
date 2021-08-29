<?php get_header(); ?>
<?php get_template_part( 'template-parts/title-page', get_post_format() ); ?>  
<div class="page-content" data-aos="fade-up" data-aos-duration="1200">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'templates/header/title-page', get_post_format() ); ?>
            <?php if ($post->post_type == 'zajecia') { ?>
                <?php get_template_part( 'template-parts/content-zajecia', get_post_format() ); ?>
            <?php } elseif ($post->post_type == 'events') { ?>
                <?php get_template_part( 'template-parts/content-events', get_post_format() ); ?>
            <?php } else { ?>
                <?php get_template_part( 'template-parts/content-post', get_post_format() ); ?>
            <?php } ?>
            
        <?php endwhile; ?>
    <?php else : ?>
        <h1 class="text-center">Nic nie znaleziono</h1>
    <?php endif; ?>
</div>
<?php get_footer(); ?>
