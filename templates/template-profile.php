<?php
/**
 * Template Name: Profile page
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Prytek
 * @since 1.0
 */

get_header();

?>

<main class="profile-main">


<div class="profile-content">

  <?php $background_image = get_field( 'background_image' ); ?>

  <?php if (is_single(248)): ?>
    <div class="profile-name-photo profile-andrey-photo">
  <?php elseif (is_single(267)) : ?>
    <div class="profile-name-photo profile-arnon-photo">
  <?php elseif (is_single(270)) : ?>
    <div class="profile-name-photo profile-yair-photo">
  <?php elseif (is_single(273)) : ?>
    <div class="profile-name-photo profile-igor-photo">
  <?php elseif (is_single(276)) : ?>
    <div class="profile-name-photo profile-guy-photo">
  <?php elseif (is_single(279)) : ?>
    <div class="profile-name-photo profile-ben-photo">
  <?php elseif (is_single(282)) : ?>
    <div class="profile-name-photo profile-iftah-photo">
  <?php elseif (is_single(285)) : ?>
    <div class="profile-name-photo profile-shomoil-photo">
  <?php elseif (is_single(288)) : ?>
    <div class="profile-name-photo profile-joe-photo">
  <?php elseif (is_single(291)) : ?>
    <div class="profile-name-photo profile-gil-photo">
  <?php elseif (is_single(291)) : ?>
    <div class="profile-name-photo profile-gil-photo">
  <?php elseif (is_single(294)) : ?>
    <div class="profile-name-photo profile-alexander-photo">
  <?php elseif (is_single(297)) : ?>
    <div class="profile-name-photo profile-ariel-photo">
  <?php elseif (is_single(300)) : ?>
    <div class="profile-name-photo profile-phina-photo">
  <?php elseif (is_single(303)) : ?>
    <div class="profile-name-photo profile-maria-photo">

  <?php else : ?>
    <div class="profile-name-photo ">
  <?php endif; ?>
      <a href="<?php echo the_permalink( 15 ); ?>#seniors" class="back">
          <svg width="29" height="16" viewBox="0 0 29 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M29 8H4" stroke="black" stroke-width="2"/>
              <path d="M9 1L2 7.5L9 15" stroke="black" stroke-width="2"/>
          </svg>
          <h5>Back to list</h5>
      </a>
      <div class="profile-name">
          <?php the_field( 'name' ); ?>
      </div>

  </div>

  <?php the_field( 'text' ); ?>

</div>

<div class="profile-image profile-yair">
    <?php the_post_thumbnail( 'full'); ?>
</div>

</main>


<?php get_footer();
