<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="https://www.example.com/path/to/logo-favicon.ico" type="image/x-icon">
    <link rel="icon" href="https://www.example.com/path/to/logo-favicon.png" type="image/png">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col-reverse lg:flex-row lg:justify-between  bg-gray-100 gap-3">
        <div class="text-center w-full lg:max-w-[40%] flex justify-center items-center flex-col py-[50px] lg:py-[30px]">
            <x-application-logo class="text-[26px] font-bold text-black" href="/" />
            <p class="text-[14px] text-black font-normal mt-[10px]">Sign in to start your session</p>
            <img src="{{ asset('images/QRCode.svg') }}" class="mx-auto mt-[15px] sm:h-[420px] w-auto rounded-[15px] overflow-hidden" alt="">
            <a href="#" class="btn-primary rounded-[30px] bg-[black] text-white font-bold text-center py-[10px] px-[25px] flex w-fit mx-auto mt-[15px]">Scan QR To Logins</a>
        </div>
        <div class="w-full flex justify-center items-center bg-white min-h-full py-[50px] lg:py-[30px] lg:mt-[15px] lg:mb-[15px] lg:rounded-tl-[15px] lg:rounded-bl-[15px]">
            {{ $slot }}
        </div>
    </div>
</body>

</html>