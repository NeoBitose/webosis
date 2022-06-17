<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Header;

class HeaderController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
    }

    public function index(){            
        $header = Header::all();
        return view('header.index', compact('header'));
    }

    public function editform($id){
        $header = Header::where('id', $id)->first();    
        return view('header.edit', compact('header'));
    }

    public function update($id)
    {
        Request()->validate([            
            'title'=>'required',
            'deskripsi'=>'required',
            'periode'=>'required',
            'link_pendaftaran'=>'required',
            'ilustrasi'=>'mimes:jpg,jpeg,png,bmp,svg',          
        ], [
            'title.required' => 'wajib diisi',  
            'deskripsi.required' => 'wajib diisi',    
            'periode.required' => 'wajib diisi',
            'link_pendaftaran.required' => 'wajib diisi',
            'ilustrasi.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg',            
        ]);                

        if (Request()->ilustrasi <> "") {  

            $header = Header::where('id', $id)->first(); 
            if(Request()->ilustrasi != ""){
                unlink(public_path('img/'. $header->ilustrasi));                
            } 

            $file = Request()->ilustrasi;
            $fileName = 'header'. '.' . $file->extension();
            $file->move(public_path('img'), $fileName);
         
            $data = [           
                'title' => Request()->title,
                'title'=>Request()->title,
                'deskripsi'=>Request()->deskripsi,
                'periode'=>Request()->periode,
                'link_pendaftaran'=>Request()->link_pendaftaran,
                'ilustrasi'=>$fileName,
            ];
            Header::where('id', $id)->update($data);

        } else {

            $data = [        
                'title' => Request()->title,
                'title'=>Request()->title,
                'deskripsi'=>Request()->deskripsi,
                'periode'=>Request()->periode,         
            ];
            Header::where('id', $id)->update($data);

        }

        return redirect()->route('header')->with('message', 'Data berhasil diubah');

    }
}
