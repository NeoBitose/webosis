@extends('layouts.master')

@section('content')

    <div class="card">
        <div class="card-header">
            <h2 class="" style="color: #804000;">Edit data</h2>
        </div> 
        <div class="container"><br>
            <form action="/editPendapat/{{$pendapat->id}}" method="post" enctype="multipart/form-data">
            @csrf           
                <div class="form-group col-md-10">                  
                    <label for="name">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" value="{{$pendapat->name}}">
                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$pendapat->deskripsi}}">
                    @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="sosmed">Sosoal Media</label>
                    <input type="text" name="sosmed" class="form-control" id="sosmed" value="{{$pendapat->sosmed}}">
                    @error('sosmed') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">
                    <label for="foto">Foto</label>
                    <input type="file" name="foto" class="form-control" id="foto" value="{{$pendapat->foto}}">
                    @error('foto')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div  class="form-group col-md-10">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Edit</button>
                </div>                     
            </form>
        </div>
    </div>

@endsection