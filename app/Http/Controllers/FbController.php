<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class FbController extends Controller
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

      $fb=DB::table('fb')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.fb.index')->with('data',$fb);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.fb.new')->with('categories',$categories);

    return view('admin.fb.new');

    }

    public function AddFb(Request $req){


         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('fb')->insert([

              'id' => $req->id,


              'number' => $req->number,

'order' => $req->order,
          ]);

          return redirect('/admin/fb');

    }

    public function Edit(Request $req,$id){

        $fb=DB::table('fb')->where('id',$id)->first();
        return view('/admin.fb.update')->with('data',$fb);

    }

    public function Update(Request $req){


      // return dd($req->all());




         DB::table('fb')->where('id',$req->id)->update([

              'id' => $req->id,


             'number' => $req->number,

 'order' => $req->order,
          ]);

          return redirect('/admin/fb');

    }
    public function Delete($id){

  DB::table('fb')->where('id',$id)->delete();

          return redirect('/admin/fb');

    }

}
