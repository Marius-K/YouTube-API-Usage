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
        Youtube::setApiKey('AIzaSyCV06pikvGpNrr0HCF2YzZhLD7MwUywlQE');

        $request->validate([
            'query' => 'required'
        ]);
        
        $params = [
            'q'             => $request->query,
            'type'          => 'video',
            'part'          => 'id, snippet',
            'maxResults'    => 5
        ];

        $results = Youtube::searchAdvanced($params, true);
        return view('show', [ 'results' => $results["results"] ]);
    }

}
