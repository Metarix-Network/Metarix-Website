<?php 

include("config.php");
/*$sql=mysqli_query($con, "select * from sale_settings");
if(!empty($sql))
{
    $res=mysqli_fetch_object($sql);
    $pre_sale = $res->pre_sale;
    if($pre_sale == '1')
    {
        header("Location: ".MAIN_URL);
        die();
    }
}
else
{
    header("Location: ".MAIN_URL);
    die();
}*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Metarix - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="img/metrix_fav_icon.png" rel="icon">
  <link href="img/metrix_fav_icon.png" rel="apple-touch-icon">

  <!-- font awsome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Bootstrap Files -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
  
  <!-- Template Main CSS File -->
  <link rel="stylesheet" href="css/style.css" >


  <!-- slider  -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />


<!-- animation bounce  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>





  <!-- ========================================================  -->
  <style type="text/css">
      #btn-disconnect, #btn-buy{
        display: none;
      }
  </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.php"><img src="img/metarix_update_2022.png" alt=""></a></h1>
    

      <nav id="navbar" class="navbar">
        
        <ul>
		  <!-- <li><a class="getstarted scrollto buyMtrx" id="btn-buy" href="javascript:void(0);">Buy MTRX</a></li>	 -->
          <li><a class="getstarted scrollto" id="btn-connect" href="javascript:void(0);">Connect Wallet</a></li>
          <li><a class="getstarted scrollto" id="btn-disconnect" href="javascript:void(0);">Disconnect Wallet</a></li>

          <!-- <li><a class="getstarted scrollto"  href="#"><i class="fa fa-user-o" aria-hidden="true"></i></a></li> -->
          <!--<li><a class="users"  href="#"><i class="fa user_btn fa-user-o" aria-hidden="true"></i></a></li>-->
        </ul>
        <i class="fa fa-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- <div id="preloader"></div> -->

        <div id="loader" >
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="dot"></div>
            <div class="lading"></div>
        </div>

        <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3HR2PVS87"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Z3HR2PVS87');
</script>
<!-- header ended  -->


<div class="metarixs_landing">


<section class="meta_landing">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="metarixs_landing_logo">
                    <img src="img/footer-logo.png" alt="">
                </div>
                <div class="landing_heding">
                    <h1 class="heading_text">Metarix Presale </h1>
                    <p>Metarix is a fully decentralized Blockchain for Gaming, NFT's and Metaverse and Digital Marketing Platform through Metaverse</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="landing_ryt_data">
                    <div class="busnd">
                        <h6>1 BNB = <span id="current_price"></span></h6>
                    </div>
                    <div class="landing_progress">
                        <h6>Progress <span>0%</span></h6>
                        <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
                    </div>
                    <div class="buys_button">
                      <div class="total rasid">
                          <h6>Total Raised</h6>
                          <!-- <p class="totalRaised">0.00 BNB</p> -->
                      </div>
                      <div class="buy_btns">
                        <!--  <a class="getstarted scrollto btnss1 buyMtrx" id="btn-buy" href="javascript:void(0);">Buy MTRX</a>
 -->                         <!-- <a class="getstarted scrollto buyMtrx" id="btn-buy" href="javascript:void(0);">Buy MTRX</a> -->
                         <!-- <a class="getstarted scrollto" id="btn-disconnect" href="javascript:void(0);">Disconnect Wallet</a></li> -->
                         

                      </div>
                      
                    </div>
                    
                    
                        <!-- <p>0 MTRX</p> -->
                    </div>
                   <!--  <div class="limites_status">
                        <div class="limited">
                            <h6>Limited</h6>
                            <h6>Participants <span>465</span></h6>
                        </div>
                        <div class="status">
                            <h6>Status</h6>
                            <h6>Upcoming</h6>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<section class="landing_token_informations">
    <div class="container">
         <div class="row">
            <div class="col-lg-6">
                <h1 class="tok_info_head">Pool Information</h1>
                <div class="pool_info_data">                   
                    <div class="token_distrubation">
                        <h6 class="info_name">Min. Allocation</h6>
                        <p class="info_para">$0</p>
                    </div>
                    <div class="token_distrubation">
                        <h6 class="info_name">Max Allocation</h6>
                        <p class="info_para">$5000</p>
                    </div>
                    <div class="token_distrubation">
                        <h6 class="info_name">Total Price</h6>
                        <p class="info_para">1 MTRX = $0.05</p>
                    </div>
                    <div class="token_distrubation_end">
                        <h6 class="info_name">Access Type</h6>
                        <p class="info_para">Crowd Sale</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <h1 class="tok_info_head">Token Information</h1>
                <div class="token_info_data">
                    <div class="token_distrubation">
                        <h6 class="info_name">Name / Symbol</h6>
                        <p class="info_para">Metarix / MTRX</p>
                    </div>
                    <div class="token_distrubation">
                        <h6 class="info_name">Decimals</h6>
                        <p class="info_para">9</p>
                    </div>
                    <div class="token_distrubation">
                        <h6 class="info_name">Address</h6>
                        <div class="token_adress">
                        <p class="info_para"><a class="info_para adres-lnk" href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151" target="_blank">0x55382eEEF32EB87AA27D13d7637954C344154151</a>
                            <a href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151" target="_blank">
                                <p class="info_para adres-lnk mbl-adres-lnk">0x5538...4151</p></a>
							<input type="hidden" id="copyRefrelInputClaim" value="0x55382eEEF32EB87AA27D13d7637954C344154151">
							<span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltip"><i class="fa fa-clone" aria-hidden="true"></i></span>
							<span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltipshow" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i></span>
						</p>
                    </div>
                    </div>
                    <div class="token_distrubation_end">
                        <h6 class="info_name">Total Supply</h6>
                        <p class="info_para">1,200,000,000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="preslae-abt">
    <div class="container">
        <div class="row">
            <h2 class="landing_abt_head">About the Project</h2>
            <div class="col-lg-6">
                <div class="landingpage_paragharph">
                    <p>Metarix is a fully Decentralized Blockchain platform for Gaming, NFT's and Metaverse. We at Metarix are dreaming to build the community owned decentralized blockchain platform. Our platform consists of Blockchain, DEX, NFT Marketplace, Metaverse , Virtual Land Parcels , SDK and much more.
                    We are dreaming of building a complete ecosystem for gaming projects to give users the one stop solution for all the gaming project needs. Metarix is a decentralized web 3.0 platform and is powered using the Metarix Chain a layer 2 solution on top of Ethereum using Ethereum's Scaling and security measures to ensure our users are protected. </p>
                </div>
            </div>
            <div class="col-lg-6">
                 <div class="landingpage_paragharph">
                    <p>subject to all the terms and conditions. Metarix Virtual Land project consists of 109,000 land parcels each of different size. You can buy virtual real estate property on Metarix chain and build anything you dream of in Metarix Metaverse using our own SDK. We provide additonal support from Building NFT's and Games to customizing them and even pushing your project to greater extent with all the resources of Metarix at your disposal. </p>
                </div>
            </div>
        </div>
    </div>
</section>


</div>


 <!-- footer started  -->
 <footer class="footer landing-foot" id="footer" >
      <div class="container footer_data">
        <div class="row footer_items">
            <div class="col-md-6 footer_left">
                <img class="footers_img" src="img/metarix_update_2022.png" alt="">
                <p>Metarix is a fully decentralized Blockchain for Gaming, NFT's and Metaverse and Digital Marketing Platform through Metaverse.</p>
            </div>
            <!-- <div class="col-xl-3">
                <h4 class="ft_head_text">Our Products</h4>
                <div class="ft_links">
                    <a class="footer_tags" href="metarix_blockchain.php">Metarix Blockchain</a>
                    <a class="footer_tags" href="metarix_sdk.php">Metarix SDK</a>
                    <a class="footer_tags" href="market_place.php">Metarix Market Place</a>
                </div>
            </div> -->
          <!-- <div class="col-xl-4">
            <h4 class="ft_head_text">Our Links</h4>
            <div class="ft_links">
                <a class="footer_tags" href="#Token">Terms of Services</a>
                <a class="footer_tags" href="#Roadmap">Privacy Policy</a>
                <a class="footer_tags" href="#Teams">Team</a>
                <a class="footer_tags" href="contact.php">Contact Us</a>
                <li class="ftlightpaper">
                  <a target="_blank" href="img/whitepaper/Whitepaper .pdf">Light Paper</a>
                </li>
            </div>
          </div> -->
          <div class="col-md-6 footer_right_landing">
              <div class="ft_right_land">
                 <h4 class="ft_head_text">Follow Us</h4>
                <div class="ft_social_links ft_social_links_land">
                    <a target="_blank" href="https://www.facebook.com/The-Metarix-104132965453352 "><i class="fa icon_links fa-facebook" aria-hidden="true" ></i></a>
                    <a target="_blank" href="https://www.instagram.com/the_metarix/"><i class="fa icon_links fa-instagram" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.linkedin.com/company/the-metabox/ "><i class="fa icon_links fa-linkedin-square" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://twitter.com/The_Metarix"><i class="fa icon_links fa-twitter" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://t.me/metarix "><i class="fa icon_links fa-telegram" aria-hidden="true"></i></a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCvrtvQGYuu-ZiSzIpO8noHw"><i class="fa icon_links fa-youtube-play" aria-hidden="true"></i></a>
                </div>
              </div>

          </div>
        </div>
      </div>
  </footer>

  <footer class="footer_ended">
    <div class="footer_ended">
      <h5 class="footer-ended_text">@Copyright Metarix 2022</h5>
    </div>
  </footer>
<!-- footer ended  -->

  <!-- <div id="preloader"></div>-->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="fa fa-arrow-up"></i></a>
  
  <!-- Modal -->
	<div class="modal fade" id="buyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<form method="post" class="buySubmit">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Buy MTRX</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			  </div>
			  <div class="modal-body">
				<div class="mb-3">
				  <label for="tokens" class="form-label">BNB Tokens</label>
				  <input type="text" class="form-control" name="tokens" id="tokens" placeholder="BNB Tokens">
				  <span class="red">You will get approximately <span class="mtrxCount">0</span> MTRX</span>
				</div>
			  </div>
			  <div class="modal-footer">
				<!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
				<button type="submit" class="btn btn-primary">Buy</button>
			  </div>
			</div>
		</form>
	  </div>
	</div>

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>

  <script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
<script type="text/javascript" src="https://unpkg.com/evm-chains/lib/index.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
<script src="js/walletConnect.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.0.umd.min.js" type="text/javascript"></script>
<script type="text/javascript">
function checkAmount(){
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
		$("#current_price").html('$'+response.price);
	  }
	},
	complete:function(data){
	  // Hide image container
	}
  });
} 
checkAmount();
setInterval(checkAmount, 5000);
</script>
<script type="text/javascript">
function copyToClipboard(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
  $("#myTooltip").hide();
  $("#myTooltipshow").show();
}
</script>

</body>

</html>