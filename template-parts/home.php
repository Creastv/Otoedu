<?php
/**
*
* Template name: Home
*/
get_header(); ?>
<article id="page-<?php the_ID(); ?>" class="hentry">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<?php get_footer(); ?>
