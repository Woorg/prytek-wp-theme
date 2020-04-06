<?php
/**
 * Template Name: Main Sectors page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

<div class="header-mainsectors-content">
    <div class="finance">
        <h1><?php the_field( 'fintech_title' ); ?></h1>
        <?php the_field( 'fintech_text' ); ?>
    </div>
    <div class="delta">
        <div class="delta-logo-title">
            <?php $delta_image = get_field( 'delta_image' ); ?>
            <a href="<?php the_field( 'delta_link' ); ?>" class="delta-image"><?php echo wp_get_attachment_image( $delta_image, 'full' ); ?></a>
            <h5><?php the_field( 'delta_title' ); ?></h5>
        </div>
        <?php the_field( 'delta_text' ); ?>
    </div>
</div>



</header>


 <main class="mainsectors-main">
  <?php if ( have_rows( 'peoples' ) ) : $count = 0; $i = 0; $i2 = 0; $i3 = 0;  ?>

  <section class="peoples">

    <div class="people-row-1">

      <div class="people-row-11">
      <?php while ( have_rows( 'peoples' ) ) : the_row(); $count++;  ?>
      <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
      <?php $image = get_sub_field( 'image' ); ?>

        <?php if ($count < 3) : ?>
            <div class="people" <?php echo $hide;  ?>>
                <div class="people-text">
                    <button class="people_cross">×</button>
                    <h4><?php the_sub_field( 'name' ); ?></h4>
                    <?php the_sub_field( 'tekst' ); ?>
                </div>
                <div class="people_image"><?php echo wp_get_attachment_image( $image, 'medium' ); ?></div>
                <h4 class="people_name"><?php the_sub_field( 'name' ); ?></h4>
                <p class="people_subtitle"><?php the_sub_field( 'role' ); ?></p>
            </div>

          <?php endif;  ?>

        <?php endwhile; ?>
        </div>

        <div class="people-row-12">
          <?php while ( have_rows( 'peoples' ) ) : the_row(); $i++;  ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
          <?php $image = get_sub_field( 'image' ); ?>
            <?php if ($i > 2 && $i < 5 ) : ?>
              <div class="people" <?php echo $hide;  ?>>
                  <div class="people-text">
                      <button class="people_cross">×</button>
                      <h4><?php the_sub_field( 'name' ); ?></h4>
                      <?php the_sub_field( 'tekst' ); ?>
                  </div>
                  <div class="people_image"><?php echo wp_get_attachment_image( $image, 'medium' ); ?></div>
                  <h4 class="people_name"><?php the_sub_field( 'name' ); ?></h4>
                  <p class="people_subtitle"><?php the_sub_field( 'role' ); ?></p>
              </div>
          <?php endif; ?>
        <?php endwhile; ?>
        </div>



      </div>


      <div class="people-row-2">

        <div class="people-row-21">
          <?php while ( have_rows( 'peoples' ) ) : the_row(); $i2++;  ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
          <?php $image = get_sub_field( 'image' ); ?>

            <?php if ($i2 > 4 && $i2 < 8) : ?>
                <div class="people" <?php echo $hide;  ?>>
                    <div class="people-text">
                        <button class="people_cross">×</button>
                        <h4><?php the_sub_field( 'name' ); ?></h4>
                        <?php the_sub_field( 'tekst' ); ?>
                    </div>
                    <div class="people_image"><?php echo wp_get_attachment_image( $image, 'medium' ); ?></div>
                    <h4 class="people_name"><?php the_sub_field( 'name' ); ?></h4>
                    <p class="people_subtitle"><?php the_sub_field( 'role' ); ?></p>
                </div>

              <?php endif;  ?>

            <?php endwhile;?>

        </div>

        <div class="people-row-22">

          <?php while ( have_rows( 'peoples' ) ) : the_row(); $i3++;  ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
          <?php $image = get_sub_field( 'image' ); ?>

            <?php if ($i3 > 7 ) : ?>
                <div class="people" <?php echo $hide;  ?>>
                    <div class="people-text">
                        <button class="people_cross">×</button>
                        <h4><?php the_sub_field( 'name' ); ?></h4>
                        <?php the_sub_field( 'tekst' ); ?>
                    </div>
                    <div class="people_image"><?php echo wp_get_attachment_image( $image, 'medium' ); ?></div>
                    <h4 class="people_name"><?php the_sub_field( 'name' ); ?></h4>
                    <p class="people_subtitle"><?php the_sub_field( 'role' ); ?></p>
                </div>

              <?php endif;  ?>

            <?php endwhile;  ?>

        </div>


      </div>

  </section>
  <?php endif; ?>


  <?php if ( have_rows( 'companies' ) ) : $i = 0;?>
  <div class="companies-wrapper">
    <section class="companies">
      <div class="company-row company-row1">
        <?php while ( have_rows( 'companies' ) ) : the_row(); $i++; ?>
          <?php $logo = get_sub_field( 'logo' ); ?>
        <a target="_blank" href="https://www.paymeservice.com/" class="company company<?php echo $i; ?>">
          <div class="company-text">
              <button class="cross">×</button>
              <h5><?php the_sub_field( 'title' ); ?></h5>
              <?php the_sub_field( 'tekst' ); ?>
          </div>
          <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
          <img class="info-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/info.svg">
        </a>
        <?php endwhile; ?>
      </div>
    </section>
  </div>
  <?php endif; ?>


  <section id="edutech" class="mainsectors-section3">
    <div class="mainsectors-section3-wrap">
        <div class="education">
            <h2><?php the_field( 'education_title' ); ?></h2>
            <?php the_field( 'education_text' ); ?>
        </div>
        <div class="hacker">
            <?php $hacker_image = get_field( 'hacker_image' ); ?>
            <div class="hacker-logo-title">
                <div class="hacker-image"><a href="<?php the_field( 'hacker_link' ); ?>" ><?php echo wp_get_attachment_image( $hacker_image, 'full' ); ?></a></div>
                <h4><?php the_field( 'hacker_title' ); ?></h4>
            </div>
           <?php the_field( 'hacker_text' ); ?>
        </div>
    </div>
  </section>

<?php if ( have_rows( 'peoples2' ) ) : ?>
  <section class="mainsectors-section4">
      <div class="peoples">
        <?php while ( have_rows( 'peoples2' ) ) : the_row(); ?>
          <?php $hide = get_sub_field( 'skryt' ) ? 'style="display: none;"' : ''; ?>
          <?php $image = get_sub_field( 'image' ); ?>
            <div class="people" <?php echo $hide;  ?>>
              <div class="people_image"><?php echo wp_get_attachment_image( $image, 'medium' ); ?></div>
              <h4 class="people_name"><?php the_sub_field( 'name' ); ?></h4>
              <p class="people_subtitle"><?php the_sub_field( 'role' ); ?></p>
          </div>
        <?php endwhile; ?>
      </div>
  </section>
<?php endif; ?>


<?php if ( have_rows( 'companies2' ) ) : ?>
<div class="companies-wrapper">
    <section class="companies companies2">
        <div class="company-row company-row2">

          <?php while ( have_rows( 'companies2' ) ) : the_row(); $i++; ?>
            <?php $logo = get_sub_field( 'logo' ); ?>
            <a target="_blank" href="<?php the_sub_field( 'link' ); ?>" class="company company<?php echo $i; ?>">
                <div class="company-text">
                    <button class="cross">×</button>
                    <h5><?php the_sub_field( 'title' ); ?></h5>
                    <?php the_sub_field( 'tekst' ); ?>
                </div>
                <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                <img class="info-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/info.svg">
            </a>
          <?php endwhile; ?>

        </div>
    </section>
</div>
<?php endif; ?>


<section id="deeptech" class="last-section-mainsectors">
    <h2><?php the_field( 'title' ); ?></h2>
    <div class="companies-wrapper">
      <?php if ( have_rows( 'companies3' ) ) : ?>
        <section class="companies companies20">
            <div class="company-row company-row2">
              <?php while ( have_rows( 'companies3' ) ) : the_row(); $i++; ?>
                <?php $logo = get_sub_field( 'logo' ); ?>
                <a target="_blank" href="<?php the_sub_field( 'link' ); ?>" class="company company<?php echo $i; ?>">
                    <div class="company-text">
                        <button class="cross">×</button>
                        <h5><?php the_sub_field( 'title' ); ?></h5>
                        <?php the_sub_field( 'tekst' ); ?>
                    </div>
                    <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
                    <img class="info-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/info.svg">
                </a>
              <?php endwhile; ?>


            </div>
        </section>
      <?php endif; ?>
    </div>
</section>


</main>


<?php
  get_footer();

