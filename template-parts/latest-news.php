<!-- ======= Latest News Section ======= -->
<section class="section-news section-t8">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="title-wrap d-flex justify-content-between">
                <div class="title-box">
                  <h2 class="title-a line-blue">Latest Blog Posts</h2>
                </div>
                <div class="title-link">
                  <a href="<?= get_post_type_archive_link('post') ?>"
                    >All Posts
                    <span class="ion-ios-arrow-forward"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div id="new-carousel" class="owl-carousel owl-theme">
            <?php
            $latestNewsQuery = new WP_Query(array(
              'posts_per_page' => 6
            ));

            while ($latestNewsQuery->have_posts()): $latestNewsQuery->the_post();
            $featuredImage = get_the_post_thumbnail_url();
            if (!$featuredImage) {
              $featuredImage = get_template_directory_uri() . '/images/default-blog.jpg';
            }
            ?>
          
          <div class="carousel-item-c">
              <div class="card-box-b card-shadow news-box">
                
                <div class="img-box-b">
                  <img
                    src="<?= $featuredImage ?>"
                    alt=""
                    class="img-b img-fluid"
                  />
                </div>
                
                <div class="card-overlay">
                  <div class="card-header-b">

                    <div class="card-category-b">
                      <?php 
                      get_the_category_list();
                      ?>
                     

                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="<?= the_permalink(); ?>"
                          ><?= the_title()?> </a
                        >
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b"><?= the_date() ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <?php endwhile; ?>


          </div>
        </div>
      </section>
      <!-- End Latest News Section -->