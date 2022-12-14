<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @if (isset($siteTitle))
        <title>MOE - {{ $siteTitle }}</title>
    @else
        <title>MOE</title>
    @endif

    <meta name="site_url" content="{{ dynUrl('/') }}"/>
    <meta name="csrf_token" content="{{ csrf_token() }}"/>

    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
    {{-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); </style> --}}

    <meta name="theme-color" content="#b66dff">

    <link rel="stylesheet" href="{{ mix('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

</head>
