<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partner;
use App\Job;
use App\Team;
use Illuminate\Support\Facades\Log;

class PagesController extends Controller
{
    public function contact(){
        return view('pages.contact');
    }
    public function about(){
        return view('pages.about-us');
    }
    public function jobs($id){
        $data = Job::withTranslations()->where('id', $id)->first();
        return view('pages.jobs')
        ->with('data', $data);
    }
    public function partners(Request $request){
        $type = $request->query('type');
        $items = Partner::orderBy('order', 'asc');
        if (isset($type)) {
            $items = $items->where('type', $type);
        }
        return view('pages.partners')
        ->with('partners', $items->get())
        ->with('active', isset($type) ? $type : null);
        }
    public function hr(){
        $job = Job::withTranslations()->orderBy('created_at', 'desc')->limit(12)->get();

        return view('pages.hr')
        ->with('job', $job);
    }
    public function team(){
        $team1 = Team::withTranslations()->where([['type', '=', 'chairman']])->orderby('order', 'asc')->get();
        $team2 = Team::withTranslations()->where([['type', '=', 'director']])->orderby('order', 'asc')->get();
        $team3 = Team::withTranslations()->where([['type', '=', 'subdirectors']])->orderby('order', 'asc')->get();
        return view('pages.team')
        ->with('team1', $team1)
        ->with('team2', $team2)
        ->with('team3', $team3);
    }
}
