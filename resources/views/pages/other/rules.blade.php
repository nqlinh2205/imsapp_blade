@extends('layout.main')

@php
// dd($ims);
@endphp

@section('content')
    <main class="cursor-default">
        <section>
            <div class="bg-[#ECF5FB]">
                <div class="container sm:px-0 px-4 pt-3 pb-7 ">
                    {{-- banner --}}
                    <div class=" px-4 sm:px-0 link font-body text-[15px] text-left mt-[1px] bg-no-repeat  ">
                        <span class="text-[#707070]">
                            <a href="">
                                Trang chủ
                            </a>
                            <i class="fa-solid fa-angle-right"></i>
                            <a href="">
                                Hosting
                            </a>
                            <i class="fa-solid fa-angle-right"></i>
                            <a href="">
                                Kiểm tra các thông số liên quan đến tốc độ truy cập ứng dụng
                            </a>
                        </span>
                    </div>
                </div>
                <div class=" container flex md:flex-row flex-col md:space-x-8 pb-10 md:items-start md:justify-center">
                    <div class="md:w-1/4 md:block hidden">
                        <div class=" bg-white py-6 rounded-[15px]">
                            <p
                                class="font-roboto text-[18px] font-bold text-[#0771B1] px-4 border-l-[5px] leading-[20px] mb-2 border-[#0771B1]">
                                Hosting</p>
                            <ul class="md:flex flex-col  text-[17px] font-roboto  hidden">
                                @for ($i = 0; $i < 10; $i++)
                                    @if ($i == 0)
                                        <li class="bg-[#0771B1] text-white px-4 py-[8px]">
                                            <a href="">Kiểm tra các thông số liên quan đến tốc độ truy cập ứng
                                                dụng</a>
                                        </li>
                                    @else
                                        <li class="px-4 py-[8px]">
                                            <a href="">Kiểm tra các thông số liên quan đến tốc độ truy cập ứng
                                                dụng</a>
                                        </li>
                                    @endif
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class=" w-full mb-4 md:hidden block">
                        <div class=" bg-white py-6 rounded-[15px] ">
                            <button class="flex justify-between w-full px-[30px]" id="mega-menu-full-dropdown-button">
                                <p
                                    class="font-roboto text-[18px] font-bold text-[#0771B1] px-4 border-l-[5px] leading-[20px] mb-2 border-[#0771B1]">
                                    Hosting
                                </p>
                                <div class="arrow-button">
                                    <i class="fas fa-angle-left"></i>
                                </div>

                            </button>
                            <div id="mega-menu-full-dropdown" class="mt-1" style="display: none">
                                <div class=" py-5  mx-auto ">
                                    <ul class="md:flex flex-col  text-[17px] font-roboto ">
                                        @for ($i = 0; $i < 10; $i++)
                                            @if ($i == 0)
                                                <li class="bg-[#0771B1] text-white px-8 py-[8px]">
                                                    <a href="">
                                                        Kiểm tra các thông số liên quan đến tốc độ truy cập ứng dụng
                                                    </a>
                                                </li>
                                            @else
                                                <li class="px-8 py-[8px]">
                                                    <a href="">
                                                        Kiểm tra các thông số liên quan đến tốc độ truy cập ứng dụng
                                                    </a>
                                                </li>
                                            @endif
                                        @endfor
                                    </ul>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="md:w-3/4 w-full  bg-white px-[30px] rounded-[15px]">
                        <div class="text-center">
                            <h2 class="text-2xl font-roboto font-bold text-[#0771B1] uppercase my-4">Kiểm tra các thông số
                                liên quan đến tốc độ truy cập ứng dụng</h2>
                        </div>
                        <div>
                            <ul class="list-decimal list-inside	">
                                @for ($i = 0; $i < 3; $i++)
                                    <li class="font-roboto text-[17px] font-bold text-[#0771B1]">
                                        PHẠM VI ÁP DỤNG
                                        <div>
                                            <p
                                                class="text-[17px] font-roboto font-normal text-black leading-[35px] mt-2 my-12">
                                                Điều khoản sử dụng này áp dụng cho việc sử dụng các sản phẩm của IMS, phiên
                                                bản
                                                chính thức chạy trên máy chủ của IMS dưới tên miền chính thức là
                                                www.thietkewebsite.info.vn và ứng dụng IMS trên hệ điều hành Android và iOS.
                                                IMS có thể thay đổi, điều chỉnh Điều khoản sử dụng này và công khai trên hệ
                                                thống ngay khi được thông qua, Người dùng IMS có thể xem những thông tin mới
                                                cập
                                                nhật vào bất cứ lúc nào tại Website IMS/Ứng dụng IMS. Nếu Người dùng Sapo
                                                tiếp
                                                tục sử dụng Dịch vụ có nghĩa là Người dùng IMS chấp nhận và chắc chắn đồng ý
                                                tuân theo Điều khoản sử dụng mới nhất được cập nhật.
                                                Bất cứ sự vi phạm nào của Người dùng IMS đối với các điều khoản và điều kiện
                                                này
                                                đều có thể dẫn đến việc bị đình chỉ hoặc kết thúc tài khoản của Người dùng
                                                IMS,
                                                Dịch vụ hoặc những hoạt động được phép khác theo Điều khoản sử dụng Dịch vụ
                                                của
                                                IMS.
                                            </p>
                                        </div>
                                    </li>
                                @endfor


                            </ul>
                        </div>
                    </div>
                </div>

            </div>



        </section>
        <script>
            $(document).ready(function() {
                $("#mega-menu-full-dropdown-button").click(function() {
                    ($('#mega-menu-full-dropdown').css('display') == 'none') ?
                    $(".arrow-button").addClass("-rotate-90"): $(".arrow-button").removeClass("-rotate-90")
                    $("#mega-menu-full-dropdown").toggle(600, "linear", )
                })
            })
        </script>

    </main>
@endsection
