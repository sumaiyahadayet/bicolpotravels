<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class BannerController extends Controller
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

      $banner=DB::table('banner')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.banner.index')->with('data',$banner);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.banner.new')->with('categories',$categories);

    return view('admin.banner.new');

    }

    public function AddBanner(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('banner')->insert([

              'id' => $req->id,

              'image' => $path,
              'title' => $req->title,
 'caption' => $req->caption,
'order' => $req->order,
          ]);

          return redirect('/admin/banner');

    }

    public function Edit(Request $req,$id){

        $banner=DB::table('banner')->where('id',$id)->first();
        return view('/admin.banner.update')->with('data',$banner);

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


         DB::table('banner')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'title' => $req->title,
  'caption' => $req->caption,
  'order' => $req->order,
          ]);

          return redirect('/admin/banner');

    }
    public function Delete($id){

  DB::table('banner')->where('id',$id)->delete();

          return redirect('/admin/banner');

    }

}
