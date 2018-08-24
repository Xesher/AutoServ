<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class BrandController extends Controller
{

    public function index()
    {
        $cars = DB::table('brands')->get();

        return view('partials.callme', ['brands' => $cars]);

    }

}
