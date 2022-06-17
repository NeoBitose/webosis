@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 class="" style="color: #804000;">Tambah data</h2>
        </div>        
        <div class="container"><br>       
            <form action="/editEkstra/{{$ekstra->id}}" method="post" enctype="multipart/form-data">
            @csrf           
                <div class="form-group col-md-10">                  
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="nama" value="{{$ekstra->nama}}">
                    @error('nama') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$ekstra->deskripsi}}">
                    @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="link">Link Web</label>
                    <input type="text" name="link" class="form-control" id="link" value="{{$ekstra->link}}">
                    @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="sosmed">Sosial Media</label>
                    <input type="text" name="sosmed" class="form-control" id="sosmed" value="{{$ekstra->sosmed}}">
                    @error('sosmed') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" value="{{$ekstra->foto}}">
                    @error('foto')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div  class="form-group col-md-10">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Tambah</button>
                </div>            
            </form>
        </div>
    </div>

@endsection