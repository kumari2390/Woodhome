<?php require_once("classes/dbo.class.php");?>

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
            <li class="active">Login</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs Area End -->
<div class="container">
    <div class="contact-page">
        <div class="row" style="padding-bottom: 25px;">
            <div class="col-md-6 col-12 mb-20">
                <div class="col-sm-12" style="margin-top: 27px; padding-top:16px; background-color:#f2f2f2; border-radius:5px; padding-right:24px;">
                    <div class="col-md-12 contact-title">
                        <h3>Sign in</h3>
						<h5>Hello, Welcome to your account.</h5>
							<div class="social-sign-in outer-top-xs">
		             <a href="#" onclick="fbLogin();" class="facebook-sign-in"><i class="fa fa-facebook-official" aria-hidden="true"></i> &nbsp Sign In with Facebook</a>
			            <?php //require_once("google.php");?>
						</div>
                    </div><br>
				
					<form  method="POST" action="process_login.php">
                   	 <div class="row mb-n20">

                        <div class="col-12 mb-20">
                            <label><b>Email Address</b><span style="color:red;">*</span> </label>
                            <input "email" name="email"class="form-control" id="form">

                        </div>

                        <div class="col-12 mb-20">
                            <label><b>Password</b><span style="color:red;">*</span> </label>
                            <input type="password" name="password" id="exampleInputPassword1" class="form-control" id="form">
                        </div>
                        <div class="col-12 mb-20">
                       	<div class="radio outer-xs">
		  	             <label>
		    	           <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">&nbsp Remember me!
		  	            </label>
		  	             <a href="forgot_pass.php" class="forgot-password pull-right">Forgot your Password?</a>
		                     </div>
                        </div>
                        

                        <div class="col-12 mb-20">
                            <button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
                        </div>
						</div>
						</form>
                    
                </div>
            </div>
               <div class="col-md-6 col-12 mb-20">
                <div class="col-sm-12" style="margin-top: 27px; padding-top:16px; background-color:#f2f2f2; border-radius:5px; padding-right:24px;">
                    <div class="col-md-12 contact-title">
                        <h3>Create a new account</h3>
						<h5>Create your new account.</h5>
					
                    </div><br>
                    
					<form class="register-form outer-top-xs" role="form"  >
                      <div class="row mb-n20">
                        <div class="col-12 mb-20">
                            <label><b>Email Address</b><span style="color:red;">*</span> </label>
                            <input type="email" name="email" class="form-control" id="form">
                        </div>
						<div class="col-12 mb-20">
                            <label><b>Phone Number</b><span style="color:red;">*</span> </label>
                            <input type="text" name="phone" class="form-control" id="form">
                        </div>

                        <div class="col-12 mb-20">
                            <label><b>Password</b><span style="color:red;">*</span> </label>
                            <input type="password" name="password" class="form-control" id="form">
                        </div>
                      
                        
                      <div class="col-12 mb-20" style="padding-top: 12px;">
                         <button type="submit" id="sign_up" class="btn-upper btn btn-primary checkout-page-button" name="sign_up" >Sign up</button>
                        </div>
						
						</form>
                    
                </div>
            </div>
              </div>          
              
             
           
	</div>
	</div>
	</div>
	  
                <!-- /.contact-page -->

<?php include("includes/footer.php");
include("includes/scripts.php"); 
?>
<script>
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
	  xmlhttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
	  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	//window.fbAsyncInit = function() {
	function get_fb_info() {
		// FB JavaScript SDK configuration and setup
		FB.init({
		  appId      : '470637436773597', // FB App ID
		  cookie     : true,  // enable cookies to allow the server to access the session
		  xfbml      : true,  // parse social plugins on this page
		  version    : 'v2.8' // use graph api version 2.8
		});
		
		// Check whether the user already logged in
		FB.getLoginStatus(function(response) {
			if (response.status === 'connected') {
				//display user data
				//getFbUserData();
			}
		});
	}  

	// Load the JavaScript SDK asynchronously
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	// Facebook login with JavaScript SDK
	function fbLogin() {
		get_fb_info();
		
		FB.login(function (response) {
			if (response.authResponse) {
				// Get and display the user profile data
				getFbUserData();
			} else {
			   // document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
			}
		}, {scope: 'email'});
	}

	// Fetch the user profile data from facebook
	function getFbUserData(){
		FB.api('/me', {locale: 'en_US', fields: 'id,first_name,last_name,email,link,gender,locale,picture'},
			function (response) {
				$.ajax({
					type: "POST",
					url: "facebook_login.php",
					data:{'all_datas':response},
					success: function(result){
						// console.log($.trim(result));
						if(result == "No")
						{
							alert("Please Update Your email id in Facebook");
							//window.location = "";
						}
						else if(result = "Yes")
						{
							alert("Successfully Logged In");
							window.location = "index.php";
						}
						else if(result = "already")
						{
							alert("Successfully Logged In!...");
							window.location = "index.php";
						}
						else
						{
							alert("Please try again!...");
							window.location = "sign-in.php";
						}                
					}
				});
			}			
		
		);
	}

	// Logout from facebook
	function fbLogout() {
		FB.logout(function() {
			document.getElementById('fbLink').setAttribute("onclick","fbLogin()");
			document.getElementById('fbLink').innerHTML = 'Sign up with Facebook';
			document.getElementById('userData').innerHTML = '';
			document.getElementById('status').innerHTML = 'You have successfully logout from Facebook.';
		});
	}
</script>
</body>

<!-- Mirrored from demo.hasthemes.com/goetze-preview/goetze/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Jun 2020 06:57:30 GMT -->

</html>