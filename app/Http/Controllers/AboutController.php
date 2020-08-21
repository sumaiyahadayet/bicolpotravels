<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class AboutController extends Controller
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

      $about=DB::table('about')->where('deleted_at',null)->get();

      return view('admin.about.index')->with('data',$about);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.about.new')->with('categories',$categories);

    return view('admin.about.new');

    }

    public function AddAbout(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('about')->insert([

              'id' => $req->id,

              'image' => $path,
                'created_at' => $req->created_at

          ]);

          return redirect('/admin/about');

    }

    public function Edit(Request $req,$id){

        $about=DB::table('about')->where('id',$id)->first();
        return view('/admin.about.update')->with('data',$about);

    }

    public function Update(Request $req){


      // return dd($req->all());

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


         DB::table('about')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'created_at' => $req->created_at

          ]);

          return redirect('/admin/about');

    }
    public function Delete($id){

  DB::table('about')->where('id',$id)->delete();

          return redirect('/admin/about');

    }

}
