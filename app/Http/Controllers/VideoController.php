<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){

        $video = Video::all();
        return view('video.index', compact('video'));
    }

     public function insert()
    {
        Request()->validate([
            'iframe'=>'required',
            'title'=>'required',            
            'deskripsi' => 'required',
            'link' => 'required'
        ], [
            'iframe.required' => 'wajib diisi',
            'title.required' => 'wajib diisi', 
            'deskripsi.required' => 'wajib diisi',
            'link.required' => 'wajib diisi',
        ]);

        $data = [

            'iframe'=>Request()->iframe,
            'title'=>Request()->title,            
            'deskripsi' => Request()->deskripsi,
            'link' => Request()->link
        ];

        Video::create($data);
        return redirect()->route('video')->with('message', 'Data berhasil ditambah');
    }

    public function editform($id)
    {        
        $video = Video::where('id', $id)->first();    
        return view('video.edit', compact('video'));
    }

    public function update($id)
    {
        Request()->validate([
            'iframe'=>'required',
            'title'=>'required',            
            'deskripsi' => 'required',
            'link' => 'required'
        ], [
            'iframe.required' => 'wajib diisi',
            'title.required' => 'wajib diisi', 
            'deskripsi.required' => 'wajib diisi',
            'link.required' => 'wajib diisi',
        ]);          
    
        $data = [

            'iframe'=>Request()->iframe,
            'title'=>Request()->title,            
            'deskripsi' => Request()->deskripsi,
            'link' => Request()->link
        ];

        Video::where('id', $id)->update($data);        
        return redirect()->route('video')->with('message', 'Data berhasil diubah');

    }

    public function delete($id)
    {
        Video::where('id', $id)->delete();
        return redirect()->route('video')->with('message','Sponsor berhasil di tambahkan');
    }

}
