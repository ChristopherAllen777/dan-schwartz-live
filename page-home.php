<?php
/**
 * Template Name: Home Page
 *
 * Template for a home page
 *
 * @package Harris Media Base Theme
 */

get_header(); ?>
<!--header form-->
    <div class="header_form">

        <!--video background-->
        <div class="video-background-container">
            <video autoplay loop id="video-background" muted plays-inline>
              <source src="/wp-content/themes/hm-wordpress-base-theme/video/Dan Schwartz For Governor.mp4" type="video/mp4">
            </video>
            <i class="fa fa-volume-up" aria-hidden="true"></i>
        </div>
    </div>
<!--end header form-->



<!--mountain countainer-->
    <!--<div id="mountain-parallax">
        <div class="layer layer-01" data-type="parallax" data-depth="0.10"></div>
        <div class="layer layer-02" data-type="parallax" data-depth="0.30"></div>
        <div class="layer layer-03" data-type="parallax" data-depth="0.50"></div>
        <div class="layer layer-04" data-type="parallax" data-depth="0.70"></div>
        <div class="layer layer-05" data-type="parallax" data-depth="1.00"></div>    
    </div>-->
<!--end mountain countainer-->
<!--mask and form-->
    <div class="top-form-container">
        <div class="sign_form" id="sign_form">
            
            <div id="top-form-email">
                <h1>JOIN THE TEAM</h1>
                  <form class="top-form" action="">
                    <div class="step-wrap">
                      <div class="step-1 active">
                       <input class="top-form-input" type="text" name="top-form-email" placeholder="Email" data-placeholder="Email"> 
                      </div>
                      <div class="step-2">
                        <input class="top-form-input" type="text" name="top-form-phone" placeholder="Phone Number" data-placeholder="Phone Number"> 

                      </div>
                      <div class="step-3">
                        <input class="top-form-input" type="text" name="top-form-firstName" placeholder="First Name" data-placeholder="First Name"> 
                      </div>
                      <div class="step-4">
                        <input class="top-form-input" type="text" name="top-form-LastName" placeholder="Last Name" data-placeholder="Last Name"> 
                      </div>
                    </div>
                    
                        <button class="next btn btn-danger">
                            <i class="fa fa-play"></i>
                        </button>
                  </form>
                  <div id="msg" class="hidden">Please enter valid infomation.</div>

            </div>
        </div>
    </div>
<!--end mask-->

    <div class="posts home_bootom_container">


            <div class="container">

               
                <?php

                    $custom_query_args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
                        'ignore_sticky_posts' => true
                    );

                    $custom_query = new WP_Query($custom_query_args);

                ?>
        <!--donation section-->
            <div class="donation">
                <h1>MAKE A DONATION TODAY!</h1>
                    <div class="donation-container">
                    <div class="row">
                        <div class="col-md-6">
                            <!--<button role="button" class="btn btn-blue">$50</button>-->
                            <a role="button" class="btn btn-blue" href="donate">$50</a>
                        </div>
                        <div class="col-md-6">
                            <a role="button" class="btn btn-blue" href="donate">$100</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a role="button" class="btn btn-blue" href="donate">$250</a>
                        </div>
                        <div class="col-md-6">
                            <a role="button" class="btn btn-blue" href="donate">$500</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <a role="button" class="btn btn-blue" href="donate">$1,000</a>
                        </div>
                        <div class="col-md-6">
                            <a role="button" class="btn btn-primary" href="donate">OTHER</a>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end donation section-->


        <!--accomplished-->
            <div class="accomplished">
                <h1>WHAT I'VE <br/>ACCOMPLISHED</h1>
                <div class="accomplished-container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6-container">
                                <h4>Parental Choice</h4>
                                <p>Dan has fought to improve Nevada’s low educational standing by leading the charge for parental choice (ESAs) to give middle class families an opportunity to have a real say in their children’s future; and championing College Savings and College Kickstart programs. 
</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6-container">
                                <h4>Fought the Establishment </h4>
                                <p>Dan stood up to The Establishment—Dan was the first Republican to oppose a $1.5 billion tax hike, the largest in Nevada’s history and he refused to float bonds to finance a promised $1 billion electric automobile plant that never materialized, saving Nevada taxpayers $175 million.
</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="col-md-6-container">
                                <h4>Made Nevada Money</h4>
                                <p>Dan has tripled returns on Nevada’s $3 billion General Portfolio while increasing the Local Government Investment Program’s returns over 10x.  The State has maintained its high credit rating as the Treasurer’s Office has saved taxpayers $80 million through bond refunding’s.  The State’s Unclaimed Property division has reduced the processing period for claims from 120 to 20 days. 
</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-6-container">
                                <h4>A Plan for Healthcare </h4>
                                <p>Dan has been the only public figure to advocate a thorough review of the state’s health insurance program, splitting “cuts and scrapes” from “catastrophic” insurance premiums, which addresses the underlying issue in health care.
</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- end accomplished-->

        <!--social slideshow-->

            <div class="social-slides">
                <h1>KEEP UP WITH DAN</h1>
                <div class="slidercontainer">
                    <ul class="tab-group">
                        <li class="tab active"><a href="#facebook" class="facebook-btn"></a></li>
                        <li class="tab"><a href="#twitter" class="twitter-btn"></a></li>
                    </ul>

                    <div class="tab-content">
                        <div id="facebook">   
                            <div class="carousel-container">

                                    <div id="carousel3d-facebook" class="carousel3d">
                                      <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000" :width="450" :height="450">
                                            <slide :index="0">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Facebook</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Facebook</h2>
                                                        <a class="btn-white-share" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdan4nevadaprod.staging.wpengine.com%2Ffacebook-share-image-1%2F">Click to Share</a>
                                                    </div>
                                                </div>
                                               

                                            </slide>
                                            <slide :index="1">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Facebook</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Facebook</h2>
                                                        <a class="btn-white-share" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdan4nevadaprod.staging.wpengine.com%2Ffacebook-share-image-2%2F">Click to Share</a>
                                                    </div>
                                                </div>                                                 
                                            </slide>
                                            <slide :index="2">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Facebook</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Facebook</h2>
                                                        <a class="btn-white-share" href="http://www.facebook.com/sharer.php?u=http%3A%2F%2Fdan4nevadaprod.staging.wpengine.com%2Ffacebook-share-image-3%2F">Click to Share</a>
                                                    </div>
                                                </div>
                                            </slide>
                                      


                                            
                                      </carousel-3d>
                                    </div>
                                </div>
                            </div>

                        <div id="twitter">   
                            <div class="carousel-container">

                                    <div id="carousel3d-twitter" class="carousel3d carousel3dtwitter">
                                      <carousel-3d :perspective="0" :space="200" :display="5" :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" :controls-width="30" :controls-height="60" :clickable="true" :autoplay="true" :autoplay-timeout="5000" :width="450" :height="450">
                                            <slide :index="0">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Twitter</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Twitter</h2>
                                                        <a class="btn-white-share" href="http://hrefshare.com/26733">Click to Share</a>
                                                    </div>
                                                </div>
                                               

                                            </slide>
                                            <slide :index="1">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Twitter</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Twitter</h2>
                                                        <a class="btn-white-share" href="http://hrefshare.com/0a43c">Click to Share</a>
                                                    </div>
                                                </div>                                                 
                                            </slide>
                                            <slide :index="2">
                                                <div class="left_social_bar_hidden">
                                                    <p>Share on Twitter</p>

                                                </div>
                                                <div class="left_social_bar_shown" style="display:none; padding: 2em, .2em;">
                                                    <div class="shown_container">
                                                        <h2>Share This Post to Twitter</h2>
                                                        <a class="btn-white-share" href="http://hrefshare.com/6cd0e">Click to Share</a>
                                                    </div>
                                                </div>
                                            </slide>
                                      


                                            
                                      </carousel-3d>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div><!-- tab-content -->
                </div><!--socialsliderscontainer-->
            </div>
        <!-- end social slideshow-->
            <div class="social-section">
                <h1>FIND DAN ONLINE</h1>
                    <a href="https://www.facebook.com/DanForNevada/"><i class="fa fa-facebook fa-3" aria-hidden="true"></i></a><br>
                    <a href="https://twitter.com/Dan4Nevada"><i class="fa fa-twitter fa-3" aria-hidden="true"></i></a>
                
            </div><!--soical-section-->
                <?php wp_reset_postdata(); ?>
            </div><!--.container-->
       
    </div><!-- .home_bottom_container -->
<script src="https://unpkg.com/vue"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.7/vue.js"></script>
<script src="https://rawgit.com/Wlada/vue-carousel-3d/master/dist/vue-carousel-3d.min.js"></script>
<script>new Vue({
  el: '#carousel3d-facebook',
  data: {
    slides: 3
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  },
  mounted: function () {
  this.$nextTick(function () {
     this.height = this.$el.clientHeight;
     var height=this.height;
     console.log("facebook"+height);
  })
}
});
function newNueFacebook(){
    var x = document.getElementById("facebook");
    x.style.display = "block";
    console.log("here");
  new Vue({
  el: '#carousel3d-facebook',
  data: {
    slides: 3
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  },
  mounted: function () {
  this.$nextTick(function () {
     this.height = this.$el.clientHeight;
     var height=this.height;
     console.log("facebook"+height);
  })
}
});  
}
new Vue({
  el: '#carousel3d-twitter',
  data: {
    slides: 3
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  },
  mounted: function () {
  this.$nextTick(function () {
     this.height = this.$el.clientHeight;
     var height=this.height;
     console.log("twitter"+height);

  })
}
});
function newNueTwitter(){
    var x = document.getElementById("twitter");
    x.style.display = "block";
   new Vue({
  el: '#carousel3d-twitter',
  data: {
    slides: 3,
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  },
  mounted: function () {
  this.$nextTick(function () {
    this.height = this.$el.clientHeight;
     var height=this.height;
     console.log("twitter"+height);

  })
}
}); 
}


//temporty fix for vue loading problem
setTimeout(function(){
     document.getElementById("twitter").style.display = 'none';


}, 500);
    

</script>

<?php get_footer(); ?>
