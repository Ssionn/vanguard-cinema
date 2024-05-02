<?php

namespace App\Http\Api;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class VidSrcApiController
{
    public function fetchNewMoviesResponse(): JsonResponse
    {
        $response = Http::get('https://vidsrc.to/vapi/movie/new');

        dd($response->json());
    }

    public function fetchNewSeriesResponse(): JsonResponse
    {
        $response = Http::get('https://vidsrc.to/vapi/tv/new');

        dd($response->json());
    }
}
