<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Authors;
class AboutController extends Controller
{
    public function index()
    {
        $authors =  DB::table('authors')->get();
        // dd($authors);
        return view('pages.about', ['authors' => $authors]);

    }
}
