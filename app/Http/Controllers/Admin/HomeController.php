<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use DB;
use DateTime;
use DatePeriod;
use DateInterval;
use Calendar;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Question;
use App\UserInformation;
use App\QuestionOption;
use App\QuestionAnswer;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('dashboard');
        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
       
        $date1 = date('Y-m-d', strtotime('-10 days'));
        $date2 = date('Y-m-d');
        $period = new DatePeriod(new DateTime($date1), new DateInterval('P1D'), new DateTime($date2));
        foreach ($period as $date) {
            $dates[] = $date->format("Y-m-d");
        }

        $data['question'] = Question::where('status','Active')->where('editedable','1')->get();
        $data['questionId'] = Question::where('status','Active')->where('editedable','1')->pluck('id')->toArray();
        $data['userInformation'] = UserInformation::where('status','Active')->paginate(15);

        return view('admin.home.dashboard')->with('data',$data);
        
    }
}
