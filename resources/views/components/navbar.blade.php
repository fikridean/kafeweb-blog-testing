<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand text-light" href="/">Kafe Web</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item m-2">
          <a class="nav-link {{ Request::is('/') ? 'active text-light' : 'text-secondary' }}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item dropdown m-2">
          <a class="nav-link dropdown-toggle {{ Request::is('posts*') || Request::is('categories') ? 'active text-light' : 'text-secondary' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Blog
          </a>
          <ul class="dropdown-menu m-2 bg-dark text-light">
            <li>
              <a class="nav-link dropdown-item px-3 {{ Request::is('posts*') ? 'active text-light' : 'text-secondary' }}" href="/posts">Posts</a>
            </li>
            <li>
              <a class="nav-link dropdown-item px-3 {{ Request::is('categories') ? 'active text-light' : 'text-secondary' }}" href="/categories">Categories</a>
            </li>
          </ul>
        </li>
        <li class="nav-item m-2">
          <a class="nav-link {{ Request::is('users*') ? 'active text-light' : 'text-secondary' }}" href="/users">Users</a>
        </li>
      </ul>

      @auth
        <div class="dropdown">
          <button class="text-light btn btn-outline-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hello, {{ auth()->user()->name }}
          </button>
          <ul class="dropdown-menu bg-dark">  
            <li><a class="dropdown-item text-light" href="/dashboard"><i class="bi bi-speedometer2"></i> My Dashboard</a></li>
            <li><a class="dropdown-item text-light" href="#"><i class="bi bi-sliders2"></i> Setting</a></li>
            <li><hr class="text-light"></li>
            <form action="{{ route('logout.logoutSubmit') }}" method="POST">
              @csrf

              <li><button class="dropdown-item text-light" href="/logout" formmethod="post">Log out <i class="bi bi-box-arrow-right"></i></button></li>
            </form>
          </ul>
        </div>
      
      @else
        <a type="button" class="btn btn-secondary btn-sm d-flex justify-content-center align-items-center m-2" href="/login">Log in</a>
        <a type="button" class="btn btn-outline-secondary btn-sm d-flex justify-content-center align-items-center m-2" href="/register">Sign up</a>
      
      @endauth
    </div>

    
    
    
  </div>
</nav>