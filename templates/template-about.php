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

<div class="header-about-content">
  <h1 class="h1-2"><?php the_field( 'hero_about_title' ); ?></h1>

  <?php the_field( 'hero_about_text' ); ?>
</div>

</header>

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

  <?php if ( have_rows( 'blocks' ) ) : $i = 0; ?>

    <?php while ( have_rows( 'blocks' ) ) : the_row(); $i++; ?>
      <?php
        $image = get_sub_field( 'image' );
      ?>
      <?php if ($i == 1): ?>
    <div class="section2-row">
      <div class="section2-text section2-row1-text section2-row1-text1 section2-row1-text2">
          <h2><?php the_sub_field( 'title' ); ?></h2>
          <?php the_sub_field( 'text' ); ?>
      </div>
      <div class="section2-image section2-image_1">
       <?php echo wp_get_attachment_image( $image, 'full' ); ?>
      </div>
    </div>
      <?php endif; ?>

    <?php if ($i == 2): ?>
    <div class="section2-row section2-row2">
        <div class="section2-image section2-image_2">
           <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
        <div class="section2-text section2-row2-text">
            <h2><?php the_sub_field( 'title' ); ?></h2>
            <?php the_sub_field( 'text' ); ?>
        </div>
    </div>
    <?php endif; ?>

    <?php if ($i == 3): ?>
    <div class="section2-row section2-row3 ">
        <div class="section2-text section2-row3-text section2-row1-text3">
            <h2><?php the_sub_field( 'title' ); ?></h2>
            <?php the_sub_field( 'text' ); ?>
        </div>
        <div class="section2-image section2-image_3">
            <?php echo wp_get_attachment_image( $image, 'full' ); ?>
        </div>
    </div>
    <?php endif; ?>

    <?php endwhile; ?>

  <?php endif; ?>


  </section>




</main>


<?php get_footer();
