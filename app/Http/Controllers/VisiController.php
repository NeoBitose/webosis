<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visi;

class VisiController extends Controller
{
    public function __construct(){

        $this->Visi = new Visi();
        $this->middleware('auth');
    }

    public function index(){

        $visi = Visi::all();
        return view('visi.index', compact('visi'));
    }

    public function editform($id){
        $visi = Visi::where('id', $id)->first();    
        return view('visi.edit', compact('visi'));
    }

    public function update($id)
    {
        Request()->validate([            
            'visi'=>'required',
            'misi'=>'required',                   
        ], [
            'visi.required' => 'wajib diisi',  
            'misi.required' => 'wajib diisi',                         
        ]);                       
        
        $data = [        
            'visi' => Request()->visi,
            'misi'=>Request()->misi,      
        ];

        Visi::where('id', $id)->update($data);    

        return redirect()->route('visi')->with('message', 'Data berhasil diubah');

    }
}
