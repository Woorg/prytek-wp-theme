<?php
  /**
   * undocumented function
   *
   * @return void
   * @author
   **/


  function cyclone_acf_init( ) {

    if (function_exists('acf_register_block')) {

      acf_register_block(array(
        'name'            => 'hero',
        'title'           => __('Первый экран'),
        'description'     => __('Первый экран'),
        'render_template' => 'template-parts/blocks/block-hero.php',
        // 'enqueue_style'   => get_template_directory_uri() . '/front/static/dev/assets/css/main.css',
        'category'        => 'common',
        'mode'            => 'edit',
        'icon'            => 'align-left'
      ));


      // acf_register_block(array(
      //   'name'            => 'deal',
      //   'title'           => __('Акция'),
      //   'description'     => __('Акция'),
      //   'render_template' => 'template-parts/blocks/block-deal.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'variations',
      //   'title'           => __('Виды переплетов'),
      //   'description'     => __('Виды переплетов'),
      //   'render_template' => 'template-parts/blocks/block-variations.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));

      // acf_register_block(array(
      //   'name'            => 'steps',
      //   'title'           => __('Этапы работы'),
      //   'description'     => __('Этапы работы'),
      //   'render_template' => 'template-parts/blocks/block-steps.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'video',
      //   'title'           => __('Видео'),
      //   'description'     => __('Видео'),
      //   'render_template' => 'template-parts/blocks/block-video.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'books',
      //   'title'           => __('Отпечатанные нами книги'),
      //   'description'     => __('Отпечатанные нами книги'),
      //   'render_template' => 'template-parts/blocks/block-books.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'advantages',
      //   'title'           => __('Почему стоит работать с нами'),
      //   'description'     => __('Почему стоит работать с нами'),
      //   'render_template' => 'template-parts/blocks/block-advantages.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'clients',
      //   'title'           => __('Нам доверяют'),
      //   'description'     => __('Нам доверяют'),
      //   'render_template' => 'template-parts/blocks/block-clients.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'cta',
      //   'title'           => __('Остались вопросы?'),
      //   'description'     => __('Остались вопросы?'),
      //   'render_template' => 'template-parts/blocks/block-cta.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));


      // acf_register_block(array(
      //   'name'            => 'contacts',
      //   'title'           => __('Контакты'),
      //   'description'     => __('Контакты'),
      //   'render_template' => 'template-parts/blocks/block-contacts.php',
      //   'category'        => 'common',
      //   'mode'            => 'edit',
      //   'icon'            => 'align-left'
      // ));



    }

  }

  if( function_exists('acf_register_block') ) {
    add_action('acf/init', 'cyclone_acf_init');
  }


