<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use Illuminate\Support\Str;

class BidangController extends Controller
{
    public function __construct(){ 
        
        $this->middleware('auth');
    }
    
    public function index(){            
        $bidang = Bidang::all();
        return view('bidang.index', compact('bidang'));
    }

    public function insert()
    {
        Request()->validate([
            'sie'=>'required',
            'tugas'=>'required',
            'foto'=>'required|mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'sie.required' => 'wajib diisi',
            'tugas.required' => 'wajib diisi',
            'foto.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'
        ]);

        $file = Request()->foto;
        $fileName = Str::random(16) . '.' . $file->extension();
        $file->move(public_path('img'), $fileName);

        $data = [
            'sie'=>Request()->sie,
            'tugas'=>Request()->tugas,
            'foto'=>$fileName
        ];

        Bidang::create($data);
        return redirect()->route('bidang')->with('message', 'Data berhasil ditambah');

    }

    public function editform($id)
    {        
        $bidang = Bidang::where('id', $id)->first();    
        return view('bidang.edit', compact('bidang'));
    }

    public function update($id) 
    {
         Request()->validate([
            'sie'=>'required',
            'tugas'=>'required',
            'foto'=>'mimes:jpg,jpeg,png,bmp,svg',
        ], [
            'sie.required' => 'wajib diisi',
            'tugas.required' => 'wajib diisi',
            'foto.mimes' => 'ekstensi jpg, jpeg, png, bmp, svg'
        ]);

        if (Request()->foto) {              
            $bidang = Bidang::where('id', $id)->first(); 
            if(!Request()->foto == ""){
                unlink(public_path('img/'. $bidang->foto));
            }          
            $file = Request()->foto;
            $fileName = Str::random(16) . '.' . $file->extension();
            $file->move(public_path('img'), $fileName);

           $data = [
                'sie'=>Request()->sie,
                'tugas'=>Request()->tugas,
                'foto'=>$fileName
            ];
            Bidang::where('id', $id)->update($data);

        } else {
            $data = [
                'sie'=>Request()->sie,
                'tugas'=>Request()->tugas,                
            ];

            Bidang::where('id', $id)->update($data);
        }

        return redirect()->route('bidang')->with('message', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $bidang = Bidang::where('id', $id)->first();         
        unlink(public_path('img/'.$bidang->foto));        

        Bidang::where('id', $id)->delete();

        return redirect()->route('bidang')->with('message','Sponsor berhasil di hapus');
    }
}
