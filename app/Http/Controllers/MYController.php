<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;


class MYController extends Controller
{
//      public function hello()
//     {
//         //Body or header response in api
//         // return response($name)
//         //        ->header('name',$name)
//         //        ->header('age','56')
//         //        ->header('roll','54');

//         // $name=array("refat","jubair","tanvir");//simple array
//         // $name=array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");associative array 
//        $name=array (
//         array("Volvo",22,18),
//         array("BMW",15,13),
//         array("Saab",5,2),
//         array("Land Rover",17,15)
//       );//multi dimensionl Arrays
//         return response($name);

//     }
// //redirect method 
//     public function refat(){
//         return redirect('/tanvir');

//     }

//     public function tanvir(){
//         return response('hi tanvir');
        
//     }
// // downlode method 
   
//     public function download(){
//         $location='hello.tex';
//         return response()->download($location);
//     }

    //Catch Request

     function Catch(Request $request)
    {
        return $request;
    }
   
}
