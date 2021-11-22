<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                @can('dashboard')
                <li  @if($currentPage == 'dashboard') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('dashboard') }}">
                        <i class="fa fa-briefcase"></i>Dashboard</a>
                </li>
                @endcan
                @can('users.index')
                <li @if($currentPage == 'users') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('users.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Users</a>
                </li>
                @endcan
            </ul>
        </nav>
    </div>
</aside>