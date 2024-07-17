<?php
function insert_danhmuc($tenloai){
    $sql="insert into loaihang(tenloai) values ('$tenloai')";
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM loaihang where id=".$id;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="SELECT *FROM loaihang order by id desc";
    $dsloai=pdo_query($sql);
    return $dsloai;
}
function load_one_danhmuc($id){
    $sql="SELECT * FROM loaihang where id=".$id;
    $suads=pdo_query_one($sql);
return $suads;
}
function update_danhmuc($id,$tenloai){
    $sql="update loaihang set tenloai='".$tenloai."' where id=".$id ;
    pdo_execute($sql);

}

?>