<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
    </head>
    <body class="bg-primary">
        <div class="2xl:block xl:hidden lg:hidden md:hidden sm:hidden xs:hidden iphone:hidden w-full">
            @include('widgets.home.header')
            @include('widgets.home.hero')
            @include('widgets.home.core-philosophy')
            @include('widgets.home.builder')
            @include('widgets.home.benefits')
            @include('widgets.home.testimonials')
            @include('widgets.home.unique')
            @include('widgets.home.gimmicks')
            @include('widgets.home.magic')
            @include('widgets.home.footer')
            @include('widgets.modals.newsletter')
        </div>
        
        <div class="2xl:hidden xl:block lg:hidden md:hidden sm:hidden xs:hidden iphone:hidden w-full">
            @include('responsive.1280.header')
            @include('responsive.1280.hero')
            @include('responsive.1280.core-philosophy')
            @include('responsive.1280.builder')
            @include('responsive.1280.benefits')
            @include('responsive.1280.testimonials')
            @include('responsive.1280.unique')
            @include('responsive.1280.gimmicks')
            @include('responsive.1280.magic')
            @include('responsive.1280.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <div class="2xl:hidden xl:hidden lg:block md:hidden sm:hidden xs:hidden iphone:hidden w-full">
            @include('responsive.1024.header')
            @include('responsive.1024.hero')
            @include('responsive.1024.core-philosophy')
            @include('responsive.1024.builder')
            @include('responsive.1024.benefits')
            @include('responsive.1024.testimonials')
            @include('responsive.1024.unique')
            @include('responsive.1024.gimmicks')
            @include('responsive.1024.magic')
            @include('responsive.1024.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <div class="2xl:hidden xl:hidden lg:hidden md:block sm:hidden xs:hidden iphone:hidden w-full">
            @include('responsive.768.header')
            @include('responsive.768.hero')
            @include('responsive.768.core-philosophy')
            @include('responsive.768.builder')
            @include('responsive.768.benefits')
            @include('responsive.768.testimonials')
            @include('responsive.768.unique')
            @include('responsive.768.gimmicks')
            @include('responsive.768.magic')
            @include('responsive.768.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <div class="2xl:hidden xl:hidden lg:hidden md:hidden sm:block xs:hidden iphone:hidden w-full">
            @include('responsive.640.header')
            @include('responsive.640.hero')
            @include('responsive.640.core-philosophy')
            @include('responsive.640.builder')
            @include('responsive.640.benefits')
            @include('responsive.640.testimonials')
            @include('responsive.640.unique')
            @include('responsive.640.gimmicks')
            @include('responsive.640.magic')
            @include('responsive.640.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <div class="2xl:hidden xl:hidden lg:hidden md:hidden sm:hidden xs:block iphone:hidden w-full">
            @include('responsive.425.header')
            @include('responsive.425.hero')
            @include('responsive.425.core-philosophy')
            @include('responsive.425.builder')
            @include('responsive.425.benefits')
            @include('responsive.425.testimonials')
            @include('responsive.425.unique')
            @include('responsive.425.gimmicks')
            @include('responsive.425.magic')
            @include('responsive.425.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <div class="2xl:hidden xl:hidden lg:hidden md:hidden sm:hidden xs:hidden iphone:block w-full">
            @include('responsive.375.header')
            @include('responsive.375.hero')
            @include('responsive.375.core-philosophy')
            @include('responsive.375.builder')
            @include('responsive.375.benefits')
            @include('responsive.375.testimonials')
            @include('responsive.375.unique')
            @include('responsive.375.gimmicks')
            @include('responsive.375.magic')
            @include('responsive.375.footer')
            @include('widgets.modals.mobileletter')
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.btn-email').click(function (e) { 
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: "{{ route('pre-register-user.store') }}",
                        data: {
                            email: $('.email').val()
                        },
                        dataType: "json",
                        success: function (response) {
                            $('.error-msg').addClass('hidden');
                            $('.error-msg').removeClass('flex');
                            $('.success-msg').addClass('flex');
                            $('.success-msg').removeClass('hidden');
                        },
                        error: function (xhr, ajaxOptions, thrownError) {
                            if (xhr.status === 422) {
                                $('.error-msg').removeClass('hidden');
                                $('.error-msg').addClass('flex');
                                $('.email').addClass('border border-red-600');
                                $('.email').removeClass('border-none');
                                $('.error-message').text(xhr.responseJSON.errors.email[0]);
                            } else {
                                alert("An unknown error occurred.");
                            }
                        }
                    });
                });
            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script src="{{ url('assets/js/main.js') }}"></script>
    </body>
</html>
