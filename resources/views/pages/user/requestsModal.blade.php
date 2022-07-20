<div class="modal fade page" id="requestsModal" tabindex="-1" aria-labelledby="requestsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 requests-position">

                        <div class="modal-header border-0">
                            <div class="zhd-center-close">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="dropdown register-pdf d-none">

                                <button class="btn bg-light dropdown" type="button" id="dropdownMenuButton1"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-file-pdf" style="color:#1F5098; font-size:35px"></i>
                                </button>

                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                    @if((@$user->purposals)!=null)
                                    <li>
                                        <a class="dropdown-item"
                                            href="{{ route('purposal.pdf',@$user->purposals->id) }}">
                                            New Purposal
                                        </a>
                                    </li>
                                    @else
                                    @endif
                                    @if((@$user->invoices)!=null)
                                    <li>
                                        <a class="dropdown-item" href="{{ route('invoice.pdf',@$user->invoices->id) }}">
                                            New Invoice
                                        </a>
                                    </li>
                                    @endif

                                </ul>
                            </div>



                            <div>
                                <span class="outline dot">اهلاً وسهلاً بكم</span>
                                <h1 class="modal-title right centr-main-title"><span class="btm-line d-flex">طلباتي<span
                                            class="inner-line"></span></span></h1>
                            </div>

                            <div class="profile zhd-box">
                                @if(@auth()->user()->name == null)
                                    <button class="btn btn-sky profile-btn invert">
                                        المصمم
                                    </button>
                                @else
                                    <button class="btn btn-sky profile-btn invert">
                                        {{-- المصمم --}}
                                        {{ auth()->user()->name }}
                                    </button>
                                @endif
                                {{-- <button class="btn btn-sky profile-btn invert">
                                    المصمم
                                </button> --}}
                                @if(@auth()->user()->profile == null)
                                <a href="#profile">
                                    <img src="{{asset('user/assets/icons/avatar.svg')}}" alt="avatar">
                                </a>
                                @else
                                <a href="#profile">
                                    <img src="{{ asset('storage/' . auth()->user()->profile) }}"
                                        style="height:40px; width:40px; border-radius: 50%">
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="nav nav-tabs designer-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            @auth
                                            <button class="nav-link active" id="medical-tab tab tab1"
                                                data-bs-toggle="tab" data-bs-target="#medical-service" type="button"
                                                role="tab" aria-controls="medical" aria-selected="true"><span
                                                    class="notification">{{$orders->count()}}</span> الخدمات
                                                الطبية</button>
                                            @else
                                            <button class="nav-link active" id="medical-tab tab tab1"
                                                data-bs-toggle="tab" data-bs-target="#medical-service" type="button"
                                                role="tab" aria-selected="true"><span class="notification">0</span>
                                                الخدمات الطبية</button>
                                            @endauth
                                        </li>

                                        <li class="nav-item" role="presentation">
                                            @auth
                                            <button class="nav-link" id="public-tab tab tab2" data-bs-toggle="tab"
                                                data-bs-target="#public-services" type="button" role="tab"
                                                aria-controls="public" aria-selected="false"><span
                                                    class="notification">{{$publics->count()}}</span>الخدمات
                                                العامة</button>
                                            @else
                                            <button class="nav-link active" id="public-tab tab tab2"
                                                data-bs-toggle="tab" data-bs-target="#public-services" type="button"
                                                role="tab" aria-selected="true"><span class="notification">0</span>
                                                الخدمات العامة</button>
                                            @endauth

                                        </li>
                                        <!-- designer -->
                                        <li class="nav-item" role="presentation">
                                            @auth
                                            <button class="nav-link" id="designer-tab tab tab3" data-bs-toggle="tab"
                                                data-bs-target="#designer-services" type="button" role="tab"
                                                aria-controls="designer" aria-selected="false"><span
                                                    class="notification">{{$orders_designer->count()}}</span>مجتمع المصممين</button>
                                            @else
                                            <button class="nav-link active" id="designer-tab tab tab3"
                                                data-bs-toggle="tab" data-bs-target="#designer-services" type="button"
                                                role="tab" aria-selected="true"><span class="notification">0</span>
                                                مجتمع المصممين</button>
                                            @endauth

                                        </li>
                                        <!-- designer-end -->

                                        {{--    --}}
                                        @if(Auth::check())
                                        @if(Auth::user()->role == 'designer')
                                        <li class="nav-item" role="presentation">
                                            @auth
                                            <button class="nav-link" id="perposal-tab tab tab4" data-bs-toggle="tab"
                                                data-bs-target="#perposal-services" type="button" role="tab"
                                                aria-controls="designer" aria-selected="false"><span
                                                    class="notification">{{$orders_designer->count()}}</span>مقترحاتك</button>
                                            @else
                                            <button class="nav-link active" id="perposal-tab tab tab4"
                                                data-bs-toggle="tab" data-bs-target="#perposal-services" type="button"
                                                role="tab" aria-selected="true"><span class="notification">0</span>
                                                aaa
                                            </button>
                                            @endauth
                                        </li>
                                        @endif
                                        @endif
                                        {{--    --}}
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="medical-service" role="tabpanel"
                                            aria-labelledby="medical-tab">
                                            <div class="row">
                                                @foreach($orders as $orde)
                                                <div class="col-md-12 col-lg-11">
                                                    <a class="nav-link" href="{{route('vieworder',$orde->id)}}">
                                                        <div data-id='{{$orde->id}}' class="request-box editProduct">
                                                            <div class="heading">
                                                                <h5>رقم الطلب:</h5>
                                                                <span>{{$orde->id}}</span>
                                                            </div>
                                                            <div class="data">
                                                                <p>حالة الطلب:</p>
                                                                <span> {{$orde->status}}</span>
                                                                <p>اسم المريض:</p>
                                                                <span> {{$orde->pa_name}}</span>
                                                                <p>اسم الطبيب:</p>
                                                                <span> {{$orde->dr_name}}</span>
                                                                <p>تاريخ الطلب:</p>
                                                                <span class="dateTime">{{$orde->created_at}}</span>
                                                            </div>
                                                        </div>
                                                    </a>

                                                </div>

                                                <div class="col d-none">
                                                    @if((@$orde->PerposalPDF)!=null)
                                                    <a href="{{ route('perposalAction',@$orde->id) }}">
                                                    more
                                                    </a>
                                                @endif
                                                    <div class="dropdown  pt-4">
                                                        <button class="btn bg-light dropdown" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-file-pdf"
                                                                style="color:#1F5098; font-size:35px"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                                            @if((@$orde->PerposalPDF)!=null)

                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('purposal.pdf',@$orde->PerposalPDF->id) }}">
                                                                    New Purposal
                                                                </a>
                                                            </li>

                                                            @endif

                                                            @if((@$orde->InvoicePDF)!=null)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('invoice.pdf',@$orde->InvoicePDF->id) }}">
                                                                    New Invoice
                                                                </a>
                                                            </li>
                                                            @endif

                                                        </ul>
                                                    </div>

                                                </div>


                                                @endforeach
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="public-services" role="tabpanel"
                                            aria-labelledby="public-tab">
                                            <div class="row">
                                                @foreach($publics as $orde)
                                                <div class="col-12">
                                                    <a class="nav-link" href="{{route('vieworderpublic',$orde->id)}}">
                                                        <div class="col-md-12 col-lg-11">
                                                            <div class="request-box" data-bs-toggle="modal"
                                                                data-bs-target="#publicServiesFinalModal">
                                                                <div class="heading">
                                                                    <h5>رقم الطلب:</h5>
                                                                    <span>{{$orde->id}}</span>
                                                                </div>
                                                                <div class="data">
                                                                    <p>حالة الطلب:</p>
                                                                    <span> عرض السعر</span>
                                                                    <p>الاسم كامل:</p>
                                                                    <span> {{$orde->full_name}}</span>
                                                                    <p>التخصص:</p>
                                                                    <span> {{$orde->specialization}}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col d-none">
                                                    @if(($orde->PerposalPDF)!=null)
                                                    <a href="{{ route('perposalAction',$orde->PerposalPDF->order_id) }}">
                                                    more
                                                    </a>
                                                @endif
                                                    @if(($orde->PerposalPDF)!=null)
                                                    <div class="dropdown  pt-4">
                                                        <button class="btn bg-light dropdown" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-file-pdf"
                                                                style="color:#1F5098; font-size:35px"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                                                            @if(($orde->PerposalPDF)!=null)

                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('purposal.pdf',$orde->PerposalPDF->id) }}">
                                                                    New Purposal
                                                                </a>
                                                            </li>
                                                            @else
                                                            @endif
                                                            @if((@$order->InvoicePDF)!=null)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('invoice.pdf',@$order->InvoicePDF->id) }}">
                                                                    New Invoice
                                                                </a>
                                                            </li>
                                                            @else
                                                            @endif
                                                            @if((@$order->InvoicePDF)!=null)
                                                            <li>
                                                                <a class="dropdown-item"
                                                                    href="{{ route('invoice.pdf',@$order->InvoicePDF->id) }}">
                                                                    New Invoice
                                                                </a>
                                                            </li>
                                                            @endif

                                                        </ul>
                                                    </div>
                                                    @endif
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="designer-services" role="tabpanel"
                                            aria-labelledby="designer-tab">
											@if(Auth::user())
											@if(Auth::user()->role == 'designer')
                                            @foreach($orders_designer as $order_designer)
                                            <div class="row">
                                                <a class="nav-link" href="#">
                                                    <div class="col-md-12" >
														@if(Auth::user())
                                                         @if(Auth::user()->role == 'designer')
                                                        <div class="request-box" data-bs-toggle="modal"
                                                            data-bs-target="#designer-order" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                            <div class="heading">
                                                                <h5>رقم الطلب:</h5>
                                                                <span>{{$order_designer->order_no}}</span>
                                                            </div>
                                                            <div class="data">
                                                                <p>حالة الطلب:</p>
                                                                <span>{{$order_designer->status}} </span>
                                                                <p>اسم العميل:</p>
                                                                <span> غير معروف</span>
                                                                <p>المنتج المطلوب:</p>
                                                                <span> {{$order_designer->notes}}</span>
                                                            </div>
                                                        </div>

                                                        @else

                                                           <div class="request-box" data-bs-toggle="modal"
                                                            data-bs-target="#userRequestModal" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                            <div class="heading">
                                                                <h5>رقم الطلب:</h5>
                                                                <span>{{$order_designer->order_no}}</span>
                                                            </div>
                                                            <div class="data">
                                                                <p>حالة الطلب:</p>
                                                                <span>{{$order_designer->status}} </span>
                                                                <p>اسم العميل:</p>
                                                                <span> غير معروف</span>
                                                                <p>المنتج المطلوب:</p>
                                                                <span> {{$order_designer->notes}}</span>
                                                            </div>
                                                        </div>

                                                        @endif
														@endif

                                                    </div>
                                                </a>
                                            </div>
                                            @endforeach

											@else
                                       @foreach($orders_user as $order_designer)
                                            <div class="row">
                                                    <div class="col-md-12" >
                                                        <a class="nav-link" href="#" value="{{$order_designer->PerposalPDF->order_id ?? ' '}}">

                                                                @if(Auth::user())
                                                                @if(Auth::user()->role == 'designer')
                                                                <div class="request-box" data-bs-toggle="modal"
                                                                    data-bs-target="#designer-order" class="designer_request" value="{{$order_designer->id}}">
                                                                    <div class="heading">
                                                                        <h5>رقم الطلب:</h5>
                                                                        <span>{{$order_designer->order_no}}</span>
                                                                    </div>
                                                                    <div class="data">
                                                                        <p>حالة الطلب:</p>
                                                                        <span>{{$order_designer->status}} </span>
                                                                        <p>اسم العميل:</p>
                                                                        <span> غير معروف</span>
                                                                        <p>المنتج المطلوب:</p>
                                                                        <span> {{$order_designer->notes}}</span>
                                                                    </div>
                                                                </div>

                                                                @else



                                                                <div class="request-box" data-bs-toggle="modal"
                                                                    data-bs-target="#userRequestModal" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                                    <div class="heading">
                                                                        <h5>رقم الطلب:</h5>
                                                                        <span>{{$order_designer->order_no}}</span>
                                                                    </div>
                                                                    <div class="data">
                                                                        <p>حالة الطلب:</p>
                                                                        <span>{{$order_designer->status}} </span>
                                                                        <p>اسم العميل:</p>
                                                                        <span> غير معروف</span>
                                                                        <p>المنتج المطلوب:</p>
                                                                        <span> {{$order_designer->notes}}</span>
                                                                    </div>
                                                                </div>

                                                                @endif
                                                                @endif
                                                                </a>
                                                            </div>

													 <div class="col-md-1 pdf-designer">
                                                    @if(($order_designer->PerposalPDF)!=null)
                                                    <a href="{{ route('perposalAction',$order_designer->PerposalPDF->order_id) }}">
                                                    more
                                                    </a>
                                                @endif
														  @if(($order_designer->PerposalPDF)!=null)
                                                    <div class="dropdown  pt-4">
                                                        <button class="btn bg-light dropdown" type="button"
                                                            id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i class="fas fa-file-pdf"
                                                                style="color:#1F5098; font-size:35px"></i>
                                                        </button>
														@endif

                                                </div>
                                            </div>
                                            @endforeach
											@endif
											@endif
                                        </div>
                                        <div class="tab-pane fade" id="perposal-services" role="tabpanel"
                                        aria-labelledby="public-tab">
                                        @if(Auth::user())
@if($orders_designer_user)
                                         @if(Auth::user()->id==$orders_designer_user->user_id)
                                       {{--  @foreach($orders_designer as $order_designer)  --}}
                                        <div class="row">
                                            <a class="nav-link" href="#">
                                                <div class="col-md-12" >
                                                    @if(Auth::user())
                                                     {{--  @if(Auth::user()->role == 'designer')
                                                    <div class="request-box" data-bs-toggle="modal"
                                                        data-bs-target="#designer-order" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                        <div class="heading">
                                                            <h5>رقم الطلب:</h5>
                                                            <span>{{$order_designer->order_no}}</span>
                                                        </div>
                                                        <div class="data">
                                                            <p>حالة الطلب:</p>
                                                            <span>{{$order_designer->status}} </span>
                                                            <p>اسم العميل:</p>
                                                            <span> غير معروف</span>
                                                            <p>المنتج المطلوب:</p>
                                                            <span> {{$order_designer->notes}}</span>
                                                        </div>
                                                    </div>

                                                    @else  --}}

                                                       <div class="request-box" data-bs-toggle="modal"
                                                        data-bs-target="#userRequestModal" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                        <div class="heading">
                                                            <h5>رقم الطلب:</h5>
                                                            <span>{{$order_designer->order_no}}</span>
                                                        </div>
                                                        <div class="data">
                                                            <p>حالة الطلب:</p>
                                                            <span>{{$order_designer->status}} </span>
                                                            <p>اسم العميل:</p>
                                                            <span> غير معروف</span>
                                                            <p>المنتج المطلوب:</p>
                                                            <span> {{$order_designer->notes}}</span>
                                                        </div>
                                                    </div>

                                                    @endif
                                                    {{--  @endif  --}}

                                                </div>
                                            </a>
                                        </div>
                                        {{--  @endforeach

                                        @else  --}}
                                   @foreach($orders_user as $order_designer)
                                        <div class="row">
                                                <div class="col-md-12" >
                                                    <a class="nav-link" href="#" value="{{$order_designer->PerposalPDF->order_id ?? ' '}}">

                                                            @if(Auth::user())
                                                            {{--  @if(Auth::user()->role == 'designer')
                                                            <div class="request-box" data-bs-toggle="modal"
                                                                data-bs-target="#designer-order" class="designer_request" value="{{$order_designer->id}}">
                                                                <div class="heading">
                                                                    <h5>رقم الطلب:</h5>
                                                                    <span>{{$order_designer->order_no}}</span>
                                                                </div>
                                                                <div class="data">
                                                                    <p>حالة الطلب:</p>
                                                                    <span>{{$order_designer->status}} </span>
                                                                    <p>اسم العميل:</p>
                                                                    <span> غير معروف</span>
                                                                    <p>المنتج المطلوب:</p>
                                                                    <span> {{$order_designer->notes}}</span>
                                                                </div>
                                                            </div>

                                                            @else  --}}



                                                            <div class="request-box" data-bs-toggle="modal"
                                                                data-bs-target="#userRequestModal" class="designer_request" id="designer_request" value="{{$order_designer->id}}">
                                                                <div class="heading">
                                                                    <h5>رقم الطلب:</h5>
                                                                    <span>{{$order_designer->order_no}}</span>
                                                                </div>
                                                                <div class="data">
                                                                    <p>حالة الطلب:</p>
                                                                    <span>{{$order_designer->status}} </span>
                                                                    <p>اسم العميل:</p>
                                                                    <span> غير معروف</span>
                                                                    <p>المنتج المطلوب:</p>
                                                                    <span> {{$order_designer->notes}}</span>
                                                                </div>
                                                            </div>

                                                            @endif
                                                            {{--  @endif  --}}
                                                            </a>
                                                        </div>

                                                 <div class="col-md-1 pdf-designer">
                                                @if(($order_designer->PerposalPDF)!=null)
                                                <a href="{{ route('perposalAction',$order_designer->PerposalPDF->order_id) }}">
                                                more
                                                </a>
                                            @endif
                                                      @if(($order_designer->PerposalPDF)!=null)
                                                <div class="dropdown  pt-4">
                                                    <button class="btn bg-light dropdown" type="button"
                                                        id="dropdownMenuButton1" data-bs-toggle="dropdown"
                                                        aria-expanded="false">
                                                        <i class="fas fa-file-pdf"
                                                            style="color:#1F5098; font-size:35px"></i>
                                                    </button>
                                                    @endif

                                            </div>
                                        </div>
                                        @endforeach

                                        @endif
                                        @endif
                                        @endif
                                    </div>
                                        </div>
                                    </div>
                                    {{--    --}}

                                    {{--    --}}
                                </div>

                            </div>
                        </div>
                        <!-- chat  -->

                        <div id="app">
                            <div class="container">
                                <chat-component :user="{{ auth()->user() }}"></chat-component>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="footer">
                            قائمة الطلبات
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
