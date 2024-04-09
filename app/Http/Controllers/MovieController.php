<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MovieController extends Controller
{
    public function index()
    {
        $apiKey = env('TMDB_API_KEY');
        $client = new Client();
        $response = $client->request('GET', 'https://api.themoviedb.org/3/movie/popular', [
            'query' => [
                'api_key' => $apiKey,
            ]
        ]);

        $movies = json_decode($response->getBody()->getContents());

        return view('movies.index', compact('movies'));
    }
}
