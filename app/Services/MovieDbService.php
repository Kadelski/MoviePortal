<?php
namespace App\Services;

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Http;

class MovieDbService
{
    public function call():array
    {
        $response =  Http::get('https://api.themoviedb.org/3/movie/upcoming?',['api_key'=>'824ea24e0352f1f8e59cd60998d8a644']);

        return json_decode($response->body(),true);
    }
}
