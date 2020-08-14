<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class EmailController extends Controller
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

      $email=DB::table('email')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.email.index')->with('data',$email);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.email.new')->with('categories',$categories);

    return view('admin.email.new');

    }

    public function AddEmail(Request $req){


         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('email')->insert([

              'id' => $req->id,


              'number' => $req->number,

'order' => $req->order,
          ]);

          return redirect('/admin/email');

    }

    public function Edit(Request $req,$id){

        $email=DB::table('email')->where('id',$id)->first();
        return view('/admin.email.update')->with('data',$email);

    }

    public function Update(Request $req){


      // return dd($req->all());




         DB::table('email')->where('id',$req->id)->update([

              'id' => $req->id,


             'number' => $req->number,

 'order' => $req->order,
          ]);

          return redirect('/admin/email');

    }
    public function Delete($id){

  DB::table('email')->where('id',$id)->delete();

          return redirect('/admin/email');

    }

}
