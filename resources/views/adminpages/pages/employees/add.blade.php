@include('adminpages.layout.head')

<!-- Navbar -->
@include('adminpages.layout.nav')
<!-- /.navbar -->
@include('adminpages.layout.aside')
<!-- Main Sidebar Container -->
<div class="container">
    <div class="register-box w-50">
        <div class="register-logo">
            <a href=" ">
                 موظف   جديد
            </a>


        </div>

        <div class="card">
            @if (Session::has('done'))
                <div class="card  card-success">
                    <div class="card-header">
                        <h3 class="card-title"> {{ Session::get('done') }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                            </button>
                        </div>
                        <!-- /.card-tools -->
                    </div>

                </div>
            @endif

            <div class="card-body register-card-body">
                <p class="login-box-msg"> اضافه عضو جديد</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    @error('name')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">

                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                            value="{{ old('name')}}" placeholder="الاسم بالكامل">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>


                    </div>
                    @error('email')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " name="email"
                            value="{{ old('email')}}" placeholder="البريد الالكتروني">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password"
                            placeholder="الرقم السري">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password_confirmation')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                            name="password_confirmation" placeholder="تاكيد الرقم السري">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('phone')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="text" value="{{old('phone')}}" class="form-control @error('phone') is-invalid @enderror" name="phone"
                            placeholder="الجوال">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-phone"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input  name="rule" type="hidden" value="employee">

                    </div>
                    <div class="row">

                        <!-- /.col -->
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">اضف من هنا</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>
</div>

<!-- /.register-box -->

@include('adminpages.layout.footer')



@include('adminpages.layout.script')
