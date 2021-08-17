@include('partials.header')

{{-- 
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="{{'/'}}">Home</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Acceuil<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Chek-More</a>
                      <div class="dropdown-menu" aria-labelledby="dropdownId">
                          <a class="dropdown-item" href="{{'/about'}}">About us</a>
                          <a class="dropdown-item" href="{{'/contact'}}">Contact us</a>
                      </div>
                  </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2 " type="text" placeholder="Search">
                  <button class="btn btn-info my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
    </nav> --}}

    <div class="container">
        <div class="row row full-width justify-content-center">
            <div class="form-group p-2">
                <h4>User Login</h4>
                <hr>
                <form action="{{ route('seeker.check') }}" method="post" autocomplete="off" class="shadow-lg p-5" style="width: 30rem;" >
                    @if (Session::get('fail'))
                        <div class="alert alert-danger">
                            {{ Session::get('fail') }}
                        </div>
                    @endif
                    @csrf
                      <div class="form-group">
                          <label for="email" class=" col-form-label">Email</label>
                          <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                          <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group mb-0 text-left col-md-12 p-2 bg-transparant">
                          <label for="password"  class="col-form-label text-dark font-weight-lighter">Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                          <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                      </div>
                      <div class="form-group mb-0 mt-3 justify-content-center align-items-center col-md-12 p-2">
                        <div class="col-md-10 m-auto align-items-center ">
                            <button
                                class="btn btn-block text-light font-weight-bold table-hover bg-info my-2 my-sm-0"
                                type="submit">Lgoin</button>
                        </div>
                    </div>
                      <br>
                      <a href="{{ route('seeker.register') }}">Create new Account</a>
                  </form>
            </div>
        </div>
    </div>

@include('partials.footer')
