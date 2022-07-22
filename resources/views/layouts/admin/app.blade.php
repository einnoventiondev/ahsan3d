<!DOCTYPE html>
<html lang="en">
@include('layouts.admin.head')

<body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
        <div class="theme-loader">
            <div class="loader-p"></div>
        </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        @include('layouts.admin.header')
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper horizontal-menu">
            <!-- Page Sidebar Start-->
            @include('layouts.admin.nav')
            <!-- Page Sidebar Ends-->

            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer start-->
            @include('layouts.admin.footer')
        </div>
    </div>
    
    <!-- latest jquery-->
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ asset('assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ asset('assets/js/sidebar-menu.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ asset('assets/js/chart/chartist/chartist.js') }}"></script>
    <script src="{{ asset('assets/js/chart/chartist/chartist-plugin-tooltip.js') }}"></script>
    <script src="{{ asset('assets/js/chart/knob/knob.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart/knob/knob-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/counter/counter-custom.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
    <script src="{{ asset('assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-au-mill.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-in-mill.js') }}"></script>
    <script src="{{ asset('assets/js/vector-map/map/jquery-jvectormap-asia-mill.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/default.js') }}"></script>
    <script src="{{ asset('assets/js/notify/index.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>


    <script src="{{ asset('assets/js/script.js') }}"></script>

    @livewireScripts
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>

    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
    <script>
        $(function() {
            $('#healthServicesFinalModal').modal('show');
        });
    </script>
    @endif
    <script src="{{asset('user/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/profileUserApproval.js')}}"></script>
    <script src="{{asset('js/perposalAccepted.js')}}"></script>
    <script src="{{asset('js/registerUserApproval.js')}}"></script>
    <script src="{{asset('js/fetchUserFromOrder.js')}}"></script>
    <script >
        var profileApprove = "{{route('user.profile.approve',':id')}}";
        var reigisterApprove = "{{route('user.approve',':id')}}";
        var userByOrder = "{{route('userByOrder',':id')}}";
		var userByOrder_pub = "{{route('userByOrder_pub',':id')}}";
        var perposalAccepted = "{{ route('perposalAccept',':id') }}";
    </script>
<script>
    function panel(key) {
     
        if($(".panel_view_"+key).hasClass( "d-none" )){
            console.log(key);
            $('.panel_view').addClass('d-none');
            $('.panel_view').removeClass("d-block");
            $('.panelwrapper').removeClass('col-12');
            $('.panelwrapper').addClass('col-6');
            $('.panel_view_'+key).removeClass("d-none");
            $('.panel_view_'+key).addClass('d-block')
        }else{
            console.log(key);
            $('.panel_view_'+key).addClass('d-none');
            $('.panelwrapper').removeClass('col-6');
            $('.panelwrapper').addClass('col-12');
            $('.panel_view').addClass('d-none');
            $('.panel_view').removeClass("d-block");
            $('.panel_view_'+key).removeClass("d-block");
        }
    }
    function paymentDiv(key) {
        if($( ".payment_add_"+key).hasClass( "d-none" )){
            $('.payment_add_'+key).removeClass('d-none');
            $('.payment_add_'+key).addClass('d-block')
            $('.payment_view_'+key).removeClass("d-block");
            $('.payment_view_'+key).addClass('d-none')
        }else{
            $('.payment_add_'+key).addClass('d-none');
            $('.payment_add_'+key).removeClass('d-block');
            $('.payment_view_'+key).addClass("d-block");
            $('.payment_view_'+key).removeClass('d-none')
            
        }
    }
    $(".addCustom").click(function(){
        $(".wrapper").append('<tr class="element" id="div_"><td><div class="form-group"><input type="text" class="form-control" id="exampleInput" name="title[]"  placeholder="Description"></div></td><td><div class="form-group"><textarea  class="form-control" id="exampleInput" name="description[]"  placeholder="Description"></textarea></div></td><td><div class="form-group"><input type="number" class="form-control" id="exampleInput" name="qty[]"  placeholder="Quatntity"></div></td><td><div class="form-group"><input type="text" class="form-control" id="exampleInput" name="rate[]"  placeholder="Rate"></div></td><td><span id="remove_" class="remove"><i class="fa fa-uncheck" aria-hidden="true"></i>Xasd</span></td>');     
    });

    alert('aaaa')
    $("table .remove").on("click", function () {
           alert('aaaa')
        $(this).parent.remove(); 
    });


</script>
    <!-- Scripts -->

    <script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
	  <script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
	  <script src="{{ asset('js/dynamic_items.js') }}"></script>

    @stack('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
</body>

</html>