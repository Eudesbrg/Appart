<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Quartier,AppartCategory};

class homeController extends Controller
{
    public function index()
    {
        $quartiers = Quartier::all();
        $categories = AppartCategory::all();
        return view('home',compact('quartiers','categories'));
    }
}
