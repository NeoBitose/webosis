@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 class="" style="color: #804000;">Edit data</h2>
        </div> 
        <div class="container"><br>
            <form action="/editVideo/{{$video->id}}" method="post" enctype="multipart/form-data">
            @csrf                         
                <div class="form-group col-md-10">                  
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{$video->title}}">
                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="deskripsi">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{$video->deskripsi}}" >
                    @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="iframe">Iframe</label>
                    <input type="text" name="iframe" class="form-control" id="iframe" value="{{$video->iframe}}">
                    @error('iframe') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="link">Link</label>
                    <input type="text" name="link" class="form-control" id="link" value="{{$video->link}}">
                    @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div  class="form-group col-md-10">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Edit</button>
                </div>            
            </form>
        </div>
    </div>

@endsection