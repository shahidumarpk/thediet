<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DataTables;
use Auth;
use App\Question;
use App\UserInformation;
use App\QuestionOption;
use App\QuestionAnswer;
use App\User;
use App\Category;

class UserInformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(isset($request->gender) && $request->gender!='')
        {
        
        $data['question'] = Question::where('status','Active')->where('editedable','1')->get();
        $data['questionId'] = Question::where('status','Active')->where('editedable','1')->pluck('id')->toArray();
        $data['userInformation'] = UserInformation::where('status','Active')->where('gender',$request->gender)->paginate(30);

        }
        else
        {
        
        $data['question'] = Question::where('status','Active')->where('editedable','1')->get();
        $data['questionId'] = Question::where('status','Active')->where('editedable','1')->pluck('id')->toArray();
        $data['userInformation'] = UserInformation::where('status','Active')->paginate(30); 

        }
        
                            
        return view('admin.userInformation.index')->with('data',$data);
    }

   

    public function fetch(){

        $data = UserInformation::orderBy('id','desc')->get();
        return DataTables::of($data)
        ->addColumn('created_at',function($data){
            return $data->created_at->format('Y-m-d');
        })
        ->addColumn('status',function($data){
          if($data->status=='Disable') {
            return '<span class="label label-danger">Disable</span>';
          }else if($data->status=='Active'){
            return '<span class="label label-success">Active</span>';
          }
          else{
            return '<span class="label  label-primary">'.$data->status.'</span>';
          }
        })
        
       
        ->addColumn('options',function($data){
            return "&emsp;<a class='btn btn-info'
                                     href='".url('userInformation/show',$data->id)."'><i class='fa fa-eye'></i></a>
                                     ";
                                 
        })

        
        ->rawColumns(['created_at', 'status','options'])
        ->make(true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $rules = array(
    //         'question' => 'required',
    //         'question_type' => 'required',
    //     );

    //     $data = [
    //         'question' => trim($request->get('question')),
    //         'question_type' => trim($request->get('question_type')),
    //         ];
    //     $validator = Validator::make($data,$rules);
     
    // if($validator->fails())
    //    {
    //     return  response()->json(['errors'=>$validator->errors()]);
    //    }else
    //    {
    //     $user_id = Auth::user()->id;
    //         if(isset($request->edit_id) && ($request->edit_id !="") )
    //         {
            
    //         $data = Question::findOrFail($request->edit_id);
    //         $data->question = $request->question;
    //         $data->category_id = $request->category_id;
    //         $data->user_id = $user_id;
    //         $data->question_type = $request->question_type;
    //         //$data->question_order = $request->question_order;
    //         $data->status     = $request->status;
    //         $data->save(); 
    //         $success = 'Question has been updated.';
    //         return response()->json($success);
    //         }else{
    //         $data = New Question;
    //         $data->question = $request->question;
    //         $data->category_id = $request->category_id;
    //         $data->user_id = $user_id;
    //         $data->question_type = $request->question_type;
    //         //$data->question_order = $request->question_order;
    //         $data->status     = $request->status;
    //         $data->editedable     = '1';
    //         $data->save();

    //         if($data){

    //            foreach ($request->options as $key => $value) {
    //                 $options = $request['options'][$key];
    //                 $option = new QuestionOption;
    //                 $option->question_id = $data['id'];
    //                 $option->options = $options;
    //                // $option->user_id = $user_id;
    //                 $option->status = 'Active';
    //                 $option->save();
    //            }
                
    //         } 
    //         $success = 'Question has been created.';
    //         return response()->json($success);
    //        }
    //     }
    
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['userInformation'] = UserInformation::findOrFail($id);
        //$data['users']       = QuestionOption::where('status',1)->get(); 
        return view('admin.userInformation.show')->with('data',$data);
    }


     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit(Request $request)
    // {
    //   $data = Question::findOrFail($request->id);
    //   return response()->json($data);

    // }



    public function answerFetch(Request $request)
    {

       $data = QuestionAnswer::where('user_infomation_id',$request->id)->orderBy('id','desc')->get();
       return DataTables::of($data)
       ->addColumn('question_id',function($data){
            return $data->question->question;
        })
       ->addColumn('answer_id',function($data){
            return $data->answer->options;
        })
       // /questionAnswer
        // ->addColumn('status',function($data){
        //   if($data->status=='Disable') {
        //     return '<span class="label label-danger">Disable</span>';
        //   }else if($data->status=='Active'){
        //     return '<span class="label label-success">Active</span>';
        //   }
        //   else{
        //     return '<span class="label  label-primary">'.$data->status.'</span>';
        //   }
        // })
        ->addColumn('option',function($data){
            return "&emsp;<a class='btn btn-success edit'
                                     href='#' data-id='".$data->id."'><i class='fa fa-edit'></i></a>
                                     ";
        })
        ->rawColumns(['question_id','answer_id','option'])
        ->make(true);
    }

    
    //  public function optionStore(Request $request)
    // {
    //    $rules = array(
    //     'options' => 'required',
    //    );

    //   $data = [
    //         'options' => trim($request->get('options')),
    //         'options' => $request->get('options'),
    //         ];

        
        
    // $validator = Validator::make($data,$rules);
     
    // if($validator->fails())
    // {

    //   return  response()->json(['errors'=>$validator->errors()]);
    // }
    // else 
    // {
    //     $user = Auth::user()->id;
    //     if(isset($request->edit_id) && ($request->edit_id !="") )
    //     {
            
    //     $data = QuestionOption::findOrFail($request->edit_id);
    //     $data->user_id = $user;
    //     $data->question_id = $request->question_id;
    //     $data->options     = $request->options;
    //     $data->status        = $request->status;
    //     $success = 'Option has been updated.';
    //     $data->save();
    //     }else{
    //     $data = New QuestionOption;
    //     $data->user_id = $user;
    //     $data->question_id = $request->question_id;
    //     $data->options     = $request->options;
    //     $data->status        = $request->status;
    //     $data->save();
    //     $success = 'Option has been created.';
    //     }
        
    //     return response()->json($success);
       
    // }
    
    // }


    // public function optionEdit(Request $request)
    // {
    //   $data = QuestionOption::findOrFail($request->id);
    //   return response()->json($data);

    // }

   

   
}
