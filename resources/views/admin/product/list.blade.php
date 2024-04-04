@extends('admin.main')
@section('content')
<div class="admin-content-main-content-product-list">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Ảnh</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Bán</th>
                <th>Giá Giảm</th>
                <th>Ngày Đăng</th>
                <th>Tùy chỉnh</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product1.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>200.000</td>
                <td>150.000</td>
                <td>2024-03-26</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product2.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>200.000</td>
                <td>150.000</td>
                <td>2024-03-26</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product3.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>200.000</td>
                <td>150.000</td>
                <td>2024-03-26</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product4.jpg')}}" alt="" ></td>
                <td>T-Shirt</td>
                <td>200.000</td>
                <td>150.000</td>
                <td>2024-03-26</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td><img style="width: 70px;" src="{{Asset('backend/Asset/image/product/product5.jpg')}}" alt="" ></td>
                <td>Shoes</td>
                <td>200.000</td>
                <td>150.000</td>
                <td>2024-03-26</td>
                <td>
                    <a class="edit-class" href="">Sửa</a>
                    |
                    <a class="delete-class" href="">Xóa</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
