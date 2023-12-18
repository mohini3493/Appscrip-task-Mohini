<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package appscrip
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'appscrip' ); ?></a>

	<!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a href="#" class="navbar-brand">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Group-4431-1.svg" alt="" srcset="">
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end menu-box" id="navbarCollapse">
                <div class="navbar-nav menu-links">
                    <a href="#" class="nav-item nav-link dropdown-toggle">Products</a>
                    <a href="#" class="nav-item nav-link dropdown-toggle">Services</a>
                    <a href="#" class="nav-item nav-link">Success Stories</a>
                    <a href="#" class="nav-item nav-link dropdown-toggle">Solutions</a>
                    <a href="#" class="nav-item nav-link">App Demos</a>
                    <a href="#" class="nav-item nav-link">About Us</a>
                    <a href="#" class="nav-item nav-link">Blogs</a>
                </div>
            </div>
            <div class="navbar-nav">
                <a href="tel:+1" class="blue-tel"><i class="fa-solid fa-phone"></i></a>
                <a href="#" class="nav-item nav-link contact-btn">Contact us</a>
            </div>
        </div>
    </nav>
