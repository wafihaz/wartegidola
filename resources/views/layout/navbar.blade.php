<nav class="navbar navbar-expand-lg bg-success d-block" data-bs-theme="dark" style="width: 100%; height:60px; position:fixed; z-index:1">
  <div class="container-fluid me-auto">
    <a class="navbar-brand me-auto fw-bold ps-4" href="{{route('home')}}#home">WARUNG MAKAN</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarSupportedContent">
      <ul class="navbar-nav">
      <li class="nav-item ">
          <a class="nav-link @yield('home') me-auto" aria-current="page" href="{{ route('home')}}#home">HOME</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link @yield('menu') me-auto" aria-current="page" href="{{ route('menu')}}">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('admin')" aria-current="page" href="{{route('index')}}">ADMIN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-body-tertiary" aria-disabled="true">SELAMAT DATANG</a>
        </li>
      </ul>
    </div>
  </div>
</nav>