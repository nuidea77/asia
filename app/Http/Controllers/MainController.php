<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use TCG\Voyager\Models\Category;
use App\Slider;
use App\Partner;
class MainController extends Controller
{
    public function index(){

        $featurenews = Post::with('category')->withTranslations()
        ->where([
            ['status', '=', 'PUBLISHED'],
            ['featured', '=', 1]
        ])
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
    $mobilesliders = Slider::where([
        ['type', '=', 2],
    ])
        ->orderBy('order', 'asc')
        ->limit(3)
        ->get();

        $websliders = Slider::where([
        ['type', '=', 1],
    ])
        ->orderBy('order', 'asc')
        ->limit(3)
        ->get();
    $partners = Partner::where([ ['featured', '=', 1]])
    ->orderBy('order', 'asc')
            ->limit(8)
            ->get();
    return view('welcome')
    ->with('featurenews', $featurenews)
    ->with('mobilesliders', $mobilesliders)
    ->with('websliders', $websliders)
    ->with('partners', $partners);

}
}
