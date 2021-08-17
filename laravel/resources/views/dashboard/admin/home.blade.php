@include('partials.header')

    <body style="background-color: #d7dadb">
        <aside>
            <div id="sidebar" class="nav-collapse">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">
                <li class="active">
                  <a class="" href="/dashboard/home">
                                <i class="icon_house_alt"></i>
                                <span>Dashboard</span>
                            </a>
                </li>
                <li class="sub-menu">
                  <a href="javascript:;" class="">
                                <i class="fa fa-edit"></i>
                                <span>Actions</span>
                                <span class="menu-arrow arrow_carrot-right"></span>
                            </a>
                  <ul class="sub">
                    <li><a class="" href="">Create Category</a></li>
                    <li><a class="" href="">Create Forum</a></li>
                  </ul>
                </li>
               <li>
                  <a class="" href="">
                    <i class="fa fa-users"></i>
                    <span>Forums</span>
                  </a>
                </li>
      
                <li>
                  <a class="" href="">
                    <i class="fa fa-users"></i>
                    <span>Categories</span> 
                  </a>
                </li>
      
              
      
                
      
              </ul>
              <!-- sidebar menu end-->
            </div>
          </aside>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3" style="margin-top: 45px">
                     <h4>Admin Dashboard</h4><hr>
                     <table class="table table-striped table-inverse table-responsive">
                         <thead class="thead-inverse">
                             <tr>
                                 <th>Name</th>
                                 <th>Email</th>
                                 <th>Phone</th>
                                 <th>Action</th>
                             </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td scope="row">{{ Auth::guard('admin')->user()->name }}</td>
                                     <td>{{ Auth::guard('admin')->user()->email }}</td>
                                     <td>{{ Auth::guard('admin')->user()->phone }}</td>
                                     <td>
                                         <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
                                         <form action="{{ route('admin.logout') }}" id="logout-form" method="post">@csrf</form>
                                     </td>
                                 </tr>
                             </tbody>
                     </table>
                </div>
            </div>
        </div>
@include('partials.footer')
