<?php
session_start();
if(!isset($_SESSION["pageId3"])){
    $_SESSION["pageId3"] = 0;
}
$db = mysqli_connect('localhost:3306', 'wasterac_wasterac', 'ZP,(lA#_=,2g', 'wasterac_DB');
if ($db ->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}

?>


<!DOCTYPE html>
<html lang="zxx">
<!-- wallet.html 05:27  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>NFtürkiye - Best nft site of turkey</title>
    <script src = 'node_modules/node_modules/web3/dist/web3.min.js'></script> 
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i|Roboto:400,400i,500,500i,700,700i" rel="stylesheet"> 
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/css/icofont.css">	
    <!-- font awesome icon -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">	
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />	
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />	
    <!-- Style CSS --> 
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<script type="text/javascript">
var val = [];
	async function loadWeb3(){
		if(window.ethereum){
			window.web3 = new Web3(window.ethereum);
			window.ethereum.enable();
		}
	}

	async function loadContract(id) {
	    
			return await new window.web3.eth.Contract([
	{
		"inputs": [],
		"stateMutability": "nonpayable",
		"type": "constructor"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "_owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "_approved",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "Approval",
		"type": "event"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "_owner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "_operator",
				"type": "address"
			},
			{
				"indexed": false,
				"internalType": "bool",
				"name": "_approved",
				"type": "bool"
			}
		],
		"name": "ApprovalForAll",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_approved",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "approve",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "approvetokens",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "startprice",
				"type": "uint256"
			}
		],
		"name": "Auction",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			}
		],
		"name": "Auction_end",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			}
		],
		"name": "bid",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "ticketsWanted",
				"type": "uint256"
			}
		],
		"name": "buyticket",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			},
			{
				"internalType": "string",
				"name": "_uri",
				"type": "string"
			}
		],
		"name": "mint",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "previousOwner",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "newOwner",
				"type": "address"
			}
		],
		"name": "OwnershipTransferred",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "newticketprice",
				"type": "uint256"
			},
			{
				"internalType": "uint256",
				"name": "supply",
				"type": "uint256"
			}
		],
		"name": "Raffle",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			}
		],
		"name": "Raffle_end",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "safeTransferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			},
			{
				"internalType": "bytes",
				"name": "_data",
				"type": "bytes"
			}
		],
		"name": "safeTransferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_operator",
				"type": "address"
			},
			{
				"internalType": "bool",
				"name": "_approved",
				"type": "bool"
			}
		],
		"name": "setApprovalForAll",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "price",
				"type": "uint256"
			},
			{
				"internalType": "address",
				"name": "exchangeaddress",
				"type": "address"
			}
		],
		"name": "setprice",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "swap",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "swapid",
				"type": "uint256"
			}
		],
		"name": "swapAgree",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			}
		],
		"name": "swapRequest",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "swapid",
				"type": "uint256"
			}
		],
		"name": "swapWithdraw",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"anonymous": false,
		"inputs": [
			{
				"indexed": true,
				"internalType": "address",
				"name": "_from",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"indexed": true,
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "Transfer",
		"type": "event"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_from",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "_to",
				"type": "address"
			},
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "transferFrom",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "NFTaddress",
				"type": "address"
			}
		],
		"name": "transferNft",
		"outputs": [],
		"stateMutability": "payable",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_newOwner",
				"type": "address"
			}
		],
		"name": "transferOwnership",
		"outputs": [],
		"stateMutability": "nonpayable",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "approvedTokenCount",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "approvedTokens",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "auctionEndTime",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_owner",
				"type": "address"
			}
		],
		"name": "balanceOf",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "CANNOT_TRANSFER_TO_ZERO_ADDRESS",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "currentWinner",
		"outputs": [
			{
				"internalType": "address payable",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "getApproved",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "address",
				"name": "_owner",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "_operator",
				"type": "address"
			}
		],
		"name": "isApprovedForAll",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "maxbid",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "name",
		"outputs": [
			{
				"internalType": "string",
				"name": "_name",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "nftprice",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "NOT_CURRENT_OWNER",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "onSwap",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "owner",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "OwnerBeforeRaffle",
		"outputs": [
			{
				"internalType": "address payable",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "ownerOf",
		"outputs": [
			{
				"internalType": "address",
				"name": "_owner",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "raffleArray",
		"outputs": [
			{
				"internalType": "address",
				"name": "",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "raffleEndTime",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "bytes4",
				"name": "_interfaceID",
				"type": "bytes4"
			}
		],
		"name": "supportsInterface",
		"outputs": [
			{
				"internalType": "bool",
				"name": "",
				"type": "bool"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"name": "Swappers",
		"outputs": [
			{
				"internalType": "address",
				"name": "SwapperAddr",
				"type": "address"
			},
			{
				"internalType": "address",
				"name": "SwapProposalTokenAddr",
				"type": "address"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "symbol",
		"outputs": [
			{
				"internalType": "string",
				"name": "_symbol",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "ticketprice",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [
			{
				"internalType": "uint256",
				"name": "_tokenId",
				"type": "uint256"
			}
		],
		"name": "tokenURI",
		"outputs": [
			{
				"internalType": "string",
				"name": "",
				"type": "string"
			}
		],
		"stateMutability": "view",
		"type": "function"
	},
	{
		"inputs": [],
		"name": "totalTicketRevenue",
		"outputs": [
			{
				"internalType": "uint256",
				"name": "",
				"type": "uint256"
			}
		],
		"stateMutability": "view",
		"type": "function"
	}
],id
)}


async function load_nft_content(id){
                let texlist = ["name1","name2","name3","name4","name5","name6","name7","name8","name9"];
                let imgs = ["img1","img2","img3","img4","img5","img6","img7","img8","img9"]; // 
                
				let url = await window.contract.methods.tokenURI(1).call();
				var img = document.getElementById(imgs[id]);
				var tex = document.getElementById(texlist[id]);
				
			fetch(url)
.then(res => res.json())
.then((out) => { 
	img.src  = out["image"];
    tex.innerHTML = out["name"];
	
})
.catch(err => { throw err });
   		 	
    	
				
    		img.alt = "NFT";

    // This next line will just add it to the <body> tag
}
			

function updateStatus(Status){
	const statusEl = document.getElementById('status');
	statusEl.innerHTML = Status;
	console.log(Status);
}
function updatedesc(Status){
	const statusEl = document.getElementById('Desc');
	statusEl.innerHTML = Status;
	console.log(Status);
}
function updatename(Status){
	const statusEl = document.getElementById('Name');
	statusEl.innerHTML = Status;
	console.log(Status);
}

async function printCoolNumber(){
	updateStatus('fetching token name....');
	const coolNumber = await window.contract.methods.name().call();
	updateStatus(coolNumber);

}
async function setCoolNumber(){
	updateStatus('fetching token symbol....');
	const coolNumber = await window.contract.methods.symbol().call();
	updateStatus(coolNumber);
}
async function getnftprice(){
	const coolNumber = await window.contract.methods.nftprice().call();
	return (coolNumber / 1000000000000000000 );
}
async function getCurrentAccount(){
	const accounts = await window.web3.eth.getAccounts();
	return accounts[0];
}
async function Buynft(){
	updateStatus('buying token....');
	const address = await getCurrentAccount();
	const coolNumber = await window.contract.methods.transferNft(getaddress()).send({from: address , value: await window.contract.methods.nftprice().call()});

	updateStatus('token bought successfully.');
}

async function load(id) {// elemanları LOAD_NFT_CONTENT fonk değiştirilerek direk get elem by id yerine append child ile yaparız, kaç nftsi olduğunu bilmemiz gerekmez, ya da shoptaki gibi 9 lu liste yapabiliriz.
    val = [];
    var nftlist = 
	    <?php
	    
	$cur_page = $_SESSION["pageId3"];
    $sql_query = "SELECT * FROM userNFTs ";
    $stack = [];
	$result = mysqli_query($db,$sql_query);
	while ($row = mysqli_fetch_assoc($result)){
		$val = $row["nft_addr"];
		array_push($stack,$val);
	}
	echo json_encode($stack);
	?>;
	var useraddr = <?php
	    
    $sql_query2 = "SELECT * FROM userNFTs ";
    $stack2 = [];
	$result2 = mysqli_query($db,$sql_query2);
	while ($row2 = mysqli_fetch_assoc($result2)){
		$val2 = $row2["person_addr"];
		array_push($stack2,$val2);
	}
	echo json_encode($stack2);
	?>;
	await loadWeb3();
	window.contract = await loadContract(nftlist[0]);
	var i = 0;
	var len = useraddr.length;
	var user = await getCurrentAccount();
	while (i < len){
	    if (useraddr[i] == user){
	        val.push(nftlist[i]);
	    }
	    i++;
	}
	
	console.log(val);
	try{
	await loadWeb3();
    window.contract = await loadContract(val[id]);
    await load_nft_content(id);

	}
	catch{
		
	    return false;
	}
return true;
}
async function removeDummy() {
    var elem = document.getElementById('dummy');
    
    elem.parentNode.removeChild(elem);
    
    return false;
}



async function LOADALL(){ 
   var i = (9 * <?php echo $_SESSION[pageId3];?>) + 1;
   var j = 1;
   while (i <= (9 * <?php echo $_SESSION[pageId3];?>) + 9){
       if (!await load(i-1)){
           
           document.getElementById(j).style.display = "none" ;
       }
       i++;
       j++;
   }
    
   

}
LOADALL();



</script>
<body>

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">NFTürkiye</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-1">
		<!-- START TOP AREA -->
		
		<!-- END TOP AREA -->

		
		<!-- END LOGO AREA -->

		<!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-9 d-none d-lg-block d-md-none">
							<nav class="navbar navbar-expand-lg justify-content-left">
									<ul class="navbar-nav">
									<li><a href="index.html" class="nav-link">Home</a></li>
									<li><a href="shop.php" class="nav-link">Shop</a></li>
									<li><a href="contact.html" class="nav-link">Contact</a></li>
									<li><a href="wallet.php" class="nav-link">Wallet</a></li>
								</ul>
							</nav>
						</div>
						<div class="col-lg-3 d-none d-lg-block d-md-none text-right pr-0">
							<form class="navbar-form">
								<div class="form-group">
									<input class="form-control" name="search" value="Search here..." type="text">
									<button type="submit" class="btn"><i class="fa fa-search-plus"></i></button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- END NAVIGATION AREA -->	
	</header>
	<!-- END HEADER SECTION -->
	
	<!-- START PAGE BANNER AND BREADCRUMBS -->
	<section id="page-banner">
		<div class="single-page-title-area overlay" data-background="assets/img/bg/slide1.jpg">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="single-page-title">
							<h2>NFT Wallet</h2>
							<p>View your NFT's</p>
						</div>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
		<div class="single-page-title-area-bottom">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Wallet</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	<!-- START WALLET SECTION -->
    
    <!-- END WALLET SECTION -->
	
	<!-- START TEAM SECTION -->
    <section id="team" class="section-padding bg-gray">
        <div class="container" align= "center" >
			<div class="row" >
				<div class="col-12 text-center">
					<div class="section-title">

	
						<h3>Your <span>NFT's</span></h3>
					</div>
				</div>
			</div>
			<!-- end section title -->	 
			
			<div class="col-lg-8 col-md-8 col-sm-12 col-12 text-center pl-lg-5 pl-md-5 pl-sm-2 pl-2 mt-lg-0 mt-md-0 mt-sm-0 mt-5">
					<div class="row" align= "center">
					    
						<div class="col-lg-4 col-md-4 col-12 mb-4"id = "1">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img";>
										<img id="img1" width="90%" height="100%" src="" ><img/>
                                        
                                        
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
													<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[0];return false;" > <h4><label id = "name1">Name loading...</label></h4></a>
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4"id = "2">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
										<img id="img2" width="90%" height="100%" src="" ><img/><!-- BACKEND IMAGE COMES HERE, WE CAN MAKE IT NETWORK IMG INSTEAD OF ASSET IMG-->
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									
									<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[1];return false;" > <h4><label id = "name2">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id="3">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
									<img id="img3" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[2];return false;" > <h4><label id = "name3">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id = "4">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
									<img id="img4" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
										    
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[3];return false;" > <h4><label id = "name4">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id = "5">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
										<img id="img5" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
									    <a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[4];return false;" > <h4><label id = "name5">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id= "6">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
										<img id="img6" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[5];return false;" > <h4><label id = "name6">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id = "7">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
										<img id="img7" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
										<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[6];return false;" > <h4><label id = "name7">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12 mb-4" id = "8">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
										<img id="img8" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

												<li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
												<li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											 </ul>
										</div>
									</div>
									<div class="single-shop-meta">
									<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[7];return false;" > <h4><label id = "name8">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						<div class="col-lg-4 col-md-4 col-12" id = "9">
							<div class="single-shop-wrapper">
								<div class="single-shop">
									<div class="single-shop-img">
									<img id="img9" width="90%" height="100%" src="" ><img/>
										<div class="single-shop-social">
											<ul>

											   <li><a class="sicon2" href="#"><i class="icofont icofont-heart-alt"></i></a></li> <!-- ADD TO FAV -->
											   <li><a class="sicon3" href="#"><i class="icofont icofont-expand"></i></a></li>  <!-- SHOW IMAGE -->
											</ul>
										</div>
									</div>
									<div class="single-shop-meta">
									<a href="sell_page.php"onclick="location.href=this.href+'?xyz='+val[8];return false;" > <h4><label id = "name9">Name loading...</label></h4></a>
										
										
									</div>	
								</div>							
							</div>
						</div>
						<!-- end single product -->
						 <div class="theme-pagination">

        
							<nav class="navbar justify-content-center">
							  <ul class="pagination">
								<li class="page-item"><a class="page-link" href="minus_bar_page3.php"><i class="icofont icofont-long-arrow-left"></i></a></li> <!-- change_page(-1) -->
								<div class="page-item" id= "page1"><a class="page-link" >1</a></div>
								<div class="page-item" id= "page2"><a class="page-link" >2</a></div>
								<div class="page-item" id= "page3"><a class="page-link" >3</a></div>
								<div class="page-item" id= "page4"><a class="page-link" >4</a></div>
								<li class="page-item"><a class="page-link" href="plus_bar_page3.php"><i class="icofont icofont-long-arrow-right"></i></a></li>  <!-- change_page(1) -->
							  </ul>
							</nav>
						</div>
						<!-- end pagination -->
					</div>
				</div>
				
        <!--- END CONTAINER -->
    </section>
   


   
    <!-- END TEAM SECTION -->
	
	<!-- START CALLTOACTION SECTION -->
	
    <!-- END CALLTOACTION SECTION -->
	
    <!-- START FOOTER -->
     <footer class="footer-2">
        <!--Footer top -->
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="footer-logo-h3 col-12 p-0 wow fadeInDown">
                            <a href="index-2.html">
								<div class="footer-logo-h3-icon">
                                 <i class="fab fa-gg-circle"></i>
                                </div>
								<div class="footer-logo-h3-text">
                                    <h3>NFTürkİye</h3>
                                    <p>NFT market</p>
                                </div>
							</a>
                        	<p>Created by: Eren Akyıldız, Sacit Emre Akca, Nisa Defne Aksu, Mehmet Sencer Yaralı. <br> Instructor: Kamer Kaya </p>
                        </div>
                    </div>
                    <!-- End Widget -->
                </div>
                <div class="row mt-5">
                    
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-4 mt-4">
						<div class="single-fcontact">
							<div class="single-fcontact-icon">
								<i class="icofont icofont-envelope-open"></i>
							</div>
							<div class="single-fcontact-des">
								<h6>Email Us:</h6>
								<p>erenakyildiz@sabanciuniv.edu</p>
							</div>
						</div>
                    </div>
                    <!-- End Widget -->
                    <div class="col-lg-3 col-md-3 col-12 mb-lg-0 mb-md-0 mb-4 mt-4">
						<div class="single-fcontact">
							<div class="single-fcontact-icon">
								<i class="icofont icofont-mobile-phone"></i>
							</div>
							<div class="single-fcontact-des">
								<h6>Phone Number:</h6>
								<p>537-541-0178</p>
							</div>
						</div>
                    </div>
                    <!-- End Widget -->
                    
                    <!-- End Widget -->
                </div>
            </div>
        </div>
		
        <!--Footer Bottom -->
        
		
    </footer>
    <!-- END FOOTER -->
	
	<!-- Latest jQuery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- meanmenu min js  -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- Sticky JS -->
    <script src="assets/js/jquery.sticky.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>	
    <!-- jquery appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- countTo js -->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!-- venobox js -->
    <script src="assets/venobox/js/venobox.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <!-- scroll to top js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
</body>


<!-- wallet.html 05:27  -->
</html>


