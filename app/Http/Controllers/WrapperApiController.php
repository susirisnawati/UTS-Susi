<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WrapperApiController extends Controller
{
    public function Create()
    {
        $json = Http::post('/link/token/create')->json();
        return response()->json($json);
    }
    public function createItem(){
        $json = Http::post('/sandbox/public_token/create')->json();
        return response()->json($json);
    }
    public function Exchange(){
        $json = Http::post('/item/public_token/exchange')->json();
        return response()->json($json);
    }
    public function Get(){
        $json = Http::post('/item/get')->json();
        return response()->json($json);
    }
    public function Invalidate(){
        $json = Http::post('/item/access_token/invalidate')->json();
        return response()->json($json);
    }
}
