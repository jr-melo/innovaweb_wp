<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Innova Web
 * @since Innova Web 1.0
 */
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="error-404 not-found">
				<header class="page-header">
					<center>
					<h1 class="page-title"><?php _e( 'Oops! Esta página no existe.', 'innovaweb_theme' ); ?></h1>
					</br>
					<h2> Pulsa 
					<a href="<?php echo site_url("/") ?>">aquí</a> para volver al inicio</h2></center>
					
				</header><!-- .page-header -->
			</div><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php

