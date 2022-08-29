@extends('admin.layout.layout_dashborad')

@section('content')
    <main class=" pr-4 pt-4">
        {{-- tiêu đề --}}
        <div class="flex justify-between ">
            <h1 class="font-roboto text-[25px] font-bold">Hỗ trợ</h1>
            <a href=""
                class="flex items-center space-x-2 border-t-[5px] border-transparent self-end	text-[#0771B1] font-roboto text-[15px] underline">
                Xem các yêu cầu đã gửi
            </a>
        </div>
        {{-- Hỗ trợ Kỹ thuật --}}
        <form action="" class="w-full" enctype='multipart/form-data'    >

        <div class="mt-4 min-w-[1122px] overflow-x-scroll shadow-full p-5 rounded-[5px]">
            <h2 class="font-roboto text-[20px] font-bold">Thay đổi Thông tin - Hồ sơ - Hợp đồng</h2>
            <p href=""
                class="mt-2 flex items-center space-x-2 border-t-[5px] border-transparent self-end	text-[#0771B1] font-body text-[17px] ">
                Nhập đầy đủ nội dung theo mẫu bên dưới để chúng tôi xử lý giúp bạn!
            </p>
            <div class="mt-4">
                    <div class="form-group mb-2 text-[17px] w-1/3">
                        <label for="" class="block mb-2">Số điện thoại</label>
                        <input type="text" placeholder="Nhập số điện thoại"
                            class=" border text-gray-900 w-full p-2  outline-none rounded-[5px]">
                    </div>
                    <div class="form-group">
                        <label for="" class="block mb-2 mt-2">Nội dung</label>
                        <textarea class="border-[1px] border-[#e5e7eb] w-full p-2 rounded-[5px]" name="" id="" rows="8"
                            placeholder="Nhập nội dung..."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="" class="block mb-2 mt-2">Tệp đính kèm</label>
                        <label for="file">
                            <div
                                class="inline-flex space-x-2 rounded-[5px] border-[#0771B1] border-[1px] py-2 px-4 cursor-pointer  items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15.972" height="16"
                                    viewBox="0 0 15.972 16">
                                    <g id="Group_21757" data-name="Group 21757" transform="translate(0 0)">
                                        <path id="Path_61269" data-name="Path 61269"
                                            d="M-833.912,204.448a.914.914,0,0,1-.692-.648,1.5,1.5,0,0,1-.036-.371q0-4.077,0-8.154v-.232c-.072.069-.114.107-.154.147q-.937.939-1.875,1.877a.851.851,0,0,1-.874.232.834.834,0,0,1-.622-.655.884.884,0,0,1,.273-.866q.989-.987,1.974-1.977.733-.735,1.466-1.469a.9.9,0,0,1,1.394,0q1.715,1.717,3.428,3.435a.9.9,0,0,1,.093,1.261.883.883,0,0,1-1.314.028c-.624-.619-1.243-1.244-1.864-1.866-.04-.04-.081-.078-.154-.147v.231q0,4.092,0,8.185a.89.89,0,0,1-.7.97.11.11,0,0,0-.025.018Z"
                                            transform="translate(841.743 -192)" fill="#0771b1" />
                                        <path id="Path_61270" data-name="Path 61270"
                                            d="M-920.208,453.295a9.062,9.062,0,0,1-.973-.256,3.534,3.534,0,0,1-2.238-3.225c0-.318,0-.635,0-.953a.892.892,0,0,1,.884-.9.9.9,0,0,1,.891.9,10.737,10.737,0,0,0,.037,1.2,1.723,1.723,0,0,0,1.667,1.454c1.377.012,2.754,0,4.131.005,1.59,0,3.18,0,4.77,0a1.748,1.748,0,0,0,1.76-1.367,3.84,3.84,0,0,0,.051-.7c.008-.208,0-.417,0-.625a.883.883,0,0,1,.765-.853.882.882,0,0,1,.963.6l.046.131v1.375a.655.655,0,0,0-.028.1,3.55,3.55,0,0,1-2.579,2.988c-.2.053-.4.086-.6.128Z"
                                            transform="translate(923.423 -437.295)" fill="#0771b1" />
                                    </g>
                                </svg>
                                <span class="font-roboto text-[15px] text-[#0771B1]">Tải lên</span>
                            </div>
                            <input type="file" name="file[]" value="file" id="file" class="hidden" multiple>
                        </label>
                        <span class="file-name italic">Hỗ trợ tối đa 5MB</span>
                    </div>
            </div>
        </div>
        <button class="bg-[#49D3F0] text-white rounded-[5px] py-3 px-7 ml-4 mt-5 float-right" type="submit">Gửi yêu cầu</button>
    </form>

    </main>
    <script>
        $(document).ready(function() {
            // get the name of uploaded file
            $('input[type="file"]').change(function() {
                var value = $("input[type='file']").val();
                console.log(value);
                value = value.split(/(\\|\/)/g).pop();
                $('.file-name').text(value);
            });
        });
    </script>
@endsection
