@extends('layouts.master')

@section('content')

<div class="card">
            <!-- Card header -->            
            <div class="table-responsive py-5 container">
              <table class="table table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>no</th>
                    <th>Title</th>
                    <th>Deskripsi</th>
                    <th>Periode</th>
                    <th>Link Pendaftaran</th>
                    <th>Ilustrasi</th> 
                    <th>Aksi</th>                             
                  </tr>
                </thead>                
                <tbody>
                @foreach($header as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->deskripsi}}</td>
                    <td>{{$item->periode}}</td>
                    <td>{{$item->link_pendaftaran}}</td>
                    <td><img src="{{asset('img/'.$item->ilustrasi)}}" alt="" width="100"></td>
                    <td>   
                      <a href="/editformheader/{{$item->id}}"><i class="fas fa-edit fa-lg" style="color: #804000;"></i><span>Edit</span></a>  
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>

@endsection