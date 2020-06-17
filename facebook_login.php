<?php
include("classes/dbo.class.php");
$email = $_REQUEST['all_datas']['email'];

if($email == '')
{
	echo "No";
	exit();
}
else
{
	$sel_user = "SELECT count(*) FROM customer_info WHERE email = ?";
	$count = $db->count($sel_user,array($email));
	if($count > 0)
	{
		$user_fetch = "SELECT * FROM customer_info WHERE email = ?";
		$user_row = $db->get($user_fetch,array($email));
		$user_f = $user_row[0];
		$_SESSION['user_email'] = $user_f['email'];
		$_SESSION['user_id'] = $user_f['customer_id'];
		$_SESSION['user_image'] = $user_f['customer_image'];

		$timestamp = date("Y-m-d H:i:s");
		$update="UPDATE `customer_info` SET created_date=? WHERE `email`=? AND customer_id=?";
		$update_row=$db->update($update,array($timestamp,$email,$_SESSION['id']));
		echo "already";
		exit();
	}
	else
	{
		$facebook_id = $_REQUEST['all_datas']['id'];
		$first_name = $_REQUEST['all_datas']['first_name'];
		$last_name = $_REQUEST['all_datas']['last_name'];
		$full_name=$first_name . ' ' . $last_name;
		
		$insert_query =  "INSERT INTO customer_info(`name`, `email`, `status`,`facebook_id`) values(?, ?,?,?)";
		$insert_row = $db->dml($insert_query,array($full_name,$email,1,$facebook_id));
		$last = $db->lastID();
		
		$_SESSION['user_id'] = $last;
		$user_fetch = "SELECT * FROM customer_info WHERE customer_id = ?";
		$user_row = $db->get($user_fetch,array($last));
		$user_f = $user_row[0];
		$_SESSION['user_email'] = $user_f['email'];
		$_SESSION['user_image'] = $user_f['customer_image'];
		echo "Yes";
		exit();
	}
}
?>