<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chef;

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