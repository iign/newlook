<?php

if (! class_exists('Timber')) {
    add_action('admin_notices', function () {
        echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url(admin_url('plugins.php#timber')) . '">' . esc_url(admin_url('plugins.php')) . '</a></p></div>';
    });

    add_filter('template_include', function ($template) {
        return get_stylesheet_directory() . '/static/no-timber.html';
    });

    return;
}

Timber::$dirname = array('templates', 'views');

class StarterSite extends TimberSite
{
    public function __construct()
    {
        add_theme_support('post-formats');
        add_theme_support('post-thumbnails');
        add_theme_support('menus');
        add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ));
        add_filter('timber_context', array( $this, 'add_to_context' ));
        add_filter('get_twig', array( $this, 'add_to_twig' ));
        add_action('init', array( $this, 'register_post_types' ));
        add_action('init', array( $this, 'register_taxonomies' ));
        parent::__construct();
    }

    public function register_post_types()
    {
        $labels = array(
		'name' => 'Producto',
		'singular_name' => 'Producto',
		'menu_name' => 'Productos',
		'name_admin_bar' => 'Producto',
		'all_items' => 'Productos',
		'add_new' => 'Añadir Nuevo',
		'add_new_item' => 'Añadir Nuevo',
		'edit_item' => 'Editar Producto',
		'new_item' => 'Nuevo Producto',
		'view_item' => 'Ver Producto',
		'search_items' => 'Buscar Productos',
		'not_found' =>  'No se encontraron',
		'not_found_in_trash' => 'Ningún post encontrado en la papelera.',
		'parent_item_colon' => 'Padre',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'exclude_from_search' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_nav_menus' => true,
		'show_in_menu' => true,
		'show_in_admin_bar' => true,
		'has_archive' => false,
		'menu_position' => null,
		'menu_icon' => 'dashicons-products',
		'hierarchical' => true,
		'rewrite' => array( 'slug' => 'product','with_front' => true,'feeds' => false,'pages' => true ),
		'query_var' => true,
		'can_export' => true,
		'supports' => array( 'title','editor','thumbnail' ),
	);
	register_post_type( 'product', $args );
    }

    public function register_taxonomies()
    {
        //this is where you can register custom taxonomies
    }

    public function add_to_context($context)
    {
        $languages = pll_the_languages(array('echo' => 0, 'hide_current' => true, 'raw' => true));

		$langs = '';
		foreach ($languages as $key => $lang) {
			$langs .= "<li class='lang-item nav__item'>
					    <a class='nav__link' href='{$lang['url']}'>{$lang['name']}</a>
				      </li>";
		}
		$context['langs'] = $langs;

        $context['current_lang'] = pll_current_language();


        $context['menu'] = new TimberMenu('primary');
        $context['site'] = $this;
        return $context;
    }

    public function myfoo($text)
    {
        $text .= ' bar!';
        return $text;
    }

    public function add_to_twig($twig)
    {
        /* this is where you can add your own functions to twig */
        $twig->addExtension(new Twig_Extension_StringLoader());
        $twig->addFilter('myfoo', new Twig_SimpleFilter('myfoo', array($this, 'myfoo')));
        return $twig;
    }
}

new StarterSite();

add_action('wp_enqueue_scripts', 'newlook_load_scripts');
add_action('wp_print_styles', 'newlook_load_styles');
add_action('after_setup_theme', 'register_my_menu');

function register_my_menu()
{
    register_nav_menu('primary', __('Primary Menu', 'newlook'));
}

function newlook_load_scripts()
{
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/static/js/app.js', array('jquery'), null, true);
}

function newlook_load_styles()
{
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/static/css/main.css');
}

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
