<?php

namespace App\Http\Controllers;

class GameListController extends Controller
{
    public function index()
    {
        return view('gamelist');
    }
}
