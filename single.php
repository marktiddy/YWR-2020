<?php
/**
 * The template for displaying all single posts 
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since 1.0
 * @version 1.0
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
							$postDate = get_the_date()
							?>
              <img src="<?= $featuredImg ?>" alt="" class="">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title"><?= the_title(); ?>
							 </h3>
							 <p class="post-details">Posted on: <?= $postDate; ?></p>
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


<?php get_footer();
