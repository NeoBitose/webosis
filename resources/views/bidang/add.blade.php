@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 class="" style="color: #804000;">Tambah data</h2>
        </div>        
        <div class="container"><br>       
            <form action="/addBidang" method="post" enctype="multipart/form-data">
            @csrf           
                <div class="form-group col-md-10">                  
                    <label for="name">Sie Bidang</label>
                    <input type="text" name="sie" class="form-control" id="sie">
                    @error('sie') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="tugas">Tugas</label>
                    <input type="text" name="tugas" class="form-control" id="tugas">
                    @error('tugas') <span class="text-danger">{{ $message }}</span>@enderror
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