<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title ?? 'Admin | Ki CHai'}}</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
    <link rel="stylesheet" href="{{ asset('css/dashboard.css')}}">
    <link rel="stylesheet" href="{{ asset('css/button.css')}}">
    <link rel="stylesheet" href="{{ asset('css/category.css')}}">
    <link rel="stylesheet" href="{{ asset('css/product.css')}}">
    <script src="https://kit.fontawesome.com/67bb6a6c2a.js" crossorigin="anonymous"></script>
</head>

<body>

    <x-partials.navbar />
    <div class="row">
        <x-partials.sidebar />
        {{ $slot}}
    </div>


    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('js/jquery/jquery-3.6.0.min.js')}}"></script>
    <!-- // chart -->
    <script src="{{ asset('js/sweetalert/sweetalert.js')}}"></script>

    <!-- // chart -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    {{$scripts ?? ''}}

</body>

</html>