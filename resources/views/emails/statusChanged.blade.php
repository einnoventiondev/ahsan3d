<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon"> -->
    <title>3D Organs</title>
</head>
<body>
    <img src="{{ asset('assets/images/logo/logo-favicon.png') }}" alt="">
    <h1>أهلا{{ $details['title'] }}</h1>
    <p> # {{ $details['id'] }} تمت الموافقة على طلبك وانتقل إلى الخطوة التالية
        @if( $details['body'] == 1)
        اجتماع الخطة العلاجية
        @endif
        @if( $details['body'] == 2)
        اجتماع النموذج الأول
        @endif
        @if( $details['body'] == 3)
        اجتماع النموذج النهائي
        @endif
        @if( $details['body'] == 4)
        الدفع
        @endif
        @if( $details['body'] == 5)
        الطباعة ثلاثية الأبعاد
        @endif
        @if( $details['body'] == 6)
        اختبار الجودة
        @endif
        @if( $details['body'] == 7)
        التوصيل واتمام الطلب
        @endif

    </p>

    <p>شكراً جزيلاً</p>
</body>

</html>