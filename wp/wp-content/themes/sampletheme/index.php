<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 */

get_header(); ?>

<main class="l-index">
  
  <div class="l-index-hero">
    <?php importTemplate('module/_hero'); ?>
  </div>

  <div class="l-index-features">
    <?php importTemplate('module/_features'); ?>
  </div>

</main>


<?php
get_footer(); ?>
