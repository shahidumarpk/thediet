<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Testimonial;
use App\Question;
use App\UserInformation;
use App\QuestionOption;


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
        $questions     = Question::where('status','Active')->get();
        return view('front.index')->with('testimonials',$testimonials)
                                  ->with('questions',$questions);
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
        // dd($request->all());
         $data                = new UserInformation;
         $data->gender        = $request->gender;
         $data->name          = $request->name;
         $data->email         = $request->email;
         $data->age           = $request->age;
         $data->weight        = $request->weight;
         $data->target_weight = $request->target_weight;
         $data->height        = $request->height;
         $data->status        = 'Active';
        //meal_preparation_time
        $meals = $request->meal_preparation_time;
        $mealsoption='';
        foreach ($meals as  $meal) {
            if($meal !=''){
                $mealsfind = QuestionOption::findOrFail($meal);
                $mealsoption .= $mealsfind->options.',';
            }
        }

        $mealsoptionRtrim = rtrim($mealsoption,',');
        $data->meal_preparation_time        = $mealsoptionRtrim;

         //meat_product_include
        $meats = $request->meat_product_include;
        $meatsoption='';
        foreach ($meats as  $meat) {
            if($meat !=''){
                $meatsfind = QuestionOption::findOrFail($meat);
                $meatsoption .= $meatsfind->options.',';
            }
        }

        $meatsoptionRtrim = rtrim($meatsoption,',');
        $data->meat_product_include        = $meatsoptionRtrim;

         //products_include
        $products = $request->products_include;
        $productsoption='';
        foreach ($products as  $product) {
            if($product !=''){
                $productsfind = QuestionOption::findOrFail($product);
                $productsoption .= $mealsfind->options.',';
            }
        }

        $productsoptionRtrim = rtrim($productsoption,',');
        $data->products_include        = $productsoptionRtrim; 

        //physically_active
        $physically       = $request->physically_active;
        $physicallyfind   = QuestionOption::findOrFail($physically);
        $physicallyoption = $physicallyfind->options;
        $data->physically_active        = $physicallyoption; 
        
        //familiar_Keto_diet
        $familiar       = $request->familiar_Keto_diet;
        $familiarfind   = QuestionOption::findOrFail($familiar);
        $familiaroption = $familiarfind->options;
        $data->familiar_Keto_diet        = $familiaroption;

        //willing_lose_weight
        $willing       = $request->willing_lose_weight;
        $willingfind   = QuestionOption::findOrFail($willing);
        $willingoption = $willingfind->options;
        $data->willing_lose_weight        = $willingoption;
        $data->save();

        return redirect()->route('health',$data->id);
    }

    public function health($id)
    {
        return view('front.health');
    }
   
}
