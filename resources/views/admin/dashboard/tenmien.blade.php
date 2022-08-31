@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="flex justify-between ">
            <h1 class="font-roboto text-[25px] font-bold">duhochongphuc.com</h1>
        </div>

        <div class="mt-4 min-w-[1122px] shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Quản trị tên miền</h2>

            <div class="flex space-x-2 items-center">
                <p class="font-roboto text-[17px]">Name Sever</p>
                <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                        <g id="Group_21555" data-name="Group 21555" transform="translate(-1173 -300)">
                            <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8" r="8"
                                transform="translate(1173 301)" fill="#c5c5c5" />
                            <text id="_" data-name="?" transform="translate(1178 314)" fill="#fff"
                                font-size="13" font-family="Roboto-Bold, Roboto" font-weight="700">
                                <tspan x="0" y="0">?</tspan>
                            </text>
                        </g>
                    </svg>
                </span>
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
                    padding: 24px 0;
                }

                td {
                    font-size: 14px;
                    padding: 10px 0;
                }
            </style>
            <div class="mt-4 min-w-[1122px] overflow-x-scroll">
                <div>
                    <div class="flex items-center bg-[#0771B1] rounded-t-[5px] px-4 py-6 space-x-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g id="Ellipse_735" data-name="Ellipse 735" fill="#fff" stroke="#00cb44"
                                    stroke-width="5">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="5.5" fill="none" />
                                </g>
                            </svg>
                        </span>
                        <p class="text-white text-[15px] font-body">Sử dụng Name Sever tại IMS</p>
                    </div>
                    <table class="w-full text-center ">
                        <tbody class="text-[14px] font-body">
                            @for ($i = 0; $i < 2; $i++)
                                <tr class="text-left">
                                    <td scope="col" class="w-1/5 px-4 py-4 border-l-transparent">Name Sever 1</td>
                                    <td scope="col" class="px-4 py-4 border-r-transparent font-bold">ns2.ims.com</td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>

                    <div class="flex items-center bg-[#0771B1] rounded-[5px] px-4 py-6 space-x-4 mt-4">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                <g id="Ellipse_736" data-name="Ellipse 736" fill="#fff" stroke="#707070"
                                    stroke-width="5">
                                    <circle cx="8" cy="8" r="8" stroke="none" />
                                    <circle cx="8" cy="8" r="5.5" fill="none" />
                                </g>
                            </svg>
                        </span>
                        <p class="text-white text-[15px] font-body">Name Sever tùy chỉnh</p>
                    </div>
                </div>


            </div>
        </div>
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full rounded-[5px] mb-10">
            <div class="border-b-[1px] border-[#E2E2E2] p-5 " >
                <h2 class="font-roboto text-[20px] font-bold">Thông tin tổng quan</h2>
            </div>
            <div class="border-b-[1px] border-[#E2E2E2] p-5 " >
                <p class="text-[17px] font-roboto font-medium">Vòng đời tên miền</p>
                <div class="flex mt-1">
                    <div class="w-[87.5%]">
                        <div class="flex space-x-4">
                            <div class="text-[17px] font-roboto w-1/3">
                                <p class="">Tình trạng</p>
                                <div class="bg-[#F3F3F3] rounded-[5px] py-2 px-5 mt-1">
                                    <p class=" font-bold">Đang sử dụng</p>
                                </div>
                            </div>
                            <div class="text-[17px] font-roboto w-1/3">
                                <p class="">Ngày đăng ký</p>
                                <div class="bg-[#F3F3F3] rounded-[5px] py-2 px-5 mt-1">
                                    <p class=" font-bold">28/08/2019</p>
                                </div>
                            </div>
                            <div class="text-[17px] font-roboto w-1/3">
                                <p class="">Ngày hết hạn</p>
                                <div class="bg-[#F3F3F3] rounded-[5px] py-2 px-5 mt-1">
                                    <p class=" font-bold">28/08/2023</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-[12.5%]">
                        <div class="flex items-end justify-between m-auto h-full">
                            <button class="bg-[#49D3F0] text-white rounded-[5px] py-2 px-6 mx-auto">Chức năng</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-b-[1px] border-[#E2E2E2] p-5 " >
                <p class="text-[17px] font-roboto font-medium">Xác nhận thông tin chủ thể</p>
                <div class="flex mt-1">
                    <div class="w-[87.5%]">
                        <p class="text-[17px] font-roboto">Bạn cần xác nhận thông tin qua email, trong vòng 15 ngày, để tên miền không bị gián đoạn (khóa) khi sử dụng.</p>
                    </div>
                    <div class="w-[12.5%]">
                        <div class="flex items-end justify-between m-auto h-full">
                            <button class="bg-[#49D3F0] text-white rounded-[5px] py-2 px-6 mx-auto">Gửi Email</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" p-5 " >
                <p class="text-[17px] font-roboto font-medium">Đánh giá dịch vụ</p>
                <div class="flex mt-1">
                    <div class="w-[87.5%]">
                        <p class="text-[17px] font-roboto">Hãy chia sẻ trải nghiệm của bạn về dịch vụ tại IMS.</p>
                    </div>
                    <div class="w-[12.5%]">
                        <div class="flex items-end justify-between m-auto h-full">
                            <button class="bg-[#49D3F0] text-white rounded-[5px] py-2 px-6 mx-auto">Đánh giá</button>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>


    </main>
@endsection
