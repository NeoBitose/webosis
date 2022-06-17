<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ketos;
use Illuminate\Support\Str;

class KetosController extends Controller
{
    public function __construct(){
        
        $this->middleware('auth');
    }

    public function index(){
        $ketos = Ketos::all();       
        return view('ketos.index', compact('ketos'));
    }

    public function insert()
    {
        Request()->validate([
            'title'=>'required',            
            'foto' => 'required|mimes:jpg,jpeg,png,bmp,svg'
        ], [
            'username.required' => 'wajib diisi',
            'foto.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'
        ]);

        $file = Request()->foto;
        $fileName = Str::random(16) . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            'title' => Request()->title,           
            'foto' => $fileName
        ];

        Ketos::create($data);
        return redirect()->route('ketos')->with('message', 'Data berhasil ditambah');
    }

    public function editform($id)
    {        
        $ketos = Ketos::where('id', $id)->first();    
        return view('ketos.edit', compact('ketos'));
    }

    public function update($id)
    {
        Request()->validate([            
            'title'=>'required',
            'foto'=>'mimes:jpg,jpeg,png,bmp,svg',          
        ], [
            'title.required' => 'wajib diisi',       
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg',    
        ]);                

        if (Request()->foto <> "") {  
            
            $ketos = Ketos::where('id', $id)->first(); 
            if(!Request()->foto == ""){
                unlink(public_path('img/'. $ketos->foto));
            }          
            $file = Request()->foto;
            $fileName = Str::random(16) . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

            $data = [           
            'title' => Request()->title,
            'foto' => $fileName

            ];
            Ketos::where('id', $id)->update($data);

        } else {
            $data = [        
            'title' => Request()->title
            ];

            Ketos::where('id', $id)->update($data);
        }


        return redirect()->route('ketos')->with('message', 'Data berhasil diubah');

    }

    public function delete($id)
    {
        $ketos = Ketos::where('id', $id)->first();         
        unlink(public_path('img/'. $ketos->foto));        

        Ketos::where('id', $id)->delete();

        return redirect()->route('ketos')->with('message','Sponsor berhasil di hapus');
    }
}
