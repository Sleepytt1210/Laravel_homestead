<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function update() {
        //
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
