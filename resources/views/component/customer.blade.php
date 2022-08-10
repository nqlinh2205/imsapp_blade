

<div class="customer bg-[#ECF5FB] pt-[43px] pb-[46px] mb-[46px] text-center">
    <div class="container px-4 sm:px-0">
        <p class="title-customer text-[40px] font-bold font-roboto pb-[21px]">2000+ khách hàng đã đồng hành cùng
            chúng tôi</p>
        <p class="text-customer text-[20px] font-light font-roboto">Chúng tôi rất tự hào vì là đối tác chiến
            lược của các nhà cung cấp hàng đầu </p>
        <div
            class="list-logo-customer grid lg:grid-cols-5 sm:grid-cols-2 grid-cols-1 gap-[45px] pb-[35px] pt-[50px]">
            @foreach ($ims['list_customer'] as $key =>  $item)
               
            <div class="flex items-center justify-center">
                @if ($key == 2 || $key == 7)
                    <img src="{{route('uploads',$item['content'])}}" alt="" class="scale-[90%]"/>
                @else
                    <img src="{{route('uploads',$item['content'])}}" alt="" />
                @endif
            </div>
            @endforeach
           

        </div>
        <a href="" class="font-medium text-[15px] !font-sarabun text-[#0771B1] underline">
            Xem thêm khách hàng khác
        </a>
    </div>
</div>