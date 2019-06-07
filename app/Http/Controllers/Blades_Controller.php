<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use App\FOLLOW;
use Session;

class Blades_Controller extends Controller
{
    
    public function main_page()
    {
         return view('welcome');
    }
    
    public function register_page()
    {
        return view('register');
    }
    
    public function profile_page(Request $pifilis)
    {   if($pifilis->id){ 

        $fol = FOLLOW::where('id_following', '=', Session::get('id'))->where('id_followed', '=', $pifilis->id)->first();
        //$userman = User::where('id_users','=',$pifilis->id)->get()->toArray();
        $userman = DB::table('users')->select()->where('id_users', $pifilis->id)->first();

        if($fol != null){
            $userman->followed='true';

            /*return response()->json([
                "mensaje" => $userman->followed,
                "status" => "error"
            ]);*/
        }
        else{
            $userman->followed='false';
            /*return response()->json([
                "mensaje" => $userman->followed,
                "status" => "error"
            ]);*/
        }

        return view('profile')->with('userman', $userman);
        //echo var_dump($userman);
        }
        else{
            return view('search');
        }

       
    }
    
    public function dashboard_page()
    {
        return view('dashboard');
    }

    public function email_template()
    {
        return view('contact');
    }

    public function search_page()
    {
        return view('search');
    }

   
}
