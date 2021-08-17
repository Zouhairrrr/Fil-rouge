@include('partials.header')

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4" style="margin-top: 45px">
                 <h4>Job Provider Register</h4><hr>
                 <form action="{{ route('provider.create') }}" method="post">
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
                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" name="name" placeholder="Enter full name" value="{{ old('name') }}">
                         <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter email address" value="{{ old('email') }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="company_name">Entreprise Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Enter company name" value="{{ old('company_name') }}">
                        <span class="text-danger">@error('company_name'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="members">Entreprise Members</label>
                        <input type="text" class="form-control" name="members" placeholder="Enter company Memebrs" value="{{ old('members') }}">
                        <span class="text-danger">@error('members'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" name="password" placeholder="Enter password" value="{{ old('password') }}">
                         <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                     </div>
                     <div class="form-group">
                        <label for="cpassword">Confirm Password</label>
                        <input type="password" class="form-control" name="cpassword" placeholder="Enter confirm password" value="{{ old('cpassword') }}">
                        <span class="text-danger">@error('cpassword'){{ $message }}@enderror</span>
                    </div>
                     <div class="form-group">
                         <button type="submit" class="btn btn-info">Register</button>
                     </div>
                     <br>
                     <a href="{{ route('provider.login') }}">I already have an account, Login now</a>
                 </form>
            </div>
        </div>
    </div>
    @include('partials.footer')
