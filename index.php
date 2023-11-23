<?php
session_start();
include "view/header.php";
include "model/pdo.php";
include "model/danhmuc.php";
include "model/sanpham.php";
include "model/taikhoan.php";
include "model/global.php";


$spnew=loadall_sanpham_home();
$dst10=loadall_sanpham_top10();

if((isset($_GET['act']))&&($_GET['act']!="")){
$act=$_GET['act'];
switch ($act){
    case 'sanphamct':
        
        if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
            $id=$_GET['idsp'];  
            $onesp=loadone_sanpham($id);
            extract($onesp);
            $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
            include "view/sanphamct.php";

        }else{
            include "view/home.php";
        }
        break;
        
    case 'gioithieu':
        include "view/gioithieu.php";
        break;
    case 'lienhe':
        include "view/lienhe.php";
        break;

        case 'dangnhap': 
            if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                $username=$_POST['username'];
                $pass=$_POST['pass'];
               
                 $checkuser=checkuser($username,$pass);
                 if(is_array($checkuser)){
                    $_SESSION['username']=$checkuser;
                    header('location:index.php');
                    $thongbao="đăng nhập thành côgn thành công"; 
                 }else{
                    header('location:index.php');
                 };
                 
            }
            include "index.php";
            break;
            case 'dangki': 
                if(isset($_POST['dangki'])&&($_POST['dangki'])){
                    $username=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $sdt=$_POST['sdt'];
                   insert_taikhoan($username,$pass,$email,$address,$sdt);
                
                }
                include "view/dangki.php";
                break; 
                case 'quenmk': 
                    if(isset($_POST['quenmk'])&&($_POST['quenmk'])){
                       
                        $email=$_POST['email'];
                       $checkquenmk=checkquenmk($email);
                       if(is_array($checkquenmk)){
                        $thongbao="Mật khẩu của bạn là".$checkquenmk['pass'];
                       }else{
                        $thongbao="không tồn tại";
                       }
                      
                       $thongbao="đăng kí thành công"; 
                    }
                    include "view/quenmk.php";
                    break; 
                case 'edit': 
                    if(isset($_POST['edit'])&&($_POST['edit'])){
                        $username=$_POST['username'];
                        $pass=$_POST['pass'];
                        $email=$_POST['email'];
                        $address=$_POST['address'];
                        $sdt=$_POST['sdt'];
                        $id=$_POST['id'];
                        update($id,$username,$pass,$email,$address,$sdt);
                        $_SESSION=checkuser($username,$pass);
                        header('location:index.php');
                       $thongbao="cập nhật thành công"; 
                    }
                    include "view/edit.php";
                    break; 
                
               
                case 'thoat':
                    session_unset();
                    header('location:index.php');
                    break; 
      
    default:
    include "view/home.php";
    break;
}
}else{
include 'view/home.php';
}
include 'view/footer.php';
?>