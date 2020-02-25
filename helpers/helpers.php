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
?>
