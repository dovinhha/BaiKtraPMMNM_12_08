@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header font-weight-bold">{{ __('Đăng ký tiêm chủng') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <form action="dangkytiem" method="post">
                        @csrf
                        <div class="row justify-content-md-center">
                            <div class="col-lg-6">
                                <input class="form-control form-control-lg" name="user_id" value="1" hidden type="text">
                                <p class="mt-2 mb-0">Địa chỉ</p>
                                <input class="form-control form-control-lg" name="diachi" type="text">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-2 mb-0">Đối tượng ưu tiên</p>
                                <input class="form-control form-control-lg" name="doituongut" type="text">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-2 mb-0">Giới tính</p>
                                <input class="form-control form-control-lg" name="gioitinh" type="text">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-2 mb-0">Ngày sinh</p>
                                <input class="form-control form-control-lg" name="ngaysinh" type="text">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-2 mb-0">Số điện thoại</p>
                                <input class="form-control form-control-lg" name="sodienthoai" type="text">
                            </div>
                            <div class="col-lg-6">
                                <p class="mt-2 mb-0 ">Email</p>
                                <input class="form-control form-control-lg" name="email" type="text">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary mt-3 align-self-end">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
