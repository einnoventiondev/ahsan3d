<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
	
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon"> -->
    @if(@$title->title != null)
    <title>{{$title->title}}</title>
    @else
    <title>أجهزة ثلاثية الأبعاد</title>
    @endif
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('user/assets/icons/logo.svg') }}" type="image/x-icon" />
    @if(@$title->discription != null)
    <meta name="description" content={{$title->discription}}>
    @else
    <meta name="description" content="شركة إدراك للإستشارات الإدارية والتدريب الإستشاري">
    @endif
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
 
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icofont.css') }}">
    <!-- Themify icon-->
   
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chat.css') }}">
    <!-- Chat-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/themify.css') }}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flag-icon.css') }}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/feather-icon.css') }}">

   
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chartist.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vector-map.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
    <!-- Plugins css Ends-->


    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
   
   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datatables.css') }}">
   
   
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">

    <link type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{asset('user/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.signature.css') }}">
	    @livewireStyles
   <!-- 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css')}}" />
  <link href="https://cdn.js')}}delivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css')}}" rel="stylesheet" />
    <script src="https://cdn.js')}}delivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js')}}"></script> -->
   
    <style>
        .page-wrapper.compact-wrapper .page-body-wrapper .page-body {
            padding-top: 30px;
            margin-right: 290px ;
            margin-left: 0px !important
        }

        html {
            direction: rtl !important;
        }
    </style>
</head>