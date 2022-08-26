{{-- @extends('layout.main') --}}

@php
    // dd($ims);
@endphp

@section('content')

<div>
    <div class="w-full overflow-hidden relative h-[554px]">
        <img src="{{ asset('storage/uploads/img/banner.png') }}" alt="" height="445" width="100%">
        <div class="bg-black opacity-50 absolute inset-0"></div>
        <div class="text-center text-white absolute inset-0 flex place-content-center">
            <div class=" font-roboto w-1/2 m-auto">
                <p class="text-4xl font-bold">
                    Hãy để đội ngũ của IMS hỗ trợ bạn dù ở bất kỳ nơi đâu
                    
                </p>
                <p class="text-2xl">Hãy dùng cách 2000+ doanh nghiệp và chủ shop đã chọn</p>
            </div>
          
        </div>

    </div>
    <div class="relative">
        <div class="flex md:flex-row flex-col">
            <div class="md:w-[44.14%] w-full relative">
                <div class="py-10  rounded-tr-xl shadow-2xl relative -top-[50px] inset-x-0 bg-white">
                    <div class="border-b-[1px] border-[#e0e0e0]">
                        <div class="md:pl-[17.94%] pr-[5%] pl-[4%]">
                            <div class="flex flex-col space-y-4 mb-5">
                                <p class="text-[#0771b1]  text-xl font-medium ">
                                    {{-- Thông tin công ty --}}
                                    {{$contact['lang']['title_info_contact']}}
                                </p>
                                <div class="w-[58px] h-[5px] bg-[#0771b1]"></div>
                                <p class="text-3xl inline font-bold">
                                    {{-- Công ty TNHH Giải Pháp IMS --}}
                                    {{$contact['lang']['name_cty']}}
                                
                                </p>
                                <div class="flex space-y-5 flex-col font-arial">
                                    <div class="flex items-center">
                                        <div>
                                            <svg id="Group_21408" data-name="Group 21408" xmlns="http://www.w3.org/2000/svg" width="38.806" height="38.806" viewBox="0 0 38.806 38.806">
                                                <path id="Path_32525" data-name="Path 32525" d="M498.892,7065.121v-5.682h4.546v5.682a1.142,1.142,0,0,0,1.136,1.137h3.41a1.142,1.142,0,0,0,1.136-1.137v-7.955h1.931a.564.564,0,0,0,.375-.989l-9.507-8.557a1.142,1.142,0,0,0-1.523,0l-9.5,8.559a.566.566,0,0,0,.375.989H493.2v7.955a1.141,1.141,0,0,0,1.136,1.136h3.411a1.14,1.14,0,0,0,1.144-1.138Z" transform="translate(-481.758 -7037.962)" />
                                                <path id="Ellipse_688" data-name="Ellipse 688" d="M19.4,1.338A18.065,18.065,0,0,0,6.629,32.177,18.065,18.065,0,1,0,32.177,6.629,17.947,17.947,0,0,0,19.4,1.338M19.4,0A19.4,19.4,0,1,1,0,19.4,19.4,19.4,0,0,1,19.4,0Z" transform="translate(0 0)" />
                                            </svg>
                                        </div>
                                        <span class="text-[17px] pl-[15px] ">
                                            {{-- Building 59 Chế Lan Viên, P. Tây Thạnh, Q. Tân Phú --}}
                                            {{$contact['lang']['address_cty']}}
                                            
                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <div>
                                            <svg id="Group_21409" data-name="Group 21409" xmlns="http://www.w3.org/2000/svg" width="38.806" height="38.806" viewBox="0 0 38.806 38.806">
                                                <g id="Group_4620" data-name="Group 4620" transform="translate(9.256 10.705)">
                                                    <g id="phone_black_24dp" data-name="phone black 24dp">
                                                        <path id="Path_17859" data-name="Path 17859" d="M508.27,7102.837l-2.64-.3a2.071,2.071,0,0,0-1.7.593l-1.912,1.914a15.63,15.63,0,0,1-6.845-6.851l1.919-1.923a2.067,2.067,0,0,0,.591-1.7l-.305-2.618a2.08,2.08,0,0,0-2.063-1.841h-1.8a2.063,2.063,0,0,0-2.081,2.043c0,.037,0,.072,0,.109a17.659,17.659,0,0,0,16.517,16.515,2.063,2.063,0,0,0,2.15-1.97c0-.036,0-.074,0-.109V7104.9A2.062,2.062,0,0,0,508.27,7102.837Z" transform="translate(-491.429 -7090.104)" />
                                                    </g>
                                                </g>
                                                <path id="Ellipse_689" data-name="Ellipse 689" d="M19.4,1.338A18.065,18.065,0,0,0,6.629,32.177,18.065,18.065,0,1,0,32.177,6.629,17.947,17.947,0,0,0,19.4,1.338M19.4,0A19.4,19.4,0,1,1,0,19.4,19.4,19.4,0,0,1,19.4,0Z" transform="translate(0)" />
                                            </svg>
                                        </div>
                                        <span class="text-[17px] pl-[15px] ">
                                            {{-- 0938 919 605 --}}
                                            {{$contact['lang']['phone_cty']}}

                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <div>
                                            <svg id="Group_21410" data-name="Group 21410" xmlns="http://www.w3.org/2000/svg" width="38.806" height="38.806" viewBox="0 0 38.806 38.806">
                                                <g id="Group_4618" data-name="Group 4618" transform="translate(8.029 10.705)">
                                                    <g id="mail_black_24dp" data-name="mail black 24dp">
                                                        <path id="Path_32527" data-name="Path 32527" d="M509.8,7133.092H492.654a2.15,2.15,0,0,0-2.142,2.143v12.855a2.149,2.149,0,0,0,2.142,2.143H509.8a2.149,2.149,0,0,0,2.144-2.143v-12.855A2.151,2.151,0,0,0,509.8,7133.092Zm-.428,4.554-7.006,4.383a2.123,2.123,0,0,1-2.272,0l-7.005-4.383a.91.91,0,0,1,.963-1.543h0l7.178,4.488,7.178-4.488a.91.91,0,0,1,.964,1.543h0Z" transform="translate(-490.512 -7133.092)" />
                                                    </g>
                                                </g>
                                                <path id="Ellipse_690" data-name="Ellipse 690" d="M19.4,1.338A18.065,18.065,0,0,0,6.629,32.177,18.065,18.065,0,1,0,32.177,6.629,17.947,17.947,0,0,0,19.4,1.338M19.4,0A19.4,19.4,0,1,1,0,19.4,19.4,19.4,0,0,1,19.4,0Z" transform="translate(0)" />
                                            </svg>
                                        </div>
                                        <span class="text-[17px] pl-[15px] ">
                                            {{-- info@imsvietnamese.com - imsvietnames@gmail.com --}}
                                            {{$contact['lang']['email_cty']}}
                                            
                                        </span>
                                    </div>
                                    <div class="flex items-center">
                                        <div>
                                            <svg id="Group_21413" data-name="Group 21413" xmlns="http://www.w3.org/2000/svg" width="38.806" height="38.806" viewBox="0 0 38.806 38.806">
                                                <path id="Ellipse_690" data-name="Ellipse 690" d="M19.4,1.338A18.065,18.065,0,0,0,6.629,32.177,18.065,18.065,0,1,0,32.177,6.629,17.947,17.947,0,0,0,19.4,1.338M19.4,0A19.4,19.4,0,1,1,0,19.4,19.4,19.4,0,0,1,19.4,0Z" transform="translate(0)" />
                                                <g id="Group_21414" data-name="Group 21414" transform="translate(8.029 9.367)">
                                                    <path id="Path_49099" data-name="Path 49099" d="M722.935-528.6v1.3l-.171,1.34c-.5-.166-.973-.335-1.453-.476-.224-.065-.319-.159-.232-.392a.817.817,0,0,0,.013-.222c-.439,0-.863.011-1.286,0a2.232,2.232,0,0,1-.61-.1c-1.728-.568-3.453-1.146-5.127-1.7h1.851c-.1-.906-.207-1.789-.308-2.659l-2.483.237v2.437h.456a2.585,2.585,0,0,0-2.238,2.063l-.027-.26h-2.8l.308,2.724c.118-.015.185-.026.253-.033.575-.061,1.149-.136,1.725-.179.521-.039.522-.023.522-.547v-.812a2.192,2.192,0,0,1,.154.4c.46,1.383.91,2.769,1.388,4.145a3.658,3.658,0,0,1,.239,1.493c-.013.168,0,.338,0,.547l.35-.253.72,2.173c-.052.012-.072.019-.092.022l-1.24.165h-1.3c-.067-.013-.134-.029-.2-.038-.379-.052-.763-.082-1.138-.156a10.487,10.487,0,0,1-6.533-4.081,10.442,10.442,0,0,1-2.069-7.911,10.4,10.4,0,0,1,2.982-6.072,10.476,10.476,0,0,1,5.785-3.047c.39-.068.784-.111,1.176-.165h1.339c.358.046.718.08,1.074.141a10.506,10.506,0,0,1,5.275,2.5,10.569,10.569,0,0,1,3.531,6.249C722.84-529.392,722.881-529,722.935-528.6Zm-16.2,1.563h-3.39a8.865,8.865,0,0,0,1.36,3.911l2.369-.843Zm-2.03-5.7a8.868,8.868,0,0,0-1.358,3.877h3.387l.341-3.031Zm13.011,3.876H721.1a8.935,8.935,0,0,0-1.361-3.874l-2.37.846Zm-6.391-2.421-2.494-.241c-.1.884-.2,1.766-.3,2.659h2.8Zm0-1.794v-3.492a6.705,6.705,0,0,0-2.014,3.3Zm1.811-3.487v3.487l2.014-.19A6.744,6.744,0,0,0,713.129-536.564Zm-1.806,13.775-2.024.192a6.777,6.777,0,0,0,2.024,3.3Zm7.27-11.4a8.866,8.866,0,0,0-2.647-1.864c.3.756.609,1.523.922,2.287a.173.173,0,0,0,.149.078C717.527-533.841,718.034-534.007,718.594-534.186Zm-11.1.539,1.025-2.413a8.789,8.789,0,0,0-2.659,1.87Zm-1.639,11.972a8.925,8.925,0,0,0,2.664,1.869l-1.025-2.412Z" transform="translate(-701.507 538.667)" />
                                                    <path id="Path_49100" data-name="Path 49100" d="M912.662-320.711a.924.924,0,0,1-.532-.624q-1.362-4.129-2.739-8.254a.666.666,0,0,1,.512-.95.836.836,0,0,1,.366.046q4.179,1.388,8.356,2.782a.846.846,0,0,1,.523.5v.335a1,1,0,0,1-.625.535q-1.72.647-3.429,1.322a.483.483,0,0,0-.245.245q-.669,1.7-1.312,3.416a1.007,1.007,0,0,1-.541.646Z" transform="translate(-897.72 342.18)" />
                                                </g>
                                            </svg>
                                        </div>
                                        <span class="text-[17px] pl-[15px] ">
                                            {{-- thietkewebsite.info.vn --}}
                                            {{$contact['lang']['website_cty']}}

                                        
                                        </span>
                                    </div>

                                    <div class="flex justify-between m-auto py-2 w-1/2">
                                        <a href="{{$ims['config_social'][2]->link}}"  class="w-[38px] pr-2">
                                            <img src="{{ asset('storage/uploads/img/facebook-icon.png') }}" alt="" />
                                        </a>
                                        <a href="{{$ims['config_social'][1]->link}}" class="w-[38px] pr-2">
                                                <img src="{{ asset('storage/uploads/img/zalo-icon.png') }}" alt=""  />
                                        </a>
                                        <a href="{{$ims['config_social'][0]->link}}" class="w-[38px] pr-2">
                                            <img src="{{ asset('storage/uploads/img/telegram-icon.png') }}" alt="" />
                                        </a>
                                        <a href={{$ims['config_social'][3]->link}} class="w-[38px] pr-2">
                                            <img src="{{ asset('storage/uploads/img/whatapps-icon.png') }}"  alt=""  />
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="md:pl-[17.94%] pl-[4%] pr-[8%] flex flex-col space-y-5">
                        <div class="flex flex-col space-y-5 mt-10 pr-[42px] text-xl border-b pb-4">
                            <p class="text-[#0771b1]  text-xl font-medium">
                                {{-- Thông tin chuyển khoản --}}
                                {{$contact['lang']['title_info_transfer']}}

                            </p>
                            <div class="w-[58px] h-[5px] bg-[#0771b1]"></div>
                            <p class="text-[17px]">
                                Nếu Quý khách giao dịch với IMS qua hình thức chuyển khoản xin vui lòng chuyển đến tài khoản:
                                {{$contact['lang']['text_transfer']}}
                                
                            </p>
                            <img src="{{ asset('storage/uploads/img/sacombank.png') }}" alt="" class="h-[27px] w-[162px]" />
                            <div class="flex  space-x-[14px]">
                                <div class="flex flex-col  space-y-[5px] text-[17px] ">
                                        @foreach ($contact['sacombank'] as $item)
                                        <div class="flex space-x-[14px]">
                                                <img src="{{ asset('storage/uploads/img/accept.png') }}" alt=""
                                                class="min-w-[23px] h-[23px]" />
                                           
                                                {{-- Chi nhánh: Hồ Chí Minh --}}
                                               {!! html_entity_decode($item) !!}
                                        </div>
                                        @endforeach
                                            
                                        
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-5 mt-2 pr-[42px] border-b pb-4 ">
                            <div class=" ">
                                <img src="{{ asset('storage/uploads/img/dong-a.png') }}" alt=""
                                    class="h-[55px] w-[118px]  z-0 " />
                            </div>
                            <div class="flex  space-x-[14px]">
                                <div class="flex flex-col  space-y-[5px] text-[17px] ">
                                 
                                    @foreach ($contact['dongabank'] as $item)
                                    <div class="flex space-x-[14px]">
                                            <img src="{{ asset('storage/uploads/img/accept.png') }}" alt=""
                                            class="min-w-[23px] h-[23px]" />
                                       
                                            {{-- Chi nhánh: Hồ Chí Minh --}}
                                           {!! html_entity_decode($item) !!}
                                    </div>
                                    @endforeach
                                       
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-5 mt-2 pr-[42px]">
                            <div class="h-[45px] relative">
                                <img src="{{ asset('storage/uploads/img/acb.png') }}" alt=""
                                    class="h-[98px] w-[98px] ml-[14px] absolute -top-5 z-0 -left-6" />
                            </div>
                            <div class="flex  space-x-[14px] z-10">
                                <div class="flex flex-col  space-y-[5px] text-[17px] ">
                                  
                                    @foreach ($contact['acbbank'] as $item)
                                    <div class="flex space-x-[14px]">
                                            <img src="{{ asset('storage/uploads/img/accept.png') }}" alt=""
                                            class="min-w-[23px] h-[23px]" />
                                       
                                            {{-- Chi nhánh: Hồ Chí Minh --}}
                                           {!! html_entity_decode($item) !!}
                                    </div>
                                    @endforeach
                                      
                                </div>
                            </div>
                        </div>
                        <div class="absolute inset-x-0 bottom-0 overflow-hidden  w-full h-[350px] ">
                            <img src="uploads/img/building.png" alt=""
                                class=" h-[477px] w-[777px] opacity-10 absolute -top-[120px]" />
                        </div>
                    </div>

                </div>
            </div>
            <div class="md:w-[55.85%] w-full">
                <div class="pl-[6%] pr-[10%] ">
                    <div class=" pt-10 ">
                        <div class="font-roboto">
                            <div class="">
                                <p class="text-4xl font-bold">
                                    {{-- Liên hệ với chúng tôi --}}
                                    {{$contact['lang']['title_contact']}}

                                </p>
                            </div>
                            <p class="mt-6 font-light pr-4 text-[20px]">
                                {{-- Để IMS có thể hỗ trợ bạn một cách nhanh chóng, vui lòng điền đầy đủ thông tin vào form dưới đây. --}}
                                {{$contact['lang']['text_contact']}}

                            </p>
                        </div>
                        <div class="font-arial mt-[45px]">
                            <form onSubmit={handleSubmit} class="flex flex-col space-y-5 w-full">
                                <div>
                                    <p class="text-[17px]  mb-1">
                                        {{-- Họ và tên* --}}
                                {{$contact['lang']['name_contact']}}

                                    </p>
                                    <input
                                        onChange={handleChange}
                                        type="text"
                                        class="rounded-md px-4 border-[#e6e6e6] border outline-none h-[46px] w-full focus:ring-0" name="full_name" />
                                </div>
                                <div class="flex md:flex-row flex-col md:space-y-0 space-y-5 w-full justify-between">
                                    <div class="md:w-[42.4%] w-full">
                                        <p class="text-[17px]  mb-1">
                                            {{-- Số điện thoại* --}}
                                        {{$contact['lang']['phone_contact']}}

                                        </p>
                                        <input
                                            onChange={handleChange}
                                            type="text"
                                            class="rounded-md px-4 border-[#e6e6e6] border outline-none h-[46px] mr-[14px] w-full focus:ring-0" name="phone" />
                                    </div>
                                    <div class="md:w-[55.4%] w-full">
                                        <p class="text-[17px]  mb-1">Email*</p>
                                        <input
                                            onChange={handleChange}
                                            type="text"
                                            class="rounded-md px-4 border-[#e6e6e6] border outline-none h-[46px] w-full focus:ring-0" name="email" />
                                    </div>
                                </div>
                                <div>
                                    <p class="text-[17px]  mb-1">
                                        {{-- Nội dung* --}}
                                        {{$contact['lang']['content_contact']}}

                                    </p>
                                    <textarea
                                        onChange={handleChange}
                                        name="content"
                                        class="rounded-md px-4 border-[#e6e6e6] bg-[#F3F3F3] border outline-none h-[164px] w-full resize-none py-2 focus:ring-0"></textarea>
                                </div>
                                <button class="rounded-3xl text-[17px] mb-1 border w-[148px] h-[41px] bg-[#0771b1] text-white">
                                    {{-- Gửi yêu cầu --}}
                                    {{$contact['lang']['send_contact']}}
                                </button>
                            </form>
                        </div>
                    </div>

                </div>
                <div class="md:mt-[40px] mt-10">
                    {!!html_entity_decode($contact['map']->content)!!}
                </div>
            </div>



        </div>

    </div>
</div>
@endsection
