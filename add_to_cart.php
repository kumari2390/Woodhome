<?php 
require_once("classes/dbo.class.php");
$db->session();
if(isset($_REQUEST['action']) && $_REQUEST['action'] != "") 
{
	$quantity = 1;	
}
else
	$quantity = $_REQUEST['quantity'];

$size = "kg";
if(isset($_REQUEST['size']) && $_REQUEST['size'] != "") $size = $_REQUEST['size'];

$product_id = base64_decode($_REQUEST['product']);
$redirect_page = "";
$user_id = $_SESSION['user_id'];
$sel_carts = "SELECT count(*) FROM user_cart WHERE user_id = ? AND pro_id = ?";
$count = $db->count($sel_carts,array($user_id,$product_id));
if($count == 0)
{
	$ins_date = date('Y-m-d H:i:s');
	$ins_cart = "INSERT INTO user_cart (user_id, pro_id, pro_qty, size, cr_date) VALUES (?, ?, ?, ?, ?)";
	$insert = $db->dml($ins_cart, array($user_id, $product_id, $quantity, $size, $ins_date));	
}
else
{
	$select = "SELECT pro_qty FROM user_cart WHERE user_id = ? AND pro_id = ?";
	$qty_data = $db->get($select, array($user_id, $product_id));
	$qty_data_row = $qty_data[0]['pro_qty'];
	$upd_qty = $qty_data_row + $quantity;
	$upd_cart = "UPDATE user_cart SET pro_qty = ?, size = '$size' WHERE user_id = ? AND pro_id = ?";
	$update = $db->update($upd_cart, array($upd_qty, $size, $user_id, $product_id));
}//die;
if(isset($_REQUEST['action']) && $_REQUEST['action'] == "index") $redirect_page = "index.php";
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "wishlist") $redirect_page = "my-wishlist.php";
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "search") echo $redirect_page = "search.php?search=".$_REQUEST['search'];
else if(isset($_REQUEST['action']) && $_REQUEST['action'] == "category")
{
	$sel_cats = "SELECT category_id, sub_category_id FROM products WHERE product_id = $product_id";
	$cat_datas = $db->get($sel_cats);
	$redirect_page = "category.php?cat_id=".base64_encode($cat_datas[0]['category_id']);
	if($cat_datas[0]['sub_category_id'] > 0) $redirect_page .= "&sub_cat=".base64_encode($cat_datas[0]['sub_category_id']);
?>
	<script type="text/javascript">//window.history.back();</script>
<?php
}
//echo $redirect_page;die;
//echo '<script>window.location='.$redirect_page.'</script>';
if(isset($_REQUEST['action']) && $_REQUEST['action'] != '') header('Location:'.$redirect_page);
?>