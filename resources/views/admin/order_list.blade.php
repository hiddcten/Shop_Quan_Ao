@extends('admin.main')
@section('content')
<div class="admin-content-main-content-order-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Địa chỉ</th>
                <th>Ghi Chú</th>
                <th>Chi tiết</th>
                <th>Ngày</th>
                <th>Trạng thái</th>
                <th>Tùy biến</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Bach Phuong Binh</td>
                <td>077 777 7777</td>
                <td>bpb2004@gmail.com</td>
                <td>2A, P. Tân Quy, Q.7, TPHCM</td>
                <td>Giao nhanh</td>
                <td>
                    <a class="edit-class" href="/admin/order_detail">Chi tiết</a>
                </td>
                <td>
                    26/03/2024
                </td>
                <td>
                    <a class="confirm-order" href="">Đã xác nhận</a>
                </td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Tang Minh Thien An</td>
                <td>077 777 7777</td>
                <td>tmta2004@gmail.com</td>
                <td>Q.9, TPHCM</td>
                <td>Giao chậm</td>
                <td>
                    <a class="edit-class" href="/admin/order_detail">Chi tiết</a>
                </td>
                <td>
                    26/03/2024
                </td>
                <td>
                    <a class="not-confirm-order" href="">Chưa xác nhận</a>
                </td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pham Xuan Truong</td>
                <td>077 777 7777</td>
                <td>pxt2004@gmail.com</td>
                <td>Dak Lak</td>
                <td>Giao Nhanh</td>
                <td>
                    <a class="edit-class" href="/admin/order_detail">Chi tiết</a>
                </td>
                <td>
                    26/03/2024
                </td>
                <td>
                    <a class="not-confirm-order" href="/admin/order_detail">Chưa xác nhận</a>
                </td>
                <td>
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
