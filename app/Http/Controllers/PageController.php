<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function index(): View
    {
        $cars = DB::table('cars')
            ->get();
        return view('pages.index', ['cars' => $cars]);
    }
//    public function object(): View{
//        return view('pages.objects');
//    }
//    public function vacancy(): View{
//        return view('pages.vacancy');
//    }
//    public function news(): View{
//        return view('pages.news');
//    }
}
