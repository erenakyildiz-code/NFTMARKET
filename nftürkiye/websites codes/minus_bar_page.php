<?php
session_start();
if(isset($_SESSION['pageId'])){
    if($_SESSION['pageId'] > 0){
         $_SESSION['pageId'] -= 1;
    }
}
header("Location:shop.php");

?>