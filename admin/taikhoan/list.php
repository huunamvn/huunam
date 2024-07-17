<style>
    .product-list {
        font-family: Arial, sans-serif;
        margin-bottom: 20px;
    }

    .product-list table {
        width: 100%;
        border-collapse: collapse;
    }

    .product-list table th {
        background-color: #007bff;
        color: #fff;
        padding: 10px;
        text-align: left;
    }

    .product-list table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    .product-list table tr:nth-child(odd) {
        background-color: #fff;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin-right: 5px;
        cursor: pointer;
    }

    .btn[name="chonfull"] {
        background-color: #007bff;
    }

    .btn[name="xoafull"] {
        background-color: #007bff;
    }

    .btn[name="nhapthem"] {
        background-color: #007bff;
        text-decoration: none;
        color: #fff;
    }

    .product-list table td:last-child {
        display: flex;
        justify-content: space-between;
    }

    .btn.btn-sua,
    .btn.btn-xoa {
        background-color: #007bff;
    }

    .product-list table input[type="checkbox"] {
        margin: 0;
    }
</style>

<div class="product-list">
                <h2>Danh sách khách hàng đã thêm</h2>
                <table>
                    
                        <tr>
                            <th>Chọn</th>
                            <th>Mã khách hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Password</th>
                            <th>Địa chỉ email</th>
                            <th>Địa chỉ</th> 
                            <th>Điện Thoại</th>
                            <th>ROLE</th>
                            <th>Chức năng</th>

                        </tr>
                        <?php
        foreach ($listtaikhoan as $taikhoan) {
            extract($taikhoan);
            $suatk="index.php?act=suatk&id=".$id;
            $xoatk="index.php?act=xoatk&id=".$id;

            echo '<tr>
                    <td><input type="checkbox" class="select-item"></td>
                    <td> ' . $id . '</td>
                    <td>' . $tenkh . '</td>
                    <td>' . $pass . '</td>
                    <td>' . $email . '</td>
                    <td>' . $diachi . '</td>
                    <td>' . $dienthoai . '</td>
                    <td>' . $role . '</td>
                    <td>
                    <a href="'.$suatk.'"><input type="button" class="btn btn-sua" value="Sửa"></a>
                    <a href="'.$xoatk.'"><input type="button" class="btn btn-xoa" value="Xóa"></a>                    
                    </td>
                </tr>';
        }
        ?>
                   </table>
    </div>
    <div class="chon-full">
        <input type="button" name="chonfull" value="Chọn tất cả" class="btn" onclick="selectAllCheckboxes()">
        <input type="button" name="xoafull" value="Xoá tất cả" class="btn" onclick="deleteSelected()">
       <a href="index.php?act=dangki"> <input type="submit" name="nhapthem" value="Nhập thêm" class="btn"></a>
    </div>
    