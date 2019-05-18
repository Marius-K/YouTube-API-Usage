<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alaouy\Youtube\Facades\Youtube;

class SearchController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function search(Request $request)
    {
        $request->validate([
            'searchquery' => 'required'
        ]);
        
        $params = [
            'q'             => $request->searchquery,
            'type'          => 'video',
            'part'          => 'id, snippet',
            'maxResults'    => 5
        ];

        $results = Youtube::searchAdvanced($params, true);
        return view('show', [ 'results' => $results["results"] ]);
    }

}
