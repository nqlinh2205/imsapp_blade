@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="flex justify-between  min-w-[1122px]">
            <h1 class="font-roboto text-[25px] font-bold">Quản lý Cloud Hosting</h1>
            <div class="flex space-x-10">
                <div class="flex font-body text-[17px] items-center">
                    <p class="mr-4">Hiển thị hàng</p>
                    <select class="flex items-center border-[#0771B1] border-2 rounded-[5px] px-3 py-1 space-x-3">
                       <option value="">5</option>
                       <option value="">5</option>
                       <option value="">5</option>
                       <option value="">5</option>
                        <svg xmlns="http://www.w3.org/2000/svg" width="11" height="7" viewBox="0 0 11 7">
                            <path id="Path_2303-2" data-name="Path 2303-2" d="M160,410.676l7-5.5-7-5.5Z"
                                transform="translate(410.676 -160) rotate(90)" fill="#4b4b4b" />
                        </svg>

                    </select>
                </div>
                <div class="flex items-center font-body text-[17px]">
                    <p>Chọn dịch vụ cần gia hạn</p>
                    <button class="bg-[#49D3F0] text-white rounded-[5px] py-2 px-6 ml-4">Gia hạn ngay</button>
                </div>
            </div>
        </div>
        {{-- lọc tìm kiếm --}}
        <div class="rounded-[5px] shadow-full flex items-center mt-4 space-x-10">
            <button class=" flex items-center px-6 py-4 space-x-3" data-dropdown-toggle="dropdown" id="dropdownDefault">
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
                <p>Tất cả</p>
                <svg xmlns="http://www.w3.org/2000/svg" width="11.669" height="7.573" viewBox="0 0 11.669 7.573">
                    <path id="Path_2303-2" data-name="Path 2303-2" d="M160,411.345l7.573-5.834L160,399.676Z"
                        transform="translate(411.345 -160) rotate(90)" fill="#4b4b4b" />
                </svg>
            </button>
            <div id="dropdown" class="hidden w-[160px] shadow-md z-30 !top-[-15px] ">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" >
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


            <form action="" class="w-4/5">
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
        {{-- danh sách --}}
        <style>
            table,
            td,
            th {
                border: 1px #E2E2E2 solid;
                font-family: Arial, Helvetica, sans-serif;
                z-index: 1;
            }
            th {
                background: #0771B1;
                color: white;
                font-size: 15px;
                font-weight: 400;
                padding: 15px 0;
            }

            td {
                font-size: 14px;
                padding: 10px 0;
            }
           
            checkbox{
                width: 15px;
                height: 15px;
                border: 1px solid #707070;
            }
            
        </style>
        <div class="mt-4 min-w-[1122px] overflow-x-scroll rounded-t-[10px] shadow-full">
            <table class="w-full text-center ">
                <thead class="">
                    <th class="border-l-transparent">STT</th>
                    <th>Dịch vụ</th>
                    <th>Tên miền</th>
                    <th>Tình trạng</th>
                    <th>Quản lý</th>
                    <th>Ngày hết hạn</th>
                    <th class="border-r-transparent">
                        <div class="flex flex-col justify-center">
                            <p>Gia hạn</p>
                        <input type="checkbox" >
                        </div>
                    </th>
                </thead>
                <tbody>
                    @for ($i = 0; $i < 4; $i++)
                        <tr>
                            <td class="border-l-transparent">{{$i+1}}</td>
                            <td class="text-left px-4">Hosting Linux SSD - Cloud Host 4</td>
                            <td class="text-left px-4"><a href="" class="text-[#0771B1] underline">thietkewebsite.info.vn</a></td>
                            <td>Đang sử dụng</td>
                            <td><a href="" class="underline">Chi tiết dịch vụ</a></td>
                            <td>28/08/2023</td>
                            <td class="border-r-transparent">
                                <input type="checkbox" >
                            </td>
                        </tr>
                    @endfor

                </tbody>
            </table>
            
        </div>
        {{-- pagination --}}
        <div class="mt-8 text-center">
            <ul class="flex items-center justify-center space-x-3">
                <li class="">
                    <a href=""
                        class=" rounded-full min-w-[22px] min-h-[22px] shadow-full flex justify-between items-center container">
                        <span class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10" viewBox="0 0 6 10">
                                <path id="Path_35614_-_Outline" data-name="Path 35614 - Outline"
                                    d="M-461.373,274.08H-461l.068-.026a.752.752,0,0,0,.5-.539.813.813,0,0,0-.277-.745c-1-.94-2.01-1.9-2.987-2.835l-.9-.856,1.807-1.719,2.109-2.007a.707.707,0,0,0,.229-.778.744.744,0,0,0-.711-.5.766.766,0,0,0-.465.155,1.245,1.245,0,0,0-.109.095l-.6.576c-1.247,1.187-2.537,2.415-3.8,3.625a.943.943,0,0,0-.242.394.637.637,0,0,0,.167.634c.031.033.062.063.09.089l.693.66c1.195,1.138,2.431,2.315,3.648,3.47a1.59,1.59,0,0,0,.239.179l.078.052Zm-3.972-4.7.039.033,1.075,1.024c.978.932,1.989,1.9,2.991,2.838a.341.341,0,0,1,.028.029.461.461,0,0,1-.049-.039c-1.217-1.155-2.452-2.332-3.647-3.47Zm4.171-4.58a.369.369,0,0,1-.038.041l-2.11,2.007-1.947,1.852c1.153-1.1,2.321-2.214,3.454-3.292l.6-.575Z"
                                    transform="translate(466.415 -264.08)" />
                            </svg>
                        </span>
                    </a>
                </li>
                @for ($i = 1; $i < 5; $i++)
                    @if ($i == 1)
                        <li><a href="">
                                <div class=" rounded-md text-white bg-[#0771B1] w-[22px] h-[22px]"> {{ $i }}
                                </div>
                            </a> </li>
                    @else
                        <li><a href="">
                                <div class=" rounded-mdw-[22px] h-[22px]"> {{ $i }}</div>
                            </a> </li>
                    @endif
                @endfor
                <li class="">
                    <a href=""
                        class=" rounded-full min-w-[22px] min-h-[22px] shadow-full flex justify-between items-center container">
                        <span class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="6" height="10"
                                viewBox="0 0 6 10">
                                <path id="Path_35614_-_Outline" data-name="Path 35614 - Outline"
                                    d="M-465.458,274.08h-.368l-.068-.026a.752.752,0,0,1-.5-.539.813.813,0,0,1,.277-.745c1-.94,2.01-1.9,2.987-2.835l.9-.856-1.807-1.719-2.109-2.007a.707.707,0,0,1-.229-.778.744.744,0,0,1,.711-.5.766.766,0,0,1,.465.155,1.245,1.245,0,0,1,.109.095l.6.576c1.247,1.187,2.537,2.415,3.8,3.625a.943.943,0,0,1,.242.394.637.637,0,0,1-.167.634c-.031.033-.062.063-.09.089l-.693.66c-1.195,1.138-2.431,2.315-3.648,3.47a1.59,1.59,0,0,1-.239.179l-.078.052Zm3.972-4.7-.039.033-1.075,1.024c-.978.932-1.989,1.9-2.991,2.838a.341.341,0,0,0-.028.029.461.461,0,0,0,.049-.039c1.217-1.155,2.452-2.332,3.647-3.47Zm-4.171-4.58a.369.369,0,0,0,.038.041l2.11,2.007,1.947,1.852c-1.153-1.1-2.321-2.214-3.454-3.292l-.6-.575Z"
                                    transform="translate(466.415 -264.08)" />
                            </svg>
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </main>
@endsection
