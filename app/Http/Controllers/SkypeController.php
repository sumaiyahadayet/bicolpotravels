<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class SkypeController extends Controller
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

      $skype=DB::table('skype')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.skype.index')->with('data',$skype);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.skype.new')->with('categories',$categories);

    return view('admin.skype.new');

    }

    public function Addskype(Request $req){


         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('skype')->insert([

              'id' => $req->id,


              'number' => $req->number,

'order' => $req->order,
          ]);

          return redirect('/admin/skype');

    }

    public function Edit(Request $req,$id){

        $skype=DB::table('skype')->where('id',$id)->first();
        return view('/admin.skype.update')->with('data',$skype);

    }

    public function Update(Request $req){


      // return dd($req->all());




         DB::table('skype')->where('id',$req->id)->update([

              'id' => $req->id,


             'number' => $req->number,

 'order' => $req->order,
          ]);

          return redirect('/admin/skype');

    }
    public function Delete($id){

  DB::table('skype')->where('id',$id)->delete();

          return redirect('/admin/skype');

    }

}
