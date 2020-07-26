<?php
get_header();

while (have_posts()) {
    the_post();

?>
    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8 column_single">
            <!-- Title -->
            <hr>
            <h1 ><center><?php the_title();?></center></h1>
            <hr>

            <!-- Post Content -->
            <p><?php the_content()?></p>

            <!-- Date/Time -->
            <hr>
            <p><b>Fecha Publicación:</b> <?php echo the_date();?></br><b>Hora:</b> <?php echo the_time(); ?></p>
            <hr>

            <center><a href="<?php echo site_url("/")?>" class="btn btn-primary">Regresar</a></center>
        </div>
       

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4 column_single">

            <!-- Search Widget -->
            <div class="card mb-4">
                <h5 class="card-header">Buscar</h5>
                <div class="card-body">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="inpug-group-append">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header"></h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>

<?php
    get_footer();
}
wp_reset_postdata();
?>