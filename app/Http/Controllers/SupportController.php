<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class SupportController extends Controller
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

      $support=DB::table('support')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.support.index')->with('data',$support);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.support.new')->with('categories',$categories);

    return view('admin.support.new');

    }

    public function AddSupport(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('support')->insert([

              'id' => $req->id,

              'image' => $path,
              'title' => $req->title,
 'description' => $req->description,
 'descriptionb' => $req->descriptionb,
 'type' => $req->type,
'order' => $req->order,
          ]);

          return redirect('/admin/support');

    }

    public function Edit(Request $req,$id){

        $support=DB::table('support')->where('id',$id)->first();
        return view('/admin.support.update')->with('data',$support);

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


         DB::table('support')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'title' => $req->title,
             'description' => $req->description,
             'descriptionb' => $req->descriptionb,
             'type' => $req->type,
  'order' => $req->order,
          ]);

          return redirect('/admin/support');

    }
    public function Delete($id){

  DB::table('support')->where('id',$id)->delete();

          return redirect('/admin/support');

    }

}
