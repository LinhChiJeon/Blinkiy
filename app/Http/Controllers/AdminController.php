<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin_layout');
    }
    public function contactReply()
    {
        return view('pages.admin_contact_reply');
    }
}