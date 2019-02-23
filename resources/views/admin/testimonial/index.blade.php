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



<!-- Table start -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Testimonial</h3>
              <span class="pull-right">
                <a href="#" class="btn btn-info addModelbtn" id="#addModel"><span class="fa fa-plus"></span> Add Testimonial</a>
                
              </span>
            </div>
            <!-- /.box-header -->
             <div class="box-body">
              
                    <div class="alert alert-danger alert-styled-left" style="display: none;" id="delete">
                         <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                         <p class="delete"></p>
                    </div>

                    <div class="alert alert-success alert-styled-left" style="display: none;" id="success">
                         <button type="button" class="close" data-dismiss="alert"><span>×</span><span class="sr-only">Close</span></button>
                         <p class="success"></p>
                    </div> 

              <table id="table_data" class="display  table-striped table-bordered responsive dataTable " style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Status</th>
                  <th width="100px;">Action</th>
                  
                </tr>
                </thead>
                <!-- <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Status</th>
                  <th>Action</th>
                  
                </tr>
                </tfoot> -->
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- Table end -->

<!--Modal -->
  <div class="modal fade" id="addModel" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Testimonial Form</h4>
        </div>
        <div class="modal-body">
          
          <form action="{{route('testimonial.store')}}" enctype="multipart/form-data" class="form" id="add_form" method="POST">
               @csrf   
                <div class="modal-body" id="modalbody">
                       
                  <div class="form-group">
                    <label>Title</label>
                      <input type="text" class="form-control" id="edit_title" name="title" placeholder="Title" autocomplete="off" value="{{ old('title') }}" require >
                      <span class="text-red">
                                <strong class="title"></strong>
                      </span>
                  </div>
                  <div class="form-group">
                    <label>Description</label>
                      <textarea type="text" class="form-control" id="edit_description" name="description" placeholder="Description" autocomplete="off" value="{{ old('description') }}" require ></textarea>
                      <span class="text-red">
                                <strong class="description"></strong>
                      </span>
                  </div>
                  <div class="form-group">
                    <label>Image</label>
                      <input type="file" class="form-control"  name="image" placeholder="Image" require >
                      <span class="text-red">
                                <strong class="image"></strong>
                      </span>
                  </div>
                       
                        
                        <input type="hidden" name="edit_id" id="edit_id" value="">
                        
                </div>
              
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" id="add_form_btn" value="Save">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
<!--Update Modal end-->
      <!-- /.row -->  
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('public/diet/app.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  var dataTableRoute = "{{ route('testimonial.fetch') }}";
  var editRoute = "{{route('testimonial.edit')}}";
  var activeRoute = "{{route('testimonial.active')}}";
  var disableRoute = "{{route('testimonial.disable')}}";
  var token = '{{csrf_token()}}';
  var data = [
                { "data": "id" },
                { "data": "title" },
                { "data": "description" },
                { "data": "image",
                         "render": function (data) {
                             
                             return '<img src="' + data + '" style="height:60px;width:60px" id="show_img" />';

                         }  
                 },
                { "data": "created_at" },
                { "data": "status" },
                { "data": "options" ,"orderable":false},
            ]
$( document ).ready(function() {

  InitTable();
});
</script> 

@endsection