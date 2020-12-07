<?php

namespace App\Http\Controllers;

use App\Genre;
use App\Movie;
use Illuminate\Http\Request;

class CategoryPageController extends Controller
{
    public function run($id){
        // $category = Genre::where("id", $id)->get();
        $category = Movie::where("genre_id", $id)->get();
        //$genre = Genre::where("id", $id)->get();
        return view("categoryPage",["category"=>$category]);
    }
}
