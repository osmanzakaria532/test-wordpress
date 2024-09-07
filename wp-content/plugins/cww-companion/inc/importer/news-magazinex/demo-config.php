<?php 
/**
* Demo Importer Config
*
*
*
*/

$url        = 'https://codeworkweb.com/demo-importer/news-magazinex-demos/';
$pro_url    = 'https://codeworkweb.com/demo-importer/xews-demos/';


$data = array(

    'main' => array(
        'categories'        => array( 'Free' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/news-magazine/',
        'image_path'        => $url.'screenshot.png',
        'xml_file'          => $url.'content.xml',
        'theme_settings'    => $url.'customizer.dat',
        //'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '5',
        'is_shop'           => false,
        'menus'             => array(
            'menu-1'   => 'Primary Menu'
        ),
        'required_plugins'  => array(
            'free'          => array(
               
                array(
                    'slug'    => 'elementor',
                    'init'    => 'elementor/elementor.php',
                    'name'    => 'Elementor',
                ),
                array(
                    'slug'    => 'contact-form-7',
                    'init'    => 'contact-form-7/wp-contact-form-7.php',
                    'name'    => 'Contact Form 7',
                ),
                array(
                    'slug'    => 'cww-connector-lite',
                    'init'    => 'cww-connector-lite/cww-connector-lite.php',
                    'name'    => 'CWW Connector Lite',
                ),
               
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'CWW Connector Pro',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                
            ),


        ),
    ),

    //premium demos
    'tech' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/tech/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/xews/tech/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/xews/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/xews/',
    ), 
    'lifestyle' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/lifestyle/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/xews/lifestyle/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/xews/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/xews/',
    ), 

    'magazine' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/main/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/xews/default/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/xews/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/xews/',
    ),

    'travel' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/travel/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/xews/travel/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/xews/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/xews/',
    ), 

    'business' => array(
        'categories'        => array( 'Premium' ),
        'image_path'        => $pro_url.'/business/screenshot.png',
        'preview_url'       => 'https://demo.codeworkweb.com/xews/business/',
        'is_premium'        => true,
        'pro_link'          => 'https://codeworkweb.com/wordpress-themes/xews/',
        'purchase_link'     => 'https://codeworkweb.com/wordpress-themes/xews/',
    ), 

);