$(document).ready(function(){
	$(".nav-link, .footer_tags").click(function(){
		window.location.href="https://dev.metarix.network"+$(this).attr("href");
	});
});

function contractFunction()
{
	var contractAddress="0xf72265173012912f61fff64ce41ea235977d0590";
	var rpcUrl="https://bsc-dataseed.binance.org/";
	var abi=[{"inputs":[{"internalType":"uint256","name":"_maxCap","type":"uint256"},{"internalType":"uint256","name":"_saleStartTime","type":"uint256"},{"internalType":"uint256","name":"_saleEndTime","type":"uint256"},{"internalType":"address payable","name":"_projectOwner","type":"address"}],"stateMutability":"nonpayable","type":"constructor"},{"anonymous":false,"inputs":[{"indexed":true,"internalType":"address","name":"previousOwner","type":"address"},{"indexed":true,"internalType":"address","name":"newOwner","type":"address"}],"name":"OwnershipTransferred","type":"event"},{"inputs":[],"name":"NAME","outputs":[{"internalType":"string","name":"","type":"string"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"buy","outputs":[],"stateMutability":"payable","type":"function"},{"inputs":[{"internalType":"address","name":"","type":"address"}],"name":"investedAmount","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"maxCap","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"owner","outputs":[{"internalType":"address","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"projectOwner","outputs":[{"internalType":"address payable","name":"","type":"address"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"saleEndTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"saleStartTime","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[],"name":"totalBnbReceived","outputs":[{"internalType":"uint256","name":"","type":"uint256"}],"stateMutability":"view","type":"function"},{"inputs":[{"internalType":"address","name":"newOwner","type":"address"}],"name":"transferOwnership","outputs":[],"stateMutability":"nonpayable","type":"function"}];
	const provider = new ethers.providers.Web3Provider(window.ethereum);
	const walletSigner = provider.getSigner();
	const contractData = new ethers.Contract(contractAddress, abi, walletSigner);
	return contractData;
}
$(document).ready(function(){
	let contract = contractFunction();
	contract.totalBnbReceived().then((data1) => {
		contract.maxCap().then((data2) => {
			var result=(((data1)/(data2))*100).toFixed(2);
			if(isNaN(result)){
				result=0;
			}
			$(".landing_progress span").html(result+"%");
			$(".progress-bar").removeAttr("style").css("width", result+"%").html(result+"%");
			$(".totalRaised").html(data1/1000000000000000000+" BNB");
		});
	});
});

$(document).ready(function(){
	$('[name="tokens"]').keyup(function(){
		$.ajax({
			url: "functions.php",
			method:'post',
			data: {
			  "type": "getTokenBalance",
			},
			dataType: "json",
			beforeSend: function(){
			 // Show image container
			},
			success:function(response) {
			  if(response.status == '1')
			  {
				var price = response.price;
				$(".mtrxCount").html((($('[name="tokens"]').val()*price)/0.05).toFixed(2));
			  }
			},
			complete:function(data){
			  // Hide image container
			}
		});
	});
	$(".buyMtrx").click(function(){
		$("#buyModal").modal("show");
	});
	$(".buySubmit").submit(function(){
		try {
			var tokens=$(this).find('[name="tokens"]').val();
			let value = ethers.utils.parseUnits(tokens);
			const provider = new ethers.providers.Web3Provider(window.ethereum);
			const walletSigner = provider.getSigner();
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
					$("#buyModal").modal("hide");
					swal("Conguratulations!", "You have successfully participated in our presale. Please check your token balance in the claim page. Metarix will announce a claim date soon.", "success");
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
	})
});

$(document).ready(async function(){
	const provider = new ethers.providers.Web3Provider(window.ethereum);
	const walletSigner = provider.getSigner();
	$.ajax({
	  method: "POST",
	  url: "functions.php",
	  data: { 
		type: "getData",
		address: await walletSigner.getAddress(),
	  }
	})
	.done(function( result ) {
		result=JSON.parse(result);
		var bnbPrice=(5000/result.currentBnbPrice);
		$("#total_coins_show").html(result.totalBnbTokens);
		$('[name="tokens"]').val(bnbPrice);
		$(".mtrxCount").html(((bnbPrice*result.currentBnbPrice)/0.05).toFixed(2));
	});
});