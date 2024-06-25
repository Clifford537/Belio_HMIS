<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\User;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $current_userid = Auth()->user()->id;
        $userinfo = User::where('id','=',$current_userid)->first();
        $userprofile = Profile::where('user_id','=',$current_userid)->first();

        return view('profile.index',compact('userprofile','userinfo'));
    }

    public function updatepic(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $userid = $request['userid'];
            $uploadedfile = time() . $avatar->getClientOriginalName();
            Image::make($avatar)->resize(300, 300)->save( public_path('images/' . $uploadedfile  ) );

            $user = Profile::where('user_id','=',$userid)->first();
            $user->picture =$uploadedfile;
            $user->save();
        }
        return redirect('profile/index');
    }

    public function updateinfo(Request $request){
        $newmobile = $request['updmobile']; $newaddress = $request['updaddress']; $newstatus = $request['updStatus'];
        $newcompany = $request['updcompany']; $newposition = $request['updposition']; $userid = $request['userid'];

        $userinfo = Profile::where('user_id','=',$userid)->first();
        $userinfo->mobile =$newmobile;
        $userinfo->address =$newaddress;
        $userinfo->status =$newstatus;
        $userinfo->company =$newcompany;
        $userinfo->position =$newposition;
        $userinfo->save();
        return redirect('profile/index');
    }
}
