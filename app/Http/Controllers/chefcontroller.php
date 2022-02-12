<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\chef;

class chefcontroller extends Controller
{  
     //
    /*public function cheflist()
    {
        //**view chef data from Table**

        $chef = chef::all();
        return view('cheflist')->with('chef',$chef);

        //return $chef;
        //return view('cheflist');
    }*/

    //list of chef
    public function cheflist()
    {
        $chefs = array();
        for($i=0; $i<10; $i++)
        {
            $chef = array( "id" => $i+1, "name" => "Chef ".($i+1), "food" => "Food-Type", "loc" => "Puran Dhaka");
            
            $chef = (object)$chef;
            $chefs[] = $chef;
        }

        return view('chef.cheflist')
        ->with('chef', $chefs);
    }
    
    public function creatchef()
    {
        return view('chef.creatchef');
    }
    public function getchef()
    {
        $name = 'Sazzad';
        $id = '1';
        $food = ["Bangla","Indian","Muglay","Arabian","Pakistani"];
        $location = "Puran Dhaka";

        return view('chef.getchef')
        ->with('n',$name)
        ->with('id',$id)
        ->with('loc',$location)
        ->with('food',$food);
        
    }

    public function chefdetails(Request $req)
    {
        return view('chef.getchef')
        ->with('n', $req-> name)
        ->with('id',$req-> id)
        ->with('loc',$req-> location)
        ->with('food',[]);;
       
        
    }

}
?>