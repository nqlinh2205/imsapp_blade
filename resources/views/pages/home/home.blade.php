@extends('layout.main')

@php
// dd($home);
@endphp

@section('content')
    <main class="cursor-default font-body">
        <div class="banner pt-[43px] pb-[94px] bg-gradient-to-r to-[#E3F3F6] via-white from-[#EBFBF2]">
            <div class="container px-4 sm:px-0 xl:flex justify-between items-center">
                <div class="text-banner text-center xl:w-[25%]">
                    <p data-aos="fade-right" data-aos-duration="2500"
                        class="text-[139px] font-normal font-sans text-[#0771B1] uppercase">ims</p>
                    <p data-aos="fade-down" data-aos-duration="1000" class="font-bold text-[25px] uppercase tracking-[1.2rem]">
                        Mobile <span data-aos="fade-down" data-aos-duration="1500" class="text-[#0771B1]">App</span></p>
                    <div class="border-[#0771B1] border-[3px] rounded-full w-[30%] inline-block mt-[23px] mb-[16px]"></div>
                    <div class=" font-bold text-[25px] capitalize pb-[18px] ">
                        Giải Pháp Ứng Dụng <br />
                        <div class="autoplay">
                            @foreach ($home['app_group'] as $item)
                                <p class="text-[#0771B1]">
                                    {{ $item->title }}
                                </p>
                            @endforeach

                        </div>

                    </div>
                    <p class="text-[17px] font-normal text-[#8F8F8F] pb-[17px]">Lập trình ứng dụng, app mobile bán hàng và
                        thương mại điện tử</p>
                    <div class="w-full sm:flex justify-center">
                        <a href=""
                            class="hover:scale-95 border-[1px] border-black rounded-md mr-[20px] sm:w-[50%] w-[100%] pt-[12px] pb-[11px] text-center block">
                            Đăng ký nhanh
                        </a>
                        <a href=""
                            class="hover:scale-95 rounded-md bg-[#F5682E] text-white sm:w-[50%] w-[100%] pt-[12px] pb-[11px] sm:mt-0 mt-3 text-center block">
                            Gọi ngay
                        </a>
                    </div>
                </div>
                <div class="img relative text-center xl:w-[50%] xl:mt-0 mt-20">
                    <img src="{{ asset('storage/uploads/home/2022_08/banner-home.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="solution bg-white pt-[53px] text-center">
            <div class="container px-4 sm:px-0 pb-[89px]">
                <p class="title font-bold text-[40px] font-roboto pb-[27px]">
                    {{-- Giải pháp doanh nghiệp --}}
                    {{ $home['group_banner_solution']->title }}
                </p>
                <div class="text-[20px] font-roboto font-light pb-[20px]">
                    {!! html_entity_decode($home['group_banner_solution']->short) !!}
                </div>
                <div class="singgle-items-slide-home">
                    @foreach ($home['list_solution'] as $item)
                        <div class="items-solution !grid lg:grid-cols-12 grid-cols-1">
                            <div class="text text-left col-span-5">
                                <p class="text-[96px] font-montserrat font-bold text-[#0771B1] pl-[38px]">
                                    {{ $item->title }}</p>
                                <div class="border-[4px] border-[#0771B1] w-[134px] mt-[-22px]"></div>
                                <div class="text-[30px] font-bold pt-[24px] pb-[22px]">
                                    {!! html_entity_decode($item->short) !!}
                                </div>
                                <div class="text-[17px] font-normal pb-[29px]">
                                    {!! html_entity_decode($item->short1) !!}
                                </div>

                                <div
                                    class="list-text flex flex-col gap-[41px] pt-[34px] h-[350px] scrollbar-thin overflow-auto scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                                    @foreach ($home['arr_custom'] as $item_arr_custom)
                                        <div class="item-feature">
                                            <div class="icon float-left inline-block pl-[22px]">
                                                <img src="{{ route('uploads', $item_arr_custom['picture']) }}"
                                                    alt="" height="48" width="48" />
                                            </div>
                                            <div class="text pl-[81px]">
                                                <p class="title-list uppercase font-bold text-[17px]">
                                                    {{ $item_arr_custom['title'] }}
                                                </p>
                                                <p class="content text-[17px] font-normal">
                                                    {!! html_entity_decode($item_arr_custom['content']) !!}

                                                </p>
                                            </div>
                                        </div>
                                    @endforeach


                                </div>
                                <div class="pt-[40px] sm:flex justify-center">
                                    <a href=""
                                        class="hover:scale-95 border-[1px] border-black rounded-md mr-[20px] sm:w-[30%] w-[100%] pt-[12px] pb-[11px] text-center block">
                                        Đăng ký tư vấn
                                    </a>
                                    <a href=""
                                        class="hover:scale-95 rounded-md bg-[#F5682E] text-white sm:w-[30%] w-[100%] pt-[12px] pb-[11px] sm:mt-0 mt-3 text-center block">
                                        Liên hệ
                                    </a>
                                </div>
                            </div>
                            <div data-aos="fade-up" data-aos-duration="1000"
                                class="img w-full h-auto flex items-center col-span-7">
                                <img src="{{ route('uploads', $item->content) }}" alt="" height="720"
                                    width="915" class="w-full h-auto" />
                            </div>
                        </div>
                    @endforeach
                </div>


            </div>
            <div class="container px-4 sm:px-0 content-about text-center w-full">
                <p class="title-about font-bold font-roboto text-[40px]">Top sản phẩm nổi bật</p>
                <p class="text-top text-[20px] font-light font-roboto pt-[29px] pb-[45px]">Chúng tôi luôn mang lại dịch vụ
                    thiết kế App chuyên nghiệp, chất lượng nhất đến quý khách hàng</p>
                <div
                    class="list-cate w-full h-auto flex flex-col xl:flex-row text-[17px] font-normal font-sans text-center items-center justify-between bg-white drop-shadow-lg">
                    <a href="?tat-ca" class="px-[29px] pt-[18px] pb-[14px] bg-[#0771B1] text-white rounded">
                        Tất cả
                    </a>
                    @foreach ($home['app_group'] as $item)
                        <a href="{{ route('app.group', $item->friendly_link) }}"
                            class="px-[29px] pt-[18px] pb-[14px] hover:text-[#0771B1]">
                            {{ $item->title }}
                        </a>
                    @endforeach

                </div>
                <div
                    class="list-app grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[54px] pt-[76px] pb-[47px] mb-[36px]">
                    @foreach ($home['list_app'] as $item)
                        <a
                            href="{{ route('app.detail', [$item->group_link, $item->detail_link]) }}"class="app flex-col flex justify-center items-center relative">
                            <div class="img">
                                <div class="bg-white drop-shadow-lg h-1/2">
                                    <img src="{{ route('uploads', $item->detail_picture) }}"alt="" width="364"
                                        height="297" />
                                </div>
                            </div>
                            <div data-aos="flip-up" data-aos-duration="1000"
                                class="text-app bg-[#0771B1] text-white text-[17px] font-bold font-sans rounded-full pt-[14px] pb-[10px] w-[80%] absolute top-[90%]">
                                {{ $item->detail_title }}
                            </div>
                        </a>
                    @endforeach


                </div>
                <div class="text-center w-full">
                    <a href=""
                        class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
                  text-[#0771B1] text-[15px] px-[13px] py-[7px] rounded-lg font-medium mt-6 shadow-lg font-sarabun">
                        Xem thêm <span class="tracking-[-2px]">>></span>
                    </a>
                </div>

            </div>
        </div>
        <div class="contact-desktop lg:flex hidden !bg-center bg-no-repeat bg-auto h-[331px] items-center"
            style="background: url('{{ asset('storage/uploads/home/2022_07/contact_phone.png') }}')">
            <div class="container sm:px-0 px-4 gap-[30px] grid grid-cols-3 text-white pt-[67px] pb-[62px] text-center">
                <div class="contact-left">
                    <p class="text-[17px] font-normal">Bạn có ý định tìm công ty viết ứng dụng di động chuyên nghiệp?</p>
                    <div class="pt-[19px] flex justify-center">
                        <a href=""
                            class="hover:scale-95 border-[1px] border-white rounded-md mr-[20px] w-[50%] pt-[12px] pb-[11px] block">
                            Đăng ký tư vấn
                        </a>
                        <a href=""
                            class="hover:scale-95 rounded-md bg-[#F5682E] text-white w-[50%] pt-[12px] pb-[11px] block">
                            Yêu cầu gọi lại
                        </a>
                    </div>
                </div>
                <div class="contact-center">

                </div>
                <div class="contact-right flex flex-col items-center">
                    <p data-aos="fade-left" data-aos-duration="2500" class="text-[23px] font-bold italic">Liên hệ ngay!</p>
                    <div class="number-phone flex items-center pt-[14px] pb-[20px]">
                        <div
                            class="bg-white drop-shadow-2xl rounded-full w-[67px] h-[67px] absolute z-10 flex items-center justify-center">
                        </div>
                        <div
                            class="bg-white drop-shadow-2xl rounded-full w-[319px] h-[51px] text-[#F5682E] font-bold italic text-[31px] pl-[21px] flex items-center justify-center">
                            <a href="" data-aos="fade-left" data-aos-duration="2500">089 992 7986</a>
                        </div>
                    </div>
                    <p data-aos="fade-left" data-aos-duration="2500" class="text-[17px] italic">(Mr. Thuận)</p>
                </div>
            </div>
        </div>
        <div class="contact lg:hidden block bg-[#0771B1] mt-[36px]">
            <div
                class="container px-4 sm:px-0 gap-[30px] grid lg:grid-cols-3 grid-cols-1 text-white pt-[67px] pb-[62px] text-center">
                <div class="contact-left">
                    <p class="text-[17px] font-normal">Bạn có ý định tìm công ty viết ứng dụng di động chuyên nghiệp?</p>
                    <div class="pt-[19px] sm:flex justify-center">
                        <a href=""
                            class="hover:scale-95 border-[1px] border-white rounded-md sm:mr-[20px] sm:w-[50%] w-full pt-[12px] pb-[11px] text-center block">
                            Đăng ký tư vấn
                        </a>
                        <a href=""
                            class="hover:scale-95 rounded-md bg-[#F5682E] text-white sm:w-[50%] w-full pt-[12px] pb-[11px] sm:mt-0 mt-3 text-center block">
                            Yêu cầu gọi lại
                        </a>
                    </div>
                </div>
                <div class="contact-center">

                </div>
                <div class="contact-right flex flex-col items-center">
                    <p class="text-[23px] font-bold italic">Liên hệ ngay!</p>
                    <div class="number-phone flex items-center pt-[14px] pb-[20px]">
                        <div
                            class="bg-white drop-shadow-2xl rounded-full md:w-[319px] w-full h-[51px] text-[#F5682E] font-bold italic md:text-[31px] text-[20px] md:pl-[21px] px-5 flex items-center justify-center pr-3">
                            089 992 7986</div>
                    </div>
                    <p class="text-[17px] italic">(Mr. Thuận)</p>
                </div>
            </div>
        </div>
        <div class="process bg-white text-center pb-[60px]">
            <div class="container  sm:px-0">
               
                <p class="title text-[40px] font-roboto font-bold">
                    {{-- Quy trình thiết kế --}}
                    {{ $home['group_banner_process']['title'] }}
                </p>
                <div class="text text-[20px] font-roboto font-light pt-[26px] pb-[66px]">

                    {!! html_entity_decode($home['group_banner_process']['short']) !!}
                </div>
                <div class="grid lg:grid-cols-2 grid-cols-1 gap-[55px]">
                    <div class="img w-full h-auto flex items-center justify-center">
                        <img src="{{ route('uploads', $home['page_process']['content']) }}"{{ asset('storage/uploads/home/2022_07/ruby.png') }}"
                            alt="" width="455" height="545" class="w-full h-auto" />
                    </div>
                    {{-- Quy trình thiết kế bên phải --}}
                    <div class="font-body text-left flex flex-col h-[580px] scrollbar-thumb-rounded-full scrollbar-track-rounded-full scrollbar-thin overflow-auto scrollbar-thumb-gray-300 scrollbar-track-gray-100 pr-[29px]">

                        @foreach ($home['page_process']['arr_custom'] as $item)
                            <div
                                class="item-process text-[17px] relative text-[#0771B1] border-[#707070] border-[1px] rounded-lg flex items-center pt-[12px] pb-[18px] mb-[21px] pr-[19px] ">
                                <div class="flex justify-center items-center relative px-[22px] space-x-2">

                                    <div
                                        class="bg-number bg-[#0771B1] rounded-full min-w-[50px] h-[50px] flex justify-center items-center drop-shadow-2xl ">
                                        <div
                                            class="bg-inside bg-white text-[#0771B1] font-bold text-[17px] rounded-full w-[35px] h-[35px] flex justify-center items-center  ">
                                            <span class="bg-inside-number">{{ $item['short'] }}</span>
                                        </div>
                                        <div
                                            class="bg-inside-arrow box w-0 h-0 border-l-[10px] border-l-transparent border-t-[15px] border-t-[#0771B1] border-r-[10px] border-r-transparent absolute top-[90%] ">
                                        </div>
                                    </div>

                                    <div class="">
                                        <button type="button" class="btn-process font-bold text-left ">
                                            {{ $item['title'] }}
                                        </button>
                                        <p class="content-process">
                                            {{ $item['content'] }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="reason text-center !bg-cover !bg-no-repeat w-full h-full pt-[40px] !bg-center pb-[50px]"
            style="background: url('{{ asset('storage/uploads/home/2022_07/mask_group_8231.png') }}')">
            <div class="container px-4 sm:px-0">
                <p class="text-[40px] font-bold font-roboto pb-[35px] text-center lg:px-60">
                    {{-- Lý do giúp IMS đồng hành với hơn 2000 doanh nghiệp --}}
                    {{ $home['page_reason']['title'] }}
                </p>
                <div class="list">
                    <div class="list-reason grid lg:grid-cols-3 lg:grid-rows-3  grid-cols-1 relative lg:gap-y-[100px] gap-y-[60px]">
                        {{-- Nội dung bên trái --}}
                        @foreach ($home['page_reason']['arr_custom'] as $key => $item)
                            @php
                                $index = array_search($key, array_keys($home['page_reason']['arr_custom']));
                            @endphp
                            @if ($index < 3)
                                <div  class="row-start-{{ $index + 1 }} row-end-{{ $index + 2 }} col-start-1 lg:col-end-2">
                                    <div
                                        class="relative text-left bg-white pt-[50px] pl-[40px] pr-[10px] pb-6 {{ $index == 1 ? 'lg:left-[-50px]' : '' }}">
                                        <img src="{{ route('uploads', $item['picture']) }}" alt=""
                                            class="absolute top-[-50px] left-[-13px]">
                                        <p class="text-[17px] uppercase font-bold absolute top-[-30px] left-[100px]">giải
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!! $item['content'] !!}

                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                        {{-- Hình ở giữa --}}
                        <div class="row-start-2 row-end-3 col-start-2 col-end-3 relative lg:block hidden">
                            <img src="{{ asset('storage/uploads/home/2022_07/group_19951.png') }}" alt=""
                                width="383" height="383" class="absolute top-[-100px]" />
                            @foreach ($home['number_data']['arr_custom'] as $key => $item)
                                @php
                                    $index = array_search($key, array_keys($home['number_data']['arr_custom']));
                                @endphp
                                @if ($index == 0)
                                    <div class="text-center text-white absolute -top-[54px] left-[156px]">
                                        <p class="text-[28px] font-bold "> 
                                            {{$item['title']}}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!!$item['content']!!}
                                        </p>
                                    </div>
                                @elseif ($index == 1)
                                    <div class="text-center text-white absolute top-[60px] left-[30px]">
                                        <p class="text-[28px] font-bold "> 
                                            {{$item['title']}}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!!$item['content']!!}
                                        </p>
                                    </div>
                                @elseif ($index == 2)
                                    <div class="text-center text-white absolute top-[60px] right-[42px]">
                                        <p class="text-[28px] font-bold ">
                                            {{$item['title']}}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!!$item['content']!!}
                                        </p>
                                    </div>
                                @elseif ($index == 3)
                                    <div class="text-center text-white absolute bottom-[-100px] left-[156px]">
                                        <p class="text-[28px] font-bold "> 
                                            {{$item['title']}}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!!$item['content']!!}
                                        </p>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                        {{-- Nội dung bên phải --}}
                        @foreach ($home['page_reason']['arr_custom'] as $key => $item)
                            @php
                                $index = array_search($key, array_keys($home['page_reason']['arr_custom']));
                            @endphp
                            @if ($index >= 3 && $index < 6)
                                <div
                                    class="lg:row-start-{{ $index - 2 }} lg:row-end-{{ $index - 1}} lg:col-start-3 lg:col-end-4">
                                    <div
                                        class="relative text-left bg-white pt-[50px] pl-[40px] pr-[10px] pb-6 {{ $index == 4 ? 'lg:right-[-50px]' : '' }}">
                                        <img src="{{ route('uploads', $item['picture']) }}" alt=""
                                            class="absolute top-[-50px] left-[-13px]">
                                        <p class="text-[17px] uppercase font-bold absolute top-[-30px] left-[100px]">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="text-[15px] font-normal">
                                            {!! $item['content'] !!}
                                        </p>
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
       
        @include('component.deployment_app')
        @include('component.customer')

        </div>
    </main>
@endsection
