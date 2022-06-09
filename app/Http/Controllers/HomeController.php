<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;

class HomeController extends Controller
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
        // dd($this->menu_info());
        return view('pages.home',['menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);
    }
}
