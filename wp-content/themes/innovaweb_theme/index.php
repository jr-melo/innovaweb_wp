<?php get_header(); ?>

<!-- Page Content -->
<section class="page-section">
    <div class="container">
        <h1 class="my-4">
            <center>Bienvenid@ a Innovaweb</center>
            <hr>
        </h1>
        <div class="row mainrow">
            <div class="row tm-catalog-item-list">

                <?php

                while (have_posts()) {
                    the_post();

                ?>
                    <!-- Marketing Icons Section -->
                    <div class="col-lg-4 col-md-6 col-sm-12 tm-catalog-item">
                        <div class="card h-100">
                            <div class="p-4 tm-bg-gray tm-catalog-item-description">
                                <h3 class="tm-text-primary mb-3 card-header"><a href="<?php the_permalink(); ?>"> <?php the_title();   ?> </a></h3>
                                <p class="tm-catalog-item-text">
                                    <?php echo wp_trim_words(get_the_content(), 12); ?>
                                </p>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer</a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                }
                wp_reset_postdata();
                ?>
            </div>
            <div>
            <ul class="nav tm-paging-links">
                <li class="nav-item active"><a href="#" class="nav-link tm-paging-link">1</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">2</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">3</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">4</a></li>
                <li class="nav-item"><a href="#" class="nav-link tm-paging-link">></a></li>
            </ul>
        </div>
        </div>
        <!-- /.row -->
        <!-- Catalog Paging Buttons -->
        

    </div>
</section>
<!-- /.container -->

<?php get_footer(); ?>

<style>
    .mainrow {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: 85px
    }
</style>