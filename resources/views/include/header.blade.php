<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto" style="margin-top: -20px">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg "><i class="fas fa-bars"></i></a></li>
        </ul>
    </form>
    <div class="dropdown" style="margin-top: -20px">

        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="d-sm-none d-lg-inline-block"></div>{{ Auth::user()->email }} ( {{ Auth::user()->username }} )
        </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
            </div>

    </div>

</nav>
