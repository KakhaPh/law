<?php

namespace App\Http\Controllers;
use App\Models\Menus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Authors;
class AboutController extends Controller
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
        $authors = Authors::all();
        // dd($authors);
        return view('pages.about', ['authors' => $authors,'menus'=>$this->menu(),'menu_info'=>$this->menu_info()]);

    }
}
