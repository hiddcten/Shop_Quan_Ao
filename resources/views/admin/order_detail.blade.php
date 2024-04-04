@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
                <th>Tùy biến</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product1.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>150.000</td>
                <td>2</td>
                <td>300.000</td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product2.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>150.000</td>
                <td>1</td>
                <td>150.000</td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td style="font-weight: 700;" colspan="5">Tổng cộng</td>
                <td style="font-weight: 700;">238.000</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
