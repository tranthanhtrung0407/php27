<?php 
	$mod='';
	$act='';

	$mod=(isset($_GET['mod'])?$_GET['mod']:'home');
	$act=(isset($_GET['act'])?$_GET['act']:'error');

	switch ($mod) {
		case 'category':
			require_once('controllers/CategoryController.php');
			$controller = new CategoryController();
			switch ($act) {
				case 'list':				
					$controller->list();
					break;
				case 'detail':				
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "error!!!";
					break;
			}
			break;
		case 'post':
			require_once('controllers/PostController.php');
			$controller = new PostController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'detail':				
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "error!!!";
					break;
			}
			break;
		case 'user':
			require_once('controllers/UserController.php');
			$controller = new UserController();
			switch ($act) {
				case 'list':
					$controller->list();
					break;
				case 'detail':				
					$controller->detail();
					break;
				case 'add':
					$controller->add();
					break;
				case 'edit':
					$controller->edit();
					break;
				case 'delete':
					$controller->delete();
					break;
				default:
					echo "error!!!";
					break;
			}
			break;
		default:
			echo "error!!!";
			break;
	}
 ?>