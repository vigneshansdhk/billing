  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{asset('assets/img/logo.png')}}" class="navbar-brand-img" alt="..." style="height: 400px;width: 100px;">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="{{url('dashboard')}}">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Home</span>
              </a>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#homesubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="ni ni-settings text-blue"></i> Purchase </a>
              <ul class="collapse list-unstyled" id="homesubmenu" >
                 <!--  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('user-new-joining')}}"><i class="ni ni-planet text-blue"></i> Register New User </a>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('puchase/create')}}"><i class="ni ni-single-02 text-blue"></i>   Create</a>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('puchase')}}"><i class="ni ni-istanbul text-blue"></i>   List </a>
                      </a>
                  </li>
              </ul>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#homesubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="ni ni-settings text-blue"></i> Sales </a>
              <ul class="collapse list-unstyled" id="homesubmenu1" >
                 <!--  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('user-new-joining')}}"><i class="ni ni-planet text-blue"></i> Register New User </a>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('sales/create')}}"><i class="ni ni-single-02 text-blue"></i>   Create</a>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('sales')}}"><i class="ni ni-istanbul text-blue"></i>   List </a>
                      </a>
                  </li>
              </ul>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#customermenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="ni ni-settings text-blue"></i>Customers</a>
              <ul class="collapse list-unstyled" id="customermenu" >
                 <!--  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('user-new-joining')}}"><i class="ni ni-planet text-blue"></i> Register New User </a>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('customers/create')}}"><i class="ni ni-single-02 text-blue"></i>Create</a>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('customers/list')}}"><i class="ni ni-istanbul text-blue"></i>   List </a>
                      </a>
                  </li>
              </ul>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#suppliersmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
              <i class="ni ni-settings text-blue"></i>suppliers</a>
              <ul class="collapse list-unstyled" id="suppliersmenu" >
                 <!--  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('user-new-joining')}}"><i class="ni ni-planet text-blue"></i> Register New User </a>
                      </a>
                  </li> -->
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('suppliers/create')}}"><i class="ni ni-single-02 text-blue"></i>Create</a>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a  class="nav-link ml-3" href="{{url('suppliers/list')}}"><i class="ni ni-istanbul text-blue"></i>   List </a>
                      </a>
                  </li>
              </ul>
            </li>
          </ul>
          <hr class="my-3">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();" class="nav-link ml-3"><i class="ni ni-button-power text-primary"></i>Log out</a>
                                                             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </li>
          </ul>
          
        </div>
      </div>
    </div>
  </nav>