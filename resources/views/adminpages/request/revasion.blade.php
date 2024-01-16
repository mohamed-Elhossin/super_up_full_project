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
                        <h1>عرض الطلبات تحت المراجعه</h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                  
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="form-group col-6">
                                    <label for="">بحث</label>
                                    <input type="text" id="myInput" placeholder="بحث" class="form-control">
                                </div>
                                <table id="myTable" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th> # </th>
                                            <th> رقم الطلب</th>
                                            <th>رقم الهويه</th>
                                            <th>الاسم</th>
                                            <th> المدينه </th>
                                            <th> تاريخ التقدم </th>
                                            <th> حاله الطلب </th>
                                            <th> افعل </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <th>{{ $loop->iteration }}</th>
                                                <th>{{ $item->request_number }}</th>
                                                <th>{{ $item->numberOfId }}</th>
                                                <th>{{ $item->name }}</th>
                                                <th>{{ $item->city }}</th>
                                                <th>{{ $item->created_at }}</th>
                                                <th> {{ $item->request_status }} </th>
                                                <th><a class="btn btn-primary" title="عرض الطلب"
                                                        href="{{ route('admin.request.view' , $item->id) }}"> عرض</a> </th>
                                            </tr>
                                        @endforeach
                                    </tbody>
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
