@extends('layout.main')

@php

@endphp

@section('content')
    <main class="cursor-default pt-[1px]">
        <div class="container px-4 sm:px-0 a font-sans font-normal text-[15px] text-left pb-[7px] mt-[13px] sm:pt-0">
            <span>
                <a href=""> Trang chủ</a>
                <i class="fa-solid fa-angle-right"></i>
                <a class="text-[#0771B1]" href="{{ route('app') }}">
                    {{ $app['setting']['app_meta_desc'] }}
                </a>
            </span>
        </div>
        <div class="container px-4 sm:px-0 content-about text-center w-full">
            <p class="title-about font-bold font-roboto text-[40px]">
                {{ $app['setting']['app_meta_desc'] }}
            </p>
            <p class="text-top text-[20px] font-light font-roboto pt-[27px] pb-[18px]">
                {{ $app['setting']['app_mete_text'] }}    
            </p>
            <div
                class="list-cate w-full flex xl:flex-row flex-col text-[17px] font-normal font-sans text-center items-center justify-between bg-white drop-shadow-lg">
                <a href="{{ route('app') }}" class="px-[29px] pt-[18px] pb-[14px] hover:text-[#0771B1] ">
                    Tất cả
                </a>

                @foreach ($app['app_group'] as $key => $item)
                    @if ($item['friendly_link'] == $ims['cur']['friendly_link'])
                        <a href="{{ route('app.group', $item->friendly_link) }}"
                            class="px-[29px] pt-[18px] pb-[14px] bg-[#0771B1] text-white rounded">
                            {{ $item->title }}
                        </a>
                    @else
                        <a href="{{ route('app.group', $item->friendly_link) }}"
                            class="px-[29px] pt-[18px] pb-[14px] hover:text-[#0771B1] ">
                            {{ $item->title }}
                        </a>
                    @endif
                @endforeach

            </div>
            <div class="list-app grid lg:grid-cols-3 sm:grid-cols-2 grid-cols-1 gap-[54px] pt-[76px] pb-[47px] mb-[36px]">
                @foreach ($app['list_app'] as $item)
                <a href="{{route('app.detail', [ $item->group_link, $item->detail_link ] )}}" class="app flex-col flex justify-center items-center relative">
                    <div class="img">
                            <div class="bg-white drop-shadow-lg h-1/2">
                                <img src="{{ route('uploads', $item->detail_picture) }}" alt="" width="364"
                                    height="297" />
                            </div>
                        </div>
                        <div data-aos="flip-up" data-aos-duration="1000"
                            class="text-app bg-[#0771B1] text-white text-[17px] font-bold font-sans rounded-full pt-[14px] pb-[10px] w-[80%] absolute top-[90%]">
                            {{-- App Tài chính --}}
                            {{ $item->detail_title }}
                        </div>
                    </a>
                @endforeach
            </div>
            <div class="text-center w-full">
                <button onClick={loadMore}
                    class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
                   text-[#0771B1] text-[15px] px-[13px] py-[8px] rounded-lg font-medium mt-6 shadow-lg font-sarabun">Xem
                    thêm <span class="tracking-[-2px]">>></span></button>
            </div>
        </div>

        @include('component.deployment_app')


        <div class="service bg-[#A4D5F2] py-[48px] text-center mt-[39px]">
            <div class="container px-4 sm:px-0">
                <p class="title-service text-[40px] font-bold font-roboto">
                    {{ $app['group_service']['title'] }}
                </p>
                <p class="text-service text-[20px] font-light font-roboto mb-[78px] pt-[27px]">
                    {!! html_entity_decode($app['group_service']['short']) !!}
                </p>
                <div class="multiple-items ">
                    {{-- Tiêu chuẩn dịch vụ --}}
                    @foreach ($app['service'] as $item)
                        <div class="item-service !flex justify-center relative mt-[50px] mr-[25px] ml-[25px] !h-[500px]">
                            <div class="img z-10 absolute sm:bottom-[75%] bottom-[86%]">
                                <img src="{{ route('uploads', $item->content) }}" alt="" width="220"
                                    height="146" />
                            </div>
                            <div class="bg-white drop-shadow-lg px-[24px] pt-[35px] pb-[25px] rounded-xl flex flex-col">
                                <p data-aos="fade-left" data-aos-duration="1500"
                                    class="font-bold text-[17px] pt-[112px] pb-[28px]">
                                    {{-- Hỗ trợ bán hàng chuyên nghiệp --}}
                                    {{$item->title}}
                                </p>
                                <div>
                                    @foreach ($item->short1 as $item_short)
                                        <div class="font-normal text-[15px] pb-[18px] flex items-center gap-[9px]">
                                            <img src="{{ asset('storage/uploads/about/2022_07/accepted_copy.jpg') }}"
                                                alt="" height="31" width="31" />
                                            <div class="text-left">
                                                {{-- Quy mô toàn quốc, luôn sẵn sàng cho các cuộc họp trực tiếp --}}
                                                {!! html_entity_decode($item_short) !!}
                                            </div>
                                        </div>
                                    @endforeach

                                </div>


                                <div class="mt-auto hover:scale-95">
                                    <button
                                        class="bg-[#0771B1] text-white font-normal text-[14px] rounded-full px-[17px] pb-[9px] pt-[11px] drop-shadow-xl">
                                        Trải nghiệm ngay
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </div>
        @include('component.customer')


    </main>
@endsection
