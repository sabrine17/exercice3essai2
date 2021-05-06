<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-sc
 */

 get_header();
?>
 <main id="primary" class="site-main">
<?php if(have_posts()) :?>

<header class="page-header">
<?php
the_archive_title('<h1 class="page-title">', '</h1>');
echo '<h1 class="page-title">' .  single_cat_title('', false) . '</h1>';
the_archive_description('<div class="archive-description">', '</div>');
?>
</header>
<section class="galerie">
<?php 
while (have_posts()) :
    the_post(); ?>
    <?php get_template_part('template-parts/content', 'galerie'); ?>
   <?php endwhile; ?>

   </section>

   <section class="galerie-perso">
    <?php 
    while (have_posts()) :
    the_post(); ?>
    <?php get_template_part('template-parts/content', 'galerie-perso'); ?>
   <?php endwhile; ?>

   </section>
   <?php endif;?>

   </main>

   <?php
   get_sidebar();
   get_footer();