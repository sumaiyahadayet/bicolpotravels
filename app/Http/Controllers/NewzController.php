<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;
use File;
use Helpers;
use DOMDocument;
use Intervention\Image\Facades\Image;
class NewzController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */



    public function Newz($id){

          $news=DB::table('news')->where('id',$id)->where('deleted_at',null)->orderBy('created_at')->first();
          return view('single-news')->with('news',$news);

     }


}
