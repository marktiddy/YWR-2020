<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


			<?php
			while ( have_posts() ) : the_post();
			?>

			


		
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
              <h3 class="sinse-title"><?= the_title(); ?>
               </h3>
            </div>
          </div>
          <div class="col-md-12 section-t8 less-margin">
							<div class="row">
								<div class="col-md-12">
								<?= the_content(); ?>
								</div>
        </div>
      </div>
    </section>

			<?php
			endwhile; // End of the loop.
			?>


<?php get_footer();
