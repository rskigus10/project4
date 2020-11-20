<nav class="navbar navbar-expand-lg navbar-light bg-success fixed-top">
  <div class="container">
    <h3><i class="fas fa-cart-plus text-black mr-2"></i></h3>
    <a class="navbar-brand font-weight-bold" href="#">MELODI STORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mr-4">
        <li class="nav-item">
          <a class="nav-link active" href="{{ url('/hal1') }}">Beranda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('/hal2') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{url('login')}}">Login</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
      </form>
      <div class="icon mt-2">
      <h5>
      <i class="fas fa-cart-plus text-black ml-3 mr-3"></i>
      <i class="fas fa-envelope mr-3"></i>
      <i class="fas fa-bell mr-3"></i>
      </h5>
    </div>
  </div>
</nav>