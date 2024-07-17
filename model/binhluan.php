<?php 
function insert_binhluan($iduser, $idpro, $noidung,$thoigian){
    $sql = "INSERT INTO binh_luan(iduser,idpro,noidung,thoigian) values('$iduser','$idpro','$noidung','$thoigian')";
    pdo_execute($sql);
}
function loadall_binhluan($idpro){
    $sql = "SELECT * FROM binh_luan WHERE idpro='".$idpro."'";
    $listbinhluan = pdo_query($sql);
    return $listbinhluan;
}
function delete_binhluan($id){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=" .$id;
    pdo_execute($sql);
}
function admin_loadall_binhluan(){
  $sql="SELECT * FROM binh_luan JOIN sanpham ON sanpham.idsp=binh_luan.idpro";
  $listbinhluan = pdo_query($sql);
  return $listbinhluan;
}

?>
