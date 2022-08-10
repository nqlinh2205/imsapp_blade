<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url(mix('css/app.css')) }}">
    <link rel='stylesheet' href='https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css'>
    <!-- Scripts -->
    <script src="{{ url(mix('js/app.js')) }}" defer></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    {{-- jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    {{-- slick jquery --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
        integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
        integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- style css --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @include('layout.header')
    <div class="mt-[120px]">
        @yield('content')
    </div>
    @include('layout.footer')

    <script>
        $(document).ready(function() {
          
            $(".show-menu-mobile").click(function() {
                $(".nav-mobile").removeClass('hidden');
            });
            $(".close_nav").click(function() {
                $(".nav-mobile").addClass('hidden');
            });
        });
    </script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script type="text/javascript">
        $('.multiple-items').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,

        });
        $('.autoplay').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            speed: 2000,
            arrows: false

        });
        $('.singgle-items-slide-home').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,

        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.content-process').hide();
            $(".btn-process").click(function() {
                $('.content-process').hide();
                $(this).next().show();
                $('.item-process').removeClass('item-process-active')
                $(this).parents(".item-process").addClass("item-process-active")
                $('.bg-number').removeClass('bg-number-active')
                $(this).parent().prev().addClass('bg-number-active')
                $('.bg-inside-arrow').removeClass('bg-inside-arrow-active')              
                $(this).parent().prev().find('.bg-inside-arrow').addClass('bg-inside-arrow-active')      
                $('.bg-inside').removeClass('bg-inside-active')
                $(this).parent().prev().find('.bg-inside').addClass('bg-inside-active')
                $('.bg-inside-number').removeClass('bg-inside-number-active')
                $(this).parent().prev().find('.bg-inside-number').addClass('bg-inside-number-active')

            });
        });
    </script>
</body>

</html>
