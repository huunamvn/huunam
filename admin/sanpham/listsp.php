<?php
function showarr($arrname){
    echo '<pre>';
    print_r ($arrname);
    echo '</pre>';
}

$listsp = loadall_sanpham_home();
// showarr($listsp);
extract($listsp);

?>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    .container {
        margin: 20px auto;
        padding: 10px;
        box-sizing: border-box;
        background-color: white;
        border: 1px solid #ccc;
        border-radius: 5px;
        width: 70%;
    }

    .header {
        background-color: #0099FF;
        border: 1px solid chocolate;
        color: #fff;
        border-radius: 5px;
        text-align: center;
        padding: 10px;
    }

    .maloai, .tenloai {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        background-color: #ccc;
    }

    .tenloai {
        margin-top: 10px;
    }

    .table-ql {
        border-collapse: collapse;
        width: 100%;
        margin: 20px 0;
    }

    .table-ql th,
    .table-ql td {
        padding: 12px;
        text-align: center;
        border: 1px solid #ccc;
    }

    .table-ql th {
        background-color: #007bff;
        color: #fff;
    }

    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 8px 12px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
        text-decoration: none;
        margin-right: 5px;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    .chon-full {
        text-align: center;
        margin-top: 20px;
    }

    .btn-sua {
        background-color: #28a745;
    }

    .btn-xoa {
        background-color: #dc3545;
    }

    .btn-sua:hover {
        background-color: #218838;
    }

    .btn-xoa:hover {
        background-color: #c82333;
    }
    form {
        margin: 20px;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    /* Định dạng các phần tử trong biểu mẫu */
    input[type="text"],
    select {
        width: 200px;
        padding: 10px;
        margin-right: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    select {
        width: 220px;
    }

    input[type="submit"] {
        padding: 10px 20px;
        background-color: #838B83;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    /* Định dạng các lựa chọn trong dropdown */
    select option {
        padding: 5px;
    }
</style>

    <div class="container">
    <div class="header">
        <h1>Danh sách sản phẩm</h1>
    </div>
    <form action="index.php?act=listsp" method="POST">
        <input type="text" name="kyw" placeholder="Nhập tên sản phẩm ">
        <select name="iddm" id="">
            <option value="0" selected>Tất cả</option>
        <?php 
         $dsloai=loadall_danhmuc();
        foreach($dsloai as $danhsach){
                                extract($danhsach);
                                echo ' <option value="'.$id.'">'.$id.'</option>';
                            } ?>
        </select>
        <input type="submit" name="timkiem" value="Tìm kiếm">
    </form>
    <table border="1" class="table-ql">
        <tr>
            
            <th>Chọn</th>
            <th>Mã SP</th>
            <th>Tên Sản Phẩm</th>
            <th>Giá sản phẩm</th>
            <th>Img</th>
            <th>ID Loại</th>
            <th>Ngày nhập</th>
            <th>Mô tả</th>
            <th>Chức năng</th>

        </tr>
        <?php
        //   <form action="index.php?act=listsp" method="POST">
        //   <input type="text" name="kyw" placeholder="Nhập tên sản phẩm ">
        //   <select name="iddm" id="">
        // $dsloai=loadall_danhmuc();
        // foreach($dsloai as $danhsach){
        //                         extract($danhsach);
        //       <option value="0" selected>Tất cả</option>
        // echo ' <option value="'.$id.'">'.$id.'</option>';
        // <input type="submit" name="timkiem" value="Tìm kiếm">
        // $timkiem=loadall_sanpham();
        // $dssp =  loadall_sanpham_home();
        foreach ($dssp as $sanpham) {
            extract($sanpham);
            $suasp="index.php?act=suasp&id=".$idsp;
            $xoasp="index.php?act=xoasp&id=".$idsp;
            $imgpath="../uploads/".$img;
            if (($imgpath)){
                $hinh="<img src='".$imgpath."' height='80'>";   
            }else{
                $hinh="nophoto";
            }
            echo '<tr>
                    <td><input type="checkbox" class="select-item"></td>
                    <td> ' . $idsp . '</td>
                    <td>' . $tensp . '</td>
                    <td>' . $giasp . '</td>
                    <td>' . $hinh . '</td>
                    <td>' . $id. '</td>
                    <td>' . $ngaynhap. '</td>
                    <td>' . $mota . '</td>


                    <td>
                    <a href="'.$suasp.'"><input type="button" class="btn btn-sua" value="Sửa"></a>
                    <a href="'.$xoasp.'"><input type="button" class="btn btn-xoa" value="Xóa"></a>                    
                    </td>
                </tr>';
        }
        ?>
    </table>
    <div class="chon-full">
        <input type="button" name="chonfull" value="Chọn tất cả" class="btn" onclick="selectAllCheckboxes()">
        <input type="button" name="xoafull" value="Xoá tất cả" class="btn" onclick="deleteSelected()">
       <a href="index.php?act=addsp"> <input type="button" name="nhapthem" value="Nhập thêm" class="btn"></a>
    </div>
</div>
<script>
    function selectAll(source) {
        var checkboxes = document.querySelectorAll('.select-item');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = source.checked;
        });
    }

    function selectAllCheckboxes() {
        var checkboxes = document.querySelectorAll('.select-item');
        checkboxes.forEach(function (checkbox) {
            checkbox.checked = true;
        });
    }

    function deleteSelected() {
        var checkboxes = document.querySelectorAll('.select-item');
        checkboxes.forEach(function (checkbox) {
            if (checkbox.checked) {
                // Xóa hàng chứa checkbox đã được chọn
                var row = checkbox.closest('tr');
                row.remove();
            }
        });
    }
</script>


