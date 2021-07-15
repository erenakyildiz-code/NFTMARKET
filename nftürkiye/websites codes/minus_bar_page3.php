<?php
session_start();
if(isset($_SESSION['pageId3'])){
    if($_SESSION['pageId3'] > 0){
         $_SESSION['pageId3'] -= 1;
    }
}
header("Location:wallet.php");

?>