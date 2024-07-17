<style>
    /* Style for the entire container */
    .row {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    /* Style for the comment title */
    .frmtitle {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px;
    }

    /* Style for the comment table */
    table {
        width: 100%;
        border-collapse: collapse;
    }

    table th, table td {
        border: 1px solid #ccc;
        padding: 8px;
        text-align: center;
    }

    table th {
        background-color: #007BFF;
        color: #fff;
    }

    /* Style for the comment rows */
    table tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    /* Style for the buttons */
    input[type="button"] {
        background-color: #007BFF;
        color: #fff;
        border: none;
        padding: 8px 16px;
        cursor: pointer;
        border-radius: 4px;
        margin-right: 10px;
        /* display: flex; */
    }

    input[type="button"]:hover {
        background-color: #555;
    }
</style>

<div class="row">
    <div class="row frmtitle">
        <h1>DANH SÁCH BÌNH LUẬN </h1>
    </div>
    <div class="row frmcontent">

        <div class="row mb10 frmdsloai">
            <table>
                <tr>
                    <th></th>
                    <th>ID</th>
                    <th>NỘI DUNG BÌNH LUẬN</th>
                    <th>ID USER</th>
                    <th>ID PRO</th>
                    <th>NGÀY BÌNH LUẬN</th>
                    <th>Chức năng</th>
                    
                </tr>
                <?php
                foreach ($listbinhluan as $binhluan) {
                    extract($binhluan);
                  
                    $xoabl = "index.php?act=xoabl&ma_bl=".$ma_bl;

                    echo ' <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td>' . $ma_bl . '</td>
                                <td>' . $noidung . '</td>  
                                <td>' . $iduser . '</td>  
                                <td>' . $idpro . '</td>  
                                <td>' . $thoigian . '</td>  
                                <td><a href="'.$xoabl.'"><input type="button" value="Xóa"></a></td>
                                
                            </tr>';
                }
                ?>

            </table>
        </div>
        <div class="row mb10">
           
        </div>
    </div>
</div>
