@extends('layout.main')
@php
// dd($app);
@endphp

@section('content')
    <main class="">
        <div class="container px-4 sm:px-0 a font-sans font-normal text-[15px] text-left mt-[13px]">
            <span>
                <a href={{ route('/') }}>
                    Trang chủ
                </a>
                <i class="fa-solid fa-angle-right"></i>
                <a href="{{ route('app.detail', [$app['detail']->group_link, $app['detail']->detail_link]) }}"
                    class="text-[#0771B1]">
                    {{ $app['detail']->detail_title }}
                </a>
            </span>
        </div>
        <div class="container px-4 sm:px-0 banner pt-[14px] grid md:grid-cols-2 grid-cols-1 gap-[50px] pb-[40px]">
            <div class="bg-white w-full h-full flex items-center justify-center">
                <img src="{{ route('uploads', $app['detail']->detail_picture) }}" alt="" height="438" width="632"
                    class="h-auto w-full" />
            </div>
            <div class="text-banner">
                <div class="font-bold font-roboto text-[40px] pb-[56px] inline-block">
                    Thiết kế app
                    {{-- &nbsp; --}}
                    <div class="uppercase text-[#0771B1] inline-block">
                        {{-- Nhà hàng --}}
                        {{ $app['detail']->title_group }}
                    </div>
                </div>
                <p class="font-bold text-[18px]">
                    Thời gian thực hiện:<span class="text-[#0771B1] font-normal ml-[13px]">000
                        ngày
                    </span></p>
                <p class="font-bold text-[18px] py-[17px]">
                    Giá trọn gói:
                    <a href="tel://{{ $ims['conf']['hotline'] }}"
                        class="text-[#0771B1] font-normal border-[1px] border-solid rounded-full border-[#0771B1] ml-[13px] py-2 px-3">
                        Liên hệ {{ $ims['conf']['hotline'] }}
                    </a>
                </p>
                <p class="text-[18px] italic">(Cam kết không phát sinh chi phí và thời gian thực hiện)</p>
                <div class="submit sm:flex gap-[15px] pt-[60px] pb-[25px]">
                    <button
                        class="bg-[#0771B1] text-white text-[17px] font-normal sm:w-1/2 w-full pt-[18px] pb-[16px] rounded-lg">
                        Đăng ký tư vấn
                    </button>
                    <button
                        class="bg-[#49D3F0]   text-white text-[17px] font-normal sm:w-1/2 w-full sm:mt-0 mt-3 pt-[18px] pb-[16px] rounded-lg">
                        Tải App
                    </button>
                </div>
                <p class="text-[12px] font-normal pb-[21px]">*Quý khách vui lòng liên hệ trực tiếp cho chúng tôi để được tư
                    vấn cụ thể hơn!</p>
                <button class="tetx-[17px] text-white font-bold bg-[#F56732] w-full pt-[18px] pb-[16px] rounded-lg px-3">
                    <i class="fa-solid fa-phone"></i> HOTLINE TOÀN QUỐC: {{ $ims['conf']['hotline'] }}
                </button>
            </div>
        </div>
        <div class="service bg-[#ECF5FB] pt-[45px] pb-[40px]">
            <div class="container px-4 sm:px-0">
                <p class="text-[40px] font-bold font-roboto text-center pb-[31px]">Dịch vụ đã bao gồm</p>
                <div class="list-service grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[50px]">
                    {{-- Dịch vụ đã bao gồm --}}
                    @if ($app['detail_service'])
                        @foreach ($app['detail_service'] as $item)
                            <div class="item-service">
                                <div class="flex justify-center min-h-[85px] content-center">
                                    <img src={{ route('uploads', $item['picture']) }} alt="" class="scale-75 " />
                                </div>
                                <div class="justify-center items-center text-center">
                                    <p data-aos="fade-up" data-aos-duration="1000"
                                        class="title-service text-[17px] font-bold pt-[30px] pb-[23px] uppercase">
                                        {{ $item['title'] }}
                                    </p>
                                    <div class="text-service text-[17px] font-normal">
                                        {!! $item['content'] !!}
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @endif


                </div>
            </div>
        </div>
        <div class="layout-page bg-[#005A91] text-white text-center pt-[45px] pb-[37px] flex justify-center items-center">
            <div class="container px-4 sm:px-0 lg:flex justify-between items-start pt-[45px] pb-[37px]">
                <div class="lg:w-[70%] w-full">
                    <p class="text-[40px] font-roboto font-bold">Giao diện đẹp, chuẩn UI/UX</p>
                    <p class="text-[17px] font-normal font-roboto pt-[27px] pb-[78px]">Gia tăng nhận diện, gắn kết khách
                        hàng, tăng nhanh doanh số và thúc đẩy quá trình chuyển đổi số!</p>

                    <div class="list-layout grid lg:grid-cols-4 grid-cols-2 gap-y-[70px] gap-x-[30px] mx-[80px] relative">
                        {{-- Giao diện đẹp, chuẩn UI/UX --}}
                         @if ($app['detail_uiux'])
                            @foreach ($app['detail_uiux'] as $item)
                                <div class="item-layout flex flex-col items-center justify-center" key={index}>
                                    <button class="app_slide_btn flex flex-col items-center justify-center">
                                        <img src="{{ route('uploads', $item['icon']) }} " alt=""
                                            class="scale-75" />
                                        <p class="text-[17px] font-normal pt-[24px]">
                                            {{ $item['title'] }}
                                        </p>
                                    </button>
                                </div>
                            @endforeach
                        @endif

                        {{-- <div><button class="pre absolute sm:top-[32%] top-[45%] -left-10"></button>pre</div>
                        <div><button class="next absolute sm:top-[32%] top-[45%] -right-10"></button>next</div> --}}
                    </div>
                </div>
                @if ($app['detail_uiux'])
                            @foreach ($app['detail_uiux'] as $item)
                            <div class="phone sm:mt-0 mt-5 relative lg:w-[30%] w-full lg:h-[630px] h-full">
                                <img src="{{ route('uploads', 'page/2022_07/phone_copy_2.png') }}" alt="" width="321"
                                    height="600" class="absolute w-auto h-auto z-[100] inset-0 m-auto" />
                                <img src="{{ route('uploads', $item['picture']) }}" alt="" width="321"
                                    height="600" class="absolute w-auto h-auto z-[100] inset-0 m-auto" />
                            </div>
                            @endforeach
                        @endif
                
            </div>
        </div>
        <div class="feature-focus bg-white pt-[40px] pb-[48px]">
            <div class="container px-4 sm:px-0 grid lg:grid-cols-2 grid-cols-1 gap-[62px]">
                <img src="{{ route('uploads', $app['detail']->picture_group) }}"{{ asset('storage/uploads/app/2022_07/6228378_copy.png') }}"
                    alt="" width="700" height="617" />
                <div class="text-feature">
                    <p class="title font-bold font-roboto text-[40px]">Tính năng nổi bật</p>
                    <div
                        class="list-text-feature flex flex-col gap-[41px] pt-[34px] h-[500px] scrollbar-thin overflow-auto scrollbar-thumb-gray-300 scrollbar-track-gray-100">
                        {{-- Tính năng nổi bật --}}
                        @if ($app['detail_feature'])
                            @foreach ($app['detail_feature'] as $item)
                                <div class="item-feature flex pr-[57px]">
                                    <div class="icon w-[48px]">
                                        <img src="{{ route('uploads', $item['picture']) }}" alt=""
                                            class="min-w-[48px]" />
                                    </div>
                                    <div class="text pl-[18px]">
                                        <p class="title-list uppercase font-bold text-[17px]">
                                            {{ $item['title'] }}
                                        </p>
                                        <p class="content text-[17px] font-normal">
                                            {!! html_entity_decode($item['content']) !!}
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="benefit bg-[#9cd2f3]">
            <div class="container px-4 sm:px-0 grid md:grid-cols-2 grid-cols-1 gap-[69px] pt-[39px] pb-[16px]">
                <div class="text-benefit">
                    <p class="title text-[40px] font-bold font-roboto pb-[34px]">
                        Lợi ích mang lại
                        {{-- Lợi ích mang lại --}}
                    </p>
                    @if ($app['detail_benefit'])
                        @foreach ($app['detail_benefit'] as $item)
                            <div class="item-benefit flex pb-[39px]">
                                <div class="img mt-1">
                                    <img src="{{ route('uploads', $item['picture']) }}" alt="" width="48"
                                        height="48" class="rounded-md" />
                                </div>
                                <div data-aos="fade-right" data-aos-duration="1000" class="list-benefit pl-[18px]">
                                    <p class="font-bold text-[17px] uppercase pb-[17px]">
                                        {{ $item['title'] }}
                                    </p>
                                    <ul class="list-outside	pl-4">
                                        @foreach ($item['content'] as $item_content)
                                            <li class="text-[17px] font-normal list-disc pb-[12px] marker:text-[#034871]">
                                                {!! $item_content !!}
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="img-benefit flex justify-center items-center">
                    <img src="{{ asset('storage/uploads/app/2022_07/6228378_copy.png') }}" alt="" width="586"
                        height="473" />
                </div>
            </div>
        </div>
        <div class="cooperate bg-[#ECF5FB]">
            <div class="container px-4 sm:px-0 grid lg:grid-cols-3 grid-cols-1 lg:gap-[97px] md:mb-0 mb-[30px] ">
                <div class="cooperate-left lg:text-left text-center flex lg:items-start items-center flex-col py-[51px]">
                    <p class="text-[40px] font-bold font-roboto">Hợp tác cùng chúng tôi</p>
                    <div class="w-[50%] h-[5px] border-b-4 border-black pt-[37px]"></div>
                    <div class="text-[17px] font-normal pb-[98px] pt-[63px]">
                        {!! html_entity_decode($app['detail']->detail_content) !!}
                    </div>
                    <button class="bg-[#0771B1] rounded-lg text-[17px] text-white py-[16px] px-[23px] sm:w-auto w-full">
                        Đăng ký tư vấn
                    </button>
                </div>
                <div class="cooperate-right col-span-2">
                    <div class="border-[#3F90BF] h-full lg:border-l-[1px] relative">
                        {{-- Hợp tác cùng chúng tôi --}}
                        @if ($app['detail_coop'])
                            @foreach ($app['detail_coop'] as $key => $item)
                                <div class="text-cooperate items-center pt-[50px] flex md:flex-row flex-col py-[51px]">
                                    @php
                                        $index = array_search($key, array_keys($app['detail_coop']));
                                    @endphp
                                    @if ($index == 0)
                                        <img src="{{ route('uploads', 'page/2022_07/Group_21013.png') }}" alt=""
                                            width="63" height="63" class="right-[96%] absolute lg:block hidden" />
                                    @else
                                        <img src="{{ route('uploads', 'page/2022_07/Group_21431.png') }}" alt=""
                                            width="63" height="63" class="right-[96%] absolute lg:block hidden" />
                                    @endif

                                    <div class="img-text-cooperate sm:pl-[59px] pl-3 ">
                                        <img src="{{ route('uploads', $item['picture']) }}" alt=""
                                            width="266" height="237"
                                            class="min-h-[237px] min-w-[266px] rounded-[20px]" />
                                    </div>
                                    <div data-aos="fade-up" data-aos-duration="1000"
                                        class="text-[17px] pl-[35px] md:mt-0 mt-5">
                                        <p class="font-bold md:text-left text-center pb-[22px]">
                                            {{ $item['title'] }}
                                        </p>
                                        {!! $item['content'] !!}
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>
                </div>
            </div>
        </div>

        @include('component.deployment_app')


        <div class="app-store bg-white text-center pt-[47px] pb-[42px]">
            <div class="container px-4 sm:px-0">
                <p class="title font-bold font-roboto text-[40px]">Ứng dụng liên quan</p>
                <div class="grid grid-cols-3 gap-[30px]">
                    @foreach ($app['app_related'] as $item)
                   
                    <a href="{{route('app.detail', [$app['detail']->group_link, $item['detail_link']])}}"  class="app flex-col flex justify-center items-center relative">
                        <div class="app flex-col !flex justify-center items-center relative sm:mb-[30px] mb-[35px]">
                            <div class="img">
                                <div class="bg-white drop-shadow-lg h-1/2">
                                    <img src="{{route("uploads", $item['picture'])}}"
                                        alt="" width="364" height="297" />
                                </div>
                            </div>
                            <div
                                class="text-app bg-[#0771B1] text-white text-[17px] font-bold font-sans sm:rounded-full rounded-3xl pt-[14px] pb-[10px] px-1 sm:w-[80%] w-full absolute top-[90%]">
                                {{$item['title']}}
                            </div>
                        </div>
                    </a>
                    @endforeach
                  
                </div>


                <div class="text-center w-full">
                    <a href="{{route('app.group', $app['detail']->group_link)}}"
                        class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
                  text-[#0771B1] text-[15px] px-[13px] py-[7px] rounded-lg font-medium mt-6 shadow-lg font-sarabun">
                        Xem thêm <span class="tracking-[-2px]">>></span>
                    </a>
                </div>

            </div>
        </div>

        @include('component.customer')

    </main>
@endsection
