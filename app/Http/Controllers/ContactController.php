<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show(Request $request){

        return view("front.pages.contact");

    }
    public function store(Request $request){

        return response()->json([
            'success' => true,
            'message' => 'stored successfully!',
            'data' => $request->all(),
        ]);
        }
        
}
