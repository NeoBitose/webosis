<nav class="navbar navbar-top navbar-expand navbar-dark border-bottom" style="background-color:transparent;">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge text-indigo">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search" style="color: #804000;"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
 
          <ul class="navbar-nav align-items-center ml-md-auto">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">                 
                  <div class="btn ml-2 d-none d-lg-block">
                    <i class="fas fa-user text-dark"></i>
                    <span class="mb-0 text-sm  font-weight-bold" style="color: #804000;">{{ Auth::user()->name }}</span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <!--<div class="dropdown-header noti-title">-->
                <!--  <h6 class="text-overflow m-0">Welcome!</h6>-->
                <!--</div>-->
                <!--<a href="#!" class="dropdown-item">-->
                <!--  <i class="ni ni-single-02"></i>-->
                <!--  <span>My profile</span>-->
                <!--</a>-->
                <!--<a href="#!" class="dropdown-item">-->
                <!--  <i class="ni ni-settings-gear-65"></i>-->
                <!--  <span>Settings</span>-->
                <!--</a>-->
                <!--<a href="#!" class="dropdown-item">-->
                <!--  <i class="ni ni-calendar-grid-58"></i>-->
                <!--  <span>Activity</span>-->
                <!--</a>-->
                <!--<a href="#!" class="dropdown-item">-->
                <!--  <i class="ni ni-support-16"></i>-->
                <!--  <span>Support</span>-->
                <!--</a>          -->
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </div>            
            </li>
          </ul>
        </div>
      </div>
    </nav>