<?php


function neuron_theme_file(){
    wp_enqueue_style('animation', get_template_directory_uri() .'/assets/css/animate.min.css', array(), 'all');
    wp_enqueue_style('font-awosome', get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), 'all');
    wp_enqueue_style('carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), 'all');
    wp_enqueue_style('bootsnav', get_template_directory_uri() .'/assets/css/bootsnav.css', array(), 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), 'all');
    wp_enqueue_style('neuron-style',  get_template_directory_uri() .'/assets/css/style.css', array(), 'all');

    // Add JS

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js', ['jquery'], '1.0.0', true );
    wp_enqueue_script( 'bootsnav', get_template_directory_uri() .'/assets/js/bootsnav.js', ['jquery'], '1.0.0', true );
    wp_enqueue_script( 'carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', ['jquery'], '', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() .'/assets/js/wow.min.js', ['jquery'], '', true );
    wp_enqueue_script( 'ajax', get_template_directory_uri() .'/assets/js/ajaxchimp.js', ['jquery'], '', true );
    wp_enqueue_script( 'ajax-config', get_template_directory_uri() .'/assets/js/ajaxchimp-config.js', ['jquery'], '', true );
    wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.js', ['jquery'], '', true );
}

add_action('wp_enqueue_scripts', 'neuron_theme_file');


function neuron_theme_support(){

    // loading theme textdomain
    load_theme_textdomain('neuron', get_template_directory_uri(). '/languages');

    // Generated automated feed links on head
    add_theme_support('automatic-feed-links');

    //Adding Support for automatic title support
    add_theme_support('title-tag');

    //Enable post thumbnails support
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location

    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'neuron' ),
        'footer_menu'  => __( 'Dignata Menu', 'neuron' ),
    ) );

}


function custom_post_hero(){
    register_post_type('slide',
    array(
        'labels'      => array(
            'name'          => __('Sliders', 'neuron'),
            'singular_name' => __('Slider', 'neuron'),
        ),
            'public'      => true,
            'has_archive' => true,
            'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'comments' ),
    ));

register_post_type('feature',
array(
    'labels'      => array(
        'name'          => __('Features', 'neuron'),
        'singular_name' => __('Features', 'neuron'),
    ),
        'public'      => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail','page-attributes'),
));

register_post_type('service',
array(
    'labels'      => array(
        'name'          => __('Services', 'neuron'),
        'singular_name' => __('Service', 'neuron'),
    ),
        'public'      => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-admin-tools',
        'supports' => array( 'title', 'editor','thumbnail', 'custom-fields'),
));

}


function neuron_sidebar_init(){
    register_sidebar(
           array(
           /* translators: %d: Sidebar number. */
           'name'           => sprintf( __( 'Footer 1'),),
           'id'             => "footer",
           'before_widget'  => '<div id="%1$s" class="widget %2$s">',
           'after_widget'   => "</div>\n",
           'before_title'   => '<h2 class="widget-title">',
           'after_title'    => "</h2>\n",
       ));

       register_sidebar(
        array(
        /* translators: %d: Sidebar number. */
        'name'           => sprintf( __( 'Footer 2'),),
        'id'             => "footer_2",
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'link_before'    => '<i class="fa fa-angle-right"></i>',
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => "</h3>\n",
    ));

    register_sidebar(
        array(
        /* translators: %d: Sidebar number. */
        'name'           => sprintf( __( 'Footer 3'),),
        'id'             => "footer_3",
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => "</h3>\n",
    ));

    register_sidebar(
        array(
        /* translators: %d: Sidebar number. */
        'name'           => sprintf( __( 'Footer 4'),),
        'id'             => "footer_4",
        'before_widget'  => '<div id="%1$s" class="widget %2$s">',
        'after_widget'   => "</div>\n",
        'before_title'   => '<h3 class="widget-title">',
        'after_title'    => "</h3>\n",
    ));
}


// ADD Shortcort

function thumbpost_list_shortcode($attr){
    extract(shortcode_atts(array(
        'count' => 3,
    ), $attr));

    $query = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
    );
    ?>
   <ul>
        <?php
        while($query->have_posts()) :
            $query->the_post();?>
            <li>
                <?php the_post_thumbnail(); ?>
                <p><a href="<?php the_permalink();?>"><?php the_title();?></a></p>
                <span><?php echo get_the_date('d F Y');?></span>
            </li>
        <?php
        endwhile;
        ?>
   </ul>
<?php
}

add_shortcode('thumb_post', 'thumbpost_list_shortcode');
add_filter('widget_text', 'do_shortcode');
add_action('widgets_init', 'neuron_sidebar_init');
add_action('init', 'custom_post_hero');
add_action( 'after_setup_theme', 'neuron_theme_support');
