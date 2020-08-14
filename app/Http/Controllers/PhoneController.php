<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class PhoneController extends Controller
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

      $phone=DB::table('phone')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.phone.index')->with('data',$phone);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.phone.new')->with('categories',$categories);

    return view('admin.phone.new');

    }

    public function AddPhone(Request $req){


         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('phone')->insert([

              'id' => $req->id,


              'number' => $req->number,

'order' => $req->order,
          ]);

          return redirect('/admin/phone');

    }

    public function Edit(Request $req,$id){

        $phone=DB::table('phone')->where('id',$id)->first();
        return view('/admin.phone.update')->with('data',$phone);

    }

    public function Update(Request $req){


      // return dd($req->all());




         DB::table('phone')->where('id',$req->id)->update([

              'id' => $req->id,


             'number' => $req->number,

 'order' => $req->order,
          ]);

          return redirect('/admin/phone');

    }
    public function Delete($id){

  DB::table('phone')->where('id',$id)->delete();

          return redirect('/admin/phone');

    }

}
