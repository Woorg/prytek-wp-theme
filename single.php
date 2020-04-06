<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Prytek
 */
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

<?php if ( is_front_page() || is_home() ) : ?>
<header class="header-home">
<?php elseif ( is_page(9) ) : ?>
<header class="about-header white-header">
<?php elseif ( is_page(11) ) : ?>
<header class="mainsectors-header white-header">
<?php elseif ( is_page(15) ) : ?>
<header class="management-header white-header">
<?php elseif ( in_category(3) ) : ?>
<header class="contact-header white-header profile-header">
<?php elseif ( is_page(13) ) : ?>
<header class="contact-header">
<?php elseif ( is_singular() ) :  ?>
<?php $background_article = get_field( 'background_article' );
  $bg = ( $background_article ) ? "style=background-image:url(" . $background_article['url'] . ");" : '';
?>

<header class="white-header article-header invest-header" <?php echo $bg; ?>>
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
            'link_before'    => '<span>',
            'link_after'     => '</span>'
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
                'link_before'    => '<span>',
                'link_after'     => '</span>'
              )
            ); ?>

        </nav>

        <div class="menu-contact"><a href="<?php the_field( 'ssylka_na_kontakty', 'option' ); ?>"><p>Contact Us</p>
          <?php if ( is_front_page() || is_home() || is_page(2) ) : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="arrowright">
          <?php elseif ( is_page(9)  ) : ?>
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
              <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
            </svg>
          <?php elseif ( is_page(11)  ) : ?>
            <svg class="arrow-mobile-menu" width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
                    <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
                    </svg>

          <?php elseif ( is_page(15)  ) : ?>
             <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
                    <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
                </svg>
           <?php elseif ( is_single() ) : ?>
            <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 8H18.2692" stroke="#2B2B2B" stroke-width="2"/>
                    <path d="M12.5596 1L19.5596 7.5L12.5596 15" stroke="#2B2B2B" stroke-width="2"/>
                </svg>
          <?php else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow.svg" alt="arrowright">

          <?php endif; ?>
        </a></div>

    </div>





<div class="article-header-content">
    <a href="<?php echo the_permalink(13); ?>" class="back">
        <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M29 8H4" stroke="black" stroke-width="2"/>
            <path d="M9 1L2 7.5L9 15" stroke="black" stroke-width="2"/>
        </svg>
        <h5>Back to list</h5>
    </a>
    <p><?php echo get_the_date('j F Y'); ?></p>
    <h1><?php the_title(); ?></h1>
</div>

</header>
<main class="article-main invest-main">
	<div class="article-main-wrap  article-main-wrap-1">
		<?php the_field( 'article_text' ); ?>
  </div>
  <div class="article-main-wrap article-main-wrap2">

      <div class="social">
          <h4>Share</h4>
          <a href="//www.facebook.com/sharer/sharer.php?u=#url" class="image-social">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#2B2B2B"/>
                  <path d="M18.7873 15.3021H16.1367V24.895H12.1209V15.3021H10.2109V11.9308H12.1209V9.74916C12.1209 8.18905 12.871 5.74609 16.1724 5.74609L19.1471 5.75839V9.03084H16.9888C16.6348 9.03084 16.137 9.20558 16.137 9.94979V11.9339H19.1381L18.7873 15.3021Z" fill="white"/>
              </svg>
          </a>
          <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(the_permalink()); ?>" class="image-social">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.965 0C23.2304 0 29.93 6.70058 29.93 14.9651C29.93 23.2305 23.2304 29.93 14.965 29.93C6.69955 29.93 0 23.2304 0 14.9651C0 6.70058 6.69966 0 14.965 0Z" fill="#2B2B2B"/>
                  <path d="M24.3225 10.0802C23.6688 10.3626 22.9653 10.5525 22.2274 10.6386C22.9813 10.1999 23.5593 9.50681 23.8315 8.67914C23.1263 9.08598 22.3462 9.38064 21.5147 9.53866C20.8497 8.85122 19.9022 8.42188 18.8528 8.42188C16.8401 8.42188 15.207 10.0054 15.207 11.9601C15.207 12.2379 15.2389 12.5082 15.3014 12.7674C12.271 12.6196 9.58294 11.21 7.7853 9.06914C7.47102 9.59198 7.29143 10.199 7.29143 10.8481C7.29143 12.0752 7.93489 13.1601 8.91328 13.7934C8.31472 13.7747 7.75345 13.6166 7.26061 13.3501V13.395C7.26061 15.1103 8.51763 16.5405 10.1862 16.866C9.88037 16.9464 9.55859 16.9904 9.22561 16.9904C8.99085 16.9904 8.76266 16.9689 8.54003 16.9268C9.0039 18.3335 10.3508 19.3567 11.9474 19.3848C10.6988 20.3351 9.12646 20.9 7.4177 20.9C7.12304 20.9 6.83311 20.8832 6.54688 20.8505C8.16215 21.855 10.0777 22.4414 12.1382 22.4414C18.8463 22.4414 22.5146 17.0466 22.5146 12.37L22.5043 11.9116C23.2151 11.414 23.8333 10.7911 24.3225 10.0802Z" fill="white"/>
              </svg>
          </a>
          <a href="http://pinterest.com/pin/create/link/?url=<?php echo urlencode(the_permalink()); ?>&media=<?php echo $background_article['url']; ?>&description=<?php the_title(); ?>" class="image-social">
              <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.8933 29.7865C23.1186 29.7865 29.7865 23.1186 29.7865 14.8933C29.7865 6.66795 23.1186 0 14.8933 0C6.66795 0 0 6.66795 0 14.8933C0 23.1186 6.66795 29.7865 14.8933 29.7865Z" fill="#2B2B2B"/>
                  <path d="M16.0958 19.9422C14.9698 19.8551 14.4967 19.2968 13.6137 18.7608C13.1284 21.3071 12.5353 23.7479 10.7786 25.0231C10.2357 21.1746 11.5745 18.284 12.1963 15.2157C11.1365 13.4317 12.3237 9.84069 14.5591 10.7256C17.3104 11.8135 12.1772 17.3593 15.6232 18.0519C19.2208 18.7751 20.6895 11.8095 18.4583 9.54388C15.2348 6.27281 9.07523 9.46954 9.83266 14.1522C10.0172 15.297 11.2002 15.6445 10.3052 17.2241C8.24213 16.7672 7.62673 15.1401 7.70584 12.9708C7.83354 9.41989 10.8965 6.93361 13.9687 6.58954C17.8541 6.15467 21.5008 8.01626 22.0042 11.671C22.5704 15.7958 20.2501 20.2629 16.0958 19.9422Z" fill="#F1F2F2"/>
              </svg>
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode(the_permalink()); ?>" class="image-social">
              <svg width="30" height="31" viewBox="0 0 30 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M14.8933 30.0522C23.1186 30.0522 29.7865 23.3842 29.7865 15.1589C29.7865 6.93357 23.1186 0.265625 14.8933 0.265625C6.66795 0.265625 0 6.93357 0 15.1589C0 23.3842 6.66795 30.0522 14.8933 30.0522Z" fill="#2B2B2B"/>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20201 6.62891C7.98423 6.62891 7.1875 7.42829 7.1875 8.47855C7.1875 9.50652 7.96113 10.329 9.15529 10.329H9.17838C10.4201 10.329 11.1921 9.50652 11.1921 8.47855C11.1685 7.42829 10.4201 6.62891 9.20201 6.62891ZM23.7932 16.3569V22.497H20.2333V16.7684C20.2333 15.33 19.7193 14.3477 18.4303 14.3477C17.4467 14.3477 16.8624 15.009 16.6043 15.6493C16.5106 15.8782 16.4864 16.196 16.4864 16.517V22.4968H12.9263C12.9263 22.4968 12.974 12.7943 12.9263 11.79H16.4867V13.3072C16.4833 13.3128 16.4793 13.3184 16.4754 13.3239C16.4709 13.3301 16.4665 13.3362 16.4631 13.3423H16.4867V13.3072C16.9598 12.5793 17.8035 11.5386 19.6951 11.5386C22.0372 11.5386 23.7932 13.0688 23.7932 16.3569ZM10.9579 22.497H7.39909V11.79H10.9579V22.497Z" fill="#F1F2F2"/>
              </svg>
          </a>
      </div>

      <hr>
  </div>
</main>

<?php get_footer();
