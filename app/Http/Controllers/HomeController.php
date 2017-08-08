<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Redirect;
use App\infrasurvey;
use App\feedbacksurvey;
use App\facilitysurvey;

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
        return view('home');
    }

      public function dashboard()
    {
        return view('dashboard');
    }

    public function infra()
    {
         $id = Auth::user();
        $id = $id['attributes'];
        $check = infrasurvey::where('email',$id['email'])->first();
        if($check)
        {
          $flag = 1;
        }
        else
        {
          $flag= 0;
        }
        return view('infra')->with('flag',$flag);
    }
      public function facility()
    {
            $id = Auth::user();
        $id = $id['attributes'];
        $check = facilitysurvey::where('email',$id['email'])->first();
        if($check)
        {
          $flag = 1;
        }
        else
        {
          $flag= 0;
        }
        return view('facility')->with('flag',$flag);
    }
      public function feedback()
    {
            $id = Auth::user();
        $id = $id['attributes'];
        $check = feedbacksurvey::where('email',$id['email'])->first();
        if($check)
        {
          $flag = 1;
        }
        else
        {
          $flag= 0;
        }
        return view('feedback')->with('flag',$flag);
    }
  public function infrasurvey(Request $request)
    {
        $id = Auth::user();
        $id = $id['attributes'];
       $data = $request->all();
      
$rank = ['Poor','Fair','Good','Very Good','Excellent'];
 // dd($data,$id,$rank[(int)$data['question1']-1]);
infrasurvey::create([
'name'=>ucwords($id['name']),
'email'=>$id['email'],
'empno'=>$id['empno'],
'location'=>$id['location'],
'department'=>$id['department'],
'state'=>$id['state'],
'question1'=>$rank[(int)$data['question1']-1],
'remark1'=>ucwords($data['remark1']),
'question2'=>$rank[(int)$data['question2']-1],
'remark2'=>ucwords($data['remark2']),
'question3'=>$rank[(int)$data['question3']-1],
'remark3'=>ucwords($data['remark3']),
'question4'=>$rank[(int)$data['question4']-1],
'remark4'=>ucwords($data['remark4']),
'question5'=>$rank[(int)$data['question5']-1],
'remark5'=>ucwords($data['remark5']),
'question6'=>$rank[(int)$data['question6']-1],
'remark6'=>ucwords($data['remark6']),
'question7'=>$rank[(int)$data['question7']-1],
'remark7'=>ucwords($data['remark7']),
'question8'=>$rank[(int)$data['question8']-1],
'remark8'=>ucwords($data['remark8']),
'question9'=>$rank[(int)$data['question9']-1],
'remark9'=>ucwords($data['remark9']),
'suggestion1'=>$data['suggestion1'],
'suggestion2'=>$data['suggestion2'],
'suggestion3'=>$data['suggestion3']
    ]);
 Session::flash('message', 'Thanks For completing the survey .');
return Redirect::back();
    }
      public function facilitysurvey(Request $request)
    {
         $id = Auth::user();
        $id = $id['attributes'];
       $data = $request->all();
      
$rank = ['Poor','Fair','Good','Very Good','Excellent'];
 // dd($data,$id,$rank[(int)$data['question1']-1]);
facilitysurvey::create([
'name'=>ucwords($id['name']),
'email'=>$id['email'],
'empno'=>$id['empno'],
'location'=>$id['location'],
'department'=>$id['department'],
'state'=>$id['state'],
'question1'=>$rank[(int)$data['question1']-1],
'remark1'=>ucwords($data['remark1']),
'question2'=>$rank[(int)$data['question2']-1],
'remark2'=>ucwords($data['remark2']),
'question3'=>$rank[(int)$data['question3']-1],
'remark3'=>ucwords($data['remark3']),
'question4'=>$rank[(int)$data['question4']-1],
'remark4'=>ucwords($data['remark4']),
'question5'=>$rank[(int)$data['question5']-1],
'remark5'=>ucwords($data['remark5']),
'question6'=>$rank[(int)$data['question6']-1],
'remark6'=>ucwords($data['remark6']),
'question7'=>$rank[(int)$data['question7']-1],
'remark7'=>ucwords($data['remark7']),
'question8'=>$rank[(int)$data['question8']-1],
'remark8'=>ucwords($data['remark8']),
'question9'=>$rank[(int)$data['question9']-1],
'remark9'=>ucwords($data['remark9']),
'question10'=>$rank[(int)$data['question10']-1],
'remark10'=>ucwords($data['remark10']),
'suggestion1'=>$data['suggestion1'],
'suggestion2'=>$data['suggestion2'],
'suggestion3'=>$data['suggestion3']
    ]);
 Session::flash('message', 'Thanks For completing the survey .');
return Redirect::back();
    }
      public function feedbacksurvey(Request $request)
    {
         $id = Auth::user();
        $id = $id['attributes'];
       $data = $request->all();
      
$rank = ['Poor','Fair','Good','Very Good','Excellent'];
 // dd($data,$id,$rank[(int)$data['question1']-1]);
feedbacksurvey::create([
'name'=>ucwords($id['name']),
'email'=>$id['email'],
'empno'=>$id['empno'],
'location'=>$id['location'],
'department'=>$id['department'],
'state'=>$id['state'],
'question1'=>$rank[(int)$data['question1']-1],
'remark1'=>ucwords($data['remark1']),
'question2'=>$rank[(int)$data['question2']-1],
'remark2'=>ucwords($data['remark2']),
'question3'=>$rank[(int)$data['question3']-1],
'remark3'=>ucwords($data['remark3']),
'question4'=>$rank[(int)$data['question4']-1],
'remark4'=>ucwords($data['remark4']),
'question5'=>$rank[(int)$data['question5']-1],
'remark5'=>ucwords($data['remark5']),
'question6'=>$rank[(int)$data['question6']-1],
'remark6'=>ucwords($data['remark6']),
'suggestion1'=>$data['suggestion1'],
'suggestion2'=>$data['suggestion2'],
'suggestion3'=>$data['suggestion3']
    ]);
 Session::flash('message', 'Thanks For completing the survey .');
return Redirect::back();
    }


}
