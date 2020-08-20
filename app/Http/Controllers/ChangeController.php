<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class ChangeController extends Controller
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

      $change=DB::table('change')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.change.index')->with('data',$change);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.change.new')->with('categories',$categories);

    return view('admin.change.new');

    }

    public function AddChange(Request $req){



         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('change')->insert([
'id' => $req->id,



              'title' => $req->title,
 'caption' => $req->caption,
'order' => $req->order,

          ]);

          return redirect('/admin/change');

    }

    public function Edit(Request $req,$id){

        $change=DB::table('change')->where('id',$id)->first();
        return view('/admin.change.update')->with('data',$change);

    }

    public function Update(Request $req){


      // return dd($req->all());


         DB::table('change')->where('id',$req->id)->update([

              'id' => $req->id,


             'title' => $req->title,
  'caption' => $req->caption,
  'order' => $req->order,
          ]);

          return redirect('/admin/change');

    }
    public function Delete($id){

  DB::table('change')->where('id',$id)->delete();

          return redirect('/admin/change');

    }

}
