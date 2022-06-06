<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
class PagesController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about-us');
    }
    public function partners(){
        $partners = Partner::orderBy('order', 'asc')
        ->get();
        return view('pages.partners')
        ->with('partners', $partners);
        }
    public function hr(){
        return view('pages.hr');
    }
    public function team(){
        return view('pages.team');
    }
}
