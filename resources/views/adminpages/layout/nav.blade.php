<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>

    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3"  method="POST" action="{{ route('logout') }}">
        @csrf

        <a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                this.closest('form').submit();">
            تسجيل الخروج
        </a>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto-navbav">
        <!-- Messages Dropdown Menu -->
 
    </ul>
</nav>
