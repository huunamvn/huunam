<?php
function insert_sanpham($tensp,$giasp,$img,$iddm,$ngaynhap,$mota){
    $sql="INSERT INTO sanpham( tensp, giasp, img, id, ngaynhap, mota) 
    VALUES ('$tensp','$giasp','$img','$iddm','$ngaynhap','$mota')";
    pdo_execute($sql);
}
function delete_sanpham($id){
    $sql="DELETE FROM sanpham where idsp=".$id;
    pdo_execute($sql);
}
function loadall_sanpham_top10(){
    $sql="SELECT *FROM sanpham WHERE 1 order by luotxem desc limit 0,10";
    $dssp=pdo_query($sql);
    return $dssp;  
}
function loadall_sanpham_home(){
    $sql="SELECT *FROM sanpham JOIN loaihang ON sanpham.id = loaihang.id";
    $dssp=pdo_query($sql);
    return $dssp;  
}
function loadall_sanpham_home1(){
    $sql="SELECT *FROM sanpham WHERE 1 order by tensp desc limit 0,9";
    $dssp=pdo_query($sql);
    return $dssp;  
}
function loadall_sanpham($kyw,$iddm){
   $sql=" SELECT * FROM sanpham where 1";
   if($kyw!=""){
    $sql.= " AND tensp like '%$kyw%'";
   }
   if($iddm>0){
    $sql.=" AND id='$iddm'";
   }
   $sql.=" ORDER BY id DESC";
   $dssp=pdo_query($sql);
   return($dssp);

}
function load_one_sanpham($id){
    $sql="SELECT * FROM sanpham where idsp=".$id;
    $sp=pdo_query_one($sql);
return $sp;
}
function load_ten_danhmuc($iddm){
    if($iddm>0){
        $sql=" SELECT * FROM  loaihang where id=".$iddm;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $tenloai;
    }else{
        return "";
    }
   
}
function load_sanpham_cungloai($iddm){
    $sql="SELECT * FROM sanpham WHERE iddm = $iddm";
    $dssp=pdo_query($sql);
    return $dssp;  
}

function update_sanpham($tensp,$giasp,$img,$iddm,$ngaynhap,$mota,$idsp){
    if($img!=""){
    $sql="UPDATE sanpham SET tensp='$tensp',
    giasp='$giasp',img='$img',id='$iddm',ngaynhap='$ngaynhap',mota='$mota' WHERE idsp='$idsp'";
    pdo_query($sql);

}else { 
$sql="UPDATE sanpham SET tensp='$tensp',
giasp='$giasp',id='$iddm',ngaynhap='$ngaynhap',mota='$mota' WHERE idsp='$idsp'";
pdo_query($sql);
}
}
?>