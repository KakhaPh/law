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
        $tags = Tags::all();
        // dd($news);
        return view('pages.news', ['tags'=>$tags,'news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
    public function show($id)
    {
        $news = News::join('users', 'users.id', '=', 'news.news_author_id')->where('news.news_id', $id)->first();
        // dd($news);
        $news_images = json_decode($news->news_images);
        $news_images_array = [];
        foreach ($news_images as $news_image) {
            $news_images_array[] = $news_image;
        }
        // dd($news_images_array);
        return view('pages.news_post', ['news_images'=>$news_images_array,'news_info'=> $news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
    public function tag($id)
    {
        // SELECT * FROM `tag_to_news` INNER JOIN `news` ON `news`.`news_id` = `tag_to_news`.`tag_id` INNER JOIN `tags` ON `tags`.`tags_id` = `tag_to_news`.`tag_id`;
        $news = News::join('tag_to_news', 'news.news_id', '=', 'tag_to_news.news_id')->join('tags', 'tags.tags_id', '=', 'tag_to_news.tag_id')->where('tags.tags_id', $id)->get();
        // dd tags name from $news
        // dd($news);


        // $tags = Tags::all();
        return view('pages.tags_post', ['news'=>$news,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}

