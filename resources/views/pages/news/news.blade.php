@extends('layout.main')

@php
    // dd($ims);
@endphp

@section('content')
    <main class="cursor-default">
        <div class=" bg-[#F8F8F8] ">
            <div class="container sm:px-0 px-4 pt-3 pb-9">
                <div class=" px-4 sm:px-0 link font-sans font-normal text-[15px] text-left mt-[1px]">
                    <span>
                        <a href={{route("/")}}>
                            Trang chủ
                        </a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href={{route('news')}} class="text-[#0771B1]">
                            {{$news['setting']['news_meta_title']}}
                        </a>
                    </span>
                </div>
                <div class="border-l-[7px] border-l-[#0771B1] mt-4 mb-[30px]">
                    <p class="text-[40px] font-roboto font-bold pl-[28px]  h-[40px] leading-[40px]	">Tin mới nhất</p>
                </div>

 
                <div class="w-full"> 
                    <div class="grid sm:grid-cols-3 grid-cols-1 gap-[30px] mt-[30px]">
                       {{-- Tin mới nhất --}}
                        @foreach ($news['news_list'] as $item)
                      
                        <div class="overflow-hidden" data-aos="fade-up" data-aos-duration="3000">
                            <div class="max-h-[250px] overflow-hidden">
                                <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                    <img 
                                    {{-- src="{{ asset('storage/uploads/news/2022_07/mask_group_8184.png') }}" --}}
                                    src="{{ route('uploads',$item->picture) }}?w=380&h=217&fit=crop"
                                        alt="" class="" />
                                </a>
                            </div>
                            <a href="">
                                <p class="text-[18px] font-bold mt-5 ">
                                    
                                    {{$item->title}}
                                </p>
                            </a>
                            <div class="text-[#8F8F8F] flex space-x-10 mt-[20px]">
                                <div class=" flex items-center space-x-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                        viewBox="0 0 16.036 16.043">
                                        <path id="Path_60903" data-name="Path 60903"
                                            d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                            transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                    </svg>
                                    <p> {{$item->date_update->toDateString()}} </p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                        viewBox="0 0 19.709 12.054">
                                        <path id="Path_3656" data-name="Path 3656"
                                            d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                            transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                    </svg>
                                    <p>{{$item->num_view}}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                            
                      



                    </div>
                    {{-- {next < news.news_list?.length && ( --}}
                    <div class="text-center w-full">
                        <button 
                            class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
                  text-[#0771B1] text-[15px] px-4 py-1 rounded-lg font-medium mt-6 shadow-lg">Xem
                            thêm >></button>
                    </div>
                    {{-- )} --}}
                </div>
            </div>
        </div>


        <div class="bg-white mt-[30px]">
            <div class="container sm:px-0 px-4 flex sm:flex-row flex-col sm:space-x-[30px]">
                <div class="lg:w-2/3 sm:w-1/2 w-full">
                    <div class="border-l-[7px] border-l-[#0771B1] mt-4 mb-[30px] ">
                        <p class="text-[40px] font-roboto font-bold pl-[28px] h-[40px] leading-[40px]">
                            {{$news['news_group'][0]->title}}
                            {{-- Sự kiện --}}
                        </p>
                    </div>
                    <div
                        class="grid lg:grid-cols-2 grid-cols-1 lg:grid-flow-col gap-x-[30px] lg:gap-y-[30px] gap-y-[30px] ">
                        @foreach ($news['news_list_event'] as $key => $item)
                            @if($key == 0)
                            <div class="row-span-3" data-aos="fade-left" >
                                <div class="">
                                    <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                        <img src={{route('uploads', $item->picture)}}
                                            alt="" class="object-cover" /></a>
                                </div>
                                <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                    <p class="text-[18px] font-bold mt-[4%]">
                                        {{$item->title}}
                                    </p>
                                </a>
                                <div class="text-[#8F8F8F] flex  space-x-10  mt-[10px] text-[15px] pr-4 ">
                                    <div class=" flex items-center space-x-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                            viewBox="0 0 16.036 16.043">
                                            <path id="Path_60903" data-name="Path 60903"
                                                d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                                transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item->date_update->toDateString()}}</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                            viewBox="0 0 19.709 12.054">
                                            <path id="Path_3656" data-name="Path 3656"
                                                d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                                transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item->num_view}}</p>
                                    </div>
                                </div>
                            </div>
                            @else 
                            <div class="flex space-x-4" data-aos="fade-right">
                                <div class="w-1/3">
                                    <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}"><img
                                        src={{route('uploads', $item->picture)}}
                                            alt="" /></a>
                                </div>
                                <div class="w-2/3 flex flex-col ">
                                    <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                        <p class="text-[15px] font-bold ">
                                            {{$item->title}}
                                        </p>
                                    </a>
                                    <div class="text-[#8F8F8F] flex justify-between mt-4 pr-4 text-[15px] ">
                                        <div class=" flex items-center space-x-2 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                                viewBox="0 0 16.036 16.043">
                                                <path id="Path_60903" data-name="Path 60903"
                                                    d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                                    transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                            </svg>
                                            <p>{{$item->date_update->toDateString()}} </p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                                viewBox="0 0 19.709 12.054">
                                                <path id="Path_3656" data-name="Path 3656"
                                                    d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                                    transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                            </svg>
                                            <p>{{$item->num_view}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif

                        @endforeach
                     
                           



                    </div>
                    <div class="text-center mt-[27px]">
                        <a href="/tin-cong-ty/su-kien"
                            class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block text-[#0771B1] text-[15px] px-4 py-1 rounded-lg font-medium shadow-lg">Xem
                            thêm</a>
                    </div>
                </div>

                <div class="lg:w-1/3 sm:w-1/2 w-full flex flex-col justify-between">
                    <div>
                        <div class="border-l-[7px] border-l-[#0771B1] mt-4 mb-[30px] ">
                            <p class="text-[40px] font-roboto font-bold pl-[28px] min-w-[320px] h-[40px] leading-[40px]">
                                Đọc nhiều nhất</p>
                        </div>

                        <div class="grid  grid-cols-1 gap-x-[30px]  gap-y-[42px] ">
                           {{-- đọc nhiều nhất --}}
                            @foreach ($news['news_list_topview'] as $item)
                            <div class="flex space-x-4 " data-aos="fade-left">
                                <div class="w-1/3">
                                    <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}"><img
                                            src="{{route('uploads', $item->picture)}}"
                                            alt="" /></a>
                                </div>
                                <div class="w-2/3 flex flex-col justify-between">
                                    {{-- <a href=""><p class="text-[15px] font-bold ">{handelTitle(row.title, 3)}</p></a> --}}
                                    <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                        <p class="text-[15px] font-bold ">
                                            {{$item->title}}
                                        </p>
                                    </a>
                                    <div class="text-[#8F8F8F] flex justify-between mt-4 pr-4 text-[15px] ">
                                        <div class=" flex items-center space-x-2 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                                viewBox="0 0 16.036 16.043">
                                                <path id="Path_60903" data-name="Path 60903"
                                                    d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                                    transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                            </svg>
                                            <p>{{$item->date_update->toDateString()}}</p>
                                        </div>
                                        <div class="flex items-center space-x-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                                viewBox="0 0 19.709 12.054">
                                                <path id="Path_3656" data-name="Path 3656"
                                                    d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                                    transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                            </svg>
                                            <p>{{$item->num_view}}</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            @endforeach
                         



                        </div>
                    </div>

                    <div class="sm:text-left text-center mt-[44px]">
                        <a href="#"
                            class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
             text-[#0771B1] text-[15px] px-4 py-1 rounded-lg font-medium shadow-lg">Xem
                            thêm</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#F8F8F8] mt-[30px]">
            <div class="container sm:px-0 px-4 py-[26px]">
                <div class="border-l-[7px] border-l-[#0771B1] mt-4 mb-[30px]">
                    <p class="text-[40px] font-roboto font-bold pl-[28px] h-[40px] leading-[40px]">
                        {{-- tin công nghệ --}}
                        {{$news['news_group'][1]->title}}
                    </p>
                </div>
                <div class="grid md:grid-rows-4 sm:grid-cols-2 grid-cols-1  gap-x-[30px] gap-y-[20px]">
                    @foreach ($news['news_list_tech'] as $key => $item)
                        @if ($key==0)
                        <div class="md:row-span-4 row-span-2 " key={index}>
                            <div class="overflow-hidden ">
                                <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}"><img
                                    src="{{route('uploads', $item->picture)}}"
                                        alt="" class="object-cover w-full" /></a>
                            </div>
                            <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                <p class="text-[18px] font-bold mt-6">
                                    {{$item->title}}
                                </p>
                            </a>
                            <div class="text-[#8F8F8F] flex space-x-10 md:mt-[30px] mt-2">
                                <div class=" flex items-center space-x-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                        viewBox="0 0 16.036 16.043">
                                        <path id="Path_60903" data-name="Path 60903"
                                            d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                            transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                    </svg>
                                    <p>{{$item->date_update->toDateString()}}</p>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                        viewBox="0 0 19.709 12.054">
                                        <path id="Path_3656" data-name="Path 3656"
                                            d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                            transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                    </svg>
                                    <p>{{$item->num_view}}</p>
                                </div>
                            </div>
    
                        </div>
                        @else
                        <div class="flex space-x-4 sm:mt-0 mt-4 h-[100px] " key={index}>
                            <div class="w-1/3 sm:w-1/4 min-w-[100px] overflow-hidden">
                                <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}"><img
                                    src="{{route('uploads', $item->picture)}}"
                                        alt="" /></a>
                            </div>
                            <div class="w-2/3 sm:w-3/4 flex flex-col lg:justify-between">
                                <a href="{{route('news.detail',[$item['news_group']['friendly_link'], $item['friendly_link']])}}">
                                    <p class="text-[15px] font-bold ">
                                        {{$item->title}}    
                                    </p>
                                </a>
                                <div class="text-[#8F8F8F] flex  space-x-4 md:space-x-10 mt-4   pr-4 text-[15px] ">
                                    <div class=" flex items-center space-x-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                            viewBox="0 0 16.036 16.043">
                                            <path id="Path_60903" data-name="Path 60903"
                                                d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                                transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item->date_update->toDateString()}}</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                            viewBox="0 0 19.709 12.054">
                                            <path id="Path_3656" data-name="Path 3656"
                                                d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                                transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item->num_view}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endif
                    
                    @endforeach
                  
                       
                  


                </div>
                <div class="text-center mt-6">
                    <a href="/tin-cong-ty/tin-cong-nghe"
                        class="hover:border-[#0771B1] border-[1px] border-transparent bg-[#93CEF2] inline-block
         text-[#0771B1] text-[15px] px-4 py-1 rounded-lg font-medium shadow-lg">Xem
                        thêm</a>
                </div>
            </div>

        </div>
        @include('component.deployment_app')
        @include('component.customer')
       

    </main>
@endsection
