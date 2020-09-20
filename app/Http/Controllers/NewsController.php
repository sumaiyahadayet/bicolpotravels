<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use DOMDocument;
use Intervention\Image\Facades\Image;
class NewsController extends Controller
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

      $news=DB::table('news')->where('deleted_at',null)->orderBy('created_at','desc')->get();

      return view('admin.news.index')->with('data',$news);

    }


    public function AddView(){

    // $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();

    // return view('admin.news.new')->with('categories',$categories);

    return view('admin.news.new');

    }

    public function AddNews(Request $req){

         // $urls=trim($req->link);
         //
         //         $html = file_get_contents("$urls");
         //
         //         //parsing begins here:
         //         $doc = new DOMDocument();
         //         @$doc->loadHTML($html);
         //
         //
         //             $metas = $doc->getElementsByTagName('meta');
         //             $image="Not Found";
         //             $title="Not Found";
         //             // //
         //             for ($i = 0; $i < $metas->length; $i++)
         //                 {
         //                 $meta = $metas->item($i);
         //                 if($meta->getAttribute('property') == 'og:image'){
         //                 $image = $meta->getAttribute('content');
         //
         //                 }
         //
         //                 if($meta->getAttribute('property') == 'og:title'){
         //                 $title = $meta->getAttribute('content');
         //
         //                 }
         //
         //            }
         $image=$req->image;

                 $path="banner/".Str::random(15).".".$image->getClientOriginalExtension();
                 $img = Image::make($image);
                 $img->save($path);

         DB::table('news')->insert([




 'image'=> $path,
 'title'=>$req->title,
   'description'=>$req->description,
 'description2'=>$req->description2,
          ]);

          return redirect('/admin/news');

    }

    public function Edit(Request $req,$id){

        $news=DB::table('news')->where('id',$id)->first();
        return view('/admin.news.update')->with('data',$news);

    }

    public function Update(Request $req){




      //
      // $urls=trim($req->link);
      //
      //         $html = file_get_contents("$urls");
      //
      //         //parsing begins here:
      //         $doc = new DOMDocument();
      //         @$doc->loadHTML($html);
      //
      //             $metas = $doc->getElementsByTagName('meta');
      //             $image="Not Found";
      //             $title="Not Found";
      //             // //
      //             for ($i = 0; $i < $metas->length; $i++)
      //                 {
      //                 $meta = $metas->item($i);
      //                 if($meta->getAttribute('property') == 'og:image'){
      //                 $image = $meta->getAttribute('content');
      //
      //                 }
      //
      //                 if($meta->getAttribute('property') == 'og:title'){
      //                 $title = $meta->getAttribute('content');
      //
      //                 }
      //
      //            }
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

         DB::table('news')->where('id',$req->id)->update([

              'id' => $req->id,



             'image'=> $path,
             'title'=>$req->title,
              'description'=>$req->description,
               'description2'=>$req->description2,
          ]);

          return redirect('/admin/news');

    }
    public function Delete($id){

  DB::table('news')->where('id',$id)->delete();

          return redirect('/admin/news');

    }

}
