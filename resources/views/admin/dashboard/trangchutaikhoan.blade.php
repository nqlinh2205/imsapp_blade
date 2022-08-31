@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4">
        <div class="flex mt-4  min-w-[1122px]">
            <div class="w-5/6">
                <div class="grid grid-cols-2 gap-[15px] mt-4">
                    @for ($i = 0; $i < 4; $i++)
                        <div>
                            <p class="font-bold font-body text-[20px]">Hồ sơ cần hoàn tất</p>
                            <div class="flex items-center bg-[#034871] p-4 justify-between rounded-[20px]">
                                <div class="flex items-center space-x-10">
                                    <img src="{{ asset('img/ho-so.png') }}" alt="" width="88" height="81">
                                    <span class="font-body text-[40px] font-bold text-white">0</span>
                                </div>
                                <div class="">
                                    <a href="" class="text-white  relative capitalize underline"
                                        style="bottom: -30px">Xem</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
                {{--  --}}
                <div class="flex shadow-full  mt-5  rounded-[5px]">
                    <div class="w-1/2 text-center">
                        <div class=" py-5 text-[17px] font-body">
                            <p class="font-bold whitespace-pre-line	 ">
                                Bạn đang không có
                                yêu cầu hỗ trợ nào
                            </p>
                            <button class="mt-4 flex items-center space-x-4 m-auto bg-[#00CB44] px-6 py-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                    <g id="Group_21500" data-name="Group 21500" transform="translate(-1101 -265)">
                                        <circle id="Ellipse_702" data-name="Ellipse 702" cx="9" cy="9"
                                            r="9" transform="translate(1101 265)" fill="#fff" />
                                        <rect id="Rectangle_7278" data-name="Rectangle 7278" width="2" height="12"
                                            rx="1" transform="translate(1109 268)" fill="#00cb44" />
                                        <rect id="Rectangle_7279" data-name="Rectangle 7279" width="2" height="12"
                                            rx="1" transform="translate(1104 275) rotate(-90)" fill="#00cb44" />
                                    </g>
                                </svg>

                                <span class="text-white">Tạo yêu cầu hỗ trợ</span>
                            </button>
                        </div>
                    </div>
                    <div class="w-1/2 relative">
                        <img src="{{ asset('admin_img/yeu-cau.png') }}" alt="" width="356" height="157"
                            class="absolute bottom-0">
                    </div>
                </div>
                <div class=" shadow-full  mt-5 pb-5  rounded-[5px] mb-[50px]">
                    <div class="border-b-[1px] border-[#CCCCCC] py-3 px-4">
                        <p class="font-bold text-[20px] font-roboto">Kích hoạt dịch vụ nhanh</p>
                        <p class="font-body mt-4">Chúc mừng bạn đã đăng ký thành công!</p>
                        <p> Bạn có <span class="text-[#0771B1]">0 dịch vụ </span> cần kích hoạt. </p>
                    </div>
                    <div class="flex justify-between py-3 px-4">
                        <p class="font-bold text-[20px] font-roboto">Ưu đãi hiện hành</p>
                        <a href="" class=" font-body text-[#0771B1] underline text-[14px]">Đổi quà</a>
                    </div>
                    <div class="grid grid-cols-2 mx-4 font-body gap-x-4">
                        <div class="text-center flex-col space-y-2 bg-[#E1F1FC] py-4">
                            <p class="text-[17px]">[ĐK]THANH NIÊN CHUYỂN ĐỔI SỐ</p>
                            <p class="text-[17px] font-bold">TẶNG 10.000 ABC 0Đ</p>
                            <div class="border-dashed border-[2px] inline-block border-[#93CEF3] py-3 px-10">
                                <p class="text-[#2E8BC4] font-bold text-[25px] ">DGENABC</p>
                            </div>
                        </div>
                        <div class="text-center flex-col space-y-2 bg-[#E1F1FC] py-4">
                            <p class="text-[17px]">[ĐK]THANH NIÊN CHUYỂN ĐỔI SỐ</p>
                            <p class="text-[17px] font-bold">TẶNG 10.000 ABC 0Đ</p>
                            <div class="border-dashed border-[2px] inline-block border-[#93CEF3] py-3 px-10">
                                <p class="text-[#2E8BC4] font-bold text-[25px] ">DGENABC</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="w-2/6 ml-4">
                <div class="rounded-lg shadow-full font-roboto px-4 pt-3 mt-4  pb-[46px]">
                    {{--  --}}
                    <div class=" border-b-[1px] border-[#CCCCCC] ">
                        <div class="flex justify-between">
                            <p class="text-[20px] font-bold">Thông tin tài khoản</p>
                            <a href="" class="text-[#0771B1] underline text-[14px]">Xem chi tiết</a>
                        </div>
                        <ul class="flex flex-col space-y-4 my-3">
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.563" height="13.328"
                                    viewBox="0 0 15.563 13.328">
                                    <g id="Group_21556" data-name="Group 21556" transform="translate(0 0)">
                                        <path id="Path_61217" data-name="Path 61217"
                                            d="M-3970.64-981.694l-3.925,8.977-3.925-8.977Z"
                                            transform="translate(3982.346 986.045)" />
                                        <path id="Path_61218" data-name="Path 61218"
                                            d="M-3960.322-1081.479h-6.939l3.469-3.259Z"
                                            transform="translate(3971.574 1084.901)" />
                                        <path id="Path_61219" data-name="Path 61219"
                                            d="M-4073.391-981.944c.073,0,.112-.007.15-.007.857,0,1.714,0,2.571,0a.176.176,0,0,1,.191.125q1.522,3.494,3.051,6.987a.252.252,0,0,1,.027.135Z"
                                            transform="translate(4073.391 986.294)" />
                                        <path id="Path_61220" data-name="Path 61220"
                                            d="M-3832.354-981.95l-5.99,7.234-.022-.011c.019-.048.036-.1.057-.144q1.521-3.479,3.041-6.958c.034-.079.063-.133.17-.133.882.005,1.765,0,2.647,0C-3832.43-981.958-3832.41-981.955-3832.354-981.95Z"
                                            transform="translate(3847.917 986.301)" />
                                        <path id="Path_61221" data-name="Path 61221" d="M-3984.2-1088.746h3l-3,2.816Z"
                                            transform="translate(3987.822 1088.746)" />
                                        <path id="Path_61222" data-name="Path 61222" d="M-3853.351-1088.747h3v2.817Z"
                                            transform="translate(3862.293 1088.747)" />
                                        <path id="Path_61223" data-name="Path 61223" d="M-4068.313-1071.93v2.733h-2.594Z"
                                            transform="translate(4071.008 1072.614)" />
                                        <path id="Path_61224" data-name="Path 61224"
                                            d="M-3753.945-1068.992h-2.594v-2.733Z"
                                            transform="translate(3769.416 1072.417)" />
                                    </g>
                                </svg>
                                <p class="text-[17px]">Hạng tài khoản <span class="text-[#00CB44]">Diamond</span> </p>

                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.562" height="12.457"
                                    viewBox="0 0 15.562 12.457">
                                    <g id="Group_21557" data-name="Group 21557" transform="translate(0 0)">
                                        <path id="Path_61225" data-name="Path 61225"
                                            d="M-3233.191-1081.121v9.788a4.023,4.023,0,0,1-.305.682,1.505,1.505,0,0,1-1.318.652h-12.324c-.041,0-.081,0-.121,0a1.552,1.552,0,0,1-1.493-1.542q-.005-4.665,0-9.33a1.529,1.529,0,0,1,.311-.949,1.573,1.573,0,0,1,1.331-.632q6.131,0,12.263,0c.051,0,.1,0,.152,0a1.564,1.564,0,0,1,1.156.584A1.968,1.968,0,0,1-3233.191-1081.121Zm-1.562,7.231v-4.662h-.969v2.708l-.121-.166q-.874-1.224-1.75-2.446c-.032-.044-.087-.1-.132-.1-.3-.009-.6,0-.9,0v4.663h.962v-2.7c.056.072.091.113.122.156q.891,1.221,1.782,2.442c.033.045.086.1.132.1C-3235.337-1073.886-3235.05-1073.89-3234.754-1073.89Zm-11.276-.008v-1.549h.183c.43,0,.861,0,1.292,0a1.134,1.134,0,0,0,1.17-.765,3.625,3.625,0,0,0,.022-1.52.615.615,0,0,0-.061-.171,1.156,1.156,0,0,0-1.123-.66c-.836,0-1.672,0-2.508,0-.044,0-.088.005-.136.009v4.657Zm5.434,0v-4.656h-1.146v4.656Z"
                                            transform="translate(3248.754 1082.456)" />
                                        <path id="Path_61226" data-name="Path 61226"
                                            d="M-3187.371-970.594h-1.534v-.752h1.534Z"
                                            transform="translate(3191.64 976.422)" />
                                    </g>
                                </svg>

                                <p class="text-[17px] text-[#00CB44]">Tài khoản đã xác thực</span> </p>

                            </li>
                            <li class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.556" height="14.842"
                                    viewBox="0 0 15.556 14.842">
                                    <path id="Path_61227" data-name="Path 61227"
                                        d="M-3389.135-591.6v.061a2.04,2.04,0,0,1-.786,1.028c-.165.142-.327.288-.49.433a1.164,1.164,0,0,0-.363,1.2c.083.38.165.76.239,1.142a.784.784,0,0,1-.714,1.048c-.368.063-.741.1-1.114.124a1.238,1.238,0,0,0-1.167.8c-.066.164-.135.328-.212.487a7.85,7.85,0,0,1-.407.8.65.65,0,0,1-.833.277,2.771,2.771,0,0,1-.442-.2c-.324-.178-.639-.371-.964-.547a1.071,1.071,0,0,0-1.061,0c-.21.111-.412.238-.624.346-.291.149-.582.305-.885.425a.538.538,0,0,1-.622-.167,2.644,2.644,0,0,1-.354-.544c-.174-.348-.315-.713-.486-1.063a.946.946,0,0,0-.711-.54c-.223-.04-.45-.061-.675-.093-.339-.049-.683-.082-1.016-.159a.619.619,0,0,1-.5-.553,1.432,1.432,0,0,1,.01-.438c.071-.387.159-.772.24-1.157a1.138,1.138,0,0,0-.338-1.149c-.138-.127-.282-.247-.417-.377a8.656,8.656,0,0,1-.7-.709.667.667,0,0,1,0-.87,2.419,2.419,0,0,1,.322-.363c.252-.235.515-.458.772-.687a1.16,1.16,0,0,0,.367-1.2c-.083-.38-.177-.758-.237-1.142-.092-.592.062-.932.706-1.052a11.148,11.148,0,0,1,1.129-.126,1.226,1.226,0,0,0,1.143-.764c.043-.1.088-.2.136-.3.168-.345.317-.7.514-1.029a.627.627,0,0,1,.782-.27,2.836,2.836,0,0,1,.484.215c.324.176.639.37.965.546a1.072,1.072,0,0,0,1.061,0c.21-.111.412-.238.624-.346.287-.147.572-.3.871-.42a.546.546,0,0,1,.635.172,2.594,2.594,0,0,1,.344.532c.173.349.315.713.485,1.063a.929.929,0,0,0,.664.533c.237.048.479.07.719.106.339.05.683.082,1.016.157a.621.621,0,0,1,.5.548,1.424,1.424,0,0,1-.008.438c-.06.333-.128.665-.214.992a1.3,1.3,0,0,0,.495,1.493l.023.02C-3389.816-592.5-3389.29-592.205-3389.135-591.6Zm-8.425.583-.075-.015a1.344,1.344,0,0,0-.1-.131q-.563-.566-1.129-1.129a.863.863,0,0,0-.769-.278.847.847,0,0,0-.724.613.86.86,0,0,0,.251.915q.92.918,1.838,1.838a.866.866,0,0,0,1.308.023c1.085-1.072,2.16-2.154,3.239-3.232.025-.025.048-.052.071-.079a.876.876,0,0,0-.189-1.3.873.873,0,0,0-1.146.153q-1.234,1.228-2.461,2.462A1.048,1.048,0,0,0-3397.56-591.012Z"
                                        transform="translate(3404.691 598.986)" />
                                </svg>

                                <p class="text-[17px]">Mã pin hỗ trợ kỹ thuật <span
                                        class="text-[17px] font-bold text-[#F5682E]">1234</span></p>
                            </li>
                        </ul>
                    </div>
                    {{--  --}}
                    <div class=" mt-4">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-[17px]">Tài khoản chính</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16 18">
                                    <g id="Group_21553" data-name="Group 21553" transform="translate(-1173 -300)">
                                        <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                            r="8" transform="translate(1173 301)" fill="#c5c5c5" />
                                        <text id="_" data-name="?" transform="translate(1178 314)"
                                            fill="#fff" font-size="13" font-family="Roboto-Bold, Roboto"
                                            font-weight="700">
                                            <tspan x="0" y="0">?</tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <a href="" class="text-[#0771B1] underline text-[14px]">Xem chi tiết</a>
                        </div>
                        <div class="bg-[#0BC3EB] rounded-full text-right px-4 py-2 mt-2">
                            <p class="text-white font-bold text-[17px]">200.000đ</p>
                        </div>
                    </div>
                    <div class=" mt-4">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-[17px]">Tài khoản khuyến mãi</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16 18">
                                    <g id="Group_21553" data-name="Group 21553" transform="translate(-1173 -300)">
                                        <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                            r="8" transform="translate(1173 301)" fill="#c5c5c5" />
                                        <text id="_" data-name="?" transform="translate(1178 314)"
                                            fill="#fff" font-size="13" font-family="Roboto-Bold, Roboto"
                                            font-weight="700">
                                            <tspan x="0" y="0">?</tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                        </div>
                        <div class="bg-[#F5682E] rounded-full text-right px-4 py-2 mt-2">
                            <p class="text-white font-bold text-[17px]">200.000đ</p>
                        </div>
                    </div>
                    <div class=" mt-4">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-[17px]">Điểm thưởng</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18"
                                    viewBox="0 0 16 18">
                                    <g id="Group_21553" data-name="Group 21553" transform="translate(-1173 -300)">
                                        <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                            r="8" transform="translate(1173 301)" fill="#c5c5c5" />
                                        <text id="_" data-name="?" transform="translate(1178 314)"
                                            fill="#fff" font-size="13" font-family="Roboto-Bold, Roboto"
                                            font-weight="700">
                                            <tspan x="0" y="0">?</tspan>
                                        </text>
                                    </g>
                                </svg>
                            </div>
                            <a href="" class="text-[#0771B1] underline text-[14px]">Đổi quà</a>

                        </div>
                        <div class="bg-[#00CB44] rounded-full text-right px-4 py-2 mt-2">
                            <p class="text-white font-bold text-[17px]">2000 điểm</p>
                        </div>
                    </div>

                </div>
                <div class="rounded-lg shadow-full font-roboto px-2 pt-3 mt-5  pb-10 max-h-[358px] overflow-y-scroll py">
                    {{--  --}}
                    <div class=" border-b-[1px] border-[#CCCCCC] py-4">
                        <div class="flex justify-between">
                            <p class="text-[20px] font-bold">Thông báo</p>
                        </div>

                    </div>
                    <ul class="flex flex-col space-y-2 ">
                        <li class="flex items-center space-x-2 py-2 mx-3  border-b-[1px] border-[#CCCCCC]" >
                            <span class="self-start py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <circle id="Ellipse_708" data-name="Ellipse 708" cx="6" cy="6"
                                        r="6" fill="#707070" />
                                </svg>
                            </span>
                            <div>
                                <p class="text-[17px] font-body">Thông báo về việc thay đổi giá dịch vụ</p>
                                <p class="mt-1 text-[14px] text-[#0771B1]">1 giờ trước</p>
                            </div>
                        </li>
                        @for ($i = 0; $i < 6; $i++)
                        <li class="flex items-center space-x-2 py-2 mx-3  border-b-[1px] border-[#CCCCCC]" >
                            <span class="self-start py-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <circle id="Ellipse_707" data-name="Ellipse 707" cx="6" cy="6" r="6" fill="#00cb44"/>
                                  </svg>
                                  
                            </span>
                            <div>
                                <p class="text-[17px] font-body font-bold">Thông báo về việc thay đổi giá dịch vụ</p>
                                <p class="mt-1 text-[14px] text-[#0771B1]">1 giờ trước</p>
                            </div>
                        </li>
                        @endfor
                    </ul>


                </div>

            </div>
        </div>

    </main>
@endsection
