<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AnimeController extends Controller
{
    public function categorieslist()
    {

        $data = Http::get('https://api.jikan.moe/v4/genres/anime')->json();
        // dd($data);
        return view('welcome',['data'=> $data['data']]);
    }
    public function category($id)
    {

        $data = Http::get('https://api.jikan.moe/v4/anime?genres='.$id)->json();
        // dd($data);
        return view('category',['data'=> $data['data']]);
    }
    public function details($id)
    {

        $data = Http::get('https://api.jikan.moe/v4/anime/'.$id)->json();
        // dd($data);
        return view('details',['item'=> $data['data']]);
    }



}
