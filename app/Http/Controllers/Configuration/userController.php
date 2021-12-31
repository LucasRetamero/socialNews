<?php

namespace App\Http\Controllers\Configuration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class userController extends Controller
{
    public function home(){
     return view('login.index');   
    }
}
