@include('userPages.layouts.head');
@include('userPages.layouts.header');
<section id="title">
    <div class="text">
        <h2> تقديم الطلب </h2>
    </div>
</section>

<section id="apply">
    <div class="container col-11">
        <div class="row justify-content-between  ">
            <div class="col-md-4">
                <div class="person">
                    <a href="{{ route('user.ifFindRequest') }}">
                        <p><i class="fa-solid fa-users"></i></p>
                        <h2> تقديم الطلب للافراد </h2>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <p><i class="fa-solid fa-hotel"></i></p>
                    <h2> تقديم الطلب للجهات </h2>
                </div>
            </div>
            <div class="col-md-4">
                <div class="person">
                    <a href="{{ route('user.find') }}">
                        <p><i class="fa-solid fa-magnifying-glass"></i></p>
                        <h2> الاستفسار عن الطلب </h2>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('userPages.layouts.script');
