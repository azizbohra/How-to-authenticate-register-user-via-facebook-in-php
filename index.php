<?php
require_once 'config.php';
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => APP_ID, // Replace {app-id} with your app id
  'app_secret' => APP_SECRET,
  'default_graph_version' => 'v2.2',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('https://localhost/websolutionspoint/How-to-authenticate-register-user-via-facebook-in-php/fb-callback.php', $permissions);
?>

<!doctype html>
<html>
    <head><meta charset="utf-8">
        <title>Login</title>

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">

          <div class="row">
              <div class="col-md-12">
                  <h3>Login with Facebook</h3>
              </div>
          </div>
          <div class="row">
              <div class="col-md-2">
                <a href="<?= htmlspecialchars($loginUrl); ?>">
                  <img src="images/facebook.png" alt="Sign In with Facebook"/>
                </a>
              </div>
          </div>
        </div>

    </body>

</html>
