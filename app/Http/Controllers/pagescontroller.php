<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

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
        // request class validation function can allow associative arrow
        $req->validate(
            [
                'uname'=>'required|min:3',
                'psw'=>'required'
            ]
        );
        return " <center><h1> $req->uname, Welcome to Je-Radhe </h1></center>";
    }

    public function regsubmit(Request $req)
    {
        $req->validate(     
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

            $st = new user();

            $st->name = $req->fname;
            $st->name = $req->lname;
            $st->name = $req->gender;
            $st->name = $req->dob;
            $st->name = $req->email;
            $st->name = $req->pnumber;
            $st->name = $req->psw;
            $st->name = $req->conpsw;
            $st->save();              //query will execute for save.

        return " <center> You are most Welcome $req->fname, $req->lname, This is Je-Radhe </center> ";
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
}