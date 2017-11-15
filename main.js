jQuery(document).ready(function($){

  //top menu
    $("#menu-btn").on("click", function() {
    $("body").toggleClass("menu-active");
  });


	var videosource = $('.video-background-container'),
    videoQuantity = videosource.length;

    var layer=$('.layer'),
    layerQuantity=layer.length;

    var backgroundmarker=$('.top-form-container'),
    bakcgroundQuantity=backgroundmarker.length;

    var homecontainer=$('.home_bootom_container'),
    homecontainerQuantity=homecontainer.length;

    $(window).on('scroll', function () {
      //layer setting
      $('header#masthead').addClass("fixedHeader");

      window.requestAnimationFrame(function () {



        for (var i = 0; i < layerQuantity; i++) {
          var currentElement = layer.eq(i);
          var layerdepth= currentElement.attr('data-depth'); 
          //console.log(layerdepth);
          var scrolled = $(window).scrollTop();

          if(scrolled==0){
            $('header#masthead').removeClass("fixedHeader");
          }
          currentElement.css({
            'transform': 'translate3d(0,' + scrolled * -1* layerdepth + 'px, 0)',
          });

        }    
      
        if(scrolled==250){
          $("body.home .social-section").css("position":"absolute");
        }
      });
      //left side bar setting


    });

  

  //tab for homepage  

  $('.tab a').on('click', function (e) {
  
  e.preventDefault();
  
  $(this).parent().addClass('active');
  $(this).parent().siblings().removeClass('active');
  
  target = $(this).attr('href');

  $('.tab-content > div').not(target).hide();
  
  $(target).fadeIn(600);
  
});
 
 //slider
 $('#twitter').hide();
 $(".left_social_bar_shown").hide();
//  $( ".left_social_bar_hidden" ).click(function() {
//   $( ".left_social_bar_shown" ).toggle( "slow", function() {
//     $( ".left_social_bar_hidden" ).hide();
//   });
// });

$( ".left_social_bar_hidden" ).each(function(index) {
    $(this).on("click", function(){
       $(this).next().toggle( "slow", function() {
      });
    });
});

//top form - homepage RL-HM 11/2/2017
var formvaluearry = [];
function next() {
  var stepLength = $('.step-wrap div[class*="step"]').length;//step-1, step-2, step-3, check how many steps total
  var activeIndex = $('div[class*="step"].active').index(); //which step is active
  var pholder = $('div[class*="step"].active .top-form-input').attr('data-placeholder');//get the active step nane active
  var formvalue = $('div[class*="step"].active .top-form-input').val();//value for the active step

  $('.prev').prop('disabled', false);
  //console.log("activeindex is"+ activeIndex);
  //console.log("stepLength is"+ stepLength);  
  if(activeIndex <= Number(stepLength -2)){

    //form validator
    if(!formvalidator(formvalue)){return false;};
    $('.step-wrap').addClass('anim-next').promise().done(function(){
      
        formvaluearry.push({placeholder: pholder, formvalue: formvalue});
            $.ajax({
                type: "POST",
                url: "/wp-content/themes/hm-wordpress-base-theme/forms/topform.php",
                data: {'label': pholder, 'formdata':formvalue},
                cache: false,
                success: function(msg){
                    $("#msg").text(msg);
                },
                error:function(){
                  $("#msg").text("some error happened");
                }
            });
      
      console.log(formvaluearry);
      setTimeout(function(){
        $('.step-'+Number(activeIndex+1)).removeClass('active');
        $('.step-'+Number(activeIndex+2)).addClass('active').promise().done(function(){
          $('.step-wrap').removeClass('anim-next');
          $('h1 span').text(activeIndex + 2);
        });
      }, 500);
    });
  }
  if(activeIndex == Number(stepLength -1)){
        formvaluearry.push({placeholder: pholder, answer: formvalue});
        $('.next').text('Submit');
        $('.top-form').empty();
        $('.top-form').text('Thank you for submitting your info!');

  }
 
  // else {
  //   $('.next').text('Submit');
  //   $('.top-form').empty();
  //   $('.top-form').text('Thank you for submitting your info!');
  // }


}

function formvalidator(value){

  if(value==''){
    $("#msg").removeClass('hidden');
    return false;
  }
  else{
    $("#msg").addClass('hidden');
    return true;
     }
}


$('.next').on('click',function(e){
  e.preventDefault();
  next();
});


//volunteer form

$("form#volunteer_form").on('submit',function(e){
  $this=$(this);

  if($('.volunteer-select:checked').length==0){
      $('p.error_message').removeClass('hidden');
      e.preventDefault();
  }

  else{
    
    $('p.error_message').addClass('hidden');
    //get data
    var volunteerformData =[];
    var pholder, formvalue;

    var volunteer_select=$('input.volunteer-select'),
    volunteer_select_quantity=volunteer_select.length;

    var volunteer_data=$('input.volunteer-data'),
    volunteer_data_quantity=volunteer_data.length;


    console.log(volunteer_data_quantity);

    for (var i = 0; i < volunteer_select_quantity; i++) {
      var currentElement = volunteer_select.eq(i);
      if (currentElement.is(':checked')) {
        pholder=currentElement.attr("volunteer-type");
        formvalue="yes";
         volunteerformData.push({label: pholder, formvalue: formvalue});

      }
      else{
        pholder=currentElement.attr("volunteer-type");
        formvalue="no";
         volunteerformData.push({label: pholder, formvalue: formvalue});
      }


    }


    for (var i = 0; i < volunteer_data_quantity; i++) {
      var currentElement = volunteer_data.eq(i);


        pholder=currentElement.attr('name');
        formvalue=currentElement.val();

         volunteerformData.push({label: pholder, formvalue: formvalue});

    }
    //console.log(volunteerformData);
      $.ajax({
        type: "POST",
        //dataType: "json",
        url: "/wp-content/themes/hm-wordpress-base-theme/forms/volunteerform.php",
        data: {formdata: volunteerformData},
        cache: false,
        success: function(msg){
            console.log(msg);
        },
        // error:function(msg){
        //   console.log(msg);
        // }
         error: function (request, error) {
        console.log(arguments);
      },


    });
     $(this).text("Thank you for submitting the form! We will contact you soon.");


    
  }
  
  return false;

  

});






});




