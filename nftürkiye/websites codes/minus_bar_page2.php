<?php
session_start();
if(isset($_SESSION['auctionPid'])){
    if($_SESSION['auctionPid'] > 0){
         $_SESSION['auctionPid'] -= 1;
    }
}
header("Location:auction.php");

?>