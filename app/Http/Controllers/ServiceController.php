<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class ServiceController extends Controller
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

      $service=DB::table('service')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.service.index')->with('data',$service);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.service.new')->with('categories',$categories);

    return view('admin.service.new');

    }

    public function AddService(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('service')->insert([

              'id' => $req->id,

              'image' => $path,
              'title' => $req->title,
 'description' => $req->description,
'order' => $req->order,
          ]);

          return redirect('/admin/service');

    }

    public function Edit(Request $req,$id){

        $service=DB::table('service')->where('id',$id)->first();
        return view('/admin.service.update')->with('data',$service);

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


         DB::table('service')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'title' => $req->title,
  'description' => $req->description,
  'order' => $req->order,
          ]);

          return redirect('/admin/service');

    }
    public function Delete($id){

  DB::table('service')->where('id',$id)->delete();

          return redirect('/admin/service');

    }

}
