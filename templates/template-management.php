<?php
/**
 * Template Name: Management Team page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

<div class="header-management-content">
    <h1><?php the_field( 'hero_management_title' ); ?></h1>
    <?php the_field( 'hero_management_text' ); ?>
</div>


</header>


<main class="management-main">

    <section id="seniors" class="seniors-head">
        <h2><?php the_field( 'title' ); ?></h2>
      <?php if ( have_rows( 'list' ) ) : $i = 0;  ?>
        <div class="seniors-head-row">
        <?php  while ( have_rows( 'list' ) ) : the_row(); $i++;  ?>
            <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

          <?php if ($i === 1): ?>


            <div class="senior" <?php echo $hide;  ?>>
              <?php $image = get_sub_field( 'image' ); ?>
                <div class="image-senior">
                    <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                </div>
                <div class="wrapper-senior-text">
                    <div class="senior_text">
                        <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>


          <?php  endif;  ?>

          <?php if ($i === 2): ?>

            <div class="senior" <?php echo $hide;  ?>>
              <?php $image = get_sub_field( 'image' ); ?>
                <div class="image-senior">
                    <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                </div>
                <div class="wrapper-senior-text">
                    <div class="senior_text">
                        <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>


          <?php  endif;  ?>

          <?php if ($i === 3): ?>

            <div class="senior" <?php echo $hide;  ?>>
              <?php $image = get_sub_field( 'image' ); ?>
                <div class="image-senior">
                    <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                </div>
                <div class="wrapper-senior-text">
                    <div class="senior_text">
                        <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>

          <?php endif;  ?>

        <?php endwhile; ?>

        </div>


        <div class="seniors-head-row senior-mobile-row">
          <?php  $i = 0; while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
            <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

         <?php if ($i === 3): ?>

            <div class="senior" <?php echo $hide;  ?>>
              <?php $image = get_sub_field( 'image' ); ?>
                <div class="image-senior">
                    <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                </div>
                <div class="wrapper-senior-text">
                    <div class="senior_text">
                        <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>


          <?php  endif;  ?>


          <?php if ($i === 4): ?>


            <div class="senior" <?php echo $hide;  ?>>
              <?php $image = get_sub_field( 'image' ); ?>
                <div class="image-senior">
                    <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                </div>
                <div class="wrapper-senior-text">
                    <div class="senior_text">
                        <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                        <?php the_sub_field( 'text' ); ?>
                    </div>
                </div>
            </div>

          <?php  endif;  ?>

        <?php endwhile;  ?>
        </div>

        <div class="seniors-head-row">
            <?php $i = 0;  while ( have_rows( 'list' ) ) : the_row(); $i++;  ?>
              <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

              <?php if ($i === 4 ): ?>

                <div class="senior" <?php echo $hide;  ?>>
                  <?php $image = get_sub_field( 'image' ); ?>
                    <div class="image-senior">
                        <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                    </div>
                    <div class="wrapper-senior-text">
                        <div class="senior_text">
                            <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    </div>
                </div>

              <?php endif;  ?>

              <?php if ($i === 5 ): ?>


                <div class="senior" <?php echo $hide;  ?>>
                  <?php $image = get_sub_field( 'image' ); ?>
                    <div class="image-senior">
                        <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                    </div>
                    <div class="wrapper-senior-text">
                        <div class="senior_text">
                            <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    </div>
                </div>

              <?php endif;  ?>

              <?php if ($i === 6 ): ?>

                <div class="senior" <?php echo $hide;  ?>>
                  <?php $image = get_sub_field( 'image' ); ?>
                    <div class="image-senior">
                        <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                    </div>
                    <div class="wrapper-senior-text">
                        <div class="senior_text">
                            <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                            <?php the_sub_field( 'text' ); ?>
                        </div>
                    </div>
                </div>

              <?php endif;  ?>


            <?php endwhile; ?>
        </div>

        <div class="seniors-head-row">
          <?php $i = 0; while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
            <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

           <?php if ($i === 7): ?>


              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>


          <?php if ($i === 8): ?>


              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>


          <?php if ($i === 9): ?>


              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>

          <?php endwhile; ?>

        </div>


        <div class="seniors-head-row senior-mobile-row">
          <?php $i = 0; while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
            <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

           <?php if ($i === 9): ?>

              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>

            <?php if ($i === 10): ?>

              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>

          <?php endwhile; ?>

        </div>

        <div class="seniors-head-row">
           <?php $i = 0; while ( have_rows( 'list' ) ) : the_row(); $i++; ?>
             <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

           <?php if ($i === 10): ?>

              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>


            <?php endif;  ?>



           <?php if ($i === 11): ?>

              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>


           <?php if ($i === 12): ?>

              <div class="senior" <?php echo $hide;  ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>

          <?php endwhile; ?>
        </div>



        <div class="seniors-head-row seniors-head-row-woman">
          <?php $i = 0; while ( have_rows( 'list' ) ) : the_row(); $i++; ?>

            <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

           <?php if ($i === 13): ?>

              <div class="senior" <?php echo $hide; ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>

            <?php endif;  ?>


            <?php if ($i === 14): ?>


              <div class="senior" <?php echo $hide; ?>>
                <?php $image = get_sub_field( 'image' ); ?>
                  <div class="image-senior">
                      <a href="<?php the_sub_field( 'link' ); ?>" ><?php echo wp_get_attachment_image( $image, 'medium' ); ?></a>
                  </div>
                  <div class="wrapper-senior-text">
                      <div class="senior_text">
                          <a href="andrey.html"><h5><?php the_sub_field( 'name' ); ?></h5></a>

                          <?php the_sub_field( 'text' ); ?>
                      </div>
                  </div>
              </div>


            <?php endif;  ?>

          <?php endwhile ?>

        </div>

      <?php endif; ?>

    </section>
</main>


<?php get_footer();
