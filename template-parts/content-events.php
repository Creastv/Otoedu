<article id="page-<?php the_ID(); ?>" class="content-post content--events hentry">
    <div class="___thumbnail">
        <a  href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('large'); ?>
        </a>
        <div class="____type">
           <svg xmlns="http://www.w3.org/2000/svg" width="22.7" height="22.605" viewBox="0 0 22.7 22.605">
            <path id="star-filled" d="M22.168,8.3,15.084,7.165,11.9.47a.555.555,0,0,0-1.027,0L7.54,7.165.456,8.192A.653.653,0,0,0,.172,9.325L5.308,14.6l-1.24,7.367a.643.643,0,0,0,.956.673l6.3-3.471,6.3,3.471c.39.283.956-.177.85-.673L17.28,14.6l5.1-5.278A.558.558,0,0,0,22.168,8.3Z" transform="translate(0.062 -0.125)" fill="#fff"/>
            </svg>
        </div>
    </div>
    <div class="__content">  
        <header class="__header">
            <span class="___type-name">events</span>
            <h2 class="___title"> <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </header> 
        <?php the_excerpt();  ?>
        <div class="___inf">
            <?php  $time = get_field('czas_trwania', get_the_ID());
            if(!empty($time)) { ?>
            <div class="____time">
                <svg id="alarm-clock" xmlns="http://www.w3.org/2000/svg" width="13.852" height="16" viewBox="0 0 13.852 16">
                    <path id="Path_27" data-name="Path 27" d="M17.225,5.675A2.6,2.6,0,0,0,17.825,4,2.678,2.678,0,0,0,15.15,1.325a2.722,2.722,0,0,0-2.075,1A8.767,8.767,0,0,0,11.8,2.05V1.325h.675A.643.643,0,0,0,13.15.65.624.624,0,0,0,12.475,0H9.825A.643.643,0,0,0,9.15.675a.643.643,0,0,0,.675.675H10.5v.725a7.748,7.748,0,0,0-1.275.275,2.722,2.722,0,0,0-2.075-1A2.641,2.641,0,0,0,4.475,4a2.6,2.6,0,0,0,.6,1.675A6.361,6.361,0,0,0,4.2,9,6.925,6.925,0,1,0,18.05,9,6.1,6.1,0,0,0,17.225,5.675Zm-2.075-3A1.334,1.334,0,0,1,16.475,4c0,.125-.075.325-.075.475a6.218,6.218,0,0,0-1.925-1.6A.949.949,0,0,1,15.15,2.675ZM5.825,4A1.334,1.334,0,0,1,7.15,2.675a1.367,1.367,0,0,1,.725.2,7.519,7.519,0,0,0-2,1.6C5.875,4.325,5.825,4.125,5.825,4ZM11.15,14.675a5.676,5.676,0,0,1,0-11.35A5.607,5.607,0,0,1,16.75,9,5.607,5.607,0,0,1,11.15,14.675Z" transform="translate(-4.2)" fill="#0062a0"/>
                    <path id="Path_28" data-name="Path 28" d="M30.877,24.859H28.752V22.017a.717.717,0,1,0-1.434,0v2.842a.717.717,0,1,0,0,1.434.717.717,0,1,0,1.434,0h2.125a.717.717,0,1,0,0-1.434Z" transform="translate(-21.18 -16.143)" fill="#0062a0"/>
                </svg>
                <b>Czas trwania: </b>
                <span><?php echo $time; ?></span>
            </div>
            <?php } ?>
            <?php $price = get_field('cena', get_the_ID());
            if(!empty($price)) { ?>
            <div class="____price">
                <svg xmlns="http://www.w3.org/2000/svg" width="19.492" height="16" viewBox="0 0 19.492 16">
                    <path id="wallet" d="M18.154,10.31h-.334V7a1.176,1.176,0,0,0-.578-1.064,1.08,1.08,0,0,0-1.125-.152L.882,10.31c-.152.091-.334.152-.4.243A1.143,1.143,0,0,0,0,11.527v8.849a1.3,1.3,0,0,0,1.308,1.308H18.184a1.3,1.3,0,0,0,1.308-1.308V11.618A1.344,1.344,0,0,0,18.154,10.31ZM16.208,7.391V10.31H6.568Zm-14.6,12.65V11.953H17.819v1.612H14.262a2.433,2.433,0,0,0,0,4.865h3.558v1.612ZM17.85,15.176v1.612H14.262a.821.821,0,1,1,0-1.642H17.85Z" transform="translate(0 -5.683)" fill="#0062a0"/>
                </svg>
                <b>Cena: </b>
                <span> <?php echo $price; ?><span>  
            </div>
            <?php } ?>
        </div>
        <footer class="__footer">
            <?php $link = get_field('zapisz_sie', get_the_ID());
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
                <a class="btn btn--revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <a class="btn btn--main" href="<?php the_permalink(); ?>"> Zobacz </a>
        </footer>
    </div>
</article>