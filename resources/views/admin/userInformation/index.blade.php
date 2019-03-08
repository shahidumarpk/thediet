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

<div class="row">
  <div class="col-md-12">
    <div class="box box-success collapsed-box">
      <div class="box-header with-border">
        <h3 class="box-title">Advance Search</h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="" data-original-title="Collapse">
            <i class="fa fa-minus"></i></button>
          
        </div>
      </div>
      <div class="box-body" style="">
       <form id="" method="GET" action="{{route('userInformation.index')}}">
          <div class="row col-md-12">
              <div class="form-group col-md-6">
                  <label>Gender</label>
                    <select type="text" name="gender"   class="form-control select2" style="width: 100%">
                       <option value="">Choose Option</option>
                       <option value="Male">Male</option>
                       <option value="Female">Female</option>
                         
                    </select>
              </div>
              
          </div>
          <button class="btn btn-primary pull-right" type="submit">Search</button>
          <a href="{{route('userInformation.index')}}" class="btn btn-primary pull-right" style="margin-right:20px;" id="">Clear</a>
        </form>
      </div>
      
  </div>
</div>
</div>

<!-- Table start -->
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"> Servey Record </h3>
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
                  <th style="width: 200px;" class="nowrap">{{$row->question}}</th>
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
                    <?php
                    //$id = array_column($data['userInformation'][1]->questionAnswer->toarray(), 'question_id');
                    
                    // $result=array_diff($data['questionId'],$id);
                    ?>

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

                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                     
                     <?php 
                              // if ($answer,$answer->question_id)
                              //     {
                              //     echo '<td>'.$answer->answer->options.'</td>';
                              //     }
                              //   else
                              //     {
                              //     echo "<td></td>";
                              //     }
                     ?>
                    
                    @endforeach
                    <?php 
                           // $countAnswer = count($row->questionAnswer);
                           //  print_r($countAnswer);//exit();
                           
                           // print_r($countquestion);//exit();
                           // //$i = $countAnswer;
                           
                            
                          
                           //  for($countAnswer; $countAnswer<$countquestion; $countAnswer++){
                           //    if($countAnswer < $countquestion){
                           //      echo  '<td>'.$countAnswer.'<td>';
                           //    }
                           //  }
                           
                            
                     ?>
                    
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

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" src="{{asset('public/js/FileSaver.js')}}"></script> 
<script type="text/javascript" src="{{asset('public/js/tableExport.js')}}"></script>
<link href="{{ asset('public/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">
  <script src="{{ asset('public/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

<script type="text/javascript">

$(document).ready(function() {
    $('.table_data').DataTable( {
        //"scrollY": 200,
        "scrollX": true
    } );

});

function fnExcelReport() 
{ 
  //$(".loading").fadeIn();
 $("table").tableExport({
  headings: false, 
  type:'excel'
}); 
 //$(".loading").fadeOut();
 }

 $('.select2').select2({
      multiple: false,
  }); 
</script>
@endsection