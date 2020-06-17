<?php
require_once("classes/dbo.class.php");
$db->session();
$user_id = $_SESSION['user_id'];
$action = $_REQUEST['action'];
if($action == "add")
{
	$product_id = base64_decode($_REQUEST['product']);
	$sel_carts = "SELECT count(*) FROM user_wishlist WHERE user_id = ? AND pro_id = ?";
	$count = $db->count($sel_carts,array($user_id,$product_id));
	if($count == 0)
	{
		$ins_date = date('Y-m-d H:i:s');
		$ins_cart = "INSERT INTO user_wishlist (user_id, pro_id, cr_date) VALUES (?, ?, ?)";
		$insert = $db->dml($ins_cart, array($user_id, $product_id, $ins_date));	
		echo "Successfully Added";
	}
	else
		echo "Already Added";
}
else if($action == "delete")
{
	$wish_id = $_REQUEST['wish_id'];
	$q = "DELETE FROM user_wishlist WHERE id = ?";
	$del_cart = $db->dml($q,array($wish_id));
}
?>