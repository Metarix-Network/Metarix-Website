<?php
header("location: /mtrx_presale-on.php");
die();
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top" >
    <div class="container ">
    <div class="header-inner">
      <h1 class="logo me-auto"><a href="index.php"><img src="img/metarix_update_2022.png" alt=""></a></h1>

      <nav id="navbar" class="navbar">
        
        <ul class="buy_btns1">
          <li><button class="buy_disablebtns" type="button" disabled>Connect Wallet</button>
              <!-- <a class="getstarted scrollto " href="javascript:void();">Connect Wallet</a> -->
            </li>
        </ul>
        <i class="fa fa-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    

    </div>
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








<div class="metarixs_landing">
<section class="landing_timmer">
    <div class="container">
        <div class="col-sm-12 p-0">
           <div class="timer_head">
               <h1>PRESALE COUNTDOWN!</h1>
               <!-- <p>A pre-sale is a targeted sale before your product actually goes live. You sell the idea of your course to a small portion of your audience before you’ve created all of your course content. Typically, you pre-sell by setting up your sales page, discounting your course, and sending an email out to your list (or communicating the sale to your audience in another way).</p> -->
           </div>
        </div>
        <div class="row">
            <div class="col-lg-6">          
            <div id="clockdiv">
                <div class="timmer ">
                    <span class="days">0</span>
                    <div class="smalltext">Days</div>
                </div>
                <div class="timmer ">
                    <span class="hours">00</span>
                    <div class="smalltext">Hours</div>
                </div>
                <div class="timmer">
                    <span class="minutes">00</span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div class="timmer">
                    <span class="seconds">00</span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
            <div class="landing_heding update_head">
                <h1 class="heading_text">Metarix Presale </h1>
                <p>Metarix is a fully decentralized Blockchain for Gaming, NFT's and Metaverse and Digital Marketing Platform through Metaverse</p>
            </div>
            <div class="timer-btm update_left_bullets">
                <ul>
                    <li>Presale will starts on the 20th May 13:00 CET and will last until 3 million dollar hardcap is hit or till 27th May 13:00 CET. </li>
                    <li>No minimum purchase </li>
                    <li>Maximum purchase is $5000 in BNB</li>
                    <li>HOW TO: You connect your wallet, enter the amount of BNB (BEP20) you want to purchase for, click BUY, confirm transaction, and now you have successfully participated in MTRX presale</li>
                </ul>
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
                        <!-- <p>0 MTRX</p> -->
                    </div>
                    <div class="buys_button">
                      <div class="total rasid">
                          <h6>Total Raised</h6>
                          <p class="totalRaised">0.00 BNB</p>
                      </div>
                      <div class="buy_btns">
                            <button class="buy_disablebtns" type="button" disabled>Buy MTRX</button>
                         <!-- <a class="getstarted scrollto btnss1 buyMtrx" id="btn-buy" href="javascript:void(0);" disabled >Buy MTRX</a> -->
                         <!-- <a class="getstarted scrollto buyMtrx" id="btn-buy" href="javascript:void(0);">Buy MTRX</a> -->
                         <!-- <a class="getstarted scrollto" id="btn-disconnect" href="javascript:void(0);">Disconnect Wallet</a></li> -->
                      </div>
                      
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
                <div class="timer-btm">
                     <ul>
                        <li>Be careful of scammers. Only get information from Metarix’s official media channels.</li>
                        <li>To participate in the presale, you will simply need to transfer BNB to it, and in return you will get the equivalent amount of tokens in MTRX, which can be claimed at and after launch</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="landing_token_informations timer-tkn">
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
                            <input type="hidden" id="copyRefrelInput" value="0x55382eEEF32EB87AA27D13d7637954C344154151">
                            <a href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151" target="_blank">
                                <p class="info_para adres-lnk">0x55382eEEF32EB87AA27D13d7637954C344154151</p></a>
                                <a href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151" target="_blank">
                                <p class="info_para adres-lnk mbl-adres-lnk">0x5538...4151</p></a>
                            <span class="cpy" onclick="copyToClipboard('#copyRefrelInput')" id="myTooltip"><i class="fa fa-clone" aria-hidden="true"></i></span>
                            <span class="cpy" onclick="copyToClipboard('#copyRefrelInput')" id="myTooltipshow" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i></span>
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
                    <p>Discount details will be disclosed soon before the launch. Metarix Virtual Land project consists of 109,000 land parcels each of different size. You can buy virtual real estate property on Metarix chain and build anything you dream of in Metarix Metaverse using our own SDK. We provide additional support from Building NFT's and Games to customizing them and even pushing your project to greater extent with all the resources of Metarix at your disposal. </p>
                </div>
            </div>
        </div>
    </div>
</section>





</div><!-- metarixs_landing ended  -->



    <!-- footer  -->
    <?php include("includes/footer.php"); ?>

<script src="https://cdn.ethers.io/lib/ethers-5.0.umd.min.js" type="text/javascript"></script>
<!-- timer jss  -->
<script>



    function getTimeRemaining(endtime) {
 
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');
 // console.log(endtime);
  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
      //console.log('kuldeep');
      changePreSaleStatus();
     
      setInterval(redirect_another, 1000);
      //window.location = "mtrx_presale-on.php";
    }
    
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

function redirect_another()
{
    window.location = "mtrx_presale-on.php";
}

//const registration_date_customer = new Date("2022/05/20 14:30:00Z"); //live
//const registration_date_customer = new Date("2022-05-19T09:17:00Z"); //testing
//const deadline = registration_date_customer.toLocaleString("sv", { timeZone: "Europe/Paris"});
  
//const deadline = '2022-05-20T11:00:00Z'; //final
const deadline = '2022-05-20T12:15:00Z'; //final

//const deadline = '2022-05-19 12:03 pm'; //testing
//var deadline = new Date(Date.parse(new Date()) + 18 * 24 * 60 * 60 * 1000);
//initializeClock('clockdiv', deadline);


/*function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
      //console.log('kuldeep');
      window.location = "mtrx_presale-on.php";
    }
    
  }*/
  
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

/**************************************************************
 * function used for change pre sale status
 *************************************************************/
function changePreSaleStatus(){
      $.ajax({
        url: "functions.php",
        method:'post',
        data: {
          "type": "change_presale",
          },
        dataType: "json",
        success:function(response) {
          console.log('done');
        }
    });
}
</script>

