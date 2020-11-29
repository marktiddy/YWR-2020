<?php
/**
 * The template for displaying the footer
 *
 * Contains all of the content after the pages content
 *
 * @package WordPress
 * @subpackage THEME_NAME_HERE
 * @since THEME_NAME_HERE 1.0
 */
?>
		<?php 
								$homepageId = get_option('page_on_front')
							?>

    <!-- ======= Footer ======= -->
    <section class="section-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-4">
            <div class="widget-a">
              <div class="w-header-a">
                <h3 class="w-title-a text-brand"><?= bloginfo('name') ?></h3>
              </div>
              <div class="w-body-a">
                <p class="w-text-a color-text-a">
                 Prividing quality Youth and Schools Ministry resources for free for over 10 years.
                </p>
              </div>
              <div class="w-footer-a">
                <ul class="list-unstyled">
                 
                  <li class="color-a">
                    <span class="color-text-a">Email .<a href="mailto:<?= get_field('email',$homepageId); ?>"></span> <?= get_field('email',$homepageId) ?></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3 text-center">
            <a href="https://www.premierdigital.info/shortlist-2018" target="_blank">
         <img src="<?= get_theme_file_uri() ?>/images/appfinalist.png" alt="Premier Digital Awards 2018 App Finalist">
        </a>
        
        <p><br>For our 100 Questions Youth App</p>
          </div>
          <div class="col-sm-12 col-md-4 section-md-t3">
            <div class="widget-a">


            <?php 
								$footerArgs = array(
									'theme_location' => 'footer1', 
                  'container'       => 'div',
                  'container_class' => 'w-body-a',
                  'menu_class'      => 'list-unstyled',
                  'add_li_class_to_footer'  => 'item-list-a',
                  'before' => '<i class="fa fa-angle-right"></i>'
								);

								wp_nav_menu($footerArgs);
					?>
             


            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          <?php 
								$args = array(
									'theme_location' => 'footer2', 
                  'container'       => 'nav',
                  'container_class' => 'nav-footer',
                  'menu_class'      => 'list-inline',
                  'add_li_class'  => 'list-inline-item'
								);

								wp_nav_menu($args);
					?>



            <div class="socials-a">
              <ul class="list-inline">
						
							 <li class="list-inline-item">
                  <a href="<?= get_field('email',$homepageId) ?>">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= get_field('facebook',$homepageId) ?>">
                    <i class="fab fa-facebook" aria-hidden="true"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="<?= get_field('twitter',$homepageId) ?>">
                    <i class="fab fa-twitter" aria-hidden="true"></i>
                  </a>
                </li>
                
              </ul>
            </div>
            <div class="copyright-footer">
              <p class="copyright color-text-a">
                &copy; Copyright <?php echo date('Y'); ?>
                <span class="color-a"><?php bloginfo('name'); ?></span> All Rights Reserved.
              </p>
            </div>
            <div class="credits">
              <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
              Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>. Customised and adapted for Wordpress by <a href="https://portfolio.marktiddy.co.uk" target="_blank">Mark Tiddy Web Design</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End  Footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <div id="preloader"></div>

<?php wp_footer(); ?>
</body>
</html>