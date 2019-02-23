
            <script src="{{ asset('public/front/assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="{{ asset('public/front/assets/js/vendor/bootstrap.min.js')}}"></script>          
            <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
            <script src="{{ asset('public/front/assets/js/easing.min.js')}}"></script>            
            <script src="{{ asset('public/front/assets/js/hoverIntent.js')}}"></script>
            <script src="{{ asset('public/front/assets/js/superfish.min.js')}}"></script> 
            <script src="{{ asset('public/front/assets/js/jquery.ajaxchimp.min.js')}}"></script>
            <script src="{{ asset('public/front/assets/js/jquery.magnific-popup.min.js')}}"></script> 
            <script src="{{ asset('public/front/assets/js/jquery-ui.js')}}"></script>         
            <script src="{{ asset('public/front/assets/js/owl.carousel.min.js')}}"></script>                      
            <script src="{{ asset('public/front/assets/js/jquery.nice-select.min.js')}}"></script>                            
            <script src="{{ asset('public/front/assets/js/mail-script.js')}}"></script>   
            <script src="{{ asset('public/front/assets/js/main.js')}}"></script>  
<div class="loading" id="loader" style="display: none">Loading&#8230;</div>
<script type="text/javascript">


    document.querySelector('#gender', 'onclick',function(){
        document.getElementById('gender').style.border = '2px solid';
    });
 function showDetails(){
    document.getElementById('loader').style.display = 'block';
    setTimeout(function(){
        window.scrollBy(0, 800);
         document.getElementById('loader').style.display = 'none';
    }, 1500)
     
 }
    
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

//  $('#gender_btn').click(function () {
//         if($('input[name="gender"]:checked').length == 0){
//     return;
//    }     
//     });
// $('#gender_btn').click(function () {
//         if($('input[name="gender"]:checked').length == 0){
//     return;
//    }     
//     });

$(".next").click(function(){
    console.log('hello');
   
   // if($('input[name="gender"]:checked').length == 0){
   //  return;
   // }
       // var emailEntered = $('#email').val();

       // if(emailEntered==''){
             
       //        return false;

       // }  


    
    
    current_fs = $(this).parent();
    console.log(current_fs.context.id); 
    if(current_fs.context.id=='gender_btn'){
          if($('input[name="gender"]:checked').length == 0){
            return;
          }
    }

     if(current_fs.context.id=='personal_btn'){
          if($('#email').val() =='' || $('#name').val() ==''){
            return;
          }
    }

    // if(current_fs.context.id=='meal_preparation'){
    //     console.log($('#meal_preparation_time').val());
    //      if($('#meal_preparation_time').val() ==''){
    //         return;
    //       }
          
    // }

   
    if(animating) return false;
    animating = true;
    next_fs = $(this).parent().next();
    
    //activate next step on progressbar using the index of next_fs
    $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
    
    //show the next fieldset
    next_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale current_fs down to 80%
            scale = 1 - (1 - now) * 0.2;
            //2. bring next_fs from the right(50%)
            left = (now * 50)+"%";
            //3. increase opacity of next_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
            next_fs.css({'left': left, 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".previous").click(function(){
    if(animating) return false;
    animating = true;
    
    current_fs = $(this).parent();
    previous_fs = $(this).parent().prev();
    
    //de-activate current step on progressbar
    $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
    
    //show the previous fieldset
    previous_fs.show(); 
    //hide the current fieldset with style
    current_fs.animate({opacity: 0}, {
        step: function(now, mx) {
            //as the opacity of current_fs reduces to 0 - stored in "now"
            //1. scale previous_fs from 80% to 100%
            scale = 0.8 + (1 - now) * 0.2;
            //2. take current_fs to the right(50%) - from 0%
            left = ((1-now) * 50)+"%";
            //3. increase opacity of previous_fs to 1 as it moves in
            opacity = 1 - now;
            current_fs.css({'left': left});
            previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
        }, 
        duration: 800, 
        complete: function(){
            current_fs.hide();
            animating = false;
        }, 
        //this comes from the custom easing plugin
        easing: 'easeInOutBack'
    });
});

$(".submit").click(function(){
    return false;
});
</script>
<script type="text/javascript">

    $('.e-btn-readmore').click(function () {
        $(this).hide()
        $('.story-block .e-description').addClass('is-open')
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    window.currentStep = 1;
    window.height = 0;
    window.weight = 0;
    window.gender = null;
    window.preparation = null;
    window.targetWeight = 0;
    window.unitSystem =  "imperial"
    ;

    $(document).ready(function () {

        $('.fancy-radio-holder .fancy-radio').click(function () {
            $('.fancy-radio .status-icon').html('-');
            $('.fancy-radio').removeClass('active');
            $(this).addClass('active');
            $(this).find('.status-icon').html('<i style="font-size:14px; color:white;" class="fas fa-check fa-1x"></i>');
        });
        $('.fancy-checkbox-holder .fancy-radio').click(function () {
            $(this).toggleClass('active');
            if ($(this).hasClass('active')) {
                $(this).find('.status-icon').html('+');
            } else {
                $(this).find('.status-icon').html('-');
            }
        });

        $('.btn-paypal').click(function () {
            $(this).html('Processing..');
            jQuery.post('/order/prepare', {'payment_method': 'paypal', 'code': window.clientCode}, function (response) {
                window.location = '/paypal/proccess/' + response.order_id;
            });
        });

        $('.btn-cc').click(function () {
            $(this).html('Processing..');
            jQuery.post('/order/prepare', {
                'payment_method': 'credit_card',
                'code': window.clientCode
            }, function (response) {
                $('#cc-order').val(response.order_id);
                $('#cc-form').submit();
            });
        });

        $('.cc-submit').click(function () {
            $(this).html('Processing..');
            var ok = true;
            $('#cc-form input.req').each(function () {
                if ($(this).val().length < 2) {
                    $(this).addClass('has-error');
                    ok = false;
                } else {
                    $(this).removeClass('has-error');
                }
            });

            if ($('#card-year').val().length > 2 || $('#card-year').val().length == 0) {
                $('#card-year').addClass('has-error');
                ok = false;
            } else {
                $('#card-year').removeClass('has-error');
            }

            if ($('#card-month').val().length > 2 || $('#card-month').val().length == 0) {
                $('#card-month').addClass('has-error');
                ok = false;
            } else {
                $('#card-month').removeClass('has-error');
            }

            if ($('#card-cvv').val().length > 4 || $('#card-cvv').val().length == 0) {
                $('#card-cvv').addClass('has-error');
                ok = false;
            } else {
                $('#card-cvv').removeClass('has-error');
            }


            if (ok) {
                jQuery.post('/order/prepare', {
                    'payment_method': 'credit_card',
                    'code': window.clientCode
                }, function (response) {
                    $('#cc-order').val(response.order_id);
                    $('#cc-form').submit();
                });
            } else {
                $(this).html('Submit');
            }
        });

        $('.units-toggler .btn').click(function () {
            $('.units-toggler .btn').toggleClass('active');
            if ($(this).html() == "Imperial") {
                window.unitSystem = "imperial";
                $('.metric-height').hide();
                $('.imperial-height').show();
                $('.units.height').html('ft');
                $('.units.weight').html('lb');
            } else {
                window.unitSystem = "metric";
                $('.metric-height').show();
                $('.imperial-height').hide();
                $('.units.height').html('cm');
                $('.units.weight').html('kg');
            }
        });

        var questions_amount = $('.step[data-mode="question"]').length + 1;
        var slider_indicator = 100 / questions_amount;
        var slider_current_amount = slider_indicator;

        $('.btn-back').click(function () {
            var slide_parent = $('.step.active');
            slider_current_amount = slider_current_amount - slider_indicator;
            $('.progress-bar .progress').animate({width: (slider_current_amount) + '%'}, 750);
            if (slide_parent.data('type') === 'email') {
                $('.step').hide().removeClass('active');
                $('.step.results').fadeIn().addClass('active');
                slide_parent.removeClass('active').hide();
                $('.mainNavbar').hide();
                $('#desktop-container').removeClass('desktop-container')
            } else if (slide_parent.data('type') !== 'first_question') {
                $('.step').removeClass('active').hide();
                window.currentStep--;
                if (slide_parent.prev().data('type') === 'units_question') {
                    $('.units-toggler').show();
                } else {
                    $('.units-toggler').hide();
                }
                if (window.currentStep == 8) {
                    $('nav, .subheader').hide();
                }
                $(slide_parent).prev().fadeIn().addClass('active');
            } else {
                slider_current_amount = slider_indicator;
                $('.progress-bar .progress').animate({width: (slider_indicator) + '%'}, 750);
                $('nav, .subheader').hide();
                $('.step').hide().removeClass('active');
                $('#landing').fadeIn();
            }
        });

        $('.scroll-btn').click(function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $("#summary-footer").offset().top - 20
            }, 1000);
        });

        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(String(email).toLowerCase());
        }

        function mail_autocorrect($this) {
            $this.mailcheck({
                suggested: function (element, suggestion) {
                    $("#suggest").html("Did you mean: <b class='e-emailsuggestion'>" + suggestion.full + "</b>?");
                },
                empty: function (element) {
                    $("#suggest").html("");
                }
            })
            setTimeout(function () {
                $('#suggest .e-emailsuggestion').on("mousedown click", function () {
                    var value = $(this).text();
                    $('#email-value').val(value);
                    $("#suggest").html("");
                })
            }, 100)
        }

        $('#email-value').on('blur', function () {
            mail_autocorrect($(this))
        });

        var typingTimer;                //timer identifier
        var doneTypingInterval = 600;  //time in ms, 5 second for example
        var $input = $('#email-value');

        $input.on('keyup', function () {
            clearTimeout(typingTimer);
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        });

        $input.on('keydown', function () {
            clearTimeout(typingTimer);
        });

        function doneTyping() {
            mail_autocorrect($input)
        }

        $('.story-scroll').click(function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".gender-buttons").offset().top - 50
            }, 800);
        });

        var slick_initialized = false;
        $('.progress-bar .progress').animate({width: (slider_current_amount) + '%'}, 750);
        $('.btn-next-step').click(function () {
            return;
            var slider_parent = $(this).closest('.step');
            var current_slide = $('.step.active');


            if (slider_parent.data('answer') === 'single' || slider_parent.data('answer') === 'multiple') {
                if ($('.step.active .fancy-radio.active').length == 0) {
                    $(this).html("Next");
                    $('.error-msg').html('Please select an answer').fadeIn();
                    return false;
                }
            }

            if (slider_parent.next().data('type') === 'testimonials' && !slick_initialized) {
                $('.step .b-slides').slick({
                    dots: false,
                    infinite: false,
                    speed: 300,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    responsive: [
                        {
                            breakpoint: 600,
                            settings: {
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                infinite: true,
                                dots: true,
                                arrows: false,
                            }
                        }
                    ]
                });
                slick_initialized = true;
            }

            if (slider_parent.next().data('type') === 'units_question') {
                $('.units-toggler').show();
            }

            if (slider_parent.data('type') === 'email') {
                $('#desktop-container').addClass('desktop-container');
                if (!validateEmail($('#email-value').val())) {
                    $('.error-msg').html('Please enter your email').fadeIn();
                    $(this).html("Next");
                    return false;
                }
                $('.step[data-type="email"] .btn-next-step').text('Loading').css('pointer-events', 'none');
            }

            $('.error-msg').hide();

            if (slider_parent.data('type') === 'first_question') {
                window.preparationTime = $('.step.active .fancy-radio.active').data('answer');
            }

            if (slider_parent.data('type') === 'meat_question') {
                var meats = [];
                $('.step.active .fancy-radio.active').each(function () {
                    meats.push($(this).data('answer'));
                });

                window.meats = meats.join(",");
            }
            if (slider_parent.data('type') === 'products_question') {
                var products = [];
                $('.step.active .fancy-radio.active').each(function () {
                    products.push($(this).data('answer'));
                });

                window.products = products.join(",");
            }
            if (slider_parent.data('type') === 'active_question') {
                window.activityLevel = $('.step.active .fancy-radio.active').data('answer');
            }
            if (slider_parent.data('type') === 'familiar_question') {
                window.familiar = $('.step.active .fancy-radio.active').data('answer');
            }
            if (slider_parent.data('type') === 'willing_question') {
                window.willingness = $('.step.active .fancy-radio.active').data('answer');
            }

            // console.log('willing_question pass');

            if (slider_parent.data('type') === 'units_question') {
                window.weight = $('#weight-value').val();

                if (window.weight.length == 0) {
                    $('.error-msg').html('Please select your weight').fadeIn();
                    $(this).html("Next");
                    return false;
                }

                window.targetWeight = $('#targetWeight-value').val();

                if (window.targetWeight.length == 0) {
                    $('.error-msg').html('Please select your target weight').fadeIn();
                    $(this).html("Next");
                    return false;
                }

                if (window.unitSystem == "metric") {
                    window.height = $('#metric-height-value').val();
                } else {
                    var ft = parseInt($('#feet-value').val());
                    var inch = parseInt($('#inch-value').val());
                    window.height = Math.round((ft + inch * 0.0833333) * 100) / 100;
                }

                if (window.height.length == 0) {
                    $('.error-msg').html('Please select your height').fadeIn();
                    $(this).html("Next");
                    return false;
                }

                window.age = $('#age-value').val();

                if (window.age.length == 0) {
                    $('.error-msg').html('Please select your age').fadeIn();
                    $(this).html("Next");
                    return false;
                }
            }

            if (slider_parent.data('type') === 'units_question') {
                slider_parent.find('.btn-next-step').text('Processing...');
                saveData();
                return false;
            }

            if (slider_parent.data('type') === 'results') {
                $('.step').removeClass('active');
                $('nav').show();
                $('#desktop-container').addClass('desktop-container');
                $('body').addClass('desktop-bg');
                $('#email-value').focus();
                $('.step.results').fadeOut();
                $('.step[data-type="email"]').fadeIn().addClass('active');
                window.location.hash = '#emailInput';
            }

            if (slider_parent.data('type') === 'email') {

                var emailEntered = $('#email-value').val();
                window.emailValid = true;

                if (window.emailValid) {
                    slider_parent.find('.btn-next-step').text('Processing...');
                    saveEmail(emailEntered);
                } else {
                    window.currentStep -= 1;
                    $(this).html("Next");
                    $('.error-msg').html('Please enter valid email address').fadeIn();
                    return false;
                }
            }


            slider_current_amount = slider_current_amount + slider_indicator;
            $('.progress-bar .progress').animate({width: (slider_current_amount) + '%'}, 750);

            if (slider_parent.data('mode') === 'question' && slider_parent.data('type') !== 'units_question') {
                $('.step').removeClass('active').hide();
                window.location.hash = '#step' + window.currentStep;
            }
            $(current_slide).next().fadeIn().addClass('active');

            $([document.documentElement, document.body]).animate({
                scrollTop: 0
            }, 600);

            // console.log(slider_parent.data('type'));
            window.currentStep++;

        });

        $('.gender-buttons .btn').click(function () {
            window.gender = $(this).data('gender');
            $('#landing').hide();
            $('nav, .subheader').fadeIn();
            $('#step-1').fadeIn().addClass('active');
            $('#desktop-container').addClass('desktop-container');
            $('body').addClass('desktop-bg');
            window.location.hash = '#step1';
            $([document.documentElement, document.body]).animate({
                scrollTop: 0
            }, 600);
        });
    });

    function saveData() {
        //create client
        var clientData = {
            status: 'free',
            gender: window.gender,
            age: window.age,
            height: window.height,
            weight: window.weight,
            target_weight: window.targetWeight,
            unit_system: window.unitSystem
        };

        var settings = {
            willingness: window.willingness,
            activityLevel: window.activityLevel,
            preparationTime: window.preparationTime,
            familiar: window.familiar,
            meats: window.meats,
            products: window.products
        };

        fbq('track', 'TestComplete');
        jQuery.post('/clients/save', {'client': clientData, 'settings': settings}, function (response) {
            window.clientCode = response.client.code;
            window.location = '/summary/' + window.clientCode;
        }, "json");
    }

    function saveEmail(email) {
        jQuery.post('/clients/update', {'code': window.clientCode, 'email': email}, function (response) {
            fbq('track', 'LeftEmail');
            window.location = '/billing/' + window.clientCode;
        }, "json");
    }

    function ftToCm(ft) {
        return Math.round(ft * 30.48);
    }

    function kgToLb(kg) {
        return Math.round((kg / 0.453592) * 10) / 10;
    }

    function lbToKg(lb) {
        return Math.round((lb * 0.453592) * 10) / 10;
    }
</script>



</script>