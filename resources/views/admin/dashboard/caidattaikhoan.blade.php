@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4 mb-5">
        {{-- tiêu đề --}}
        <div class="flex justify-between ">
            <h1 class="font-roboto text-[25px] font-bold">Cài đặt tài khoản</h1>
        </div>

        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <div class="flex">
                <div class="w-1/5 flex flex-col font-roboto">
                    <h2 class=" text-[20px] font-bold ">Thông tin tài khoản</h2>
                    <div class="flex space-x-4 items-center">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="15.563" height="13.328"
                                viewBox="0 0 15.563 13.328">
                                <g id="Group_21556" data-name="Group 21556" transform="translate(0 0)">
                                    <path id="Path_61217" data-name="Path 61217"
                                        d="M-3970.64-981.694l-3.925,8.977-3.925-8.977Z"
                                        transform="translate(3982.346 986.045)" />
                                    <path id="Path_61218" data-name="Path 61218" d="M-3960.322-1081.479h-6.939l3.469-3.259Z"
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
                                    <path id="Path_61224" data-name="Path 61224" d="M-3753.945-1068.992h-2.594v-2.733Z"
                                        transform="translate(3769.416 1072.417)" />
                                </g>
                            </svg>
                        </span>
                        <p class="text-[17px]">Hạng tài khoản</p>
                    </div>
                    <p class="text-[17px] font-bold text-[#00CB44] pl-8">Diamond</p>
                </div>
                <div class="w-1/4 flex flex-col font-roboto bg-[#0BC3EB] text-center text-white rounded-[5px] py-5 ml-4">
                    <div class="flex items-center space-x-2 justify-center pl-4">
                        <span>Tài khoản chính</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                                <g id="Group_25222" data-name="Group 25222" transform="translate(-1173 -300)">
                                    <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                        r="8" transform="translate(1173 301)" fill="#fff" />
                                    <text id="_" data-name="?" transform="translate(1178 314)" fill="#707070"
                                        font-size="13" font-family="Roboto-Bold, Roboto" font-weight="700">
                                        <tspan x="0" y="0">?</tspan>
                                    </text>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <p class="text-[20px] font-bold ">200.000đ</p>
                    <a href="" class="underline  text-[15px]">Nạp tiền</a>
                </div>
                <div class="w-1/4 flex flex-col font-roboto bg-[#F5682E] text-center text-white rounded-[5px] py-5 ml-4">
                    <div class="flex items-center space-x-2 justify-center pl-4">
                        <span>Tài khoản khuyến mãi</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                                <g id="Group_25222" data-name="Group 25222" transform="translate(-1173 -300)">
                                    <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                        r="8" transform="translate(1173 301)" fill="#fff" />
                                    <text id="_" data-name="?" transform="translate(1178 314)" fill="#707070"
                                        font-size="13" font-family="Roboto-Bold, Roboto" font-weight="700">
                                        <tspan x="0" y="0">?</tspan>
                                    </text>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <p class="text-[20px] font-bold ">200.000đ</p>
                </div>
                <div class="w-1/4 flex flex-col font-roboto bg-[#00CB44] text-center text-white rounded-[5px] py-5 ml-4">
                    <div class="flex items-center space-x-2 justify-center pl-4">
                        <span>Điểm thưởng</span>
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" viewBox="0 0 16 18">
                                <g id="Group_25222" data-name="Group 25222" transform="translate(-1173 -300)">
                                    <circle id="Ellipse_718" data-name="Ellipse 718" cx="8" cy="8"
                                        r="8" transform="translate(1173 301)" fill="#fff" />
                                    <text id="_" data-name="?" transform="translate(1178 314)" fill="#707070"
                                        font-size="13" font-family="Roboto-Bold, Roboto" font-weight="700">
                                        <tspan x="0" y="0">?</tspan>
                                    </text>
                                </g>
                            </svg>
                        </span>
                    </div>
                    <p class="text-[20px] font-bold ">200.000đ</p>
                    <a href="" class="underline  text-[15px]">Đổi quà</a>
                </div>
            </div>


        </div>
        <style>
            /*  */
            .items-nav-card {
                border-top: 5px solid transparent;
            }

            .items-nav-card-focus {
                border-top: 5px solid #0771B1;
                font-weight: 400 !important;
            }
        </style>
        <script>
            $(document).ready(function() {
                $('.items-card-btn').click(function() {
                    $('.items-nav-card').removeClass('items-nav-card-focus')
                    $('.items-card-btn').css('font-weight', 'normal')
                    $(this).parent().addClass('items-nav-card-focus')
                    $(this).css('font-weight', 'bold')
                    if($('.items-card-btn').index(this) == 1){
                        $('.technical-management').show()
                    }else{
                        $('.technical-management').hide()

                    }
                })
            })
        </script>
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full  rounded-[5px]">

            <div class="w-full bg-white rounded-lg border shadow-md dark:bg-gray-800 dark:border-gray-700">
                <ul class="flex flex-wrap text-[20px] items-center text-center  border-b-[1px] relative" id="defaultTab"
                    data-tabs-toggle="#defaultTabContent" role="tablist">
                    <li class="items-nav-card items-nav-card-focus">
                        <button id="about-tab" 
                            data-tabs-target="#about" 
                            type="button" 
                            role="tab"
                            aria-controls="about" 
                            aria-selected="true"
                            class="items-card-btn inline-block p-4  focus:outline-none font-bold" autofocus>Thông tin cơ
                            bản</button>
                    </li>
                    <li class="items-nav-card  border-l-[1px]">
                        <button id="services-tab" data-tabs-target="#services" type="button" role="tab"
                            aria-controls="services" aria-selected="false"
                            class="items-card-btn inline-block p-4 focus:outline-none">Quản lý kỹ thuật</button>
                    </li>
                    <li class="absolute right-[16px] ">
                        <a href=""
                            class="flex items-center space-x-2 border-t-[5px] border-transparent self-end	text-[#0771B1] font-roboto text-[15px] underline">
                            <span>Thay đổi thông tin</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="12.087" height="12.105"
                                viewBox="0 0 12.087 12.105">
                                <g id="Group_21696" data-name="Group 21696" transform="translate(-491.604 -192)">
                                    <path id="Path_61239" data-name="Path 61239"
                                        d="M503.69,195.026c-.018.072-.034.144-.053.215a1.639,1.639,0,0,1-.428.737q-2.961,2.968-5.922,5.935a.591.591,0,1,1-.834-.836q2.285-2.291,4.572-4.58a1,1,0,0,1,.1-.081l-1.853-1.858a.51.51,0,0,1-.065.1q-3.048,3.057-6.1,6.11a1.04,1.04,0,0,0-.326.8c.011.444,0,.889,0,1.345.043,0,.081.005.118.005.44,0,.881,0,1.321,0a.942.942,0,0,0,.657-.275.561.561,0,0,1,.612-.125.588.588,0,0,1,.21.97,2.047,2.047,0,0,1-1.156.591c-.03,0-.059.016-.089.024H492.08a.668.668,0,0,1-.476-.744c.015-.594.013-1.19,0-1.785a2.164,2.164,0,0,1,.672-1.642c.83-.823,1.653-1.654,2.478-2.481q2.461-2.465,4.92-4.932a1.71,1.71,0,0,1,.766-.467c.075-.021.151-.037.226-.056h.4a.406.406,0,0,0,.065.022,1.542,1.542,0,0,1,.848.429q.632.626,1.257,1.26a1.527,1.527,0,0,1,.408.757c.012.053.028.1.041.157Zm-3.513-1.308,1.809,1.812c.128-.128.272-.262.405-.406a.43.43,0,0,0,0-.6c-.055-.062-.115-.118-.174-.177-.339-.34-.677-.681-1.018-1.019a.421.421,0,0,0-.595-.052C500.446,193.417,500.309,193.58,500.177,193.718Z"
                                        transform="translate(0 0)" fill="#0771b1" />
                                    <path id="Path_61240" data-name="Path 61240"
                                        d="M669.292,539.55c-.058-.024-.117-.044-.173-.072a.59.59,0,0,1,.238-1.108c.047,0,.094,0,.141,0,1.69,0,3.379.005,5.068,0a.675.675,0,0,1,.742.477v.236a.686.686,0,0,1-.472.473Z"
                                        transform="translate(-171.619 -335.444)" fill="#0771b1" />
                                </g>
                            </svg>
                        </a>
                    </li>
                </ul>
                <div id="defaultTabContent">
                    {{-- Thông tin cơ bản a --}}
                    <div class="!p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="about" role="tabpanel"
                        aria-labelledby="about-tab">
                        <div class="flex">
                            <div class="min-w-[180px] font-roboto">
                                <p class="text-[17px]">Ảnh cá nhân</p>
                                <div class="text-left">
                                    <div class="mt-4  flex-col items-center justify-center inline-flex">
                                        <img src="{{ asset('admin_img/anh-ca-nhan.png') }}" alt="">

                                        <button
                                            class=" mt-4 text-white bg-[#0771B1] flex space-x-2 items-center justify-center px-4 py-1 rounded-[5px]">
                                            <p>Thay đổi</p>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.087" height="12.106"
                                                    viewBox="0 0 12.087 12.106">
                                                    <path id="Path_61239" data-name="Path 61239"
                                                        d="M503.69,195.026c-.018.072-.034.144-.053.215a1.639,1.639,0,0,1-.428.737q-2.961,2.968-5.922,5.935a.591.591,0,1,1-.834-.836q2.285-2.291,4.572-4.58a1,1,0,0,1,.1-.081l-1.853-1.858a.51.51,0,0,1-.065.1q-3.048,3.057-6.1,6.11a1.04,1.04,0,0,0-.326.8c.011.444,0,.889,0,1.345.043,0,.081.005.118.005.44,0,.881,0,1.321,0a.942.942,0,0,0,.657-.275.561.561,0,0,1,.612-.125.588.588,0,0,1,.21.97,2.047,2.047,0,0,1-1.156.591c-.03,0-.059.016-.089.024H492.08a.668.668,0,0,1-.476-.744c.015-.594.013-1.19,0-1.785a2.164,2.164,0,0,1,.672-1.642c.83-.823,1.653-1.654,2.478-2.481q2.461-2.465,4.92-4.932a1.71,1.71,0,0,1,.766-.467c.075-.021.151-.037.226-.056h.4a.406.406,0,0,0,.065.022,1.542,1.542,0,0,1,.848.429q.632.626,1.257,1.26a1.527,1.527,0,0,1,.408.757c.012.053.028.1.041.157Zm-3.513-1.308,1.809,1.812c.128-.128.272-.262.405-.406a.43.43,0,0,0,0-.6c-.055-.062-.115-.118-.174-.177-.339-.34-.677-.681-1.018-1.019a.421.421,0,0,0-.595-.052C500.446,193.417,500.309,193.58,500.177,193.718Z"
                                                        transform="translate(-491.604 -192)" fill="#fff" />
                                                </svg>

                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- form --}}
                            <div class="w-full">
                                <form action="">
                                    <div class="form-group mb-2 text-[17px]">
                                        <label for="" class="block mb-2">Tên tổ chức</label>
                                        <input type="text" placeholder="Công ty TNHH Xuất Nhập Khẩu Thủy Phong"
                                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Ngày thành lập</label>
                                                <input type="text" placeholder="21/12/2019"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Mã số thuế</label>
                                                <input type="text" placeholder="0123456789"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <label for="" class="block mb-2">Địa chỉ</label>
                                        <input type="text" placeholder="89 Võ Công Tồn, P15, Tân Phú, TP Hồ Chí Minh"
                                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Đại diện pháp luật</label>
                                                <input type="text" placeholder="Nguyễn Hoài Thiên"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Chức vụ</label>
                                                <input type="text" placeholder="Giám đốc"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Di động</label>
                                                <input type="text" placeholder="0909 999 999"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Điện thoại bàn</label>
                                                <input type="text" placeholder="028 2525 25 25"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Email</label>
                                                <input type="text" placeholder="Xnkthuyphong@gmail.com"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Fax</label>
                                                <input type="text" placeholder=""
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- Quản lý kỹ thuật --}}
                    <div class="hidden !p-4 bg-white rounded-lg md:p-8 dark:bg-gray-800" id="services" role="tabpanel"
                        aria-labelledby="services-tab">
                        <div class="flex">
                            <div class="min-w-[180px] font-roboto">
                                <p class="text-[17px]">Ảnh cá nhân</p>
                                <div class="text-left">
                                    <div class="mt-4  flex-col items-center justify-center inline-flex">
                                        <img src="{{ asset('admin_img/anh-ca-nhan.png') }}" alt="">

                                        <button
                                            class=" mt-4 text-white bg-[#0771B1] flex space-x-2 items-center justify-center px-4 py-1 rounded-[5px]">
                                            <p>Thay đổi</p>
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12.087" height="12.106"
                                                    viewBox="0 0 12.087 12.106">
                                                    <path id="Path_61239" data-name="Path 61239"
                                                        d="M503.69,195.026c-.018.072-.034.144-.053.215a1.639,1.639,0,0,1-.428.737q-2.961,2.968-5.922,5.935a.591.591,0,1,1-.834-.836q2.285-2.291,4.572-4.58a1,1,0,0,1,.1-.081l-1.853-1.858a.51.51,0,0,1-.065.1q-3.048,3.057-6.1,6.11a1.04,1.04,0,0,0-.326.8c.011.444,0,.889,0,1.345.043,0,.081.005.118.005.44,0,.881,0,1.321,0a.942.942,0,0,0,.657-.275.561.561,0,0,1,.612-.125.588.588,0,0,1,.21.97,2.047,2.047,0,0,1-1.156.591c-.03,0-.059.016-.089.024H492.08a.668.668,0,0,1-.476-.744c.015-.594.013-1.19,0-1.785a2.164,2.164,0,0,1,.672-1.642c.83-.823,1.653-1.654,2.478-2.481q2.461-2.465,4.92-4.932a1.71,1.71,0,0,1,.766-.467c.075-.021.151-.037.226-.056h.4a.406.406,0,0,0,.065.022,1.542,1.542,0,0,1,.848.429q.632.626,1.257,1.26a1.527,1.527,0,0,1,.408.757c.012.053.028.1.041.157Zm-3.513-1.308,1.809,1.812c.128-.128.272-.262.405-.406a.43.43,0,0,0,0-.6c-.055-.062-.115-.118-.174-.177-.339-.34-.677-.681-1.018-1.019a.421.421,0,0,0-.595-.052C500.446,193.417,500.309,193.58,500.177,193.718Z"
                                                        transform="translate(-491.604 -192)" fill="#fff" />
                                                </svg>

                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            {{-- form 2 --}}
                            <div class="w-full">
                                <form action="">
                                    <div class="form-group mb-2  text-[17px]">
                                        <label for="" class="block mb-2">Đại diện pháp luật</label>
                                        <input type="text" placeholder="Nguyễn Hoài Thiên"
                                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Chức vụ</label>
                                                <input type="text" placeholder="Giám đốc"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">CMND/CCCD</label>
                                                <input type="text" placeholder="0123456789"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Di động</label>
                                                <input type="text" placeholder="0909 999 999"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Điện thoại bàn</label>
                                                <input type="text" placeholder="028 2525 25 25"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <div class="flex space-x-4">
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Email</label>
                                                <input type="text" placeholder="Xnkthuyphong@gmail.com"
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                            <div class="w-1/2">
                                                <label for="" class="block mb-2">Fax</label>
                                                <input type="text" placeholder=""
                                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mb-2 mt-4 text-[17px]">
                                        <label for="" class="block mb-2">Địa chỉ</label>
                                        <input type="text" placeholder="89 Võ Công Tồn, P15, Tân Phú, TP Hồ Chí Minh"
                                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    </div>
                                </form>
                                {{-- endform --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="technical-management hidden">
            {{-- Thông tin đăng nhập< --}}
            <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full rounded-[5px] mb-10">
                <div class=" px-5 pt-5">
                    <h2 class="font-roboto text-[20px] font-bold">Thông tin đăng nhập</h2>
                </div>

                {{-- form --}}
                <form action="" class="px-5">
                    <div class="form-group mb-2 mt-4 text-[17px]">
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <label for="" class="block mb-2">ID đăng nhập</label>
                                <input type="text" placeholder="Công ty TNHH Xuất Nhập Khẩu Thủy Phong"
                                    class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                            </div>
                            <div class="w-1/2">
                                <div class="flex justify-between pr-2">
                                    <label for="" class=" mb-2">Bí danh</label>
                                    <a href=""
                                        class="flex items-center space-x-2 border-t-[5px] border-transparent 	text-[#0771B1] font-roboto text-[15px] underline">
                                        Tạo mới
                                    </a>
                                </div>
                                <div class="relative flex items-center">
                                    <input type="text" placeholder=""
                                        class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    <label for="default-toggle"
                                        class="inline-flex  items-center cursor-pointer absolute right-[14px]">
                                        <input type="checkbox" value="" id="default-toggle" class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#00CB44]">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-2 mt-4 text-[17px]">
                        <div class="flex space-x-4">
                            <div class="w-1/2">
                                <div class="flex ">
                                    <label for="" class=" mb-2">Số điện thoại</label>

                                </div>
                                <div class="relative flex items-center">
                                    <input type="text" placeholder=""
                                        class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    <label for="default-toggle-phone"
                                        class="inline-flex  items-center cursor-pointer absolute right-[14px]">
                                        <input type="checkbox" value="" id="default-toggle-phone"
                                            class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#00CB44]">
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <div class="flex">
                                    <label for="" class=" mb-2">Mã số thuế</label>

                                </div>
                                <div class="relative flex items-center">
                                    <input type="text" placeholder=""
                                        class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                                    <label for="default-toggle-fax"
                                        class="inline-flex  items-center cursor-pointer absolute right-[14px]">
                                        <input type="checkbox" value="" id="default-toggle-fax"
                                            class="sr-only peer">
                                        <div
                                            class="w-11 h-6 bg-gray-200 peer-focus:outline-none  rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-[#00CB44]">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p> ***Bạn có thể chọn các hình thức đăng nhập khác thay cho ID đăng nhập, bằng cách <span
                            class="font-bold">Bật/Tắt </span> hình thức đăng nhập mà bạn muốn.</p>
                    <div class="form-group mb-2  text-[17px] border-t-[1px] mt-4">
                        <div class="flex justify-between mt-4 pr-2 items-center">
                            <label for="" class=" mb-2">Mật khẩu</label>
                            <a href=""
                                class="flex items-center space-x-2  border-transparent 	text-[#0771B1] font-roboto text-[15px] underline">
                                Thay đổi mật khẩu
                            </a>
                        </div>
                        <input type="" placeholder=""
                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px] ">
                    </div>
                </form>
            </div>


            {{-- Quản lý thẻ thanh toán --}}
            <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full rounded-[5px] mb-10">
                <div class=" px-5 pt-5 flex justify-between items-center">
                    <h2 class="font-roboto text-[20px] font-bold">Quản lý thẻ thanh toán</h2>
                    <button class="font-body text-[17px] px-4 py-2 bg-[#00CB44] text-white rounded-[5px]">
                        Thêm thẻ liên kết
                    </button>



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
                <div class="my-4 min-w-[1122px] overflow-x-scroll  rounded-t-[10px] shadow-full mx-5">
                    <table class="w-full text-center ">
                        <thead>
                            <th class="border-l-transparent">STT</th>
                            <th>Loại thẻ</th>
                            <th>Chủ thẻ</th>
                            <th>Thẻ liên kết</th>
                            <th>Thời gian hết hạn</th>
                            <th>Thời gian liên kết</th>
                            <th>Thời gian huỷ liên kết</th>
                            <th>Tình trạng</th>
                            <th class="border-r-transparent">Thao tác</th>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    <div class="text-center py-6 rounded-b-[10px]">
                        Không tìm thấy dữ liệu
                    </div>
                </div>

            </div>


    </main>
@endsection
