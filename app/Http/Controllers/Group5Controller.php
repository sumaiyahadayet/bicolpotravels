<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class Group5Controller extends Controller
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

      $user=DB::table('group5')->where('deleted_at',null)->get();

      return view('admin.group5.index')->with('data',$user);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.user.new')->with('categories',$categories);

    return view('admin.group5.new');

    }

    public function AddGroup5(Request $req){



         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('group5')->insert([


              'name' => $req->name,
 'email' => $req->email,

          ]);

          return redirect('/admin/group5');

    }

    public function Edit(Request $req,$id){

        $user=DB::table('group5')->where('id',$id)->first();
        return view('/admin.group5.update')->with('data',$user);

    }

    public function Update(Request $req){


      // return dd($req->all());


         DB::table('group5')->where('id',$req->id)->update([

              'id' => $req->id,


             'name' => $req->name,
'email' => $req->email,
          ]);

          return redirect('/admin/group5');

    }
    public function Delete($id){

  DB::table('group5')->where('id',$id)->delete();

          return redirect('/admin/group5');

    }

}
