<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index(){
        $setting = Setting::all();
        return view('setting.index', compact('setting'));
    }

    public function editform($id){
        $setting = Setting::where('id', $id)->first();    
        return view('setting.edit', compact('setting'));
    }

    public function update($id)
    {
        Request()->validate([            
            'nama_web'=>'required',
            'link_web'=>'required',
            'title_ketos' => 'required',
            'logo_osis'=>'mimes:jpg,jpeg,png,bmp,svg',
            'logo_smk'=>'mimes:jpg,jpeg,png,bmp,svg',
            'instagram'=>'required',
            'facebook'=>'required',
            'whatsapp'=>'required',
            'maps'=>'required',
            'email'=>'required',            
        ], [
            'nama_web.required' => 'wajib diisi',
            'link_web.required' => 'wajib diisi',
            'title_ketos' => 'wajib diisi',
            'logo_osis.mimes'=> 'ekstensi jpg, jpeg, png, bmp, svg',
            'logo_smk.mimes'=> 'ekstensi jpg, jpeg, png, bmp, svg',
            'instagram.required' => 'wajib diisi',
            'facebook.required' => 'wajib diisi',
            'whatsapp.required' => 'wajib diisi',
            'maps.required' => 'wajib diisi',
            'email.required' => 'wajib diisi',               
        ]);                

    
        if(!Request()->logo_smk && !Request()->logo_osis) {
            $data = [        
                'nama_web'=>Request()->nama_web,
                'link_web'=>Request()->link_web,
                'title_ketos'=>Request()->title_ketos,
                'instagram'=>Request()->instagram,
                'facebook'=>Request()->facebook,
                'whatsapp'=>Request()->whatsapp,
                'maps'=>Request()->maps,
                'email'=>Request()->email,       
            ];

            Setting::where('id', $id)->update($data);
        }

        else {

        $setting = Setting::where('id', $id)->first(); 
        
            if(Request()->logo_smk != ""){
                unlink(public_path('img/'. $setting->logo_smk));                
            } 

            if(Request()->logo_osis != ""){
                unlink(public_path('img/'. $setting->logo_osis));                
            } 

            if(Request()->logo_smk){

                $file = Request()->logo_smk;
                $fileNamesmk = 'logo_smk'. '.' . $file->extension();
                $file->move(public_path('img'), $fileNamesmk);

                $data = [           
                    'nama_web'=>Request()->nama_web,
                    'link_web'=>Request()->link_web,
                    'title_ketos'=>Request()->title_ketos,
                    'logo_smk'=>$fileNamesmk,                   
                    'instagram'=>Request()->instagram,
                    'facebook'=>Request()->facebook,                    
                    'whatsapp'=>Request()->whatsapp,
                    'maps'=>Request()->maps,
                    'email'=>Request()->email,      
                ];
                Setting::where('id', $id)->update($data);
            } 
            
            if(Request()->logo_osis){

                $file = Request()->logo_osis;
                $fileNameosis = 'logo_osis'. '.' . $file->extension();
                $file->move(public_path('img'), $fileNameosis);

                $data = [           
                    'nama_web'=>Request()->nama_web,
                    'link_web'=>Request()->link_web,
                    'title_ketos'=>Request()->title_ketos,
                    'logo_osis'=>$fileNameosis,                   
                    'instagram'=>Request()->instagram,
                    'facebook'=>Request()->facebook,
                    'whatsapp'=>Request()->whatsapp,
                    'maps'=>Request()->maps,
                    'email'=>Request()->email,      
                ];
                Setting::where('id', $id)->update($data);
            }                          
        }

        return redirect()->route('setting')->with('message', 'Data berhasil diubah');

    }
}
