<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuartierAppartementController extends Controller
{
    public function showQuartierAppart(Request $request,$slug_quartier,$slug_category = null)
    {
        return view('showAppartements');
    }
}
