<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class BgController extends Controller
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

      $bg=DB::table('bg')->where('deleted_at',null)->get();

      return view('admin.bg.index')->with('data',$bg);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.bg.new')->with('categories',$categories);

    return view('admin.bg.new');

    }

    public function AddBg(Request $req){

      $imagea=$req->imagea;

              $patha="banner/".Str::random(15).".".$imagea->getClientOriginalExtension();
              $imga = Image::make($imagea);
              $imga->save($patha);
              $imageb=$req->imageb;

                            if($imageb!=''){
                     $pathb="banner/".Str::random(15).".".$imageb->getClientOriginalExtension();
                     $imgb = Image::make($imageb);
                     $imgb->save($pathb);}

                     $imagec=$req->imagec;

                                   if($imagec!=''){
                            $pathc="banner/".Str::random(15).".".$imagec->getClientOriginalExtension();
                            $imgc = Image::make($imagec);
                            $imgc->save($pathc);}

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('bg')->insert([

              'id' => $req->id,

              'imagea' => $patha,
'imageb' => $pathb,
'imagec' => $pathc,
          ]);

          return redirect('/admin/bg');

    }

    public function Edit(Request $req,$id){

        $bg=DB::table('bg')->where('id',$id)->first();
        return view('/admin.bg.update')->with('data',$bg);

    }

    public function Update(Request $req){


      // return dd($req->all());

      $old_imagea=$req->old_imagea;
      $patha=$old_imagea;
      $imagea=$req->imagea;

           if($imagea!=''){

              $patha="banner/".Str::random(15).".".$imagea->getClientOriginalExtension();
              $imga = Image::make($imagea);
              $imga->save($patha);
              if(File::exists($old_imagea)){
                File::delete($old_imagea);
              }

            }
            $old_imageb=$req->old_imageb;
          $pathb=$old_imageb;
          $imageb=$req->imageb;

                if($imageb!=''){

                   $pathb="banner/".Str::random(15).".".$imageb->getClientOriginalExtension();
                   $imgb = Image::make($imageb);
                   $imgb->save($pathb);
                   if(File::exists($old_imageb)){
                     File::delete($old_imageb);
                   }

                 }
                 $old_imagec=$req->old_imagec;
               $pathc=$old_imagec;
               $imagec=$req->imagec;

                     if($imagec!=''){

                        $pathc="banner/".Str::random(15).".".$imagec->getClientOriginalExtension();
                        $imgc = Image::make($imagec);
                        $imgc->save($pathc);
                        if(File::exists($old_imagec)){
                          File::delete($old_imagec);
                        }

                      }
         DB::table('bg')->where('id',$req->id)->update([

              'id' => $req->id,

             'imagea' => $patha,
            'imageb' => $pathb,
            'imagec' => $pathc,
          ]);

          return redirect('/admin/bg');

    }
    public function Delete($id){

  DB::table('bg')->where('id',$id)->delete();

          return redirect('/admin/bg');

    }

}
