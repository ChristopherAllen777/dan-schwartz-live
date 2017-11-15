<?php
/**
 * Template Name: Volunteer
 *
 * Template for volunteer
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
    <div class="row select_volunteer">
    	<div class="col-md-6">
    		<div class="row row-eq-height">
    			<div class="col-xs-2">
		    		<label class='my-checkbox'>
					  <input class="volunteer-select" type="checkbox" name="volunteer-select" volunteer-type="phone-call" value="phone-call">
					  <span></span>
					</label>
    			</div>
    			<div class="col-xs-10">
    				<div class="row row-eq-height">
    					<div class="col-xs-4">
    						<embed src="/wp-content/themes/hm-wordpress-base-theme/img/volunteer_phone_call.svg">
    					</div>
    					<div class="col-xs-8">
    						<h2>MAKE CALLS</h2>
    						<p>Our opponent’s campaign is supported by millions of dollars from casinos, lobbyists, lawyers, and payday lenders.  We’re going to win this race through people like us, talking to voters. 
</p>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>
     	<div class="col-md-6">
    		<div class="row row-eq-height">
    			<div class="col-xs-2">
		    		<label class='my-checkbox'>
					  <input class="volunteer-select" type="checkbox" name="volunteer-select" volunteer-type="door-to-door" value="door-to-door">
					  <span></span>
					</label>
    			</div>
    			<div class="col-xs-10">
    				<div class="row row-eq-height">
    					<div class="col-xs-4">
    						<embed src="/wp-content/themes/hm-wordpress-base-theme/img/volunteer_door.svg">
    					</div>
    					<div class="col-xs-8">
    						<h2>DOOR TO DOOR</h2>
    						<p>Door to door is the single most effective method of winning votes.  One neighbor talking to another about why we need an independent and competent Governor for Nevada will carry us over the goal line. 
</p>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>
    </div><!--row select volunteer-->
    <div class="row select_volunteer">
    	<div class="col-md-6">
    		<div class="row row-eq-height">
    			<div class="col-xs-2">
		    		<label class='my-checkbox'>
					  <input class="volunteer-select" type="checkbox" name="volunteer-select" volunteer-type="host-an-event" value="host-an-event">
					  <span></span>
					</label>
    			</div>
    			<div class="col-xs-10">
    				<div class="row row-eq-height">
    					<div class="col-xs-4">
    						<embed src="/wp-content/themes/hm-wordpress-base-theme/img/volunteer_host_event.svg">
    					</div>
    					<div class="col-xs-8">
    						<h2>HOST AN EVENT</h2>
    						<p>All over Nevada people are opening their homes and inviting their neighbors in to hear about a positive new vision for Nevada that is driven by an expanding economy not by the self-interest of billionaire donors, lobbyists and other insiders. 
</p>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>
    	<div class="col-md-6">
    		<div class="row row-eq-height">
    			<div class="col-xs-2">
		    		<label class='my-checkbox'>
					  <input class="volunteer-select" type="checkbox" name="volunteer-select" volunteer-type="attend-event" value="attend-event">
					  <span></span>
					</label>
    			</div>
    			<div class="col-xs-10">
    				<div class="row row-eq-height">
    					<div class="col-xs-4">
    						<embed src="/wp-content/themes/hm-wordpress-base-theme/img/volunteer_attend_event.svg">
    					</div>
    					<div class="col-xs-8">
    						<h2>ATTEND EVENTS</h2>
    						<p>Are you willing to attend events and talk to voters on Dan’s behalf?<span style="visibility: hidden;">in to hear about a positive new vision for Nevada that is driven by an expanding economy not by the self-interest of billionaire donors, lobbyists and other insiders.</span>
</p>
    					</div>
    				</div>
    			</div>
    		</div>

    	</div>
    </div>

</div><!-- .container -->
<section class="bottom-volunteer-form">
	<div class="container">
        <p class="error_message hidden" style="color:#fff; font-weight:bold;">Please select least one of "how can you help" section above.</p>
        <p class="error_message_2 hidden" style="color:#fff; font-weight:bold;">All fields in the form are required.</p>

		<form id="volunteer_form" method="post">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<input type="text" class="volunteer-data" name="firstName" placeholder="FIRST NAME" required>

				</div>
				<div class="col-sm-6 col-md-4">
					<input class="volunteer-data" type="text" name="lastName" placeholder="LAST NAME" required>
				</div>
				<div class="col-sm-6 col-md-4">
					<input class="volunteer-data" type="text" name="phoneNumber" placeholder="PHONE NUMBER" required>
				</div>		
				<div class="col-sm-6 col-md-4">
					<input class="volunteer-data" type="text" name="email" placeholder="EMAIL" required>
				</div>
				<div class="col-sm-6 col-md-4">
					<input class="volunteer-data" type="text" name="zip" placeholder="ZIP" required>
				</div>
				<div class="col-sm-6 col-md-4">
					<button id="volunteer_submit" class="btn btn-red" type="submit" name="submit_volunteer">SUBMIT TO VOLUNTEER!</button>
				</div>				
			</div>
		</form>
	</div>
</section>
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