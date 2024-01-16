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
                        <h1>عرض جميع الاعضاء</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-header">
                                <h3 class=" w-100 text-center card-title">
                                    عرض الاعضاء بالصالحيات
                                </h3>
                            </div>
                            <div class="form-group col-6">
                                <label for="">بحث</label>
                                <input type="text" id="myInput" placeholder="بحث" class="form-control">
                            </div>
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
                                <a href="{{ route('employee.create') }}" class="btn btn-info my-3"> اضافه </a>
                                <table id="myTable" class="table table-bordered table-striped">
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم</th>
                                        <th>الاميل</th>
                                        <th>الجوال</th>
                                        <th>الصلاحيه</th>
                                        <th colspan="2">فعل</th>
                                    </tr>
                                    @foreach ($users as $item)
                                        <tr>
                                            <th>{{ $loop->iteration }}</th>
                                            <th>{{ $item->name }}</th>
                                            <th>{{ $item->email }}</th>
                                            <th>{{ $item->phone }}</th>
                                            @if ($item->rule == 'manager')
                                                <th> اداري</th>
                                            @elseif ($item->rule == 'employee')
                                                <th> موظف</th>
                                            @else
                                                <th> مشرف</th>
                                            @endif

                                            <th><a href="{{ route('users.edit', $item->id) }}">تعديل</a> </th>
                                            <th><a href="{{ route('employee.delete', $item->id) }}">حذف</a> </th>
                                            {{-- <th>{{ $item->name }}</th> --}}
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
