<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use DB;

class Sendmail2Controller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('role:user');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

        public function Delete($email){

      DB::table('user_details')->where('email',$email)->delete();



                    DB::table('group1')->where('email',$email)->delete();


                            DB::table('group2')->where('email',$email)->delete();


                                   DB::table('group3')->where('email',$email)->delete();


                                           DB::table('group4')->where('email',$email)->delete();


                                                   DB::table('group5')->where('email',$email)->delete();


                                                          DB::table('group6')->where('email',$email)->delete();

                                                                 return view('unsubscribe')->with('success', 'successfully unsubscribed');
        }

}
