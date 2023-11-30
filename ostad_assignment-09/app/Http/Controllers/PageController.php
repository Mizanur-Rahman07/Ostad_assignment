<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home(Request $request) {
        return view('pages.home');
    }
    function about(Request $request) {
        return view('pages.about');
    }
    function project(Request $request) {
        return view('pages.project');
    }
    function contact(Request $request) {
        return view('pages.contact');
    }
    function skills(Request $request) {
        return view('pages.skills');
    }
}
