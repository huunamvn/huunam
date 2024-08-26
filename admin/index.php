<?php
include('../model/pdo.php');
include('header.php');
include('../model/danhmuc.php');
include('../model/sanpham.php');
include("../model/taikhoan.php");
include("../model/binhluan.php");
if(isset ($_GET['act'])){
    $act=$_GET['act'];
    switch($act){
        case "addloai":
            include "loai/addloai.php";
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
               
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="Thêm thành công";
            }
            break;

            // dakjạkdahksgduýagdjhsagdyhsad
        case "listdm":
            $dsloai=loadall_danhmuc();
            include "loai/list.php";
            break;
        case "xoaloai": 
            if(isset($_GET['id'])&&($_GET['id']>0)){
                delete_danhmuc($_GET['id']);
            }
            
            $dsloai=loadall_danhmuc();
            include "loai/list.php";
             break;
            
            
        case "sualoai":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $suads=load_one_danhmuc($_GET['id']);
            }
            
            include "loai/update.php";
            break;
         case "updatedm":
            include "loai/addloai.php";
            if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id'];
                update_danhmuc($id,$tenloai);
                $thongbao="Cập nhật thành công";
            }
            $dsloai=loadall_danhmuc();
            include "loai/list.php";
             break;
         case "dskh":
            $listtaikhoan=loadall_taikhoan();
            include("taikhoan/list.php");
            break;
            case "dskh":
                $listtaikhoan=loadall_taikhoan();
                include("taikhoan/list.php");
                break;
                case 'xoabl':
                    if (isset($_GET['ma_bl']) && ($_GET['ma_bl'] > 0)) {
                        delete_binhluan($_GET['ma_bl']);
                        header('location:index.php?act=qlbl');
                    }
                    $listbinhluan = loadall_binhluan(0);
                    include "binhluan/qlbl.php";
                    break; 
                
                case 'qlbl':
                    $listbinhluan=admin_loadall_binhluan();
                    include "binhluan/qlbl.php";
                    break;
                    // case "suatk":
                    //     if(isset($_POST['id'])&&($_POST['id']>0)){
                    //         $suatk= load_one_khachhang($id);
                    //     }
                    //     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    //         $id=$_POST['id'];
                    //         $tenkh=$_POST['tenkh'];
                    //         $pass=$_POST['pass'];
                    //         $diachi=$_POST['diachi'];
                    //         $email=$_POST['email'];
                    //         $dienthoai=$_POST['dienthoai'];
                    //         update_taikhoan($tenkh,$pass,$diachi,$email,$dienthoai,$id);
                    //         $thongbao="Cập nhật thành công";
                    //     }
                    //     $listtaikhoan=loadall_taikhoan();
                    //     include "taikhoan/updatetk.php";
                    //      break;
                    case "xoatk": 
                        if(isset($_GET['id'])&&($_GET['id']>0)){
                            delete_khachhang($_GET['id']);
                            header('location:index.php?act=dskh');
                        }
                        $listtaikhoan=pdo_query();
                        include "taikhoan/list.php";
                         break;
                  
                    case 'suabl':
                        $suabl=  admin_edit_binhluan($ma_bl);
                        include "binhluan/qlbl.php";
                        break;
                     
            default:
            include('home.php');
            break;
             // Dành cho sản phẩm
            case "addsp":
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                   
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $img=$_FILES['img']['name'];
                    $target_dir="../uploads/";
                    $target_file=$target_dir.basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        $iddm=$_POST['iddm'];
                        $ngaynhap=$_POST['ngaynhap'];
                        $mota=$_POST['mota'];
                        insert_sanpham($tensp,$giasp,$img,$iddm,$ngaynhap,$mota);
                        // $thongbao="Thêm thành công sản phẩm ";
                        
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }

                    // $iddm=$_POST['iddm'];
                    // $ngaynhap=$_POST['ngaynhap'];
                    // $mota=$_POST['mota'];
                    // insert_sanpham($tensp,$giasp,$img,$iddm,$ngaynhap,$mota);
                    // $thongbao="Thêm thành công";
                }
                $dsloai=loadall_danhmuc();
                include "sanpham/addsp.php";
                break;
               
            case "listsp":
         if(isset($_POST['timkiem'])&& ($_POST['timkiem'])){
            $kyw=$_POST['kyw'];
            $iddm=$_POST['iddm'];

         }else{
            $kyw="";
            $iddm=0;
         }
         $dsloai=loadall_danhmuc();
         $dssp=loadall_sanpham($kyw,$iddm);
                include "sanpham/listsp.php";
                break;
            case "xoasp": 
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_sanpham($_GET['id']);
                    header("location: index.php?act=listsp");
                    
                }
                
                $dssp=loadall_sanpham("",0);
                
                include "sanpham/listsp.php";
                 break;
                
        
            case "suasp":
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    $suasp=load_one_sanpham($_GET['id']);
                }
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $idsp=$_POST['idsp'];
                    $tensp=$_POST['tensp'];
                    $giasp=$_POST['giasp'];
                    $iddm=$_POST['iddm'];
                    $ngaynhap=$_POST['ngaynhap'];
                    $mota=$_POST['mota'];
                    $img=$_FILES['img']['name'];
                    $target_dir="uploads/";
                    $target_file=$target_dir.basename($_FILES['img']['name']);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        //echo "The file ". htmlspecialchars( basename( $_FILES["hinh"]["name"])). " has been uploaded.";
                      } else {
                       // echo "Sorry, there was an error uploading your file.";
                      }
                    update_sanpham($tensp,$giasp,$img,$iddm,$ngaynhap,$mota,$idsp);
                  header('location:index.php?act=listsp');
                        
                }
                $dsloai=loadall_danhmuc();
                include "sanpham/update.php";
                break;
                
                $dssp=loadall_sanpham("",0);
                include "sanpham/listsp.php";
                 break;
        }
       
       
    }else{
        include('home.php');
    }

include("home.php");

include("footer.php");

?>