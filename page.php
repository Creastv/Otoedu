<?php get_header(); ?>
<article id="page-<?php the_ID(); ?>" class="single-page hentry" >
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <header class="__header" data-aos="fade-up" data-aos-duration="800">
            <h1 class="___title"><?php the_title(); ?></h1>
        </header>
        <div class="__content" data-aos="fade-up" data-aos-duration="1200">  
            <?php the_content(); ?>
        </div>
        <?php endwhile; ?>
    <?php endif; ?>
</article>



<?php get_footer(); ?>