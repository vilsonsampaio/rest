<?php 
  // Template Name: Sobre
?>
<?php get_header(); ?>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="container sobre">
      <h2 class="subtitulo"><?php the_title() ?></h2>

      <div class="grid-8">
        <img src="<?php the_field('sobre_pic'); ?>" alt="<?php the_field('sobre_pic_alt'); ?>" />
      </div>

      <div class="grid-8">

        <?php if(have_rows('sobre_content')): while(have_rows('sobre_content')) : the_row(); ?>
    
          <h2><?php the_sub_field('sobre_title'); ?></h2>
          <?php the_sub_field('sobre_text'); ?>

        <?php endwhile; else : endif; ?>

      </div>
    </section>

  <?php endwhile; endif; ?>
<?php get_footer(); ?>
