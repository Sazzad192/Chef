<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class pagescontroller extends Controller

{
    //<!-- Home page -->

    public function index()
    {
        return view ('index');
    } 

    //<!-- Login page -->
    public function login()
    {
        return view ('login');
    } 

    // --------login page submit---------
    public function loginsubmit(Request $req)
    {
        // request class validation function can allow associative array
        $req->validate(
            [
                'email'=>'required|email',
                'psw'=>'required'
            ]
        );

        $st = User::where('email', $req->email)->where('psw', $req->pass)->first();
        if($st)
        {
            // session()->put('logged',$st->fname);
            return redirect()->route('home');
        }
        else{
            session()->flash('msg','Email or password dose not exsist');
            return redirect()->route('login');
        }
        // return " <center><h1> $req->uname, Welcome to Je-Radhe </h1></center>";
    }

    public function regsubmit(Request $request)
    {
        $request->validate(     
            [
                'fname'=>'required|min:3',
                'lname'=>'required',
                //'gender'=>'required',
                'pnumber'=>'required|min:11|max:11',
                'email'=>'required|email',
                //'date'=>'required',
                'psw'=>'required|',
                'conpsw'=>'required|same:psw'
            ]);

            $st = new User();

            $st->fname = $request->fname;
            $st->lname = $request->lname;
            $st->gender = $request->gender;
            // $st->dob = $request->dob;
            $st->email = $request->email;
            $st->pnumber = $request->pnumber;
            $st->psw = $request->psw;
            $st->conpsw = $request->conpsw;

            $st->save();             //query will execute for save.
            session()->flash('msg','Registration successful, Please login!!');
            return redirect()->route('login'); 

        // return " <center> You are most Welcome $request->fname, $request->lname, This is Je-Radhe </center> ";
    }

    //<!-- Registration page -->
    public function reg()
    {
        return view ('reg');
    }

    //<!-- All package page1 -->
    public function package()
    {
        return view ('allpackage');
    } 

    //<!-- booking page -->
    public function bookingprocess()
    {
        return view ('bookingprocess');
    } 

    //<!-- after booking suggested chef page -->
    public function suggestedchef()
    {
        return view ('suggestedchef');
    } 

    //<!-- chef list page -->
   
   
   // <!-- order confirmation page -->
    public function orderconfirm()
    {
        return view ('confirmorder');
    } 

    //<!-- Invoice page -->
    public function invoice()
    {
        return view ('invoice');
    } 

    //<!-- payment page -->
    public function payment()
    {
        return view ('payment');
    } 

    //<!-- Myprofile page -->
    public function myProfile()
    {
        return view ('myprofile');
    }

    //<!-- Chefprofile page -->
    public function chefProfile()
    {
        return view ('chefprofile');
    } 
    public function calender()
    {
        $date = "1-March-2022";
        $stime= "4:20 am";
        $etime= "6:00pm";
        return view('office.calender')
        ->with('date',$date)
        ->with('stime', $stime)
        ->with('etime',$etime);
    }
}