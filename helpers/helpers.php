<?php
function sanitize($dirty){
  return htmlentities($dirty, ENT_QUOTES,"UTF-8");
}
function display_errors($errors){
  $display = '<p>';
    foreach($errors as $error){
      $display .= '<p class="text-danger">'.$error.'</p>';
    }
    $display .= '</p>';
    return $display;
}
function clogin($cus_id){
  $_SESSION['BUser'] = $cus_id;
  global $db;
  header('Location: student.php');
}
function onLogin($cus_id) {
    $token = GenerateRandomToken(); // generate a token, should be 128 - 256 bit
    storeTokenForUser($cus_id, $token);
    $cookie = $cus_id . ':' . $token;
    $mac = hash_hmac('sha256', $cookie, SECRET_KEY);
    $cookie .= ':' . $mac;
    setcookie('rememberme', $cookie);
}
function is_logged_in(){
  if(isset($_SESSION['BUser']) && $_SESSION['BUser'] > 0){
    return true;
  }
  return false;
}
?>
