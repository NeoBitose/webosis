@extends('layouts.master')

@section('content')

<div class="card">
    <div class="container">
        <a href="/addformpendapat"><button class="btn mt-3" style="color: #804000;"><i class="fas fa-plus"></i> Tambah Data</button></a>            
        <div class="table-responsive py-3">
            <table class="table table-flush container">
                <thead class="thead-light">
                    <tr>
                        <th>no</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Sosial media</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>                
                <tbody>
                @foreach($pendapat as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td><a href="{{$item->sosmed}}">{{$item->sosmed}}</a></td>   
                        <td><img src="{{asset('img/'.$item->foto)}}" alt="" width="100"></td> 
                        <td>
                        <a href="/editformpendapat/{{$item->id}}"><i class="fas fa-edit fa-lg" style="color: #804000;"></i><span>Edit</span></a>  
                        &nbsp;&nbsp;                          
                        <a  href="/deletePendapat/{{ $item->id }}" onclick="return confirm('yakin?');">
                            <i type="button" data-toggle="tooltip" title="" class="fa fa-trash fa-lg" style="color: #804000;"></i>
                            <span>Hapus</span>                      
                        </a>         
                        </td>              
                    </tr>
                @endforeach
                </tbody>
            </table>        
        </div>      
    </div>              
</div>         

@endsection