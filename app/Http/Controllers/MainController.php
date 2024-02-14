<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{
    public function index() {

        // dd(now() -> toDateString());
        $trains = Train :: whereDate('start_time', '=', now() -> toDateString()) -> get();
        // $trains = Train :: all();
        // dd($trains);

        return view('pages.index', compact('trains'));
    }
}
