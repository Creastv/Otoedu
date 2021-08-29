<?php $link = get_field('link', 'options');
$class = "";
$link ? $class="container-fluid--nav" : $class="container-fluid";
?>
<div class="<?php echo $class; ?>">
	<div id="js-navigation" class="navigation ">
		<?php $logoHeader = get_field('logo_header', 'options'); $size = 'full';
		if(!empty($logoHeader)): ?>
			<a class="navbar-brand" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
				<?php  echo wp_get_attachment_image( $logoHeader, $size ) ?> 
			</a>
		<?php else : ?>
			<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<p class="site-title"><?php bloginfo( 'description' ); ?></p>
			</a>
		<?php endif; ?>
					
		<div class="hamburger hidden hamburger--spin js-hamburger" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<div class="hamburger-box">
				<div class="hamburger-inner"></div>
			</div>
		</div>
		<nav  id="nav" class="navbar js-navbar"  itemscope itemtype="http://schema.org/SiteNavigationElement">
		<?php wp_nav_menu( array(
			'walker' => new WP_Bootstrap_Navwalker(),
			'theme_location'	=> 'primary',
			'depth'				=> 2, // 1 = with dropdowns, 0 = no dropdowns.
			'container'			=> 'div',
			'container_class'	=> '',
			'container_id'		=> '',
			'menu_class'		=> 'navbar-nav',
		) ); ?>
		</nav>
		<?php if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
		?>
		<div class="navigation__button">
			<a class="btn--main" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
				<path id="log" d="M14,2A12,12,0,1,0,26,14,12,12,0,0,0,14,2ZM8.084,21.536C8.6,20.456,11.744,19.4,14,19.4s5.412,1.056,5.916,2.136a9.51,9.51,0,0,1-11.832,0ZM21.632,19.8C19.916,17.708,15.752,17,14,17s-5.916.708-7.632,2.8a9.6,9.6,0,1,1,15.264,0ZM14,6.8A4.2,4.2,0,1,0,18.2,11,4.189,4.189,0,0,0,14,6.8Zm0,6A1.8,1.8,0,1,1,15.8,11,1.8,1.8,0,0,1,14,12.8Z" transform="translate(-2 -2)" fill="#fafcfd"/>
				</svg>
				<span><?php echo esc_html( $link_title ); ?></span>
			</a>
		</div>
		<?php endif; ?>
	</div>
</div>
<div id="specer"></div>

