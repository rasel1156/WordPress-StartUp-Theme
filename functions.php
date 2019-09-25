<?php 
/*=================================
 Coomon
==================================*/ 
function chkits_common(){
    //heading title
    add_theme_support('title-tag');
    //post feature image support
    add_theme_support( 'post-thumbnails' );


    //menu register
    register_nav_menus(array(
        'mainMenu' => 'Header Left Menu',
    ));
	  

    // Team  Post
    register_post_type( 'team', array(
        'labels' => array(
            'name' => 'Team',
            'add_new_item' => 'Add Your Team Memer'
        ),
        'public' => true,
        'supports' => array('title', 'thumbnail'),
        'menu_icon' => 'dashicons-universal-access-alt'
    ) );




    // thumbnails size
    add_image_size( 'main-banner', 150000, 55000, true );

    
    
}
add_action('after_setup_theme', 'chkits_common');


// taxonnomy for protfolio
function protfolio_taxo(){
    register_taxonomy(
        'protfolio-cat',
        'protfolio',
        array(
            'hierarchical' => true,
            'lable' => 'Protfolio Category',
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'protfolio-category',
                'with_front' => true,
            )
        )
    );

}
add_action('init', 'protfolio_taxo');


/*=================================
 style and script register
==================================*/ 
function chkits_assets(){
    
    //style register
    wp_enqueue_style('bootstrape', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous");    
    //wp_enqueue_style('animate', get_template_directory_uri().'/css/css_assets/animate.min.css');
    wp_enqueue_style('owl', get_template_directory_uri().'/css/css_assets/owl.carousel.min.css');
    wp_enqueue_style('owltheme', get_template_directory_uri().'/css/css_assets/owl.theme.default.min.css');
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');


    
    

    //register js
    wp_enqueue_script('bootstrape', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js',array('jquery'),'0.2.1', true);
    wp_enqueue_script('owljs', get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'0.2.1', true););
    wp_enqueue_script('custom', get_template_directory_uri().'/js/custom.js',array('jquery'),'0.2.1', true);


}
add_action('wp_enqueue_scripts', 'chkits_assets');
/*=================================
 admin menu delet
==================================*/ 

function custom_menu_page_removing() {
    remove_menu_page( 'edit-comments.php' );
    
}
add_action( 'admin_menu', 'custom_menu_page_removing' );


// // custom pagination function
// function pagination_bar( $custom_query ) {

//     $total_pages = $custom_query->max_num_pages;
//     $big = 999999999; // need an unlikely integer

//     if ($total_pages > 1){
//         $current_page = max(1, get_query_var('paged'));

//         echo paginate_links(array(
//             'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
//             'format' => '?paged=%#%',
//             'current' => $current_page,
//             'total' => $total_pages,
//             'next_text' => '<i class="fas fa-fast-forward"></i>',
//             'prev_text' => '<i class="fas fa-fast-backward"></i>'
//         ));
//     }
// }



// svg image formate support
function cc_mime_types($mimes) { $mimes['svg'] = 'image/svg+xml'; return $mimes; } add_filter('upload_mimes', 'cc_mime_types');

require get_parent_theme_file_path('/redux/ReduxCore/framework.php');
require get_parent_theme_file_path('/redux/sample/sample-config.php');
require get_parent_theme_file_path('/inc/cmb2-mb.php');
require get_parent_theme_file_path('/inc/acf-mb.php');
require get_parent_theme_file_path('/inc/widgets.php');
// require get_parent_theme_file_path('/inc/class-tgm-plugin-activation.php');
// require get_parent_theme_file_path('/inc/requir-plugin.php');

//acf hide
//add_filter('acf/settings/show_admin', '__return_false');



