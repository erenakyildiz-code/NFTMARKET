<?php 
// this is used for listing the nfts
$user_add = $_REQUEST['newowner'] ;
$tokenid= $_REQUEST['tokenid'];

if (empty($tokenid) or empty($user_add) ) 
{
echo "no token address or user address is sent";
}
else 
{

session_start();
$db = mysqli_connect('localhost:3306', 'wasterac_wasterac', 'ZP,(lA#_=,2g', 'wasterac_DB');
if ($db ->connect_errno > 0)
{
die('Unable to connect to database [' . $db->connect_error . ']');
}

//$query_1 = "SELECT * FROM address_nft WHERE Nft_adress = '$tokenid'";

$query = mysqli_query($db, "SELECT * FROM address_nft WHERE Nft_address = '$tokenid' ");
$query2 = mysqli_query($db, "SELECT nft_addr FROM userNFTs WHERE nft_addr = '$tokenid' ");
if($query2->num_rows > 0){
$id = 1;
$length = mysqli_query($db, "SELECT * FROM address_nft") ;
	while ($row = mysqli_fetch_assoc($length)){
		$id = $id + 1;
	}
if ($query->num_rows > 0)
{
    header("Location:sell_page.php?xyz=$tokenid");
}
else 
{
    
        $sql_query = "INSERT INTO address_nft (uid, Nft_address, User_address) VALUES ('$id' ,'$tokenid', '$user_add')" ;
    
    
//$sql_query2 =  "UPDATE userNFTs SET person_addr = ''   WHERE nft_addr = '$tokenid' " ;   
   // bizde olmayan nftlerin listelenmesini engellemek lazim! 
if ($db->query($sql_query) === TRUE)
{
    


}
else 
{
    echo "Error adding record: " . $db->error;
}
$db->close();

}
header("Location:shop.php");
}
else{
    echo "you can't do that.";
    
}

}

?>