<?php
/**
 * Theme About Page
 *
 * @package worship
 * @since 1.0
 */

function worship_theme_page_admin_style( $hook ) {
	if ( 'appearance_page_worship-theme' === $hook ) {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_enqueue_style(
			'worship-theme-admin-style',
			get_theme_file_uri( 'assets/css/about-admin.css' ),
			array(),
			$version_string
		);
	}
}
add_action( 'admin_enqueue_scripts', 'worship_theme_page_admin_style' );

/**
 * Add theme page
 */
function worship_menu() {
	add_theme_page( esc_html__( 'Worship', 'worship' ), esc_html__( 'Worship Info', 'worship' ), 'edit_theme_options', 'worship-theme', 'worship_theme_page_display' );
}
add_action( 'admin_menu', 'worship_menu' );

/**
 * Display About page
 */
function worship_theme_page_display() {
	$theme = wp_get_theme();
	
	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	}
	?>
	
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<div class="welcome-panel-header">
				<h2><?php echo esc_html( $theme->Name ); ?></h2>
				<p><?php esc_html_e( 'Free Full Site Editing WordPress Theme', 'worship' ); ?></p>
				<div class="logo-panel">
					<a href="<?php echo esc_url('https://alexathemes.net/','worship'); ?>"><img src="<?php echo esc_url( get_template_directory_uri().'/assets/img/logo.png' ); ?>"></a>
				</div>
			</div>
			
			<div class="welcome-panel-column-container">
				<div class="container-wrap">
					<div class="welcome-panel-column two-columns">
						<!-- <div class="welcome-panel-icon-pages"></div> -->
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'Getting Started with Worship!', 'worship' ); ?></h3>
							<p><?php esc_html_e( 'Awesome! Worship has been installed and activated successfully. Now, you can start building your dream website with a wide range of highly-customizable block patterns, templates, and template parts available in this astounding theme.', 'worship' ); ?></p>
						</div>
					</div>
					
					<div class="welcome-panel-column two-columns">
						<div class="welcome-panel-column-content">
							<h3><?php esc_html_e( 'More Features with Worship Pro Theme', 'worship' ); ?></h3>
							<p><?php esc_html_e( 'To get more features and unique home page sections, we recommend you activate the Worship Pro. With the pro theme installed, get more options like google fonts, colors, sliders, page template, shortcodes and more.', 'worship' ); ?></p>
							<a target="_blank" class="button green button-primary button-hero green" href="https://alexathemes.net/themes/church-wordpress-theme/"><?php esc_html_e( 'Buy Worship Pro', 'worship' ); ?></a>
						</div>
					</div>
					
				</div>
				<div class="sidebar">
					<div class="welcome-panel-column important-links">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Important Links', 'worship' ); ?></h3>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/themes/church-wordpress-theme/' ); ?>"><?php esc_html_e( 'Theme Info', 'worship' ); ?></a>
						<a target="_blank" href="https://live-demo.online/worship/"><?php esc_html_e( 'View Demo', 'worship' ); ?></a>
						<a target="_blank" href="<?php echo esc_url( 'https://alexathemes.net/forums/' ); ?>"><?php esc_html_e( 'Support', 'worship' ); ?></a>
					</div>
				</div>
				
				<div class="welcome-panel-column review">
					<!-- <div class="welcome-panel-icon-pages"></div> -->
					<div class="welcome-panel-column-content">
						<h3><?php esc_html_e( 'Leave us a review', 'worship' ); ?></h3>
						<p><?php esc_html_e( 'Loved Worship? Feel free to leave your feedback. Your opinion helps us reach more audiences!', 'worship' ); ?></p>
						<a href="https://wordpress.org/support/theme/worship/reviews/" class="button button-primary button-hero" style="text-decoration: none;" target="_blank"><?php esc_html_e( 'Review', 'worship' ); ?></a>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
