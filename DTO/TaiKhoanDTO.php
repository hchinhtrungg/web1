<?php
class TaiKhoanDTO
{
    var $MaTaiKhoan;
    var $TenDangNhap;
    var $MatKhau;
    var $TenHienThi;
    var $DiaChi;
    var $DienThoai;
    var $Email;
    var $BiXoa;
    var $MaLoaiTaiKhoan;
    public function __construct()
    {
        $this->MaTaiKhoan = 0;
        $this->TenDangNhap = '';
        $this->MatKhau = '';
        $this->TenHienThi = '';
        $this->DiaChi = '';
        $this->DienThoai = '';
        $this->Email = '';
        $this->BiXoa = 0;
        $this->MaTaiKhoan = 0;
    }
}
?>