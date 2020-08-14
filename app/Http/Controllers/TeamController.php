<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class TeamController extends Controller
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

      $team=DB::table('team')->where('deleted_at',null)->orderBy('order')->get();

      return view('admin.team.index')->with('data',$team);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.team.new')->with('categories',$categories);

    return view('admin.team.new');

    }

    public function AddTeam(Request $req){

      $image=$req->image;

              $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
              $img = Image::make($image);
              $img->save($path);

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('team')->insert([

              'id' => $req->id,

              'image' => $path,
              'name' => $req->name,
 'job' => $req->job,
'order' => $req->order,
          ]);

          return redirect('/admin/team');

    }

    public function Edit(Request $req,$id){

        $team=DB::table('team')->where('id',$id)->first();
        return view('/admin.team.update')->with('data',$team);

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


         DB::table('team')->where('id',$req->id)->update([

              'id' => $req->id,

             'image' => $path,
             'name' => $req->name,
'job' => $req->job,
  'order' => $req->order,
          ]);

          return redirect('/admin/team');

    }
    public function Delete($id){

  DB::table('team')->where('id',$id)->delete();

          return redirect('/admin/team');

    }

}
