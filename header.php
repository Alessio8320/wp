<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<!--funzione essenziali: wp.header deve esserci sempre -->
    <?php wp_head(); ?>
</head>
<!-- body_class assegna al body le classi di wordpress che servono -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <div class="container-fluid reunion">
        <div class="row">
            <header class="col-12">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.jpg" alt="">
            </header>
        </div>



        <!-- apro container text e nav -->
        <div class="container">
            <div class="row reunion-text">
                <div class="col-12">


                    
                    <!-- menu NAV -->
                    <nav class="navbar navbar-expand-lg" id="nav-menu">
                        <?php wp_nav_menu(array("theme_location" => "main", "menu_class" => "navbar-nav justify content-center nav-fill" , "container_class" => "collapse navbar-collapse" , "container_id" => "navbarSupportedContent" )); ?>
                        <!--<div class="collapse navbar-collapse" id="navbarSupportedContent">

                        
                            <ul class="navbar-nav justify-content-center nav-fill">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="chisiamo.html">Chi siamo</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Dropdown
                                </a>
                                <div class="dropdown-menu dropdown-stilemenu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profilo</a>
                                    <a class="dropdown-item" href="#">Specializzazioni</a>
                                    <a class="dropdown-item" href="#">Posizioni ricercabili</a>
                                    <a class="dropdown-item" href="#">Banca Dati</a>
                                    <a class="dropdown-item" href="#">Web Visibility</a>
                                    <a class="dropdown-item" href="#">Codice etico</a>
                                    <a class="dropdown-item" href="#">Lavora con noi</a>
                                    <a class="dropdown-item" href="#">Copyright</a>
                                </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Aziende</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Candidati</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Privacy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contatti</a>
                                </li>
                            </ul>
                            
                        </div>-->
                    </nav>

                    <div class="d-flex col-12 align-items-center altezza">
                        <h1>Fashion Industry<br>
                            since 1985</h1>
                    </div>


                </div>
            </div>
        </div>

        
    </div>

    <div class="clear"></div>

    <div id="content" class="site-content">
