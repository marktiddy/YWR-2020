<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Latest Posts</h1>
              <span class="color-text-a">Youth Work Resource</span>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- =======  Blog Grid ======= -->
    <section class="news-grid grid">
      <div class="container">
        <div class="row">

					<?php while (have_posts()): the_post(); 
					$featuredImage = get_the_post_thumbnail_url();
					if (!$featuredImage) {
						$featuredImage = get_template_directory_uri() . '/images/default-blog.jpg';
					}
					?>
					<a href="<?= the_permalink(); ?>">
          <div class="col-md-4">
						<a href="<?= the_permalink(); ?>">
            <div class="card-box-b card-shadow news-box">
              <div class="img-box-b">
                <img src="<?= $featuredImage ?>" alt="" class="img-b img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-header-b">
                  <div class="card-title-b">
                    <h2 class="title-2">
                      <a href="<?= the_permalink(); ?>"><?= the_title(); ?></a>
                    </h2>
                  </div>
                  <div class="card-date">
                    <span class="date-b"><?= the_date(); ?></span>
                  </div>
                </div>
              </div>
						</div>
					</div>
				</a>
					<?php endwhile; ?>



        </div>
        <div class="row">
          <div class="col-sm-12">
            <nav class="pagination-a">
              <ul class="pagination justify-content-end">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <span class="ion-ios-arrow-back"></span>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">1</a>
                </li>
                <li class="page-item active">
                  <a class="page-link" href="#">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#">3</a>
                </li>
                <li class="page-item next">
                  <a class="page-link" href="#">
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Blog Grid-->

  </main><!-- End #main -->


<?php get_footer();
