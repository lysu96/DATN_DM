<?php 
if (isset($_GET['action'])) {
	    		$action = $_GET['action'];
	    	}
	    	else
	    	{
	    		$action = NULL;
	    	}
	    	switch ($action) {
	    		case 'add':
	    			require_once '../view/admin/add-products.php'; 
	    		break;
	    		case 'edit':
	    			if (isset($_GET['id'])) {
	    				$id = $_GET['id'];
	    			}
	    			echo "sửa: ".$id;
	    		break;
	    		case 'delete':
	    			if (isset($_GET['id'])) {
	    				$id = $_GET['id'];
	    			}
	    			echo "Xóa: ".$id;
	    		break;
	    		case 'list':
	    			require_once '../view/admin/list-producs.php';
	    			break;
	    		default:
	    			require_once '../view/admin/list-producs.php';
	    			break;
	    	}

 ?>