@extends('front_layouts.layouts')
@section('content')
<style type="text/css">
/*custom code stylesheet*/
.logoClass{
        position: absolute; top: 50px; z-index: 899; width: 150px; left: 100px
        }
    /*media query*/
@media only screen and (max-width: 768px) {
   
    .only_bigscreen{
      display: none;
    }
    .logoClass{
        position: absolute; top: 10px; z-index: 899; width: 100px; left: 110px
        }
    
 }

</style>
<!-- start banner Area -->
            <section class="banner-area relative" id="home">
                
                <div class="overlay overlay-bg"></div>
                <div class="container">

                    <div class="row justify-content-center align-items-center" style="height: auto;    padding: 114px 1px 50px 1px;">

                        <div class="banner-content col-md-5 justify-content-center">
                            <h6 class="text-uppercase">{{$siteConfig->title_1}}</h6>
                            <h1>
                                {{$siteConfig->title_2}}        
                            </h1>
                            
                            <a href="#booking" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
                            
                        </div>
                        <div class="col-md-7">
                            <div class="">
                                <table align="center">
                                    <tr>
                                        <td align="center">
                                        <ul class="m-auto only_bigscreen"  id="progressbar" style="text-align: center;">
                                            @if(isset($questions[0]->category->category_name))
                                            <li class="active">{{$questions[0]->category->category_name}}</li>
                                            @endif
                                             
                                            
                                            <li>PERSONAL</li>
                                            @if(isset($questions[1]->category->category_name))
                                            <li>{{$questions[1]->category->category_name}} </li>@endif
                                            @if(isset($questions[2]->category->category_name))
                                            <li>{{$questions[2]->category->category_name}} </li>@endif
                                            @if(isset($questions[3]->category->category_name))
                                            <li>{{$questions[3]->category->category_name}} </li>@endif
                                           @if(isset($questions[4]->category->category_name))
                                            <li>{{$questions[4]->category->category_name}} </li>@endif
                                            @if(isset($questions[5]->category->category_name))
                                            <li>{{$questions[5]->category->category_name}} </li>@endif
                                            
                                            @if(isset($questions[6]->category->category_name))
                                            <li>{{$questions[6]->category->category_name}} </li>@endif
                                            @if(isset($questions[7]->category->category_name))
                                            <li>{{$questions[7]->category->category_name}} </li>@endif

                                        </ul>
                                    </td>
                                </tr>
                            </table>
                </div>
                <form id="msform" action="{{route('front_form')}}" method="POST">
                    <!-- progressbar -->
                         @csrf
                         @if(isset($questions[0]->question) && $questions[0]->question_type =='radio')
                        <fieldset>
                            <h2 class="fs-title">@if(isset($questions[0]->question)){{$questions[0]->question}} @endif</h2>
                            <div class="row">

                                
                            @if(isset($questions[0]->question) && $questions[0]->question_type =='radio')
                           <div class="col-md-6">
                            <label for="female" disabled="" name="next" class=" action-button" style="padding: 10px 20px;"><i class="fas fa-male"></i>{{$questions[0]->option[0]->options}}
                                <input type="radio" id="female" value="{{$questions[0]->option[0]->options}}" name="gender" class="gender">
                            </label>
                                
                            </div>
                            <div class="col-md-6">
                                 
                                <label  for="male" disabled="" name="next" class=" action-button" style="padding: 10px 20px;"><i class="fas fa-male"></i>{{$questions[0]->option[1]->options}}
                                     <input  class="gender" id="male"  type="radio" value="{{$questions[0]->option[1]->options}}" name="gender">
                                 </label>
                            </div>
                            @endif
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" id="gender_btn" />
                        </fieldset>
                        @endif
                  
                    <fieldset>
                            <h2 class="fs-title">Personal Details</h2>
                            <input type="text" name="name" id="name" placeholder="Name"/>
                            <input type="text" id="email" name="email" placeholder="email"/>
                            <input type="button" name="next" id="personal_btn" class="next action-button" value="Next"/>
                            <div class="error-msg" style="display: none;">Please select an answer</div>
                    </fieldset>    
                      
                    @if(isset($questions[1]->question) && $questions[1]->question_type =='radio')
                    <fieldset>
                        <h2 class="fs-title">@if(isset($questions[1]->question)){{$questions[1]->question}} @endif</h2>
                        <div class="fancy-checkbox-holder">
                            @foreach($questions[1]->option as $options)
                            <input type="hidden" id="meal_preparation_time" name="meal_preparation_time[]"  class="answer_12_{{$options->id}}" value="">
                            <div class="fancy-radio with-icon" id="{{$options->id}}" onclick="answer_1(this.id)" data-value="{{$options->options}}">
                            <div class="icon">
                            <i class="{{$options->options}}"></i>
                            </div>
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">-</div>
                            </div>
                            @endforeach
                           
                            
                        </div>
                            <input type="button" name="next" id="meal_preparation" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif

                    @if(isset($questions[2]->question) && $questions[2]->question_type =='checkbox')
                    <fieldset>
                        <h2 class="fs-title">@if(isset($questions[2]->question)){{$questions[2]->question}} @endif</h2>
                        <div class="fancy-checkbox-holder">
                            @foreach($questions[2]->option as $options)
                            <input type="hidden" name="meat_product_include[]" class="answer_4_{{$options->id}}" value="">
                            <div class="fancy-radio with-icon" id="{{$options->id}}" onclick="answer_4(this.id)" data-answer="{{$options->options}}">
                            <div class="icon">
                            <i class="{{$options->options}}"></i>
                            </div>
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">-</div>
                            </div>
                            @endforeach
                           
                            
                        </div>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif

                    @if(isset($questions[3]->question) && $questions[3]->question_type =='checkbox')
                    <fieldset>
                        <h2 class="fs-title">@if(isset($questions[3]->question)){{$questions[3]->question}} @endif</h2>
                        <div class="fancy-checkbox-holder">
                            @foreach($questions[3]->option as $options)
                            <input type="hidden" name="products_include[]" class="answer_3_{{$options->id}}" value="">
                            <div class="fancy-radio with-icon" id="{{$options->id}}" onclick="answer_3(this.id)" data-answer="{{$options->options}}">
                            <div class="icon">
                            <i class="{{$options->options}}"></i>
                            </div>
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">-</div>
                            </div>
                            @endforeach
                           
                            
                        </div>
                            <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif

                    @if(isset($questions[4]->question) && $questions[4]->question_type =='radio')
                    <fieldset>
                        <h2 class="fs-title">@if(isset($questions[4]->question)){{$questions[4]->question}} @endif</h2>
                        <div class="fancy-radio-holder">
                            @foreach($questions[4]->option as $options)
                            <input type="hidden" name="physically_active" value="" class="answer_5">
                            <div class="fancy-radio" id="{{$options->id}}" onclick="answer_5(this.id)">
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">+</div>
                            </div>
                             @endforeach
                           
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif
                    @if(isset($questions[5]->question)  && $questions[5]->question_type =='radio')
                    <fieldset>

                        <h2 class="fs-title">@if(isset($questions[5]->question)){{$questions[5]->question}} @endif</h2>
                        <div class="fancy-radio-holder">
                            @foreach($questions[5]->option as $options)
                            <input type="hidden" name="familiar_Keto_diet" value="" class="answer_6">
                            <div class="fancy-radio" id="{{$options->id}}" onclick="answer_6(this.id)">
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">+</div>
                            </div>
                             @endforeach
                           
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif
                    @if(isset($questions[6]->question) && $questions[6]->question_type =='radio')
                    <fieldset>

                        <h2 class="fs-title">@if(isset($questions[6]->question)){{$questions[6]->question}} @endif</h2>
                        <div class="fancy-radio-holder">
                            @foreach($questions[6]->option as $options)
                            <input type="hidden" name="willing_lose_weight" value="" class="answer_7">
                            <div class="fancy-radio" id="{{$options->id}}" onclick="answer_7(this.id)">
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">+</div>
                            </div>
                             @endforeach
                           
                        </div>
                        <input type="button" name="next" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif
                    
                   
                 
                    <fieldset>
                        <div id="step-7" class="step active" style="display: block;" data-type="units_question" data-mode="question">
                            <h2 class="fs-title">MEASUREMENTS</h2>

                            <div class="">
                            
                            <div class="input-holder">
                            <input id="age-value" type="number" name="age" placeholder="Age">
                            <div class="units age">years</div>
                            </div>
                            <div class="input-holder">
                            <input id="height-value" type="number" name="height" placeholder="Height">
                            <div class="units height">In</div>
                            </div>
                            <div class="input-holder">
                            <input id="weight-value" type="number" name="weight" placeholder="Weight">
                            <div class="units weight">lb</div>
                            </div>
                            <div class="input-holder">
                            <input id="targetWeight-value" type="number" name="target_weight" placeholder="Target weight">
                            <div class="units weight">lb</div>
                            </div>
                            
                            <div class="error-msg" style="display: none;">Please select an answer</div>
                            
                            </div>
                            <!-- <a  class="action-button" style="padding: 13px 28px;" href="health.html">Submit</a> -->
                        <input type="Submit" id="submmit" class="action-button" value="Submit" style="padding: 13px 28px;" />
                    </fieldset>
                    
                </form>
               </div>
                </div>
                </div>
            </section>
            <!-- End banner Area -->

            <!-- Start open-hour Area -->
            <section class="open-hour-area">
                <div class="container">
                    <div class="row">
    
                    </div>
                </div>  
            </section>
            <!-- End open-hour Area -->

            <!-- Start testomial Area -->
            <section class="testomial-area section-gap">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="menu-content pb-60 col-lg-8">
                            <div class="" style="height: 50px"></div>
                            <div class="title text-center">
                                <h1 class="mb-10">{{$siteConfig->feedback_title}}</h1>
                                <p>{{$siteConfig->feedback_description}}</p>
                            </div>
                        </div>
                    </div>                      
                    <div class="row">
                        <div class="active-testimonial-carusel">
                            @foreach($testimonials as $testimonial)
                            <div class="single-testimonial item">
                                <img class="mx-auto" src="{{asset('storage/app/public/testimonial/'.$testimonial->image)}}" alt="">
                                <p class="desc">
                                    {{$testimonial->description}}
                                </p>
                                <h4>{{$testimonial->title}}</h4>
                            </div>
                            @endforeach
                            
                                                                               
                        </div>
                    </div>
                </div>  
            </section>
            <!-- End testomial Area -->  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
             
  <script type="text/javascript">
function answer_1(id){
    
   var present =  $('.answer_12_'+id).val();
   if(present==''){
      $('.answer_12_'+id).val(id);
   }else{

    $('.answer_12_'+id).val('');
   }
   
}
function answer_3(value){

   var present =  $('.answer_3_'+value).val();
   if(present==''){
      $('.answer_3_'+value).val(value);
   }else{

    $('.answer_3_'+value).val('');
   }
    //alert(value);
    //$('.answer_3_'+value).val(value);
}
function answer_4(value){
   
 var present =  $('.answer_4_'+value).val();
   if(present==''){
      $('.answer_4_'+value).val(value);
   }else{

    $('.answer_4_'+value).val('');
   }
    //alert(value);
    //$('.answer_4_'+value).val(value);
}
function answer_5(value){

    //alert(value);
    $('.answer_5').val(value);
}
function answer_6(value){

    //alert(value);
    $('.answer_6').val(value);
}

function answer_7(value){

    //alert(value);
    $('.answer_7').val(value);
}


   $(document).ready(function () {

    // $('#personal_btn').click(function () {
    //     alert('dfsdf');
    //    var emailEntered = $('#email').val();

    //    if(emailEntered==''){
    //          alert(emailEntered);
    //           window.currentStep -= 1;
    //           $(this).html("Next");
    //           $('.error-msg').html('Please enter  email address').fadeIn();
    //           return false;

    //    }       
    // })

   });           
 </script> 
 @endsection
