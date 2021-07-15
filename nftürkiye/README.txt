How to use NFT contract:

firstly we need the approval contracts address, we first create a approver.sol contract, and dont forget to set the approvers address as yours

afterwards, we set the NFT approver contracts address as the approval contracts address.

after doing these steps, we now can create our NFT.sol contract.

1- mint the nft you want with tokenid set as 1

2- now go to the approver contract, and add the NFT's address to it, after doing this call the approvetokens function, so that the tokens 
you added to the other contract can be known by this contract. (if you create multiple contracts, this must be done for each one off them
This may be a problem if you create a lot of NFT's but also it can be fixed by adding a function that calls approveTokens of each NFT from
approver contract.)

3- to use any function, the contract needs approval to transfer your NFT from your wallet to the contract,
so first approve the contract with the contracts address.

4- done! Now you can use the functions.