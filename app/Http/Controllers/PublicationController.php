<?php

namespace App\Http\Controllers;
use App\Models\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\books;

class PublicationController extends Controller
{
    public function menu_info(){
        $menu_info = Menus::where('address', '/publications')->first();
        return $menu_info;
    }
    public function menu(){
        $menus = Menus::all();
        return $menus;
    }
    public function index()
    {
        $books = books::all();
        // dd($books);
        return view('pages.pubLectures', ['books' => $books,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
}
