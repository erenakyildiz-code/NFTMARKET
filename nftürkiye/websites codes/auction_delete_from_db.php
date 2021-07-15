<?php
$user_add = $_REQUEST['newowner'] ;
$tokenid= $_REQUEST['tokenid'];

if (empty($tokenid) or empty($user_add) ) {
    echo "no token address or user address is sent";
} else 
{

session_start();
$db = mysqli_connect('localhost:3306', 'wasterac_wasterac', 'ZP,(lA#_=,2g', 'wasterac_DB');
if ($db ->connect_errno > 0)
{
die('Unable to connect to database [' . $db->connect_error . ']');
}

$sql_query = "DELETE FROM auctions WHERE Nft_address = '$tokenid' "; 
$sql_query2 =  "UPDATE userNFTs SET person_addr = '$user_add'   WHERE nft_addr = '$tokenid' " ;   
    
if ($db->query($sql_query) === TRUE)
{
    
    if ($db->query($sql_query2) === TRUE)
{
    
       
    }
    
    else 
    {
        echo "Error updating record: " . $db->error;
    }

    
    }
    
    else 
    {
        echo "Error deleting record: " . $db->error;
    }

    $db->close();
    
  

}
header("Location:shop.php"); 


?>