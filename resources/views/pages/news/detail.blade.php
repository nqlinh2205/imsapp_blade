@extends('layout.main')
@php
    // dd($news)   
@endphp

@section('content')

<main class="container px-4 sm:px-0 pb-[100px] ">
    <div>
        <div class="container sm:px-0 px-4 pt-3 ">
            <div class=" px-4 sm:px-0 a font-sans font-normal text-[15px] text-left mt-[1px]">
                <span>
                    <a href={{route('/')}}>
                        Trang chủ
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a href={{route('news')}}>
                        {{$news['setting']['news_meta_title']}}
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="{{route('news.group', $news['news_group']->friendly_link)}}">
                        {{$news['news_group']->title}}
                    </a>
                    <i class="fa-solid fa-angle-right"></i>
                    <a href="{{route('news.detail', [$news['news_group']->friendly_link, $news['friendly_link']])}}" class="text-[#0771B1]">
                        {{$news['news_detail']['title']}}
                    </a>
                </span>
            </div>
        </div>
    </div>

    <div class="flex md:flex-row  flex-col mt-[30px] ">
        <div class="md:w-2/3 w-full content">
            <div class="border-2  px-5 mr-5 border-gray-100 pb-10 pt-5">
                <p class="text-[32px]">
                    {{$news['news_detail']['title']}}
                </p>
                <div>
                    <p>Tác giả: <span>
                    {{$news['news_detail']['tiadmin_full_nametle']}}

                    </span></p>
                    <div class="text-[#8F8F8F] flex pr-4 space-x-2 text-[15px] ">
                        <div class=" flex items-center space-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                viewBox="0 0 16.036 16.043">
                                <path id="Path_60903" data-name="Path 60903"
                                    d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                    transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                            </svg>
                            <p>
                                {{$news['news_detail']['date_update']->toDateString()}}
                            </p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                viewBox="0 0 19.709 12.054">
                                <path id="Path_3656" data-name="Path 3656"
                                    d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                    transform="translate(-1 -4.5)" fill="#8f8f8f" />
                            </svg>
                            <p>
                                {{$news['news_detail']['num_view']}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="mt-5">
                    {!! html_entity_decode($news['news_detail']['content']) !!}
                   
                </div>


            </div>
        </div>
        <div class="md:w-1/3 w-full pt-[22px] sidebar">
            <div class="sidebar_inner">
                <p class="text-[32px]">Top bài viết</p>
                <div class="grid  grid-cols-1 gap-y-8">
                    {{-- {
                        news.news_list_topview.map((row, index) => --}}
                        @foreach ($news['news_list_topview'] as $item)
                        <div class="flex space-x-4 " key={index}>
                            <div class="w-1/4">
                                <a href="{{route('news.detail', [$item['news_group']->friendly_link ,$item['friendly_link'] ])}}">
                                    <img
                                        src="{{route('uploads', $item['picture'])}}"
                                        alt={row.title}
                                        class="w-full" />
                                </a>
                            </div>
                            <div class="w-3/4 flex flex-col justify-between">
                                <a href={{route('news.detail', [$item['news_group']->friendly_link ,$item['friendly_link'] ])}}>
                                    <div class="text-[16px] font-bold leading-[16px]" >
                                        {!! html_entity_decode($item['title']) !!}
                                    </div>
                                </a>
                                <div class="text-[#8F8F8F] flex justify-between pr-4 text-[15px] ">
                                    <div class=" flex items-center space-x-2 ">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                            viewBox="0 0 16.036 16.043">
                                            <path id="Path_60903" data-name="Path 60903"
                                                d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                                transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item['date_update']->toDateString()}}</p>
                                    </div>
                                    <div class="flex items-center space-x-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                            viewBox="0 0 19.709 12.054">
                                            <path id="Path_3656" data-name="Path 3656"
                                                d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                                transform="translate(-1 -4.5)" fill="#8f8f8f" />
                                        </svg>
                                        <p>{{$item['num_view']}}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        @endforeach
                      
                </div>
            </div>
        </div>
    </div>
    <div class="list_news">
        <div class="title-news text-[28px] mt-10">
            <p class="text-[32px]">Bài viết liên quan</p>
        </div>
        <div class="mt-[30px] grid sm:grid-cols-4 grid-cols-1 gap-x-[30px]">
            @foreach ($news['news_list_related'] as $item)
            <div  class="flex flex-col justify-between">
                <div class="overflow-hidden">
                    <a href="{{route('news.detail', [$item['news_group']->friendly_link ,$item['friendly_link'] ])}}">
                        <img
                            src={{route('uploads', $item['picture'])}}
                            alt={{{$item['title']}}}
                            class="w-full lg:h-[160px]" />
                    </a>
                    <a href="{{route('news.detail', [$item['news_group']->friendly_link ,$item['friendly_link'] ])}}">
                        <div class="text-[18px] font-bold mt-5 ">
                            {!! html_entity_decode($item['title']) !!}
                        </div>
                    </a>
                </div>
                <div>

                    <div class="text-[#8F8F8F] flex sm:space-x-10 ">
                        <div class=" flex items-center space-x-2 ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16.036" height="16.043"
                                viewBox="0 0 16.036 16.043">
                                <path id="Path_60903" data-name="Path 60903"
                                    d="M163.318,878.676h-1c-.045-.009-.09-.02-.136-.027-.472-.08-.955-.122-1.415-.245a8.019,8.019,0,0,1,1.262-15.732,7.787,7.787,0,0,1,5.17,1.269,7.877,7.877,0,0,1,3.52,5.347c.052.286.081.577.121.866v1c-.009.04-.02.08-.026.121-.055.371-.089.746-.166,1.113a8.037,8.037,0,0,1-6.416,6.161C163.927,878.6,163.622,878.634,163.318,878.676Zm-1.071-10.31h0c0,.746,0,1.493,0,2.239a.629.629,0,0,0,.251.528c.934.745,1.865,1.494,2.8,2.236a.7.7,0,0,0,.292.136.546.546,0,0,0,.613-.325.559.559,0,0,0-.176-.687q-1.256-1.011-2.517-2.014a.3.3,0,0,1-.125-.262q.006-2.02,0-4.039a1.028,1.028,0,0,0-.023-.263.563.563,0,0,0-.608-.409.557.557,0,0,0-.507.56C162.245,866.831,162.248,867.6,162.248,868.365Z"
                                    transform="translate(-154.801 -862.633)" fill="#8f8f8f" />
                            </svg>
                            <p>{{$item['date_update']->toDateString()}}</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19.709" height="12.054"
                                viewBox="0 0 19.709 12.054">
                                <path id="Path_3656" data-name="Path 3656"
                                    d="M10.855,4.5A10.637,10.637,0,0,0,1,10.527a10.637,10.637,0,0,0,9.855,6.027,10.637,10.637,0,0,0,9.855-6.027A10.637,10.637,0,0,0,10.855,4.5Zm0,10.045a4.269,4.269,0,0,1-4.479-4.018,4.269,4.269,0,0,1,4.479-4.018,4.269,4.269,0,0,1,4.479,4.018A4.269,4.269,0,0,1,10.855,14.545Zm0-6.429a2.557,2.557,0,0,0-2.688,2.411,2.557,2.557,0,0,0,2.688,2.411,2.557,2.557,0,0,0,2.688-2.411A2.557,2.557,0,0,0,10.855,8.116Z"
                                    transform="translate(-1 -4.5)" fill="#8f8f8f" />
                            </svg>
                            <p>{{$item['num_view']}}</p>
                        </div>
                    </div>
                </div>

            </div>
            @endforeach    
            
        </div>
    </div>
</main>

@endsection