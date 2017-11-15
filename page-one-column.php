<?php
/**
 * Template Name: One Column
 *
 * Template for one column
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>

<div class="container posts custom">

    <span id="title"><?php echo the_title(); ?></span>

            <?php if ( have_posts() ) : ?>

              <?php while ( have_posts() ) : the_post(); ?>
                
                <?php the_content(); ?>
                
              <?php endwhile; ?>

            <?php endif; ?>

</div><!-- .container -->
<script src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.0/jquery.matchHeight-min.js'></script>
<footer>
  <?php get_footer(); ?>
</footer>