<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('role:superadministrator');
    }

    public function index(){

      $user=DB::table('user_details')->where('deleted_at',null)->get();

      return view('admin.user_details.index')->with('data',$user);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.user.new')->with('categories',$categories);

    return view('admin.user_details.new');

    }

    public function AddUser(Request $req){



         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('user_details')->insert([


              'name' => $req->name,
 'email' => $req->email,

          ]);

          return redirect('/admin/user_details');

    }

    public function Edit(Request $req,$id){

        $user=DB::table('user_details')->where('id',$id)->first();
        return view('/admin.user_details.update')->with('data',$user);

    }

    public function Update(Request $req){


      // return dd($req->all());


         DB::table('user_details')->where('id',$req->id)->update([

              'id' => $req->id,


             'name' => $req->name,
'email' => $req->email,
          ]);

          return redirect('/admin/user_details');

    }
    public function Delete($id){

  DB::table('user_details')->where('id',$id)->delete();

          return redirect('/admin/user_details');

    }

}
