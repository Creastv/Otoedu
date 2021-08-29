<?php
function register_acf_block_types() {
    acf_register_block_type(array(
        'name'              => 'Ostatnie posty',
        'title'             => __('Ostatnio dodane posty'),
        'render_template'   => 'blocks/block-ostatnie-posty.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
          'align' =>false,
          'mode' => 'preview',
          'jsx' => false ,
        ),
      'keywords'          => array( 'ostatnie posty', 'posty' ),
      'enqueue_assets'    => function(){
        if ( ! is_admin() ) {
        wp_enqueue_style( 'cr_swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css' );
        wp_enqueue_script('cr-swiper_js', 'https://unpkg.com/swiper/swiper-bundle.min.js',  array(), '20130456', true );
        wp_enqueue_script( 'wy-posty', get_template_directory_uri() . '/blocks/includes/wy-posty.js', array(), '20130457', true );
        }
      }
    ));

    acf_register_block_type(array(
        'name'              => 'Zajecia',
        'title'             => __('Zajęcia'),
        'render_template'   => 'blocks/block-zajecia.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => false ,
      ),
      'keywords'          => array( 'zajecia' ),
    ));
    
    acf_register_block_type(array(
        'name'              => 'event',
        'title'             => __('Event'),
        'render_template'   => 'blocks/block-events.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => false ,
      ),
      'keywords'          => array( 'events' ),
    ));

    acf_register_block_type(array(
        'name'              => 'two-col',
        'title'             => __('Dwie kolumny'),
        'render_template'   => 'blocks/block-kolumny_zdjecie.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => true,
      ),
      'keywords'          => array( 'Dwie kolumny' ),
    ));

     acf_register_block_type(array(
        'name'              => 'hero',
        'title'             => __('Hero'),
        'render_template'   => 'blocks/block-hero.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => true,
      ),
      'keywords'          => array( 'Hero' ),
    ));

    acf_register_block_type(array(
        'name'              => 'cta',
        'title'             => __('Sekcja CTA'),
        'render_template'   => 'blocks/block-sekcja-cta.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => false ,
      ),
      'keywords'          => array( 'CTA' ),
    ));

    acf_register_block_type(array(
        'name'              => 'button',
        'title'             => __('Button'),
        'render_template'   => 'blocks/block-button.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview',
        'keywords'          => array( 'odnośnik', 'button' ),
    ));

    acf_register_block_type(array(
        'name'              => 'tytul',
        'title'             => __('Nagłówek'),
        'render_template'   => 'blocks/block-title.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'mode'            => 'preview', 
      'keywords'          => array( 'tytuł', 'nagłówek' ),
    ));

    acf_register_block_type(array(
        'name'              => 'fade',
        'title'             => __('FadeUp'),
        'render_template'   => 'blocks/block-fadeUp.php',
        'category'          => 'formatting',
        'icon' => array(
          'background' => '#0062a0',
          'foreground' => '#fff',
          'src' => 'ellipsis',
        ),
      'supports'			=> array(
        'align' =>false,
        'mode' => 'edit',
        'jsx' => true
      ),
      'keywords'          => array( 'FadeUp' ),
    ));
}

if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}

