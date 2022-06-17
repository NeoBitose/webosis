@extends('layouts.master')

@section('content')
    <div class="row">
         <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Header</h5>
                      <span class="h4 mb-0" style="color: #804000;">{{$header}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-desktop"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/header"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Ketos Waketos</h5>
                      <span class="h4 mb-0" style="color: #804000;">{{$ketos}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-user-friends"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/ketos"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Pendapat</h5>
                      <span class="h4 mb-0" >{{$pendapat}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-book"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/pendapat"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
    </div>
    <div class="row">
         <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Video</h5>
                      <span class="h4 mb-0">{{$video}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-video"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/video"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
             <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Visi Misi</h5>
                      <span class="h4 mb-0">{{$visimisi}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-book-open"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/visi"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-md-6">
              <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase mb-0" style="color: #804000;">Setting</h5>
                      <span class="h4 mb-0">{{$setting}}</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-gradient-lighter rounded-circle shadow" style="color: #804000;">
                        <i class="fas fa-wrench"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-sm">
                    <a href="/setting"><span class="text-nowrap" style="color: #804000;">Selengkapnya...</span></a>
                  </p>
                </div>
              </div>
            </div>
    </div>



    <div class="card">
      <div class="container">
      @foreach($pendapats as $item)
        <div class="media media-comment">
          <img class="avatar avatar-lg media-comment-avatar rounded-circle" src="{{asset('img/'.$item->foto)}}">
          <div class="media-body">
            <div class="media-comment-text">
              <h6 class="h5 mt-0">{{$item->name}}</h6>
              <p class="text-sm lh-160">{{$item->deskripsi}}</p>                    
            </div>
          </div>
        </div> 
      @endforeach       
      </div> <br>     
    </div>
    
@endsection