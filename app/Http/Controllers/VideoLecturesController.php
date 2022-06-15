<?php

namespace App\Http\Controllers;
use App\Models\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\video_lectures;

class VideoLecturesController extends Controller
{
    public function menu_info(){
        $menu_info = Menus::where('address', '/video_lectures')->first();
        return $menu_info;
    }
    public function menu(){
        $menus = Menus::all();
        return $menus;
    }
    public function index()
    {
        $video_lectures = video_lectures::all();
        return view('pages.video_lectures', ['video_lectures' => $video_lectures, 'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}
