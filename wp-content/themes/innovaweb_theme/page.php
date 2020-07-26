<?php
get_header();

while (have_posts()) {
    the_post();

?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="page-title">
            <h1 class="mt-4 mb-3"><?php the_title();?></h1>
        </div>

        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo site_url("/")?>">Home</a>
            </li>
            <li class="breadcrumb-item active"><?php the_title();?></li>
        </ol>

        <div class="page-content">
            <p><?php the_content();?></p>
        </div>

    </div>
    <!-- /.container -->

<?php
    get_footer();
}
wp_reset_postdata();
?>
