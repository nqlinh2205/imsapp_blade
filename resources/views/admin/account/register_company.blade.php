@extends('admin.account.layout_account')
@section('content_right')
    <div class="mt-4">
        <p class="text-[35px] font-bold">Đăng ký tài khoản</p>
        <p class="mt-2">Bạn đã có tài khoản, <a href="" class="underline">Đăng nhập</a> ngay!</p>
        <div class="type-customer flex space-x-4 mt-5">
            <button class=" py-2 flex bg-white  items-center px-3 rounded-md space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21.002" viewBox="0 0 21 21.002">
                    <path id="Path_61159" data-name="Path 61159" d="M648.03,399.8H646.8a1,1,0,0,0-.158-.034,9.746,9.746,0,0,1-4.137-1.194,10.32,10.32,0,0,1-5.571-8.834,9.464,9.464,0,0,1,.974-4.869,10.294,10.294,0,0,1,9.067-6.05,9.673,9.673,0,0,1,5.365,1.215,10.343,10.343,0,0,1,5.408,7.439c.077.4.111.808.166,1.213v1.231a1.35,1.35,0,0,0-.035.177,9.878,9.878,0,0,1-1.208,4.154,10.351,10.351,0,0,1-7.447,5.39C648.829,399.71,648.428,399.746,648.03,399.8Zm-.623-2.747a7.743,7.743,0,0,0,4.929-1.774,1.544,1.544,0,0,0,.609-1.321,3.5,3.5,0,0,0-3.568-3.381q-1.957-.01-3.915,0a3.5,3.5,0,0,0-3.568,3.144,1.573,1.573,0,0,0,.539,1.511A7.722,7.722,0,0,0,647.407,397.053Zm-3.465-11.635a3.474,3.474,0,1,0,3.463-3.473A3.486,3.486,0,0,0,643.942,385.418Z" transform="translate(-636.913 -378.797)"/>
                  </svg>
                  
                <span class="">Cá nhân</span>
            </button>
            <button class=" py-2 flex bg-[#034871] items-center px-3 rounded-md space-x-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21.003" viewBox="0 0 21 21.003">
                    <g id="Group_21681" data-name="Group 21681" transform="translate(-841 -249.87)">
                      <path id="Path_61233" data-name="Path 61233" d="M841,270.164V251.158a.992.992,0,0,0,.044-.11,1.556,1.556,0,0,1,1.8-1.156c1.509.234,3.019.46,4.528.689,1.672.255,3.346.5,5.017.768a1.521,1.521,0,0,1,1.389,1.657q0,8.81,0,17.621v.225h-3.739v-.261c0-1.419,0-2.837,0-4.255a1.536,1.536,0,0,0-1.627-1.634q-1.022,0-2.045,0a1.935,1.935,0,0,0-.39.03,1.519,1.519,0,0,0-1.224,1.548c-.005,1.446,0,2.892,0,4.338v.249c-.907,0-1.781-.016-2.654.006A1,1,0,0,1,841,270.164Zm4.2-16.7c-.227,0-.454-.006-.681,0a.654.654,0,0,0-.652.617.64.64,0,0,0,.578.686,13.009,13.009,0,0,0,1.484,0,.624.624,0,0,0,.575-.7.645.645,0,0,0-.643-.6C845.638,253.457,845.417,253.462,845.2,253.462Zm-.014,2.644c-.22,0-.44-.005-.66,0a.656.656,0,0,0-.66.631.636.636,0,0,0,.572.67,12.878,12.878,0,0,0,1.5,0,.62.62,0,0,0,.562-.693.643.643,0,0,0-.637-.607C845.638,256.1,845.411,256.107,845.184,256.106Zm0,2.644c-.22,0-.44-.005-.66,0a.656.656,0,0,0-.66.631.636.636,0,0,0,.572.67,12.864,12.864,0,0,0,1.5,0,.62.62,0,0,0,.562-.693.643.643,0,0,0-.637-.607C845.638,258.745,845.411,258.751,845.184,258.751Zm.018,2.644c-.227,0-.454-.005-.681,0a.654.654,0,0,0-.656.613.637.637,0,0,0,.574.689,12.712,12.712,0,0,0,1.5,0A.62.62,0,0,0,846.5,262a.644.644,0,0,0-.639-.6C845.642,261.389,845.422,261.4,845.2,261.4Zm4.408-7.933c-.227,0-.454-.005-.681,0a.653.653,0,0,0-.656.613.631.631,0,0,0,.572.689,12.68,12.68,0,0,0,1.5,0,.629.629,0,0,0,.564-.694.657.657,0,0,0-.643-.6C850.05,253.456,849.829,253.462,849.609,253.462Zm0,2.644c-.227,0-.454-.005-.681,0a.653.653,0,0,0-.656.613.631.631,0,0,0,.572.689,12.686,12.686,0,0,0,1.5,0,.629.629,0,0,0,.564-.694.657.657,0,0,0-.643-.6C850.05,256.1,849.829,256.107,849.609,256.106Zm-.021,3.965h0c.22,0,.441.008.66,0a.659.659,0,1,0-.022-1.318q-.63-.007-1.259,0a.656.656,0,0,0-.7.657.67.67,0,0,0,.7.663C849.175,260.076,849.381,260.072,849.588,260.072Zm0,1.324c-.227,0-.454-.006-.681,0a.651.651,0,0,0-.639.608.623.623,0,0,0,.547.687,12.315,12.315,0,0,0,1.545,0,.623.623,0,0,0,.548-.686.656.656,0,0,0-.639-.609C850.047,261.389,849.82,261.4,849.593,261.4Z" fill="#fff"/>
                      <path id="Path_61234" data-name="Path 61234" d="M1088.827,409.355V396.447l1.078.224q2.552.535,5.1,1.071a1.53,1.53,0,0,1,1.293,1.6q0,4.192,0,8.384a1.544,1.544,0,0,1-1.634,1.63q-2.818,0-5.637,0Zm3.519-9.255c-.22,0-.441,0-.661,0a.66.66,0,1,0-.008,1.319q.661.01,1.321,0a.66.66,0,1,0-.012-1.319C1092.773,400.1,1092.56,400.1,1092.346,400.1Zm-.009,2.644c-.22,0-.44,0-.661,0a.659.659,0,0,0-.012,1.318q.671.013,1.342,0a.659.659,0,0,0-.009-1.319C1092.778,402.74,1092.558,402.744,1092.338,402.744Zm-.01,3.966c.213,0,.427,0,.64,0a.661.661,0,1,0,.009-1.32q-.64-.006-1.28,0a.66.66,0,1,0-.009,1.32C1091.9,406.714,1092.114,406.71,1092.328,406.711Z" transform="translate(-234.304 -138.489)" fill="#fff"/>
                    </g>
                  </svg>
                  
                <span class="text-white"> Tổ chức</span>
            </button>
            
        </div>
        <div>
            <form action="" class="mt-4">
                <div class="form-group ">
                    <div class="mb-2 mt-2 text-[17px]">
                        <label for="" class="block mb-2">Tên tổ chức</label>
                        <input type="text" name="full_name" placeholder="Tên tổ chức theo giấy phép kinh doanh"
                            class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                        @error('full_name')
                            <div class="error-message text-red-600 text-[12px]">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group ">
                    <div class="mb-2 mt-2 text-[17px]">
                        <label for="" class="block mb-2">Mã số thuế</label>
                        <input type="text" name="full_name" placeholder="Mã số thuế"
                            class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                        @error('full_name')
                            <div class="error-message text-red-600 text-[12px]">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group ">
                    <div class="mb-2 mt-2 text-[17px]">
                        <label for="" class="block mb-2">Email</label>
                        <input type="text" name="email" placeholder="Email"
                            class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                        @error('email')
                            <div class="error-message text-red-600 text-[12px]">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div class="mb-2 mt-2">
                        <label for="" class="block mb-2">Số điện thoại </label>
                        <input type="text" name="phone" placeholder="Số điện thoại"
                            class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                        @error('phone')
                            <div class="error-message text-red-600 text-[12px]">{{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex space-x-4">
                    <div class="form-group w-1/2" >
                        <div class="mb-2 mt-2">
                            <label for="" class="block mb-2">Mật khẩu</label>
                            <input type="password" name="password" placeholder="Mật khẩu"
                                class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                            @error('phone')
                                <div class="error-message text-red-600 text-[12px]">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group w-1/2">
                        <div class="mb-2 mt-2">
                            <label for="" class="block mb-2">Nhập lại mật khẩu</label>
                            <input type="password" name="re_password" placeholder="Nhập lại mật khẩu"
                                class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                            @error('phone')
                                <div class="error-message text-red-600 text-[12px]">{{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="cap-cha mt-4">
                    <img src="{{ asset('admin_img/capcha.png') }}" alt="" height="50" width="209">

                </div>
                <div class="mt-6">
                    <div class="text-[15px] font-roboto text-[#767878] text-center"> 
                        <p> Khi click nút đăng ký, nghĩa là bạn đã đồng ý với</p>
                       <p> <a href="" class="underline">Chính sách bảo mật</a> và  <a href=""  class="underline">Thỏa thuận sử dụng</a> của chúng tôi.</p>
                </div>
                
                <div class="">
                    <button class="w-full bg-[#0771B1] text-white rounded-md py-2 mt-4">Đăng ký</button>
                </div>
            </form>
            <div class="text-center mt-4 mb-10">
                <a href="" class="underline text-[15px]">Đăng nhập</a>
            </div>
           
        </div>
    </div>
@endsection
