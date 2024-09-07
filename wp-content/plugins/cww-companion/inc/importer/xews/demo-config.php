<?php 
/**
* 
* Configuration file for Xews theme
*
*
*/

$url        = 'https://codeworkweb.com/demo-importer/xews-demos/';



    $data = array(

    'main' => array(
        'categories'        => array( 'News' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/default/',
        'image_path'        => $url.'main/screenshot.png',
        'xml_file'          => $url.'main/content.xml',
        'theme_settings'    => $url.'main/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
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
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),


    'travel' => array(
        'categories'        => array( 'News' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/travel/',
        'image_path'        => $url.'travel/screenshot.png',
        'xml_file'          => $url.'travel/content.xml',
        'theme_settings'    => $url.'travel/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
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
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),

    'business' => array(
        'categories'        => array( 'News' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/business/',
        'image_path'        => $url.'business/screenshot.png',
        'xml_file'          => $url.'business/content.xml',
        'theme_settings'    => $url.'business/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
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
                    'slug'    => 'cf7-popups',
                    'init'    => 'cf7-popups/cf7-popups.php',
                    'name'    => 'Popup Messages For Contact Form 7',
                ),
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),


    'lifestyle' => array(
        'categories'        => array( 'News' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/lifestyle/',
        'image_path'        => $url.'lifestyle/screenshot.png',
        'xml_file'          => $url.'lifestyle/content.xml',
        'theme_settings'    => $url.'lifestyle/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
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
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),

    'tech' => array(
        'categories'        => array( 'Tech' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/tech/',
        'image_path'        => $url.'tech/screenshot.png',
        'xml_file'          => $url.'tech/content.xml',
        'theme_settings'    => $url.'tech/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '8',
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
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),

    'gaming' => array(
        'categories'        => array( 'Gaming' ),
        'preview_url'       => 'https://demo.codeworkweb.com/xews/gaming/',
        'image_path'        => $url.'gaming/screenshot.png',
        'xml_file'          => $url.'gaming/content.xml',
        'theme_settings'    => $url.'gaming/customizer.dat',
        'widgets_file'      => $url.'widgets.wie',
        'home_title'        => 'Home',
        'blog_title'        => 'Blogs',
        'posts_to_show'     => '8',
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
                
               
            ),

            'premium' => array(
                array(
                    'slug'    => 'cww-connector',
                    'init'    => 'cww-connector/cww-connector.php',
                    'name'    => 'Connect Contact Form 7 & ActiveCampaign ',
                    'link'    => 'https://codeworkweb.com/wordpress-plugins/cww-connector/'
                ),
                array(
                    'slug'    => 'newzz-elements',
                    'init'    => 'newzz-elements/newzz-elements.php',
                    'name'    => 'Newzz Elements - Elementor Addons',
                ),
            ),


        ),
    ),

    

  );