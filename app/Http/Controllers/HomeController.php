<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Ketos;
use App\Models\Pendapat;
use App\Models\Video;
use App\Models\Visi;
use App\Models\Setting;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard', [
            'pendapats' => Pendapat::all(),      
            'header' => Header::get()->count(),
            'ketos' => Ketos::get()->count(),
            'pendapat' => Pendapat::get()->count(),
            'video' => Video::get()->count(),
            'visimisi' => Visi::get()->count(),
            'setting' => Setting::get()->count(),  
        ]);
    }
}
