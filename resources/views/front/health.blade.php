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

 .fas {
        color: #67bc00;
        float: left;
        font-size: 6em;
    }

</style>
<section class="banner-area relative" id="home">
               
                <div class="overlay overlay-bg"></div>
                <div class="container">

                    <div class="row  justify-content-center align-items-center" style="height: 277px;">

                        <div class="banner-content col-md-5 justify-content-center">
                            <h6 class="text-uppercase">These are your results,</h6>
                            <h1>
                                Get Your Personalized Plan         
                            </h1>
                            
                            <a href="#booking" class="primary-btn header-btn text-uppercase mt-10">Get Started</a>
                            
                        </div>
                    </div>

                </div>
</section>  
   
<section  class=" section-gap relative" id="afterSubmit" style="background: url(https://png.pngtree.com/thumb_back/fw800/back_pic/04/56/57/795865ee134931d.jpg) no-repeat; background-size: cover;">           
               <div class="box">
                    <div class="container">
                        <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-diagnoses fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3 >BMI</h3>
                                            <h2> 80 </h2>
                                        </div>
                                        <div class="text">
                                        </div>                                        
                                     </div>
                                </div>   
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-notes-medical fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3>Calorie intake</h3>
                                            <h2> 1022 </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-user-md fa-5x" aria-hidden="true"></i>
                                        <div class="title">
                                            <h3>Nutritional value</h3>
                                            <h2> 63% </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="box-part text-center">
                                        <i class="fas fa-glass-martini fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Water intake</h3>
                                            <h2> 92% </h2>
                                        </div>
                                        <div class="text">
                                        </div>
                                     </div>
                                </div>   
                                
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-biohazard fa-5x" aria-hidden="true"></i>   
                                    
                                        <div class="title">
                                            <h3>Energy level</h3>
                                            <h2> 80% </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>   
                                
                                 <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-weight fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Achievable weight</h3>
                                            <h2> 5KG </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-chart-area fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Cholesterol levels</h3>
                                            <h2> 51% </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                         <i class="fas fa-thumbs-up fa-5x" aria-hidden="true"></i>   
                                       
                                        <div class="title">
                                            <h3>Success rate</h3>
                                            <h2> 92% </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                               
                                    <div class="box-part text-center">
                                        
                                        <i class="fas fa-fist-raised fa-5x" aria-hidden="true"></i>   
                                        <div class="title">
                                            <h3>Blood pressure</h3>
                                            <h2> 80 </h2>
                                        </div>
                                        
                                        <div class="text">
                                            
                                        </div>
                                        
                                        
                                        
                                     </div>
                                </div>

                        </div>   

                    </div>
                    <section style="padding: 50px 1px">
                        <h1 style="padding: 50px 1px;" align="center">Get Personalized detailed diet plan, now   </h1>
                        <center>
                            <button style="background-color: #67bc00; padding: 30px 10px; font-size: 30px;" class="btn btn-success" style=""> $10 - Pay with Paypal </button>
                        </center>
                        </section>
                </div>
</section>      
 
 @endsection
