<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">kafe web</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav py-3">
    <form action="{{ route('logout.logoutSubmit') }}" method="POST">
      @csrf

      <button class="dropdown-item text-light px-3" href="/logout" formmethod="post"><span data-feather="log-out" class="align-text-bottom"></span> Log out</button>
    </form>
  </div>
</header>