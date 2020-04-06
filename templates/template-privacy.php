<?php
/**
 * Template Name: Privacy page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();?>


</header>


<main class="privacy-main">
  <?php if (have_posts()) : ?>
    <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post(); ?>

    <section class="left">
        <h1><?php the_title(); ?></h1>
        <h6><?php the_date('j F Y'); ?></h6>
    </section>
    <section class="right">
      <?php the_field( 'privacy_text' ); ?>
    </section>

    <?php endwhile; ?>

  <?php endif; ?>

</main>



<?php get_footer();
