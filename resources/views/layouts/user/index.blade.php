<!DOCTYPE html>
<html lang="en">
 @include('layouts.user.components.head')
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
        <!-- Page Body Start-->
      <div class="page-body-wrapper horizontal-menu">
        
        @yield('content')
    
      </div>
    </div>
    
    <!-- latest jquery-->
    <script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>
    <!-- feather icon js-->
    <script src="{{asset('assets/js/icons/feather-icon/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/icons/feather-icon/feather-icon.js')}}"></script>
    <!-- Sidebar jquery-->
    <script src="{{asset('assets/js/sidebar-menu.js')}}"></script>
    <script src="{{asset('assets/js/config.js')}}"></script>
    <!-- Bootstrap js-->
    <script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- Plugins JS start-->
    <script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
    <script src="{{asset('assets/js/tooltip-init.js')}}"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="{{asset('assets/js/script.js')}}"></script>
    <script src="{{asset('assets/js/theme-customizer/customizer.js')}}"></script>
    <script src="{{asset('js/perposalAccepted.js')}}"></script>
    <script src="{{asset('js/perposalNotAccepted.js')}}"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.signature.js') }}"></script>
   @livewireScripts
    <script>
        var perposalAccepted = "{{ route('perposalAccept',':id') }}";
    </script>
    <script type="text/javascript">
      var sig = $('#sig').signature({syncField: '#signature64', syncFormat: 'PNG'});
      $('#clear').click(function(e) {
          e.preventDefault();
          sig.signature('clear');
          $("#signature64").val('');
      });
      $('.toast').toast('show')
  </script>

 
    <!-- login js-->
    <!-- Plugin used-->
  </body>
</html>
