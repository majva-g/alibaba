<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>علی بابا</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/media/image/favicon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/media/image/favicon.png') }}" />

    <!-- Theme Color -->
    <meta name="theme-color" content="#0D6F31">

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{ asset('vendors/bundle.css') }}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css">
</head>

<body class="form-membership">

    <div class="form-wrapper">

        <!-- logo -->
        <div class="logo">
            <img src="assets/media/image/logo-sm.png" alt="image">
        </div>
        <!-- ./ logo -->

        <h5>ورود</h5>

        <!-- form -->
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group text-left">
                <label for="email">نام کاربری <span class="text-danger">*</span></label>
                <input type="text" class="form-control text-right" dir="ltr" name="email" id="email"
                    required autofocus>
            </div>
            <div class="form-group text-left">
                <label for="password">کلمه عبور <span class="text-danger">*</span></label>
                <input type="password" class="form-control text-right" name="password" id="password" dir="ltr"
                    required>
            </div>
            <div class="form-group d-sm-flex justify-content-between text-left mb-4">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" checked id="remember" name="remember">
                    <label class="custom-control-label" for="remember">به خاطر سپاری</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">ورود</button>
        </form>
        <!-- ./ form -->

    </div>

    <!-- Plugin scripts -->
    <script src="{{ asset('vendors/bundle.js') }}"></script>

    <!-- App scripts -->
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- begin::flash messages -->
    <x-flash-message-success />
    <x-flash-message-error />
    <!-- end::flash messages -->
</body>

</html>
