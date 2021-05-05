<?php 
require_once 'include/confing.php';

/**
 * 
 */
class Hinhanh extends Database
{
	private $tbl = "hinhanh";
	
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
	public function List_id($id)
	{
		$table = $this->tbl;
		$sql = "SELECT urlhinhanh FROM hinhanh, sanpham WHERE hinhanh.idsp=$id";
		return $this->Getdata($sql);
	}
	public function Edit($id, $id_sp, $url_hinhanh)
	{
		$table = $this->tbl;
		$sql = "UPDATE $table SET idsp='$id_sp', urlhinhanh='$url_hinhanh' WHERE ida=$id";
		return $this->Execute($sql);
	}
	public function Add($id_sp, $url_hinhanh)
	{
		$table = $this->tbl;
		$sql = "INSERT INTO $table(ida, idsp, urlhinhanh) VALUES (NULL,'$id_sp','$url_hinhanh'))";
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