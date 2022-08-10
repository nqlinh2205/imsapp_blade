<header>
    <div class="fixed top-0 w-full bg-white z-[1000] cursor-default">
        <section class="bg-[#0771B1] md:h-[40px] h-auto w-full font-sans text-[14px]">
            <div
                class="container px-4 sm:px-0 text-white text-center text-[16px] flex items-center md:justify-end justify-center">
                <div class="p-2 sm:flex hidden">
                    <a href={ims.config_social[2].a} class="md:pr-[19px] pr-2 hover:scale-110">
                        <img src={{ asset('storage/uploads/img/facebook-icon.png') }} alt="" width="22"
                            height="22" />
                    </a>
                    <div data-fancybox-trigger="content_place_header">
                        <img src="{{ asset('storage/uploads/img/zalo-icon.png') }}" alt="" width="22"
                            height="22" class="ring-1 ring-white rounded-full cursor-pointer hover:scale-110" />
                    </div>
                    <img data-fancybox="content_place_header" src={route("uploads", ims.banner_qrcode[0].content)}
                        alt="" class="hidden" />
                    <a href={ims.config_social[0].a} class="md:pr-[19px] pr-2 md:pl-[19px] pl-2 hover:scale-110">
                        <img src="{{ asset('storage/uploads/img/telegram-icon.png') }}" alt="" width="22"
                            height="22" />
                    </a>
                    <a href={ims.config_social[3].a} class="md:pr-[19px] pr-2 hover:scale-110">
                        <img src="{{ asset('storage/uploads/img/whatapps-icon.png') }}" alt="" width="22"
                            height="22" />
                    </a>
                </div>
                <span class="px-5 sm:block hidden font-light">I</span>
                <div class="p-2 sm:block hidden">
                    <span href="" class="divide-x">
                        <span class="font-light">
                            Email: <a href={"mailto:" + ims.conf.email} class="font-bold">info@imsvietnamese.com</a>
                        </span>
                    </span>
                </div>
                <span class="px-5 sm:block hidden font-light">I</span>
                <div class="p-2">
                    <span class="divide-x">
                        <span class="font-light">
                            Hotline: <a href={"tel:" + ims.conf.hotline} class="font-bold text-[#57F7F0]">089 992
                                7986</a>
                        </span>
                    </span>
                </div>
            </div>
        </section>
        <nav class="bg-white drop-shadow-lg">
            <div class="container px-3 sm:px-0 flex items-center justify-between py-[11px] xl:gap-[122px] gap-[10px]">
                <div class="flex items-center justify-between gap-[50px]">
                    <a href="{{ route('/') }}" class="logo">
                        <img src="{{ asset('storage/uploads/home/2022_07/group_12.png') }}" alt=""
                            width="98" height="57" class="w-full h-auto" />
                    </a>
                    <div class="hidden lg:block">
                        <ul class="font-bold flex justify-start text-[14px] flex-1">
                            <li
                                class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                                <a class="flex   hover:text-[#0771B1] font-bold text-[#0771B1]" href="">Giới
                                    thiệu
                                </a>

                            </li>

                            <li class="flex flex-col justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                                <a class="mega_menu flex items-center peer  hover:text-[#0771B1] font-bold" href="javascript:void(0)">App mobile
                                    <i class="fa-solid fa-angle-down ml-1"></i>
                                </a>
                                <ul class="!text-[14px] hidden peer-hover:flex hover:flex w-[200px] flex-col bg-white  absolute inset-x-0 top-[30px]">

                                    @foreach ($ims['app_group'] as $item)
                                        <li class="">
                                            <a class="block px-5 py-3 peer hover:bg-gray-200"
                                                href="{{route('app.group',$item->friendly_link)}}">{{ $item->title }}</a>
                                            @if (count($item->app) != 0)
                                                <ul class="!text-[14px] hidden peer-hover:flex hover:flex w-[200px] flex-col bg-white  absolute  right-[-200px] inset-y-0">
                                                    @foreach ($item->app as $item_app)
                                                        <li class="">
                                                            <a class="block  px-5 py-3 peer hover:bg-gray-200"
                                                                href="{{route('app.detail',[$item->friendly_link,$item_app->friendly_link])}}">
                                                                {{ $item_app->title }}
                                                            </a>
                                                            <ul
                                                                class="!text-[14px] hidden peer-hover:flex hover:flex w-[400px] flex-col bg-white  absolute  right-[-400px] inset-y-0">
                                                                <li class="text-center">
                                                                    <img src="{{ route('uploads', $item_app->picture) }}"  alt="">
                                                                    {{-- <p>{{ $item_app->title }}</p>
                                                                    <p class="!font-normal">{!! html_entity_decode($item_app->short1)  !!}</p> --}}
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach

                                    
                                </ul>

                            </li>
                            <li
                                class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                                <a class="flex  font-bold hover:text-[#0771B1] " href="{{ route('app') }}">Kho
                                    App</a>
                            </li>
                            <li
                                class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                                <a class="flex  font-bold hover:text-[#0771B1] " href="{{ route('news') }}">Tin công
                                    ty</a>
                            </li>
                            <li
                                class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                                <a class="flex  font-bold hover:text-[#0771B1] " href="{{ route('contact') }}">Liên
                                    hệ</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="icon-header flex items-center">
                    <a class="cursor-pointer mt-1 sm:block hidden hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19.938" height="21.667"
                            viewBox="0 0 19.938 21.667">
                            <g id="Group_21468" data-name="Group 21468" transform="translate(-982.062 -68)">
                                <g id="Group_21462" data-name="Group 21462" transform="translate(1914.17 -156.228)">
                                    <path id="Path_61156" data-name="Path 61156"
                                        d="M-923.658,241.787c-2.3,0-4.592-.029-6.888.011a1.465,1.465,0,0,1-1.461-2.066,2.15,2.15,0,0,1,.768-1.04c.2-.154.411-.306.616-.459a2.369,2.369,0,0,0,1-1.932c.027-1.431.029-2.863.025-4.295a4.633,4.633,0,0,1,1.147-3.167,6.134,6.134,0,0,1,2.692-1.745c.612-.212.642-.246.653-.9a1.238,1.238,0,0,1,.844-1.29,1.658,1.658,0,0,1,1.745.354,1.191,1.191,0,0,1,.3.769c.037.831.042.826.81,1.115a5.806,5.806,0,0,1,2.964,2.256,4.411,4.411,0,0,1,.721,2.414c.007,1.316,0,2.632.006,3.948a6.426,6.426,0,0,0,.063.89,2.341,2.341,0,0,0,.971,1.585c.219.163.44.322.655.489a2.079,2.079,0,0,1,.819,1.448,1.37,1.37,0,0,1-1.414,1.613c-1.751,0-3.5,0-5.253,0Z"
                                        transform="translate(0)" fill="#0771b1" />
                                    <path id="Path_61157" data-name="Path 61157"
                                        d="M-842.8,501.7a2.557,2.557,0,0,1-1.262,2.232,2.839,2.839,0,0,1-3.158.1,2.627,2.627,0,0,1-1.426-2.328Z"
                                        transform="translate(-77.937 -258.568)" fill="#0771b1" />
                                </g>
                                <g id="Ellipse_688" data-name="Ellipse 688" transform="translate(990 68)"
                                    fill="red" stroke="#fff" strokeWidth="2">
                                    <circle cx="6" cy="6" r="6" stroke="none" />
                                    <circle cx="6" cy="6" r="5" fill="none" />
                                </g>
                            </g>
                        </svg>
                    </a>
                    <div class="sm:hidden block">
                        <div
                            class="border-[1px] border-black rounded-md text-[14px] font-normal py-3 px-3 items-center justify-center mr-[5px] flex">
                            <a href="" class="hover:text-[#0771B1] hover:scale-110">
                                Đăng nhập
                            </a>
                            &nbsp;&nbsp;/&nbsp;&nbsp;
                            <a href="" class="hover:text-[#0771B1] hover:scale-110">
                                Đăng ký nhanh
                            </a>
                        </div>
                    </div>
                    <a href=""
                        class="hover:scale-95 sm:flex hidden border-[1px] border-black rounded-md text-[14px] font-normal w-[122px] h-[40px] items-center justify-center ml-[17px]">
                        Đăng nhập
                    </a>
                    <a href=""
                        class="hover:scale-95 sm:flex hidden bg-[#0771B1] text-white rounded-md text-[14px] font-normal w-[122px] h-[40px] items-center justify-center ml-[20px]">
                        Đăng ký nhanh
                    </a>
                    <div class="bg-white flex justify-center items-center hover:scale-110 pr-1">
                        <div class="flag">

                        </div>
                    </div>
                    <div class="h-auto hover:scale-110 lg:hidden right-0 flex items-center">
                        <div class="sidermenu w-[40px] h-auto">
                            <button class="show-menu-mobile">
                                <svg class="svg-inline--fa" xmlns="http://www.w3.org/2000/svg" width="25"
                                    height="15" viewBox="0 0 25 15">
                                    <g id="Group_231" data-name="Group 231" transform="translate(-1184 -192)">
                                        <rect id="Rectangle_134" data-name="Rectangle 134" width="25"
                                            height="1" transform="translate(1184 192)" fill="#161616" />
                                        <rect id="Rectangle_135" data-name="Rectangle 135" width="25"
                                            height="1" transform="translate(1184 199)" fill="#161616" />
                                        <rect id="Rectangle_136" data-name="Rectangle 136" width="25"
                                            height="1" transform="translate(1184 206)" fill="#161616" />
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <nav
            class="nav-mobile hidden fixed top-0 right-0 bg-white opacity-90 h-full xl:w-[400px] w-[100%] text-black z-[1100] scrollbar-hide overflow-auto">
            <div class="z-40 md:mt-[20px] md:mr-[20px] w-[25px] h-[25px] float-right">
                <button class="close_nav bg-black rounded-full w-full h-full text-white">
                    <i class="fa-solid fa-xmark"></i>
                </button>

            </div>
            <ul class="font-medium text-[27px] pt-16">
                <li
                    class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                    <a class="flex peer  hover:text-[#0771B1] font-bold text-[#0771B1]" href="">Giới thiệu</a>
                </li>
                <li
                    class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                    <a class="flex peer font-bold hover:text-[#0771B1] " href="">App Mobile</a>
                </li>
                <li
                    class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                    <a class="flex peer font-bold hover:text-[#0771B1] " href="{{ route('app') }}">Kho App</a>
                </li>
                <li
                    class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                    <a class="flex peer font-bold hover:text-[#0771B1] " href="{{ route('news') }}">Tin công ty</a>
                </li>
                <li
                    class="flex justify-center px-[15px] lg:py-0 py-3 xl:text-[17px] lg:text-[15px] text-[17px] relative ">
                    <a class="flex peer font-bold hover:text-[#0771B1] " href="{{ route('contact') }}">Liên hệ</a>
                </li>
            </ul>
        </nav>
    </div>


</header>
