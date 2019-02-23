<?php

namespace App\Http\Controllers\Admin;

use App\Testimonial;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DataTables;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use URL;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.testimonial.index');
    }

   

    public function fetch(){

        $data = Testimonial::orderBy('id','desc')->get();
        return DataTables::of($data)
        ->addColumn('created_at',function($data){
            return $data->created_at->format('Y-m-d');
        })
        ->addColumn('image',function($data){
          $imageUrl = asset('storage/app/public/testimonial/'.$data->image);
            return $imageUrl;
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
            if($data->status=='Active'){
            return "&emsp;<a class='btn btn-success edit_model'
                                     href='#' data-id='".$data->id."'><i class='fa fa-edit'></i></a>
                                     <a data-toggle='tooltip' data-placement='bottom' title='Disable' class='btn btn-danger disable' data-original-title='Disable' href='#' data-id='".$data->id."'><i class='fa fa-close'></i></a>
                                     ";
            }else if($data->status=='Disable'){
             return "&emsp;<a class='btn btn-success edit_model'
                                     href='#' data-id='".$data->id."'><i class='fa fa-edit'></i></a>
                                     <a data-toggle='tooltip' data-placement='bottom' title='Active' class='btn btn-success active' data-original-title='Active' href='#' data-id='".$data->id."'><i class='fa fa-check'></i></a>
                                     "; 
            }                         
        })
     
        ->rawColumns(['image','created_at', 'status','options'])
        ->make(true);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
          $rules = array(
            'title' => 'required',
            'description' => 'required',
        );

        $data = [
            'title' => trim($request->get('title')),
            'description' => trim($request->get('description')),
            ];
        $validator = Validator::make($data,$rules);
     
    if($validator->fails())
       {
        return  response()->json(['errors'=>$validator->errors()]);
       }else
       {
        $user_id = Auth::user()->id;

          
            
            if(isset($request->edit_id) && ($request->edit_id !="") )
            {
            
            $data = Testimonial::findOrFail($request->edit_id);
            $data->title = $request->title;
            $data->description = $request->description;
            $data->title = $request->title;
            $data->user_id = $user_id;
            if($request->hasfile('image'))
             {
              $file = $request->file('image');
              $image  = time().$file->getClientOriginalName();
              Storage::disk('public')->put('testimonial/'.$image,  File::get($file));
              $data->image     = $image;
             }
            $data->save(); 
            $success = 'Testimonial has been updated.';
            return response()->json($success);
            }else{

            $data = New Testimonial;
            $data->title = $request->title;
            $data->description = $request->description;
            $data->title = $request->title;
            $data->user_id = $user_id;
            if($request->hasfile('image'))
             {
              $file = $request->file('image');
              $image  = time().$file->getClientOriginalName();
              Storage::disk('public')->put('testimonial/'.$image,  File::get($file));
              $data->image     = $image;
             }
            $data->save();
            $success = 'Testimonial has been created.';
            return response()->json($success);
           }
        }
    
    }

    
    public function edit(Request $request)
    {
      $data = Testimonial::findOrFail($request->id);
      return response()->json($data);

    }


    public function testimonialActive(Request $request)
    {
      $data = Testimonial::findOrFail($request->id);
      $data->status = 'Active';
      $data->save();
      $message = 'Successfully Active.';
      return response()->json($message);

    }
     

    public function testimonialDisable(Request $request)
    {
      $data = Testimonial::findOrFail($request->id);
      $data->status = 'Disable';
      $data->save();
      $message = 'Successfully Disable.';
      return response()->json($message);

    }

   
}
