<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-layout-text-window-reverse"></i><span>User Management</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('user') }}">
              <i class="bi bi-circle"></i><span>All User</span>
            </a>
          </li>
          <li>
            <a href="{{ route('create.user') }}">
              <i class="bi bi-circle"></i><span>Create User</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

    </ul>

</aside>