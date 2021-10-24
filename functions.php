<?php


    /* Adding CSS & JS */
    function woocommerce_custom_theme() {
        wp_register_style( 'custom_css', get_template_directory_uri() . '/src/css/styles.css', false, '1.0.0' );
        wp_register_style( 'stolzl_cdn', 'https://use.typekit.net/bjt7zcc.css', false, '1.0.0' );
        wp_register_style( 'playfair_cdn', 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;1,700&display=swap', false, '1.0.0' );

        wp_enqueue_style( 'custom_css' );
        wp_enqueue_style( 'stolzl_cdn' );
        wp_enqueue_style( 'playfair_cdn' );

        wp_enqueue_script( 'main-scripts',  get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
    }
    add_action( 'wp_enqueue_scripts', 'woocommerce_custom_theme' );
    add_theme_support( 'title-tag' );

    function woocommerce_custom_menu(){
        register_nav_menu('top-menu',__('Menu Topo', 'woocommercecustommenu'));
    }

    function minha_sidebar() {
        register_sidebar(
         array (
             'name' => __( 'Filtro de busca', 'wfstore'),
             'id' => 'minha-side-bar',
             'description' => __( 'Filtro de busca', 'wfstore' ),
             'before_widget' => '<div class="widget-content">',
             'after_widget' => "</div>",
             'before_title' => '<h3 class="widget-title">',
             'after_title' => '</h3>',
         )
        );
       }
       add_action( 'widgets_init', 'minha_sidebar' );

    add_action( 'init', 'woocommerce_custom_menu');
    if (class_exists('WooCommerce')) {

        /* WooCommerce Support */
        function woocommerceshop_add_woocommerce_support() {
            add_theme_support( 'woocommerce' );
        }
        add_action ( 'after_setup_theme', 'woocommerceshop_add_woocommerce_support' );


        // add_filter( 'woocommerce_enqueue_styles', '__return_false' );
        add_filter( 'woocommerce_show_page_title', '__return_false' );

        add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
        add_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );
        add_action( 'woocommerce_before_single_product', 'woocommerce_output_all_notices', 10 );
        add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
        add_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20 );
        add_action( 'woocommerce_product_thumbnails', 'woocommerce_show_product_thumbnails', 20 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

    }