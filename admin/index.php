<?php require_once 'view/admin/header-admin.php'; ?>
    	<?php 
	    	if (isset($_GET['hd'])) {
	    		$hd = $_GET['hd'];
	    	}
	    	else
	    	{
	    		$hd = NULL;
	    	}
	    	switch ($hd) {
	    		case 'donhang':
	    			$muc = "Đơn hàng";
	    			require_once 'view/admin/Breadcrumbs.php';
	    			echo "đơn hàng";
	    			break;
	    		case 'sanpham':
	    			$muc = "Sản phẩm";
	    			require_once 'view/admin/Breadcrumbs.php';
	    			require_once 'admin-products.php';
	    			break;
	    		case 'nguoidung':
	    			$muc = "người dùng";
	    			require_once 'view/admin/Breadcrumbs.php';
	    			echo "Người dùng";
	    			break;
	    		case 'hinhanh':
	    			$muc = "Hình ảnh";
	    			require_once 'view/admin/Breadcrumbs.php';
	    			echo "Hình ảnh";
	    		break;
	    		case 'bieudo':
	    			$muc = "Biểu đồ";
	    			require_once 'view/admin/Breadcrumbs.php';
	    			require_once 'view/admin/area-chart-example.php';
	    			require_once 'view/admin/bar-pie-chart-example.php';;
	    		break;
	    		case 'thongke':
	    			echo "Thống kê";
	    		break;
	    		case 'chitiethoadon':
	    			echo "Chi tiết hóa đơn";
	    		break;
	    		default:

	    		// <!-- Icon Cards-->
	    		//	require_once 'view/admin/icon-cards.php';

	    		// <!-- Area Chart Example-->
	    		//	require_once 'view/admin/area-chart-example.php';

	    		// <!-- DataTables Example -->
	    			//require_once '../view/admin/list-producs.php';
	    			break;
	    	}

    	 ?>   
        

<?php require_once 'view/admin/footer-admin.php'; ?>