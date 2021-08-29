<?php
$id = 'hero-bl-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$classes = 'hero-bl ';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
$tag = get_field('tag_tytul');
$tytul = get_field('tytul');
?>
    <div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" >
        <div class="wraper__hero">
            <div class="col col-1">
                <div class="img" data-aos="fade-right">
                    <?php $image = get_field('image_hero');
                    $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                    <span class="img__ornament orn">
                      <svg xmlns="http://www.w3.org/2000/svg" width="48.689" height="40.562"><path data-name="folder (1)" d="M44.588 2.051h-21.5l-.228-.836A2.17 2.17 0 0020.813 0H2.051A1.954 1.954 0 000 2.051v36.46a1.954 1.954 0 002.051 2.051h44.588a1.954 1.954 0 002.051-2.051V6.077a4.17 4.17 0 00-4.102-4.026zm0 4.026V10.1h-18.23l-1.6-4.026zm0 30.383H4.026V4.1h15.42l3.038 7.52a4.049 4.049 0 003.874 2.659h18.23V36.46z" fill="#fafcfd"/></svg>
                    </span>
                    <span class="img__ornament orn--2">
                       <svg xmlns="http://www.w3.org/2000/svg" width="44.837" height="45.341"><defs><linearGradient id="a" y1=".5" x2="1" y2=".5" gradientUnits="objectBoundingBox"><stop offset=".002" stop-color="#00609e"/><stop offset="1" stop-color="#0076ba"/></linearGradient></defs><path data-name="Path 1" d="M1773.455 1468.958h-25.823a9.518 9.518 0 00-9.507 9.507v26.326a9.518 9.518 0 009.507 9.508h24.1a1.6 1.6 0 100-3.191h-24.1a6.323 6.323 0 01-6.316-6.317v-26.326a6.324 6.324 0 016.316-6.316h25.823a6.324 6.324 0 016.316 6.316v21.292a3.224 3.224 0 01-3.223 3.224h-.017a3.232 3.232 0 01-3.208-3.224v-7.093l.66-.35a3.727 3.727 0 00.019-6.576l-11.442-6.151a3.723 3.723 0 00-3.529 0l-11.442 6.151a3.727 3.727 0 00.019 6.576l11.442 6.065a3.72 3.72 0 003.491 0l7.592-4.024v5.4a6.415 6.415 0 1012.83 0v-21.292a9.518 9.518 0 00-9.508-9.505zm-12.409 26.6a.535.535 0 01-.5 0l-11.446-6.058a.536.536 0 010-.946l11.442-6.151a.534.534 0 01.508 0l11.442 6.151a.536.536 0 010 .946z" transform="translate(-1738.124 -1468.958)" fill="url(#a)"/><path data-name="Path 2" d="M1789.085 1543.986l-4.87 2.293a.14.14 0 01-.12 0l-4.637-2.28a1.6 1.6 0 00-1.408 2.864l4.638 2.28a3.315 3.315 0 002.887.024l4.87-2.292a1.6 1.6 0 00-1.359-2.887z" transform="translate(-1761.589 -1513.969)" fill="url(#a)"/></svg>
                    </span>
                </div>
            </div>
            <div class="col col-2">
                <div class="content" data-aos="fade-left">
                <?php if(!empty($tytul)) { ?>
                   <<?php echo $tag; ?>> <?php echo $tytul; ?> </<?php echo $tag; ?>>
                <?php } ?>
                  <div id="f-search">
                      <ul class="f-search__tabs">
                          <li class="active"><a href="#">Zajęcia</a></li>
                          <li><a href="#">Eventy </a></li>
                      </ul>
                      <form id="f-search__form" action="">
                            <div class="select-wrapper">
                            <select class="select">
                                <option value="value1">Wybierz miasto</option>
                                <option value="value1">Warszawa</option>
                                <option value="value2">Gdańsk</option>
                                <option value="value3">Gdynia</option>
                                <option value="value3">Kościerzyna</option>
                            </select>
                            </div>
                            <div class="select-wrapper">
                            <select class="select">
                                <option value="value1">Wybierz szkołę</option>
                                <option value="value1">Sp. 24</option>
                                <option value="value2">Sp. 64</option>
                                <option value="value3">Sp. 45</option>
                            </select>
                            </div>
                             <button class="btn btn--main" type="submit" value="Submit"> Szukaj</button>
                      </form>
                      <ul class="f-search__filers">
                          <li class="filer"><a href="#">  Matematyka <span>X</span></a></li>
                          <li class="filer"><a href="#">Sp. 24 <span>X</span></a></li>
                      </ul>
                  </div>
                </div>
            </div>
            <div class="col col-3"></div>
        </div>
    </div>


<script>
    jQuery(".filer a").click(function() { 
        jQuery(this).remove();
    }); 
</script>