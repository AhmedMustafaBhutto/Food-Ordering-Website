<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class first extends Controller
{
    function index($id = '')
    {
        echo "farooq";
        return view('about',array('userId'=>$id));
    }
}
