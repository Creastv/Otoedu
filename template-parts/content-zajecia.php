<article id="page-<?php the_ID(); ?>" class="content-post content--zajęcia hentry">
    <header class="__header">
        <div class="___thumbnail">
           <a  href="<?php the_permalink(); ?>">
           <?php the_post_thumbnail('large'); ?>
           </a>
            <div class="____type">
                <svg id="graduation" xmlns="http://www.w3.org/2000/svg" width="19.221" height="16" viewBox="0 0 19.221 16">
                   <path id="Path_37" data-name="Path 37" d="M18.5,14.087V11.594a1.233,1.233,0,0,0,.721-1.2,1.413,1.413,0,0,0-.811-1.2L10.181,5.438a1.283,1.283,0,0,0-1.051,0L.811,9.1A1.31,1.31,0,0,0,0,10.3a1.413,1.413,0,0,0,.811,1.2L3.3,12.615V16.85a4.467,4.467,0,0,0,4.475,4.475h3.033a4.467,4.467,0,0,0,4.475-4.475V13.036l1.592-.721v1.832l-.571.571c-.09.09-.09.15,0,.24L17.6,16.249c.09.09.15.09.24,0l1.291-1.291c.09-.09.09-.15,0-.24ZM9.7,6.939,17.239,10.3,9.7,13.757,2.072,10.3Zm4.115,9.941a2.989,2.989,0,0,1-3,2.883H7.779A2.884,2.884,0,0,1,4.9,16.88V13.366L9.22,15.288a1.089,1.089,0,0,0,.571.09,1.472,1.472,0,0,0,.571-.09l3.454-1.532V16.88Z" transform="translate(0 -5.325)" fill="#fafcfd"/>
                </svg>
            </div>
        </div>
        <span class="___type-name">zajęcia</span>
        <h2 class="___title"> <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    </header> 
    <div class="__content">  
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
</article>