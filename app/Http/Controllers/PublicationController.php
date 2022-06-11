<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class PublicationController extends Controller
{
    public function menu_info(){
        $menu_info = Menus::where('address', '/')->first();
        return $menu_info;
    }
    public function menu(){
        $menus = Menus::all();
        return $menus;
    }
    public function index()
    {
        return view('pages.pubLectures',['menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}
