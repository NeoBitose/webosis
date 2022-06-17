@extends('layouts.master')

@section('content')

<div class="card">
            <!-- Card header -->
            <div class="table-responsive py-5 container">
                <table class="table table-flush">
                <thead class="thead-light">
                    <tr>
                        <th>no</th>
                        <th>Visi</th>
                        <th>Misi</th>  
                        <th>Aksi</th>                                        
                    </tr>
                </thead>                
                <tbody>
                @foreach($visi as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{!!$item->visi!!}</td>
                        <td>{!!$item->misi!!}</td>  
                        <td>
                            <a href="/editformvisi/{{$item->id}}"><i class="fas fa-edit fa-lg" style="color: #804000;"></i><span>Edit</span></a>  
                        </td>                
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>

@endsection