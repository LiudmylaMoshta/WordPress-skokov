<?php

function skokov() {
	wp_enqueue_style('style', get_template_directory_uri().'/style.css');
	wp_enqueue_style('style-blog', get_template_directory_uri().'/style-blog.css');
    wp_enqueue_style('style-post', get_template_directory_uri().'/style-post.css');
}


add_action('wp_enqueue_scripts', 'skokov');




/*menu*/
register_nav_menu('menu1','Description');




//if ( function_exists('register_sidebar') )
function true_register_wp_sidebars() {

	/* В боковой колонке - первый сайдбар */
	register_sidebar(
		array(
			'id' => 'true_side', // уникальный id
			'name' => 'Categories', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="ul-aside-categories">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-aside">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'true_side_archive', // уникальный id
			'name' => 'Archive', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="ul-aside-archive">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-aside">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'true_side_popular_posts', // уникальный id
			'name' => 'Popular_posts', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="ul-aside-post">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-aside">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);

	register_sidebar(
		array(
			'id' => 'true_side_tags', // уникальный id
			'name' => 'Tags', // название сайдбара
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
			'before_widget' => '<div id="%1$s" class="ul-aside-tags">', // по умолчанию виджеты выводятся <li>-списком
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-aside">', // по умолчанию заголовки виджетов в <h2>
			'after_title' => '</h3>'
		)
	);
// Область виджетов внутри поста
	register_sidebar(array(
		'id' => 'postin-widget-area',
		'name' => 'Post-widget',
		'description' => ('Виджеты на странице поста'),
		'before_widget' => '<div id="%1$s" class="ul-aside-categories">', // по умолчанию виджеты выводятся <li>-списком
		'after_widget' => '</div>',
		'before_title' => '<h3 class="title-aside">', // по умолчанию заголовки виджетов в <h2>
		'after_title' => '</h3>'
	));



	/* В подвале - плагин-виджит твитера */
	register_sidebar(
		array(
			'id' => 'footer2_twitter',
			'name' => 'footer2_twitter',
			'description' => 'Перетащите сюда виджеты, чтобы добавить их в футер.',
			'before_widget' => '<div id="%1$s" class="list-tweets %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="title-footer">',
			'after_title' => '</h3>'
		)
	);

    //mailchimp
    register_sidebar( array(
        'name' => __( 'footer3_mailchimp', '' ),
        'id' => 'footer3_mailchimp',
        'description' => __( 'footer3_mailchimp', '' ),
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3 class="title-footer">',
        'after_title' => '</h3>',
    ) );

    //about_us
    register_sidebar( array(
        'name' => __( 'footer1_about_us', '' ),
        'id' => 'footer1_about_us',
        'description' => __( 'footer1_about_us', '' ),
        'before_widget' => '<div class="about-footer">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="title-footer">',
        'after_title' => '</h3>',
    ) );
}


add_action( 'widgets_init', 'true_register_wp_sidebars' );






function skokov_customize_register( $wp_customize ) {

	/*Customize logo image*/

	$wp_customize->add_setting( 'logo_image', array(
		'default'   => '',
		'transport' => 'refresh',
	) );

	$wp_customize->add_section( 'logo', array(
		'title'    => __( 'Logo image', 'skokov' ),
		'priority' => 30,
	) );

	$wp_customize->add_control( new WP_Customize_Upload_Control( $wp_customize, 'logo_image', array(
		'label'    => __( 'Upload logo', 'skokov' ),
		'section'  => 'logo',
		'settings' => 'logo_image',
	) ) );


	/*Customize Phone number*/

	$wp_customize->add_setting( 'contact_tel' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );


	$wp_customize->add_section( 'tel' , array(
		'title'      => __( 'Phone', 'skokov' ),
		'priority'   => 30,
	) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_tel', array(
		'label'        => __( 'Number of your phone', 'skokov' ),
		'section'    => 'tel',
		'settings'   => 'contact_tel',
	) ) );

	/*Customize Phone number-2*/

	$wp_customize->add_setting( 'contact_tel2' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );


	$wp_customize->add_section( 'tel2' , array(
		'title'      => __( 'Phone2', 'skokov' ),
		'priority'   => 30,
	) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_tel2', array(
		'label'        => __( 'Number of your phone', 'skokov' ),
		'section'    => 'tel2',
		'settings'   => 'contact_tel2',
	) ) );


	/*Customize Email*/

	$wp_customize->add_setting( 'contact_mail' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );


	$wp_customize->add_section( 'mail' , array(
		'title'      => __( 'E-mail', 'skokov' ),
		'priority'   => 30,
	) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_mail', array(
		'label'        => __( 'Your email', 'skokov' ),
		'section'    => 'mail',
		'settings'   => 'contact_mail',
	) ) );


	/*Customize Address*/

	$wp_customize->add_setting( 'contact_address' , array(
		'default'     => '',
		'transport'   => 'refresh',
	) );


	$wp_customize->add_section( 'address' , array(
		'title'      => __( 'address', 'skokov' ),
		'priority'   => 30,
	) );


	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'contact_address', array(
		'label'        => __( 'Your address', 'skokov' ),
		'section'    => 'address',
		'settings'   => 'contact_address',
	) ) );
}

add_action('customize_register', 'skokov_customize_register');

/*thumbnails*/
add_theme_support( 'post-thumbnails' ); // для всех типов постов







add_filter('post_class','category_two_column_classes');
//
?>

