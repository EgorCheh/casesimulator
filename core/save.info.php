<?php
require 'rb_db.php';
$user=R::load("users", $_SESSION['logged_user']['id']);
 $user->balance= $user->balance+$_POST['price'];
 R::store($user);

