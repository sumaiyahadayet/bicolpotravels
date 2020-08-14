<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendmailController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.send_email');
    }

    function send(Request $request)
        {
         $this->validate($request, [
                   'subject' =>  'required',
          'headline' =>  'required',
          'message1' =>  'required',
          'message2' =>  'required'

         ]);

            $data = array(
                  'subject' =>$request->subject,
              'headline' =>$request->headline,
                'message1'   =>   $request->message1,
                 'message2'   =>   $request->message2


            );
            foreach(Users() as $user){
                 // if($user->id==$data['group'])
    Mail::to($user->email)->send(new SendMail($data,$user));

}


         return back()->with('success', 'Thanks for contacting us!');

        }
      //   public function Delete($id){
      //
      // DB::table('user_details')->where('id',$id)->delete();
      //
      //         return back()->with('success', 'successfully unsubscribed');
      //
      //   }

}
