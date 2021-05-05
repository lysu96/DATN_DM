
<?php 
//require_once 'include/confing.php';
// require_once '../include/confing.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_dongho";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// mysqli_close($conn);
$sql = "SELECT * FROM sanpham";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  	echo "<pre>";
  	print_r($row);
    // echo "id: " . $row["idsp"]. " - Tên sản phẩm: " . $row["tensp"]. "<br>". " Chi tiết: " . $row["chitiet"]. "<br>";
  }
} else {
  echo "0 results";
}
 ?>