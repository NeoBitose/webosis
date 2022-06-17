
<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login Admin</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="ico/png" href="{{asset('frontend/assets/img/logo.png')}}">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
  <link rel="stylesheet" href="{{asset('admin/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}" type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('admin/assets/css/argon.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('admin/assets/css/argon.min.css')}}" type="text/css">
</head>

<body>
  

  <!-- Main content -->
 
    <!-- Header -->
   
    <!-- Page content -->
    <div class="container mb-0">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7 mt-5">
          <div class="card bg-white border-0">           
            <div class="card-body px-lg-5 py-lg-5"> 
              <div class="text-center">
                <img src="{{asset('frontend/assets/img/logo.png')}}" alt="" width="100" class="text-center">
              </div>      
              <div class="text-muted text-center "><h2 class="" style="color: #633636;">Osis Smakensa</h2></div>   

              <form role="form" class="mt-5" method="POST" action="{{ route('login') }}"> 
                @csrf
                <div class="form-group mb-3">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                     <input id="email" type="email" class="form-control @error('email') is-invalid @enderror py-4" name="email" placeholder="email">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror py-4" name="password" required autocomplete="current-password" placeholder="password">

                      @error('password')
                        <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                        </span>
                      @enderror
                  </div>
                </div>
                <div class="custom-control custom-control-alternative custom-checkbox">
                  <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                  <label class="custom-control-label" for=" customCheckLogin">
                    <span class="text-muted">Remember me</span>
                  </label>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" class="btn btn-white" style="color: #633636;">
                    {{ __('Login') }}
                  </button>
                 
                </div>
              </form>                    
            </div>
          </div>        
        </div>
      </div>
    </div>

  <!-- Footer --> 
  <!-- Argon Scripts -->
  <!-- Core -->
 <script src="{{asset('admin/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/js-cookie/js.cookie.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js')}}"></script>
  <script src="{{asset('admin/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js')}}"></script>
 
  <!-- Argon JS -->
  <script src="{{asset('admin/assets/js/argon.js?v=1.1.0')}}"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="{{asset('admin/assets/js/demo.min.js')}}"></script>
</body>

</html>


