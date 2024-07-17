
<style>
     body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
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
    background-color: #FF99FF;
    border: 1px solid chocolate;
    color: blue;
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

.table-ql th {
    background-color: #007bff;
    color: #fff;
    padding: 10px;
    text-align: center;
}

.table-ql td {
    padding: 8px;
    text-align: center;
}

.btn {
    background-color: #007bff;
    color: #fff;
    padding: 6px 12px;
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
    color: #fff;
}

.btn-xoa {
    background-color: #dc3545;
    color: #fff;
}

.btn-sua:hover {
    background-color: #218838;
}

.btn-xoa:hover {
    background-color: #c82333; 
}
    </style>
    <div class="container">
    <div class="header">
        <h1>Danh sách loại hàng</h1>
    </div>
    <table border="1" class="table-ql">
        <tr>
            <th>
            Chọn
            </th>
            <th>Mã Loại</th>
            <th>Tên Loại</th>
        </tr>
        <?php
        foreach ($dsloai as $danhsach) {
            extract($danhsach);
            $sua="index.php?act=sualoai&id=".$id;
            $xoa="index.php?act=xoaloai&id=".$id;

            echo '<tr>
                    <td><input type="checkbox" class="select-item"></td>
                    <td> ' . $id . '</td>
                    <td>' . $tenloai . '</td>
                    <td>
                    <a href="'.$sua.'"><input type="button" class="btn btn-sua" value="Sửa"></a>
                    <a href="'.$xoa.'"><input type="button" class="btn btn-xoa" value="Xóa"></a>                    
                    </td>
                </tr>';
        }
        ?>
    </table>
    <div class="chon-full">
        <input type="button" name="chonfull" value="Chọn tất cả" class="btn" onclick="selectAllCheckboxes()">
        <input type="button" name="xoafull" value="Xoá tất cả" class="btn" onclick="deleteSelected()">
       <a href="index.php?act=addloai"> <input type="button" name="nhapthem" value="Nhập thêm" class="btn"></a>
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


