<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Show user profile
     */
    public function show() {
        return view("user.info");
    }

    /**
     * Update user profile
     */
    public function update(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        
        // User id 
        $uid = Auth::user()->id;
        $rowUpdated = DB::table('users')->where('id', $uid)->update(['name'=> $name,'email'=> $email]);

        if ($rowUpdated) {
            return back()->with(['success' => 'Profile updated!']);
        }

        return back()->withErrors(['Profile is not updated!']);
    }

    /**
     * Show user avatar
     */
    public function avatarShow() {
        return view("user.avatar");
    }

    /**
     * Update avatar homepage
     */
    public function avatarUpdate() {
        //
    }

    /**
     * Get all user's blog
     */
    public function blog() {
        return view("user.blog");
    }
}
