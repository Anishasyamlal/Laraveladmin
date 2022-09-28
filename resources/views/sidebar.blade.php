<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library -->
    <li class="nav-item menu-open">
      <a href="#" class="nav-link active">
        <i class="nav-icon fas fa-tachometer-alt"></i>
        <p>
          Dashboard
          <i class="right fas fa-angle-left"></i>
        </p>
      </a>
      
    </li>
   
   
   
   
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="nav-icon far fa-plus-square"></i>
        <p>
          Extras
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>
              Login & Register v1
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/examples/login.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Login </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('register')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Register </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/forgot-password.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Forgot Password </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/recover-password.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Recover Password v1</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
   
  </ul>
</nav>