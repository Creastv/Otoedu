<?php
$id = 'btn-group-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'btn-group ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
$classFlex =" ";

if( !empty($block['align']) ) {
    if($block['align'] == 'center'){
        $classFlex .= ' justify-content-center';
    } elseif($block['align'] == 'right') {
        $classFlex .= ' justify-content-end';
    }
    elseif($block['align'] == 'left') {
        $classFlex .= ' justify-content-start';
    }
}
$link = get_field('link_btn');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> <?php echo esc_attr($classFlex); ?>">
<?php if(get_field('styl') == "Main") { ?>
    <?php if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="btn btn--main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
<?php } elseif(get_field('styl') == "Revers") { ?>
    <?php if( $link ): 
        $link_url = $link['url'];
        $link_title = $link['title'];
        $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
        <a class="btn btn--revers" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
    <?php } ?>
</div>