<article id="page-<?php the_ID(); ?>" class="content-post hentry">
    <header class="__header">
        <div class="___thumbnail">
           <a  href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('large'); ?>
           </a>
            <div class="____date-meta">
                <?php echo get_the_date(); ?>
            </div>
        </div>
        <h2 class="___title"> <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header> 
    <div class="__content">  
        <?php the_excerpt();  ?>
    </div>
    <footer class="__footer">
        <a class="btn btn--main" href="<?php the_permalink(); ?>"> Zobacz </a>
    </footer>
</article>