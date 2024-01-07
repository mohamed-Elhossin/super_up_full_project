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
                        <h1>     </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="container-fluid col-md-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="modal-body">
                                <form action="{{ route('model.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="message" class="form-control"
                                            placeholder="تغير الرساله">
                                    </div>
                                    <div class="form-group">
                                        <label for="close">مغلق</label>
                                        <input type="radio" name="status" id="close" value="مغلق">
                                        <hr>
                                        <label for="open">متاح</label>
                                        <input type="radio" name="status" id="open" value="متاح">
                                        <hr>
                                        <label for="open">تاريخ انتهاء</label>
                                        <input type="datetime-local" name="date"   class="form-control" >
                                    </div>
                                    <button class="btn btn-info"> تغير </button>
                                </form>
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
