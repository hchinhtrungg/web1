<?php
    if(isset($_SESSION['uid']) && $_SESSION['tuid'] == 1)
    {
        if(isset($_GET['a']))
        {
            if($_GET['a'] == 24)
            {
//thuc thi lock hoac unlock cho taikhoan
                if(isset($_GET['mataikhoan']))
                {
                    $taiKhoanBUS = new TaiKhoanBUS();
                    $taiKhoan = $taiKhoanBUS->GetByID($_GET['mataikhoan']);
                    if($taiKhoan != null)
                    {
                        if($taiKhoan->BiXoa == 0)
                        {
                            $taiKhoanBUS->SetDelete($_GET['mataikhoan']);
                            echo '<script> window.location = "index.php?a=5"; </script>';
                        }
                        else
                        {
                            $taiKhoanBUS->UnsetDelete($_GET['mataikhoan']);
                            echo '<script> window.location = "index.php?a=5"; </script>';
                        }
                    }
                    else
                    {
                    }
                }
//thuc thi lock hoac unlock cho loaisanpham
                else if(isset($_GET['maloaisanpham']))
                {
                    $loaiSanPhamBUS = new LoaiSanPhamBUS();
                    $loaiSanPham = $loaiSanPhamBUS->GetByID($_GET['maloaisanpham']);
                    if($loaiSanPham != null)
                    {
                        if($loaiSanPham->BiXoa == 0)
                        {
                            $loaiSanPhamBUS->SetDelete($_GET['maloaisanpham']);
                            echo '<script> window.location = "index.php?a=7"; </script>';
                        }
                        else
                        {
                            $loaiSanPhamBUS->UnsetDelete($_GET['maloaisanpham']);
                            echo '<script> window.location = "index.php?a=7"; </script>';
                        }
                    }
                    else
                    {
                        echo '<script> window.location = "index.php?a=7"; </script>';
                    }
                }
//thuc thi lock hoac unlock cho hangsanxuat
                else if(isset($_GET['mahangsanxuat']))
                {
                    $hangSanXuatBUS = new HangSanXuatBUS();
                    $hangSanXuat = $hangSanXuatBUS->GetByID($_GET['mahangsanxuat']);
                    if($hangSanXuat != null)
                    {
                        if($hangSanXuat->BiXoa == 0)
                        {
                            $hangSanXuatBUS->SetDelete($_GET['mahangsanxuat']);
                            echo '<script> window.location = "index.php?a=8"; </script>';
                        }
                        else
                        {
                            $hangSanXuatBUS->UnsetDelete($_GET['mahangsanxuat']);
                            echo '<script> window.location = "index.php?a=8"; </script>';
                        }
                    }
                    else
                    {
                        echo '<script> window.location = "index.php?a=8"; </script>';
                    }
                }
            }
            else
            {
                echo '<script> window.location = "index.php?a=404"; </script>';    
            }
        }
        else
        {
            echo '<script> window.location = "index.php?a=404"; </script>';
        }
    }
    else
    {
        echo '<script> window.location = "index.php?a=404"; </script>';
    }
?>