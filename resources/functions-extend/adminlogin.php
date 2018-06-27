<?php

// Change wp-admin login screen
function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/admin-login-logo.svg);
            height: 92px;
            width: 320px;
            background-size: 350px 106px;
            background-repeat: no-repeat;
            padding-bottom: 30px;
        }
        .wp-core-ui #login #loginform .button-primary{
            background-color: #1860aa;
            border: 1px solid #004082;
            color: #fff;
            box-shadow: 0px 0px 0px transparent;
            text-shadow: 0px 0px 0px;
        }
        .login #login form{
            box-shadow: 0 0px 1px rgba(115, 115, 115, 0.13);
            padding: 27px 25px 30px;
        }
        .login #login form .input, .login #login input[type=text]{
            border: 0px;
            box-shadow: 0px 0px 0px transparent;
            border-bottom: 2px solid #f1f1f1;
            font-size: 14px;
            height: 40px;
            background-color: #fff;
        }
        .login #nav{
            text-align: center;
        }
        #backtoblog{
            text-align: center;
        }
        .login #login form input[type=checkbox]{
            box-shadow: 0px 0px 0px transparent;
            border: 1px solid #dcdcdc;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change wp-admin logo url
function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

// Change wp-admin logo title
function my_login_logo_url_title() {
    return 'Doit Online Media';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Remove admin bar WordPress branding
add_action( 'wp_before_admin_bar_render', function() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('wp-logo');
}, 7 );