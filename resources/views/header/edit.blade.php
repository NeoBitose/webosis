@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 style="color: #804000;">Edit data</h2>
        </div> 
        <div class="container"><br>
            <form action="/editHeader/{{$header->id}}" method="post" enctype="multipart/form-data">
            @csrf    
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{$header->title}}">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$header->deskripsi}}">
                        @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>       
                <div class="row">
                    <div class="form-group col-md-6">                  
                        <label for="periode">Periode</label>
                        <input type="text" name="periode" class="form-control" id="periode" value="{{$header->periode}}">
                        @error('periode') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group col-md-6">                  
                        <label for="link_pendaftaran">Link Pendaftaran</label>
                        <input type="text" name="link_pendaftaran" class="form-control" id="link_pendaftaran" value="{{$header->link_pendaftaran}}">
                        @error('link_pendaftaran') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                </div>              
                <div class="form-group col-md-10" style="padding: 0px 0px;">
                    <label for="ilustrasi">Ilustrasi</label>
                    <input type="file" name="ilustrasi" class="form-control" id="ilustrasi" value="{{$header->ilustrasi}}">
                    @error('ilustrasi')<span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div  class="form-group col-md-10" style="padding: 0px;">
                    <button type="submit" name="submit" class="btn btn-secondary" style="color: #804000;">Edit</button>
                </div>            
            </form>
        </div>
    </div>

@endsection