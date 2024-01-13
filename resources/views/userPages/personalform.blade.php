@include('userPages.layouts.head');
@include('userPages.layouts.header');
<section id="title">
    <div class="text">
        <h2> تقديم طلب جديد
        </h2>
    </div>
</section>

<section id="personForm">
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- /resources/views/post/create.blade.php -->

        <!-- Create Post Form -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">

                        <label for=""> الاسم </label>
                        {{-- 1 --}}
                        <input type="text" required value="{{ old('name') }}" name="name" id="normalInput"
                            class="form-control @error('name') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">نوع الهوية</label>
                        {{-- 2 --}}
                        <select    name="typeofId" id="selectInput"
                            class="form-control @error('typeofId') is-invalid @enderror  " id="">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="بطاقه"> بطاقه احوال </option>
                            <option value="العائله"> كرت العائله </option>
                            <option value="مقيم">هويه مقيم </option>
                        </select>
                        <div id="typeofId" class="none form-group">
                            <label class="text-danger" for=""> </label>
                            {{-- 3 --}}
                            <input type="file" required name="image_id"
                                class="form-control @error('image_id') is-invalid @enderror  ">
                            @error('image_id')
                                <span class="text-danger"> يجرب رفع صوره png , jpeg , jpg
                                    ولا تتعدي 2miga </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">رقم الهوية
                        </label>
                        {{-- 4 --}}
                        <input type="number" required value="{{ old('numberOfId') }}" name="numberOfId" id="normalInput"
                            class="form-control @error('numberOfId') is-invalid @enderror  ">
                        @error('numberOfId')
                            <span>لديك طلب بالفعل</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> المنطقة</label>
                        {{-- 5 --}}
                        <select    name="area" id="normalInput"
                            class="form-control @error('area') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            @foreach ($area as $item)
                                <option value="{{ $item->name }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">المدينة </label>
                        {{-- 6 --}}
                        <select name="city" id="normalInput"
                            class="form-control @error('city') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            @foreach ($city as $item)
                                <option value="{{ $item->name }}"> {{ $item->name }} </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">تاريخ إنتهاء الهوية
                        </label>
                        {{-- 7 --}}
                        <input  required type="date" value="{{ old('expire_data_id') }}" name="expire_data_id" id="normalInput"
                            class="form-control @error('expire_data_id') is-invalid @enderror  ">
                        @error('expire_data_id')
                            <span> ارجو ادخال تاريخ صحيح </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> العمر</label>
                        {{-- 8 --}}
                        <input  required type="number" value="{{ old('age') }}" name="age" id="normalInput"
                            class=" numberInput form-control @error('age') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">الجنسية </label>
                        {{-- 9 --}}
                        <input required type="text" value="{{ old('nationality') }}" name="nationality" id="normalInput"
                            class="form-control @error('nationality') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">الجنس </label>
                        {{-- 10 --}}
                        <select name="gendar" id="selectInput"
                            class="form-control @error('gendar') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="ذكر">ذكر</option>
                            <option value="انثي">انثي</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">الحالة الوظيفية</label>
                        {{-- 11 --}}
                        <select name="jobType" id="selectInput"
                            class="form-control @error('jobType') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="موظف">موظف</option>
                            <option value="متقاعد">متقاعد</option>
                            <option value="عاطل">عاطل</option>
                        </select>
                        <div id="jobType" class="none form-group">
                            <label class="text-danger" for=""> </label>
                            {{-- 12 --}}
                            <input type="file" required name="image_job_status"
                                class="form-control @error('image_job_status') is-invalid @enderror  ">
                            @error('image_job_status')
                                <span class="text-danger"> يجرب رفع صوره png , jpeg , jpg
                                    ولا تتعدي 2miga </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">جهة العمل

                        </label>
                        {{-- 13 --}}
                        <input required type="text" value="{{ old('employer') }}" name="employer" id="normalInput"
                            class="form-control @error('employer') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> الحالة الاجتماعية

                        </label>
                        {{-- 14 --}}
                        <select name="relationStatus" id="selectInput"
                            class="form-control @error('relationStatus') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="مطلقه">مطلقه</option>
                            <option value="ارمل">ارمل</option>
                            <option value="اعزب">اعزب</option>
                            <option value="متزوج">متزوج</option>
                        </select>
                        <div id="relationStatus" class="none form-group">
                            <label class="text-danger" for=""> </label>
                            {{-- 15 --}}
                            <input type="file" required name="marital_image1"
                                class="form-control @error('marital_image1') is-invalid @enderror  ">
                            @error('marital_image1')
                                <span class="text-danger"> يجرب رفع صوره png , jpeg , jpg
                                    ولا تتعدي 2miga </span>
                            @enderror
                            <br>
                            {{-- 16 --}}
                            <input type="file" name="marital_image2"
                                class="form-control @error('marital_image2') is-invalid @enderror  ">
                            @error('marital_image2')
                                <span class="text-danger"> يجرب رفع صوره png , jpeg , jpg
                                    ولا تتعدي 2miga </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> نوع الدخل الشهري</label>
                        <br>
                        {{-- 17 --}}
                        <input type="checkbox" value="الراتب" name="salarytype[]" id="type1">
                        <label for="type1"> الراتب</label>
                        <input type="checkbox" value="التقاعد" name="salarytype[]" id="type2">
                        <label for="type2"> التقاعد</label>
                        <input type="checkbox" value="الضمان" name="salarytype[]" id="type3">
                        <label for="type3"> الضمان</label>
                        <input type="checkbox" value="التأهيل" name="salarytype[]" id="type4">
                        <label for="type4"> التأهيل</label>
                        <input type="checkbox" value="حساب الموطن" name="salarytype[]" id="type5">
                        <label for="type5"> حساب الموطن</label>
                        <label for="type6"> غيره</label>
                        <input type="checkbox" value="غيره" name="salarytype[]" id="type6">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> الدخل الشهري الإجمالي </label>
                        {{-- 18 --}}
                        <input required type="number" value="{{ old('total_salary') }}" name="total_salary"
                            id="normalInput"
                            class=" numberInput form-control @error('total_salary') is-invalid @enderror  ">

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">دخل من يسكنون معك
                        </label>
                        {{-- 19 --}}
                        <input  required type="number" value="{{ old('total_salary_with_you') }}"
                            name="total_salary_with_you" id="normalInput"
                            class=" numberInput form-control @error('total_salary_with_you') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">الحالة الصحية </label>
                        {{-- 20 --}}
                        <select name="helthStatus" id="selectInput"
                            class="form-control @error('helthStatus') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="معاق">معاق</option>
                            <option value="مريض">مريض</option>
                            <option value="سليم">سليم</option>
                        </select>
                        <div id="helthStatus" class="none form-group">
                            <label class="text-danger" for=""> </label>
                            {{-- 21 --}}
                            <input type="file" name="health_image"
                                class="form-control @error('health_image') is-invalid @enderror  ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> المستوى التعليمي

                        </label>
                        {{-- 22 --}}
                        <select name="educational_level" id="selectInput"
                            class="form-control @error('educational_level') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="دبلوم">دبلوم</option>
                            <option value="جامعي">جامعي</option>
                            <option value="ثانوي">ثانوي</option>
                            <option value="متوسط">متوسط</option>
                            <option value="ابتدائي">ابتدائي</option>
                            <option value="متعلم">متعلم</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div name="rent" class="form-group">
                        <label for="">نوع السكن

                        </label>
                        {{-- 23 --}}
                        <select name="rent" id="selectInput"
                            class="form-control @error('rent') is-invalid @enderror  ">
                            <option disabled selected> - الرجاء تحديد اخيار -</option>
                            <option value="ملك">ملك</option>
                            <option value="ايجار">ايجار</option>
                        </select>
                        <div id="rent" class="none form-group">
                            <label class="text-danger" for=""> </label>
                            {{-- 24 --}}
                            <input type="file" name="rent_image"
                                class="form-control @error('rent_image') is-invalid @enderror  ">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">العنوان الوطني

                        </label>
                        {{-- 25 --}}
                        <input required type="text" value="{{ old('national_address') }}" name="national_address"
                            id="normalInput" class="form-control @error('national_address') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> الجوال</label>
                        {{-- 26 --}}
                        <input  required type="text" value="{{ old('normalInput') }}" name="phone" id="normalInput"
                            class="form-control @error('normalInput') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for=""> اسم المصرف
                        </label>
                        {{-- 27 --}}
                        <input  required type="text" value="{{ old('normalInput') }}" name="bank" id="normalInput"
                            class="form-control @error('normalInput') is-invalid @enderror    ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">اسم صاحب الحساب

                        </label>
                        {{-- 28 --}}
                        <input required type="text" value="{{ old('account_holder') }}" name="account_holder"
                            id="normalInput" class="form-control @error('account_holder') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">رقم الحساب البنكي (ايبان)

                        </label>
                        {{-- 29 --}}
                        <input required type="number" value="{{ old('account_number') }}" name="account_number"
                            id="normalInput"
                            class="numberInput form-control @error('account_number') is-invalid @enderror  ">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="">وصف الطلب </label>
                        {{-- 30 --}}
                        <textarea   id="myTextArea" rows="6" value="{{ old('description_request') }}" name="description_request"
                            class="form-control @error('description_request') is-invalid @enderror  ">
                          </textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="done"> الإقرار بأن المعلومات المدخلة أعلاه صحيحة
                        </label>
                        {{-- 31 --}}
                        <input type="checkbox" value="accepted" name="confirmationCheckbox" id="done">

                    </div>
                </div>
                <div class="d-grid col-5">
                    <button id="sendButton" type="submit" class="btn "> ارسال </button>
                </div>
            </div>
        </div>

    </form>

    @if (Session::has('success'))
        <div class="myModel  ">

            <div class="person">

                <p><i class="fa-solid fa-circle-xmark"></i> </p>
                <h6>
                    تم تاكيد طلبك بنجاح يرجي حفظ رقم الطلب
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
