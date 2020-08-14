<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class DompackController extends Controller
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

      $dompack=DB::table('dompack')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.pack.index')->with('data',$dompack);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.dompack.new')->with('categories',$categories);

    return view('admin.pack.new');

    }

    public function AddDompack(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('dompack')->insert([

              'id' => $req->id,

              'image' => $path,
              'title' => $req->title,
 'link' => $req->link,
'order' => $req->order,
          ]);

          return redirect('/admin/pack');

    }

    public function Edit(Request $req,$id){

        $dompack=DB::table('dompack')->where('id',$id)->first();
        return view('/admin.pack.update')->with('data',$dompack);

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


         DB::table('dompack')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'title' => $req->title,
  'link' => $req->link,
  'order' => $req->order,
          ]);

          return redirect('/admin/pack');

    }
    public function Delete($id){

  DB::table('dompack')->where('id',$id)->delete();

          return redirect('/admin/pack');

    }

}
