@include('userPages.layouts.head');
@include('userPages.layouts.header');
<section id="title">
    <div class="text">
        <h2> الاستفسار عن الطلب
        </h2>
    </div>
</section>

<section id="personForm ">
    <form action="{{route("user.findMyRequest")}}" method="POST">
        @csrf
        <div class="container col-md-6">
            <div class="row">
                <div class="card my-5 py-4">
                    <div class="card-body">

                        <div class="form-group ">
                            <label for="">رقم الطلب
                            </label>
                            <input type="number" name="request_number" class="my-3 form-control">
                        </div>
                        <div class="form-group ">
                            <label for="">رقم الهوية
                            </label>
                            <input type="number" name="numberOfId" class="my-3 form-control">
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-success"> بحث عن طلبك </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    @if (Session::has('success'))
        <div class="myModel ">

            <div class="person">

                <p><i class="fa-solid fa-circle-xmark"></i> </p>
                <h6>
                    انت لديك طلب بالفعل وهذا رقم الطلب
                </h6>
                <hr>
                <h4>
                    رقم الطلب : {{ Session::get('success') }}
                </h4>
            </div>

        </div>
    @endif
</section>
@include('userPages.layouts.script');
