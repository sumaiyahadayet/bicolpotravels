<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class ChangeiController extends Controller
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

      $change=DB::table('changei')->where('deleted_at',null)->get();

      return view('admin.change.index')->with('data',$change);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.change.new')->with('categories',$categories);

    return view('admin.change.new2');

    }

    public function AddChangei(Request $req){


         $image=$req->image;

                 $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
                 $img = Image::make($image);
                 $img->save($path);
         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('changei')->insert([


'image' => $path,

          ]);

          return redirect('/admin/change');

    }

    public function Edit(Request $req,$id){

        $change=DB::table('changei')->where('id',$id)->first();
        return view('/admin.change.update2')->with('data',$change);

    }

    public function Update(Request $req){
         $old_image=$req->old_image;
        $path=$old_image;
        $image=$req->image;

              if($image!=''){

                 $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
                 $img = Image::make($image);
                 $img->save($path);
                 if(File::exists($old_image)){
                   File::delete($old_image);
                 }

               }

      // return dd($req->all());


         DB::table('change')->where('id',$req->id)->update([

              'id' => $req->id,
'image' => $path,


          ]);

          return redirect('/admin/change');

    }
    public function Delete($id){

  DB::table('changei')->where('id',$id)->delete();

          return redirect('/admin/change');

    }

}
