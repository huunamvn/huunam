<!-- $luom->setAttribute( PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); -->
<?php
SESSION_start();
include('model/pdo.php');
include('model/danhmuc.php');
include('model/sanpham.php');
include('view/header.php');
include('model/taikhoan.php');
include('global.php');
$dsdm=loadall_danhmuc();
$spnew=loadall_sanpham_home1();
$dstop10=loadall_sanpham_top10();

if(isset($_GET['act'])&& ($_GET['act']!="")){
    $act=$_GET['act'];
    switch($act){
        case 'sanpham':
      if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
        $kyw=$_POST['kyw'];

      }else{
        $kyw="";
      }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
               
                $iddm=$_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tenloai=load_ten_danhmuc($iddm);
            include('view/sanpham.php');
            break;
        case 'chitietsp':
            
            if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
               
                $id=$_GET['idsp'];
                $onesp=load_one_sanpham($iddm);
                
                extract($onesp);
                $iddm=$_GET['id'];
                
                $spkhac=load_sanpham_cungloai($iddm);
                include('view/chitietsp.php');

            }else{
                include('view/home.php');
            }
            $onesp=load_one_sanpham($id);
            include('view/chitietsp.php');
            break;
            case 'dangki':
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $pass=$_POST['pass'];
                    $tenkh=$_POST['tenkh'];
                    $email=$_POST['email'];
                   
                    insert_taikhoan($pass,$tenkh,$email);
                    $thongbao="Đã đăng kí thành công vui lòng đăng nhập lại";
                }
                include('view/taikhoan/dangki.php');
                break;
                case 'dangnhap':
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $pass=$_POST['pass'];
                        $tenkh=$_POST['tenkh'];
                      $checkuser=checkuser($tenkh,$pass);
                      if(is_array($checkuser)){
                        $_SESSION['tenkh']=$checkuser;
                        header("location:index.php");
                        
                      }else{
                            $thongbao="Tài khoản không tồn tại";
                      }
                    }
                    include('view/taikhoan/dangki.php');
                    break;
                    case 'edit_taikhoan':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $pass=$_POST['pass'];
                            $tenkh=$_POST['tenkh'];
                            $email=$_POST['email'];
                            $diachi=$_POST['diachi'];
                            $dienthoai=$_POST['dienthoai'];
                            $id=$_POST['id'];
                            update_taikhoan($id,$tenkh,$pass,$diachi,$email,$dienthoai);
                            $_SESSION['tenkh']=checkuser($tenkh,$pass);
                            // header("location: index.php?act=edit_taikhoan");
                            $thongbao='Cập nhật tài khoản thành công';
                        }
                        include('view/taikhoan/edit_taikhoan.php');
                        break;
                        case 'quenmk':
                            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                                $email=$_POST['email'];
                               
    
                               $checkemail=checkemail($email);
                               if(is_array($checkemail)){
                                    $thongbao="Mật khẩu của bạn là : ".$checkemail['pass'];
                               }else{
                                    $thongbao="Email này không tồn tại";
                               }
                            }
                            include('view/taikhoan/quenmk.php');
                
                            break;
            case 'thoat':
                    session_unset();
                    header("location:index.php");
                    break;
            case 'gioithieu':
                    include('view/gioithieu.php');
                    break;
           
            case 'lienhe':
                    include('view/lienhe.php');
                    break;
            case 'gopy':
                include('view/gopy.php');
                break;
             case 'hoidap':
                    include('view/hoidap.php');
                    break;
            default:
                    include('view/home.php');
                    break;
                }
            }else{
                include('view/home.php');
            }

        include('view/footer.php');

?>