@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 class="" style="color: #804000;">Tambah data</h2>
        </div>        
        <div class="container"><br>       
            <form action="/addKetos" method="post" enctype="multipart/form-data">
            @csrf           
                <div class="form-group col-md-10">                  
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" value="{{old('foto')}}">
                    @error('foto')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div  class="form-group col-md-10">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Tambah</button>
                </div>            
            </form>
        </div>
    </div>

@endsection