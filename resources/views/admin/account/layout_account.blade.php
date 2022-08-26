@extends('admin.layout.main')

@section('content')
    <div class="relative w-full h-screen bg-center" style="background-image: url('{{ asset('admin_img/bg-account.png') }}')">
        <div class="flex md:items-center md:justify-center 	md:h-full">
            <div class="flex md:flex-row flex-col md:w-[70%] w-full  bg-white md:rounded-2xl shadow-md md:max-h-[600px] ">
                <div class="md:w-1/2 w-full text-center flex flex-col space-y-5 py-10  min-w-[330px]">
                    <img class="m-auto" src="{{ asset('admin_img/logo.png') }}" alt="" width="122" height="71">
                    <div class="">
                        <div class="font-roboto text-2xl font-bold uppercase">
                            <p>Thiết kế website chuyên nghiệp</p>
                            <p> uy tín hàng đầu</p>
                        </div>
                    </div>
                    <div class="w-3/5 m-auto">
                        <img class="m-auto" src="{{ asset('admin_img/login-2.png') }}" alt="">
                    </div>
                    <div class="px-6">
                        <img class="m-auto" src="{{ asset('admin_img/ho-tro.png') }}" alt="">

                    </div>

                </div>
                <div class="md:w-1/2  w-full bg-[#81d0f6] px-6 md:py-0 py-4 font-roboto  md:rounded-r-2xl md:max-h-[600px] overflow-scroll min-w-[330px]">
                    @yield('content_right')
                </div>
            </div>
        </div>
    </div>
@endsection
