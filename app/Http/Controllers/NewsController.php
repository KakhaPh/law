<?php

namespace App\Http\Controllers;
use App\Models\Menus;
use App\Models\Tags;
use App\Models\News;
use App\Models\tags_to_news;

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
        $tags = Tags::all();
        // dd($news);
        return view('pages.news', ['tags'=>$tags,'news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
    public function show($id)
    {
        $news = News::join('users', 'users.id', '=', 'news.news_author_id')->where('news.news_id', $id)->first();
        $tags = Tags::all();
       
        // dd($news);
        $news_images = json_decode($news->news_images);
        $news_images_array = [];
        foreach ($news_images as $news_image) {
            $news_images_array[] = $news_image;
        }
        // dd($news_images_array);
        return view('pages.news_post', ['tags'=>$tags,'news_images'=>$news_images_array,'news_info'=> $news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
    public function tag($id)
    {
        // find tag_to_news by id

        $news = News::join('tag_to_news', 'news.news_id', '=', 'tag_to_news.news_id')->join('tags', 'tags.tags_id', '=', 'tag_to_news.tag_id')->where('tag_to_news.tag_id', $id)->get();
        // dd($news);
        if ($news->count() == 0) {
            return redirect()->route('news');
        }
        // dd($news);
        $allnews = News::join('users', 'users.id', '=', 'news.news_author_id')->get();
        
        return view('pages.tags_post', ['allNews'=>$allnews,'news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
    public function month($date)
    {
        // select news from news inner join user on user.id = news.id and check if date is not the same
        // $allnews = News::join('users', 'users.id', '=', 'news.news_author_id')->where('news.news_created_at', $date)->get();
        $allnews = News::join('users', 'users.id', '=', 'news.news_author_id')->get();
        $news = News::join('users', 'users.id', '=', 'news.news_author_id')->whereBetween('news.news_created_at', [$date.'-00 00:00:00', $date.'-31 23:59:59'])->get();
        // dd($allnews);
        return view('pages.month_post', ['allNews'=>$allnews,'news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}

