<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Laravel";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title); //(name inside view, variable used in this file)
    }

    public function about(){
        // key value pairs passed into view, can have nested lists
        $data = array(
            'title' => 'About'
        );
        return view('pages.about')->with($data);
    }

    public function contact(){
        $data = array(
            'title' => 'Contact',
            'email' => 'S1368557@student.mcckc.edu',
            'discord' => 'https://discord.gg/9vGmHak'
        );
        
        return view('pages.contact')->with($data);
    }
}
