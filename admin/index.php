<?php
   include "header.php";
   include  "../model/pdo.php";
   include "../model/danhmuc.php";
   include "../model/sanpham.php";
   include "../model/taikhoan.php";
   include "../model/binhluan.php";
   include "../model/cart.php";
   $dsdm=loadall_danhmuc();
   
//controller
   if(isset($_GET['act'])){
      $act=$_GET['act'];
      switch($act){

         case 'sanpham':

            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
               $sky=$_POST['kyw'];
            }else{
               $kyw="";
            }

            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
               $iddm=$_GET['iddm'];
            }else{
               $iddm=0;
            }
            $dssp=loadall_sanpham($kyw,$iddm);
            $tendm=load_ten_dm($iddm);
            include "../model/sanpham.php";
            break;

         case 'sanphamct':
            
            if(isset($_GET['idsp']) &&($_GET['idsp']>0)){
               $id=$_GET['idsp'];

               $onesp=loadone_sanpham($id);
               extract($onesp);
               $sp_cung_loai=load_sanpham_cungloai($id,$iddm);
               include "sanpham/sanphamct.php";
            }else{
               include "home.php";
            }
break;

           case 'adddm':
           
            //kiểm tra xemnguoiwf dùngcó ấn vào add không
            if(isset($_POST['themmoi']) &&($_POST['themmoi'])){

            
            $tenloai=$_POST['tenloai'];
            // $sql="insert into danhmuc(name) valuse('$tenloai')";
            // pdo_execute($sql);
            insert_danhmuc($tenloai);
            $thongbao="thêm thành công";
            }
            include "danhmuc/add.php";
            break;
             case 'lisdm':
               $lisdanhmuc=loadall_danhmuc();
               
               include "danhmuc/lis.php";
               
            break;
             case 'xoadm':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                  delete_danhmuc($_GET['id']);
               }
               $lisdanhmuc=loadall_danhmuc();
               include "danhmuc/lis.php";
               
            break;
            case 'suadm':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                  $dm=loadone_danhmuc($_GET['id']);
               }
               include "danhmuc/update.php";
               break;

               case 'updatedm':
                  if(isset($_POST['capnhat']) &&($_POST['capnhat'])){

            
                     $tenloai=$_POST['tenloai'];
                     $id=$_POST['id'];
                     update_danhmuc($id,$tenloai);
                     $thongbao="cập nhật thành công";
                  }
                  $lisdanhmuc=loadall_danhmuc();
                  include "danhmuc/lis.php";
                  
               break;
               //sản phẩm
               case 'addsp':
           
                  //kiểm tra xemnguoiwf dùngcó ấn vào add không
                  if(isset($_POST['themmoi']) &&($_POST['themmoi'])){
                     $iddm=$_POST['iddm'];
                     $ten=$_POST['tensp'];
                   $gia=$_POST['gia'];
                   $mota=$_POST['mota'];
                   $filename=$_FILES['img']['name'];
                   $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                  //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
                } else {
                 // echo "Sorry, there was an error uploading your file.";
                }
                  insert_sanpham($ten,$gia,$filename,$mota,$iddm);
                  $thongbao="thêm thành công";
                  }
                  $lisdanhmuc=loadall_danhmuc();
                  include "sanpham/add.php";
                  break;
                   case 'lissp':
                      if(isset($_POST['ok'])&&($_POST['ok'])){
                     
                      $kyw=$_POST['kyw'];
                      $iddm=$_POST['iddm'];
                      }else{
                        $kyw='';
                      $iddm=0;
                      }
                     $lisdanhmuc=loadall_danhmuc();
                     $lissanpham=loadall_sanpham($kyw,$iddm);
                     include "sanpham/list.php";
                     
                  break;
                   case 'xoasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        delete_sanpham($_GET['id']);
                     }
                     $lissanpham=loadall_sanpham("",0);
                     include "sanpham/list.php";
                     
                  break;
                  case 'suasp':
                     if(isset($_GET['id'])&&($_GET['id']>0)){
                        $sanpham=loadone_sanpham($_GET['id']);
                     }
                     $lisdanhmuc=loadall_danhmuc();
                     include "sanpham/update.php";
                     break;
      
                     case 'updatesp':
                        if(isset($_POST['capnhat']) &&($_POST['capnhat'])){
      
                        $iddm=$_POST['iddm'];
                           $tensp=$_POST['tensp'];
                           $id=$_POST['id'];
                           $price=$_POST['price'];
                          $mota=$_POST['mota'];
                              $img=$_FILES['img']['name'];
                         $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                  //  "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["nechoame"])). " has been uploaded.";
                } else {
                 // echo "Sorry, there was an error uploading your file.";
                }
                           update_sanpham($iddm,$id,$tensp, $price,$mota,$img);
                           $thongbao="cập nhật thành công";
                        }
                        $lisdanhmuc=loadall_danhmuc();
                        $lissanpham=loadall_sanpham("",0);
                        include "sanpham/list.php";
                        
                     break;

                     case 'dskh':
                        $listk=loadall_taikhoan();
                        include "taikhoan/list.php";
                        break; 
   // 
            case 'dsbl':
            $listbinhluan = loadbinhluan();
            include "./binhluan/list.php";
            break;

            // case 'suabl':
            //     if (isset($_GET['id']) && ($_GET['id'] > 0)) {
    
            //         $binhluan = loadone_binhluan($_GET['id']);
            //     }
            //     $binhluan = loadall_binhluan();
            //     include "binhluan/update.php";
            //     break;

            case 'xoabl':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                  delete_binhluan($_GET['id']);
               }
               $listbinhluan=loadbinhluan();
               include "binhluan/list.php";
               
            break;
            case 'suabl':
               if(isset($_GET['id'])&&($_GET['id']>0)){
                  $bl=loadone_binhluan($_GET['id']);
               }
               include "binhluan/update.php";
               break;

               case 'updatebl':
                  if(isset($_POST['sua']) &&($_POST['sua'])){

                     $noidung=$_POST['noidung'];
                     $iduser=$_POST['iduser'];
                     $idpro=$_POST['idpro'];
                     $id=$_POST['id'];
                     $ngaybinhluan=$_POST['ngaybinhluan'];
                     update_binhluan($id,$noidung,$iduser,$idpro,$ngaybinhluan);
                     $thongbao="cập nhật thành công";
                  }
                  $listbinhluan=loadbinhluan();
                  include "binhluan/list.php";
               break;

                
                case 'thongke':
                  $listthongke=loadall_thongke();
                  include "thongke/list.php";
                  break;
                     

            // default: 
            // include "home.php";
            // break;
           
            // case: "size":

      }
   }else{

   
   include "home.php";
   include "footer.php";
   }


  
?>