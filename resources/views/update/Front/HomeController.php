<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use App\Question;
use App\UserInformation;
use App\QuestionOption;
use App\QuestionAnswer;


class HomeController extends Controller
{
    /**
     * Display a home of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $testimonials = Testimonial::where('status','Active')->get();
        $questions     = Question::where('editedable','1')->get();
        $fixQuestions     = Question::where('editedable','0')->get();
        return view('front.index')->with('testimonials',$testimonials)
                                  ->with('questions',$questions)
                                  ->with('fixQuestions',$fixQuestions);
    }

    /**
     * Display a faq of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function faq()
    {
        return view('front.faq');
    }

    /**
     * Display a general_condition of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function general_conditions()
    {
        return view('front.general_conditions');
    }


    /**
     * Display a protection_policy of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function protection_policy()
    {
        return view('front.protection_policy');
    }


    /**
     * Display a contact_us of the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function contact_us()
    {
        return view('front.contact_us');
    }

    public function front_form(Request $request)
    {
       //print_r($request->all());exit(); 
         $data                = new UserInformation;
         $data->gender        = $request->gender;
         $data->name          = $request->name;
         $data->email         = $request->email;
         $data->age           = $request->age;
         $data->weight        = $request->weight;
         $data->target_weight = $request->target_weight;
         $data->height        = $request->height;
         $data->status        = 'Active';
         $data->save();
        //meal_preparation_time
       foreach ($request->all() as $key => $value) {
          if($key!='gender' && $key!='name' && $key!='email' && $key!='age' && $key!='weight' && $key!='target_weight' && $key!='height' && $key!='_token'){

            $question = explode("_", $key);
            //$questions = $question[0];
            $checking = $question[1];
            if(isset($question[2])){
              $questionId = $question[2];  
              }else{
                $questionId = ''; 
              }
            $ans =   new  QuestionAnswer;
            
            $ans->user_infomation_id = $data->id;
            
            if($checking=='radio'){
                $ans->question_id = $questionId;
                $ans->answer_id = $value;
            }

            if($checking=='checkbox'){
                
                $ans->question_id = $questionId;
                $checkbox = implode(",", $value);
                $ans->answer_id = $checkbox;
            }

            $ans->save();
            
          }

       }
       
        
        $success['MESSAGE'] = 'Home Page has been updated';
        $success['REDIRECT'] = route('health',$data->id);
        return response()->json($success);
        //return redirect()->route('health',$data->id);
    }

    public function health($id)
    {

        $data = UserInformation::findOrFail($id);
        return view('front.health')->with('data',$data);
    }
   
}
