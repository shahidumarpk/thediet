@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });
      
    </script>
@endif
@if(session('failed'))
    <script>
      $( document ).ready(function() {
        swal("Failed", "{{session('failed')}}", "error");
      });
      
    </script>
@endif

<!-- Form start -->

<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Site Config Home Page</h3>
              
              <!--<span class="pull-right">
                <a href="" class="btn btn-info"><span class="fa fa-plus"></span> Add Trulies</a>
              </span>-->
              
            </div>
            <!-- /.box-header -->
      <div class="box-body">

                    @if($message = Session::get('delete'))
                      <div class="alert alert-danger alert-block">
                      <button type="button" class="close" data-dismiss="alert">
                      </button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif
                     @if($message = Session::get('success'))
                      <div class="alert alert-success alert-block">
                      <button type="button" class="close" data-dismiss="alert">
                      </button>
                            <strong>{{$message}}</strong>
                        </div>
                    @endif

                    <div class="alert alert-danger alert-styled-left" style="display: none;" id="delete">
                         <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                         <p class="delete"></p>
                    </div>

                    <div class="alert alert-success alert-styled-left" style="display: none;" id="success">
                         <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                         <p class="success"></p>
                    </div>


        <form class="form-horizontal form" action="{{route('configIndex.store')}}" method="post" enctype="multipart/form-data" id="add_form">
            @csrf
          <div class="box-body" >
            <div class="row">
              <div class="col-md-12">

                 <div class="form-group">
                    <label class="col-sm-3 control-label">Site Logo</label>
                    <div class="col-sm-9">
                      <img src="{{asset('storage/app/public/page/'.$data->logo)}}" style="height:60px;width:60px" id="show_img" />
                      <input type="file" class="form-control"  name="logo">

                      <span class="text-red">
                                <strong class="logo"></strong>
                      </span>
                    </div>
                  </div>    
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Title 1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="title_1" placeholder="Title 1" autocomplete="off" value="{{$data->title_1}}" require >
                      <span class="text-red">
                                <strong class="title_1"></strong>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Title 2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="title_2" placeholder="Title 2" autocomplete="off" value="{{$data->title_2}}" require >
                      <span class="text-red">
                                <strong class="title_2"></strong>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Feedback Title</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="feedback_title" placeholder="Feedback Title" autocomplete="off" value="{{$data->feedback_title}}" require >
                      <span class="text-red">
                                <strong class="feedback_title"></strong>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Feedback Description</label>
                    <div class="col-sm-9">
                      <textarea type="text" class="form-control" id="feedback_description" name="feedback_description" placeholder="Feedback Description" autocomplete="off" require >
                        {{$data->feedback_description}}
                      </textarea>
                      <span class="text-red">
                                <strong class="feedback_description"></strong>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="address" placeholder="Address" autocomplete="off" value="{{$data->address}}" require >
                      <span class="text-red">
                                <strong class="address"></strong>
                      </span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Phone 1</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone_1" placeholder="Phone 1" autocomplete="off" value="{{$data->phone_1}}" require >
                      <span class="text-red">
                                <strong class="phone_1"></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Phone 2</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" name="phone_2" placeholder="Phone 2" autocomplete="off" value="{{$data->phone_2}}" >
                      <span class="text-red">
                                <strong class="phone_2"></strong>
                      </span>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label class="col-sm-3 control-label">FAQ Text</label>
                    <div class="col-sm-9">
                      <textarea id="editor1" class="editor1 faq_text" name="faq_text" rows="10" cols="80" required>
                        <?php echo $data->faq_text; ?>
                            </textarea>
                      <span class="text-red">
                                <strong class="faq_text"></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">General conditions</label>
                    <div class="col-sm-9">
                      <textarea id="editor2" class="general_condition" name="general_condition" rows="10" cols="80" required>
                        <?php echo $data->general_condition; ?>
                            </textarea>
                      <span class="text-red">
                                <strong class="general_condition"></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Data protection policy</label>
                    <div class="col-sm-9">
                      <textarea id="editor3" class="protection_policy" name="protection_policy" rows="10" cols="80" required>
                        <?php echo $data->protection_policy; ?>
                            </textarea>
                      <span class="text-red">
                                <strong class="protection_policy"></strong>
                      </span>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label">Contact us</label>
                    <div class="col-sm-9">
                      <textarea id="editor4" class="contact_us" name="contact_us" rows="10" cols="80" required>
                        <?php echo $data->contact_us; ?>
                            </textarea>
                      <span class="text-red">
                                <strong class="contact_us"></strong>
                      </span>
                    </div>
                  </div>
                 
               
              </div>
              </div>
          </div>

              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right" id="add_form_btn">Save</button>
              </div>
              <!-- /.box-footer -->
        </form>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- Form end -->


      <!-- /.row -->  
 <script src="{{ asset('public/bower_components/ckeditor/ckeditor.js')}}" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset('public/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}" type="text/javascript"></script>
<link href="{{ asset('public/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">

  <script src="{{ asset('public/plugins/input-mask/jquery.inputmask.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>

<script type="text/javascript">

 // code for add form
$('#add_form_btn').on('click', function(e) {
  //var data = $('#add_form').serializeArray();
   for (instance in CKEDITOR.instances) {
        CKEDITOR.instances[instance].updateElement();
    }
  e.preventDefault();
  var data = $('#add_form')[0];
  var formData = new FormData(data);
  $.ajax({
  data: formData,
  type: $('#add_form').attr('method'),
  url: $('#add_form').attr('action'),
  processData: false,
  contentType: false,
  success: function(response)
  {
  if(response.errors)
  {
  $.each(response.errors, function( index, value ) {
    $("."+index).html(value);
    $("."+index).fadeIn('slow', function(){
      $("."+index).delay(3000).fadeOut(); 
    });
  });

  }
  else if(response.REDIRECT)
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

$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();

   // CKEDITOR.instances['editor1'].setData('');
});


$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});

$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor3');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});

$(function() {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
});
</script> 

@endsection