<?php
/**
 * Template Name: Media page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

</header>

<main class="media-main">
    <h1><?php the_title(); ?></h1>

    <?php
      $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;

      $args = array(
        'post_type'      => 'post',
        'cat'            => 1,
        'posts_per_page' => 3,
        'order'          => 'DESC',
        'paged'          => $paged,
        // 'paged' => get_query_var('paged') ?: 1

      );

      $q = new WP_Query($args);

    ?>

    <section class="media-articles">
      <?php while ( $q->have_posts()) : $q->the_post();  ?>
        <div class="media-article">
            <div class="media-article__image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full'); ?></a></div>
            <h5 class="media-article__date"><?php the_date() ; ?></h5>
            <h3 class="media-article__title"><a class="media-article__title-link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p class="media-article__description"><?php echo get_the_excerpt();; ?></p>
            <a class="media-article__more" href="<?php the_permalink(); ?>"><span>Continue Reading</span></a>
        </div>

      <?php wp_reset_postdata(); endwhile;  ?>

      <div class="page-wrapper">
            <div class="pages">
                <?php wp_pagenavi( array( 'query' => $q ) ); wp_reset_query(); ?>
            </div>
        </div>

    </section>
</main>


<?php get_footer();
