@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="" style="color: #804000;">Edit data</h2>
        </div> 
        <div class="container"><br>
            <form action="/editSetting/{{$setting->id}}" method="post" enctype="multipart/form-data">
            @csrf    
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="nama_web">Nama web</label>
                        <input type="text" name="nama_web" class="form-control" id="nama_web" value="{{$setting->nama_web}}">
                        @error('nama_web') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="link_web">Web Sekolah</label>
                        <input type="text" name="link_web" class="form-control" id="link_web" value="{{$setting->link_web}}">
                        @error('link_web') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="instagram">Instagram</label>
                        <input type="text" name="instagram" class="form-control" id="instagram" value="{{$setting->instagram}}">
                        @error('instagram') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" class="form-control" id="facebook" value="{{$setting->facebook}}">
                        @error('facebook') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="whatsapp">Whatsapp</label>
                        <input type="text" name="whatsapp" class="form-control" id="whatsapp" value="{{$setting->whatsapp}}">
                        @error('whatsapp') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" value="{{$setting->email}}">
                        @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="maps">Maps</label>
                        <input type="text" name="maps" class="form-control" id="maps" value="{{$setting->maps}}">
                        @error('maps') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="title_ketos">Ketos</label>
                        <input type="text" name="title_ketos" class="form-control" id="title_ketos" value="{{$setting->title_ketos}}">
                        @error('title_ketos') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="logo_osis">Logo Osis</label>
                        <input type="file" name="logo_osis" class="form-control" id="logo_osis" value="{{$setting->logo_osis}}">
                        @error('logo_osis')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>   
                    <div class="form-group col-md-6">
                        <label for="logo_smk">Logo Smk</label>
                        <input type="file" name="logo_smk" class="form-control" id="logo_smk" value="{{$setting->logo_smk}}">
                        @error('logo_smk')<span class="text-danger">{{ $message }}</span>@enderror
                    </div>   
                </div>                        
                <div  class="form-group col-md-6">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Edit</button>
                </div>                     
            </form>
        </div>
    </div>

@endsection