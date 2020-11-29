<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since THEME_NAME_HERE 1.0
 */

get_header(); ?>

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="about-img-box">
							<?php 
							$featuredImg = get_the_post_thumbnail_url();
							if (!$featuredImg) {
								$featuredImg = get_theme_file_uri() . '/images/wood.jpg';
							}
							?>
              <img src="<?= $featuredImg ?>" alt="" class="">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">404 Error
							 </h3>
            </div>
          </div>
          <div class="col-md-12 section-t8 less-margin">
							<div class="row">
								<div class="col-md-12 text-center">
							<p>You once were found but now you're lost!<br>Something has gone wrong. <a href="<?= get_site_url() ?>">Click to go home</a></p>
								</div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>
