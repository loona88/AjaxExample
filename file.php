<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	//$real_root = $_SERVER['DOCUMENT_ROOT'] . "/php13/hw/"; // Элемент $_SERVER['DOCUMENT_ROOT'] содержит путь к корневой директории сервера,
																												// если скрипт выполняется в виртуальном хосте, в данном элементе указывается
																												// путь к корневой директории виртуального хоста.
	
	$frsName = (!empty($_POST["frsName"]))?htmlspecialchars ($_POST["frsName"]):'<span>Not Complated</span>';
	$lstName = (!empty($_POST["lstName"]))?htmlspecialchars ($_POST["lstName"]):'<span>Not Complated</span>';
	$usPasw = (!empty($_POST["usPasw"]))?htmlspecialchars ($_POST["usPasw"]):'<span>Not Complated</span>';
	$mnt = (!empty($_POST["mnt"]))?htmlspecialchars ($_POST["mnt"]):'<span>Not Complated</span>';
	$gender = (!empty($_POST["gender"]))?htmlspecialchars ($_POST["gender"]):'<span>Not Complated</span>';
	$phNumb = (!empty($_POST["phNumb"]))?htmlspecialchars ($_POST["phNumb"]):'<span>Not Complated</span>';
	$eMail = (!empty($_POST["eMail"]))?htmlspecialchars ($_POST["eMail"]):'<span>Not Complated</span>';

  $f = fopen("file.txt", "a+");
  if ($f === false) {
    echo "Unable to open file<br>";
    exit(0);
  }

  fwrite($f, "$frsName;$lstName;$usPasw;$mnt;$gender;$phNumb;$eMail");
  fclose($f);

  $a = file("file.txt");

  echo "$frsName<br>$lstName<br>$mnt<br>$gender<br>$phNumb<br>$eMail";

  // foreach($a as $k => $v) {
  //   $b = explode(";", $v);
  //   foreach($b as $key => $value) {
  //     $key ++;
  //     echo "(" . $key  . ") " . $value . "<br>";
  //   }
  //   unset($value);
  // }
  // unset($v);

  unlink("file.txt");
?>
