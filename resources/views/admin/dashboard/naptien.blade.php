@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="flex justify-between ">
            <h1 class="font-roboto text-[25px] font-bold">Nạp tiền</h1>
            <a href=""
                class="flex items-center space-x-2 border-t-[5px] border-transparent self-end	text-[#0771B1] font-roboto text-[15px] underline">
                Lịch sử nạp tiền
            </a>
        </div>
        {{-- Hỗ trợ Kỹ thuật --}}

        <div class="mt-4 min-w-[1122px] ">

            <div class="flex space-x-4">
                <div class="min-w-[316px] shadow-full p-5 rounded-[5px]">
                    <h2 class="font-roboto text-[20px] font-bold">Số dư tài khoản chính</h2>
                    <div class=" mt-4">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-[17px]">Tài khoản chính</p>

                            </div>
                        </div>
                        <div class="bg-[#0BC3EB] rounded-full text-center px-4 py-2">
                            <p class="text-white font-bold text-[17px]">200.000đ</p>
                        </div>
                    </div>
                    <div class=" mt-4">
                        <div class="flex justify-between">
                            <div class="flex items-center space-x-2">
                                <p class="text-[17px]">Số dư tài khoản khuyến mãi</p>

                            </div>
                        </div>
                        <div class="bg-[#ff5c04] rounded-full text-center px-4 py-2">
                            <p class="text-white font-bold text-[17px]">200.000đ</p>
                        </div>
                    </div>

                </div>
                <div class="w-full shadow-full p-5 rounded-[5px]">
                    <h2 class="font-roboto text-[20px] font-bold">Nạp tiền</h2>

                    <div class="w-full">
                        <label for="" class="block mb-2">Số tiền cần nạp</label>
                        <input type="text" placeholder="0đ"
                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                    </div>
                    <div class="w-full mt-6">
                        <label for="" class="block mb-2">Hình thức nạp tiền</label>
                        <div class="flex px-2 justify-between w-full">
                            <div class="flex items-center mr-4 space-x-4">
                                <label for="noi-dia" class="label-checkbox block cursor-pointer rounded-full  ">
                                    <input id="noi-dia" type="radio" value="1" name="checkbox" checked
                                        class="checkbox w-4 h-4 hidden sr-only peer">
                                    <div class="checkmark w-5 h-5 bg-white border-[6px] border-[#707070] rounded-full ">
                                    </div>
                                </label>
                                <div
                                    class=" flex space-x-1 px-3 items-center py-1 rounded-[10px] border-[2px] border-[#E1E1E1]">
                                    <img src="{{ asset('admin_img/credit.png') }}" alt="" width="30"
                                        height="30">
                                    <p class="font-roboto text-[15px] font-bold">Thẻ ATM nội địa</p>
                                </div>
                            </div>
                            <div class="flex items-center mr-4 space-x-4">
                                <label for="quoc-te" class="label-checkbox block cursor-pointer rounded-full  ">
                                    <input id="quoc-te" type="radio" value="2" name="checkbox" 
                                        class="checkbox w-4 h-4 hidden sr-only peer">
                                    <div class="checkmark w-5 h-5 bg-white border-[6px] border-[#707070] rounded-full ">
                                    </div>
                                </label>
                                <div
                                    class=" flex space-x-1 px-3 items-center py-1 rounded-[10px] border-[2px] border-[#E1E1E1]">
                                    <img src="{{ asset('admin_img/visa.png') }}" alt="" width="30"
                                        height="30">
                                    <p class="font-roboto text-[15px] font-bold">Thẻ ATM nội địa</p>
                                </div>
                            </div>
                            <div class="flex items-center mr-4 space-x-4">
                                <label for="chuyen-khoan" class="label-checkbox block cursor-pointer rounded-full  ">
                                    <input id="chuyen-khoan" type="radio" value="3" name="checkbox" 
                                        class="checkbox w-4 h-4 hidden sr-only peer">
                                    <div class="checkmark w-5 h-5 bg-white border-[6px] border-[#707070] rounded-full ">
                                    </div>
                                </label>
                                <div
                                    class=" flex space-x-1 px-3 items-center py-2 rounded-[10px] border-[2px] border-[#E1E1E1]">
                                    <img src="{{ asset('admin_img/atm.png') }}" alt="" width="30"
                                        height="30">
                                    <p class="font-roboto text-[15px] font-bold">Nạp tiền</p>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function(){
                    $('.checkbox:checked').next().css('border-color', '#00CB44')
                    $('.checkmark').click(function(){
                    $('.checkbox:checked').next().css('border-color', '#707070')
                        $(this).css('border-color', '#00CB44')
                    })
                })
            </script>
        </div>
        <div class="text-right mt-5 min-w-[1122px] ">
            <button class="bg-[#00CB44] text-white rounded-[5px] py-2 px-7 ml-4  " type="submit">Gửi
                yêu cầu</button>
        </div>
       
    </main>
@endsection
