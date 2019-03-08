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
<?php


 $user = Auth::user();

?>




<!-- Table start -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Servey Record</h3>
              <span class="pull-right">
                <button class="btn btn-primary" id="btnExport" onclick="fnExcelReport();"><li class="fa fa-file-excel-o fa-lg"></li></button>
                
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
              <div class="table-responsive">       
              <table id="" class="table table-striped table-bordered display nowrap responsive" style="width:100%">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>E-mail</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Weight</th>
                  <th>Target Weight</th>
                  <th>Height</th>
                   <th>Status</th>
                  
                  @foreach($data['question'] as $row)
                  <th width="100%">{{$row->question}}</th>
                  @endforeach
                  <th>Created At</th>
                  
                </tr>
                </thead>
                <?php
                $countquestion  = count($data['question']);
                ?>
                <tbody>
                  @foreach($data['userInformation'] as $row)
                  <tr>
                    <td>{{$row->id}}</td>
                    <td>{{$row->name}}</td>
                    <td>{{$row->email}}</td>
                    <td>{{$row->gender}}</td>
                    <td>{{$row->age}}</td>
                    <td>{{$row->weight}} {{$row->weight_type}}</td>
                    <td>{{$row->target_weight}} {{$row->target_weight_type}}</td>
                    @if($row->height_cm!='' && $row->height_ft=='' && $row->height_inc=='')
                    <td>{{$row->height_cm}} cm</td>
                    @elseif($row->height_cm=='' && $row->height_ft!='' && $row->height_inc!='')
                    <td>{{$row->height_ft}} ft {{$row->height_inc}} inc</td>
                    @endif
                    <td>{{$row->status}}</td>
                    

                    @foreach($row->questionAnswer as $answer)
                     <?php 
                         $answerId = $answer->answer_id;
                         $answerIdexp = explode(",",$answerId);
                         $optionCombine='';
                         foreach ($answerIdexp as  $value) {
                           $option = App\QuestionOption::findOrFail($value);
                           $optionCombine .= $option->options.',';
                  
                         }
                          $rtrimoptionCombine = rtrim($optionCombine,","); 
                     ?>
                     <td>{{$rtrimoptionCombine}}
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    </td>
                    
                    @endforeach
                   
                    <td>{{$row->created_at}}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              </div>
              {{ $data['userInformation']->links() }}
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
</div>
<!-- Table end -->

 <script type="text/javascript" src="{{asset('public/js/FileSaver.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/js/tableExport.js')}}"></script>   
<script type="text/javascript">
function fnExcelReport() 
{ 
  //$(".loading").fadeIn();
 $("table").tableExport({
  headings: false, 
  type:'excel'
}); 
 //$(".loading").fadeOut();
 }
</script>
@push('scripts')
<!-- For Charts -->
<!-- <script src="{{asset('bower_components/chart.js/Chart.js')}}"></script>
 -->
@can('show-dashboard-calendar')
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> -->





{{-- $calendar->script() --}}
@endcan
@endpush

@stop 