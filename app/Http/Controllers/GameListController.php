<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GameListController extends Controller
{
    public function index()
    {

        $api = Http::get('https://www.cheapshark.com/api/1.0/games?title=batman&limit=60&exact=0');
        $includingBatmanLists = json_decode($api->body());
        // dd($includingBatmanLists);
        return view('gamelist');
    }

}
