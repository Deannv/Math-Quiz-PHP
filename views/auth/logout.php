<?php

require_once '../../app/User.php';

if ($User->logout()) {
    header('Location: login.php');
    exit();
} else {
    header('../user/dashboard.php');
}
