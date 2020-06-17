   <?php   
########## Google Settings.. Client ID, Client Secret from https://cloud.google.com/console #############
$google_client_id   = '495266873714-ivqhb5m3n1nspf8qmu7amai23o9gcvo8.apps.googleusercontent.com'; //google client ID
$google_client_secret   = '1dbtE1PklxZn1IR3ZXVjb-iL'; //google client secret key
$google_redirect_url  = ''; 
$google_developer_key 	= ''; //your google developer key

//include google api files
include_once 'google/src/Google_Client.php';
include_once 'google/src/contrib/Google_Oauth2Service.php';
 
 $gClient = new Google_Client();
$gClient->setApplicationName('Login to THE CBCR');
$gClient->setClientId($google_client_id);
$gClient->setClientSecret($google_client_secret);
$gClient->setRedirectUri($google_redirect_url);
$gClient->setDeveloperKey($google_developer_key);

$google_oauthV2 = new Google_Oauth2Service($gClient);  

//If user wish to log out, we just unset Session variable
if (isset($_REQUEST['reset'])) 
{
  unset($_SESSION['token']);
  $gClient->revokeToken();
  header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL)); //redirect user back to page
}
if (isset($_GET['code'])) 
{ 
	$gClient->authenticate($_GET['code']);
	$_SESSION['token'] = $gClient->getAccessToken();
	header('Location: ' . filter_var($google_redirect_url, FILTER_SANITIZE_URL));
	return;
}
if (isset($_SESSION['token'])) 
{ 
	$gClient->setAccessToken($_SESSION['token']);
}
if ($gClient->getAccessToken()) 
{
	  //For logged in user, get details from google using access token
	  $user 		= $google_oauthV2->userinfo->get();
	  $user_id 		= $user['id'];
	  $user_name 		= filter_var($user['name'], FILTER_SANITIZE_SPECIAL_CHARS);
	  $email 		= filter_var($user['email'], FILTER_SANITIZE_EMAIL);
	  $profile_url 		= filter_var($user['link'], FILTER_VALIDATE_URL);
	  $profile_image_url 	= filter_var($user['picture'], FILTER_VALIDATE_URL);
	  $personMarkup 	= "$email<div><img src='$profile_image_url?sz=50'></div>";
	  $_SESSION['token'] 	= $gClient->getAccessToken();
}
else 
{	//For Guest user, get google login url
	$authUrl = $gClient->createAuthUrl();
        }
 
if(isset($_SESSION["user_email"])){  
//	echo $user_email ;
} else {  if(isset($authUrl)) //user is not logged in, show login button
	{ 
		echo '<a href="'.$authUrl.'" class="twitter-sign-in"><i class="fa fa-google"></i> Sign In with Google</a>';
//   echo '&nbsp;<a href=" '.$authUrl.'" id="google-connect"> <img src="include/images/Google.png" style="width:50px;">  </a>';
	} 
}     
?>   