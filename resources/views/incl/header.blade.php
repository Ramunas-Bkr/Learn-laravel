@section('header')

<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">Rambek</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts-data')}}">Messages</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>
    