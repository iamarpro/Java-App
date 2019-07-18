
<?php 

require_once("../facebook_php_sdk/facebook.php");

$config = array();
$config['appId'] = '926482321034641';
$config['secret'] = 'bafb3f62bc3732d153376fb3046ead34';
$config['fileUpload'] = false; // optional

$fb = new Facebook($config);	


$params = array(
  "access_token" => "EAANKoXmizZAEBAOx2wZBPQzCsiu5zHPQPDs5vpNpYriz9ssVfynZBQYAUyMb8AxJ2NL0MR5RSpXkb0ZB3XnIKiIJRQhoHMQwIUd0DJlh1OHT3sPAOZAWc5FHL2vTYA8X0NKyOK1ZAOXygDIGG48uY6YAHn9opI94KjXGhuRDmGhQZDZD", // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => "Here is a blog post about auto posting on Facebook using PHP #php #facebook",
  "link" => "http://www.pontikis.net/blog/auto_post_on_facebook_with_php",
  "name" => "How to Auto Post on Facebook with PHP",
  "caption" => "www.pontikis.net",
  "description" => "Automatically post on Facebook with PHP using Facebook PHP SDK. How to create a Facebook app. Obtain and extend Facebook access tokens. Cron automation."
);

try {
  $ret = $fb->api('https://www.facebook.com/Testing-615208969002152/?modal=admin_todo_tour', 'POST', $params);
  echo 'Successfully posted to Facebook';
} catch(Exception $e) {
  echo $e->getMessage();
}