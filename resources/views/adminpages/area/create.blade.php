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
                مدينه جديد
            </a>


        </div>

        <div class="card">
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

            <div class="card-body register-card-body">
                <p class="login-box-msg"> اضافه مدينه جديد</p>

                <form method="POST" action="{{ route('area.store') }}">
                    @csrf
                    @error('name')
                        <span> {{ $message }} </span>
                    @enderror
                    <div class="input-group mb-3">

                        <input type="text" class="form-control @error('name') is-invalid @enderror " name="name"
                            value="{{ old('name') }}" placeholder="الاسم ">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">

                        <select type="text" class="form-control @error('city_id') is-invalid @enderror "
                            name="city_id">
                            @foreach ($city as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach

                        </select>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>


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
