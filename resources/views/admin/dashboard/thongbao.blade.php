@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="min-w-[1122px]">
            <h1 class="font-roboto text-[25px] font-bold">Thông báo của bạn</h1>
           
        </div>
        {{-- lọc tìm kiếm --}}
        <div class="rounded-[5px] shadow-full flex items-center mt-4 py-1">
            <button class=" flex items-center pl-6 pr-2 py-4 space-x-3" data-dropdown-toggle="dropdown"
                id="dropdownDefault">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="15" viewBox="0 0 24 15">
                    <g id="Group_21470" data-name="Group 21470" transform="translate(-110 -272)">
                        <rect id="Rectangle_7260" data-name="Rectangle 7260" width="24" height="3" rx="1.5"
                            transform="translate(110 272)" fill="#4b4b4b" />
                        <rect id="Rectangle_7261" data-name="Rectangle 7261" width="16" height="3" rx="1.5"
                            transform="translate(110 278)" fill="#4b4b4b" />
                        <rect id="Rectangle_7262" data-name="Rectangle 7262" width="8" height="3" rx="1.5"
                            transform="translate(110 284)" fill="#4b4b4b" />
                    </g>
                </svg>
                <p>Sắp xếp theo ngày</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="11.669" height="7.573" viewBox="0 0 11.669 7.573">
                    <path id="Path_2303-2" data-name="Path 2303-2" d="M160,411.345l7.573-5.834L160,399.676Z"
                        transform="translate(411.345 -160) rotate(90)" fill="#4b4b4b" />
                </svg>
            </button>
            <button class=" flex items-center px-10 py-4 space-x-3" data-dropdown-toggle="dropdown" id="dropdownDefault">
                <p>Hôm nay</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="11.669" height="7.573" viewBox="0 0 11.669 7.573">
                    <path id="Path_2303-2" data-name="Path 2303-2" d="M160,411.345l7.573-5.834L160,399.676Z"
                        transform="translate(411.345 -160) rotate(90)" fill="#4b4b4b" />
                </svg>
            </button>
            <div id="dropdown" class="hidden w-[160px] shadow-md z-30 !top-[-15px] ">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
                    @for ($i = 0; $i < 3; $i++)
                        <li class=" px-2  bg-white  border-t-[1px] #cecece">
                            <button type="button" class="block py-4  m-auto">
                                <div class="inline-flex items-center ">
                                    United States
                                </div>
                            </button>
                        </li>
                    @endfor
                </ul>
            </div>


            <form action="" class="w-[68%] z-10">
                <div class="form-group relative flex items-center z-30">
                    <input type="text" class="w-full py-1 px-8 focus:outline-none border-b-[1px] border-[#C9C9C9]"
                        placeholder="Tìm kiếm">
                    <span class="absolute left-0 ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21">
                            <g id="Group_12062" data-name="Group 12062" transform="translate(0 0)">
                                <path id="Path_32991" data-name="Path 32991"
                                    d="M703.239,389.56a6.792,6.792,0,0,1,.155.886,8.507,8.507,0,1,0,.06-3.506c-.076.339-.129.681-.171,1.025,0,.038.014.088-.043.106Zm9.822-7.389a.066.066,0,0,1,.021,0,6.831,6.831,0,0,1,5.464,6.413,6.706,6.706,0,0,1-2.2,5.256,6.455,6.455,0,0,1-3.285,1.665,6.178,6.178,0,0,1-2.469.04,6.8,6.8,0,1,1,2.469-13.372Z"
                                    transform="translate(-703.239 -380.322)" fill="#4b4b4b" />
                                <path id="Path_32992" data-name="Path 32992"
                                    d="M667.318,510.887a1.355,1.355,0,0,1,.449-.156,2.539,2.539,0,0,0,1.012-4.1c-1-1.059-2.055-2.075-3.093-3.1a.831.831,0,0,0-1.186.009.845.845,0,0,0,.018,1.218q1.454,1.463,2.917,2.917a.871.871,0,0,1,.292.823.845.845,0,0,1-1.391.478c-.172-.147-.325-.316-.486-.476q-1.271-1.27-2.542-2.54a.85.85,0,0,0-1.457.5.772.772,0,0,0,.223.662c1.041,1.045,2.081,2.089,3.132,3.124a2.33,2.33,0,0,0,1.221.6c.033.006.073,0,.084.044Z"
                                    transform="translate(-648.45 -489.887)" fill="#4b4b4b" />
                            </g>
                        </svg>
                    </span>
                </div>
            </form>

        </div>

        <div class="rounded-[5px] shadow-full flex items-center mt-4 p-5">
            <ul class="flex flex-col w-full font-body">
                @for ($i = 0; $i < 10; $i++)
                    @if (in_array($i,[1,3,4]))
                        <li>
                            <a href="" class="flex justify-between py-4 px-3 bg-[#E9F5FC]">
                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18"
                                        viewBox="0 0 4 18">
                                        <g id="Group_21479" data-name="Group 21479" transform="translate(-123 -319)">
                                            <circle id="Ellipse_690" data-name="Ellipse 690" cx="2"
                                                cy="2" r="2" transform="translate(123 319)"
                                                fill="#4b4b4b" />
                                            <circle id="Ellipse_697" data-name="Ellipse 697" cx="2"
                                                cy="2" r="2" transform="translate(123 326)"
                                                fill="#4b4b4b" />
                                            <circle id="Ellipse_698" data-name="Ellipse 698" cx="2"
                                                cy="2" r="2" transform="translate(123 333)"
                                                fill="#4b4b4b" />
                                        </g>
                                    </svg>
                                    <p class="font-bold text-[17px]">Thông báo về việc thay đổi giá dịch vụ</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <p class="text-[15px] text-[#0771B1]">1 giờ trước</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                        <circle id="Ellipse_689" data-name="Ellipse 689" cx="6" cy="6" r="6" fill="#00cb44"/>
                                      </svg>
                                      
                                </div>
                            </a>

                        </li>
                    @else
                        <li>
                            <a href="" class="flex justify-between py-4 px-3">
                                <div class="flex items-center space-x-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="18"
                                        viewBox="0 0 4 18">
                                        <g id="Group_21479" data-name="Group 21479" transform="translate(-123 -319)">
                                            <circle id="Ellipse_690" data-name="Ellipse 690" cx="2"
                                                cy="2" r="2" transform="translate(123 319)"
                                                fill="#4b4b4b" />
                                            <circle id="Ellipse_697" data-name="Ellipse 697" cx="2"
                                                cy="2" r="2" transform="translate(123 326)"
                                                fill="#4b4b4b" />
                                            <circle id="Ellipse_698" data-name="Ellipse 698" cx="2"
                                                cy="2" r="2" transform="translate(123 333)"
                                                fill="#4b4b4b" />
                                        </g>
                                    </svg>
                                    <p class="text-[17px]">Thông báo về việc thay đổi giá dịch vụ</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <p class="text-[15px] text-[#0771B1]">1 giờ trước</p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                        viewBox="0 0 12 12">
                                        <circle id="Ellipse_693" data-name="Ellipse 693" cx="6" cy="6"
                                            r="6" fill="#707070" />
                                    </svg>
                                </div>
                            </a>

                        </li>
                    @endif
                @endfor

            </ul>
        </div>

    </main>
@endsection
