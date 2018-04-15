<?php

require_once 'config.php';

// UNSET ALL FACEBOOK SESSIONS
if (isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])) {
    unset($_SESSION['facebook_access_token']);
    session_destroy();

    header('Location: ' . BASE_URL);
}
