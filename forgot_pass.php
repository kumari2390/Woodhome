<?php require_once("classes/dbo.class.php");
// $db->session();
if(isset($_REQUEST['btnForgot']))
{
	//print_r($_REQUEST);die;
	$forgot_email = $_REQUEST['forgot_email'];
	$sel_customer = "SELECT count(*) FROM customer_info WHERE email = ?";
	$count = $db->count($sel_customer,array($forgot_email));
	if($count > 0)
	{
		$sel_info = "SELECT customer_id, name, google_id, facebook_id FROM customer_info WHERE email = ?";
		$all_infos = $db->get($sel_info, array($forgot_email));
		//print_r($all_infos);die;
		$customer_id = $all_infos[0]['customer_id'];
		$name = $all_infos[0]['name'];
		if($all_infos[0]['google_id'] != "" || $all_infos[0]['facebook_id'] != "")
		{
			echo '<script>alert("Please Choose Social Media Login.");window.location="sign-in.php";</script>';
		}
		else
		{
			$headers  = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
            $headers .= 'From: The CBCR <ashishborana009@gmail.com>' . "\r\n";
            $subject =  "Forgot Password - The Cbcr";
            $desc = 'Hi '.$name.',<br><a href="http://thecbcr.com/password-change.php?cid='.base64_encode($customer_id).'">Password Link</a>';
            if(mail($forgot_email, $subject, $desc, $headers))
            {
            	echo '<script>alert("Please check your email. We are sent the Link");window.location="sign-in.php";</script>';
            }
		}
	}
	else
	{
		echo '<script>alert("Email not Available. Please Sign up First");window.location="sign-in.php";</script>';
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	
<?php include("inc/head.inc.php");?>
    <body class="cnt-home">
<?php include("inc/nav.inc.php");?>
<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.html">Home</a></li>
				<li class='active'>Forgot Password</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="track-order-page">
			<div class="row">
				<div class="col-md-12">
	<h2 class="heading-title">Forgot Password</h2>
	<span class="title-tag inner-top-ss">Please Enter Your Email Address to get resset your password</span>
	<form method="post" class="register-form outer-top-xs" role="form">
		<div class="form-group">
		    <label class="info-title" for="exampleBillingEmail1">Email Id</label>
		    <input type="email" class="form-control unicase-form-control text-input" name="forgot_email" id="exampleBillingEmail1" >
		</div>
	  	<button name="btnForgot" type="submit" class="btn-upper btn btn-primary checkout-page-button">Submit</button>
	</form>	
</div>			</div><!-- /.row -->
		</div><!-- /.sigin-in-->
		<!-- ============================================== BRANDS CAROUSEL ============================================== -->
</div><!-- /.container -->
</div><!-- /.body-content -->
<!-- ============================================================= FOOTER ============================================================= -->
<?php include("inc/footer.inc.php");?>
<?php include("inc/footerscript.inc.php");?>
<!-- ============================================================= FOOTER : END============================================================= -->

</body>

</html>
