<?php
$id = 'fade-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$classes = 'fade ';
if( !empty($block['className']) ) {
    $classes .= sprintf( ' %s', $block['className'] );
}
?>
<div id="<?php echo $id; ?>" class="<?php echo esc_attr($classes); ?>" data-aos="fade-up" data-aos-duration="1000" >
    <InnerBlocks />
</div>




