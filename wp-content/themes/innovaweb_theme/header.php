<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="<?php echo site_url("/wp-content/themes/innovaweb_theme/img/logo.png")?>" type="image/png">
    <title>Innova Web</title>

    <?php wp_head(); ?>

</head>

<body>

    
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
        
            <a class="navbar-brand" href="<?php echo site_url("/")?>">
                <img class="logoimg" src="<?php echo site_url("/wp-content/themes/innovaweb_theme/img/logo3.png")?>" alt="">
            </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                
             <!-- Menú dinámico, requiere estilo
               <?php //wp_nav_menu("array('theme_location' => 'headerMenuLocation')");?> 
            -->

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/")?>">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/about")?>">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/services")?>">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/gallery")?>">Galería</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/contact")?>">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('<?php echo site_url("/wp-content/themes/innovaweb_theme/img/portada.jpg")?>')">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </header>

    <style>
    .logoimg {
        position: relative;
        z-index: 0;
        max-width: 130px;
    }
    </style>