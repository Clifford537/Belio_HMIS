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
}
