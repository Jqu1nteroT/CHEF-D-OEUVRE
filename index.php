<?php 


$page = !empty($_GET['blog'])?$_GET['blog'] : 'default';

require_once 'view/header.php';

switch ($page) {
	case 'editor':
		require_once 'controller/editor.php';
		break;
	case 'access':
		require_once 'controller/access.php';
		break;
	
	default:
		require_once'controller/access.php';
		break;
}


require_once 'view/footer.php';
?>
