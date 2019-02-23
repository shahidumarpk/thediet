
@extends('front_layouts.layouts')
@section('content')
<section> 
    <section class="banner-area relative" id="home">
        <div class="overlay overlay-bg"></div>
        <div class="" style="height: 200px;"></div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-1 mt-5 mb-5">
                <?php echo $siteConfig->faq_text; ?>
            </div>
        </div>
    </div>
</section>
@endsection
