@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="flex justify-between ">
            <h1 class="font-roboto text-[25px] font-bold">Trung tâm trợ giúp và hỗ trợ</h1>
            <a href=""
                class="flex items-center space-x-2 border-t-[5px] border-transparent self-end	text-[#0771B1] font-roboto text-[15px] underline">
                Xem các yêu cầu đã gửi

            </a>
        </div>
        {{-- Hỗ trợ Kỹ thuật --}}
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Hỗ trợ Kỹ thuật</h2>
            <div class="grid grid-cols-3 gap-[15px] mt-4">
                @for ($i = 0; $i < 6; $i++)
                    @if ($i == 1)
                    <a href="" class="hover:scale-105 duration-300">
                        <div class="flex flex-col text-center font-roboto bg-[#93CEF2] space-y-4 py-5  rounded-[5px]">
                            <span class="m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.855" height="29.604"
                                    viewBox="0 0 32.855 29.604">
                                    <g id="Group_21550" data-name="Group 21550" transform="translate(0 0)">
                                        <path id="Path_61202" data-name="Path 61202"
                                            d="M-881.3,765.379V755.69c.037-.1.077-.195.111-.293a2.1,2.1,0,0,1,1.433-1.4,3.2,3.2,0,0,1,.821-.1c.5-.016,1,0,1.482,0a.765.765,0,0,0,.026-.111c0-.492,0-.984.006-1.476a1.107,1.107,0,0,1,1.249-1.239h22.586a1.112,1.112,0,0,1,1.261,1.259q0,2.647,0,5.294A1.116,1.116,0,0,1-853.6,758.9h-22.554a1.113,1.113,0,0,1-1.265-1.256c0-.511,0-1.022,0-1.549h-1.676v8.882h1.675c0-.584,0-1.149,0-1.714,0-.916.395-1.311,1.306-1.311h22.49c.907,0,1.3.4,1.3,1.315,0,.565,0,1.129,0,1.709h1.676V744.993h-1.676c0,.584,0,1.149,0,1.714,0,.91-.4,1.318-1.307,1.318q-11.245,0-22.49,0c-.9,0-1.3-.41-1.3-1.323q0-2.583,0-5.165c0-.966.392-1.354,1.368-1.354h22.362c.987,0,1.368.387,1.368,1.386,0,.4,0,.8,0,1.229h1.519a2.193,2.193,0,0,1,2.359,2.363q0,9.818,0,19.635a2.2,2.2,0,0,1-2.379,2.376h-1.5c0,.462,0,.887,0,1.312,0,.887-.411,1.3-1.292,1.3q-11.261,0-22.522,0a1.127,1.127,0,0,1-1.282-1.278c0-.435,0-.87,0-1.336-.583,0-1.126.006-1.669,0a2.192,2.192,0,0,1-2.139-1.619A1.69,1.69,0,0,0-881.3,765.379Zm8.971-22.975a1.7,1.7,0,0,0-1.718,1.7,1.708,1.708,0,0,0,1.69,1.7,1.7,1.7,0,0,0,1.714-1.7A1.693,1.693,0,0,0-872.327,742.4Zm1.685,23.471a1.7,1.7,0,0,0-1.67-1.715,1.706,1.706,0,0,0-1.733,1.689,1.7,1.7,0,0,0,1.674,1.713A1.693,1.693,0,0,0-870.642,765.876Zm0-10.878a1.7,1.7,0,0,0-1.7-1.716,1.706,1.706,0,0,0-1.7,1.688,1.708,1.708,0,0,0,1.705,1.717A1.7,1.7,0,0,0-870.642,755Zm7.4-.007h0c0-.374.014-.749,0-1.122a.8.8,0,0,0-.805-.789.813.813,0,0,0-.81.823q-.017,1.074,0,2.148a.817.817,0,0,0,.8.837.807.807,0,0,0,.821-.808C-863.233,755.718-863.246,755.354-863.246,754.991Zm5.628-.014c0,.363-.01.727,0,1.09a.82.82,0,0,0,.813.821.794.794,0,0,0,.8-.791q.028-1.105,0-2.211a.8.8,0,0,0-.822-.806.822.822,0,0,0-.8.839C-857.625,754.271-857.618,754.624-857.617,754.977Zm-1.994,10.886c0-.331,0-.663,0-.994,0-.021,0-.042,0-.064a.816.816,0,0,0-.792-.839.793.793,0,0,0-.833.824q-.025,1.073,0,2.147a.789.789,0,0,0,.834.822.809.809,0,0,0,.79-.839C-859.6,766.568-859.611,766.215-859.611,765.862Zm0-21.757c0-.353.008-.706,0-1.058a.809.809,0,0,0-.79-.838.789.789,0,0,0-.833.821c-.017.715-.016,1.432,0,2.147a.794.794,0,0,0,.833.824.817.817,0,0,0,.792-.872C-859.605,744.789-859.611,744.447-859.611,744.105Zm0,10.894c0-.352.006-.705,0-1.058a.829.829,0,0,0-.807-.862.811.811,0,0,0-.818.846q-.022,1.058,0,2.116a.811.811,0,0,0,.818.847.829.829,0,0,0,.807-.863C-859.6,755.684-859.611,755.342-859.611,755Zm-3.634-10.894c0-.363.012-.727,0-1.09a.791.791,0,0,0-.814-.808.8.8,0,0,0-.8.821q-.016,1.074,0,2.148a.8.8,0,0,0,.8.825.8.8,0,0,0,.816-.808C-863.233,744.833-863.245,744.469-863.245,744.106Zm5.627-.009v1.026c0,.021,0,.043,0,.064a.814.814,0,0,0,.815.816.78.78,0,0,0,.8-.784c.02-.737.019-1.475,0-2.211a.782.782,0,0,0-.822-.8.807.807,0,0,0-.8.83C-857.625,743.391-857.618,743.744-857.618,744.1Zm-7.252,21.759v1.026c0,.021,0,.043,0,.064a.811.811,0,0,0,.783.813.779.779,0,0,0,.835-.783q.028-1.105,0-2.211a.785.785,0,0,0-.822-.8.809.809,0,0,0-.8.833C-864.877,765.151-864.87,765.5-864.87,765.856Zm8.88.01h0v-.994c0-.021,0-.043,0-.064a.809.809,0,0,0-.818-.843.809.809,0,0,0-.809.852q-.012,1.042,0,2.084a.808.808,0,0,0,.8.858.8.8,0,0,0,.821-.836C-855.98,766.572-855.99,766.219-855.99,765.866Z"
                                            transform="translate(881.298 -740.182)" />
                                    </g>
                                </svg>
                            </span>
                            <p class="text-[17px] font-bold">Tên miền</p>
                            <p class="text-[14px] ">Hỗ trợ tên miền Quốc tế và Việt Nam.</p>
                        </div>
                    </a>
                    @else
                    <a href="" class="hover:scale-105 duration-300">
                        <div
                            class="flex flex-col text-center font-roboto bg-[#034871] space-y-4 py-5 text-white rounded-[5px]">
                            <span class="m-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="31.809" height="29.739"
                                    viewBox="0 0 31.809 29.739">
                                    <g id="Group_21543" data-name="Group 21543" transform="translate(0 0)">
                                        <path id="Path_61203" data-name="Path 61203"
                                            d="M-1717.743,1110.754h3.378a.806.806,0,0,1,.807.806v1.383a.806.806,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.807.807,0,0,0,.806.807h3.378a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.806.806,0,0,0,.806.806h16.355a.806.806,0,0,0,.806-.806v-20.348a.806.806,0,0,0-.806-.806h-16.355a.806.806,0,0,0-.806.806v4.377A.806.806,0,0,0-1717.743,1110.754Zm9.982,0h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1110.754Zm0,7.986h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1118.74Z"
                                            transform="translate(1732.391 -1096.987)" fill="#fff" />
                                        <g id="Group_21545" data-name="Group 21545" transform="translate(6.974 0)">
                                            <rect id="Rectangle_7314" data-name="Rectangle 7314" width="4.991"
                                                height="4.991" rx="2.496" transform="translate(0 16.829)"
                                                fill="#fff" />
                                            <rect id="Rectangle_7315" data-name="Rectangle 7315" width="4.991"
                                                height="4.991" rx="2.496" transform="translate(0 7.919)"
                                                fill="#fff" />
                                            <rect id="Rectangle_7316" data-name="Rectangle 7316" width="4.991"
                                                height="4.991" rx="2.496" transform="translate(0 24.748)"
                                                fill="#fff" />
                                            <rect id="Rectangle_7318" data-name="Rectangle 7318" width="4.991"
                                                height="4.991" rx="2.495" fill="#fff" />
                                        </g>
                                        <g id="Group_21544" data-name="Group 21544" transform="translate(0 0)">
                                            <rect id="Rectangle_7317" data-name="Rectangle 7317" width="4.991"
                                                height="4.991" rx="2.495" fill="#fff" />
                                            <rect id="Rectangle_7319" data-name="Rectangle 7319" width="4.991"
                                                height="4.991" rx="2.495" transform="translate(0 24.748)"
                                                fill="#fff" />
                                            <rect id="Rectangle_7320" data-name="Rectangle 7320" width="4.991"
                                                height="4.991" rx="2.495" transform="translate(0 16.829)"
                                                fill="#fff" />
                                            <rect id="Rectangle_7321" data-name="Rectangle 7321" width="4.991"
                                                height="4.991" rx="2.495" transform="translate(0 7.919)"
                                                fill="#fff" />
                                        </g>
                                    </g>
                                </svg>
                            </span>
                            <p class="text-[17px] font-bold">Tên miền</p>
                            <p class="text-[14px] ">Hỗ trợ tên miền Quốc tế và Việt Nam.</p>
                        </div>
                    </a>
                    @endif
                @endfor

            </div>
        </div>
        {{-- Thanh toán và hóa đơn --}}
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Thanh toán và hóa đơn</h2>
            <div class="grid grid-cols-3 gap-[15px] mt-4">
                @for ($i = 0; $i < 3; $i++)
                <a href="" class="hover:scale-105 duration-300">

                    <div
                        class="flex flex-col text-center font-roboto bg-[#034871] space-y-4 py-5 text-white rounded-[5px]">
                        <span class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.809" height="29.739"
                                viewBox="0 0 31.809 29.739">
                                <g id="Group_21543" data-name="Group 21543" transform="translate(0 0)">
                                    <path id="Path_61203" data-name="Path 61203"
                                        d="M-1717.743,1110.754h3.378a.806.806,0,0,1,.807.806v1.383a.806.806,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.807.807,0,0,0,.806.807h3.378a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.806.806,0,0,0,.806.806h16.355a.806.806,0,0,0,.806-.806v-20.348a.806.806,0,0,0-.806-.806h-16.355a.806.806,0,0,0-.806.806v4.377A.806.806,0,0,0-1717.743,1110.754Zm9.982,0h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1110.754Zm0,7.986h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1118.74Z"
                                        transform="translate(1732.391 -1096.987)" fill="#fff" />
                                    <g id="Group_21545" data-name="Group 21545" transform="translate(6.974 0)">
                                        <rect id="Rectangle_7314" data-name="Rectangle 7314" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7315" data-name="Rectangle 7315" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 7.919)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7316" data-name="Rectangle 7316" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7318" data-name="Rectangle 7318" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                    </g>
                                    <g id="Group_21544" data-name="Group 21544" transform="translate(0 0)">
                                        <rect id="Rectangle_7317" data-name="Rectangle 7317" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                        <rect id="Rectangle_7319" data-name="Rectangle 7319" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7320" data-name="Rectangle 7320" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7321" data-name="Rectangle 7321" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 7.919)"
                                            fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="text-[17px] font-bold">Tên miền</p>
                        <p class="text-[14px] ">Hỗ trợ tên miền Quốc tế và Việt Nam.</p>
                    </div>
                </a>
                @endfor

            </div>
        </div>
        {{-- Tư vấn về dịch vụ --}}
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Tư vấn về dịch vụ</h2>
            <div class="grid grid-cols-3 gap-[15px] mt-4">
                @for ($i = 0; $i < 3; $i++)
                <a href="" class="hover:scale-105 duration-300">
                    <div
                        class="flex flex-col text-center font-roboto bg-[#034871] space-y-4 py-5 text-white rounded-[5px]">
                        <span class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.809" height="29.739"
                                viewBox="0 0 31.809 29.739">
                                <g id="Group_21543" data-name="Group 21543" transform="translate(0 0)">
                                    <path id="Path_61203" data-name="Path 61203"
                                        d="M-1717.743,1110.754h3.378a.806.806,0,0,1,.807.806v1.383a.806.806,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.807.807,0,0,0,.806.807h3.378a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.806.806,0,0,0,.806.806h16.355a.806.806,0,0,0,.806-.806v-20.348a.806.806,0,0,0-.806-.806h-16.355a.806.806,0,0,0-.806.806v4.377A.806.806,0,0,0-1717.743,1110.754Zm9.982,0h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1110.754Zm0,7.986h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1118.74Z"
                                        transform="translate(1732.391 -1096.987)" fill="#fff" />
                                    <g id="Group_21545" data-name="Group 21545" transform="translate(6.974 0)">
                                        <rect id="Rectangle_7314" data-name="Rectangle 7314" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7315" data-name="Rectangle 7315" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 7.919)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7316" data-name="Rectangle 7316" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7318" data-name="Rectangle 7318" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                    </g>
                                    <g id="Group_21544" data-name="Group 21544" transform="translate(0 0)">
                                        <rect id="Rectangle_7317" data-name="Rectangle 7317" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                        <rect id="Rectangle_7319" data-name="Rectangle 7319" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7320" data-name="Rectangle 7320" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7321" data-name="Rectangle 7321" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 7.919)"
                                            fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="text-[17px] font-bold">Tên miền</p>
                        <p class="text-[14px] ">Hỗ trợ tên miền Quốc tế và Việt Nam.</p>
                    </div>
                </a>
                @endfor

            </div>
        </div>
        {{-- Đánh giá và cam kết --}}
        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Đánh giá và cam kết
            </h2>
            <div class="grid grid-cols-3 gap-[15px] mt-4">
                @for ($i = 0; $i < 2; $i++)
                <a href="" class="hover:scale-105 duration-300">

                    <div
                        class="flex flex-col text-center font-roboto bg-[#034871] space-y-4 py-5 text-white rounded-[5px]">
                        <span class="m-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31.809" height="29.739"
                                viewBox="0 0 31.809 29.739">
                                <g id="Group_21543" data-name="Group 21543" transform="translate(0 0)">
                                    <path id="Path_61203" data-name="Path 61203"
                                        d="M-1717.743,1110.754h3.378a.806.806,0,0,1,.807.806v1.383a.806.806,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.807.807,0,0,0,.806.807h3.378a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-3.378a.806.806,0,0,0-.806.806v3.379a.806.806,0,0,0,.806.806h16.355a.806.806,0,0,0,.806-.806v-20.348a.806.806,0,0,0-.806-.806h-16.355a.806.806,0,0,0-.806.806v4.377A.806.806,0,0,0-1717.743,1110.754Zm9.982,0h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1110.754Zm0,7.986h1.382a.806.806,0,0,1,.807.806v1.383a.807.807,0,0,1-.807.806h-1.382a.806.806,0,0,1-.806-.806v-1.383A.806.806,0,0,1-1707.761,1118.74Z"
                                        transform="translate(1732.391 -1096.987)" fill="#fff" />
                                    <g id="Group_21545" data-name="Group 21545" transform="translate(6.974 0)">
                                        <rect id="Rectangle_7314" data-name="Rectangle 7314" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7315" data-name="Rectangle 7315" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 7.919)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7316" data-name="Rectangle 7316" width="4.991"
                                            height="4.991" rx="2.496" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7318" data-name="Rectangle 7318" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                    </g>
                                    <g id="Group_21544" data-name="Group 21544" transform="translate(0 0)">
                                        <rect id="Rectangle_7317" data-name="Rectangle 7317" width="4.991"
                                            height="4.991" rx="2.495" fill="#fff" />
                                        <rect id="Rectangle_7319" data-name="Rectangle 7319" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 24.748)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7320" data-name="Rectangle 7320" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 16.829)"
                                            fill="#fff" />
                                        <rect id="Rectangle_7321" data-name="Rectangle 7321" width="4.991"
                                            height="4.991" rx="2.495" transform="translate(0 7.919)"
                                            fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <p class="text-[17px] font-bold">Tên miền</p>
                        <p class="text-[14px] ">Hỗ trợ tên miền Quốc tế và Việt Nam.</p>
                    </div>
                </a>
                @endfor

            </div>
        </div>



    </main>
@endsection
