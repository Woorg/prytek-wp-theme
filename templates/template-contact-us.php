<?php
/**
 * Template Name: Contact Us page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header(); ?>

</header>


<main class="contact-main">


<section class="contact-section1">
  <div class="form">
      <h2><?php the_title(); ?></h2>
      <a href="mailto:<?php the_field( 'pochta', 'option' ); ?>"><span><?php the_field( 'pochta', 'option' ); ?></span></a>

      <?php
        $form = get_field( 'contact_page_form' );
        echo do_shortcode($form);
      ?>
  </div>
  <?php $contact_page_image = get_field( 'contact_page_image' ); ?>
  <div class="contact-image">
     <?php echo wp_get_attachment_image( $contact_page_image, 'full' ); ?>
  </div>
</section>


<section class="contact-section2">
  <div class="map-side">
      <?php $contact_page_map = get_field( 'contact_page_map' ); ?>
      <div class="map-image">
          <?php echo wp_get_attachment_image( $contact_page_map, 'full' ); ?>
      </div>
      <div class="contacts-map">
         <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
          <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

          <?php if ($i === 8): ?>
          <div class="address contact-india" <?php echo $hide; ?>>
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>

          <?php endif; ?>

          <?php if ($i === 4): ?>
          <div class="address contact-india ">
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>
          <?php endif; ?>


        <?php endwhile; ?>
        <?php endif; ?>

      </div>

    <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
      <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
      <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

      <?php if ($i === 3): ?>
      <div class="address mobile-none-address address-map-israel">
          <h5><?php the_sub_field( 'gorod' ); ?></h5>
          <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
          <p><?php the_sub_field( 'text' ); ?></p>
      </div>
      <?php endif; ?>

      <?php if ($i === 8): ?>
      <div class="address mobile-none-address address-map-israel">
          <h5><?php the_sub_field( 'gorod' ); ?></h5>
          <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
          <p><?php the_sub_field( 'text' ); ?></p>
      </div>
      <?php endif; ?>


      <?php endwhile; ?>
    <?php endif; ?>

  </div>


  <div class="adresses">
      <div class="adresses-row">

        <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
          <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

           <?php if ($i === 1): ?>
          <div class="address" <?php echo $hide; ?>>
            <h5><?php the_sub_field( 'gorod' ); ?></h5>
            <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
            <p><?php the_sub_field( 'text' ); ?></p>
          </div>
          <?php endif; ?>


        <?php endwhile; ?>

        <?php endif; ?>

        <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>

          <div class="address-mobile">
            <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
              <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

              <?php if ($i === 2): ?>

              <div class="address" <?php echo $hide; ?>>
                  <h5><?php the_sub_field( 'gorod' ); ?></h5>
                  <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                  <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 3): ?>

              <div class="address" <?php echo $hide; ?>>
                  <h5><?php the_sub_field( 'gorod' ); ?></h5>
                  <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                  <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 5): ?>

              <div class="address address200" <?php echo $hide; ?>>
                  <h5><?php the_sub_field( 'gorod' ); ?></h5>
                  <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                  <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 7): ?>

              <div class="address address200" <?php echo $hide; ?>>
                  <h5><?php the_sub_field( 'gorod' ); ?></h5>
                  <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                  <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 6): ?>

              <div class="address address-row1-russia" <?php echo $hide; ?>>
                <h5><?php the_sub_field( 'gorod' ); ?></h5>
                <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 4): ?>

              <div class="address address-row2-neth" <?php echo $hide; ?>>
                <h5><?php the_sub_field( 'gorod' ); ?></h5>
                <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

              <?php if ($i === 8): ?>

              <div class="address address-row2" <?php echo $hide; ?>>
                <h5><?php the_sub_field( 'gorod' ); ?></h5>
                <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
                <p><?php the_sub_field( 'text' ); ?></p>
              </div>

              <?php endif; ?>

            <?php endwhile; ?>

          </div>

        <?php endif; ?>



        <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
          <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

          <?php if ($i === 5): ?>
          <div class="address mobile-none-address address200" <?php echo $hide; ?>>
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>
          <?php endif; ?>

          <?php if ($i === 5): ?>

          <div class="address mobile-none-address address-row1-russia" <?php echo $hide; ?>>

            <h5><?php the_sub_field( 'gorod' ); ?></h5>
            <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
            <p><?php the_sub_field( 'text' ); ?></p>

          </div>

          <?php endif; ?>

          <?php endwhile; ?>

        <?php endif; ?>

      </div>




      <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
      <div class="adresses-row">
        <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>

          <?php if ($i === 2): ?>

          <div class="address" <?php echo $hide; ?>>
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>

          <?php endif; ?>

          <?php if ($i === 7): ?>
          <div class="address address200" <?php echo $hide; ?>>

            <h5><?php the_sub_field( 'gorod' ); ?></h5>
            <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
            <p><?php the_sub_field( 'text' ); ?></p>

          </div>
          <?php endif; ?>

          <?php if ($i === 4): ?>
          <div class="address address-row2-neth" <?php echo $hide; ?>>

            <h5><?php the_sub_field( 'gorod' ); ?></h5>
            <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
            <p><?php the_sub_field( 'text' ); ?></p>
          </div>
          <?php endif; ?>

        <?php endwhile; ?>

      </div>
      <?php endif; ?>

      <?php if ( have_rows( 'contacts_adresses' ) ) : $i = 0; ?>
      <div class="adresses-row adresses-row-russia-israel">
        <?php while ( have_rows( 'contacts_adresses' ) ) : the_row(); $i++; ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
          <?php if ($i === 3): ?>

          <div class="address" <?php echo $hide; ?>>
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>

          <?php endif; ?>

          <?php if ($i === 6): ?>

          <div class="address" <?php echo $hide; ?>>
              <h5><?php the_sub_field( 'gorod' ); ?></h5>
              <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?></a>
              <p><?php the_sub_field( 'text' ); ?></p>
          </div>

          <?php endif; ?>
        <?php endwhile; ?>

      <?php endif; ?>

  </div>
</section>





</main>


<?php get_footer();
