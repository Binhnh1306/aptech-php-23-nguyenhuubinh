<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowProfile extends Controller
{
   public function index() {
       $users =DB::table('users')->get();
    // return view("show");
    return view(
        'users.index',
        [
            'showusers'=>$users
        ]
        );
   }
}
