<?php
namespace App\Services;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class MovieDbService
{
    public function call(string $path = "movie/upcoming"):array
    {
        $url = "https://api.themoviedb.org/3/".$path;
        $response =  Http::get($url.'?',['api_key'=>'824ea24e0352f1f8e59cd60998d8a644']);

        return json_decode($response->body(),true);
    }
}
