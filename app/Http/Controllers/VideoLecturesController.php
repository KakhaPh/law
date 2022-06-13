<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

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
        return view('pages.video_lectures',['menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}
