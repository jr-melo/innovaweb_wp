<?php

/**
 * 
 * Template Name: Página de Servicios
 * 
 * 
 */

get_header();
?>
<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <div class="page-title">
            <h1 class="mt-4 mb-3"><?php the_title(); ?></h1>
        </div>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url("/") ?>">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php the_title(); ?></li>
        </ol>
    </div>
    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-4 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-lower"><b>Desarrollo &amp; Diseño Web</b></span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/wp-content/themes/innovaweb_theme/img/products-01.jpg" alt="">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">Diseñamos y desarrollamos su sitio web responsive (Su sitio web se vera igual de bien en dispositivos móviles y Tablets, etc) a medida para su empresa o negocio.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-4 d-flex mr-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-lower"><b>Infraestructura de Redes</b></span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/wp-content/themes/innovaweb_theme/img/products-02.jpg" alt="">
                <div class="product-item-description d-flex ml-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">En Innova Web le ofrecemos nuestros servicios de Instalación y configuración de todo tipo de redes, asi como también el mantenimiento de servidores de empresas.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
        <div class="container">
            <div class="product-item">
                <div class="product-item-title d-flex">
                    <div class="bg-faded p-4 d-flex ml-auto rounded">
                        <h2 class="section-heading mb-0">
                            <span class="section-heading-lower"><b>Desarrollo de Aplicaciones</b></span>
                        </h2>
                    </div>
                </div>
                <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="/wp-content/themes/innovaweb_theme/img/products-03.jpg" alt="">
                <div class="product-item-description d-flex mr-auto">
                    <div class="bg-faded p-5 rounded">
                        <p class="mb-0">Contamos con la capacidad de desarrollar aplicaciones para todo tipo de necesidad empresarial, la misma con todos los protocolos y estándares requeridos. Brindando así seguridad y rendimiento a cada uno de nuestros clientes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-section">
    <div class="container">
        <!-- Content Row -->
        <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <h3 class="card-header bg-primary text-white">Basic</h3>
            <div class="card-body">
                <div class="display-4">$19.99</div>
                <div class="font-italic">per month</div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">
                <a href="#" class="btn btn-primary">Solicitar!</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card card-outline-primary h-100">
            <h3 class="card-header bg-primary text-white">Plus</h3>
            <div class="card-body">
                <div class="display-4">$49.99</div>
                <div class="font-italic">per month</div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">
                <a href="#" class="btn btn-primary">Solicitar!</a>
                </li>
            </ul>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100">
            <h3 class="card-header bg-primary text-white">Ultra</h3>
            <div class="card-body">
                <div class="display-4">$119.99</div>
                <div class="font-italic">per month</div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">Proximamente</li>
                <li class="list-group-item">
                <a href="#" class="btn btn-primary">Solicitar!</a>
                </li>
            </ul>
            </div>
        </div>
        </div>
        <!-- /.row -->
    </div>
    </section>
</div>


<?php
get_footer();

?>

<style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway';
    }

    p {
        line-height: 1.75;
    }

    .text-faded {
        color: rgba(255, 255, 255, 0.3);
    }

    .site-heading {
        margin-top: 5rem;
        margin-bottom: 5rem;
        text-transform: uppercase;
        line-height: 1;
        font-family: 'Raleway';
    }

    .site-heading .site-heading-upper {
        display: block;
        font-size: 2rem;
        font-weight: 800;
    }

    .site-heading .site-heading-lower {
        font-size: 5rem;
        font-weight: 100;
        line-height: 4rem;
    }

    .page-section {
        margin-bottom: 5rem;
    }

    .section-heading {
        text-transform: uppercase;
    }

    .section-heading .section-heading-upper {
        display: block;
        font-size: 1rem;
        font-weight: 800;
    }

    .section-heading .section-heading-lower {
        display: block;
        font-size: 3rem;
        font-weight: 100;
    }

    .bg-faded {
        background-color: rgba(220, 217, 217, 0.85);
    }


    @media (min-width: 992px) {
        .product-item .product-item-title {
            position: relative;
            z-index: 1;
            margin-bottom: -3rem;
        }

        .product-item .product-item-img {
            position: relative;
            z-index: 0;
            max-width: 50vw;
        }

        .product-item .product-item-description {
            position: relative;
            z-index: 1;
            margin-top: -3rem;
            max-width: 40vw;
        }
    }

    .text-primary {
        color: #e6a756 !important;
    }

    .font-weight-light {
        font-weight: 100 !important;
    }

    .page-section {
        margin-top: 5rem;
        margin-bottom: 5rem;
    }
</style>