@extends('layout.main')

@php
// dd($ims);
@endphp

@section('content')
    <main class="cursor-default">

        <div class="bg-[#ECF5FB]">
            <div class="container sm:px-0 px-4 pt-3 pb-7 ">
                {{-- banner --}}
                <div class=" px-4 sm:px-0 link font-body text-[15px] text-left mt-[1px] bg-no-repeat  ">
                    <span class="text-[#707070]">
                        <a href="">
                            Trang chủ
                        </a>
                        <i class="fa-solid fa-angle-right"></i>
                        <a href="">
                            Báo giá
                        </a>
                    </span>
                </div>
            </div>

            <section>
                <div class="container">
                    <div class=" md:mb-[30px] mb-[60px] text-center">
                        <p class="text-[40px] font-roboto font-bold pl-[28px]  h-[40px] leading-[40px]	">
                            Nhận báo giá Thiết kế App Mobile
                        </p>
                    </div>
                    <div class="bg-white rounded-[15px] p-[30px] ">
                        <form action="">
                            <div class="flex md:flex-row flex-col font-body text-[17px]">
                                <div class="md:w-1/2 w-full">
                                    <div class="form-group">
                                        <p>Bạn đang ở khu vực nào?</p>
                                        <div class="flex  space-x-6 mt-2">
                                            @for ($i = 0; $i < 3; $i++)
                                                <div class="flex items-center mr-4 ">
                                                    <input id="inline-radio" type="radio" value=""
                                                        name="inline-radio-group"
                                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300  ">
                                                    <label for="inline-radio"
                                                        class="ml-2 font-medium text-gray-900 dark:text-gray-300">Miền
                                                        Bắc</label>
                                                </div>
                                            @endfor
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2 mt-2">
                                            <label for="" class="block mb-2">Họ và tên*</label>
                                            <input type="text"
                                                class="border text-gray-900 w-full rounded-lg p-2  outline-none">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2 mt-2">
                                            <label for="" class="block mb-2">Tên doanh nghiệp*</label>
                                            <input type="text"
                                                class="border text-gray-900 w-full rounded-lg p-2  outline-none">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="flex md:flex-row flex-col md:space-x-2">
                                            <div class="mb-2 mt-2 md:w-3/5 w-full">
                                                <label for="" class="block mb-2">Email doanh nghiệp*</label>
                                                <input type="text"
                                                    class="border text-gray-900 w-full rounded-lg p-2  outline-none">
                                            </div>
                                            <div class="mb-2 mt-2  md:w-2/5 w-full">
                                                <label for="" class="block mb-2">Số điện thoại*</label>
                                                <input type="text"
                                                    class="border text-gray-900 w-full rounded-lg p-2  outline-none">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2 mt-2">
                                            <label for="" class="block mb-2">Lĩnh vực App cần tư vấn*</label>
                                            <select id="countries"
                                                class="border w-full rounded-lg p-2.5 outline-none text-[#707070]">
                                                <option selected class="">Chọn lĩnh vực App cần tư vấn* </option>
                                                <option value="US">United States</option>
                                                <option value="CA">Canada</option>
                                                <option value="FR">France</option>
                                                <option value="DE">Germany</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2 mt-2">
                                            <label for="" class="block mb-2">Ngân sách dự kiến thiết kế app</label>
                                            <input type="text"
                                                class="border text-gray-900 w-full rounded-lg p-2  outline-none">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-2 mt-2">
                                            <label for="" class="block mb-2">Mô tả chi tiết* <span
                                                    class="text-[#707070]">(Quy mô, chức năng, đối tượng phục
                                                    vụ,...)</span></label>
                                            <textarea name="" id="" cols="30" rows="7"
                                                class="border text-gray-900 w-full rounded-lg p-2  outline-none"style="resize: none; "></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="md:w-1/2 w-full">
                                    <div class="flex md:flex-col flex-col-reverse justify-between h-full pb-4 md:ml-7">
                                        <img src="{{ asset('img/bao-gia.png') }}" alt="">
                                        <div class="inline-block ">
                                            <button class="text-[17px] font-body text-white  py-2 px-4  bg-[#0771B1] rounded-[20px]">
                                                Gửi yêu cầu báo giá
                                            </button>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


            </section>


        </div>
    </main>
@endsection
