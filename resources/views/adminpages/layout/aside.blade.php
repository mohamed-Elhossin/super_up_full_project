<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">

        <span class="brand-text font-weight-light">Super Up </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block"> محمد الحسيني </a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="{{ route('admin.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            الداش بورد
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            الطلبات
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('admin.request.all') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> الطلبات الجديده </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.request.allAllRequest') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> عرض جميع الطلبات </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.request.done') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> الاعتماد </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.request.approve') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الموافقه</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.request.revasion') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> المراجعه </p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            الاعضاء
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> اضافه عضو </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.listAll') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> عرض جميع الاعضاء </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('managers.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>ادرايين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('employee.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>الموظين</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('viewers.index') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p> المشرفين </p>
                            </a>
                        </li>
                    </ul>
                </li>


                <li class="nav-item has-treeview">
                    <a href="{{ route('models.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            النماذج

                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ route('city.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            المدن

                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ route('area.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            المناطق

                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            اعدادات عامة

                        </p>
                    </a>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-chart-pie"></i>
                        <p>
                            سجل الاجراءات

                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
