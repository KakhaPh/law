<?php

namespace App\Http\Controllers;
use App\Models\Menus;
use App\Models\Tags;
use App\Models\News;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function menu_info(){
        $menu_info = Menus::where('address', '/news')->first();
        return $menu_info;
    }
    public function menu(){
        $menus = Menus::all();
        return $menus;
    }
    public function index()
    {

        $news = News::join('users', 'users.id', '=', 'news.news_author_id')->get();
        // dd($news);
        return view('pages.news', ['news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
    public function show($id)
    {
        // find news by id
        $news = News::find($id);
        // dd($news);
        return view('pages.news_post', ['news_info'=> $news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
}
}

