<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          @auth            
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </a>            
          </li>
          @endauth
          <li class="nav-item">
            <a href="/category" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
              Category
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link ">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Question Box
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/question" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reply</p>
                </a>
              </li>
            </ul>
          </li>
          @guest
            @if (Route::has('login'))
            <li class="nav-item">
              <a href="{{ route('login') }}" class="nav-link">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>
                Login
                </p>
              </a>
            </li>
            @endif
          @else
          <li class="nav-item bg-danger mt-4">
              <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fa fa-sign-out-alt"></i>
                <p>
                Logout
                </p>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            @endguest
        </ul>
      </nav>