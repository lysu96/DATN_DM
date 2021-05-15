<?php 
//require_once '../include/confing.php';
require_once 'include/confing.php';
class Login extends Database
{
	private $tbl = "nguoidung";
	
	function __construct()
	{
		parent:: Connect();
	}

	public function List()
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table";
		return $this->Getdata($sql);
	}
	public function List_user_to_email($email)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email = '$email'";
		return $this->Getdata($sql);
	}
	public function Ckeck_email($email)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE email = '$email'";
		return $this->Num_rows($sql);
	}
	public function check_user($user)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE username = '$user'";
		return $this->Num_rows($sql);
	}
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM $table WHERE idsp=$id";
		return $this->Getdata($sql);
	}
	public function List_id_ha($id)
	{
		$table = $this->tbl;
		$sql = "SELECT * FROM hinhanh, sanpham WHERE hinhanh.idsp=sanpham.idsp AND hinhanh.idsp=$id";
		return $this->Getdata($sql);
	}
	public function Edit($id, $ten_sp, $hinhanh_sp, $mau_sp, $chitiet_sp, $so_luong, $da_ban, $gia_sp, $khuyenmai_1, $khuyenmai_2, $ma_dm, $ngaycapnhap, $trang_thai)
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET tensp='$ten_sp', hinhanhsp='$hinhanh_sp', mausp='$mau_sp', chitietsp='$chitiet_sp', soluong='$so_luong', daban='$da_ban', gia='$gia_sp', khuyenmai1='$khuyenmai_1', khuyenmai2='$khuyenmai_2', madm='$ma_dm', ngaycapnhap='$ngaycapnhap', trangthai='$trang_thai' WHERE idsp=$id";
		return $this->Execute($sql);
	}
	public function Add($ten_sp, $hinhanh_sp, $mau_sp, $chitiet_sp, $so_luong, $da_ban, $gia_sp, $khuyenmai_1, $khuyenmai_2, $ma_dm, $ngaycapnhap, $trang_thai)
	{
		$table = $this->tbl;
		$sql = "INSERT INTO $table(idsp, tensp, hinhanhsp, mausp, chitietsp, soluong, daban, gia, khuyenmai1, khuyenmai2, madm, ngaycapnhap, trangthai) VALUES (NULL,'$ten_sp', '$hinhanh_sp', '$mau_sp', '$chitiet_sp', '$so_luong', '$da_ban', '$gia_sp', '$khuyenmai_1', '$khuyenmai_2', '$ma_dm', '$ngaycapnhap', '$trang_thai')";
		return $this->Execute($sql);
	}
	public function Delete($id)
	{
		$table = $this->tbl;
		$sql = "DELETE FROM $table WHERE idsp=$id";
		return $this->Execute($sql);
	}
}


 ?>