<?php

namespace App\Http\Controllers\Admin;

use App\SiteConfig;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DataTables;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use URL;

class SiteConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $data = SiteConfig::findOrFail(1);
        return view('admin.siteConfig.index')->with('data',$data);
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
            'title_1' => 'required',
            'title_2' => 'required',
            'feedback_title' => 'required',
            'feedback_description' => 'required',
            'address' => 'required',
            'phone_1' => 'required',
            'phone_2' => 'required',
        );

        $data = [
            'title_1' => trim($request->get('title_1')),
            'title_2' => trim($request->get('title_2')),
            'feedback_title' => trim($request->get('feedback_title')),
            'feedback_description' => trim($request->get('feedback_description')),
            'address' => trim($request->get('address')),
            'phone_1' => trim($request->get('phone_1')),
            'phone_2' => trim($request->get('phone_2')),
            ];
        $validator = Validator::make($data,$rules);
     
    if($validator->fails())
       {
        return  response()->json(['errors'=>$validator->errors()]);
       }else
       {
        $user_id = Auth::user()->id;

         
        $general_condition = str_ireplace(array("\r","\n",'\r','\n'),'', $request->general_condition);
        $protection_policy = str_ireplace(array("\r","\n",'\r','\n'),'', $request->protection_policy);
        $contact_us = str_ireplace(array("\r","\n",'\r','\n'),'', $request->contact_us);

            $data = SiteConfig::findOrFail(1);
            $data->title_1 = $request->title_1;
            $data->title_2 = $request->title_2;
            $data->feedback_title = $request->feedback_title;
            $data->feedback_description = $request->feedback_description;
            $data->address = $request->address;
            $data->phone_1 = $request->phone_1;
            $data->phone_2 = $request->phone_2;
            $data->faq_text = $request->faq_text;
            $data->general_condition = $general_condition;
            $data->protection_policy = $protection_policy;
            $data->contact_us = $contact_us;
            $data->user_id = $user_id;
            if($request->hasfile('logo'))
             {
              $file = $request->file('logo');
              $image  = time().$file->getClientOriginalName();
              Storage::disk('public')->put('page/'.$image,  File::get($file));
              $data->logo     = $image;
             }
            $data->save(); 
           // $success = 'Home Page has been updated.';
            $success['MESSAGE'] = 'Data saved';
            $success['REDIRECT'] = route('configIndex.index');
            return response()->json($success);
            
        }
    
    }

  
   
}
