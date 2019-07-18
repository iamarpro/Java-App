<?php
// require Facebook PHP SDK
// see: https://developers.facebook.com/docs/php/gettingstarted/
require_once("../facebook_php_sdk/facebook.php");
 
// initialize Facebook class using your own Facebook App credentials
// see: https://developers.facebook.com/docs/php/gettingstarted/#install
$config = array();
$config['appId'] = '2387054531362486';
$config['secret'] = 'c028719e26ed0ce0a7e2ebc86434cd66';
$config['fileUpload'] = false; // optional
 
$fb = new Facebook($config);
 
// define your POST parameters (replace with your own values)
$params = array(
  "access_token" => "EAAh7A3FmvrYBAIbUqHNXjsPtYsorpRZCttF51wgMFD0ZBLHXXZBaDLiFW95uxEEZCx6BRo0S4nNoa1Y7e4nkZAFOYaHextNWaY2S2HsM0FC2QzZC0YCUJ6qbdeIkFOFyjf5ONx0uQt3enQo4s8ayf3URZBfLmwTMi8SBClg0DGWFQZDZD", // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => "Here is a blog post about auto posting on Facebook using PHP #php #facebook",
  "link" => "http://www.pontikis.net/blog/auto_post_on_facebook_with_php",
  "picture" => "http://i.imgur.com/lHkOsiH.png",
  "name" => "How to Auto Post on Facebook with PHP",
  "caption" => "www.pontikis.net",
  "description" => "Automatically post on Facebook with PHP using Facebook PHP SDK. How to create a Facebook app. Obtain and extend Facebook access tokens. Cron automation."
);
 
// post to Facebook
// see: https://developers.facebook.com/docs/reference/php/facebook-api/
try {
  $ret = $fb->api('/9594568902/Testing', 'POST', $params);
  echo 'Successfully posted to Facebook';
} catch(Exception $e) {
  echo $e->getMessage();
}
?>