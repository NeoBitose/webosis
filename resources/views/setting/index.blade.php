@extends('layouts.master')

@section('content')

<div class="card">
            <!-- Card header -->           
            <div class="table-responsive py-5 container">
              <table class="table table-flush container">
                <thead class="thead-light">
                  <tr>
                    <th>no</th>
                    <th>Nama Web</th>
                    <th>Web sekolah</th>  
                    <th>Instagram</th>
                    <th>facebook</th>
                    <th>Whatsapp</th>
                    <th>Email</th>
                    <th>Maps</th>                    
                    <th>Ketos</th>                 
                    <th>Logo Osis</th>                                          
                    <th>Logo Smk</th>
                    <th>Aksi</th>
                  </tr>
                </thead>                
                <tbody>
                @foreach($setting as $item)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama_web}}</td>
                    <td>{{$item->link_web}}</td>  
                    <td>{{$item->instagram}}</td>
                    <td>{{$item->facebook}}</td>
                    <td>{{$item->whatsapp}}</td>
                    <td>{{$item->email}}</td> 
                    <td>{{$item->maps}}</td>
                    <td>{{$item->title_ketos}}</td>                
                    <td><img src="{{asset('img/'.$item->logo_osis)}}" alt="" width="100"></td>
                    <td><img src="{{asset('img/'.$item->logo_smk)}}" alt="" width="100"></td>
                    <td>                      
                      <a href="/editformsetting/{{$item->id}}"><i class="fas fa-edit fa-lg" style="color: #804000;"></i><span>Edit</span></a>                      
                    </td>                 
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>

@endsection