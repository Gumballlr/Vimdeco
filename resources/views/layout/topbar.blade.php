  <header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">

      <div class="toggle-menu">
        <i class="zmdi zmdi-menu"></i>
      </div>

      <!--- search form -->
      <!-- <div class="search-bar flex-grow-1">
          <div class="input-group">
            <div class="input-group-prepend search-arrow-back">
              <button class="btn btn-search-back" type="button"><i class="zmdi zmdi-long-arrow-left"></i></button>
            </div>
            <input type="text" class="form-control" placeholder="search">
            <div class="input-group-append">
              <button class="btn btn-search" type="button"><i class="zmdi zmdi-search"></i></button>
            </div>
          </div>
        </div> -->

      <ul class="navbar-nav align-items-center right-nav-link ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown"
            href="javascript:void();">
            <span class="user-profile"><img src="assets/images/avatars/avatar-13.png" class="img-circle"
                alt="user avatar"></span>
          </a>
          <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item user-details">
              <a href="javaScript:void();">
                <div class="media">
                  <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-13.png"
                      alt="user avatar"></div>
                  <div class="media-body">
                    <h6 class="mt-2 user-title">{{Auth::guard('admin')->user()->name}}</h6>
                    <p class="user-subtitle">{{Auth::guard('admin')->user()->email}}</p>
                  </div>
                </div>
              </a>
            </li>
            <li class="dropdown-divider"></li>

            <li class="dropdown-item"><i class="zmdi zmdi-balance-wallet mr-3"></i>Account</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-settings mr-3"></i>Setting</li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-item"><i class="zmdi zmdi-power mr-3"></i>Logout</li>
          </ul>
        </li>
        <li class="nav-item">
          <a style="color:black;font-size:18px">{{Auth::guard('admin')->user()->name_user}}</a>
        </li>

        <li class=" nav-item dropdown language">
          <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="{{url('/logout')}}"><i
              class="zmdi zmdi-power mr-3"></i></a>

        </li>

      </ul>
    </nav>
  </header>