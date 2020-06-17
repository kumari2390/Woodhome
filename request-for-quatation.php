
<?php require_once("classes/dbo.class.php");
if(isset($_REQUEST['resuest']))
{
	$user_id = $_SESSION['user_id'];
	$name = $_REQUEST['name'];
	$contact = $_REQUEST['contact'];
	$email = $_REQUEST['email'];
	$product_name = $_REQUEST['product_name'];
	$quantity = $_REQUEST['quantity'];
	$city = $_REQUEST['city'];
	$state = $_REQUEST['state'];
	$country = $_REQUEST['country'];
	$address = $_REQUEST['address'];
	$product_reuirement = $_REQUEST['product_reuirement'];
	$cr_date = date('Y-m-d H:i:s');
	$sel_bo = "SELECT * FROM bulk_order WHERE user_id = ? AND product_name = ?";
	$bo_count = $db->count($sel_bo, array($user_id, $product_name));
	if($bo_count == 0)
	{
		$vendor_qry = "INSERT INTO bulk_order (user_id, name, contact, email, product_name, quantity, city, state, country, address, product_reuirement, created_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$ins_vendor = $db->dml($vendor_qry, array($user_id, $name, $contact, $email, $product_name, $quantity, $city, $state, $country, $address, $product_reuirement, $cr_date));
		echo '<script>alert("Bulk Order Successfully Ordered. The CBCR Team will contact you shortly");</script>';
	}
	else
	{
		echo '<script>alert("You are already Bulk Ordered this Product.");</script>';
	}	
}
?>

<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:56:19 GMT -->

<?php include("includes/head.php"); ?>

<body>

     <?php include("includes/header.php"); ?> 



		



  <!-- Breadcrumbs Area Start -->
        <div class="breadcrumbs-area">
            <div class="container">
                <ul class="breadcrumbs">
                   <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                    <li class="active">Request For Quatation</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs Area End -->
        		
        <!-- Contact Area Area Start -->
		<div class="section-padding-sm">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
                        
                        <div class="contact-wrap" style="background-color:#f2f2f2">
                            <h5 class="title">Request For Quatation For Bulk Order</h5>
                            <form class="" method="post" role="form" id="">
                                <div class="row mb-n20">
                                    
                                    <div class="col-md-6 col-12 mb-20">
                                        <div class="row mb-n20">
                                            
                                            <div class="col-12 mb-20">
                                                <label>Name</label>
                                                <input type="text" name="name" class="form-control" id="form">
												
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <label>Contact Number</label>
                                                <input type="text" name="contact" class="form-control" id="form">
                                            </div>
											  <div class="col-12 mb-20">
                                                <label>Email Address</label>
                                                <input type="email" name="email" class="form-control" id="form" >
                                            </div>
												  <div class="col-12 mb-20">
                                                <label>Product Name</label>
                                                <input type="text" name="product_name"class="form-control" id="form">
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <label>Quantity</label>
                                          <input type="text" name="quantity"class="form-control" id="form">
                                            </div>
											<div class="col-12 mb-20">
                                                <label>City</label>
                                                <input type="text" name="city"class="form-control" id="form">
                                            </div>
											 <div class="col-12 mb-20">
                                                <label>State</label>
                                                <input type="text" name="state"class="form-control" id="form">
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                     <div class="col-md-6 col-12 mb-20">
                                        <div class="row mb-n20">
                                            
                                            
                                            
                                           
											  <div class="col-12 mb-20">
                                                <label>Country</label>
                                                <input type="text" name="country"class="form-control" id="form">
                                            </div>
												  <div class="col-12 mb-20">
                                                <label>Address</label>
                                                 <textarea   name="address"class="form-control" id="form"></textarea>
                                            </div>
                                            
                                            <div class="col-12 mb-20">
                                                <label>Product Requirement Details</label>
                                              
                                            <textarea   name="product_reuirement"class="form-control" id="form"></textarea>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                               <div class="col-md-12 outer-bottom-small m-t-20">
							     <?php if(isset($_SESSION['user_id']) && $_SESSION['user_id'] > 0){?>
                                            <input type="submit" class="btn-upper btn btn-primary" name="resuest" value="Request">
                                            <?php } else {?>
                                  <button type="button" onclick="show_msg();" class="btn-upper btn btn-primary checkout-page-button" name="resuest" value="Request">Request</button>
                                   <?php } ?>
						                 </div>
                                     
                                </div>
								
                            </form>
                            <p class="form-message"></p>
                        </div>
                        
					</div>
				</div>
			</div>
		</div>
        <!-- Contact Area Area End -->
		
		
<?php include("includes/footer.php"); ?>
 
  <script>
                    function show_msg()
                    {
                    	alert("Please login it first.");
                    	window.location = "sign-in.php";
                    }
                    </script>

          <script type="text/javascript">
              $(".request").on("click",function(event){
              event.preventDefault();
              // debugger;
              var datas = $("#request_form").serialize();
              console.log(datas);
              $.ajax({
                      type: "POST",
                      url: "process_request.php",
                      data:datas,
                      success: function(data){
                    console.log(data);
                  // snackbar(data);
                  // $("#request_form").trigger("reset");
                  // window.location ="";
                }
                  });
            });
          </script>
		 <?php include("includes/scripts.php"); ?> 
</body>

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:57:30 GMT -->

</html>