<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $data = "Salom Dunyo";
        return $data;
    }
}
