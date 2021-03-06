$(document).ready(function(){
	$(".nav-link, .footer_tags").click(function(){
		window.location.href="https://www.metarix.network"+$(this).attr("href");
	});
});

function progressBar()
{
	$.ajax({
	  method: "POST",
	  url: "//18.144.181.170:8000/api/readMtrxContract"
	})
	.done(function( msg ) {
		var totalBnbReceived = msg.totalBnbReceived;
		var maxCap = msg.maxCap;
		var result=(((totalBnbReceived)/(maxCap))*100).toFixed(2);
		if(isNaN(result)){
			result=0;
		}
		$(".landing_progress span").html(result+"%");
		$("#progress-bar").removeAttr("style").css("width", result+"%").html(result+"%");
		$(".totalRaised").html(totalBnbReceived+" BNB");
		if(result>=99.50){
			$(".buyMtrx").remove();
		}
	});
}

$(document).ready(function(){
	progressBar();
	setInterval(function () {
		progressBar();
	}, 5000);
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
});

async function refreshFunction(){
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
		//$(".total_coins_show").html((result.totalBnbTokens).toFixed(2));
		//$("#total_coins_dollar").html("$"+(result.totalBnbTokens*0.05).toFixed(2));
		$(".total_coins_show").html(parseFloat(result.totalMtrxTokens).toFixed(2));
		$("#total_coins_dollar").html("$"+parseFloat(result.totalMtrxTokens*0.05).toFixed(2));
		$('[name="tokens"]').val(bnbPrice);
		$(".mtrxCount").html(((bnbPrice*result.currentBnbPrice)/0.05).toFixed(2));
		var progressBar=parseFloat($("#progress-bar").html());
		if(progressBar>=99.50){
			$(".buyMtrx").remove();
		}
	});
}

$(document).ready(function(){
	refreshFunction();
});