<?php

namespace App\Http\Controllers;

use App\Episode;
use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieDetailsController extends Controller
{
    public function run($id){
       
        // $episode = DB::table("episodes")->where("id","like","$id")->paginate(3);
        $episode = Episode::where("movie_id", $id)->paginate(3);
        $movie = DB::table("movies")->where("id","like","$id")->get()->first();
        $genre = DB::table("genres")->where("id","like","$movie->genre_id")->get()->first();
        


        return view("movieDetailsPage",["episodes"=>$episode,"movies"=>$movie, "genres"=>$genre ]);
    }
}
