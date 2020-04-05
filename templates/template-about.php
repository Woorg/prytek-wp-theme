<?php
/**
 * Template Name: About us page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

<?php
  /* Start the Loop */
  while ( have_posts() ) : the_post();

    the_content();

  endwhile;

?>

<main class="about-main">
  <section class="section2-about">
    <div class="main-areas">
        <h2><?php the_field( 'title' ); ?></h2>


        <?php if ( have_rows( 'list' ) ) : ?>
        <div class="main-areas-cont">
          <?php while ( have_rows( 'list' ) ) : the_row();  ?>
            <?php
              $icon = get_sub_field( 'icon' );

            ?>
            <a href="<?php the_sub_field( 'link' ); ?><?php the_sub_field( 'hash' ); ?>" class="main-areas-box">
                <div class="main-areas_image">
                  <?php echo wp_get_attachment_image( $icon, 'full' ); ?>
                </div>
                <h5><?php the_sub_field( 'title' ); ?></h5>
            </a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>

    </div>

  </section>
</main>


<?php get_footer();
