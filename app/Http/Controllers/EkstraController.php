<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ekstra;
use Illuminate\Support\Str;

class EkstraController extends Controller
{
    public function __construct(){ 
        
        $this->middleware('auth');
    }

    public function index(){            
        $ekstra = Ekstra::all();
        return view('ekstra.index', compact('ekstra'));
    }

    public function insert()
    {
        Request()->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'link'=>'required',
            'sosmed'=>'required',
            'foto'=>'required|mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'nama.required' => 'wajib diisi',
            'deskripsi.required' => 'wajib diisi',  
            'link.required' => 'wajib diisi',
            'sosmed.required' => 'wajib diisi',
            'foto.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'

        ]);

        $file = Request()->foto;
        $fileName = Str::random(16) . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);
        
        $data = [
            'nama'=>Request()->nama,
            'deskripsi'=>Request()->deskripsi,  
            'link'=>Request()->link,
            'sosmed'=>Request()->sosmed,            
            'foto'=>$fileName
        ];

        Ekstra::create($data);
        return redirect()->route('ekstra')->with('message', 'Data berhasil ditambah');
    }

    public function editform($id)
    {        
        $ekstra = Ekstra::where('id', $id)->first();    
        return view('ekstra.edit', compact('ekstra'));
    }

    public function update($id) 
    {
         Request()->validate([
            'nama'=>'required',
            'deskripsi'=>'required',
            'link'=>'required',
            'sosmed'=>'required',
            'foto'=>'mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'nama.required' => 'wajib diisi',
            'deskripsi.required' => 'wajib diisi',  
            'link.required' => 'wajib diisi',
            'sosmed.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'

        ]);

        if (Request()->foto) {              
            $ekstra = Ekstra::where('id', $id)->first(); 
            if(!Request()->foto == ""){
                unlink(public_path('img/'. $ekstra->foto));
            }          
            $file = Request()->foto;
            $fileName = Str::random(16) . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

            $data = [
                'nama'=>Request()->nama,
                'deskripsi'=>Request()->deskripsi,  
                'link'=>Request()->link,
                'sosmed'=>Request()->sosmed,            
                'foto'=>$fileName
            ];
            Ekstra::where('id', $id)->update($data);

        } else {
            $data = [
                'nama'=>Request()->nama,
                'deskripsi'=>Request()->deskripsi,  
                'link'=>Request()->link,
                'sosmed'=>Request()->sosmed,            
            ];

            Ekstra::where('id', $id)->update($data);
        }

        return redirect()->route('ekstra')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $ekstra = Ekstra::where('id', $id)->first();         
        unlink(public_path('img/'. $ekstra->foto));        

        Ekstra::where('id', $id)->delete();

        return redirect()->route('ekstra')->with('message','Sponsor berhasil di hapus');
    }
}
