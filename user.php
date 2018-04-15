<?php
require_once 'config.php';
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new Facebook\Facebook([
  'app_id' => APP_ID, // Replace {app-id} with your app id
  'app_secret' => APP_SECRET,
  'default_graph_version' => 'v2.2',
  ]);

  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,locale,picture', $_SESSION['fb_access_token']);
  $fbUserProfile = $response->getGraphNode()->asArray();

  $helper = $fb->getRedirectLoginHelper();
  // Get logout url
  $logoutURL = $helper->getLogoutUrl($_SESSION['fb_access_token'], BASE_URL . 'logout.php');
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

            <?php
            // FOR FACEBOOK
            if (isset($_SESSION['fb_access_token'])) {
                //print_r($fbUserProfile);?>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th bgcolor="#f1f1f1" colspan="2">USER PROFILE INFORMATION (BY FACEBOOK)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Unique Id</td>
                            <td><b><?= $fbUserProfile['id'] ?></b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><?= $fbUserProfile['name'] ?></td>
                        </tr>
                        <tr>
                            <td>First Name</td>
                            <td><?= $fbUserProfile['first_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><?= $fbUserProfile['last_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Email Id</td>
                            <td><?= $fbUserProfile['email'] ?></td>
                        </tr>
                        <tr>
                            <td>Profile Link</td>
                            <td><a href="<?= $fbUserProfile['link'] ?>" target="_blank">Facebook Profile Link</a></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td><?= $fbUserProfile['gender'] ?></td>
                        </tr>
                        <tr>
                            <td>Locale</td>
                            <td><?= $fbUserProfile['locale'] ?></td>
                        </tr>
                        <tr>
                            <td>Silhouette</td>
                            <td><?= $fbUserProfile['picture']['is_silhouette'] ?></td>
                        </tr>
                        <tr>
                            <td>Profile Picture</td>
                            <td><img src="<?= $fbUserProfile['picture']['url'] ?>" width="100" height="100" alt="Profile Picture"></td>
                        </tr>
                        <tr>
                            <td>Logout</td>
                            <td><a href="<?php echo $logoutURL; ?>">Logout</a></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            } ?>

        </div>

    </body>

</html>
