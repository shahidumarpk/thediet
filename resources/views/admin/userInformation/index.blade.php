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
                    <td>{{$row->weight}}</td>
                    <td>{{$row->target_weight}}</td>
                    <td>{{$row->height}}</td>
                    <td>{{$row->status}}</td>
                    <?php
                    //$id = array_column($data['userInformation'][1]->questionAnswer->toarray(), 'question_id');
                    
                    // $result=array_diff($data['questionId'],$id);
                    ?>

                    @foreach($row->questionAnswer as $answer)
                     <td style="">{{$answer->answer->options}} 

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
</script>
@endsection