@extends('layouts.mainlayout')
@section('content')
@if(session('success'))
    <script>
      $( document ).ready(function() {
        swal("Success", "{{session('success')}}", "success");
      });

    </script>
@endif
<!-- some CSS styling changes and overrides -->
<style>
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> Details</h3>

            </div>
            <!-- /.box-header -->
            <div class="box-body" >


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
            <div class="row">
              <div class="col-md-8">
              <table class="table table-striped table-bordered responsive nowrap">
                <tr>
                    <td><b>ID</b></td>
                    <td>{{$data['userInformation']->id}}</td>
                </tr>
                <tr>
                    <td><b>Name</b></td>
                    <td>{{$data['userInformation']->name}}</td>
                </tr>
                <tr>
                    <td><b>E-mail</b></td>
                    <td>{{$data['userInformation']->email}}</td>
                </tr>
                <tr>
                    <td><b>Gender</b></td>
                    <td>{{$data['userInformation']->gender}}</td>
                </tr>

                <tr>
                    <td><b>Age</b></td>
                    <td>{{$data['userInformation']->age}}</td>
                </tr>
                
                <tr>
                    <td><b>Weight</b></td>
                    <td>{{$data['userInformation']->weight}}</td>
                </tr>
                <tr>
                    <td><b>Target Weight</b></td>
                    <td>{{$data['userInformation']->target_weight}}</td>
                </tr>
                <tr>
                    <td><b>Height</b></td>
                    <td>{{$data['userInformation']->height}}</td>
                </tr>
               
                <tr>
                    <td><b>Created At</b></td>
                    <td>{{$data['userInformation']->created_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>Updated At</b></td>
                    <td>{{$data['userInformation']->updated_at->format('d-m-Y')}}</td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td>
                        
                          <span class="text-green"><b>{{$data['userInformation']->status}}</b></span>
                        
<!--                             <span class="text-red"><b>Deactive</b></span>
 -->                       
                    </td>
                </tr>

              </table>


              </div>
              </div>

          </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="{{ URL::previous() }}" class="btn btn-default">Back</a>
              </div>
              <!-- /.box-footer -->

</div>

<!-- Table specification start -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Questions & Answers</h3>
             
            </div>
            <!-- /.box-header -->
             <div class="box-body">
            
              <table id="table_data" class="display table-striped table-bordered responsive nowrap table_data" style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Question</th>
                  <th>Answers</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
               
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- Table specification end -->



{{--
<!--Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Specification Form</h4>
        </div>
        <div class="modal-body">
          
          <form action="{{route('question.optionStore')}}" class="form" id="option_form" method="POST">
               @csrf   
                <div class="modal-body" id="modalbody">
                       
                        <div class="form-group">
                            <label>Option</label>
                           <input type="text"  class="form-control" id="options" name="options" required>
                            <span class="text-red">
                              <strong class="options"></strong>
                            </span>
                        </div>
                        
                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" name="status" id="status" class="form-control" required="required">
                              <option value="Active">Active</option>
                              <option value="Disable">Disable</option>
                            </select>
                            <span class="text-red">
                              <strong class="status"></strong>
                            </span>
                        </div> 
                       
                        
                    <input type="hidden" name="edit_id" id="edit_id" value="">     
                    <input type="hidden"  id="question_id" name="question_id" value="{{$data['question']->id}}">    
                </div>
         
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" id="option-update" value="Save">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
<!--Update Modal end-->
--}}


</div>
</div>




<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>


<script type="text/javascript">
 $( document ).ready(function() {

var InitTable = function(){
    $('#table_data').DataTable({
      "bDestroy": true,
      "processing":true,
      "serverSide":true,
      "ajax":{
               "url": "{{ route('userInformation.answerFetch') }}",
               "dataType": "json",
               "type": "POST",
               "data":{ _token: "{{csrf_token()}}",id:"{{$data['userInformation']->id}}"}
             },
      "columns": [
                { "data": "id" },
                { "data": "question_id" },
                { "data": "answer_id" },
                // { "data": "status" },
                { "data": "option" },
            ]
    });
  }


  InitTable();
// code for add form modal show
// $(document).on('click', '.btnAdd', function()
// {
//     $('#myModal').modal('show');
//     $('#option_form')[0].reset();  
// });



// code for add form
// $('#option-update').on('click', function(e) {

//   var data = $('#option_form').serializeArray();
  
//   event.preventDefault();
//   $.ajax({
//           data: data,
//           type: $('#option_form').attr('method'),
//           url: $('#option_form').attr('action'),
//           success: function(response)
//           {
            
//             if(response.errors)
//             {
//               $(".options").html(response.errors.attribute_name);
//               $('.options').fadeIn('slow', function(){
//                 $('.options').delay(3000).fadeOut(); 
//               });
              
             
              
//             }
//             else
//             {
//               $('#myModal').modal('hide');
//               $('.success').html(response);
//               $('#success').show();
//               $('#option_form')[0].reset();
//               InitTable();

              
             
              
//             }
//           }
//         });
// }); 

//  $(document).on('click', '.edit', function()
// {

//     var id = $(this).attr('data-id');
//     $.ajax({
//         "url": "{{route('question.optionEdit')}}",
//         type: "POST",
//         data: {'id': id,_token: '{{csrf_token()}}'},
//         dataType : "json",
//         success: function(data)
//         {
//           $('#edit_id').val(data.id);
//           $('#options').val(data.options);
//           $('#status').val(data.status);
//           $('#myModal').modal('show');
//         },
//           error: function(){},          
//       });
// });




// $(document).on('click', '.disable', function()
// {

//     var id = $(this).attr('data-id');
//     $.ajax({
//         "url": "",
//         type: "POST",
//         data: {'id': id,_token: '{{csrf_token()}}'},
//         dataType : "json",
//         success: function(response)
//         {
//           InitSNOTable();
//           $('.deleteSNO').html(response);
//           $('#deleteSNO').show();
//         },
//           error: function(){},          
//       });
// });

// $(document).on('click', '.active', function()
// {

//     var id = $(this).attr('data-id');
//     $.ajax({
//         "url": "",
//         type: "POST",
//         data: {'id': id,_token: '{{csrf_token()}}'},
//         dataType : "json",
//         success: function(response)
//         {
//           InitSNOTable();
//           $('.successSNO').html(response);
//           $('#successSNO').show();
//         },
//           error: function(){},          
//       });
// });


});




</script>

@endsection
