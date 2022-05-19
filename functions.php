<?php 
function action_register_nav_menu(){
	register_nav_menus( array(
		'primary-menu' => __( 'Header Menu', 'text_domain' ),
		'footer-menu' => __( 'Footer Menu - Materiały', 'text_domain' ),
		'footer-menu2' => __( 'Footer Menu - Manager w Pracy', 'text_domain' ),
		'footer-menu3' => __( 'Footer Menu - Do posłuchania', 'text_domain' ),
		'footer-rules' => __( 'Footer Podmenu', 'text_domain' ),
	) );
}
add_action( 'after_setup_theme', 'action_register_nav_menu', 0 );

if( function_exists('acf_add_options_page') ) {
	

    acf_add_options_page(array(
		'page_title' 	=> 'Opcje motywu',
		'menu_title'	=> 'Opcje motywu',
		'menu_slug' 	=> 'theme-header-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	
	
}


function my_acf_init_block_types() {

   
    if( function_exists('acf_register_block_type') ) {

      
        acf_register_block_type(array(
            'name'              => 'image-content',
            'title'             => __('Zdjęcie i treść'),
            'render_template'   => 'template-parts/blocks/image-content.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'image-content' ),
        ));  

        acf_register_block_type(array(
            'name'              => 'yellow-cutscene',
            'title'             => __('Żółty przerywnik z tekstem'),
            'render_template'   => 'template-parts/blocks/yellow-cutscene.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'yellow-cutscene' ),
        ));  

        acf_register_block_type(array(
            'name'              => 'knowledge',
            'title'             => __('Punkty wiedzy'),
            'render_template'   => 'template-parts/blocks/knowledge.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'knowledge' ),
        )); 
             acf_register_block_type(array(
            'name'              => 'icon-content',
            'title'             => __('Ikona z treścią'),
            'render_template'   => 'template-parts/blocks/icon-content.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'icon-content' ),
        ));   
                acf_register_block_type(array(
            'name'              => 'aboutme-blocks',
            'title'             => __('Bloczki O mnie'),
            'render_template'   => 'template-parts/blocks/aboutme-blocks.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'aboutme-blocks' ),
        ));   
              acf_register_block_type(array(
            'name'              => 'post-content',
            'title'             => __('Treść postu'),
            'render_template'   => 'template-parts/blocks/post-content.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'post-content' ),
        ));  
           acf_register_block_type(array(
            'name'              => 'post-image',
            'title'             => __('Zdjęcie post'),
            'render_template'   => 'template-parts/blocks/post-image.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'post-image' ),
        ));   
         acf_register_block_type(array(
            'name'              => 'spreaker',
            'title'             => __('Spreaker'),
            'render_template'   => 'template-parts/blocks/spreaker.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'spreaker' ),
        ));     
         acf_register_block_type(array(
            'name'              => 'usefull-links',
            'title'             => __('Przydatne linki'),
            'render_template'   => 'template-parts/blocks/usefull-links.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'usefull-links' ),
        ));  
          acf_register_block_type(array(
            'name'              => 'present',
            'title'             => __('Prezent dla słuchaczy'),
            'render_template'   => 'template-parts/blocks/present.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'present' ),
        ));     
        acf_register_block_type(array(
            'name'              => 'pdf-generator',
            'title'             => __('PDF do pobrania'),
            'render_template'   => 'template-parts/blocks/pdf-generator.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'pdf-generator' ),
        ));    
         acf_register_block_type(array(
            'name'              => 'video',
            'title'             => __('Video - MWP'),
            'render_template'   => 'template-parts/blocks/video.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'video' ),
        ));  
        acf_register_block_type(array(
            'name'              => 'block-points',
            'title'             => __('Bloczek z punktami'),
            'render_template'   => 'template-parts/blocks/block-points.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'block-points' ),
        ));      
          acf_register_block_type(array(
            'name'              => 'bonusy',
            'title'             => __('Bonusy'),
            'render_template'   => 'template-parts/blocks/bonusy.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'bonusy' ),
        ));       
         acf_register_block_type(array(
            'name'              => 'whoweare',
            'title'             => __('Kim jesteśmy'),
            'render_template'   => 'template-parts/blocks/whoweare.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'whoweare' ),
        )); 
             acf_register_block_type(array(
            'name'              => 'findinside',
            'title'             => __('W środku Ebooka'),
            'render_template'   => 'template-parts/blocks/findinside.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'findinside' ),
        ));     
          acf_register_block_type(array(
            'name'              => 'blue-block',
            'title'             => __('Kupuje e-booka - Granat'),
            'render_template'   => 'template-parts/blocks/blue-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'blue-block' ),
        ));  

        acf_register_block_type(array(
            'name'              => 'summary-block.',
            'title'             => __('Blok - podsumowanie'),
            'render_template'   => 'template-parts/blocks/summary-block..php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'summary-block.' ),
        ));  
        
        acf_register_block_type(array(
            'name'              => 'yellow-block',
            'title'             => __('Kupuje e-booka - Żółty'),
            'render_template'   => 'template-parts/blocks/yellow-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'yellow-block' ),
        ));  
        acf_register_block_type(array(
            'name'              => 'questions',
            'title'             => __('Pytania i odpowiedzi'),
            'render_template'   => 'template-parts/blocks/questions.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'questions' ),
        ));  
        acf_register_block_type(array(
            'name'              => 'colors-blocks',
            'title'             => __('Kolorowe bloczki - punkty'),
            'render_template'   => 'template-parts/blocks/colors-blocks.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'colors-blocks' ),
        ));  

        acf_register_block_type(array(
            'name'              => 'pakiety',
            'title'             => __('Pakiety - Punkty'),
            'render_template'   => 'template-parts/blocks/pakiety.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'pakiety' ),
        ));  

        acf_register_block_type(array(
            'name'              => 'contact-block',
            'title'             => __('Blok z kontaktem'),
            'render_template'   => 'template-parts/blocks/contact-block.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'contact-block' ),
        )); 
        
        acf_register_block_type(array(
            'name'              => 'newsletter',
            'title'             => __('Newsletter blok'),
            'render_template'   => 'template-parts/blocks/newsletter.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'newsletter' ),
        ));  
    }
}

add_action('acf/init', 'my_acf_init_block_types');


function df_disable_comments_post_types_support() {
	$post_types = get_post_types();
	foreach ($post_types as $post_type) {
		if(post_type_supports($post_type, 'comments')) {
			remove_post_type_support($post_type, 'comments');
			remove_post_type_support($post_type, 'trackbacks');
		}
	}
}
add_action('admin_init', 'df_disable_comments_post_types_support');

// Close comments on the front-end
function df_disable_comments_status() {
	return false;
}
add_filter('comments_open', 'df_disable_comments_status', 20, 2);
add_filter('pings_open', 'df_disable_comments_status', 20, 2);

// Hide existing comments
function df_disable_comments_hide_existing_comments($comments) {
	$comments = array();
	return $comments;
}
add_filter('comments_array', 'df_disable_comments_hide_existing_comments', 10, 2);

// Remove comments page in menu
function df_disable_comments_admin_menu() {
	remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'df_disable_comments_admin_menu');

// Redirect any user trying to access comments page
function df_disable_comments_admin_menu_redirect() {
	global $pagenow;
	if ($pagenow === 'edit-comments.php') {
		wp_redirect(admin_url()); exit;
	}
}
add_action('admin_init', 'df_disable_comments_admin_menu_redirect');

// Remove comments metabox from dashboard
function df_disable_comments_dashboard() {
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
}
add_action('admin_init', 'df_disable_comments_dashboard');

// Remove comments links from admin bar
function df_disable_comments_admin_bar() {
	if (is_admin_bar_showing()) {
		remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
	}
}
add_action('init', 'df_disable_comments_admin_bar');

add_action( 'admin_bar_menu', 'clean_admin_bar', 999 );
function clean_admin_bar( $wp_admin_bar ) {
    $wp_admin_bar->remove_node( 'comments' );
}

add_action( 'admin_menu', 'remove_default_post_type' );

function remove_default_post_type() {
    remove_menu_page( 'edit.php' );
}



remove_filter('template_redirect','redirect_canonical');

function theme_scripts() {


    wp_enqueue_script( 'samplejs', get_theme_file_uri( '/public/js/header.js' ), array(), file_exists( get_theme_file_path('/public/js/header.js') ) ? filemtime( get_theme_file_path('/public/js/header.js') ) : '0.0', true );
  
  
      wp_enqueue_style( 'scss', get_theme_file_uri( '/public/css/app.min.css' ), array(), file_exists( get_theme_file_path('/public/css/app.min.css') ) ? filemtime( get_theme_file_path('/public/css/app.min.css') ) : '0.0' );
      wp_enqueue_style( 'slick-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.css') ) : '0.0' );
      wp_enqueue_style( 'slick-theme-style', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick-theme.css' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick-theme.css') ) : '0.0' );
       wp_enqueue_style( 'twd-googlefonts', 'https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), null );
         wp_deregister_script('jquery');
         wp_deregister_script('google-recaptcha');
         wp_enqueue_script( 'jquery', get_theme_file_uri( '/bower_components/jquery/dist/jquery.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) ? filemtime( get_theme_file_path('/bower_components/jquery/dist/jquery.min.js') ) : '0.0', false );
      
         wp_enqueue_script( 'slick', get_theme_file_uri( '/bower_components/slick-carousel/slick/slick.min.js' ), array(), file_exists( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) ? filemtime( get_theme_file_path('/bower_components/slick-carousel/slick/slick.min.js') ) : '0.0', false );
  
         wp_enqueue_script( 'js', get_theme_file_uri( '/public/js/slider.js' ), array('jquery'), '0.0.0', false );
         wp_enqueue_script('popper_js', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', false, '', true );
         wp_enqueue_script('isotop', '//cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js', array('jquery'), false, true);

         wp_enqueue_style( 'lightbox-style', get_theme_file_uri( '/bower_components/lightbox2/dist/css/lightbox.min.css' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/dist/css/lightbox.min.css') ) : '0.0' );
      
         wp_enqueue_script( 'lightbox', get_theme_file_uri( '/bower_components/lightbox2/src/js/lightbox.js' ), array(), file_exists( get_theme_file_path('/bower_components/lightbox2/src/js/lightbox.js') ) ? filemtime( get_theme_file_path('/bower_components/lightbox2/src/js/lightbox.js') ) : '0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'theme_scripts' );
  
  
  
  function manager_post_type() {
  

	$labels = array(
        'name'                  => 'Bezpłatne materiały',
        'singular_name'         => 'Bezpłatne materiały',
        'menu_name'             => 'Bezpłatne materiały',
        'name_admin_bar'        => 'Bezpłatne materiały',
     
        'archives'              => 'Archiwum materiałów',
        'attributes'            => 'Atrybuty materiałów',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'Bezpłatne materiały',
        'add_new_item'          => 'Nowy wpis',
        'add_new'               => 'Nowy wpis',
        'new_item'              => 'Nowy wpis',
        'edit_item'             => 'Edytuj wpis',
        'update_item'           => 'Edytuj wpis',
    );
    $args = array(
        'label'                 => 'Bezpłatne materiały',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_rest' => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'menu_icon'           => 'dashicons-pressthis',
        'capability_type'       => 'post',
    );
    register_post_type( 'bezplatnematerialy', $args );
  
	$labels = array(
		'name' => _x( 'Kategorie materiałów', 'taxonomy general name' ),
		'singular_name' => _x( 'Materiały', 'taxonomy singular name' ),
		'search_items' =>  __( 'Szukaj materiałów' ),
		'all_items' => __( 'Wszystkie materiały' ),
		'parent_item' => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item' => __( 'Edytuj' ), 
		'update_item' => __( 'Edytuj' ),
		'add_new_item' => __( 'Nowa kategoria' ),
		'new_item_name' => __( 'New Type Name' ),
		'menu_name' => __( 'Kategorie materiałów' ),
	  ); 	
	 
	  register_taxonomy('kategorie',array('bezplatnematerialy'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'kategorie' ),
	  ));



      $labels = array(
        'name'                  => 'Produkty',
        'singular_name'         => 'Produkty',
        'menu_name'             => 'Produkty',
        'name_admin_bar'        => 'Produkty',
     
        'archives'              => 'Archiwum',
        'attributes'            => 'Atrybuty',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'Produkty',
        'add_new_item'          => 'Nowy produkt',
        'add_new'               => 'Nowy produkt',
        'new_item'              => 'Nowy produkt',
        'edit_item'             => 'Edytuj produkt',
        'update_item'           => 'Edytuj produkt',
    );
    $args = array(
        'label'                 => 'Produkty',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_rest' => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'menu_icon'           => 'dashicons-pressthis',
        'capability_type'       => 'post',
    );
    register_post_type( 'produkty', $args );


    
    $labels = array(
        'name'                  => 'Do pobrania',
        'singular_name'         => 'Do pobrania',
        'menu_name'             => 'Do pobrania',
        'name_admin_bar'        => 'Do pobrania',
     
        'archives'              => 'Archiwum',
        'attributes'            => 'Atrybuty',
        'parent_item_colon'     => 'Parent Item:',
        'all_items'             => 'Do pobrania',
        'add_new_item'          => 'Nowy',
        'add_new'               => 'Nowy',
        'new_item'              => 'Nowy',
        'edit_item'             => 'Edytuj',
        'update_item'           => 'Edytuj',
    );
    $args = array(
        'label'                 => 'Do pobrania',
        'description'           => 'Post Type Description',
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields', 'excerpt' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_rest' => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'menu_icon'           => 'dashicons-pressthis',
        'capability_type'       => 'post',
    );
    register_post_type( 'dopobrania', $args );

    
	$labels = array(
		'name' => _x( 'Typy plików', 'taxonomy general name' ),
		'singular_name' => _x( 'Plik', 'taxonomy singular name' ),
		'search_items' =>  __( 'Szukaj plików' ),
		'all_items' => __( 'Wszystkie pliki' ),
		'parent_item' => __( 'Parent Type' ),
		'parent_item_colon' => __( 'Parent Type:' ),
		'edit_item' => __( 'Edytuj' ), 
		'update_item' => __( 'Edytuj' ),
		'add_new_item' => __( 'Nowy typ plików' ),
		'new_item_name' => __( 'Nazwa typu' ),
		'menu_name' => __( 'Typy plików' ),
	  ); 	
	 
	  register_taxonomy('typy',array('dopobrania'), array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_in_rest' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'typy' ),
	  ));
  }
  
  add_action('init', 'manager_post_type');
  