<?php 
session_start();
include 'Model/login.php';
$lg = new Login();
$lg->Connect();
// $db_lg = $lg->List();
// var_dump($db_lg);

if (isset($_GET['action'])) {
	$Actoin = $_GET['action'];
}
else
{
	$Actoin = NULL;
}
switch ($Actoin) {
	case 'Login':

		if (isset($_POST['Login'])) {
			$ac = 'Login';
			$email = $_POST['Email'];
			$pass = $_POST['Password'];
			$err = '';
			
			$check = $lg->Ckeck_email($email);
			$data = $lg->List_user_to_email($email);
			if($check == 1){
				$passha = password_verify($pass, $data[0]['password']);

				
				if ($pass == $data[0]['password']) {
					$_SESSION['hoten'] = $data;
					header("location: index.php?Controller=Taikhoan&action=Admin");
				}else {
					
					$err = "Sai mật khẩu";
					require_once 'account.php';
				}

			}else{
				$err = "Email không chính xác";
				require_once 'account.php';
			}
		}elseif (isset($_POST['Register'])) {
			$user = $_POST['Username'];
			$email = $_POST['Email'];
			$pass = $_POST['Password'];
			$checkuser = $lg->check_user($user, $email);
			$check = $lg->Ckeck_email($email);

			if ($check == 1) {
				$err = "Email bạn đã đăng ký.!<br/> Hãy nhập email khác.";
				require_once 'account.php';
			}else{
				if ($checkuser !=1 ) {
					//if ($lg->Add()) {
						$tc = 'Đăng ký thành công.!';
						require_once 'account.php';
					//}
				}else{
					$err = "Username bạn đã đăng ký.!<br/> Hãy nhập Username khác.";
					require_once 'account.php';
				}
			}
		}else{
			require_once 'account.php';
		}
		break;
	case 'Chitiet':
		echo "Chi tiet";
		break;
	case 'Admin':
		//print_r($_SESSION['hoten']);
		require_once 'admin/index.php';
		break;
	case 'A':
			mt_srand(100000000);
			$a = mt_rand(0, 1000000000);
			echo $a;
		
		break;
	case 'C':
		echo "C";
		break;
	default:
		require_once 'view/index.php';
		break;
}
?>