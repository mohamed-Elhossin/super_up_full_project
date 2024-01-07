@include('userPages.layouts.head');
@include('userPages.layouts.header');
<section id="title">
    <div class="text">
        <h2>
            عرض طلبك
        </h2>
    </div>
</section>

<div class="wrapper">


    <!-- Main Sidebar Container -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>عرض الطلب </h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content my-4">
            <div class="container-fluid col-md-9 text-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h3 class="w-100 card-title text-center">
                                            عرض طلب رقم : {{ $data->request_number }}
                                        </h3>
                                    </div>
                                    <div class="col-md-3">
                                        <button onclick="printDiv('divToPrint')" class="btn btn-info">طباعه</button>
                                    </div>


                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body" id="divToPrint">
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
                                        <!-- /.card-header -->
                                        <!-- /.card-body -->
                                    </div>
                                @endif
                                <h3 class="w-100 card-title text-center">
                                    حاله الطلب : {{ $data->request_status }}
                                </h3>
                                <table id="example1" class="table MyTableView  table-bordered table-striped">
                                    <tr>
                                        <th> الاسم : </th>
                                        <th>{{ $data->name }}</th>

                                        <th>رقم الهويه : </th>
                                        <th>{{ $data->numberOfId }}</th>
                                    </tr>
                                    <tr>
                                        <th> رقم الطلب : </th>
                                        <th>{{ $data->request_number }}</th>
                                        <th> المدينه :</th>
                                        <th> {{ $data->city }}</th>
                                    </tr>
                                    <tr>

                                        <th> صوره الطباقه :</th>
                                        <th> <img width="40"
                                                src="{{ asset("upload/personalForm/$data->image_id ") }}"
                                                alt=""> </th>
                                        <th> نوع الهويه </th>
                                        <th> {{ $data->typeofId }}</th>
                                    </tr>

                                    <tr>
                                        <th> المنطقه :</th>
                                        <th> {{ $data->area }}</th>
                                        <th> المدينه </th>
                                        <th> {{ $data->city }}</th>
                                    </tr>

                                    <tr>
                                        <th> تاريخ انتهاء البطاقه :</th>
                                        <th> {{ $data->expire_data_id }}</th>
                                        <th> العمر </th>
                                        <th> {{ $data->age }}</th>
                                    </tr>

                                    <tr>
                                        <th> الجنسيه :</th>
                                        <th> {{ $data->nationality }}</th>
                                        <th> الجنس </th>
                                        <th> {{ $data->gendar }}</th>
                                    </tr>

                                    <tr>
                                        <th> نوع العمل :</th>
                                        <th> {{ $data->jobType }}</th>
                                        <th> صوره من العمل </th>

                                        <th>
                                            <img width="40"
                                                src="{{ asset("upload/personalForm/$data->image_job_status ") }}"
                                                alt="">
                                        </th>
                                    </tr>

                                    <tr>
                                        <th> صاحب العمل :</th>
                                        <th> {{ $data->employer }}</th>
                                        <th> الحالة الاجتماعية : </th>
                                        <th> {{ $data->relationStatus }}</th>
                                    </tr>

                                    <tr>
                                        @if ($data->marital_image1 === null)
                                            <th> صوره </th>
                                            <th> لايوجد</th>
                                        @else
                                            <th> صوره 1 :</th>
                                            <th>
                                                <img width="40"
                                                    src="{{ asset("upload/personalForm/$data->marital_image1 ") }}"
                                                    alt="">
                                            </th>
                                        @endif
                                        @if ($data->marital_image2 === null)
                                            <th> صوره </th>
                                            <th> لايوجد</th>
                                        @else
                                            <th> صوره 2 </th>
                                            <th>
                                                <img width="40"
                                                    src="{{ asset("upload/personalForm/$data->marital_image2 ") }}"
                                                    alt="">
                                            </th>
                                        @endif
                                    </tr>

                                    <tr>
                                        <th> نوع الدخل الشهري :</th>
                                        <th> {{ $data->salarytype }}</th>
                                        <th> الدخل الشهري الإجمالي </th>
                                        <th> {{ $data->total_salary }}</th>
                                    </tr>

                                    <tr>
                                        <th> دخل من يسكنون معك :</th>
                                        <th> {{ $data->total_salary_with_you }}</th>
                                        <th> المستوى التعليمي :</th>
                                        <th> {{ $data->educational_level }}</th>
                                    </tr>

                                    <tr>
                                        <th> الحالة الصحية :</th>
                                        <th> {{ $data->helthStatus }}</th>
                                        @if ($data->health_image === null)
                                            <th> صوره الحاله الصحيه </th>
                                            <th> لايوجد</th>
                                        @else
                                            <th> صوره الحاله الصحيه </th>
                                            <th>
                                                <img width="40"
                                                    src="{{ asset("upload/personalForm/$data->health_image ") }}"
                                                    alt="">
                                            </th>
                                        @endif

                                    </tr>



                                    <tr>
                                        <th> نوع السكن :</th>
                                        <th> {{ $data->rent }}</th>

                                        @if ($data->rent_image === null)
                                            <th> صوره ايجار </th>
                                            <th> لايوجد</th>
                                        @else
                                            <th>
                                                <img width="40"
                                                    src="{{ asset("upload/personalForm/$data->rent_image ") }}"
                                                    alt="">
                                            </th>
                                        @endif
                                    </tr>


                                    <tr>
                                        <th> العنوان الوطني :</th>
                                        <th> {{ $data->national_address }}</th>
                                        <th> الجوال </th>
                                        <th> {{ $data->phone }}</th>
                                    </tr>

                                    <tr>
                                        <th> اسم المصرف :</th>
                                        <th> {{ $data->bank }}</th>
                                        <th> اسم صاحب الحساب </th>
                                        <th> {{ $data->account_number }}</th>
                                    </tr>

                                    <tr>
                                        <th> اسم صاحب الحساب :</th>
                                        <th> {{ $data->account_holder }}</th>

                                        <th> وصف الطلب :</th>
                                        <th> {{ $data->description_request }}</th>

                                    </tr>

                                    <tr>
                                        <th> تاريخ التقدم :</th>
                                        <th> {{ $data->created_at }}</th>
                                        <th> تاريخ اخر تعديل :</th>
                                        <th> {{ $data->updated_at }}</th>
                                    </tr>
                                    {{-- <h6> حاله الطلب : </h6> --}}
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>






    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('userPages.layouts.script');
