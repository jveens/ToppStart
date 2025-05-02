<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @package toppstart
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

namespace ToppStart;

the_post();

get_header(); ?>

<main class="site-main">
  <?php
    the_content();
    topp_start_edit_link();
  ?>
</main>

<?php get_footer();
