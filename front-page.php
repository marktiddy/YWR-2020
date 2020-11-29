<?php get_header();?>
    <!-- ======= Intro Section ======= -->
    <div class="intro intro-carousel">
      <div id="carousel" class="owl-carousel owl-theme">
        <!--START OF SLIDE-->
       
        <div
          class="carousel-item-a intro-item bg-image"
          style="background-image: url(<?= get_field('slide_1_image'); ?>)">
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top">
                        <?= get_field('slide_1_subtitle'); ?>
                      </p>
                      <h1 class="intro-title mb-4">
                      <?= get_field('slide_1_title'); ?>

                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="<?= get_field('slide_1_button_link'); ?>"
                          ><span class="price-a"><?= get_field('slide_1_button_text'); ?>
                        </span></a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END OF SLIDE -->
        <!--START OF SLIDE-->

        <div
          class="carousel-item-a intro-item bg-image"
          style="background-image: url(<?= get_field('slide_2_image') ?>)"
        >
          <div class="overlay overlay-a"></div>
          <div class="intro-content display-table">
            <div class="table-cell">
              <div class="container">
                <div class="row">
                  <div class="col-lg-8">
                    <div class="intro-body">
                      <p class="intro-title-top"><?= get_field('slide_2_subtitle') ?></p>
                      <h1 class="intro-title mb-4">
                       <?= get_field('slide_2_title') ?>
                      </h1>
                      <p class="intro-subtitle intro-price">
                        <a href="<?= get_field('slide_2_button_link') ?>"
                          ><span class="price-a"><?= get_field('slide_2_button_text') ?></span></a
                        >
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--END OF SLIDE-->
      </div>
    </div>
    <!-- End Intro Section -->

    <main id="main">
      <!-- ======= Services Section ======= -->
      <section class="section-services section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a"><?= the_title(); ?></h2>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
             <?= the_content(); ?>
            </div>
          </div>
        </div>
      </section>
      <!-- End Services Section -->
    <?= get_template_part('template-parts/resources-section') ?>

      <?= get_template_part('template-parts/latest-news') ?>

      <?php get_footer(); ?>