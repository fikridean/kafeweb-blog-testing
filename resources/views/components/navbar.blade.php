<nav class="navbar navbar-expand-lg bg-light text-dark">
  <div class="container">
    <a class="navbar-brand text-dark" href="/">Kafe Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item m-2">
          <a class="nav-link text-dark {{ Request::is('/') ? 'active ' : '' }}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item dropdown m-2">
          <a class="nav-link bg-light text-dark dropdown-toggle {{ Request::is('posts*') || Request::is('categories') ? 'active ' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu m-2 bg-light">
            <li>
              <a class="nav-link text-dark dropdown-item px-3 {{ Request::is('posts*') ? 'active ' : '' }}" href="/posts">Posts</a>
            </li>
            <li>
              <a class="nav-link text-dark dropdown-item px-3 {{ Request::is('categories') ? 'active ' : '' }}" href="/categories">Categories</a>
            </li>
          </ul>
        </li>
        <li class="nav-item m-2">
          <a class="nav-link text-dark {{ Request::is('users*') ? 'active ' : '' }}" href="/users">Users</a>
        </li>
        
      </ul>

      <div class="form-check form-switch d-flex justify-content-start mx-2">
        <input type="checkbox" class="form-check-input" id="darkSwitch" />
        <label class="custom-control-label mx-2" for="darkSwitch"><i class="bi bi-circle-half"></i></label>
      </div>

      @auth
        <div class="dropdown d-flex justify-content-center">
          <button class="btn btn-outline-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu bg-light">  
            <li><a class="dropdown-item text-dark" href="/dashboard"><i class="bi bi-speedometer2"></i> My Dashboard</a></li>
            <li><a class="dropdown-item text-dark" href="#"><i class="bi bi-sliders2"></i> Setting</a></li>
            <li><hr class="text-dark"></li>
            <form action="{{ route('logout.logoutSubmit') }}" method="POST">
              @csrf
              <li><button class="dropdown-item bg-light text-dark" href="/logout" formmethod="post">Log out <i class="bi bi-box-arrow-right"></i></button></li>
            </form>
          </ul>
        </div>
      
      @else
        <a type="button" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center m-2" href="/login">Log in</a>
        <a type="button" class="btn btn-outline-primary btn-sm d-flex justify-content-center align-items-center m-2" href="/register">Sign up</a>
      
      @endauth
    </div>

    
    
    
  </div>
</nav>