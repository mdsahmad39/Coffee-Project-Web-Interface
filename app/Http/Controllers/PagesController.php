<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Accessor!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Coffee Level', 'Temperature', 'Power Consumption', 'Time']
        );
        return view('pages.services')->with($data);
    }
}
