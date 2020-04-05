<?php if ( is_front_page() || is_home() || is_page(2) ) : ?>
<header class="header-home">
<?php elseif ( is_page(9) ) : ?>
<header class="about-header white-header">
<?php endif; ?>

    <div class="menu-mobile">
        <?php wp_nav_menu(
          array(
            'theme_location' => 'menu-1',
            'menu_id'        => '',
            'container'      => '',
            'menu_class'     => '',
            'before'         => '',
            'after'          => '',
            'link_before'    => '',
            'link_after'     => ''
          )
        ); ?>
        <div class="mobile-contact"><a href="<?php the_field( 'ssylka_na_kontakty', 'option' ); ?>"><p>Contact Us</p>
            <svg class="arrow-mobile-menu" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
                <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
                </svg>

        </a></div>
    </div>
    <div class="header-menu">
        <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">
           <?php the_field( 'logo', 'option' ); ?>
        </a></div>
        <div class="burger-menu">
            <div class="burger burger1"></div>
            <div class="burger burger2"></div>
            <div class="burger burger3"></div>
        </div>
        <nav class="menu">

            <?php wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => '',
                'container'      => '',
                'menu_class'     => '',
                'before'         => '',
                'after'          => '',
                'link_before'    => '',
                'link_after'     => ''
              )
            ); ?>

        </nav>

        <div class="menu-contact"><a href="<?php the_field( 'ssylka_na_kontakty', 'option' ); ?>"><p>Contact Us</p>
          <?php if ( is_front_page() || is_home() || is_page(2) ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="arrowright">
          <?php elseif ( is_page(9) ) : ?>
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
              <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
            </svg>
          <?php endif; ?>
        </a></div>

    </div>
  <?php if ( is_front_page() || is_home() || is_page(2) ) : ?>
    <h1 class="white h1-1"><?php the_field( 'zagolovok' ); ?></h1>
  <?php elseif ( is_page(9) ) : ?>
    <div class="header-about-content">
        <h1 class="h1-2"><?php the_field( 'zagolovok' ); ?></h1>
        <?php the_field( 'tekst' ); ?>
    </div>
  <?php endif; ?>

</header>