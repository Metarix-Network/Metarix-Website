/**
 * Example JavaScript code that interacts with the page and Web3 wallets
 */

// Unpkg imports
const Web3Modal = window.Web3Modal.default;
const WalletConnectProvider = window.WalletConnectProvider.default;
const EvmChains = window.EvmChains;
const Fortmatic = window.Fortmatic;

// Web3modal instance
let web3Modal

// Chosen wallet provider given by the dialog window
let provider;


// Address of the selected account
let selectedAccount;


/**
 * Setup the orchestra
 */
function init() {
	
    console.log("Initializing example");
    console.log("WalletConnectProvider is", WalletConnectProvider);
    console.log("Fortmatic is", Fortmatic);
	
	//if(localStorage.getItem('walletConnect') && localStorage.getItem('walletConnect')==1){
		//$("#btn-connect").css("display", "none");
		//$("#btn-disconnect").css("display", "block");
	//}

    // Tell Web3modal what providers we have available.
    // Built-in web browser provider (only one can exist as a time)
    // like MetaMask, Brave or Opera is added automatically by Web3modal
    const providerOptions = {
        walletconnect: {
            package: WalletConnectProvider,
            options: {
                rpc: {
                    56: 'https://bsc-dataseed.binance.org/'
                },
                chainId: 56,
                network: "binance"
            },
        },
    };

    web3Modal = new Web3Modal({
        cacheProvider: false, // optional
        providerOptions, // required
    });

}


/**
 * Kick in the UI action after Web3modal dialog has chosen a provider
 */
async function fetchAccountData() {

    // Get a Web3 instance for the wallet
    const web3 = new Web3(provider);

    console.log("Web3 instance is", web3);

    // Get connected chain id from Ethereum node
    const chainId = await web3.eth.getChainId();
    console.log(chainId);
	if(chainId!=97){
		swal("Error", "Please connect with Binance Smartchain Testnet!","error");
		return false;
	}
    // Load chain information over an HTTP API
    // const chainData = await EvmChains.getChain(chainId);
    // console.log(chainData)
    // document.querySelector("#network-name").textContent = chainData.name;

    // Get list of accounts of the connected wallet
    const accounts = await web3.eth.getAccounts();

    // MetaMask does not give you all accounts, only the selected account
    console.log("Got accounts", accounts);

    // Display fully loaded UI for wallet data
    //document.querySelector("#prepare").style.display = "none";
    //document.querySelector("#connected").style.display = "block";
	$("#btn-connect").css("display", "none");
	$("#btn-disconnect").css("display", "block");
    let firstFive = accounts[0].substring(0, 4);
    let lastFive = accounts[0].substr(accounts[0].length - 4);
    //$("#btn-disconnect").html("Disconnect Wallet "+firstFive+"...."+lastFive);
    $("#btn-disconnect").html("Disconnect Wallet");
    /*var html = '<span class="cpy" onclick="copyToClipboardCurrent(/'"#copyRefrelInputCurrent"/')" id="myTooltipCurrent"><i class="fa fa-clone" aria-hidden="true"></i></span><span class="cpy" onclick="copyToClipboardCurrent(/'"#copyRefrelInputCurrent"/')" id="myTooltipCurrentshow" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i></span>';*/
    $("#wallet_connect").html(accounts[0]);
    //showWalletAmount(accounts[0]);
	//localStorage.setItem('walletConnect', 1);
	refreshFunction();
}



/**
 * Fetch account data for UI when
 * - User switches accounts in wallet
 * - User switches networks in wallet
 * - User connects wallet initially
 */
async function refreshAccountData() {

    // If any current data is displayed when
    // the user is switching acounts in the wallet
    // immediate hide this data
    //document.querySelector("#connected").style.display = "none";
    //document.querySelector("#prepare").style.display = "block";
	$("#btn-connect").css("display", "block");
	$("#btn-disconnect").css("display", "none");

    // Disable button while UI is loading.
    // fetchAccountData() will take a while as it communicates
    // with Ethereum node via JSON-RPC and loads chain data
    // over an API call.
    document.querySelector("#btn-connect").setAttribute("disabled", "disabled")
    await fetchAccountData(provider);
    document.querySelector("#btn-connect").removeAttribute("disabled")
}


/**
 * Connect wallet button pressed.
 */
async function onConnect() {

    console.log("Opening a dialog...................", web3Modal);
    try {
        provider = await web3Modal.connect();
    } catch (e) {
        console.log("Could not get a wallet connection", e);
        return;
    }

    // Subscribe to accounts change
    provider.on("accountsChanged", (accounts) => {
        fetchAccountData();
    });

    // Subscribe to chainId change
    provider.on("chainChanged", (chainId) => {
        fetchAccountData();
    });

    // Subscribe to networkId change
    provider.on("networkChanged", (networkId) => {
        fetchAccountData();
    });

    await refreshAccountData();
}

/**
 * Disconnect wallet button pressed.
 */
async function onDisconnect() { 

    console.log("Killing the wallet connection", provider);

    // TODO: Which providers have close method?
    if (provider.close) {
        await provider.close();

        // If the cached provider is not cleared,
        // WalletConnect will default to the existing session
        // and does not allow to re-scan the QR code with a new wallet.
        // Depending on your use case you may want or want not his behavir.
        await web3Modal.clearCachedProvider();
        provider = null;
    }

    selectedAccount = null;

    // Set the UI back to the initial state
    //document.querySelector("#prepare").style.display = "block";
    //document.querySelector("#connected").style.display = "none";
	$("#btn-connect").css("display", "block");
	$("#btn-disconnect").css("display", "none");
	//localStorage.setItem('walletConnect', 0);
	$("#total_coins_show").html('0');
	$("#total_coins_dollar").html('$');
}


/**
 * Main entry point.
 */
window.addEventListener('load', async () => {
    init();
    document.querySelector("#btn-connect").addEventListener("click", onConnect);
    document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});

//var contractAddress="0x8fb73353b44276974a50ab422d3d467aa6ea06eb";
//var contractAddress="0x55382eEEF32EB87AA27D13d7637954C344154151";
//var abi=[{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"from","type":"address"},{"indexed":true,"internalType":"address","name":"to","type":"address"},{"indexed":false,"internalType":"uint256","name":"value","type":"uint256"}],"name":"Transfer","type":"event"},{"constant":true,"inputs":[{"internalType":"address","name":"_owner","type":"address"}],"name":"balanceOf","outputs":[{"internalType":"uint256","name":"balance","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":true,"inputs":[],"name":"totalSupply","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"payable":false,"stateMutability":"view","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"_to","type":"address"},{"internalType":"uint256","name":"_value","type":"uint256"}],"name":"transfer","outputs":[{"internalType":"bool","name":"","type":"bool"}],"payable":false,"stateMutability":"nonpayable","type":"function"},{"constant":false,"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"payable":false,"stateMutability":"nonpayable","type":"function"}];


//async function showWalletAmount(address){
    //const provider = new ethers.providers.Web3Provider(window.ethereum, "any");
    //const walletSigner = provider.getSigner();
    //const contract = new ethers.Contract(contractAddress, abi, walletSigner);
    //contract.balanceOf(address).then((bal) => {
        //console.log(bal);
        //console.log(bal._hex);
        //var walletamount = parseInt(bal._hex, 16);
        //walletamount = walletamount/1000000000;
        //$("#total_coins_show").html(""+walletamount+"");
        //var dollaramount =  parseFloat(walletamount*0.05);
        //$("#total_coins_dollar").html("$"+dollaramount+"");
        
            
    //});
//}


