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
                        <h1>عرض الطلبات بالكامل</h1>
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
                                    عرض حاله النموذج
                                </h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">
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
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th> #</th>
                                        <th>الحاله</th>
                                        <th>الرساله</th>
                                        <th>  تاريخ الانتهاء</th>
                                        <th>الادمن</th>
                                        <th>تغير</th>
                                    </tr>

                                    <tr>
                                        <th>طلب الافراد</th>
                                        <th>{{ $apply_status->status }}</th>
                                        <th>{{ $apply_status->message }}</th>
                                        <th>{{ $apply_status->workAfter }}</th>
                                        <th>{{ $userName }}</th>
                                        <th>
                                            <button data-toggle="modal" data-target="#modal-default"
                                                class="btn btn-info">تغير حاله
                                                الطلب</button>
                                        </th>

                                    </tr>


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

<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"> تغير حاله الطلب </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('models.update', $apply_status->id) }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" value="{{ $apply_status->message }}" name="message" class="form-control"
                            placeholder="تغير الرساله">
                    </div>
                    <div class="form-group">
                        <label for="close">مغلق</label>
                        <input type="radio" name="status" id="close" value="مغلق">
                        <hr>
                        <label for="open">متاح</label>
                        <input type="radio" name="status" id="open" value="متاح">
                        <hr>
                        <label for="open">تاريخ الانتهاء</label>
                        <input type="datetime-local" name="date" class="form-control">
                    </div>

                    <button class="btn btn-info"> تغير </button>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close </button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>

<!-- ./wrapper -->

@include('adminpages.layout.script')
