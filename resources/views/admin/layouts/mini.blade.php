<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="{{asset('template/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/admin/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('template/admin/vendors/css/vendor.bundle.addons.css')}}">
    <link rel="stylesheet" href="{{asset('template/admin/css/style.css')}}">
    <link rel="shortcut icon" href="{{asset('template/admin/images/favicon.png')}}" />
</head>

<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
        @yield('content')
    </div>
</div>
<script src="{{asset('template/admin/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('template/admin/vendors/js/vendor.bundle.addons.js')}}"></script>
<script src="{{asset('template/admin/js/off-canvas.js')}}"></script>
<script src="{{asset('template/admin/js/misc.js')}}"></script>
</body>

</html>
