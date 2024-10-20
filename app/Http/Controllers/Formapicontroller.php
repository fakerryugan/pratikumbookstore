<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FormApiController extends Controller
{
    public function index(Request $request)
    {
        $client = new Client();
        $url = "http://127.0.0.1:8000/api/bukus";

        $response = $client->request('GET', $url);
        $content = $response->getBody()->getContents();
        $data = json_decode($content, true);

        $search = $request->input('search');

        if ($search) {
            $data = array_filter($data, function ($book) use ($search) {
                return stripos($book['judul'], $search) !== false;
            });
        }

        return view('welcome', ['data' => $data]);
    }
}
