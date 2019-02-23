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
              <h3 class="box-title"> Question </h3>
              <span class="pull-right">
                <a href="#" class="btn btn-info addModelbtn" id="#addModel"><span class="fa fa-plus"></span> Add Question</a>
                
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
              <table id="table_data" class="table table-striped table-bordered display" style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Question</th>
                  <th>Category</th>
                  <th>Type</th>
                  <th>Order</th>
                  <th>Created At</th>
                  <th>Status</th>
                  <th width="150px">Action</th>
                  
                </tr>
                </thead>
                
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- Table end -->

<!--add Modal -->
  <div class="modal fade" id="addModel" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Question Form</h4>
        </div>
        <div class="modal-body">
          
          <form action="{{route('question.store')}}" class="form" id="add_form" method="POST">
               @csrf   
                <div class="modal-body" id="modalbody">
                        <div class="form-group">
                            <label>Category Name</label>
                            <select type="text" name="category_id"  class="form-control" required="required">
                              <option value="">Choose Category</option>
                              @foreach($categories as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
                              @endforeach
                            </select>
                            <span class="text-red">
                              <strong class="category_id"></strong>
                            </span>
                        </div>   
                         <div class="form-group">
                          <label>Question</label>
                            <textarea type="text" class="form-control" name="question" placeholder="Description" autocomplete="off" value="{{ old('question') }}" require >
                            </textarea>
                            <span class="text-red">
                                      <strong class="question"></strong>
                            </span>
                        </div>
                       
                        <div class="form-group">
                            <label>Question Type</label>
                            <select type="text" name="question_type"  class="form-control" required="required">
                              <option value="">Choose Option</option>
                              <option value="checkbox">checkbox</option>
                              <option value="radio">radio</option>
                              <option value="text">text</option>
                              <option value="dropdown">dropdown</option>
                            </select>
                            <span class="text-red">
                              <strong class="question_type"></strong>
                            </span>
                        </div>

                        <div class="form-group">
                          <label>Question Order</label>
                            <input type="number" class="form-control"  name="question_order" placeholder="Order" autocomplete="off" value="{{ old('question_order') }}" require='require' >
                            <span class="text-red">
                                      <strong class="question_order"></strong>
                            </span>
                        </div>

                        
                        <!--- Question option -->
                        <div class="form-group">
                          <label>Options</label>
                            <div ng-app="app" ng-controller="MyCtrl">
                             <table  class="table table-striped table-bordered">
                               <thead>
                                  
                                  <tr>
                                      <th>Options</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                 <tr ng-repeat="name in data.names track by $index">
                                     <td> <input type="text" ng-model="data.names1[$index].name" name="options[]" required="required"  style="width:100%;"></td>
                                    <td> <a ng-click="addRow($index)"  ng-show="$last"><i class="fa fa-plus"></i></a>
                                        <a ng-click="deleteRow($event,name)"  ng-show="$index != 0"><i class="fa fa-close"></i></a>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>   
                        </div>  
                        <!--- Question option -->
                        



                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" name="status"  class="form-control" required="required">
                              <option value="Active">Active</option>
                              <option value="Disable">Disable</option>
                            </select>
                            <span class="text-red">
                              <strong class="status"></strong>
                            </span>
                        </div> 
<!--                         <input type="hidden" name="edit_id" id="edit_id" value="">
 -->                        
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
<!--add Modal end-->

<!--Modal -->
   <div class="modal fade" id="edit_diff_model" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Question Form</h4>
        </div>
        <div class="modal-body">
          
          <form action="{{route('question.store')}}" class="form" id="edit_diff_form" method="POST">
               @csrf   
                <div class="modal-body" id="modalbody">
                    
                   <div class="form-group">
                            <label>Category Name</label>
                            <select type="text" name="category_id" id="edit_category_id"  class="form-control" required="required">
                              <option value="">Choose Category</option>
                              @foreach($categories as $row)
                              <option value="{{$row->id}}">{{$row->category_name}}</option>
                              @endforeach
                            </select>
                            <span class="text-red">
                              <strong class="edit_category_id"></strong>
                            </span>
                        </div>   
                         <div class="form-group">
                          <label>Question</label>
                            <textarea type="text" class="form-control" id="edit_question" name="question" placeholder="Description" autocomplete="off" value="{{ old('question') }}" require >
                            </textarea>
                            <span class="text-red">
                                      <strong class="edit_question"></strong>
                            </span>
                        </div>
                       
                        <div class="form-group">
                            <label>Question Type</label>
                            <select type="text" name="question_type" id="edit_question_type"  class="form-control" required="required">
                              <option value="">Choose Option</option>
                              <option value="checkbox">checkbox</option>
                              <option value="radio">radio</option>
                              <option value="text">text</option>
                              <option value="dropdown">dropdown</option>
                            </select>
                            <span class="text-red">
                              <strong class="edit_question_type"></strong>
                            </span>
                        </div>

                        <div class="form-group">
                          <label>Question Order</label>
                            <input type="number" class="form-control"  name="question_order" id="edit_question_order" placeholder="Order" autocomplete="off" value="{{ old('question_order') }}" require='require' >
                            <span class="text-red">
                                      <strong class="edit_question_order"></strong>
                            </span>
                        </div>  



                        <div class="form-group">
                            <label>Status</label>
                            <select type="text" name="status" id="edit_status" class="form-control" required="required">
                              <option value="Active">Active</option>
                              <option value="Disable">Disable</option>
                            </select>
                            <span class="text-red">
                              <strong class="edit_status"></strong>
                            </span>
                        </div> 


                        <input type="hidden" name="edit_id" id="edit_id" value="">
                       
                </div>
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" id="edit_diff_btn" value="Save">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>
<!--Update Modal end-->
      <!-- /.row --> 
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('public/diet/app.js')}}" type="text/javascript"></script>
<script type="text/javascript">

var app = angular.module("nomanAngular",[],function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });

app.controller("MyCtrl" , function($scope){
  
   $scope.data ={
       names:[{ name:""}]
   };
  
  $scope.addRow = function(index){
    var name = {name:""};
       if($scope.data.names.length <= index+1){
            $scope.data.names.splice(index+1,0,name);
        }
    };
  
  $scope.deleteRow = function($event,name){
  var index = $scope.data.names.indexOf(name);
    if($event.which == 1)
       $scope.data.names.splice(index,1);
    }
  
  });

var dataTableRoute = "{{ route('question.fetch') }}";
var editRoute = "{{route('question.edit')}}";
var activeRoute = "{{route('question.active')}}";
var disableRoute = "{{route('question.disable')}}";
var token = '{{csrf_token()}}';
var data =[
            { "data": "id" },
            { "data": "question" },
            { "data": "category_id" },
            { "data": "question_type" },
            { "data": "question_order" },
            { "data": "created_at" },
            { "data": "status" },
            { "data": "options" ,"orderable":false},
          ]
$( document ).ready(function() {
  InitTable();
});

$('#edit_diff_btn').click(function() {
     

     EditDifferentModel('#edit_diff_form','#edit_diff_model');

});


</script>
@endsection