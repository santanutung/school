<ul class="sidebar-nav">

     <li>
            <a href="{{ route('dashboard.index') }}" class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <i class="gi gi-stopwatch sidebar-nav-icon"></i>
                <span class="sidebar-nav-mini-hide">
                    Dashboard
                </span>
            </a>
        </li>
     <li>
            <a href="{{ route('backend.students.index') }}" class="{{ Request::is('admin/dashboard*') ? 'active' : '' }}">
               <i class="fa fa-users sidebar-nav-icon"></i>
                <span class="sidebar-nav-mini-hide">
                    Student List
                </span>
            </a>
        </li>



</ul>
