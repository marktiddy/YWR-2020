<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element
 *
 * @package WordPress
 * @subpackage YWR_2020
 * @since YWR_2020 1.0
 */

?>
		<?php 
								$homepageId = get_option('page_on_front')
							?>
<!DOCTYPE html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- =======  Search Section ======= -->
<div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Site</h3>
      </div>
      <span class="close-box-collapse right-boxed ion-ios-close"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a" action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label for="Type">What are you looking for?</label>
                <input
                  type="text"
                  class="form-control form-control-lg form-control-a"
									placeholder="Keyword"
									name="s"
                />
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b text-white">Search</button>
            </div>
            <div class="search-social">
              <a href="<?= get_field('facebook',$homepageId) ?>"><i class="fab fa-facebook" aria-hidden="true"></i></a>
              <a href="<?= get_field('twitter',$homepageId) ?>"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
            </div>
          </div>
        </form>
      </div>
      <div></div>
    </div>
    <!-- End Search Section -->

    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button
          class="navbar-toggler collapsed"
          type="button"
          data-toggle="collapse"
          data-target="#main-site-menu"
          aria-controls="navbarDefault"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="<?= get_site_url() ?>"
          ><span><?= bloginfo('name') ?></span></a
        >
        <button
          type="button"
          class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo01"
          aria-expanded="false"
          id="search-button"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
				</button>
				
				<?php 
								$args = array(
									'theme_location' => 'primary', 
                  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                  'container'       => 'div',
                  'container_class' => 'collapse navbar-collapse',
                  'container_id'    => 'main-site-menu',
                  'menu_class'      => 'navbar-nav mr-auto',
                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'          => new WP_Bootstrap_Navwalker(),
								);

								wp_nav_menu($args);
					?>
       
        <button
          type="button"
          class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block"
          data-toggle="collapse"
          data-target="#main-site-menu"
          aria-expanded="false"
        >
          <span class="fa fa-search" aria-hidden="true"></span>
        </button>
      </div>
    </nav>
    <!-- End Header/Navbar -->
    <main id="main">
		
