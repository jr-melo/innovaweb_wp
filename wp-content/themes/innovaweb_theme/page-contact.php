<?php

/**
 * 
 * Template Name: Página de contacto
 * 
 * 
 */

get_header();
?>
<!-- Page Content -->
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
    <section class="page-section cta">
        <!-- Content Row -->
        <div class="row">
            <!-- Contact Details Column -->
            <div class="col-lg-4 mb-4">
                <div class="contact_info">
                    <div class="info_item">
                        <i class="lnr lnr-home"></i>
                        <h3>Detalles de Contacto</h3>
                        <hr>
                        <h6><b>Aquí la dirección</b></h6>
                        <hr>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-phone-handset"></i>
                        <h6><b>+1 123-456-7890</b></h6>
                        <hr>
                        <p><b>Lunes a Viernes de 9am a 6pm</b></p>
                        <hr>
                    </div>
                    <div class="info_item">
                        <i class="lnr lnr-envelope"></i>
                        <h6><b>innovaweb@test.com</b></h6>
                        <p>¡Envíenos su consulta en cualquier momento!</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
            <div class="col-lg-9 enroll">
                    <hr>
                <h3>Contacte con Nosotros</h3>

                <form method="post" id="enrollForm" role="form">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre Completo:</label>
                            <input type="text" class="form-control" id="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Correo Electrónico:</label>
                            <input required type="text" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" maxlength="999" style="resize:none" required></textarea>
                        </div>
                    </div>
                    <div id="success"></div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <input type="submit" class="btn btn-primary" id='enroll' name='enroll' name="submit_reg" value="¡Enviar!">
                </form>
            </div>
        </div>
        <!-- /.row -->
    </section>
</div>
<!-- /.container -->

<?php
get_footer();
?>
