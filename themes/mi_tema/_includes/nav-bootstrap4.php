<nav class="navbar navbar__nav navbar-expand-lg navbar-dark bg-dark fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<a class="navbar-brand" href="<?php bloginfo('url') ?>"><img src="<?php echo get_theme_file_uri(); ?>/assets/images/login/logotipo.svg" alt="Logo"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
			<?php wp_nav_menu( array(
				'theme_location'	=> 'header-menu',
				'depth'				=> 2,
				'container'			=> false,
				'menu_class'		=> 'navbar-nav ml-auto',
				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
				'walker'			=> new WP_Bootstrap_Navwalker(),
			) ); ?>
		<?php } ?>
		<?php if ( is_active_sidebar( 'menu-widget' ) ) { ?>
			<?php dynamic_sidebar( 'menu-widget' ); ?>
		<?php }; ?>
		</div>
	</div>
</nav>