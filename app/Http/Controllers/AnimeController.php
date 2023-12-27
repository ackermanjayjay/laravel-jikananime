<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get("https://api.jikan.moe/v4/top/anime?limit=8")['data'];
        return view('Pages.index', [
            'result' => $response,
           
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function search(Request $request)
    {
        //
        $search = request('search');
        $responsesearch = Http::get("https://api.jikan.moe/v4/anime?q=$search")['data'];
        return view('Pages.index', [
            'result' => $responsesearch
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $mal_id)
    {
        
        $response = Http::get("https://api.jikan.moe/v4/anime/$mal_id/full");
        $result_detail=$response->json("data");
        //dd($result_detail);
      //  $sysnopsis =  Str::limit($result_detail["synopsis"],200);
        $sysnopsis =  $result_detail["synopsis"];
        return view('Pages.detail', [
            "result"=>$result_detail,
            'synopsis'=>$sysnopsis ]);


    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
