@extends('layouts.master')

@section('content')

    <div class="card">
         <div class="card-header">
            <h2 class="" style="color: #804000;">Edit data</h2>
        </div> 
        <div class="container"><br>
            <form action="/editVisi/{{$visi->id}}" method="post" enctype="multipart/form-data">
            @csrf           
                <div class="form-group col-md-10">                  
                    <label for="visi">Visi</label>
                    <textarea type="text" name="visi" class="ckeditor form-control" id="ckeditor" value="{{$visi->visi}}">{{$visi->visi}}</textarea>
                    @error('visi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="form-group col-md-10">                  
                    <label for="misi" class="form-control-label">Misi</label>
                    <textarea type="text" name="misi" class="ckeditor form-control" id="ckeditor" value="{{$visi->misi}}">{{$visi->misi}}</textarea>
                    @error('misi') <span class="text-danger">{{ $message }}</span>@enderror
                </div>                              
                <div  class="form-group col-md-10">
                    <button type="submit" name="submit" class="btn btn-secondary " style="color: #804000;">Edit</button>
                </div>            
            </form>
        </div>
    </div>

@endsection