<?php
/**
 * Template Name: Main page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

<h1 class="white h1-1"><?php the_field( 'title' ); ?></h1>

</header>
  <main class="home">

        <section class="section2-home">
            <h2><?php the_field( 'zagolovok' ); ?></h2>
            <div class="animation1-container">
              <?php if ( have_rows( 'cols' ) ) : $i = 0; $i_second = 0; ?>
                <?php while ( have_rows( 'cols' ) ) : the_row(); $i++; $i_second++; ?>
                  <?php
                    $classes = ($i < 2 ) ? 'animation1-wrapper animation1-wrapper-left' : 'animation1-wrapper animation1-wrapper-right';
                    $hr = ($i_second < 2 ) ? 'animation1-left-hr' : 'animation1-right-hr';
                  ?>
                    <div class="<?php echo $classes; ?>">
                        <div class="animation1 animation1-left">
                            <h3><?php the_sub_field( 'list_title' ); ?></h3>
                            <hr class="<?php echo $hr; ?>">
                            <?php if ( have_rows( 'achievements' ) ) : ?>
                              <?php while ( have_rows( 'achievements' ) ) : the_row(); ?>
                              <div class="achievements">
                                  <h3><?php the_sub_field( 'zagolovok' ); ?></h3>
                                  <p><?php the_sub_field( 'tekst' ); ?></p>
                              </div>
                                <?php endwhile; ?>
                           <?php endif; ?>
                        </div>
                    </div>


                <?php endwhile; ?>
              <?php endif;; ?>
            </div>
            <div class="button-wrapper button-about">
                <a class="button" href="<?php the_field( 'ssylka_na_straniczu_about' ); ?>">
                    <p>About Us</p>
                    <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 2L7 7L2 12" stroke="white" stroke-width="3"/>
                        </svg>
                </a>
            </div>
        </section>

        <section class="animation2">
            <div class="anime-wrapper">
                <div class="anime"></div>
            </div>
            <?php the_field( 'tekst' ); ?>
            <div class="button-wrapper">
                <a class="button" href="<?php the_field( 'ssylka_na_main_sectors' ); ?>">
                    <p>Main Sectors</p>
                    <svg width="10" height="14" viewBox="0 0 10 14" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 2L7 7L2 12" stroke="white" stroke-width="3"/></svg>
                </a>
            </div>
        </section>

        <section class="home-4">
            <div class="grid">
              <?php
                $args = array(
                  'post_type'      => 'post',
                  'cat'            => 1,
                  'posts_per_page' => 3,
                  'order'          => 'DESC'
                );

                $q  = new WP_Query($args);
                $i  = 0;
                $i2 = 0;

              ?>

              <?php while ( $q->have_posts()) : $q->the_post(); $i++; $i2++; ?>
                <?php
                  $openLeft = ($i == 1) ? '<div class="left">' : '';
                  $closeLeft = ($i == 2) ? '</div> <!-- end left -->' : '';

                ?>
                <?php echo $openLeft; ?>

                  <?php if ($q->current_post == 0 ): ?>

                    <a href="<?php the_permalink(); ?>" class="top">
                        <div class="home-4_image1" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>"></div>
                        <div class="home-4_text">
                            <p class="date"><?php the_date() ; ?></p>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>

                  <?php elseif ($q->current_post == 1 ): ?>


                    <a href="<?php the_permalink(); ?>" class="bottom home-4_image3" style="background-image: url('<?php echo get_the_post_thumbnail_url( $post->ID, 'full' ); ?>');">
                            <div class="home-4_title"><h3><?php the_title(); ?></h3></div>
                    </a>


                <?php echo $closeLeft; ?>

              <?php elseif ($q->current_post == 2 ): ?>

              <a href="<?php the_permalink(); ?>" class="right">
                  <div class="home-4_image2"><?php echo get_the_post_thumbnail( $post->ID,  'full' ); ?></div>
                  <div class="bottom">
                      <p class="date"><?php the_date(); ?></p>
                      <h3><?php the_title(); ?></h3>
                      <p><?php the_excerpt(); ?></p>
                  </div>
              </a>

              <?php endif; ?>

              <?php endwhile; wp_reset_postdata(); ?>


            </div>

            <a href="<?php the_field( 'ssylka_na_latest_publications' ); ?>">
                <h3>Prytek’s latest publications</h3>
                <svg class="arrow-media" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/><path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/></svg>
            </a>
        </section>
    </main>


<?php
get_footer();
