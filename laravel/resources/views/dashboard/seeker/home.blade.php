@include('partials.header')


<div class="container m-auto mt-4 bg-light shadow-lg">
    <div class="container">
        <div class="row justify-content-center col-md-12 bg-soft">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Welcome to your Account Profile page on YouIn !') }}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-sm-2">
                <div class="row">
                    <aside
                        class="col-md-12 bg-white shadow-lg d-flex flex-column justify-content-center align-content-center p-1"
                        style="height: 18rem">
                        <div class="media d-flex flex-column justify-content-center align-items-center">
                            <a class="d-flex align-self-center" href="#">
                                <img src="" class=" table-bordered p-1" alt="profile image">
                            </a>
                            <div class="media-body">
                                <h2 class="text-center text-gray">{{ Auth::guard('web')->user()->name }}
                                </h2>
                            </div>
                        </div>
                    </aside>
                    <aside
                        class="col-md-12 bg-white shadow-lg d-flex flex-column justify-content-center align-content-center p-1"
                        style="height: 18rem">

                        <ul class="nav flex-column justify-content-center">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Active link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Active link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">213</a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <section class="col-sm-10 col-md-8">
                <div class="form-group col-md-10">

                    <form action="{{ route('seeker.createPost') }}" method="POST">
                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @csrf
                        <div class="share border bg-white">
                            <div class="d-flex flex-row inputs p-2 py-4"><img class="rounded-circle"
                                    src="https://i.imgur.com/44HzzUN.jpg" width="40">
                                <input type="text" name="description" class="border-0 form-control share-input"
                                    placeholder="Share your thoughts">
                                <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                                </div>
                                <div class="d-flex flex-row inputs p-2 py-4">
                                    <input type="text" name="tag"
                                        class="border-0 text-white bg-dark form-control share-input" placeholder="#tag">
                                    <span class="text-danger">@error('tag'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between border-top">
                                        <div class="d-flex flex-row publish-options">
                                            <div
                                                class="d-flex-column align-items-center border-right p-2 share position-relative">
                                                <div style="position: absolute;top: 35%;
                                                                                left: 35%;">
                                                    <i class="fa fa-camera text-black-50"></i><span class="ml-1">Photo</span>
                                                </div>
                                                <input name="image" class="border-0 form-control cursor-pointer" type="file"
                                                    style="opacity: 0;">
                                            </div>
                                            <div class="align-items-center border-right p-2 share position-relative">
                                                <div style="position: absolute;top: 35%;
                                                                                left: 35%;">
                                                    <i class="fa fa-file text-black-50"></i><span class="ml-1">Files</span>
                                                </div>
                                                <input name="file" class="border-0 form-control cursor-pointer" type="file"
                                                    style="opacity: 0;">
                                            </div>
                                        </div>
                                        <div class="publish-button">
                                            <div class="align-items-center border-left p-2 px-5 btn publish">
                                                <button type="submit" class="btn btn-info">Publish</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </form>
                        </div>

                    </section>
                    <div class="clearfix visible-sm"></div>
                    <div class="col-md-2">
                        <div class="row">
                            <aside class="col-md-12">
                                <ul class="nav justify-content-center">
                                    <li class="nav-item">
                                        <a class="nav-link text-black-50" href="#">#Stage</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black-50" href="#">#Job</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-black-50" href="#">#Formation</a>
                                    </li>
                                </ul>

                            </aside>
                            <hr class="my-2 border">
                            <aside class="col-md-12 mt-4">
                                <p class="text-center text-break">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos esse accusamus voluptatibus voluptatem rem. Optio facere quidem, perspiciatis repudiandae sed ullam. Libero harum ducimus repellat ut, dolore repellendus officiis ullam.
                                </p>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
          



            @include('partials.footer')


            {{-- <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4>user Dashboard</h4>
                <hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ Auth::guard('web')->user()->name }}</td>
                            <td>{{ Auth::guard('web')->user()->email }}</td>
                            <td>
                                <a href="{{ route('seeker.logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('seeker.logout') }}" method="post" class="d-none" id="logout-form">
                                    @csrf</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="form-group col-md-10">
        <form action="{{ route('seeker.createPost') }}" method="POST" class="form-horizontal shadow-lg">
            @if (Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            @csrf
            <fieldset>

                <!-- Form Name -->
                <legend class="text-center display-4">Add Post</legend>

                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-4">
                        <textarea class="form-control" name="description"
                            placeholder="What's On Your Mind Sir ?"></textarea>
                        <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                    </div>
                </div>

                    <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-6">
                                    <input name="tag" type="text" placeholder="tags" class="form-control input-md">
                                    <span class="text-danger">@error('tag'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <input name="image" class="input-file" type="file">
                            </div>
                        </div>
                        <!-- File Button -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <input name="file" class="input-file bg-white btn-light" type="file">
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <button name="submit"
                                    class="btn btn-block text-light font-weight-bold table-hover bg-info my-2 my-sm-0">
                                    Post
                                </button>
                            </div>
                        </div>

            </fieldset>
        </form>
    </div> --}}
