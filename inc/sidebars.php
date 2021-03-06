<?php

function red_starter_widgets_init(){
register_sidebar(array(
	'name'          => __( 'footer sidebar', 'theme_text_domain' ),
	'id'            => 'footer-sidebar',
	'description'   => '',
        'class'         => '',
	'before_widget' => '<div class="footer-widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="footer">',
	'after_title'   => '</h2>' ));

	register_sidebar(array(
		'name'          => __( 'header nav logo', 'theme_text_domain' ),
		'id'            => 'header-nav-logo',
		'description'   => '',
	        'class'         => '',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="header nav logo">',
		'after_title'   => '</h2>' ));

		register_sidebar(array(
			'name'          => __( 'page 404', 'theme_text_domain' ),
			'id'            => 'page-404',
			'description'   => '',
						'class'         => '',
			'before_widget' => '<div class="page404">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
		'after_title'   => '</h2>' ));

			register_sidebar( array(
				'name'          => esc_html( 'Sidebar' ),
				'id'            => 'sidebar-1',
				'description'   => '',
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			) );

}
		add_action( 'widgets_init', 'red_starter_widgets_init' );

    ?>
