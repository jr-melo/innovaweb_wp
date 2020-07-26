<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Innovaweb</title>

    <?php wp_head(); ?>

</head>

<body>

    
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?php echo site_url("/")?>">Innova Web</a>
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
                        <a class="nav-link" href="<?php echo site_url("/services")?>">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url("/about")?>">Sobre Nosotros</a>
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
                <div class="carousel-item active" style="background-image: url('https://pixabay.com/get/57e2d54a4c56ac14f6d1867dda35367b1c3ad9ec5257724e_1920.jpg')">
                    <div class="carousel-caption d-none d-md-block"></div>
                </div>
            </div>
        </div>
    </header>