<?php
session_start();

$db = mysqli_connect('localhost:3306', 'wasterac_wasterac', 'ZP,(lA#_=,2g', 'wasterac_DB');
if ($db ->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}
    
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- single-product.html 05:23  -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
	<script src = 'node_modules/node_modules/web3/dist/web3.min.js'></script>  <!-- error veriyo xd eren:metamask olmayınca veriyor-->
    <title>NFTürkiye</title>
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
    <!-- price filter CSS -->
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">	
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

<body>

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="theme-loader">NFTürkiye</div>
	</div>
	<!-- END PRELOADER --> 
	
	<!-- START HEADER SECTION -->
	<header class="main-header header-1">
		<div class="top-area" id = "dummy">
			<div class="auto-container">
				<div class="row">
					<div class="col-12 text-center p-3">				
						<p>Welcome to NFTürkiye please sign in using metamask - <a href="#" onclick=load();>Sign in</a>
					</div> 
					<!-- end col -->
				</div>
			</div>
		</div>
		<!-- END TOP AREA -->

		<!-- START LOGO AREA -->
		
		<!-- END LOGO AREA -->

		<!-- START NAVIGATION AREA -->
		<div class="sticky-menu">
			<div class="mainmenu-area">
				<div class="auto-container">
					<div class="row">
						<div class="col-lg-9">
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
							<h2>Product Details </h2>
							
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
							<li class="breadcrumb-item active">Nft details</li>
						</ol>
					</div>
				</div>
				<!-- end row-->
			</div>
		</div>
	</section>
	<!-- END PAGE BANNER AND BREADCRUMBS -->
	
	<!-- START SHOP DETAILS SECTION -->
	<section id="single-product" class="section-padding">
		<div class="auto-container">
			<div class="row">
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">
				    <div class="sin-pro-image">
						<img id="img1" width="90%" height="100%" src="" ><img/>
						

					</div>
				</div>
                <div class="col-md-12 col-lg-6 col-sm-12 col-12">
					<div class="product-summary">
					      <h2><label id = "name1">Name loading...</label></h2>
						  <div class="price"></div>
						  
						  
						  
						  
						  <div class="cart-info clearfix">
							
								
								<div class="button col-6 p-0">
									<input type="text" id = "message" class="form-control" value= "Enter price in WEI..">
	                                <input type="button" onclick="showMessage();" value="Set price and list NFT" class="btncart" />
								</div>
							    <br>
							    <br>
							    <div class="button col-6 p-0">
									<input type="text" id = "auctionPric" class="form-control" value= "Enter price in WEI..">
	                                <input type="button" onclick="startAuction();" value="Set Auction start price" class="btncart" />
								</div>
								<div class="button col-6 p-0" id = "onswap">
	                                <input type="button" onclick="StartSwap();" value="Send to swap" class="btncart" />
								</div>
								<div class="button col-6 p-0" id = "notonswap">
	                                <input type="button" onclick="CheckRequests();" value="Check out swap requests" class="btncart" />
								</div>
								
								
						  </div>
				     </div>
                </div>
				<!--- END COL -->
			</div>
			<!-- end row-->
			<div class="row">
				<div class="col-lg-12 sin-pro-tab">
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item"><a class="nav-link active" href="#" data-target="#one" data-toggle="tab">Description</a></li>
						<li class="nav-item"><a class="nav-link" href="#" data-target="#two" data-toggle="tab">Reviews(0)</a></li>
						<li class="nav-item"><a class="nav-link" href="#" data-target="#three" data-toggle="tab">Additional Info</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane animated fadeInRight active show" id="one">
							<p><label id = "desc1">desc loading...</label></p>
						</div>
						<div class="tab-pane animated fadeInRight" id="two">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="tab-pane animated fadeInRight" id="three">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						 </div>
					</div>
				</div>
			</div>
            <!--- END ROW -->
		</div>
	</section>
	<!-- END SINGLE PRODUCT -->
	
	<!-- START RECENT SECTION -->

    <!-- END RECENT SECTION -->
	
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
	<!-- price filter js  -->
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- elevateZoom js -->
    <script src="assets/js/jquery.elevateZoom-3.0.8.min.js"></script>
    <!--  touchspin js -->
    <script src="assets/js/jquery.bootstrap-touchspin.js"></script>
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
    <script>
		$('#zoom_01').elevateZoom({
			scrollZoom : true,
			cursor: "crosshair",
			zoomWindowFadeIn: 500,
			zoomWindowFadeOut: 750
	    }); 
        $("input[name='demo_vertical']").TouchSpin({
            verticalbuttons: true
        });
    </script>
</body>


<!-- single-product.html 05:26  -->
</html>

<script type="text/javascript">
	async function loadWeb3(){
		if(window.ethereum){
			window.web3 = new Web3(window.ethereum);
			window.ethereum.enable();
		}
	}

	async function loadContract() {
	    
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
],getaddress()
)}

async function load_nft_content(){
				let url = await window.contract.methods.tokenURI(1).call();
				var img = document.getElementById("img1");
				var tex = document.getElementById("name1");
				var desc = document.getElementById("desc1");
			fetch(url)
.then(res => res.json())
.then((out) => {
	img.src  = out["image"];
    tex.innerHTML = out["name"];
	desc.innerHTML = out["description"];
})
.catch(err => { throw err });
   		 	
    	
				
    		img.alt = "NFT";

    
}
			

function getUrlVars() { 
var vars = {}; 
var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) { 
   vars[key] = value; 
});
return vars;
}
 
var address_final = getUrlVars()["xyz"];
console.log(address_final);

async function showMessage(){
                var message = document.getElementById("message").value;
                await setnftprice(message);
				
            }

async function listNFT(){
		const address = await getCurrentAccount();
		const tokenid = await getaddress();
		var newUrl = "/add_to_db.php"+"?tokenid="+tokenid+"&newowner="+address;
		window.location.assign(newUrl);
}
            
async function setnftprice(message){
                try{
                await approve();
                
                const coolNumber = await window.contract.methods.setprice(message,getaddress()).send({from: await getCurrentAccount()});
                
                await listNFT();
                }
                catch{
                    alert("you need to agree to both conditions.")
                }
               
			}
async function approve(){
				
				const approve = await window.contract.methods.approve(getaddress(),1).send({from: await getCurrentAccount()});
				
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
function getaddress(){
    return address_final;
    
}

async function startAuction(){
    try{
    await approve();
    const tokenid = await getaddress();
    const startprice = document.getElementById("auctionPric").value;
    const Start = await window.contract.methods.Auction(getaddress(),startprice).send({from: await getCurrentAccount()});
    var newUrl = "/add_to_auct_db.php"+"?tokenid="+tokenid;
	window.location.assign(newUrl);
    }
    catch{
        alert("something went very wrong.");
    }
}

async function StartSwap(){
    await approve();
    await window.contract.methods.swap(getaddress()).send({from: await getCurrentAccount()})
    var newUrl = "/add_to_swap_db.php"+"?tokenid="+tokenid;
	window.location.assign(newUrl);
}



async function setCoolNumber(){
	updateStatus('fetching token symbol....');
	const coolNumber = await window.contract.methods.symbol().call();
	updateStatus(coolNumber);
}
async function getnftprice(){

	const coolNumber = await window.contract.methods.nftprice().call();
    return coolNumber;
}
async function getCurrentAccount(){
	const accounts = await window.web3.eth.getAccounts();
	return accounts[0];
}
async function Buynft(){
	
	const address = await getCurrentAccount();
	const coolNumber = await window.contract.methods.transferNft(getaddress()).send({from: address , value: await window.contract.methods.nftprice().call()});

}
async function load() {
    var on_swap = <?php $sql_query = "SELECT * FROM swap ";
    $stack = [];
	$result = mysqli_query($db,$sql_query);
	while ($row = mysqli_fetch_assoc($result)){
		$val = $row["Nft_address"];
		array_push($stack,$val);
	}
	
	echo json_encode($stack);
	?>;
	var iterator = on_swap.length;
	var remover = 0;
	while (iterator >= 0){
	    if (on_swap[iterator] == address_final){
	        remover += 1;
	    }
	    iterator --;
	    
	}
	if (remover == 0){ // this means it is not on swap
	    document.getElementById("notonswap").style.display = "none" ;
	     
	}
	else {// this means it is on swap
	    document.getElementById("onswap").style.display = "none" ;
	    
	}
	try{
	await loadWeb3();
	window.contract = await loadContract();
	removeDummy();
	load_nft_content();
	}
	catch{
		alert("Could not log in")
	}

}
function CheckRequest(){
    var newUrl = "/requested_swaps.php"+"?tokenid="+tokenid;
	window.location.assign(newUrl);
}
function removeDummy() {
    var elem = document.getElementById('dummy');
    elem.parentNode.removeChild(elem);
    return false;
}

load();




</script>