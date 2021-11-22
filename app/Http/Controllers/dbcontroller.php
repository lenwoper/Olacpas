<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Exception;
use GrahamCampbell\ResultType\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class dbcontroller extends Controller
{
    // singh up
    function SighUp(Request $req)
    {
        // here we 'll start a validation page 




        $member = new Member;
        $member->name = $req->name;
        $member->email = $req->email;
        $member->password = Crypt::encrypt($req->password);
        $save = $member->save();
        // session
        $ses_name = $req->session()->put('user', $req->name);
        if ($save) {
            return Session::get('user');
        } else {
            return " something is going wrong ";
        }
    }

    // login function 
    function Login(Request $req)
    {

      try{  $hold = DB::table('members')->where('email', '=', $req->email)->get();


        $decrypting = Crypt::decrypt($hold[0]->password);

        if ($req->password === $decrypting) {

            $req->session()->put('welcome_name', $hold[0]->name);
         
            return Session::get('welcome_name');
            /* it is the antheticated email so we how to 
        redirect it on the desire page 
        */
        } else {

            return "sorry it is not right ";

            /* else part means this is not exits this email so we have to redirect 
       on the sigh up page 
       */
        }
    }
    catch (Exception $e ){
return " This Email id does not exits in the database ";

       }
    }
    //  mail varification 



    ////

    // password forgetting then updating after amail varification 

    function UpdatePassword(Request $req)
    {
    //   pasReset is the session which we 've to make during taking mail id for upading
   try{
    DB::table('members')->where('email','=',Session::get('pasReset'))->update(['password'=>$req->password]);
   }
   catch( Exception $e){
       return " some thing is going wrong please try again ";
   }
  

    }
}
