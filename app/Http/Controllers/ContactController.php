<?php

namespace App\Http\Controllers;
use App\Models\Menus;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function menu_info(){
        $menu_info = Menus::where('address', '/about')->first();
        return $menu_info;
    }
    public function menu(){
        $menus = Menus::all();
        return $menus;
    }
    public function index()
    {
        // dd($authors);
        return view('pages.contact', ['menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
}
