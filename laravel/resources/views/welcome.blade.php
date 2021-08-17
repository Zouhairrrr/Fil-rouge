@include('partials.header')




<section class="mt-4 p-2">
    <nav class="nav justify-content-center shadow-lg">
        <a href="{{ '/' }}"
            class="nav-link mr-3 shadow-lg active text-secondary font-italic font-weight-bold text-dark">Sucsessed
            Stories</a>
        <a class="nav-link mr-3 shadow-lg active text-secondary font-italic font-weight-bold text-dark"
            href="{{ '/' }}">TED-X</a>

        <a class="nav-link mr-3 shadow-lg active text-secondary font-italic font-weight-bold text-dark"
            href="{{ '/' }}">Features</a>

        <a class="nav-link mr-3 shadow-lg active text-secondary font-italic font-weight-bold text-dark"
            href="{{ '/' }}">Random Questions</a>
    </nav>
</section>


<div class="container-fluid mt-5 bg-blue-100">
    <div class="row m-0">
        <div class="col-md-6 text-dark font-weight-lighter text-center">
            <h3 class="text-muted p-4"> Manage Your Future</h3>
            <h6 class="text-center">LOGIN</h6>
            <span class="text-info">You Don't have One?</span>
            <a href="{{ '/register' }}" class="text-info">S'identifier</a>
            <div class="row full-width justify-content-center">
                <div class="form-group p-2 ">
                    <form action="{{ route('seeker.check') }}" method="post" autocomplete="off" class="shadow-lg p-5"
                        style="width: 23rem;">
                        @if (Session::get('fail'))
                            <div class="alert alert-danger">
                                {{ Session::get('fail') }}
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="email" class=" col-form-label">Email</label>
                            <input type="text" class="form-control" name="email" placeholder="Enter email address"
                                value="{{ old('email') }}">
                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                            <div class="form-group mb-0 text-left col-md-12 p-2 bg-transparant">
                                <label for="password" class="col-form-label text-dark font-weight-lighter">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter password"
                                    value="{{ old('password') }}">
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
                    <div class="card text-dark font-weight-normal ">
                        <div class="jumbotron mb-0 shadow-lg bg-light">
                            <h1 class="display-5 text-center">THE NEXT LEVEL !</h1>
                            <p class="lead mt-3">You can Quis similique quidem explicabo dolor, adipisci cupiditate.
                                Excepturi eligendi ratione dicta ex minima?</p>
                            <hr class="my-2">
                            <p>START FREE FOR 1 MOUNTH</p>
                            <p class="lead">
                                <a class="btn btn-primary btn-lg bg-info" href="Jumbo action link" role="button">Start For
                                    Free</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card align-items-lg-center">
                        <div class="card-body shadow-lg">
                            <h4 class="card-title text-center p-4">You-In</h4>
                            <h6 class="card-subtitle text-secondary ">Exclusive</h6>
                            <h6 class="text-center  p-4 text-light font-weight-lighter bg-info mt-4">Lorem ipsum dolor sit
                                amet consectetur adipisicing elit. Consectetur dolor esse temporibus.</h6>
                        </div>
                        <div class="col-md  shadow-sm p-3"
                            style="background-image: url('<?= 'images/right2.JPG' ?>');background-size:cover;background-position:top; background-repeat:no-repeat;">
                            <h3 class="text-dark p-3 font-weight-lighter">One of the most recommended WebApp for Your Future
                            </h3>
                            <div class="row">
                                <div class="col-md-6 nv-hoverArea">
                                    <div class="card" style="opacity:.9;">
                                        <div class="card-body text-center justify-content-md-between">
                                            <h4 class="card-title text-dark font-weight-normal">Zouhair Ouknaz</h4>
                                            <p class="card-subtitle font-weight-lighter text-muted">Web devlopement</p>
                                            <img src="<?= 'images/avatar.jpg' ?>" class="img-fluid col-md-5 p-1"
                                                style="border-radius: 50%;" alt="">
                                            <p class="card-text text-bold text-dark">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Sint laborum quidem enim voluptates! Aliquam excepturi
                                                architecto illo consequuntur nulla?</p>
                                            <a href="#" class="card-link text-primary font-weight-bold">Read More</a>
                                            <a href="#" class="card-link text-primary font-weight-bold">Consultation</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="card" style="opacity:.9;">
                                        <div class="card-body text-center justify-content-md-between">
                                            <h4 class="card-title text-dark font-weight-normal">Youssef Baqali</h4>
                                            <p class="card-subtitle font-weight-lighter text-muted">Web devlopement</p>
                                            <img src="<?= 'images/avatar.jpg' ?>" class="img-fluid col-md-5 p-1"
                                                style="border-radius: 50%;" alt="logo">
                                            <p class="card-text text-bold text-dark">Lorem ipsum dolor sit, amet consectetur
                                                adipisicing elit. Sint laborum quidem enim voluptates! Aliquam excepturi
                                                architecto illo consequuntur nulla?</p>
                                            <a href="#" class="card-link text-primary font-weight-bold">Read More</a>
                                            <a href="#" class="card-link text-primary font-weight-bold">Consultation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body shadow-lg mt-4">
                            <p class="card-text text-center font-weight-lighter">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Laborum illum aperiam tenetur eius hic, cupiditate aspernatur quia
                                sapiente. In doloremque facere ea! Nobis, minima error. Omnis, dolorum? Explicabo minima
                                fugit tempora, voluptatum voluptatibus qui mollitia.</p>
                            <div class=" card-group m-auto">
                                <div class="col-md-6 p-2 text-center"><a href="#"
                                        class="card-link font-weight-bold text-dark">X-Premeum</a>
                                </div>
                                <div class="col-md-6 p-2 text-center"><a href="#"
                                        class="card-link font-weight-bold text-dark">Our Comunnity</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <div>
            <div class="feed-post mt-2 border">
                
                    
                
                @foreach ($posts as $post)
                <div class="p-2 bg-white">
                    <div class="d-flex flex-row justify-content-between align-items-start profile">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle img-responsive" src="" width="50" height="50">
                            <div class="d-flex flex-column ml-2">
                                <h6>
                                    {{ Auth::guard('seeker')->user()->name }}
                                </h6><span class="time">23,456
                                    followers</span>
                            </div>
                        </div><i class="fa fa-ellipsis-h text-black-50 mt-2"></i>
                    </div>
                    <div class="profile-content"><span>
                            {{ $post->description }}
                        </span>
                        <div class="content-image"><img src="https://i.imgur.com/G9dMzll.jpg"></div>
                    </div>
                    <div class="profile-engagements"><span class="text-dark">
                            {{ $post->tag }}
                        </span></div>
                </div>
                @endforeach
               
            </div>

        </div>

        @include('partials.footer')
