@include('userPages.layouts.head');
@include('userPages.layouts.header');
<section id="title">
    <div class="text">
        <h2> التقديم علي الطلب
        </h2>
    </div>
</section>

<section id="personForm ">
    <form action="{{ route('user.ifFindOldRequest') }}" method="POST">
        @csrf
        <div class="container col-md-6">
            <div class="row">
                <div class="card my-5 py-4">
                    <div class="card-body">

                        <div class="form-group ">
                            <label for="">
                                برجاء ادخال رقم الهويه
                            </label>
                            <input type="number" required name='numberOfId' class="my-3 form-control">
                            @error('numberOfId')
                                <span class="text-danger">
                                    ادخل هذا الحقل المكون من 10 ارقام
                                </span>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="">
                                Google Recaptcha Key </label>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            <br>
                            <span class="text-danger">
                                @error('g-recaptcha-response')
                                    لابد من تحقيق الخانه
                                @enderror
                            </span>
                        </div>

                        <br>
                        <div class="d-grid">
                            <button class="btn btn-success"> اكمل الطلب </button>
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
