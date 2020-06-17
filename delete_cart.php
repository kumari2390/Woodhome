<?php
require_once("classes/dbo.class.php");
$db->session();
if(!isset($_REQUEST['action']))
{
	$del_id = base64_decode($_REQUEST['cart_id']);
	$q = "DELETE FROM user_cart WHERE id = ?";
	$del_cart = $db->dml($q,array($del_id));
	?>
	<script type="text/javascript">window.location = "shopping-cart.php";</script>
<?php
}
else
{
	$del_id = base64_decode($_REQUEST['cart_id']);
	$q = "DELETE FROM user_cart WHERE id = ?";
	$del_cart = $db->dml($q,array($del_id));
}