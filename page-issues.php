<?php
/**
 * Template Name: Issues
 *
 * Template for Issues
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
<h2 style="text-align: center;margin-bottom: 2em;">Conservative. Businessman. Independent Voice. Veteran.</h2>

<div class="row">
    <div class="col-sm-6">
        <div class="col-sm-6-container">
            <h2>JOBS</h2>
                <p>While any job is important, Nevada can no longer cater to low wage jobs.  A job boom is no good when someone has to work three of them just to make ends meet. Every Nevadan should have an opportunity to choose a career that will allow him or her to save for the future and to offer their children a better life.  Dan will focus on bringing new industries to Nevada, specifically in the fields of drones, water tech, and alternative energy. Dan has already begun the process of understanding what it will take to encourage these industries to move to Nevada.  He will travel to Israel in December 2017 to meet industry leaders about opportunities in Nevada.</p>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="col-sm-6-container">
            <h2>EDUCATION</h2>
                <p>Our state is consistently at the top of every bad list, and the bottom of every good list in the country.  All too many of our public schools are a disgrace, nothing more.  This isn’t just an education problem, it’s an economic problem.  Companies will not relocate to a state whose K-12 education system is at or near the bottom of the barrel.  And, families who are locked into a never-ending cycle of low paying jobs will never be able to devote resources to private education.</p> 
                <p>We should allow parents to have more choice in their children’s education.  Parents not the government are the solution.  Period.</p> 
                <p>Dan has been very clear:  he will not sign a single bill until he has a parental choice (ESA) bill on his desk.</p> 
        </div>   
    </div>  
</div>
<div class="row">
    <div class="col-sm-6">
        <div class="col-sm-6-container">
            <h2>TAXES</h2>
                <p>NO personal or corporate income tax. Repeal the commerce tax, replace with proceeds from $750 million now funding $2 billion stadium.</p>
                <p>Dan was the first person to oppose Nevada’s $1.5 billion tax hike, the largest in state history.  He is opposed to spending $750 million in additional taxes to finance an exorbitant football stadium while the state’s schools troll the troughs and our economy creates more jobs for the underemployed.  We’re a growing state and need revenue to fund essential services, but politicians and their lobbyist buddies need to first stop doling out cash to every single pet project that comes across their desk with a campaign donation attached.  When our spending is driven by the needs of our state and not lobbyists, we won’t need massive tax hikes.</p>

        </div>
        
    </div>
    <div class="col-sm-6">
        <div class="col-sm-6-container">
            <h2>HEALTHCARE</h2>
                <p>The healthcare issue is complex and has defied easy solution.  At its core, though is a simple principle:  somebody has to pay for it.  Obamacare largely failed for that reason, namely those who were supposed to pay for it never signed up.   In Nevada, low wage jobs have created a large group of Nevadans who can’t afford healthcare or the tax for not having it.  To bring healthcare costs under control, we first must separate “cuts and scrapes” from “critical care” insurance, because 75% of most doctors’ visits are for relatively minor injuries or illnesses.  We can then decide how we want to pay for more serious conditions requiring hospitalization or surgery.</p>
        </div>
    </div>
</div>

</div><!-- .container -->

<!-- <script type='text/javascript' src='http://dan4nevadaprod.staging.wpengine.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script>
jQuery(function ($) {
    function volunteerform(){
     if($('.volunteer-select:checked').length==0){
          $('p.error_message').removeClass('hidden');
          e.preventDefault();
  }
    return false;
}

});

</script> -->

<?php get_footer(); ?>