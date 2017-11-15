<?php
/**
 * Template Name: Event Page
 *
 * Template for event page
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>

<div class="container posts custom">

    <!-- <span id="title"><?php echo the_title(); ?></span> -->
    <div id="events-row" class="row">
        <div style="padding:10px;" class="col-sm-7"> 
            <h2><?php the_field('event_title');?></h2>
            <br>
            <p><?php the_field('event_description');?></p>
            <div style="text-align:left;margin-top:40px;" class="back2Issues">
            <a href="/follow-dan"><button style="padding-top:5px;padding-bottom:5px;"><i style="font-size:18px;margin-right:5px;" class="fa fa-arrow-left"></i>Back To Follow Dan</button></a>
            </div>
        </div>
        <div id="rsvp-form" class="col-sm-5">
            <h1> RSVP </h1>
            <?php the_field('form'); ?>
        </div>
    </div>
    
            <?php if ( have_posts() ) : ?>

              <?php while ( have_posts() ) : the_post(); ?>
                
                <?php the_content(); ?>
                
              <?php endwhile; ?>

            <?php endif; ?>
</div><!-- .container -->

<?php get_footer(); ?>