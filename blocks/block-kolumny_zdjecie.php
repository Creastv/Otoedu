<?php
$id = 'two-col-bl-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$classes = 'two-col-bl ';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
?>
<?php if(get_field('zdjecie_po_stronie') == "Prawa") { ?>
    <div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" >
        <div class="wraper-bl wraper-bl--right ">
            <div class="col col-3"></div>
            <div class="col col-1">
                <div class="content" data-aos="fade-right">
                <InnerBlocks />
                </div>
            </div>
            <div class="col col-2">
                <div class="img" data-aos="fade-left">
                    <?php $image = get_field('zdjecie');
                    $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </div>
            </div>
        </div>
    </div>
  
<?php } elseif(get_field('zdjecie_po_stronie') == "Lewa") { ?>

    <div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" >
        <div class="wraper-bl wraper-bl--left ">
            <div class="col col-1">
                <div class="img" data-aos="fade-right">
                    <?php $image = get_field('zdjecie');
                    $size = 'full';
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); } ?>
                </div>
            </div>
            <div class="col col-2">
                <div class="content" data-aos="fade-left">
                <InnerBlocks />
                </div>
            </div>
            <div class="col col-3"></div>
        </div>
    </div>

<?php } ?>


