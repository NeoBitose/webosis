@extends('layouts.master')

@section('content')

<div class="card">
    <div class="container">
        <a href="/addformbidang"><button class="btn mt-3" style="color: #804000;"><i class="fas fa-plus"></i> Tambah Data</button></a>            
        <div class="table-responsive py-3">
            <table class="table table-flush container">
                <thead class="thead-light">
                    <tr>
                        <th>no</th>
                        <th>Sie Bidang</th>
                        <th>Tugas</th>                    
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>                
                <tbody>
                @foreach($bidang as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->sie}}</td>
                        <td>{{$item->tugas}}</td>
                        <td><img src="{{asset('img/'.$item->foto)}}" alt="" width="100"></td> 
                        <td>
                        <a href="/editformbidang/{{$item->id}}"><i class="fas fa-edit fa-lg" style="color: #804000;"></i><span>Edit</span></a>  
                        &nbsp;&nbsp;                          
                        <a  href="/deleteBidang/{{ $item->id }}" onclick="return confirm('yakin?');">
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