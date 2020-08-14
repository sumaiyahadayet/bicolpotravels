<?php

// function Categories(){
//
//   return $categories=DB::table('category')->where('deleted_at',null)->orderBy('order','ASC')->get();
//
// }
// function Category($category_id){
//
//   return $category=DB::table('category')->where('id',$category_id)->first();
//
// }
 function Banner(){

  return $banner=DB::table('banner')->orderBy('order','ASC')->get();

}
function team(){

  return $team=DB::table('team')->orderBy('order','ASC')->get();

}
function Bg(){

  return $team=DB::table('bg')->get();

}
function Users(){

  return $users=DB::table('user_details')->where('deleted_at',null)->get();

}
function Emaild(){

  return $users=DB::table('emaild')->where('deleted_at',null)->get();

}
function Service(){

  return $team=DB::table('service')->orderBy('order','ASC')->get();

}
function Phone(){

  return $team=DB::table('phone')->orderBy('order','ASC')->get();

}
function Email(){

  return $team=DB::table('email')->orderBy('order','ASC')->get();

}
function Fb(){

  return $team=DB::table('fb')->orderBy('order','ASC')->get();

}
function Skype(){

  return $team=DB::table('skype')->orderBy('order','ASC')->get();

}
function Support(){

  return $team=DB::table('support')->orderBy('order','ASC')->get();

}
function Client(){

  return $team=DB::table('client')->orderBy('order','ASC')->get();

}
function Offer(){

  return $team=DB::table('offer')->orderBy('order','ASC')->get();

}
function Events(){

  return $event=DB::table('event')->orderBy('order','ASC')->get();

}
function About(){

  return $about=DB::table('about')->get();

}
function Dompack(){

  return $dompack=DB::table('dompack')->orderBy('order','ASC')->get();

}
function Intpack(){

  return $intpack=DB::table('intpack')->orderBy('order','ASC')->get();

}
// function Projects(){
//
//   return $projects=DB::table('projects')->get();
//
// }
// function About(){
//
//   return $about=DB::table('about')->get();
//
// }
// function Section2(){
//
//   return $section2=DB::table('section2')->orderBy('order','ASC')->get();
//
// }
