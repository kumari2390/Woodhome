<?php
require_once 'classes/dbo.class.php';

include "inc/head.inc.php";
include "inc/nav.inc.php";

//echo $_GET[];

if (isset($_GET['email']) && preg_match('/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/', $_GET['email']))

{

     $Email = $_GET['email'];

}

if (isset($_GET['tokenCode']) && (strlen($_GET['tokenCode']) == 32))//The Activation key will always be 32 since it is MD5 Hash

{

     $tokenCode = $_GET['tokenCode'];

}





if (isset($Email) && isset($tokenCode))

{



    // Update the database to set the "activation" field to null

    $time =date('Y-m-d H:i:s');

    //echo "UPDATE user_master SET status=1  WHERE(user_email ='$Email' AND tokenCode='$tokenCode')LIMIT 1";die;

    $query_activate_account = "UPDATE customer_info SET status=?  WHERE(email =? AND tokenCode=?)LIMIT 1";

    

    $result_activate_account = $db->update( $query_activate_account,array(1,$Email,$tokenCode)) ;
    


    // Print a customized message:

    if ($result_activate_account == 1)//if update query was successfull

    {

                

       $msg = "Your account is now active. You may now <a href='#'>Log in</a>  ";



    } else

    {

     $msg = "Oops !Your account could not be activated. Please recheck the link or contact the system administrator.";

    }

     

    // $Email_ID = $_SESSION["Email_ID"]; 
} else {

         $msg = "Error Occured .";

}
?>

<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
<style>
    #style_text{margin-top: 10px;color: #54780c;font-size: 40px;background: #FFF;padding: 10PX;

                font-weight: bold;font-family: 'Lobster', cursive;text-align:center;}
</style>





 <br><br><br><br><br><br>

<section class="section-bottom-border login-signup">

    <div class="container">

        <div class="row">

             

            <div class="col-sm-12">

                <h3 id="style_text">

                  <?php  echo $msg;  ?>    

                </h3>

                <br><br><br>

            </div> 

        </div>

    </div>

</section>



<br><br><br><br><br><br>





<?php 
include "inc/footer.inc.php";
include "inc/footerscript.inc.php";
?>