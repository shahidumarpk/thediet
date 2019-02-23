 <footer class="footer-bs" style="padding-top: 100px;background-color: #04091e;color: #fff; background-image: url();" >
        <div class="container">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft">
                <h2 style="color: #71c200;"><img src="{{ asset('public/front/assets/img/logo.png')}}" style="width: 200px;"></h2>
                <p>© 2019 <a href="http://www.nsol.sg"  style="color: #71c200;"> NSOL</a>, All rights reserved</p>
            </div>
            
            <div class="col-md-3  animated fadeInDown">
                <h4 style="color:#71c200"> Contact</h4>
                <div class="" style="height: 20px;"></div>
                <p>{{$siteConfig->address}}</p>

                       <p style="color: #71c200;font-weight: 700; font-size: 18px;" > {{$siteConfig->phone_1}}</p>
                       <p style="color: #71c200; font-weight: 700;  font-size: 18px;"> {{$siteConfig->phone_2}}</p>
            </div>
            <div class="col-md-2 footer-nav animated fadeInUp">
                <h4 style="color:#71c200">Menu</h4>
                <div class="" style="height: 20px;"></div>
                
                    <ul class="pages">
                        <li><a href="{{route('faq')}}">F.A.Q</a></li>
                        <li><a href="#">Access my Plan</a></li>
                        <li><a href="{{route('general_conditions')}}">General Conditions</a></li>
                        <li><a href="{{route('protection_policy')}}">Data protection policy</a></li>
                        <li><a href="{{route('contact_us')}}">Contact Us</a></li>
                        
                    </ul>
            </div>
            <div class="col-md-4 footer-ns animated fadeInRight">
                <h4 style="color:#71c200">Follow us</h4>
                <div class="" style="height: 20px;"></div>
                 </p>
                 <div class="col-sm-12 footer-social">
                            <a href="#"><i class="fab fa-facebook fa-3x"></i></a>
                            <a href="#"><i class="fab fa-twitter fa-3x"></i></a>
                            <a href="#"><i class="fab fa-dribbble fa-3x"></i></a>
                            <a href="#"><i class="fab fa-behance fa-3x"></i></a>
                        </div>
            </div>
        </div>
        </div>  
    </footer>