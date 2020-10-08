<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title><?php echo get_bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('title_seo'); ?></title>

    <meta name="description" content="<?php bloginfo('name'); ?> | <?php wp_title(''); ?> <?php the_field('description_seo'); ?>">
    <link
      href="https://fonts.googleapis.com/css?family=Alegreya+SC"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="<?php echo get_stylesheet_directory_uri(); ?>/style.css"
    />

    <!-- Header WordPress -->
    <?php wp_head(); ?>
    <!-- Fecha Header WordPress -->
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li class="current_page_item">
            <a href="./menu-da-semana">Menu</a>
          </li>
          <li>
            <a href="./sobre">Sobre</a>
          </li>
          <li>
            <a href="./contato">Contato</a>
          </li>
        </ul>
      </nav>

      <h1>
        <img
          src="<?php echo get_stylesheet_directory_uri(); ?>/img/rest.png"
          alt="Rest"
        />
      </h1>
      <?php $contato_id = get_page_by_title('contato'); ?>
      <p><?php the_field('adress_header', $contato_id); ?></p>
      <p class="telefone"><?php the_field('phone_header', $contato_id); ?></p>
    </header>
    