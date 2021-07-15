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