  <nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <div class="navbar-brand" >
          <a><h1 class="" style="color: #804000;">Admin Page</h1></a>
        </div>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->      
          <ul class="navbar-nav">                    
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('home') ? 'active' : ''}}" href="/home" >
                <i class="fas fa-tachometer-alt fa-lg" style="color: #804000;"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
          </ul>
            <hr class="my-3">

            <h5 class="navbar-heading p-0 text-gray">
              <span class="docs-normal"><strong> Content </strong></span>
            </h5>
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('header') ? 'active' : ''}}" href="/header">
                <i class="fas fa-desktop" style="color: #804000;"></i>
                <span class="nav-link-text">Header</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('ketos') ? 'active' : ''}}" href="/ketos">
                <i class="fas fa-user-friends " style="color: #804000;"></i>
                <span class="nav-link-text">Ketos Waketos</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('bidang') ? 'active' : ''}}" href="/bidang">
                <i class="fas fa-user-friends " style="color: #804000;"></i>
                <span class="nav-link-text">Sie Bidang</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('ekstra') ? 'active' : ''}}" href="/ekstra">
                <i class="fas fa-user-friends " style="color: #804000;"></i>
                <span class="nav-link-text">Ekstrakurikuler</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('pendapat') ? 'active' : ''}}" href="/pendapat">
                <i class="fas fa-book" style="color: #804000;"></i>
                <span class="nav-link-text">Pendapat</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('video') ? 'active' : ''}}" href="/video">
                <i class="fas fa-video" style="color: #804000;"></i>
                <span class="nav-link-text">Video</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('visi') ? 'active' : ''}}" href="/visi">
                <i class="fas fa-book-open" style="color: #804000;"></i>               
                <span class="nav-link-text">Visi dan Misi</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">

            <h5 class="navbar-heading p-0 text-gray">
              <span class="docs-normal"><strong>Web</strong></span>
            </h5>
          <ul  class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link {{request() -> is ('setting') ? 'active' : ''}}" href="/setting">
                <i class="fas fa-wrench" style="color: #804000;"></i>
                <span class="nav-link-text ">Setting</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>