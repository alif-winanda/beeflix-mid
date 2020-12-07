<?php

namespace App\Http\Controllers;

use App\Genre;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function run(){
        $genreMovie=Genre::all();
        return view("homePage",["genreMovie"=>$genreMovie]);
    }
}
