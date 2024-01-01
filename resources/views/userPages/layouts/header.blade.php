<header id="header">
    <div class="first_header  container">
        <div class="row">
            <div class="col-md-2 order-2 order-lg-1   ">
                <div class="d-flex justify-content-between">

                    <div class="logo">
                        <a href="{{ route('user.index') }}">
                            <img src="{{ asset('assets/img/Logo.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="icon w-25 text-start ">
                        <button class=" " type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">

                        <div class="offcanvas-body">

                            <a class="nav-link" href="#">الرئسيه</a>


                            <a class="nav-link ">عن المؤسسه</a>


                            <a class="nav-link "> مشاريعنا </a>


                            <a class="nav-link "> النافذه الاعلامية</a>


                            <a class="nav-link ">شركاء النجاح</a>


                            <a href="{{ route('user.index') }}" class="nav-link active "> تقديم الطلب</a>


                            <a class="nav-link "> اتصل بنا</a>

                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-2 order-1 order-lg-2 ">
                <div class="tw">
                    <i class="fa-brands fa-twitter"></i>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg ">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link" href="#">الرئسيه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">عن المؤسسه</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "> مشاريعنا </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            النافذه الاعلامية
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">الاخبار</a></li>
                            <li><a class="dropdown-item" href="#">البوم الصور </a></li>

                            <li><a class="dropdown-item" href="#">معرض الفيديو</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link ">شركاء النجاح</a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ route('user.index') }}" class="nav-link active "> تقديم الطلب</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link "> اتصل بنا</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
