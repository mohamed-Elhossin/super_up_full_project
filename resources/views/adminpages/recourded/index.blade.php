@include('adminpages.layout.head')


<div class="wrapper">

    <!-- Navbar -->
    @include('adminpages.layout.nav')
    <!-- /.navbar -->
    @include('adminpages.layout.aside')
    <!-- Main Sidebar Container -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1> عرض سجل الافعال </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <!-- /.card-header -->
                            @if (Session::has('done'))
                                <div class="card  card-success">
                                    <div class="card-header">
                                        <h3 class="card-title"> {{ Session::get('done') }}</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i
                                                    class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <!-- /.card-tools -->
                                    </div>

                                </div>
                            @endif
                            <div class="card-body">
                                {{-- <a href="{{ route('employee.create') }}" class="btn btn-info my-3"> اضافه </a> --}}
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>ملحوظه التغيير</th>
                                        <th>الفاعل</th>
                                        <th>تاريخ الفعل</th>
                                    </tr>
                                    @foreach ($tracks as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $item->action }}</th>
                                            <th>{{ $item->admin_name }}</th>
                                            <th>{{ $item->created_at }}</th>
                                        </tr>
                                    @endforeach

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- Footer --}}
    @include('adminpages.layout.footer')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('adminpages.layout.script')
