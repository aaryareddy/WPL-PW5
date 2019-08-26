<?php
session_start();

$n="";
$e="";
$p="";
$is_valid=0;

if ($_SERVER ['REQUEST_METHOD']	== 'POST'){
if (!empty($_POST['name'])){
if(preg_match("/^[a-zA-Z ]*$/",$_POST['name'])){
$n=1;
}}}

if ($_SERVER ['REQUEST_METHOD']	== 'POST'){
if (!empty($_POST['email'])){
    $emailPattern = "/([\w\-]+\@[\w\-]+\.[\w\-]+)/";
if(preg_match($emailPattern, $_POST['email'])){
    $e=1;
}}}

if ($_SERVER ['REQUEST_METHOD']	== 'POST'){
	if (!empty ($_POST ['pwd'])){
    if(strlen($_POST['pwd']) > 5){
  $p=1;
  }}}



  if ($e== 1 && $n== 1 && $p== 1){
      $is_valid	= 1;
  }

  else{
      $is_valid	= 0;
  }

  if ($is_valid == 1)
  {
      $_SESSION ['email']	= $_POST ['email'];
      $_SESSION ['name']	= $_POST ['name'];
      header('Location:welcome.php');
 }
else
{
header('Location:login.html');
}

?>