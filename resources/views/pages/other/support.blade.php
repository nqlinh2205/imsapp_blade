@extends('layout.main')

@php
// dd($ims);
@endphp

@section('content')
    <main class="cursor-default">
        {{-- banner --}}
        <section class="relative">
            <div style="clip-path: ellipse(94% 50% at 51% 14%); background: #0771B1; width: 100%; height: 800px;" class="z-10 absolute">

            </div>
            <div class="container sm:px-0 px-4 pt-3 pb-9 z-30 relative">
                <div class="text-[15px] font-body ">
                    <span class="text-[#F8F8F8]">
                        <a href="">
                            Trang chủ
                        </a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            Điều khoản và chính sách
                        </a>
                    </span>
                </div>
                {{-- banner --}}

                <div class=" px-4 sm:px-0 link font-body  text-left md:mt-0 mt-[20px] bg-no-repeat  ">
                    <div class="flex md:flex-row flex-col-reverse">
                        <div class="lg:w-1/2 md:w-2/3 text-center flex flex-col items-center justify-center">
                            <div class="mt-4 md:mb-[30px]">
                                <p class=" md:text-[62px] text-[40px] text-white font-roboto font-bold pl-[28px] leading-[62px]	">
                                    Trung tâm hỗ trợ</p>
                            </div>
                            <div class="md:text-[20px] text-[18px] text-white leading-[30px] md:mt-8 mt-4">
                                <p >Hướng dẫn khách hàng sử dụng và quản lý các ứng dụng trên Appstore, CH Play, Hosting,…Hỗ
                                    trợ xử lý các sự cố kỹ thuật</p>
                            </div>
                            <div class="md:text-[25px] text-[16px] text-white  bg-[#F5682E] p-4 rounded-full md:my-12 my-4">
                                <p>Tổng đài hỗ trợ - <span class="font-bold"> 089 992 7986 </span>(7:00 - 22:00)</p>
                            </div>
                        </div>
                        <div class="lg:w-1/2 w-1/3 m-auto">
                            <img src="{{ asset('img/banner.png') }}" alt="" class="m-auto">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="flex my-12 container justify-center lg:px-0 md:px-10 px-14">
                <div class="grid md:grid-cols-2 gap-[30px] lg:grid-cols-3 grid-cols-1">
                    @for ($j = 0; $j < 3; $j++)
                        <div class="relative px-[40px] pb-[30px] pt-[55px] rounded-[30px] shadow-lg">
                            <div class="absolute top-[-46px] left-[-65px]">
                                <img src="{{ asset('img/app-store.png') }}?w=68&h=68&fit=crop">
                            </div>
                            <div class="font-body">
                                <h3 class="font-bold text-[30px] leading-[30px]">Hosting</h3>
                                <ul class="mt-6 flex flex-col space-y-6">
                                    @for ($i = 0; $i < 4; $i++)
                                        <li class="hover:scale-105 ease-linear duration-100">
                                            <a class="md:text-[17px] text-[15px] " href="">Kiểm tra các thông số liên quan đến tốc độ truy cập ứng dụng</a> 
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                            <div class="text-center w-full">
                                <button
                                    class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block text-[#0771B1] text-[15px] px-4 py-1 rounded-lg font-medium mt-6 shadow-lg">Xem
                                    thêm >></button>
                            </div>
                        </div>
                    @endfor

                </div>
            </div>
        </section>
        {{-- Đề xuất tính năng --}}
        <section>
            <div class="bg-[#A4D5F2]">
                <div class="container text-center py-[40px]">
                    <div class=" mb-[30px]">
                        <p class="text-[40px] font-roboto font-bold pl-[28px]  h-[40px] leading-[40px]	">Đề xuất tính năng
                        </p>
                    </div>
                    <div class="grid md:grid-cols-4 grid-cols-2 gap-[30px] md:px-0 px-10">
                        @for ($i = 0; $i < 4; $i++)
                            <div>
                                <img src="{{ asset('img/tinh-nang.png') }}" alt="">
                                <div class="inline-flex flex-col ">
                                    <p class="inline mt-4 text-[20px] font-bold">Tính năng 1
                                    </p>
                                    <div class="mt-3 inline-block w-[35px] h-[5px] bg-[#0771B1]"></div>
                                </div>

                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        {{-- Kiến thức --}}
        <section>
            <div class="container  py-[40px] font-body">
                <div class=" mb-[30px] text-center">
                    <p class="text-[40px] font-roboto font-bold pl-[28px]  h-[40px] leading-[40px]	">Kiến thức</p>
                </div>
                <div class="multiple-items-2 md:px-0 px-10">
                    @for ($i = 0; $i < 5; $i++)
                        <div class=" px-4">
                            <img src="{{ asset('img/kien-thuc.png') }}" alt="">
                            <p class="text-[18px] font-bold">Chia sẻ mẫu kế hoạch phát triển nội dung Fanpage chi tiết nhất
                                2022</p>
                        </div>
                    @endfor
                </div>
            </div>
        </section>
        {{-- Dịch vụ nổi bật --}}
        <section class="relative">
            <div style="clip-path: ellipse(90% 80% at 51% 80%);  background: #ECF5FB; width: 100%;  " 
            class="z-10 absolute bottom-0 top-[10px]"></div>
            <div class="z-30 relative">
                <div class="container text-center py-[40px] md:px-0 px-10">
                    <div class=" mb-[30px]">
                        <p class="text-[40px] font-roboto font-bold pl-[28px]  h-[40px] leading-[40px]	">Dịch vụ nổi bật
                        </p>
                    </div>
                    <div class="grid lg:grid-cols-4 grid-cols-2 gap-[30px]">
                        @for ($i = 0; $i < 4; $i++)
                            <div class="rounded-[15px] text-center font-body">
                                <img src="{{ asset('img/dich-vu-noi-bat.png') }}" alt="" class="m-auto">
                                <h3 class="text-[24px] font-bold">Dịch vụ 1</h3>
                                <p class="text-[17px] text-left">Lorem ipsum dolor sit amet, nib consectetuer adipiscing
                                    elit, sed diam nonummy nibh </p>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </section>
        <script>
            $(document).ready(function() {
                $('.multiple-items-2').slick({
                    infinite: true,
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    arrows: true,
                    prevArrow: "<img class='a-left   !left-[-60px] control-c prev slick-prev !w-[42px] !h-[42px] '  src='{{ asset('img/arrow_left.png') }}'>",
                    nextArrow: " <img class='a-right !right-[-35px] control-c next slick-next !w-[42px] !h-[42px] ' src='{{ asset('img/arrow_right.png') }}'>",
                    responsive: [{
                        breakpoint: 800,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            infinite: true,
                        }
                    },
                    {
                        breakpoint: 500,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    }
                ],
                });
            })
        </script>




    </main>
@endsection
