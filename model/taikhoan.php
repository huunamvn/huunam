<?php
function insert_taikhoan($pass,$tenkh,$email){
    $sql="INSERT INTO khachhang( pass, tenkh, email) 
    VALUES ('$pass','$tenkh','$email')";
    pdo_execute($sql);
}
function checkuser($tenkh,$pass){
    $sql="SELECT * FROM khachhang where tenkh='".$tenkh."' AND pass='".$pass."'";
    $sp=pdo_query_one($sql);
return $sp;
}
function delete_khachhang($id){
    $sql="DELETE  FROM khachhang where id=".$id;
    pdo_execute($sql);
}
function checkemail($email){
    $sql="SELECT * FROM khachhang where email='".$email."'";
    $sp=pdo_query_one($sql);
return $sp;
}
function update_taikhoan($id,$tenkh,$pass,$diachi,$email,$dienthoai){
$sql="UPDATE khachhang SET tenkh='$tenkh',
pass='$pass',diachi='$diachi',email='$email',dienthoai='$dienthoai' WHERE id =".$id;
 pdo_execute($sql);
}
//admin
function loadall_taikhoan(){
    $sql="SELECT *FROM khachhang order by id desc";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}
function load_one_khachhang($id){
    $sql="SELECT * FROM khachhang where id=".$id;
    $sp=pdo_query_one($sql);
return $sp;
}

?>