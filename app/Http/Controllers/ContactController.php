<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;
class ContactController extends Controller
{
    public function index(){

        $count=Contact::count();
        $message=Contact::all();
        return view('base.nav',compact('count','message'));
    }
    public function show(Request $request){

        return view("front.pages.contact");

    }
    public function store(ContactRequest $request){

        $message=Contact::create($request->validated());

        return  redirect()->route('home')->with('success');

        }

}
