<?php get_header(); ?>     
<article id="page-<?php the_ID(); ?>" class="single-post hentry">
    <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
        <header class="__header" data-aos="fade-up" data-aos-duration="800">
            <h1 class="___title"><?php the_title(); ?></h1>
            <div class="___post-meta">
                <?php if( is_singular(  'zajecia' ) || is_singular(  'events' )) { ?>
                    <div class="___inf">
                        <?php $time = get_field('czas_trwania');
                        if(!empty($time)) { ?>
                        <div class="____time">
                            <p>
                               <svg id="alarm-clock" xmlns="http://www.w3.org/2000/svg" width="13.852" height="16" viewBox="0 0 13.852 16">
                                <path id="Path_27" data-name="Path 27" d="M17.225,5.675A2.6,2.6,0,0,0,17.825,4,2.678,2.678,0,0,0,15.15,1.325a2.722,2.722,0,0,0-2.075,1A8.767,8.767,0,0,0,11.8,2.05V1.325h.675A.643.643,0,0,0,13.15.65.624.624,0,0,0,12.475,0H9.825A.643.643,0,0,0,9.15.675a.643.643,0,0,0,.675.675H10.5v.725a7.748,7.748,0,0,0-1.275.275,2.722,2.722,0,0,0-2.075-1A2.641,2.641,0,0,0,4.475,4a2.6,2.6,0,0,0,.6,1.675A6.361,6.361,0,0,0,4.2,9,6.925,6.925,0,1,0,18.05,9,6.1,6.1,0,0,0,17.225,5.675Zm-2.075-3A1.334,1.334,0,0,1,16.475,4c0,.125-.075.325-.075.475a6.218,6.218,0,0,0-1.925-1.6A.949.949,0,0,1,15.15,2.675ZM5.825,4A1.334,1.334,0,0,1,7.15,2.675a1.367,1.367,0,0,1,.725.2,7.519,7.519,0,0,0-2,1.6C5.875,4.325,5.825,4.125,5.825,4ZM11.15,14.675a5.676,5.676,0,0,1,0-11.35A5.607,5.607,0,0,1,16.75,9,5.607,5.607,0,0,1,11.15,14.675Z" transform="translate(-4.2)" fill="#0062a0"/>
                                <path id="Path_28" data-name="Path 28" d="M30.877,24.859H28.752V22.017a.717.717,0,1,0-1.434,0v2.842a.717.717,0,1,0,0,1.434.717.717,0,1,0,1.434,0h2.125a.717.717,0,1,0,0-1.434Z" transform="translate(-21.18 -16.143)" fill="#0062a0"/>
                                </svg>
                                <b>Czas trwania: </b>
                               <?php echo $time; ?>
                            </p>
                        </div>
                        <?php } ?>
                        <?php $price = get_field('cena');
                        if(!empty($price)) { ?>
                        <div class="____price">
                            <p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="19.492" height="16" viewBox="0 0 19.492 16">
                                    <path id="wallet" d="M18.154,10.31h-.334V7a1.176,1.176,0,0,0-.578-1.064,1.08,1.08,0,0,0-1.125-.152L.882,10.31c-.152.091-.334.152-.4.243A1.143,1.143,0,0,0,0,11.527v8.849a1.3,1.3,0,0,0,1.308,1.308H18.184a1.3,1.3,0,0,0,1.308-1.308V11.618A1.344,1.344,0,0,0,18.154,10.31ZM16.208,7.391V10.31H6.568Zm-14.6,12.65V11.953H17.819v1.612H14.262a2.433,2.433,0,0,0,0,4.865h3.558v1.612ZM17.85,15.176v1.612H14.262a.821.821,0,1,1,0-1.642H17.85Z" transform="translate(0 -5.683)" fill="#0062a0"/>
                                </svg>
                                <b>Cena: </b>
                                <?php echo $price; ?>
                            </p>
                        </div>
                        <?php } ?>
                    </div>
                   <?php $link = get_field('zapisz_sie');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="___singin">
                        <a class="btn btn--main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        </div>
                    <?php endif; ?>
                <?php } else{ ?>
                <div class="____author-meta">
                    <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>">
                        <?php the_author(); ?>
                    </a>
                </div>
                <div class="____date-meta">
                    <?php echo get_the_date(); ?>
                </div>
                <div class="____post-comments-number">
                    <?php
                        $comment_count = get_comments_number();
                        $comment_count .= $comment_count > 1 ? esc_html__( ' Comments', 'aeroland' ) : esc_html__( ' Comment', 'aeroland' );
                    ?>
                    <a href="#comments" class="smooth-scroll-link"><?php echo esc_html( $comment_count ); ?></a>
                </div>
                <?php } ?>
            </div>
        </header> 
        <?php if(!is_singular(  'zajecia' ) && !is_singular(  'events' )) { ?>
        <div class="___thumbnail" data-aos="fade-up" data-aos-duration="1000">
            <?php the_post_thumbnail('large'); ?>
        </div>
         <?php } ?>
        <div class="__content" data-aos="fade-up" data-aos-duration="1200">  
            <?php the_content(); ?>
            <?php if(!is_singular(  'zajecia' )) { ?>
                <?php comments_template( '/comments.php' ); ?> 
            <?php } ?>
        </div>
       
        <?php endwhile; ?>
    <?php endif; ?>
</article>
<?php get_footer(); ?>