<?php

namespace App\Http\Controllers;

use App\House;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index()
    {
        $houses = House::limit(3)->get();
        //dd($houses);
        return view('welcome', compact('houses'));
    }
}
