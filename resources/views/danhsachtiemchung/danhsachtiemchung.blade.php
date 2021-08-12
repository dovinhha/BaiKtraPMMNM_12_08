@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
        <div class="col-md-12">
            <div class="card">

            <div class="text-center p-2 font-weight-bold">Danh sách tiêm chủng</div>
                <table class="table caption-top">
                  <th>STT</td>
                  <th>Địa chỉ</td>
                  <th>Đối tượng ưu tiên</td>
                  <th>Giới tính</td>
                  <th>Ngày sinh</td>
                  <th>Số điện thoại</td>
                  <th>Email</td>
                  <tbody>
                    @foreach ($tiemchungs as $tiem)
                        <tr>
                            <th scope="row">{{ ++$i }}</th>
                            <td> 
                                {{ $tiem->diachi }}
                            </td>
                            <td> 
                                {{ $tiem->doituongut }}
                            </td>
                            <td> 
                                {{ $tiem->gioitinh }}
                            </td>
                            <td> 
                                {{ $tiem->ngaysinh }}
                            </td>
                            <td> 
                                {{ $tiem->sodienthoai }}
                            </td>
                            <td> 
                                {{ $tiem->email }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
