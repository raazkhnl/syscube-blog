<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SysCube Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    {{-- Icon --}}
    <link rel="icon" href="../storage/Images/icon.png" type="image/gif" sizes="30x30">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


</head>

<body style="background-color: #ba9274" class="min-h-100">
    <div class="d-flex flex-row-reverse">
        <div class="pe-2">
            @if (Route::has('login'))
            <div class=" fixed top-0 right-0 px-6 py-4 sm:block ">
                @auth
                <a href="{{ route('dashboard') }}" class="text-sm p-2 link-light underline"><b>Welcome To The
                        Blogged</b></a>
                @else
                <a href="{{ route('login') }}" class="text-sm p-2 link-light underline">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 p-2 link-light underline">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>

    </div>

    {{-- Welcome --}}
    <div class="container-fluid ">
        <div class="row justify-center  pt-5">
            <div class="col-12 text-center">
                <img class="ps-5" src="../storage/Images/BlogLogo.png" width="400"  alt="logo">

            </div>
            <div class="col-12" style="padding-top: 50px; text-align: center;">
                <h1 style="font-size:30px; color: white;">A Blogging Platform By RaaZ Khanal</h1>
                <p style="font-size: 20px; color:#1F9AFE;"><a href="https://www.facebook.com/raazkhnl/" ;>About the
                        Developer</a></p>
            </div>
        </div>

    </div>
    <div class="text-center fixed-bottom">
        <div class="d-flex justify-content-between items-center px-5 pb-3">

            <a href="https://facebook.com/raazkhnl" class="link-light">
                Get in Touch
            </a>
            <div class="link-light  text-center text-sm ">
                ©️ RaaZ Khanal 2023
            </div>
        </div>
    </div>

    </div>
    </div>
</body>

</html>