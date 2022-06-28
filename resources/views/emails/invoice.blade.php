<!DOCTYPE html>
<html>

<head>
    <link rel="icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon">
    <!-- <link rel="shortcut icon" href="{{ asset('assets/images/logo/logo-favicon.png') }}" type="image/x-icon"> -->
    <title>3D Organs</title>
</head>

<body>
  {{ $name }} عزيزي 
  <br>
  {{ $body1 }}
  <br>
  {{ $body2 }}
  <br>
  {{ $body3 }}
  <br>
  <a href="#">{{ $linkText }}</a>
  <br>
  {{ $thanks }}
  <img src="{{ asset('assets/images/logo/logo-favicon.png') }}" alt=""><br>
</body>
</html>	