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
                    @if ($status != null)
                        @if ($status->status == 'مغلق')
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <p><i class="fa-solid fa-users"></i></p>
                                <h2> تقديم الطلب للافراد </h2>
                            </a>
                        @else
                            <a href="{{ route('user.ifFindRequest') }}">
                                <p><i class="fa-solid fa-users"></i></p>
                                <h2> تقديم الطلب للافراد </h2>
                            </a>
                        @endif
                    @else
                        <a href="{{ route('user.ifFindRequest') }}">
                            <p><i class="fa-solid fa-users"></i></p>
                            <h2> تقديم الطلب للافراد </h2>
                        </a>
                    @endif

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
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            @if ($status != null)
                <div class="modal-body">
                    {{ $status->message }}
                </div>
            @endif
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">اغلاق</button>
            </div>
        </div>
    </div>
</div>

@include('userPages.layouts.script');
