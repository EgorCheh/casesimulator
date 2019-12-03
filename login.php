<?php
require 'core\rb_db.php';
include_once 'header.php';


$date = $_POST;
$signup=true;

if(isset($date['exit_login']))
{
    unset($_SESSION['logged_user']);
}
 if(isset($date['signup_submit']))
  {
      $errors = array();
      $user=R::dispense('users');
       
      if(trim($date['signup_loging'])==''||trim($date['signup_passwordg'])==''||trim($date['signup_passwordg2'])=='')
      {
          $errors[]='заполните все поля!';
      }
       if($date['signup_passwordg']!=$date['signup_passwordg2'])
      {
          $errors[]='пароли не совподают';
      }
        if(R::count('users', "login = ?",array($date['signup_loging']))>0)
        {
            $errors[]='такой пользователь уже есть';
        }
      if(empty($errors))
      {  $user->login = $date['signup_loging'];
      $user->password = password_hash($date['signup_passwordg'],PASSWORD_DEFAULT);
      R::store($user);}
      else {
        echo '<script language="javascript">';
        echo 'alert("error")';
        echo '</script>'; 
        $signup=false;
        }
  }
  if(isset($date['login_submit']))
  {
      $errors = array();
    $user=R::findOne('users','login=?',array($date['loging']));
    if($user)
    {
        if(password_verify($date['passwordg'], $user->password))
        {
           $_SESSION['logged_user']=$user;
        }
        else {
             $errors[]='неверный пароль';
        }
    }
    else {
       $errors[]="не правильный логин"; 
    }
    if(!empty($errors))
    {
        echo '<script language="javascript">';
        echo 'alert("error")';
        echo '</script>'; 
        
    }
  }
  
  
  
if (isset($date['to_signup'])||!$signup) {
    include_once 'class\class.form.signup.php';
} elseif ($signup&&!isset($_SESSION['logged_user'])) {
    include_once 'class\class.form.login.php';
} else {
    echo '<form action="login.php" method="POST"><button type="submit" id="exit_login" name="exit_login">exitp</button><form action="login.php" method="POST">';
}


include_once 'footer.php';
  

 


