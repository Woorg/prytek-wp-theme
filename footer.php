<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Prytek
 */

?>


 <footer>
        <div class="footer-main">
            <div class="footer_logo-and-about">
                <div class="footer-col-logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="footer-logo">
	                    	<?php the_field( 'logo_secondary', 'option' ); ?>

                    </a>
                    <a href="mailto:<?php the_field( 'pochta', 'option' ); ?>" class="footer-email"><p><?php the_field( 'pochta', 'option' ); ?></p></a>
                </div>
                <div class="footer-col-about">
                    <h3>About Us</h3>
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
                </div>
            </div>
            <div class="footer-col-addresses">
                <h3>Our Addresses</h3>
                <?php if ( have_rows( 'addresses', 'option' ) ) : ?>
                <ul class="grid">
                	<?php while ( have_rows( 'addresses', 'option' ) ) : the_row(); ?>
                		<?php if ( get_sub_field( 'skryt' ) == 1 ) : else : ?>
                    <li class="footer-address">
                        <h5><?php the_sub_field( 'gorod' ); ?></h5>
                        <a href="mailto:<?php the_sub_field( 'pochta' ); ?>"><?php the_sub_field( 'pochta' ); ?><br></a>
                        <p><?php the_sub_field( 'text' ); ?></p>
                    </li>
                  <?php endif; ?>
				    <?php endwhile; ?>

                </ul>
	              <?php endif ?>
            </div>
        </div>
        <div class="footer-copy">
            <div class="copy">
                <p class="copy-symbol">&copy;</p>
                <p><?php echo date('Y'); ?> <?php the_field( 'kopirajt', 'option' ); ?></p>
            </div>
            <a href="<?php the_field( 'ssylka_na_politiku_konfidenczialnosti', 'option' ); ?>">
                <p>Privacy & Policy</p>
            </a>
        </div>
    </footer>
    <?php wp_footer(); ?>

    <script>

        document.addEventListener( 'wpcf7mailsent', function( event ) {
            // event.preventDefault();
            console.log(event);

            if ( 'validation_failed' == event.detail.apiResponse.status ) {

            } else if ( 'mail_sent' == event.detail.apiResponse.status ) {
                $(".submit").addClass("loading");
                setTimeout(function() {
                    $(".submit").addClass("hide-loading");
                    // For failed icon .failed
                    $(".done").addClass("finish");
                }, 3000);
                setTimeout(function() {
                    $(".submit").removeClass("loading");
                    $(".submit").removeClass("hide-loading");
                    $(".done").removeClass("finish");
                    $(".failed").removeClass("finish");
                }, 5000);
            }


        });

        // document.addEventListener( 'wpcf7mailsent', function( event ) {
            // console.log(event);

            // if ( 'mail_sent' == event.detail.status ) {

            //     openPopup();

            //             function openPopup() {

            //                 jQuery.magnificPopup.open({
            //                     items: {
            //                         src: '#success'
            //                     },
            //                     type: 'inline'
            //                 });

            //             }

            // }


        // });


    </script>

</body>
</html>