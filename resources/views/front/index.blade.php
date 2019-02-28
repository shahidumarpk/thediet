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
                                        <td align="center" style="text-align: center;">
                                        <ul class="m-auto only_bigscreen"  id="progressbar" style="text-align: center;">
                                            
                                            @if(isset($fixQuestions[0]->category->category_name) && $fixQuestions[0]->status=='Active')
                                            <li class="active">{{$fixQuestions[0]->category->category_name}}</li>
                                            @endif
                                             
                                            
                                            <li>PERSONAL</li>
                                            
                                            @foreach($questions as $question)

                                            @if(isset($question) && $question->status=='Active' && $question->question_type =='radio') 
                                            <li>
                                                {{$question->category->category_name}} 
                                            </li>
                                            @elseif(isset($question) && $question->status=='Active' && $question->question_type =='checkbox') 
                                            <li>
                                                {{$question->category->category_name}} 
                                            </li>
                                             @endif
                                            @endforeach
                                          
                                            <li>MEASUREMENTS </li>
                                        </ul>
                                    </td>

                                </tr>
                            </table>
                </div>
                <form id="msform" action="{{route('front_form')}}" method="POST">
                    <!-- progressbar -->
                         @csrf
                         @if(isset($fixQuestions[0]->question) && $questions[0]->question_type =='radio' && $fixQuestions[0]->status=='Active')
                        <fieldset>
                            <h2 class="fs-title">@if(isset($fixQuestions[0]->question)){{$fixQuestions[0]->question}} @endif</h2>
                            <div class="row">

                                
                            @if(isset($fixQuestions[0]->question) && $fixQuestions[0]->question_type =='radio')
                           <div class="col-md-6">
                            <label for="female" disabled="" name="next" class=" action-button" style="padding: 10px 20px;"><i class="fas fa-male"></i>{{$fixQuestions[0]->option[0]->options}}
                                <input type="radio" id="female" value="{{$questions[0]->option[0]->options}}" name="gender" class="gender">
                            </label>
                                
                            </div>
                            <div class="col-md-6">
                                 
                                <label  for="male" disabled="" name="next" class=" action-button" style="padding: 10px 20px;"><i class="fas fa-male"></i>{{$fixQuestions[0]->option[1]->options}}
                                     <input  class="gender" id="male"  type="radio" value="{{$fixQuestions[0]->option[1]->options}}" name="gender">
                                 </label>
                            </div>
                            <div class="error-gender" style="display: none;"><p style="color: red; text-align: center;margin-left: 200px;">Please select an answer</p></div>
                            @endif
                            </div>
                            <input type="button" name="next" class="next action-button" value="Next" id="gender_btn" />
                        </fieldset>
                        @endif
                  
                    <fieldset>
                            <h2 class="fs-title">Personal Details</h2>
                            <input type="text" name="name" id="name" placeholder="Name"/>
                            <input type="text" id="email" name="email" placeholder="email"/>
                             <div class="error-email" style="display: none;"><p style="color: red;">Please enter answer</p></div>
                             <div class="error-mail" style="display: none;"><p style="color: red;">Please enter valid email</p></div>
                            <input type="button" name="next" id="personal_btn" class="next action-button" value="Next"/>
                    </fieldset>    
                    @foreach($questions as $question)  
                    @if(isset($question) && $question->question_type =='checkbox' && $question->status=='Active')
                    <fieldset style="height: 400px;overflow-y:scroll;">
                        <h2 class="fs-title">{{$question->question}}</h2>
                        <div class="fancy-checkbox-holder">
                            
                            @foreach($question->option as $options)
                            <input type="checkbox" id="option_{{$options->id}}_{{$question->id}}" name="select_checkbox_{{$question->id}}[]" class="option_{{$question->id}}"   value="{{$options->id}}" style="display: none;">
                            <div class="fancy-radio with-icon" id="{{$options->id}}_{{$question->id}}" onclick="answer_checkbox(this.id)">
                            <div class="icon">
                            <i class="{{$options->options}}"></i>
                            </div>
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">-</div>
                            </div>
                            @endforeach
                           
                            <div class="error_next_{{$question->id}}" style="display: none;"><p style="color: red;">Please select an answer</p>
                            </div>
                        </div>
                            <input type="button" name="next" id="{{$question->id}}" class="next action-button" value="Next"/>
                    </fieldset>
                    @elseif(isset($question) && $question->question_type =='radio' && $question->status=='Active')
                    <fieldset>
                        <h2 class="fs-title">@if(isset($question->question)){{$question->question}} @endif</h2>
                        <div class="fancy-radio-holder">
                            
                            @foreach($question->option as $options)
                            <input type="radio" id="option_{{$options->id}}_{{$question->id}}" name="select_radio_{{$question->id}}" class="option_{{$question->id}}"   value="{{$options->id}}" style="display: none;">
                            <div class="fancy-radio" id="{{$options->id}}_{{$question->id}}" onclick="answer_radio(this.id)">
                            {{$options->options}}
                            <div class="status"></div>
                            <div class="status-icon">+</div>
                            </div>
                             @endforeach
                            <div class="error_next_{{$question->id}}" style="display: none;"><p style="color: red;">Please select an answer</p>
                            </div>
                        </div>
                        <input type="button" name="next" id="{{$question->id}}" class="next action-button" value="Next"/>
                    </fieldset>
                    @endif
                    @endforeach
                
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
                            
                            <div class="error-msg" style="display: none;"><p style="color: red;">Please enter answer</p></div>
                            
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
function answer_radio(id){

$('#option_'+id).prop("checked", !$('#option_'+id).prop("checked"));
}
function answer_checkbox(id){

$('#option_'+id).prop("checked", !$('#option_'+id).prop("checked"));
   
}

$(document).ready(function () {

$('#submmit').click(function (e) {
  e.preventDefault();
var age = $('#age-value').val();
var height = $('#height-value').val();
var weight = $('#weight-value').val();
var targetWeight = $('#targetWeight-value').val();

if(age=='' || height=='' || weight=='' || targetWeight=='' ){
    $('.error-msg').show();
      return;

}
  var data = $('#msform')[0];
  var formData = new FormData(data);
  $.ajax({
  data: formData,
  type: $('#msform').attr('method'),
  url: $('#msform').attr('action'),
  processData: false,
  contentType: false,
  success: function(response)
  {
  
 if(response.REDIRECT)
  {
        
  $('.success').html(response.MESSAGE);
  $('#success').show();
    window.setTimeout(function()
    {
    location.href = response.REDIRECT;
    }, 2000);
  }
  
  }
  });      

});




});           
 </script> 
 @endsection
