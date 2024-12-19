@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Đơn hàng</div>
    <div class="card-body table-responsive">
        <p>
            <a href="{{ route('admin.donhang.them') }}" class="btn btn-info">
                <i class="fa-light fa-plus"></i> Thêm mới
            </a>
        </p>
        <table class="table table-bordered table-hover table-sm mb-0">
            <thead>
                <tr>
                    <th width="5%">#</th>
                    <th width="15%">Khách hàng</th>
                    <th width="45%">Thông tin giao hàng</th>
                    <th width="15%">Ngày đặt</th>
                    <th width="10%">Tình trạng</th>
                    <th width="5%">Sửa</th>
                    <th width="5%">Xóa</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donhang as $value)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $value->User->name }}</td>
                    <td>
                        <span class="d-block">Điện thoại: <strong>{{ $value->dienthoaigiaohang }}</strong></span>
                        <span class="d-block">Địa chỉ: <strong>{{ $value->diachigiaohang }}</strong></span>
                        <span class="d-block">Sản phẩm:</span>
                        <table class="table table-bordered table-hover table-sm mb-0">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Sản phẩm</th>
                                    <th width="5%">SL</th>
                                    <th width="15%">Đơn giá</th>
                                    <th width="20%">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $tongtien = 0; @endphp
                                @foreach($value->DonHang_ChiTiet as $chitiet)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $chitiet->SanPham->tensanpham }}</td>
                                    <td>{{ $chitiet->soluongban }}</td>
                                    <td class="text-end">{{ number_format($chitiet->dongiaban) }}<sup><u>đ</u></sup></td>
                                    <td class="text-end">{{ number_format($chitiet->soluongban * $chitiet->dongiaban) }}<sup><u>đ</u></sup></td>
                                </tr>
                                @php $tongtien += $chitiet->soluongban * $chitiet->dongiaban; @endphp
                                @endforeach
                                <tr>
                                    <td colspan="4">Tổng tiền sản phẩm:</td>
                                    <td class="text-end"><strong>{{ number_format($tongtien) }}</strong><sup><u>đ</u></sup></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td>{{ $value->created_at->format('d/m/Y H:i:s') }}</td>
                    <td>{{ $value->TinhTrang->tinhtrang }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.donhang.sua', ['id' => $value->id]) }}">
                            <i class="fa-light fa-edit"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('admin.donhang.xoa', ['id' => $value->id]) }}" onclick="return confirm('Bạn có muốn xóa đơn hàng của khách {{ $value->User->name }} không?')">
                            <i class="fa-light fa-trash-alt text-danger"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
