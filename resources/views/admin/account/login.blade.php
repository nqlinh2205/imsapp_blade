@extends('admin.account.layout_account')
@section('content_right')
<div class="mt-12">
    <p class="text-[35px] font-bold">IMS xin chào!</p>
    <p class="text-[20px] mt-4">Hãy đăng nhập tài khoản của bạn.</p>
    <form action="" class="mt-4">
        <div class="form-group ">
            <div class="mb-2 mt-2 text-[17px]">
                <label for="" class="block mb-2">Mã số khách/Email</label>
                <input type="text" name="email" placeholder="Mã số khách/Email"
                    class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                @error('full_name')
                    <div class="error-message text-red-600 text-[12px]">{{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-2 mt-2">
                <label for="" class="block mb-2">Mật khẩu</label>
                <input type="password" name="password" placeholder="Mật khẩu"
                    class="bg-white border text-gray-900 w-full rounded-full p-2  outline-none">
                @error('full_name')
                    <div class="error-message text-red-600 text-[12px]">{{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div>
            <button class="w-full bg-[#0771B1] text-white rounded-md py-2 mt-4">Đăng nhập</button>
        </div>
    </form>
    <div class="flex justify-between font-roboto text-[15px] font-medium mt-4">
        <a href="" class="underline ">Quên mật khẩu</a>
        <a href="" class="underline ">Đăng ký</a>
    </div>
    <div class="text-center mt-10">
        <p>Tham gia để nhận thông tin ưu đãi tốt nhất</p>
        <div class="flex justify-center mt-4 space-x-3">
            <img src="{{ asset('admin_img/tai-appstore.png') }}" alt="" width="126"
                height="38">
            <img src="{{ asset('admin_img/google-play.png') }}" alt="" width="126"
                height="38">
        </div>
    </div>
</div>

@endsection