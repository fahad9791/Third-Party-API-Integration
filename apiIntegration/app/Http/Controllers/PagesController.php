<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PagesController extends Controller
{
    public function getData()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts');
        $jsonData = $data->json();
        return view('getData', compact('jsonData'));
    }

    public function wrongUrl()
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/api/posts');
        $status = $data->status();
        if($status == 200)
        {
            echo('This is a correct URL. And the status of the URL is ' .$status);

        }
        else{
            echo('This URL is not correct. Try again with proper URL address');
        }

    }

    public function postView(Request $request)
    {
        $data = Http::get('https://jsonplaceholder.typicode.com/posts/'.$request->id);
        $jsonData = $data->json();
        return view('postView', compact('jsonData'));


    }

    public function insertData()
    {
        return view('insertData');

    }

    public function insertDataSubmit(Request $request)
    {
        $data = Http::post('https://jsonplaceholder.typicode.com/posts/',[
            'title' => $request->title,
            'body' => $request->body
        ]);
        $jsonData = $data->json();
        return view('postView', compact('jsonData'));

    }
}
