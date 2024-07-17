<?php
function pdo_get_connection(){
    $ketnoi="mysql:host=localhost;dbname=namthph38365_wd18319;charset=utf8";
    $username="root";
    $password="";
    $luom= new PDO($ketnoi,$username,$password);
    $luom->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $luom;
}
// Kết nối với database và nhận dữ liệu sau đó thực thi
function  pdo_execute($sql){
    $sql_args =array_slice(func_get_args(),1);
    try{
        $luom=pdo_get_connection();
        $stmt=$luom->prepare($sql);
        $stmt->execute($sql_args);

    }catch (PDOException $e){
        throw $e;

    }
    finally{
        unset($luom);
    }
}
//Trả về full giá trị
function  pdo_query($sql){
    $sql_args =array_slice(func_get_args(),1);
    try{
        $luom=pdo_get_connection();
        $stmt=$luom->prepare($sql);
        $stmt->execute($sql_args);
        $kqua= $stmt->fetchAll();
        return $kqua;

    }catch (PDOException $e){
        throw $e;

    }
    finally{
        unset($luom);
    }
}
// trả về 1 giá trị
function  pdo_query_one($sql){
    $sql_args =array_slice(func_get_args(),1);
    try{
        $luom=pdo_get_connection();
        $stmt=$luom->prepare($sql);
        $stmt->execute($sql_args);
        $kqua= $stmt->fetch(PDO::FETCH_ASSOC);
        return $kqua;

    }catch (PDOException $e){
        throw $e;

    }
    finally{
        unset($luom);
    }
}
?>