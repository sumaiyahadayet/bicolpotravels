<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use Intervention\Image\Facades\Image;
class EmaildController extends Controller
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

      $emaild=DB::table('emaild')->where('deleted_at',null)->get();

      return view('admin.emaild.index')->with('data',$emaild);

    }

    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.emaild.new')->with('categories',$categories);

    return view('admin.emaild.new');

    }

    public function AddEmaild(Request $req){

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
                            $imaged=$req->imaged;

                                         if($imaged!=''){
                                 $pathd="banner/".Str::random(15).".".$imaged->getClientOriginalExtension();
                                 $imgd = Image::make($imaged);
                                 $imgd->save($pathd);}

         // return "Success..";

         // return dd($req->all());

         // return $req->except('_token');

         DB::table('emaild')->insert([

              'id' => $req->id,
'titlea' => $req->titlea,
'titleb' => $req->titleb,
'titlec' => $req->titlec,
              'imagea' => $patha,
'imageb' => $pathb,
'imagec' => $pathc,
'imaged' => $pathd,
          ]);

          return redirect('/admin/emaild');

    }

    public function Edit(Request $req,$id){

        $emaild=DB::table('emaild')->where('id',$id)->first();
        return view('/admin.emaild.update')->with('data',$emaild);

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
                      $old_imaged=$req->old_imaged;
                    $pathd=$old_imaged;
                    $imaged=$req->imaged;

                          if($imaged!=''){

                             $pathd="banner/".Str::random(15).".".$imaged->getClientOriginalExtension();
                             $imgd = Image::make($imaged);
                             $imgd->save($pathd);
                             if(File::exists($old_imaged)){
                               File::delete($old_imaged);
                             }

                           }

         DB::table('emaild')->where('id',$req->id)->update([

              'id' => $req->id,
'titlea' => $req->titlea,
'titleb' => $req->titleb,
'titlec' => $req->titlec,
              'imagea' => $patha,
'imageb' => $pathb,
'imagec' => $pathc,
'imaged' => $pathd,
          ]);

          return redirect('/admin/emaild');

    }
    public function Delete($id){

  DB::table('emaild')->where('id',$id)->delete();

          return redirect('/admin/emaild');

    }

}
