<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class OfferController extends Controller
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

      $offer=DB::table('offer')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.event.index')->with('offer',$offer);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.offer.new')->with('categories',$categories);

    return view('admin.event.new2');

    }

    public function AddOffer(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('offer')->insert([

              'id' => $req->id,

              'image' => $path,
              'title' => $req->title,
 'description' => $req->description,
'order' => $req->order,
          ]);

          return redirect('/admin/event');

    }

    public function Edit(Request $req,$id){

        $offer=DB::table('offer')->where('id',$id)->first();
        return view('/admin.event.update2')->with('data2',$offer);

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


         DB::table('offer')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'title' => $req->title,
  'description' => $req->description,
  'order' => $req->order,
          ]);

          return redirect('/admin/event');

    }
    public function Delete($id){

  DB::table('offer')->where('id',$id)->delete();

          return redirect('/admin/event');

    }

}
