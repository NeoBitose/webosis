<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;
use App\Models\Ketos;
use App\Models\Pendapat;
use App\Models\Video;
use App\Models\Visi;
use App\Models\Setting;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'header' => Header::all(),
            'ketos' => Ketos::all(),
            'pendapat' => Pendapat::all(),
            'video' => Video::all(),
            'visimisi' => Visi::all(),
            'setting' => Setting::all(),  
        ]);
    }
}
