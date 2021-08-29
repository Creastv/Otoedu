  </main>
  <footer id="footer" itemscope="" itemtype="http://schema.org/WPFooter">
    <div class="footer container-fluid">
      <?php $logoFooter = get_field('logo_footer', 'options'); $size = 'full';
      if(!empty($logoFooter)): ?>
        
        <a class="footer__navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
        <?php  echo wp_get_attachment_image( $logoFooter, $size ) ?> 
        </a>
      <?php endif; ?>
      <nav class="footer__nav">
      <?php wp_nav_menu( array(
        'theme_location'	=> 'secundary',
        'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
        'container'			=> 'div',
        'container_class'	=> '',
        'container_id'		=> '',
        'menu_class'		=> '',
      ) ); ?>
      </nav>
    </div>
  </footer>
  <div id="go-to-top" title="Idź do góry">
    <svg xmlns="http://www.w3.org/2000/svg" width="18.233" height="12.394" viewBox="0 0 18.233 12.394">
      <g id="gototop" transform="translate(16.117 5.515) rotate(90)">
        <line id="Line_1" data-name="Line 1" transform="translate(2 7)" fill="none" stroke="#fff" stroke-width="3"/>
        <path id="Path_223" data-name="Path 223" d="M772.5,707.994l-8,7,8,7" transform="translate(-767.737 -707.994)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
      </g>
    </svg>
  </div>
 
  <?php wp_footer(); ?>
  </body>
</html>


