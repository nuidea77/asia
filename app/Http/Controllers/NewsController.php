<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
class NewsController extends Controller
{

    public function index(){
        $newslist = Post::with('category')->withTranslations()->where([
            ['status', '=', 'PUBLISHED']
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('news.index')
            ->with('newslist', $newslist)
        ;

    }
    public function category($id){
        $newslist = Post::with('category')->withTranslations()
        ->where([
            ['status', '=', 'PUBLISHED'],
            ['category_id', '=', $id]
        ])
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('news.index')
            ->with('newslist', $newslist)
        ;
    }

    public function view($id){


        $data = Post::with('category')->withTranslations()->where('id', $id)->first();
        $sad = Post::where('id', $id)->increment('view_count', 1);


        $recentnews = Post::with('category')->withTranslations()->where([
            ['status', '=', 'PUBLISHED']
        ])->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();



        return view('news.view')
        	->with('data', $data)
            ->with('sad', $sad)
            ->with('recentnews', $recentnews);
    }
}
