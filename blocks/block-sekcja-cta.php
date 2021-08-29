<?php
$id = 'section-cta-bl-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}
$className = 'section-cta-bl ';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}

$nadTytulem = get_field('nad_tytulem');
$tytul = get_field('tytul');
$tag = get_field('tag');
$podTytulem = get_field('pod_tytulem');
?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
   <div class="section-cta-bl__wrap container">
       <div class="col col-1">
          <p> <?php the_field('edytor'); ?></p>
       </div>
       <div class="col col-2">
           <?php 
            $link = get_field('link_cta');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn btn--white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
       </div>
   </div>
</div>

