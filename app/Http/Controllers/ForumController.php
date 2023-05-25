<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forum()
    {
        return view('forum.home');

    }
    public function post()
    {
        return view('forum.post');
    }
    public function newtopic()
    {
        return view('forum.newtopic');
    }
    public function profile()
    {
        return view('forum.profile');
    }
    public function editprofile()
    {
        return view('forum.editprofile');
    }
    public function search()
    {
        return view('forum.search');
    }
    public function message()
    {
        return view('forum.message');
    }
    public function login()
    {
        return view('forum.login');
    }
    public function signup()
    {
        return view('forum.signup');
    }

}