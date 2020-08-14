<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class ClientController extends Controller
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

      $client=DB::table('client')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.client.index')->with('data',$client);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.client.new')->with('categories',$categories);

    return view('admin.client.new');

    }

    public function AddClient(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('client')->insert([

              'id' => $req->id,

              'image' => $path,
              'link' => $req->link,

'order' => $req->order,
          ]);

          return redirect('/admin/client');

    }

    public function Edit(Request $req,$id){

        $client=DB::table('client')->where('id',$id)->first();
        return view('/admin.client.update')->with('data',$client);

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


         DB::table('client')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'link' => $req->link,

  'order' => $req->order,
          ]);

          return redirect('/admin/client');

    }
    public function Delete($id){

  DB::table('client')->where('id',$id)->delete();

          return redirect('/admin/client');

    }

}
