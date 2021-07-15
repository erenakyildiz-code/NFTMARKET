// SPDX-License-Identifier: MIT
pragma solidity 0.8.0;
 
 
 // Since this is SOL 0.8.0 Safemath is already included.
import "https://github.com/0xcert/ethereum-erc721/src/contracts/tokens/nf-token-metadata.sol";
import "https://github.com/0xcert/ethereum-erc721/src/contracts/ownership/ownable.sol";

contract approvedTokenCreator{
    mapping (uint256=> address)public approvedTokens;
    uint256 public approvedTokenCount = 0;
    modifier onlyContract(){
        require (msg.sender == address(0xDDcbd1913CA06fC43A32c5eFB82748301334bB7f)); //only i can approve tokens
        _;
    }
   
    function addApprovedToken(address approvedToken) public onlyContract{ // only i can approve tokens.
   
        approvedTokens[approvedTokenCount] = approvedToken;
        approvedTokenCount += 1;
    }
    function returnTokenCount() public returns(uint256){
        return approvedTokenCount;
    }
   function returnTokenAddress(uint256 id) public returns (address){
       
       return approvedTokens[id];
       
   }
}

contract newNFT is NFTokenMetadata, Ownable {
    
    mapping (uint256 => address) public approvedTokens; // at first there are no tokens that are approved, they will be coming from another contract.
    uint256 public approvedTokenCount = 0; // this will also change after running approvetokens function
    
    function approvetokens() public payable{
        approvedTokenCreator MYTOKENS = approvedTokenCreator(0xC2107CCf7E659f3e01819fa01B725230cB9Aa98C);
        
        approvedTokenCount = MYTOKENS.returnTokenCount();
        
        uint256 tid = 0;
        while (tid < approvedTokenCount){
            approvedTokens[tid] = MYTOKENS.returnTokenAddress(tid);
            tid++;
        }
        
    }
    
  function approvalchecker(address NFTaddress) private returns(bool){// to see if a token is approved.
      
       bool tokenApproved = false;
       
        uint256 Iterator = 0;
        while (Iterator < approvedTokenCount){//checks if the address of token is approved. Looks through the entire approved tokens to see if it is possible.
           
            if(approvedTokens[Iterator] == NFTaddress){
                tokenApproved = true;
            }
           
            Iterator += 1;
        }
        return tokenApproved;
  }
  
  bool auctionEnded = true; // if there is no ongoing auction for this NFT, this is always true.
  uint256 public nftprice = 0;// this exists for normal sales
  constructor() {
    nftName = "NFTurkey_Approved_Token";
    nftSymbol = "NAT";
  }
 
  function mint(address _to, uint256 _tokenId, string calldata _uri) external onlyOwner {
    super._mint(_to, _tokenId);
    super._setTokenUri(_tokenId, _uri);
  }
  
  
  // NORMAL SALE PART
  
  
  
  function setprice(uint256 price,address exchangeaddress)public{
     
      require(msg.sender == this.ownerOf(1), "you don't own this token");
      nftprice = price;
  }
  
  function transferNft(address NFTaddress) public payable{
        
        require(auctionEnded);
        newNFT NFTtoTransfer = newNFT(NFTaddress);
        require (NFTtoTransfer.getApproved(1) == NFTaddress);
        require (msg.value == NFTtoTransfer.nftprice());
        NFTtoTransfer.safeTransferFrom(NFTtoTransfer.ownerOf(1),msg.sender,1);// require (since if it is not approved, we dont want it to transfer any money.)
        payable(NFTtoTransfer.ownerOf(1)).transfer(msg.value); 
        nftprice = 111562994000000000000000000; // existing WEI so that no one can buy this token if the price is not set (as of 2020 august)
    }
    
    
    //AUCTION PART
    
    
  uint256 public maxbid = 0;
  address payable public currentWinner;
  uint256 startbid = 0;
  address payable OwnerBeforeAuction;
  uint256 public auctionEndTime;
  function bid(address NFTaddress) public payable{
      require(NFTaddress == address(this));
      require(msg.value > (maxbid + 2000000000000000));
      require(Auction_end(NFTaddress));
      currentWinner.transfer(maxbid);
      maxbid = msg.value;
      currentWinner = payable(msg.sender);
      
  }
  /// your NFT will be transfered to this contract, so that you can not cancel the auction.
  /// currently you must enter price in WEI but we might change this on a later date.
  /// your auction will be on for 24 hours. If it is not sold, this function will automatically send the NFT back to you.
  function Auction(address NFTaddress, uint256 startprice) public payable{
      
      require(NFTaddress == address(this));
      newNFT NFTtoTransfer = newNFT(NFTaddress);
      require(msg.sender == NFTtoTransfer.ownerOf(1), "you don't own this token, therefore you can not auction it.");
      require(auctionEnded, "you already sent this NFT for an auction.");
      
      OwnerBeforeAuction = payable(NFTtoTransfer.ownerOf(1));
      NFTtoTransfer.transferFrom(msg.sender, address(this),1 );
      auctionEnded = false;// this sets auction to start.
      maxbid = startprice;
      currentWinner = OwnerBeforeAuction;
      auctionEndTime = block.timestamp + (86400);
      startbid = startprice;
  }
  function Auction_end(address NFTaddress) public payable returns (bool){
      if (auctionEndTime <= block.timestamp){
        newNFT NFTtoTransfer = newNFT(NFTaddress);
        NFTtoTransfer.safeTransferFrom(address(this),currentWinner,1);
        
        if(currentWinner != OwnerBeforeAuction){
            
            OwnerBeforeAuction.transfer(maxbid - startbid);
        }
        auctionEnded = true;
      return false;
      }
      return true;
  }

     // Raffle PART
    
    bool raffleEnded = true; // if there is no ongoing raffle for this NFT, this is always true.
    address payable public OwnerBeforeRaffle;
    uint256 public raffleEndTime;
    uint public totalTicketRevenue = 0;
    address[] public raffleArray;
    uint256 public ticketprice = 0;
    uint256 ticketsSold = 0; 
    
    
    function buyticket(address NFTaddress, uint256 ticketsWanted) public payable{
        
        require(NFTaddress == address(this));
        require(Raffle_end(NFTaddress), "The raffle has ended, you can not buy tickets anymore." );
        require(msg.value >= (ticketprice * ticketsWanted));
        uint256 ticketsAfforded = msg.value / ticketprice; // since this is (u)int it will not have a decimal.
        uint256 curidx = 0;
        while(curidx != ticketsAfforded)
        {
            raffleArray.push(msg.sender);
            curidx+=1;
            ticketsSold += 1;
        }

        totalTicketRevenue = totalTicketRevenue + (ticketsAfforded * ticketprice);
        payable(msg.sender).transfer(msg.value - (ticketsAfforded * ticketprice));// sends back remaining money they sent by accident, cant happen on website.
        
  }
  /// your NFT will be transfered to this contract, so that you can not cancel the auction.
  /// currently you must enter price in WEI but we might change this on a later date.
  /// your auction will be on for 24 hours. If it is not sold, this function will automatically revert.
  function Raffle(address NFTaddress, uint256 newticketprice, uint256 supply) public payable{
      newNFT NFTtoTransfer = newNFT(NFTaddress);
      require(msg.sender == address(0xDDcbd1913CA06fC43A32c5eFB82748301334bB7f)); // only i can start a raffle.
      ticketprice = newticketprice;
      OwnerBeforeRaffle = payable(NFTtoTransfer.ownerOf(1));
      NFTtoTransfer.transferFrom(msg.sender, address(this),1 );
      raffleEnded = false;// this sets raffle to start.
      raffleEndTime = block.timestamp + (30);
  }
  
  function Raffle_end(address NFTaddress) public payable returns (bool){
      if (raffleEndTime <= block.timestamp){
        uint winneridx = generateRandomNumber() % ticketsSold;
        address winnerOfRaffle = raffleArray[winneridx];
        newNFT NFTtoTransfer = newNFT(NFTaddress);
        NFTtoTransfer.safeTransferFrom(address(this),winnerOfRaffle,1);
        
        if(winnerOfRaffle != OwnerBeforeRaffle){
            OwnerBeforeRaffle.transfer(totalTicketRevenue);
        }
      return false;
      }
      return true;
  }
  
  function generateRandomNumber() private view returns(uint) { // this is actually not a random number
        return uint(keccak256( abi.encode(block.timestamp,"141414" )));
    }
        // SWAP PART


  bool public onSwap = false;
  struct Swapper { 
      address SwapperAddr;
      address SwapProposalTokenAddr;
  }
  Swapper [] public Swappers; // Swap proposers list
  
  address SwapRequestedNFT; // Swap requested NFT address
  address ownerBeforeSwap; 
  
  // This function can be used by NFT owner. It turns on the swap proposal period. Parameter is 
  function swap() public payable {
      newNFT NFTtoswap = newNFT(address(this));
      require(msg.sender == NFTtoswap.ownerOf(1));
      require(!onSwap, "Swap is already on.");
      SwapRequestedNFT = address(this);
      onSwap = true;
      ownerBeforeSwap = msg.sender;// sets sender as the owner before swap.
      NFTtoswap.transferFrom(msg.sender, address(this),1);
  }
  
  // Swap proposers must use this function to propose another NFT. Swapping period must be on.
  // Parameter is the proposed NFT address.
  function swapRequest(address NFTaddress) public payable{
      newNFT NFTtoswap = newNFT(NFTaddress);
      require(msg.sender == NFTtoswap.ownerOf(1), "You are not the owner of the NFT." );
      require(approvalchecker(NFTaddress),"This Token is not created by us, you can not send it to swap.");
      require(onSwap);
        // Proposed NFTs owner is set as this contracts address. This contract has now escrow role.
      require (NFTtoswap.getApproved(1) == address(this));
      NFTtoswap.transferFrom(NFTtoswap.ownerOf(1),address(this),1);
      Swappers.push(Swapper({ // Proposal is added to the list
          SwapperAddr: msg.sender,
          SwapProposalTokenAddr: NFTaddress
      }));
    
  }
  
  // Swap requestor selects a NFT using this function. Uses the number of the proposal.
  // Message sender must be the swap requestor. Selected NFT Proposal must be still valid.
  function swapAgree(uint256 swapid) public payable {
      require(Swappers.length > 0, "There is no proposal");
      require(Swappers.length-1 >= swapid, "There isn't such a proposal");
      require(Swappers[swapid].SwapperAddr != address(0x0),"This proposal was withdrawn or swapped before.");
      require(msg.sender == ownerBeforeSwap, "You don't own this token, therefore you can not swap it.");
      ownerBeforeSwap = address(0x0);// address is set back to 0x0, so that the new owner of this token can swap if they desire to.
      newNFT NFTtoswap = newNFT(SwapRequestedNFT);
      onSwap = false;
      newNFT NFTtoswap2 = newNFT(Swappers[swapid].SwapProposalTokenAddr); // Address of contract of selected NFT
      NFTtoswap.transferFrom(address(this),Swappers[swapid].SwapperAddr,1); // Swap completed
      delete Swappers[swapid];
      NFTtoswap2.transferFrom(address(this),msg.sender,1); // Selected proposal's owner is changed with requestor 
  }
  
  // This function is used by the proposer. Can cancel the proposal.
  function swapWithdraw(uint256 swapid) public {
      if (ownerBeforeSwap != msg.sender) {
          require(msg.sender == Swappers[swapid].SwapperAddr, "You don't own this token, therefore you can not withdraw your proposal.");
          newNFT NFTtoswap = newNFT(Swappers[swapid].SwapProposalTokenAddr);   
          address SafeSwap = Swappers[swapid].SwapperAddr;// this exists so that we can delete Swapper's id from swappers, before transfering their token.
          delete Swappers[swapid];
          NFTtoswap.transferFrom(address(this),SafeSwap,1); // Change the NFT owner back to its original
          return;
      }
        this.transferFrom(address(this), msg.sender,1);
        onSwap = false;
      }
 }
