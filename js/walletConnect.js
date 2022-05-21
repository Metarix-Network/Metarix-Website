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
	if(chainId!=56){
		swal("Error", "Please connect with Binance Smartchain Mainnet!","error");
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
	$("#btn-buy").css("display", "block");
	$("#btn-disconnect").css("display", "block");
    let firstFive = accounts[0].substring(0, 4);
    let lastFive = accounts[0].substr(accounts[0].length - 4);
    $("#btn-disconnect").html("Disconnect Wallet "+firstFive+"...."+lastFive);
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
	$("#btn-buy").css("display", "none");
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
	$("#btn-buy").css("display", "none");
	$("#btn-disconnect").css("display", "none");
	//localStorage.setItem('walletConnect', 0);
}


/**
 * Main entry point.
 */
window.addEventListener('load', async () => {
    init();
    document.querySelector("#btn-connect").addEventListener("click", onConnect);
    document.querySelector("#btn-disconnect").addEventListener("click", onDisconnect);
});

function contractFunction()
{
	var contractAddress="0xab75a21fd3cbf92e5e10c27982562e9b9ebbae2e";
	var rpcUrl="https://bsc-dataseed.binance.org/";
	var abi=[{"inputs":[{"internalType":"uint256","name":"_maxCap","type":"uint256"},{"internalType":"uint256","name":"_saleStartTime","type":"uint256"},{"internalType":"uint256","name":"_saleEndTime","type":"uint256"},{"internalType":"address payable","name":"_projectOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[],"name":"NAME","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"buy","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"investedAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxCap","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"projectOwner","outputs":[{"internalType":"address payable","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"saleEndTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"saleStartTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBnbReceived","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];
	const providerSign = new ethers.providers.Web3Provider(provider);
	const walletSigner = providerSign.getSigner();
	const contractData = new ethers.Contract(contractAddress, abi, walletSigner);
	return contractData;
}

$(".buySubmit").submit(function(){
	try {
		var tokens=$(this).find('[name="tokens"]').val();
		let value = ethers.utils.parseUnits(tokens);
		const providerData = new ethers.providers.Web3Provider(provider);
		const walletSigner = providerData.getSigner();
		let contract = contractFunction();
		contract.buy({ value }).then(async (tx) => {
			$.ajax({
			  method: "POST",
			  url: "functions.php",
			  data: { 
				type: "saveBnbRecords",
				tokens, 
				address: await walletSigner.getAddress(),
				txHash: tx.hash,
				mtrxPrice: parseFloat($('.mtrxCount').html())
			  }
			})
			.done(function( msg ) {
				//refreshFunction();
				//$("#buyModal").modal("hide");
				window.location.href="/mtrx_thanks.php";
				//swal("Conguratulations!", "You have successfully participated in our presale. Please check your token balance in the claim page. Metarix will announce a claim date soon.", "success");
			});
		})
		.catch(function(err) {
			if(err.data){
				swal("Error", err.data.message, "error");
			}
		});
	}
	catch(err) {
		swal("Error", err.message, "error");
	}
	return false;
});