@include('partials.header')


    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                <h4>Entreprise Dashboard</h4>
                <hr>
                <table class="table table-striped table-inverse table-responsive">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Company name</th>
                            <th>Members</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ Auth::guard('provider')->user()->name }}</td>
                            <td>{{ Auth::guard('provider')->user()->email }}</td>
                            <td>{{ Auth::guard('provider')->user()->company_name }}</td>
                            <td>{{ Auth::guard('provider')->user()->members }}</td>

                            <td>
                                <a href="{{ route('provider.logout') }}"
                                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('provider.logout') }}" method="post" class="d-none"
                                    id="logout-form">@csrf</form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        @include('partials.footer')
