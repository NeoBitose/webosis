<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendapat;
use Illuminate\Support\Str;

class PendapatController extends Controller
{
    public function __construct(){ 
        
        $this->middleware('auth');
    }

    public function index(){            
        $pendapat = Pendapat::all();
        return view('pendapat.index', compact('pendapat'));
    }

    public function insert()
    {
        Request()->validate([
            'name'=>'required',
            'deskripsi'=>'required',        
            'sosmed'=>'required',
            'foto'=>'required|mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'name.required' => 'wajib diisi',
            'deskripsi.required' => 'wajib diisi',        
            'sosmed.required' => 'wajib diisi',
            'foto.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'

        ]);

        $file = Request()->foto;
        $fileName = Str::random(16) . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);
        
        $data = [
            // 'username' => Request()->username,
            'name'=>Request()->name,
            'deskripsi'=>Request()->deskripsi,        
            'sosmed'=>Request()->sosmed,
            'foto'=>$fileName
        ];

        Pendapat::create($data);
        return redirect()->route('pendapat')->with('message', 'Data berhasil ditambah');
    }

    public function editform($id)
    {        
        $pendapat = Pendapat::where('id', $id)->first();    
        return view('pendapat.edit', compact('pendapat'));
    }

    public function update($id) 
    {
        Request()->validate([
            'name'=>'required',
            'deskripsi'=>'required',        
            'sosmed'=>'required',
            'foto'=>'mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'name.required' => 'wajib diisi',
            'deskripsi.required' => 'wajib diisi',        
            'sosmed.required' => 'wajib diisi',
            'foto,mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'

        ]);

        if (Request()->foto) {              
            $pendapat = Pendapat::where('id', $id)->first(); 
            if(!Request()->foto == ""){
                unlink(public_path('img/'. $pendapat->foto));
            }          
            $file = Request()->foto;
            $fileName = Str::random(16) . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

            $data = [           
                'name'=>Request()->name,
                'deskripsi'=>Request()->deskripsi,        
                'sosmed'=>Request()->sosmed,
                'foto'=>$fileName
            ];
            Pendapat::where('id', $id)->update($data);

        } else {
            $data = [        
                'name'=>Request()->name,
                'deskripsi'=>Request()->deskripsi,        
                'sosmed'=>Request()->sosmed,
            ];

            Pendapat::where('id', $id)->update($data);
        }

        return redirect()->route('pendapat')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $pendapat = Pendapat::where('id', $id)->first();         
        unlink(public_path('img/'. $pendapat->foto));        

        Pendapat::where('id', $id)->delete();

        return redirect()->route('pendapat')->with('message','Sponsor berhasil di hapus');
    }
}
