@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="min-w-[1122px]">
            <h1 class="font-roboto text-[25px] font-bold">Tổng hợp giao dịch</h1>
            <div class="grid grid-cols-2 gap-[30px] font-roboto mt-4">
                @for ($i = 0; $i < 4; $i++)
                <a href="" class="hover:scale-105 duration-300">
                    <div class="flex shadow-full rounded-[5px]">
                        <div class="w-1/3 flex items-center">
                            <div class="pl-5">
                                <p class="text-[25px] font-bold">Nạp tiền</p>
                                <p>
                                    Nạp tiền vào tài khoản thanh toán dễ dàng và nhanh chóng
                                </p>
                            </div>
                        </div>
                        <div class="w-2/3">
                            <img src="{{asset('admin_img/tong-hop-giao-dich.png')}}" alt="" height="200">
                        </div>
                        
                    </div>
                    
                </a>
            @endfor
            </div>
        </div>
    </main>
@endsection
