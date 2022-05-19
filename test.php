
<div class="metarixs_landing">

<section class="landing_timmer preesale_wallet">
    <div class="container">
        <div class="row">
           <div class="wallet_connections">
               <div class="col-md-6">
                   <div class="wallet_conct_data">
                       <div class="conectionshead">
                            <input type="hidden" id="copyRefrelInputCurrent" value="">
                           <img src="img/staking/plus_icon.png" alt="">
                           <h6 id="wallet_connect" class="desk-wlcont">Wallet not connected</h6>
                           <h6 id="wallet_connect" class="responsive-wlcont">Wallet not connected</h6>
                       </div>
                       <div class="claim_item">
                           <h6>claimed</h6>
                           <span>0 MTRX </span>
                           <h6>of</h6>
                           <span>0 MTRX </span>
                       </div>
                       <div class="wallet_progress">
                            <div class="progress progress_white">
                                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> 
                            </div>
                            <span class="bold_info">0%</span>

                       </div>
                      
                   </div>
               </div>

               <div class="col-md-6">
                   <div class="right_wallet_conct">
                       <div class="ready_claim">
                           <h6>Balance in MTRX</h6>
                           <h6 id="total_coins_show">0</h6>
                       </div>
                       <div class="locked_balance">
                           <h6>Amount in dollars</h6>
                           <h6 id="total_coins_dollar">$</h6>
                       </div>
                       <!-- <div class="ready_claim">
                           <h6>Total Balance </h6>
                           <h6>0</h6>
                       </div> -->
                   </div>
                   <div class="wallet_buttons">
                       <!-- <a class="wallet_btn" href="#"><img src="img/presale_wallet/tiger.png" alt=""> MetaMask</a> -->
                       <!-- <a class="wallet_btn" href="javascript:void()"><img src="img/presale_wallet/ww.png" alt=""> WalletConnect</a> -->
                       <a class="wallet_btn" id="btn-connect" href="javascript:void(0);">Connect Wallet</a>
                       <a class="wallet_btn" id="btn-disconnect" href="javascript:void(0);">Disconnect Wallet</a>
                       
                   </div>
               </div>
           </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="leftside_info">
                    <h6>Few notes for the Users!</h6>
                    <ul class="left_info_details">
                        <li>Claiming MTRX can be done at launch time. Date and time will be announced later. </li>
                        <li>20% TGE ( unlocked ).</li>
                        <li>80% vested, 5% weekly unlock.</li>
                        <li>Remember to have a little BNB for gas fee, when claiming your MTRX tokens.</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="rightside_info">
                    <h6>Token Info</h6>
                    <div class="preesale_infos">
                        <div class="happ">
                            <h6>Name</h6>
                            <span class="bold_info">MTRX</span>
                        </div>
                        <div class="clone">
                            <h6>Address</h6>
                            <div class="adress-dta">
                            <span class="bold_info">
                                <input type="hidden" id="copyRefrelInputClaim" value="0x55382eEEF32EB87AA27D13d7637954C344154151">
                                <a class="clone_btn" target="_blank" href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151">0x55382eEEF32EB87AA27D13d7637954C344154151</a> 
                                <a class="clone_btn response-clnbtn" target="_blank" href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151">0x5538...4151</a>  
                                <!-- <i class="fa fa-clone" aria-hidden="true"></i> -->
                                
                            </span>
                            <span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltip"><i class="fa fa-clone" aria-hidden="true"></i></span>
                            <span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltipshow" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i></span>
                          </div>
                            
                        </div>
                        <div class="happ">
                            <h6>Decimals</h6>
                            <span class="bold_info">9</span>
                        </div> 
                    </div>
                </div>
            </div>
          

        </div>

    </div>
</section>






















</div>























    <!-- footer  -->
<?php include("includes/footer.php"); ?>
<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
<script type="text/javascript" src="https://unpkg.com/evm-chains/lib/index.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
<script src="js/walletConnectClaim.js"></script>
<script src="https://cdn.ethers.io/lib/ethers-5.0.umd.min.js" type="text/javascript"></script>





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

<script type="text/javascript">
function copyToClipboardCurrent(element) {
  var $temp = $("<input>");
  $("body").append($temp);
  $temp.val($(element).val()).select();
  document.execCommand("copy");
  $temp.remove();
  $("#myTooltipCurrent").hide();
  $("#myTooltipshowCurrent").show();
}
</script>



<style>
@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/

body {
    font-family: "Jost", sans-serif;
    color: #fff;
    background: #080808;

}

a {
    color: #fff;
    text-decoration: none;
}

a:hover {
    color: #f5f5f5;
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    font-family: "Poppins", sans-serif;
}

ul li {
    list-style: none;


}


/*...scrollbar....*/
#imageView {
  width: 100%;
  height: 100%;
  transform-origin: 0px 0px;
  transform: scale(1) translate(0px, 0px);
  cursor: grab;
}
div#imageView > img {
  width: 100%;
  height: auto;
}


.CodeMirror-vscrollbar {
    overflow-x: hidden;
    overflow-y: scroll;
}
 .CodeMirror-vscrollbar {
    position: absolute;
    z-index: 6;
    display: none;
    height: 100px;
    bottom: 100px !important;
    top: inherit;
    left: 10px;
}

 #imageView img {
   width: 100%;
  position: absolute;
  top: 0;
  left: 50%;
  transform: translate(-50%);
        }


/*--------------------------------------------------------------
  # Preloader
  --------------------------------------------------------------*/

  #loader {
    bottom: 0;
    height: 175px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 175px;
}

#loader {
    bottom: 0;
    height: 175px;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 175px;
}

#loader .dot {
    bottom: 0;
    height: 100%;
    left: 0;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 90px;
}

#loader .dot::before {
    border-radius: 100%;
    content: "";
    height: 90px;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    transform: scale(0);
    width: 87.5px;
}

#loader .dot:nth-child(7n+1) {
    transform: rotate(45deg);
}

#loader .dot:nth-child(7n+1)::before {
    animation: 2s linear 0.3s normal none infinite running load;
    background: #EE82EE none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+2) {
    transform: rotate(90deg);
}

#loader .dot:nth-child(7n+2)::before {
    animation: 2s linear 0.3s normal none infinite running load;
    background: #DA70D6 none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+3) {
    transform: rotate(135deg);
}

#loader .dot:nth-child(7n+3)::before {
    animation: 2s linear 0.4s normal none infinite running load;
    background: #FF00FF none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+4) {
    transform: rotate(180deg);
}

#loader .dot:nth-child(7n+4)::before {
    animation: 2s linear 0.5s normal none infinite running load;
    background: #BA55D3 none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+5) {
    transform: rotate(225deg);
}

#loader .dot:nth-child(7n+5)::before {
    animation: 2s linear 0.6s normal none infinite running load;
    background: #9400D3 none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+6) {
    transform: rotate(270deg);
}

#loader .dot:nth-child(7n+6)::before {
    animation: 2s linear 0.7s normal none infinite running load;
    background: #9932CC none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+7) {
    transform: rotate(315deg);
}

#loader .dot:nth-child(7n+7)::before {
    animation: 2s linear 0.8s normal none infinite running load;
    background: #8B008B none repeat scroll 0 0;
}

#loader .dot:nth-child(7n+8) {
    transform: rotate(360deg);
}

#loader .dot:nth-child(7n+8)::before {
    animation: 2s linear 0.9s normal none infinite running load;
    background: #800080 none repeat scroll 0 0;
}

#loader .lading {
    background-position: 50% 50%;
    background-repeat: no-repeat;
    bottom: -40px;
    height: 20px;
    left: 0;
    position: absolute;
    right: 0;
    width: 180px;
}

@keyframes load {
    100% {
        opacity: 0;
        transform: scale(1);
    }
}

@keyframes load {
    100% {
        opacity: 0;
        transform: scale(1);
    }
}
  

/*--------------------------------------------------------------
  # Back to top button
  --------------------------------------------------------------*/

.back-to-top {
    position: fixed;
    visibility: hidden;
    opacity: 0;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #893fee;
    width: 40px;
    height: 40px;
    border-radius: 50px;
    transition: all 0.4s;
    color: #FFF;
}

.back-to-top i {
    font-size: 24px;
    color: #fff;
    line-height: 0;
}

.back-to-top:hover {
    background: #893fee94;
    color: #fff;
}

.back-to-top.active {
    visibility: visible;
    opacity: 1;
}


/*--------------------------------------------------------------
  # Header
  --------------------------------------------------------------*/

#header {
    transition: all 0.5s;
    z-index: 997;
    padding: 15px 0;
    background: #0000000f;
}

#header.header-scrolled,
#header.header-inner-pages {
    background: #000;
}

#header .logo img {
    height: 50px;
}
.header-inner{
    display: flex;
    flex-wrap: wrap;
}

/*--------------------------------------------------------------
  # Navigation Menu
  --------------------------------------------------------------*/


/**
  * Desktop Navigation 
  */

.navbar {
    padding: 0;
}

.navbar ul {
    margin: 0;
    padding: 0;
    display: flex;
    list-style: none;
    align-items: center;
}

.navbar li {
    position: relative;
}

.navbar a,
.navbar a:focus {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0 10px 20px;
    font-size: 18px;
    font-weight: 500;
    color: #fff;
    white-space: nowrap;
    transition: 0.3s;
}

.navbar a i,
.navbar a:focus i {
    font-size: 12px;
    line-height: 0;
    margin-left: 5px;
}

.navbar a:hover,
.navbar .active,
.navbar .active:focus,
.navbar li:hover>a {
    color: #bf2d8a;
}

.navbar .getstarted,
.navbar .getstarted:focus {
    padding: 8px 20px;
    margin-left: 18px;
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 400;
   
}
.pre_sale_btn{
    animation: glow 1s infinite alternate;

}
@keyframes glow {
    from {
      box-shadow: 0 0 8px -8px #124dbd;
    }
    to {
      box-shadow: 0 0 8px 8px   #bf2d8a;
    }
  }
.navbar .getstarted:hover,
.navbar .getstarted:focus:hover {
    color: #fff;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
}

.navbar .dropdown ul {
    display: block;
    position: absolute;
    left: 14px;
    top: calc(100% + 30px);
    margin: 0;
    padding: 4px 0;
    z-index: 99;
    opacity: 0;
    visibility: hidden;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
    transition: 0.3s;
    border-radius: 4px;
}

.navbar .dropdown ul li {
    min-width: 200px;
}

.navbar .dropdown ul a {
    padding: 10px 20px;
    font-size: 14px;
    text-transform: none;
    font-weight: 500;
    color: #fff;
    background-color: #000;
}

.dropbtn{
    color: #fff !important;
    background-color: transparent !important;
    border: none !important;
    font-size: 18px !important;
}
.dropbtn:hover{
    color: #bf2d8a !important;
    background-color: transparent !important;
    border: none !important;

}
.dropbtn .btn-check:focus+.btn, .btn:focus {
    outline: 0;
    box-shadow: 0 0 0 0.25rem transparent !important;
}
.dropbtn .btn-check:focus+.btn-secondary, .btn-secondary:focus {
    color: #fff;
    background-color: #5c636a;
    border-color: #565e64;
    box-shadow: transparent !important;
}

.navbar .dropdown ul a i {
    font-size: 12px;
}

.navbar .dropdown ul a:hover,
.navbar .dropdown ul .active:hover,
.navbar .dropdown ul li:hover>a {
    color: #bf2d8a;
}

.navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
}

.navbar .dropdown .dropdown ul {
    top: 0;
    left: calc(100% - 30px);
    visibility: hidden;
}

.navbar .dropdown .dropdown:hover>ul {
    opacity: 1;
    top: 0;
    left: 100%;
    visibility: visible;
}

.blog .card {
    background: transparent;
}

.blog .card img {
    border-radius: 10px 10px 0 0;
}
.blog .card-body span {
    font-size: 16px;
    font-weight: 400;
    color: #c5c5c5;
}

.blog .card-body p {
    font-size: 16px;
    font-weight: 400;
    color: #959595;
    margin-bottom: 10px;
    height: 55px;
    overflow: hidden;
    line-height: 27px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}
.blog .card-body {
    padding: 20px 0;
}

.blog .card-body .sdk_btn {
  display: inline-block;
}
.blog {
    background: #0c0c0c;
    padding: 50px 0;
}
.shdow {
    position: absolute;
    background: #0808082e;
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
}
.commuinty_button form .form-control::-webkit-input-placeholder {
    color: #fff;
}
  .commuinty_button form .form-control::-moz-placeholder { 
    color: #fff;
}
  .commuinty_button form .form-control:-ms-input-placeholder {
    color: #fff;
}
  .commuinty_button form .form-control:-moz-placeholder { 
    color: #fff;
}
.view {
    position: relative;
}


.nav-link {
    padding: 0px ;
}

/**
  * Mobile Navigation 
  */

.mobile-nav-toggle {
    color: #fff;
    font-size: 28px;
    cursor: pointer;
    display: none;
    line-height: 0;
}

.mobile-nav-toggle.bi-x {
    color: #fff;
}

@media (max-width: 1152px) {
    .mobile-nav-toggle {
        display: block;
    }
    .navbar ul {
        display: none;
    }
    .mobile-nav-toggle {
    margin-top: 15px;
}
.dropbtn {
    color: #fff !important;
    background-color: transparent !important;
    border: none !important;
    font-size: 20px !important;
}
.navbar .dropdown:hover>ul {
    opacity: 1;
    top: 100%;
    visibility: visible;
    display: block;
}
}
.navbar-mobile {
    position: fixed;
    overflow: hidden;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: transparent;
    transition: 0.3s;
    z-index: 999;
}


.navbar-mobile ul {
    display: block;
    position: fixed;
    top: 55px;
    right: 15px;
    bottom: 15px;
    left: 15px;
    padding: 10px 0;
    border-radius: 10px;
    background-color:#181818;
    overflow-y: auto;
    transition: 0.3s;
    text-align: center;
}
.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
    margin: 7px;
}
.navbar-mobile a,
.navbar-mobile a:focus {
    padding: 10px 20px;
    font-size: 15px;
    color: #fff;
}

.navbar-mobile a:hover,
.navbar-mobile .active,
.navbar-mobile li:hover>a {
    color: #47b2e4;
}

.navbar-mobile .getstarted, .navbar-mobile .getstarted:focus {
    margin: 5px;
    color: #ffffff;
    display: inline-block;
    max-width: 150px;
    text-align: center;
    width: 100%;
}
.navbar-mobile .dropdown ul {
    position: static;
    display: none;
    margin: 10px 20px;
    padding: 0px 0;
    z-index: 99;
    opacity: 1;
        border: 0;
    visibility: visible;
    background: #181818;
    box-shadow: 0px 0px 0px transparent;
}

.navbar-mobile .dropdown ul li {
    min-width: 200px;
}

.navbar-mobile .dropdown ul a {
    padding: 10px 20px;
}

.navbar-mobile .dropdown ul a i {
    font-size: 12px;
}

.navbar-mobile .dropdown ul a:hover,
.navbar-mobile .dropdown ul .active:hover,
.navbar-mobile .dropdown ul li:hover>a {
    color: #47b2e4;
}

.navbar-mobile .dropdown>.dropdown-active {
    display: block;
}


/* main slider  */

.main_slider {
    padding-top: 90px;
}
.main_slider .carousel-inner {
    overflow: hidden;
}
.main_left_text {
    position: absolute;
    color: #000;
    top: 35%;
    width: 40%;
    left: 210px;
}
.main_right_text {
    position: absolute;
    color: #000;
    top: 35%;
    width: 43%;
    right: 48px;
}
.community .main_left_text {
    position: absolute;
    color: #000;
    top: 40%;
    width: 30%;
    left: 48px;
}
.main_left_text.mobile-comunity {
    display: none;
}
.lft_text_white{
    color: #fff;
    font-size: 40px;
    font-weight: bold;
}
.lft_para_white{
    color: #fff;
    font-size: 18px;
    padding-top: 10px;
}
.right_text{
    color: #fff;
    font-size: 40px;
    font-weight: bold;
}
.right_para{
    color: #fff;
    font-size: 18px;
    padding-top: 10px;  
}
.community .right_para {
    font-size: 16px;
}
/*--------------------------------------------------------------
  # Hero Section
  --------------------------------------------------------------*/

#hero .hero_videos {
    width: 100%;
    padding: 0;
    position: relative;
}

.img-fluid {
    padding-top: 50px;
}

#hero .container {
    padding: 70px;
}

.hero_head_text {
    margin: 0 0 10px 0;
    font-size: 38px;
    font-weight: 500;
    line-height: 56px;
    color: #fff;
}

.hero_head_text {
    position: absolute;
    bottom: 30px;
    left: 0;
    right: 0;
    margin: 0 auto;
    text-align: center;
}

.banner_head {
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
}

#hero .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
}



@-webkit-keyframes up-down {
    0% {
        transform: translateY(10px);
    }
    100% {
        transform: translateY(-10px);
    }
}

@keyframes up-down {
    0% {
        transform: translateY(10px);
    }
    100% {
        transform: translateY(-10px);
    }
}


/* slider_videos */

#video-carousel-example2 {
    width: 100%;
}

.video-fluid {
    width: 100%;
}

.videos_shadow {
    height: 500px;
    object-fit: cover;
    margin-bottom: -10px;
}

#hero .animated {
    animation: up-down 2s ease-in-out infinite alternate-reverse both;
    margin-bottom: 100px;
}


/* ArtiFacts */

.metarix_artifix{
    padding: 50px 0px 0px 0px;
}

#Products {
    overflow: hidden;
}

.heading {
    text-align: center;
}
.update_text{
    padding-bottom: 40px 0px;
}

.heading_text {
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    display: inline-block;
}

.heading_para {
    padding: 25px 0px;
}

.heading_logo {
    width: 30px;
}
.artifix_zoom {
    margin-bottom: 35px;
}

.products_items_data_left {
    position: absolute;
    z-index: 1;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    top: 0;
    padding: 0 35px;
    display: grid;
    align-items: center;
    background: linear-gradient(90deg, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.4) 35%, rgba(0, 212, 255, 0) 100%);
}

.col-md-12.product_data_2 {
    position: relative;
}

.product-head {
    color: #fff !important;
}

.product_shadow {
    position: relative;
    width: 100%;
}

.product_text_data {
    position: relative;
}

.products_items_data_right {
    position: absolute;
    z-index: 1;
    left: 0;
    height: 100%;
    width: 100%;
    top: 0;
    padding: 0 35px;
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background: linear-gradient(90deg, rgba(0, 212, 255, 0) 0%, rgba(0, 0, 0, 0.4) 35%, rgba(0, 0, 0, 0.8) 100%);
}

.videos_img {
    width: 200px;
}

.product_data_img {
    width: 100%;
}

.product_data_1,
.product_data_2,
.product_data_3,
.product_data_4,
.product_data_5,
.product_data_6,
.product_data_7,
.product_data_8 {
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #000;
}

.carousel-inner {
    overflow: inherit;
}

.textright {
    margin-left: 30px;
}

.product-head {
    color: #fff;
}

.all_prodct-img {
    padding-bottom: 20px;
}

.videos {
    width: 100%!important;
    min-height: 335px !important;
}

.arti_colm_video {
    width: 100% !important;
    height: 100%!important;
}

.card_data {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    padding: 75px 0px 50px 0px;
}

.box-img {
    /* height: 100px;
    position: relative;
    width: 100px;
    margin: 0 auto;
    border-radius: 50%;
    background: #000000;
    display: flex; */
    align-items: center;
}
/* .box-img::after {
    content: "";
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    position: absolute;
    top: -2px;
    left: -2px;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    z-index: -1;
    border-radius: 50%;
    
} */
.box-container .box-img {
    text-align: center;
}
.box-img img{
    width: 70%;
    margin: 0 auto;
    border-radius: 10px;

}

.box-head {
    text-align: center;
    line-height: 2;
    padding: 45px 18px 30px 17px;
}

.button {
    padding: 50px;
    text-align: center;
}

.button_btn {
    padding: 12px 50px 12px 50px;
    border-radius: 50px;
    color: #fff;
    transition: 0.4s;
    animation-delay: 0.8s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
}

.button_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);   
    color: #FFF;
    transition: 0.4s;
    animation-delay: 0.8s;
}



.b_down, .left_border {
    border-width: 0px 1px 1px 0px; 
    border-style: solid;
    border-image: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%) 1;
   
}

.box-container.b_down:nth-child(3){
    border-width: 0 0 1px 0;
}
.box-container.left_border:nth-child(4){
    border-width: 0 1px 0 0;
}
.box-container.left_border:nth-child(5){
    border-width: 0 1px 0 0;
}
/* TOKEN SALE  */

.token_sale {
    background: #000000;
    padding: 60px 0px 10px;
}
.token_sale_items {
    display: flex;
    justify-content: space-around;
    margin: 75px 0px 40px 0px;
    flex-wrap: wrap;
}
.total_supply p {
    color: #b5338d;
    font-size: 21px;
    margin-bottom: 0;
}
.total_supply h6 {
    font-size: 30px;
    font-weight: 600;
    font-style: italic;
}
.smart_cont_head p {
    color: #b5338d;
    font-size: 21px;
    margin-bottom: 0;
}
.smart_cont_head {
    display: flex;
    justify-content: space-between;
}
.smart_contact {
    display: flex;
    gap: 30px;
    align-items: center;
}
.smart_contact h6 {
    font-size: 30px;
    font-weight: 600;
    font-style: italic;
    margin-bottom: 0;
}
.smart_contact .fa {
    font-size: 22px;
}
.btn.smart_contact_btn {
    background: transparent !important;
    border: none;
    color: #fff !important;
    font-size: 30px;
    padding: 0;
    font-weight: 600 !important;
}
.staking_rew_items h6 {
    font-size: 20px;
    margin-bottom: 0;
}
.staking_rew_items p {
    margin-bottom: 0;
    color: #ffffff73;
    font-size: 13px;
}
.staking_rew_items span {
    color: #a72b84;
}
.tokens p {
    margin-bottom: 0;
    color: #ffffff73;
    font-size: 15px;
    text-align: right;
}
.tokens h6 {
    font-size: 20px;
    margin-bottom: 0;
    font-weight: 600;
}
.staking_rewads {
    display: flex;
    justify-content: space-between;
    background: #161616;
    margin-bottom: 25px;
    padding: 15px 25px;
    border-radius: 10px ;
    position: relative;
}
.staking_rew_items {
    padding-right: 15px;
}
.staking_rewads::after {
    content: " ";
    position: absolute;
    background: #a72b84;
    top: 0;
    width: 10px;
    height: 78px;
    left: 0;
    border-radius: 25px 0px 0px 25px;
}

/* .token_sale.items {
    padding-top: 20px;
}
.token_text {
    color: #FFF;
}

.left_side_sale_data {
    display: flex;
    gap: 50px;
    padding-top: 20px;
}

.left_sale {
    color: #fff;
}

.sale_text {
    font-size: 18px;
}

.right_sale {
    color: #fff;
}

.sale_bold {
    color: #bf2d8a;
    font-weight: normal;
}

.token_sale_img {
    width: 100%;
    margin-top: 79px;
    position: relative;
    right: -30px;
}

.token-sale-items {
    padding: 10px 0px;
} */


/* OUR ROADMAP  */

#Roadmap {
    margin: 70px 0 0;
}

.roadmap-row {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 80px;
    position: relative;
    padding: 70px 0px;
}

.card.roadmap-card {
    padding: 30px;
    position: relative;
}
.card.roadmap-card::after {
    content: '';
    background: url(../img/arrow.png) no-repeat center center/cover;
    position: absolute;
    top: 50%;
    width: 55px;
    height: 18px;
    right: -70px;
    background-size: 100% 100%;
}

.card.roadmap-card:nth-child(3)::after {
   content: '';
    background: url(../img/arrow.png) no-repeat center center/cover;
    position: absolute;
       background-size: 100% 100%;
    transform: rotate(90deg);
    bottom: -50px;
    left: 0;
    right: 0;
    top: inherit;
    margin: 0 auto;
}
.mbl{
    display: none;
}
.card.roadmap-card:nth-child(5)::after, .card.roadmap-card:nth-child(4)::after {
    background-size: 100% 100%;
     transform: rotate(180deg);
}
.card.roadmap-card:nth-child(6)::after {
    display: none;
}
.border_radi_us {
    background: #000000;
    border-radius: 10px;
    position: relative;
}
.border_radi_us:before {
    content: "";
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    position: absolute;
    top: -2px;
    left: -2px;
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    z-index: -1;
    border-radius: 12px;
}
.border_radi_us.round_radius::before{
    border-radius: 50% !important;
}
.card-title {
    color: #bf2d8a;
    font-weight: bold;
}

.fa.fa-circle {
    margin-right: 11px;
    font-size: 10px;
    margin-top: 7px;
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.roadmap_text {
    display: flex;
}


/* Management_team */

.management_team {
    background: #000000;
    padding: 60px 0px;
}

.team_data_1,
.team_data_2,
.team_data_3 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    gap: 20px;
    justify-content: center;
    padding-top: 100px;
}

.box.team_member {
    text-align: center;
    padding: 0px 20px;
}

.teams_img {
    width: 180px;
    height: 180px;
    border-radius: 50% !important;
}
img.teams_img:hover {
    outline: 8px solid #c72c8a;
}

.fit_img {
    object-fit: cover;
    object-position: center;
}

.teams_text {
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    padding-top: 25px;
}

.teams_para {
    color: #f5f5f5;
}

.oursteams_text{
    text-align: center;
    position: relative;
    font-weight: bold;
    margin-bottom: 0;
}
.oursteams_text::after{
    content: " ";
    top: 35px;
    right: 0px;
    bottom: 0;
    left: 0;
    width: 150px;
    height: 2px;
    margin: 0 auto;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);  
    position: absolute;

}
.marketing_team {
    padding-top: 50px;
}


/* OUR_PARTNES  */

.our_partners {
    padding: 50px 0px;
}
.Strategic_partner, .Media_Partners {
    text-align: center;
    position: relative;
}
.Strategic_partner h1 , .Media_Partners h1   {
    font-size: 26px;
    margin-bottom: 0;
    padding-top: 25px;
    /* position: relative; */
}
.Strategic_partner::after , .Media_Partners::after   {
    content: " ";
    right: 0px;
    bottom: -9px;
    left: 0;
    width: 150px;
    height: 2px;
    margin: 0 auto;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    position: absolute;
}


.partner-list {
    display: flex;
    justify-content: center;
}

.partner-logo,
.partner-logo-s3 {
    margin-bottom: 30px;
    max-width: 16.6%;
    width: 16.6%;
}
.partner_img{
    width: auto;
    max-height: 50px;
}

.partners-data {
    padding: 50px 0px;
    display: flex;
    gap: 50px;
    justify-content: center;
    flex-wrap: wrap;
}

/* powered by  */

#Powerdby{
    background: #0c0c0c;
    padding: 60px 0px;

}


/* footer footer  */

#footer {
    background-color: #000;
    padding: 50px;
}

.ft_links {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.ft_head_text {
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
    padding-bottom: 20px;
    position: relative;
    font-size: 22px;
}

.ft_head_text::after {
    content: " ";
    top: 31px;
    right: 0px;
    bottom: 0;
    left: 0px;
    width: 46px;
    height: 3px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);  
    position: absolute;
}

img.footer_logo {
    margin-top: 60px;
    width: 110px;
}

.footer_tags {
    font-size: 16px;
}
li.ftlightpaper {
    list-style: none;
}
li.ftlightpaper a:hover {
    color: #bf2d8a;
}
.footer_tags:hover {
    color: #bf2d8a;
    font-weight: normal;
}

.ft_social_links {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    width: 50%;
}

.ft_social_links a i {
    width: 50px;
    height: 50px;
    justify-content: center;
    align-items: center;
    display: flex;
}

.icon_links {
    cursor: pointer;
    font-size: 21px;
    margin: 5px 10px 5px 10px !important;
    padding: 15px;
    text-align: center;
    color: #fff;
    text-decoration: none;
    border-radius: 50px !important;
    margin: 6px !important;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
}

.icon_links:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%)  !important;
    color: #FFF;
}

.footer_ended {
    background: #0c0b0b;
    color: #FFF;
    padding: 6px;
    text-align: center;
}

.footer-ended_text {
    font-weight: normal;
    font-style: normal;
    font-size: 15px;
}


/*--------------------------------------------------------------
                                  # Contact Page
                                  --------------------------------------------------------------*/

#contact {
    padding: 170px 0px;
}

.section-title {
    text-align: center;
}

.contact .info {
    padding: 30px 0px;
    width: 100%;
    box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: center;
    gap: 100px;
}

.contact .info i {
    font-size: 20px;
    float: left;
    width: 44px;
    height: 44px;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #fff;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50px;
    transition: all 0.3s ease-in-out;
}

.contact .info h4 {
    padding: 0 0 0 20px;
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 5px;
    color: #ffffff;
}
.email {
    display: flex;
    align-items: baseline;
}
.contact .info a {
    padding: 0 0 10px 15px;
    margin-bottom: 20px;
    font-size: 20px;
    color: #e9e7e7;
}
.contact .info a:hover {
    color: #bf2d8a;
}


.contact .info .email p {
    padding-top: 5px;
}

.contact .info .social-links {
    padding-left: 60px;
}

.contact .info .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #333;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    border-radius: 50%;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
    margin-right: 10px;
}

.contact .info .social-links a:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #fff;
}

.contact .info .email:hover i,
.contact .info .address:hover i,
.contact .info .phone:hover i {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #fff;
}

.contact .php-email-form {
    width: 100%;
    border-width: 2px 0px 2px 0px;
    padding: 70px 0;
}

.contact .php-email-form .form-group {
    padding-bottom: 8px;
}

.contact .php-email-form .validate {
    display: none;
    color: red;
    margin: 0 0 15px 0;
    font-weight: 400;
    font-size: 13px;
}

.contact .php-email-form .error-message {
    display: none;
    color: #fff;
    background: #ed3c0d;
    text-align: left;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .error-message br+br {
    margin-top: 25px;
}

.contact .php-email-form .sent-message {
    display: none;
    color: #fff;
    background: #18d26e;
    text-align: center;
    padding: 15px;
    font-weight: 600;
}

.contact .php-email-form .loading {
    display: none;
    background: #fff;
    text-align: center;
    padding: 15px;
}

.contact .php-email-form .loading:before {
    content: "";
    display: inline-block;
    border-radius: 50%;
    width: 24px;
    height: 24px;
    margin: 0 10px -6px 0;
    border: 3px solid #18d26e;
    border-top-color: #eee;
    -webkit-animation: animate-loading 1s linear infinite;
    animation: animate-loading 1s linear infinite;
}

.contact .php-email-form .form-group {
    margin-bottom: 20px;
}

.contact .php-email-form label {
    padding-bottom: 8px;
}

.contact .php-email-form input,
.contact .php-email-form textarea {
    border-radius: 0;
    box-shadow: none;
    font-size: 14px;
    border-radius: 4px;
}

.contact .php-email-form input:focus,
.contact .php-email-form textarea:focus {
    border-color: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%) !important;
}

.contact .php-email-form input {
    height: 44px;
}

.contact .php-email-form textarea {
    padding: 10px 12px;
}

.contact .php-email-form button[type=submit] {
    border: 0;
    color: #fff;
    transition: 0.4s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
    border-radius: 50px;
    padding: 10px 35px;
}

.contact .php-email-form button[type=submit]:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #FFF;
}

@-webkit-keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

@keyframes animate-loading {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}

.card.contact-form.px-5.py-5 {
    background: transparent;
    border: 0px;
}

.php-email-form .form-control {
    background: transparent;
    color: #fff;
    padding: 18px;
    border: 1px solid #bf2d8a;
    border-radius: 8px !important;
}

.form-button {
    text-align: center;
    padding: 50px 0px;
}

.form-btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    padding: 12px 80px 12px 80px;
    border-radius: 50px;
    transition: 0.4s;
    animation-delay: 0.8s;
}

.form-btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #FFF;
    transition: 0.4s;
    animation-delay: 0.8s;
}

.contact_data {
    padding: 50px;
}

img.cont_img {
    width: 400px;
    height: 400px;
    opacity: 0.3;
    position: relative;
    top: 15%;
}

.contactus_para{
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    font-size: 23px;
    width: 25%;
    margin: 0 auto;

}

/*comming soon pages  */

#hero_header {
    width: 100%;
    height: 100vh;
    background: url(../img/comming_soon/comming_soon_bg.png);
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.soon_text {
    text-align: center;
    color: #FFFF;
    font-weight: bold;
    font-style: italic;
    font-size: 115px;
}

.comming_button {
    display: flex;
    justify-content: center;
    gap: 50px;
    padding-top: 50px;
}

.soon_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    padding: 12px 80px 12px 80px;
    border-radius: 50px;
    transition: 0.4s;
    color: #FFF;
    animation-delay: 0.8s;
   
}

.soon_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #FFF;
 
}


/* Stacky-Pages */



.stacky_head {
    text-align: center;
    color: #D9DBDE;
    padding: 120px 0px;
}

.stacky-head-text {
    color: #D9DBDE;
    margin-bottom: 60px;
    position: relative;
    font-weight: bold;
}

.stacky-head-text::before {
    position: absolute;
    left: 0;
    top: 50px;
    content: '';
    height: 2px;
    width: 100px;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);  
    right: 0;
    margin: 0 auto;
}

.text_bold {
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
}

.stake_imgs {
    position: relative;
    top: -60px;
}

.staking_data_1 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 30px;
    padding-top: 100px;
}

.staking_page_items {
    width: 80%;
    margin: auto;
}



.rewards {
    position: relative;
}

.rewards::after {
    position: absolute;
    content: " ";
    height: 61px;
    width: 1px;
    background: #FFF;
    left: -30px;
    top: 0;
}

.stacky-text-hed {
    font-size: 20px;
}

.stacky-text {
    font-weight: bold;
    color: #FFF;
    font-size: 23px;
}

.data {
    position: relative;
    top: -48px;
}

.staking_data_2 {
    padding-top: 100px;
}

.current_balance {
    width: 100%;
    height: 170px;
    color: #fff;
}

.rewards_data {
    display: flex;
    justify-content: space-around;
    color: #fff;
    min-height: 170px;
    align-items: center;
}

.stacky-btn {
    padding: 12px 50px 12px 50px;
    border-radius: 50px;
    transition: 0.4s;
    color: #fff;
    display: inline-block;
    animation-delay: 0.8s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
}

.stacky-btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);    
    color: #FFF;
    transition: 0.4s;
    animation-delay: 0.8s;
}

.checkpoints {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
}

.check-points {
    color: #FFF;
}

.checkpoints-text {
    background-image: url(../img/staking/plus_icon.png);
    background-position: left;
    background-repeat: no-repeat;
    padding-left: 45px;
    background-size: 24px;
    font-size: 21px;
}

.check-data-head {
    padding: 5px 0px;
}

.checkpoints-para {
    padding-left: 45px;
    font-size: 17px;
}

.check-data {
    padding: 50px 0px;
}

.check-heading {
    text-align: left;
    padding: 50px 0px 10px 0px;
    position: relative;
    font-weight: bold;
}

.check-heading::before {
    position: absolute;
    left: 0;
    top: 95px;
    content: '';
    height: 3px;
    width: 100px;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    right: 0;
}


/* metarix Sdk page  */

#metarix_sdk {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding-top: 70px;
}

.sdk_head_para {
    color: #FFF;
}

.metarix_sdk_data {
    padding-top: 50px;
}

.main-head {
    position: relative;
    top: 30%;
    left: 0;
    margin: 0 auto;
    right: 0;
}
.sdk_main_para {
    padding-top: 15px;
}


/* sdk  */

.sdk_main_bold {
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.sdk_main_img {
    width: 100%;
    position: relative;
    bottom: -35px;
}



.buttons_sdk_data {
    padding: 100px 15px;
}

.buttons_sdk_items {
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-top: 90px;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    max-width: 700px;
}
.buttons_sdk_items .border_radi_us {
    background: #080808;
}
.play_store,
.apple_store,
.linux {
    width: 100%;
    color: #D9DBDE;
    height: 250px;
}

.window_img {
    width: 120px;
    height: 120px;
    background: red;
    border-radius: 50%;
    margin: 0 auto;
    position: relative;
    display: table;
}
.button_sdk_img {
    text-align: center;
    font-size: 54px;
    display: table-cell;
    vertical-align: middle;
}
.sdk_buttons{
    text-align: center;
    padding: 20px 0px;
}
.sdk_data h1 {
    font-size: 22px;
}
.sdk_btn {
    padding: 10px 30px;
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 500;
}
.sdk_btn:hover {
    color: #fff;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
}



.sdk_data {
    padding: 20px 0;
}

.sdk_button_text,
.sdk_button_para {
    font-weight: bold;
}


/* sdk_Features  */

#sdk_features {
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.features-box {
    box-sizing: border-box;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 45px;
    padding: 60px 0px 150px 0px;
}
.features-box1 {
    box-sizing: border-box;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 45px;
    padding: 60px 0px 60px 0px;
}

.zoom-img {
    z-index: 1;
    position: relative;
    overflow: hidden;
    transition: all 1.2s;
    border-radius: 12px 12px 0px 0px;
}

.features_img {
    width: 100%;
    height: 250px;
    z-index: 1;
    transition: all 500ms linear;
}

.features_img:hover {
    position: relative;
    transform: scale(1.2) rotate(0deg);
}

.zoom-text {
    text-align: left;
    padding: 5px;
}

.zoom-text {
    color: #FFF;
    padding: 25px;
}

.features_para {
    color: #FFf;
    line-height: 27px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
}

.features_text {
    color: #FFF;
    font-weight: bold;
    font-size: 22px;
    min-height: 50px;
}


/* community sdk  */

.community_sdk {
    background: #060404;
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.community_img {
    width: 100%;
    position: relative;
    top: -53px;
}

.community_items {
    color: #FFF;
    position: relative;
    top: 12%;
    left: 50px;
    right: 0;
    margin: 0 auto;
    bottom: 0;
}

.commuinty_button {
    text-align: left;
    padding: 20px 0px 0px 0px;
}
.commuinty_button .form-group {
    width: 100%;
}

.community_para {
    padding-top: 15px;
    font-size: 20px;
}

.commuinty_button form {
    display: flex;
    width: 100%;
}

.commuinty_button form .form-control {
    background: transparent;
    border: 1px solid #bf2d8a;
    border-radius: 10px 0px 0px 10px ;
    box-shadow: none;
    outline: none;
    color: #fff;
    text-indent: 9px;
    height: 50px;
    margin-right: 10px;
    max-width: 500px;
    width: 100%;
}

.commuinty_button form .btn {
    border: none;
    background: none;
    box-shadow: none;
    text-shadow: none;
    opacity: 0.9;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 13px;
    line-height: 1
}

.commuinty_button form .btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;
}

.commuinty_button form .btn:active {
    transform: translateY(1px)
}

.commuinty_button form .btn-primary {
    outline: none !important;
    color: #fff;
    transition: 0.4s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    height: 50px;
    border-radius: 0px 10px 10px 0px;
    padding: 0 25px;
    width: 100%;
    max-width: 150px;
}

/* Blockchain page started  */

#blockchain_main {
    background-color: #b8c0ec;
    padding-top: 70px;
}

.blockchain_main_data {
    padding: 50px 15px;
}

.left_blockchain {
    color: #FFF;
}

.bc_head {
    font-weight: bold;
}

.blockchain_heading {
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
}
.right_blockchain {
    text-align: end;
}
.rt_blockchain_img {
    max-width: 100%;
    max-height: 450px;
}

.blockchain_head {
    position: relative;
    top: 20%;
    bottom: 0;
    left: 0;
    right: 0;
}

.bc_para {
    padding-top: 20px;
    font-size: 20px;
    line-height: 30px;
    color: #000;
}


/* our_sirvices  */

#our_services {
    color: #FFF;
    padding: 70px 0px 150px 0px;
}

.block_para {
    color: #FFF;
    width: 50%;
    margin: 20px auto;
}

.services_item_1,
.services_item_2 {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 20px;
    text-align: center;
    padding: 30px 15px;
}

.box_container {
    position: relative;
}

.box_container .box_data::after {
    position: absolute;
    left: 0;
    content: '';
    height: 15px;
    width: 80%;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    right: 0;
    bottom: -15px;
    margin: 0 auto;
    border-radius: 0px 0px 15px 15px;
}

.box_container .box_data::before {
    position: absolute;
    left: 0;
    content: '';
    height: 15px;
    width: 70%;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    right: 0;
    bottom: -31px;
    margin: 0 auto;
    border-radius: 0px 0px 15px 15px;
}

.box_data {
    padding: 20px;
    position: relative;
}

.services_head {
    font-size: 28px;
    font-weight: bold;
}

.services_bold {
    font-size: 28px;
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: bold;
}

.services_img {
    padding: 30px 0px;
}
.box_para p {
    min-height: 80px;
}

/* bitcoin  */

.bitcoins {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);     
}

.bitcoins_data {
    color: #FFF;
}
.btc-img {
    text-align: right;
}
.bitcoins_data {
    color: #FFF;
    position: relative;
    top: 25%;
}

.bitcoin_text {
    font-size: 46px;
    font-weight: bold;
}

.bitcoin_para {
    font-size: 27px;
    font-weight: 200;
}

.bitcoin_img {
    position: relative;
    top: -73px;
    width: 100%;
    max-width: 350px;
}


/* deposit   */

.deposits {
    color: #fff;
    padding: 50px 0px;
}

.deposits_data {
    position: relative;
    top: 20%;
}

.liquidity_data {
    position: relative;
    top: 30%;
}

.deposit_items {
    display: flex;
    padding-top: 30px;
    gap: 15px;
}

.deposits_img {
    width: 100%;
    max-width: 350px;
}

.deposits_head {
    font-size: 46px;
}

.deposits_para {
    font-size: 18px;
}


/* Matarix ADO Page  */

#metarix_ado {
    background-image: url(../img/metarix_ado/metarix_ado_main_bg.png);
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.metarix_ado_data {
    color: #FFF;
    padding: 200px 0px 150px 0px;
    width: 50%;
}

.metarix_bitcoins {
    background: #000000;
    color: #fff;
    padding: 100px 0px 400px 0px;
    position: relative;
}

.metarix_bitcoins_data {
    position: relative;
    top: 10%;
}

.ado_img {
    width: 100%;
    height: 550px;
}

.metarix_ado_img {
    width: 100%;
    height: 550px;
    position: relative;
    top: -30%;
}

.metarix_ado_text {
    font-size: 27px;
}

.metarix_ado_heading {
    font-size: 53px;
    font-weight: bold;
    position: relative;
    z-index: 99;
}

.metarix_ado_heading::after {
    position: absolute;
    left: 0;
    content: '';
    height: 15px;
    width: 56%;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    right: 0;
    bottom: 10px;
    z-index: -9;
}

.metarix_ado_para {
    font-size: 18px;
}

.metarix_ado_head {
    font-size: 38px;
}

.meta_ado_items {
    width: 70%;
    padding-top: 20px;
}

.metarix_bitcoins_bgg {
    display: flex;
    background: #141414;
    margin: 150px 0px;
    color: #FFF;
    border-radius: 30px;
    padding: 50px;
    height: 500px;
}

#our_advertising {
    background-image: url(../img/metarix_ado/our_advirsting_bgg.png);
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}

.our_advertising_data {
    position: relative;
    margin-top: -376px;
}

.ado_features-box {
    box-sizing: border-box;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 30px;
    padding: 90px 0px 70px 0px;
}

.ado_zoom {
    box-sizing: border-box;
    border-radius: 20px;
    background: #0c0c0c;
    z-index: 1;
    position: relative;
    box-shadow: 0px 2px 2px 2px #00000070;
}

.ado_button {
    padding-top: 60px;
}

.ado_btn {
    padding: 15px 70px 15px 70px;
    border-radius: 50px;
    color: #fff;
    transition: 0.4s;
    animation-delay: 0.8s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);    
    font-size: 20px;
    font-weight: bold;
}

.ado_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;
}


                                       /* Metarix Market place Page  */

#market_place {
    background: linear-gradient(to right,  #b4d0f0 0%,#b9d3f1 100%);
    margin-top: 90px;
}

.market_place_data {
    color: #fff;
    padding: 90px 0px;
    width: 100%;
}

.market_head {
    font-weight: bold;
    font-size: 28px;  
    background: -webkit-linear-gradient(#bf2d8a ,#124dbd );
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.market_para {
    padding-top: 20px;
    font-size: 22px;
    font-weight: 300;
    color: #000;
}
.nft_right_img {
    padding: 60px 0px;
    text-align: center;
}
.nft_dog_img{
    max-width: 100%;
    position: relative;  
}

.nft_button {
    padding-top: 40px;
}

a.nft_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    padding: 10px 60px 10px 60px;
    border-radius: 20px;
    font-weight: bold;
}
a.nft_btn:hover{
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;
    padding: 10px 60px 10px 60px;
    border-radius: 20px;
    font-weight: bold;
}


/* nft slider  */


 /* slider_pruduct started   */

 @-webkit-keyframes scroll {
    0% {
      -webkit-transform: translateX(0);
              transform: translateX(0);
    }
    100% {
      -webkit-transform: translateX(calc(-250px * 7));
              transform: translateX(calc(-250px * 7));
    }
  }
  
  @keyframes scroll {
    0% {
      -webkit-transform: translateX(0);
              transform: translateX(0);
    }
    100% {
      -webkit-transform: translateX(calc(-250px * 7));
              transform: translateX(calc(-250px * 7));
    }
  }
  .slider {
    height: 300px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%;
    padding: 80px 0;
  }
  .slider::before, .slider::after {
    content: "";
    height: 100px;
    position: absolute;
    width: 200px;
    z-index: 2;
  }
  .slider::after {
    right: 0;
    top: 0;
    -webkit-transform: rotateZ(180deg);
    transform: rotateZ(180deg);
  }
  .slider::before {
    left: 0;
    top: 0;
  }
  .slider .slide-track {
    -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
    display: flex;
    width: calc(250px * 14);
  }
  .slider .slide {
    height: 100px;
    width: 250px;
  }
.slide_img{
    width: auto;
    height: 200px;
    padding-top: 6px;
}
.slide_text {
    text-align: center;
}
.sliders_texed{
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    display: inline-block;
    font-size: 30px;
    position: relative;
}
.sliders_texed::after{
    position: absolute;
    left: 0;
    content: '';
    height: 2px;
    width: 55%;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    right: 0;
    bottom: -5px;
    margin: 0 auto;
}




/* top collections over  */
.top_collections_over{
    background-color: #0a1019;
}
.top_heading {
    text-align: center;
    color: #fff;
    padding: 50px 0px 0px 0px;
}
.top_head {
    font-weight: bold;
}
.top_para {
    width: 80%;
    margin: 0 auto;
    padding: 20px 0px;
    margin-bottom: 20px;
}

.nft_tabs{
    display: flex;
    justify-content: center;
    gap: 50px;
    border-bottom: none;
    margin-bottom: 50px;
}
.nft_tabs .active{
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    padding: 7px 21px 7px 21px;
    border-radius: 18px;
    border: none;
}
.nft_nav_link{
    background: transparent;
    color: #fff;
    padding: 7px 21px 7px 21px;
    border-radius: 18px;
    border: 1px solid #fff;
}
.nft_nav_link:hover{
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);  
    color: #fff;
    padding: 7px 21px 7px 21px;
    border-radius: 18px;
    border: none;
}
.nft_content{
    color: #fff;
}
.top_tabs_data1, .top_tabs_data2, .top_tabs_data3 {
    display: flex;
    gap: 50px;
    justify-content: center;
    margin: 20px 0px;
}
.azuki, .capsule, .lives-asuna, .normal_zipcy, .clonex {
    display: flex;
    gap: 10px;
}
.nft_tabs_img {
    max-height: 80%;
}

/* live Auctions  */
.live_auctions{
    background-color: #151f2f;
    padding: 60px 0;
}

.live_auctions .member {
    margin-bottom: 20px;
    overflow: hidden;
    border-radius: 4px;
    background: #0a1019;
    box-shadow: 0px 2px 15px rgba(16, 110, 234, 0.15);
    padding: 8px;
    border: 1px solid #404f68;
    border-radius: 15px;
}
.live_auctions .member .member-img {
    position: relative;
    overflow: hidden;
}
.nft_live-img {
    max-height: 247px;
    border-radius: 15px;
}
.new_bid {
    position: absolute;
    top: -172px;
    left: 5px;
    background: #000;
    padding: 5px 10px 5px 10px;
    border-radius: 15px;
    cursor: pointer;
}
.bit_text{
    margin-bottom: 0!important;
    font-size: 12px;
}
.bit_items {
    display: flex;
    color: #fff;
    gap: 8px;
    align-items: center;
    padding: 4px 0px;
}
.live_auctions .member .social  {
    position: absolute;
    left: 0;
    bottom: 30px;
    right: 0;
    opacity: 0;
    transition: ease-in-out 0.3s;
    display: flex;
    justify-content: center;
    gap: 10px;
}
.live_auctions .member .social .time   {
    transition: color 0.3s;
    border-radius: 8px;
    width: 47px;
    height: 52px;
    background: #080a0e;
    display: inline-block;
    color: #fff;
    cursor: pointer;
    line-height: 0.2 !important;
    padding-top: 9px;
}
.time  {
    text-align: center;
}
.live_auctions .member:hover .social {
    opacity: 1;
    bottom: 15px;
}


.live_auctions .member .member-info {
    padding: 25px 5px;
}
.stock {
    display: flex;
    justify-content: space-between;
    padding-bottom: 15px;
}
.stock_items {
    display: flex;
    gap: 10px;
    align-items: center;
}
.stock_text{
    color: #fff;
    margin-bottom: 0;
    font-size: 14px;
}
.stock_text1{
    color: #fff;
    margin-bottom: 0;
    text-align: left;
    font-weight: 200;
    font-size: 12px;

}
.stock_text2{
    color: #fff;
    margin-bottom: 0;
    text-align: end;
    font-weight: 200;
    font-size: 12px;

}
.bold_text1{
    color: #fff;
    font-weight: bold;
    margin-bottom: 0;
    text-align: left;
    font-size: 14px;
}
.bold_text2{
    color: #fff;
    font-weight: bold;
    margin-bottom: 0;
    text-align: end;
    font-size: 14px;
}
.thump_img {
    max-height: 24px;
}
.fancy_car {
    display: flex;
    justify-content: space-between;
}
.fancy_car_data {
    display: flex;
    gap: 5px;
    align-items: center;
}
.nft_live_button {
    padding-top: 25px;
    text-align: center;
}
.live_autonis_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    padding: 7px 30px;
    border-radius: 15px;
    font-weight: 600;
    font-size: 16px;
}

.live_autonis_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);  
    color: #fff;
}


/* nft sale section  */

.nft_sales{
    background: #0a1019;
}
.nft-sales_head{
    color: #fff;
    font-size: 20px;
    font-weight: bold;
    text-align: center;
}
.nft_sales_data {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 35px;
    padding: 50px 0px;

}
.nft-sales-drops {
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.sales_drops{
    background: #151f2f;
    padding: 20px;
    border-radius: 15px;
}

.box_items {
    display: flex;
    gap: 36px;
}
.pixcel_cartoon {
    display: flex;
    gap: 8px;
}
.left_soft_button {
    padding: 20px 0px;
}
.soft_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    border-radius: 15px;
    padding: 7px 35px;
}
.soft_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;
}
.left_hard_button {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    padding-top: 10px;
    text-align: center;
}
.hard_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);   
    color: #fff;
    border-radius: 15px;
    padding: 7px 35px;
}
.hard_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;
}

.hard_btn1:hover{
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%); 
    color: #fff;

}
.token_adress {
    display: flex;
    gap: 2px;
}
.token_adress a:hover {
    color: #b1308e;
}
.info_para {
    font-size: 16px;
}

                                         /* nft marketplace details place  */

.nft_details{
    background: #0a1019;
    padding: 150px 0px 60px 0px;
}
.describitions {
    color: #fff;
    border: 1px solid #848484;
    border-radius: 10px !important;
    margin: 20px 0px;
}
.describ_data {
    border: 1px solid #848484;
    padding: 12px 15px;
}
.created_by {
    padding: 8px 15px;
}
.nft_heighligts{
    color: #893fee;
}
.nft_details_pics {
    width: 100%;
    max-height: 430px;
}
.auzuki {
    color: #fff;
    display: flex;
    justify-content: space-between;
}
.followers {
    color: #fff;
    display: flex;
    gap: 50px;
}
.sales_ended{
    color: #fff;
    border: 1px solid #848484;
    border-radius: 10px !important;

}
.sale_ended_items {
    border-bottom: 1px solid #848484;
    padding: 20px 30px;
    
}
.ended_days {
    display: flex;
    gap: 30px;
    padding: 20px 0px;
}
.endtime {
    text-align: center;
    border: 1px dotted #848484;
    padding: 4px 10px 4px 10px;
    border-radius: 10px;
}
.top_bid {
    padding: 21px;
}
.bid_top {
    display: flex;
    align-items: center;
    gap: 13px;
    padding: 8px 0px;
}
.bid_button {
    padding: 20px 0px;
}
.Listings {
    color: #fff;
    border: 1px solid #848484;
    border-radius: 10px !important;
    margin-top: 20px;
}

.data_price {
    display: flex;
    justify-content: space-around;
    border-bottom: 1px solid #848484;
    padding: 15px 0px ;
}
.data_price_rate, .data_price_rate {
    display: flex;
    justify-content: space-around;
    padding: 15px 0px ;
}
.data_pr_text {
    color: #fff;
    font-weight: bold;
    margin-bottom: 0;
    font-size: 10px;
}
.data_pr_text1{
    color: #fff;
    font-weight: normal;
    margin-bottom: 0;
    font-size: 10px;
}
.price_rate-items{
    display: flex;
    gap: 5px;

}
.pr_rate-img{
    max-height: 15px;
}
.endtimetext{
    margin-bottom: 0;
}
.endtimepara{
    margin-bottom: 0;
}
.right_side_heading{
    font-size: 25px;
    font-weight: bold;
}
#flush-headingThree {
    margin: 50px 0px 0px 0px;
}
.accordion-button {
    position: relative;
    display: flex;
    align-items: center;
    width: 100%;
    padding: 1rem 1.25rem;
    font-size: 1rem;
    color: #fff !important;
    text-align: left;
    background-color: #0a1019 !important;
    border: 1px solid #848484 !important;
    border-radius: 10px !important;
    overflow-anchor: none;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out,border-radius .15s ease;
}
.update_accordions_btn{
    border: none !important;
    border-bottom: 1px solid #848484 !important ;
    border-radius: 10px !important;
}
.accordion-item {
    color: #fff !important;
    background-color: #0a1019 !important;
    border-radius: 10px !important;
}
.accordion-body {
   border: 1px solid #848484 !important;
   border-radius: 10px !important;
}
.accordion-button:focus {
    z-index: 3;
    outline: 0;
    box-shadow: none !important;
}
.accordion-button::after {
    background-image: url(../img/marketplace/top_bid.png) !important;
    height: 13px !important;
}
.list_name {
    display: flex;
    gap: 10px;
}



/* open sea links  */
.nft_links{
    padding: 80px 0px;
    background: #0a0c10;
    overflow: hidden;
}
.nft_soon {
    padding: 180px 0px;
    text-align: center;
}



/* more collection sections  */

.morecollections{
   background: #151f2f;
   padding: 100px 0px 50px 0px;

}
.rounded {
    overflow: hidden;
}
.more_card {
    height: 420px;
    padding: 10px;
    background: #151f2f;
    border: 1px solid #80848b !important;
    border-radius: 10px;
}
.more_collection_data {
    padding: 20px 0px;
}
.more_items {
    display: flex;
    justify-content: space-between;
}
.more_colbas_link {
    display: flex;
    justify-content: space-between;
    padding: 15px 0px;
}
.collations_savd, .collations_time {
    display: flex;
    gap: 10px;
    align-items: center;
}
.collabs_button {
    text-align: center;
    padding: 20px 0px;
}
.collbs_btn {
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);  
    color: #fff;
    border-radius: 15px;
    padding: 7px 35px;
}
.collbs_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
    color: #fff;
}

.collectionhead{
    color: #fff;
    font-weight: bold;
    font-size: 35px ;
    text-align: center;
}
.owl-carousel {
    margin-bottom: 15px
}

.owl-carousel .owl-stage-outer {
    padding: 40px 0px;
    height: auto;
}

.owl-carousel .owl-item img {
    width: 100% !important;
    max-height: 265px;
   
}

.owl-theme .owl-nav [class*='owl-'] {
    border-radius: 50% !important;
    background: inherit !important;
    border: 3px solid #bbb;
    color: #bbb !important
}

.owl-theme .owl-nav [class*='owl-']:hover {
    border: 3px solid #893fee;
    color: #893fee !important
}



@media(max-width: 575.5px) {
   .header-scrolled .container {
    margin: 0px;
    padding: 0 12px;
}
}
/* blog page  */

.blog .card-title {
    color: #bf2d8a;
    font-weight: bold;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    height: 50px;
}



/* blog details pages              */

.blog_banner_img {
        width: 100%;
}   
section.blog_details {
    background: #000000;
} 

.blog_details_head {
    text-align: center;
    padding: 60px;
} 
.blog_details_head h1 {
    font-size: 45px;
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    display: inline-block;
    width: 80%;
    margin: 0 auto;
}   
.blog_details_para p {
    font-size: 21px;
    font-weight: 500;
    color: #fff;
}
.blog_metarixs {
    color: #fff;
    margin-top: 60px;
}
.metarixs_details h4 {
    font-size: 30px;
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    display: inline-block;
}
.metarixs_details_data p {
    font-size: 18px;
}

.details_spam{
    color: #fd0da7;
    font-weight: 600;
}
                                         
                                         /* Asset_Store Page  */

.main_site {
    padding-top: 55px;
}

#asset_store {
    background-image: url(../img/Asset_Store/Asset_Store_main_bggg.png);
    width: 100%;
    height: 100%;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 100px 0px;
}

.store_cart_data {
    position: relative;
    top: -130px;
}

.assest_store_data {
    color: #fff;
    padding: 120px 0px;
}

.asset_head {
    font-size: 48px;
    font-weight: bold;
    text-align: center;
}

.asset_para {
    text-align: center;
    width: 90%;
    margin: 0 auto;
    padding-top: 15px;
    font-size: 22px;
}

#store_cart {
    background-color: #0a1019;
    border-bottom: 1px solid #2e3135;
}

.cart-imgs {
    width: 80%;
}

.add_cart {
    color: #fff;
    background: linear-gradient(to bottom, #19192a 0%, #000000 100%);
    padding: 20px;
    border-radius: 30px;
}

.cart-data {
    display: flex;
    justify-content: space-between;
}

.cart_items {
    display: flex;
    flex-direction: column;
}

.cart-para {
    padding: 20px 0px;
}

.assest_store_button {
    text-align: center;
}

.assest_store_btn {
    padding: 14px 40px 14px 40px;
    border-radius: 50px;
    color: #fff;
    transition: 0.4s;
    animation-delay: 0.8s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-size: 18px;
}

.assest_store_btn:hover {
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
    color: #fff;
}


/* papular  */

.papular {
    padding-top: 50px;
    color: #fff;
    padding-bottom: 25px;
}

.papular_head {
    font-weight: bold;
    font-size: 32px;
}

.papular_para {
    font-size: 18px;
}

#pills-tab\ papular_button {
    display: flex;
    gap: 50px;
    padding: 0px 20px;
}

#pills-home-tab,
#pills-profile-tab,
#pills-contact-tab,
#pills-contact-tab {
    padding: 5px 35px 5px 35px;
    border-radius: 50px;
    color: #fff;
    transition: 0.4s;
    animation-delay: 0.8s;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
}

#pills-home-tab .active {
    background-color: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%) !important;
    color: #fff;
}

#pills-home-tab .active:hover {
    background-color: transparent !important;
    color: #fff;
}

.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
    color: #fff;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); 
}

#pills-profile-tab:hover,
#pills-contact-tab:hover,
#pills-contact-tab:hover {
    background-color: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%) !important;
    color: #fff;
}

#pills-home {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
    padding-top: 40px;
}

#pills-profile {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
    padding-top: 40px;
}

#pills-home {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    grid-gap: 20px;
    padding-top: 40px;
}

.card {
    border: none;
}

.papular_img {
    width: 100%;
    position: relative;
}

.saved {
    position: absolute;
    top: 7px;
    color: #FFF;
    right: 15px;
    font-size: 20px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    width: 30px;
    text-align: center;
    border-radius: 10px;
}

.saved:hover {
    color: #fff;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
}

.card_details {
    padding: 20px;
    background: linear-gradient(to bottom, #19192a 0%, #000000 100%) !important;
    color: #fff;
}

.card_items {
    display: flex;
    justify-content: space-between;
}

.card_details_head {
    font-size: 18px;
}

.card_details_para {
    font-size: 14px;
    padding: 6px 0px;
}

.assest-icons:hover {
    color: #893fee;
    cursor: pointer;
}


/* .Community_support  */

.Community_support {
    background-color: #0a1019;
}

.partner_trusted {
    display: flex;
    justify-content: space-between;
    padding: 100px 0px;
}

.community_img {
    width: 100%;
}
.animated {
    animation: up-down 1s ease-in-out infinite alternate-reverse both;
}


/* virtual Store  Page  */

.mp-bg {
    width: 100%;
    height: auto;
    object-fit: cover;
    border: 5px solid #893fee;
    margin-top: 90px;
}

.point {
    height: 60px;
    width: 60px;
    background: red;
}

.map {
    position: relative;
}

.map a {
    position: absolute;
    display: block;
    background: #893fee;
    border: 1px solid #893fee;
}

.map a:hover {
    opacity: 0.5;
}
.zoom_feature a {
    margin-bottom: 20px;
    display: block;
}
.zoom_feature {
    bottom: 20px;
    left: 20px;
    color: #fff;
    position: absolute;
    top: inherit;
    z-index: 1;
}
  
.map_btn {
    width: 40px;
    height: 40px;
    background: #000;
    border: 1px solid #000;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    padding: 8px;
    text-align: center;
    -ms-user-select: none;
    -moz-user-select: -moz-none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    transition: all 0.3s ease;
    z-index: 1;
}
.btn:hover {
    background: #fff;
    color: #000;
}
img.imgsks.map.target {
    width: 100%;
    padding-top: 100px ;
}
  
  
.zoom_feature{
    bottom: 0;
    left: 0;
}
.map_data{
    overflow: hidden;
    background: #1d1d1d;
}

/* update pages  */

canvas { 
    display:block;
    margin:1em auto;
    background: transparent; 
    border: none;
    width: 100%;
 
}


.mobile-roadmap{
    display: none;
}



/* Metarix preesale on Page  */

a.users {
    /* background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%); */
    border-radius: 50%;
    padding: 0;
    margin-left: 25px;
    text-align: center;

 }
 .user_btn {
    color: #fff !important;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 25px !important;
    width: 50px;
    border-radius: 50%;
    margin: 0;
    height: 50px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
}
 .user_btn:hover {
    background: linear-gradient(to right,#124dbd  0%, #bf2d8a 100%);
}
.metarixs_landing{
    background: #09090f;
    padding: 85px 0px 0;
   
}
.meta_landing{
    background: url(../img/metarix_landing/landing_bgg.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
    padding: 100px 0px 300px 0px;

}
.metarixs_landing_logo {
    background: #000;
    outline: 3px solid #be5a3a;;
    width: 120px;
    height: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}
.metarixs_landing_logo img {
    width: 100px;
}
.landing_heding {
    padding: 35px 0;
}
.landing_heding p {
    width: 94%;
    font-size: 21px;
}
.landing_ryt_data {
    background: #171727;
    border-radius: 10px;
    padding: 20px;
    text-align: left;
}
.busnd {
    text-align: center;
    padding: 20px 0px;
}
.busnd h6 {
    font-size: 18px;
    font-weight: 100;
}
.total.rasid h6 {
    font-size: 16px;
    font-weight: 100;
}
.total.rasid p {
    font-size: 23px;
    font-weight: 600;
}
.landing_progress {
    padding-top: 15px;
    display: flex;
    flex-direction: column;
    gap: 15px;
}
.landing_progress h6 {
    font-weight: 200;
}
.landing_progress span {
    font-weight: 600;
}
.progress {
    outline: 5px solid #fff;
}
.progress-bar {
    background-color: #cf2274 !important;
    border-radius: 10px;
}

.limites_status {
    display: flex;
    justify-content: space-between;
}

.landing_token_informations {
    position: relative;
    top: -165px;
}
.pool_info_data, .token_info_data {
    background: #181828;
    padding: 20px;
    border-radius: 10px;
}
.tok_info_head {
    font-size: 30px;
    font-weight: 600;
    margin-bottom: 30px;
}
.token_distrubation {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ffffff2e;
    margin-bottom: 20px;
}
.token_distrubation_end{
    display: flex;
    justify-content: space-between;
    margin-bottom: 20px;
}
.info_name {
    margin-bottom: 5px;
    font-size: 16px;
    font-weight: 100;
}
.info_para {
    margin-bottom: 5px;
    font-weight: 400;       
    font-size: 18px;
}
.adress-dta {
    display: flex;
    justify-content: space-between;
}
.info_para.adres-lnk{
    text-decoration: underline; 
}
.clone_btn {
    text-decoration: underline;
}
.clone_btn:hover {
    text-decoration: underline;
}
.cpy{
    margin-left: 7px;
    cursor: pointer;
}
.landing_abt_head{
    color: #fff;
    font-size: 30px;
    font-weight: 600;
}

.landingpage_paragharph {
    padding-top: 25px;
        padding-bottom: 50px;
}

.landingpage_paragharph p {
    font-size: 18px;
    width: 90%;
    color: #b9b9b9;
}

img.footers_img {
    width: 50%;
    margin-bottom: 25px;
}
.ft_right_land {
    width: 50%;
    float: right;
}
.ft_social_links_land {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    width: 100%;
}

.mobile-pro{
    display: none;
    background: #040305;
}

.landing_token_informations.timer-tkn {
    position: relative;
    top: 0;
    margin-bottom: 50px;
    padding-top: 70px;
}
form.buySubmit .modal-content {
    position: relative;
    display: flex;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #040407;
    background-clip: padding-box;
    border: 2px solid #5b1848;
    outline: 0;
    color: #f5f5f5c9;
    border-radius: 10px;
}
form.buySubmit .modal-body .form-control {
    background-color: transparent;
    border: 1px solid #ffffff45;
    box-shadow: none;
    color: #fff;
    margin-bottom: 10px;
}

form.buySubmit .modal-body .form-control::placeholder { 
    color: #f5f5f5c9;
    opacity: 1; 
}
  
 
form.buySubmit .modal-body .form-label {
    color: #f5f5f5c9;
}
form.buySubmit .modal-header {
    border-bottom: 1px solid #ffffff45;
}
form.buySubmit .modal-header .btn-close {
    box-sizing: content-box;
    width: 3px;
    height: 3px;
    padding: 6px;
    color: #e12d2d;
    background: url(../img/close.png);
    background-repeat: no-repeat;
    border: 0;
    background-size: 100% 100%;
    border-radius: 0;
    opacity: .5;
    margin-right: 4px;
}
form.buySubmit .modal-footer {
    border-top: none;
}
.modal-footer .btn-primary, .modal-footer .btn-secondary {
    padding: 8px 40px;
    border-radius: 50px;
    color: #fff;
    font-size: 18px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 400;
    border-color: transparent;
}
.buySubmit .modal-header .modal-title{
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    display: inline-block;
}


#buyModal .red {
    color: #f5f5f5c9;;
}
.modal-footer .btn-primary:hover, .modal-footer .btn-secondary:hover {
    color: #fff;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
}



.buys_button {
    display: flex;
    justify-content: space-between;
    padding-top: 30px;
}
.buy_btns {
    display: flex;
    gap: 15px;
    align-items: center;
}
.buy_btns .buy_disablebtns {
    cursor: not-allowed;
    padding: 8px 20px;
    margin-left: 18px;
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    font-weight: 400;
}
.buy_btns .btnss1{
    padding: 8px 20px;
    margin-left: 18px;
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 400;
}
.buy_btns .btnss1:hover{
    color: #fff;
    background: linear-gradient(to right, #124dbd 0%,#bf2d8a 100%);
}

/* Metarix preesale on page ended  */



/* Metarix preesale page  */

.landing_timmer {
    padding: 40px 0px 80px 0px;
    text-align: center;
    background: url(../img/preesale_ended.png);
    background-size: 100% 100%;
    background-repeat: no-repeat;
}
.timer_head {
    margin-bottom: 80px;
}

.timer_head h1 {
    font-size: 45px;
    font-weight: 700;
    background: -webkit-linear-gradient(right, #0756d2 0%, #c72c8a 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    width: 65%;
    margin: 0 auto;
}
.timer-btm {
    text-align: left;
    margin-top: 30px;
    font-size: 20px;
}
.timer_head p {
    width: 66%;
    margin: 0 auto;
    padding: 15px 0px 50px 0;
}
.timer-btm ul {
    margin: 0;
}
.timer-btm ul li {
    list-style-type: disc;
    font-size: 18px;
    line-height: 38px;
}
#clockdiv {
    color: #fff;
    display: flex;
    font-weight: 600;
    text-align: center;
    font-size: 30px;
    justify-content: center;
    gap: 15px;
        margin-top: 15px;
}
#clockdiv .timmer{
	padding: 18px;
    border-radius: 50%;
    width: 115px;
    height: 115px;
    border-top: 3px solid #ae308f;
    border-bottom: 3px solid #2849b7;
    background-image: linear-gradient(#b22f8d, #2949b7), linear-gradient(#ab3190, #2949b6);
    background-size: 0px 0;
}

.smalltext{
	padding-top: 5px;
	font-size: 16px;
}

/* landing timer Ending */

/* preesale wallets page started  */

.preesale_wallet{
    padding: 100px 0px 100px 0px;
}

.conectionshead {
    display: flex;
    align-items: center;
    gap: 20px;
    padding-top: 20px;
}
.conectionshead h6 {
    margin-bottom: 0;
}
.conectionshead img {
    width: 30px;
    height: 30px;
}
.wallet_connections .col-md-6{
    padding-left: 15px;padding-right:15px; ;
}

.wallet_connections {
    background: linear-gradient(to bottom, #19192a 0%, #000000 100%) !important;
    display: flex;
        padding: 40px 25px;
    border-radius: 20px;
    margin-bottom: 70px;
}
.wallet_conct_data {
    border-radius: 20px;
    background: linear-gradient(to bottom, #010101 0%,#181827 100%);
    text-align: left;
    height: 270px;
    padding-left: 20px;
    width: 100%;
}
.claim_item {
    padding-top: 20px;
    color: #f5f5f59c;
    font-weight: 900;
    color: #ffffffb3;
}
.ready_claim {
    display: flex;
    justify-content: space-between;
}
.locked_balance {
    display: flex;
    justify-content: space-between;
    border-bottom: 1px solid #ffffffb3;
    padding-bottom: 20px;
}
.right_wallet_conct {
    display: flex;
    flex-direction: column;
    gap: 30px;
    color: #fffc;
    margin-top: 50px;
}
.wallet_buttons {
    display: flex;
    align-items: flex-start;
    padding-top: 25px;
    gap: 20px;
}
.wallet_buttons img {
    width: 21px;
}
a.wallet_btn {
    padding: 7px 0px;
    margin-left: 0;
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 400;
    width: 50%;
}
.leftside_info h6 {
    font-size: 30px;
    margin-bottom: 15px;
    font-weight: 500;
}
a.wallet_btn:hover {
    background: linear-gradient(to right, #124dbd 0%, #bf2d8a 100%);
  
}
.leftside_info {
    text-align: left;
    height: 300px;
}
.left_info_details li {
    list-style-type: disc;
    padding-bottom: 20px;
    font-size: 16px;
    color: #fffc;
}
.rightside_info{
    background: linear-gradient(to bottom, #19192a 0%, #000000 100%) !important;
    padding: 20px;
    border-radius: 20px;
    text-align: left;
    height: 300px;
}
.preesale_infos {
    padding-top: 20px;
    display: flex;
    flex-direction: column;
    gap: 20px;
}
.preesale_infos h6 {
    color: #fffc;
}
.wallet_progress {
    padding-top: 30px;
}
.progress_white {
    outline: 3px solid #fff;
    width: 90%;
    margin-bottom: 18px;
}
span.bold_info {
    color: #cf2374;
    display: flex;
    justify-content: space-between;
}
.fa-clone{
    color: #fff;
}
.clone_btn:hover {
    color: #cf2374;
}

               /* staking pool  */

.Staking_pool {
    padding-top: 100px ;
}   
.staking_mts_pools {
    border: 2px solid #9a72e1;
    padding: 30px;
    border-radius: 20px;
}
.stak_pool {
    text-align: center;
    padding: 100px 0px ;
}
.stak_head {
    position: relative;
}
.stak_head::after{
    content: " ";
    position: absolute;
    width: 150px;
    height: 2px;
    background-color: #9b2572;
    left: 0;
    right: 0;
    margin: 0 auto;
    bottom: -10px;
}
.mts_pool {
    display: flex;
    gap: 40px;
    align-items: center;
}      
.mts_logo {
    background: #fff;
    width: 70px;
    height: 70px;
    display: flex;
    justify-content: center;
    border-radius: 50%;
    align-items: center;
}
.mts_logo img {
    width: 40px;
    height: 40px;
} 
.mts_pools_head h2 {
    font-size: 22px;
}
.mts_pool_btn {
    background: #a03393;
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 14px;
}

.mts_pools_data {
    padding: 20px 0px 0px 0px;
}
.pool_max {
    display: flex;
    justify-content: space-between;
    align-items: center;
} 
.mts_pools_data {
    padding: 20px 0px 0px 0px;
    border-bottom: 1px solid #ffffff8f;
}    
.approved_data {
    padding: 30px 0;
    text-align: center;
}
.pool_max h6 {
    font-size: 16px;
}
.pool_max p {
    font-size: 16px;
    color: #9b2572;
    font-weight: 600;
}
.mts_pools_para {
    text-align: center;
}
.mts_pools_para p {
    font-size: 16px;
}
.mts_pools_token {
    text-align: center;
}
.mts_token_links {
    font-size: 16px;
    color: #9b2564;
    font-weight: 600;
    position: relative;
}
.mts_token_links::before{
    content: " ";
    position: absolute;
    width: 95px;
    height: 1px;
    background-color: #9b2572;
    left: 0;
    right: 0;
    margin: 0 auto;
    bottom: -5px;

}
.approved_btn{
    padding: 9px 40px; 
    border-radius: 50px;
    color: #fff;
    font-size: 16px;
    background: linear-gradient(to right, #bf2d8a 0%,#124dbd 100%);
    font-weight: 400;
}
.approved_btn:hover{
    background: linear-gradient(to right, #124dbd 0%, #bf2d8a 100%);
}
section.mtxs_pools {
    margin-top: -280px;
    background: #16191e9c;
    padding-top: 330px;
    padding-bottom: 80px;
}

/* Pree-Sale_Ended Pages   */
.main_presale_ended {
    padding: 80px 0px 0px 0px;
}

.Pre_sale_ended{
    background: url(../img/preesale_ended.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
    padding: 200px 0;
}
.pree-sale_ended_data {
    text-align: center;
}
.sale_ended_paragraph p {
    font-size: 28px;
    width: 70%;
    margin: 50px auto;
    font-weight: 300;
}
.response-clnbtn{
    display: none;
}

.responsive-wlcont{
    display: none;
}
.mbl-adres-lnk{
    display: none;
}

 /****************************************** responsive website  ***************************************/
 @media (max-width: 1399px) {
    .navbar .dropdown .dropdown ul {
        left: -90%;
    }
    .navbar .dropdown .dropdown:hover>ul {
        left: -100%;
    }
    .info_para {
    font-size: 16px;
}
}


@media (max-width: 1199px) {
    .navbar a, .navbar a:focus {
    display: block;
}
.navbar {
    position: relative;
    display: block;
    flex-wrap: wrap;
    align-items: center;  
       justify-content: flex-end;
    padding-top: 12px;
    padding-bottom: 12px;
}

    .nav-link {
        padding: 0px;
    }
    .token_sale.items {
        display: grid;
        grid-template-columns: 1fr auto;
    }
    .footer_items {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }
    /* blockchain page  */
    .services_head {
        font-size: 27px;
    }
    .bitcoin_img {
        max-width: 290px;
    }
    .bitcoin_text {
        font-size: 41px;
    }
    .bitcoin_para {
        font-size: 24px;
        padding-top: 10px;
    }
    .deposit_data_2 {
        padding: 100px 0px;
    }
    #header {
    padding: 5px 0 0;
}
.staking_rewads {
    min-height: 120px;
        align-items: center;
}
.staking_rewads::after {
    height: 120px;
}
.total_supply h6 {
    font-size: 25px;
}
.right_text {
    font-size: 25px;
}
.right_para {
    font-size: 16px;
}
.roadmap-card .card-title h2 {
    font-size: 22px;
}
.card-head p {
    font-size: 15px;
}
.navbar a, .navbar a:focus {
    font-size: 15px;
    font-weight: 400;
}
.navbar .getstarted, .navbar .getstarted:focus {
    font-size: 15px;
    padding: 8px 15px;
}
.dropbtn {
    font-size: 15px !important;
}
.blockchain_head {
    top: 0;
}
.community .main_left_text {
    width: 40%;
    left: 35px;
}
#market_place {
    margin-top: 65px;
}
.landing-foot .footer_items {
    display: flex;
}
.btn.smart_contact_btn {
    font-size: 25px;
}
.desk-wlcont{
    display: none;
}
.responsive-wlcont{
    display: block;
}
#clockdiv {
    font-size: 20px;
}
.smalltext {
    padding-top: 0;
}
#clockdiv .timmer {
    width: 115px;
    height: 105px;
}
.adres-lnk{
    display: none;
}
.mbl-adres-lnk{
    display: block;
}
.metarixs_landing {
    padding: 65px 0px 0;
}
}

@media (max-width: 991px) {
    .card_data {
        grid-template-columns: 1fr 1fr;
    }
    .token_sale.items {
        grid-template-columns: 1fr;
    }
    .left_side_sale_data {
        display: flex;
        gap: 0px;
        justify-content: space-between;
    }
    .token_sale_img {
        right: 0px;
    }
    .roadmap-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 55px;
    }
    .ft_head_text {
        font-size: 16px;
    }
    .ft_head_text::after {
        top: 25px;
    }
    .footer_tags {
        font-size: 13px;
    }
    .ft_social_links a i {
        width: 40px;
        height: 40px;
    }
    .icon_links {
        font-size: 15px;
        padding: 12px;
    }
    /* staking page  */
    .stake_imgs {
        top: -50px;
        width: 100px;
    }
    .data {
        top: -36px;
    }
    .staking_data_2 {
        padding-top: 70px;
    }
    .stacky-text-hed {
        font-size: 16px;
    }
    .stacky-text {
        font-size: 17px;
    }
    .rewards::after {
        height: 49px;
        left: -6px;
    }
    .stacky-btn {
        padding: 9px 25px 9px 25px;
    }
    .check-heading::before {
        top: 95px;
    }
   
    .sdk_main_img {
        bottom: -22px;
    }
 
    .sdk_button_text,
    .sdk_button_para {
        font-size: 20px;
    }
   
    .features-box {
        grid-template-columns: 1fr 1fr;
    }
    .community_img {
        top: -32px;
    }
    .community_items {
        top: 5%;
    }
    .community_text {
        font-size: 22px;
    }
    .community_para {
        padding-top: 2px;
        font-size: 15px;
    }
    .commuinty_button {
        padding: 17px 0px 0px 0px;
    }
    .community_btn {
        padding: 4px 50px 4px 50px;
    }
    /* blockchain page  */
    .services_item_1,
    .services_item_2 {
        grid-template-columns: 1fr 1fr;
        grid-gap: 61px;
    }
    .bitcoin_text {
        font-size:28px;
    }
    .bitcoin_para {
        font-size: 21px;
    }
    .bitcoin_img {
        max-width: 260px;
    }
    .deposit_data_1 {
        display: flex;
        flex-direction: column;
        gap: 40px;
        align-items: center;
    }
    .deposit_data_2 {
        padding: 100px 0px;
        display: flex;
        flex-direction: column-reverse;
        gap: 40px;
        align-items: center;
    }
    .deposits_head {
        font-size: 33px;
    }
    .deposits_para {
        font-size: 16px;
    }
    /* metarix DAO page  */
    .metarix_ado_para {
        font-size: 16px;
    }
    .ado_btn {
        padding: 13px 50px 13px 50px;
    }
    .metarix_ado_heading {
        font-size: 50px;
    }
    .metarix_ado_text {
        font-size: 24px;
    }
    .metarix_bitcoins_data {
        top: 5%;
    }
    .metarix_ado_head {
        font-size: 34px;
    }
    .metarix_ado_para {
        font-size: 15px;
    }
    .ado_features-box {
        grid-template-columns: 1fr 1fr;
    }
    /* Assest Store Page   */
    .cart-text {
        font-size: 8px;
    }
    .cart-bold_text {
        font-size: 10px;
        font-weight: bold;
    }
    .cart_img {
        text-align: end;
    }
    .cart-imgs {
        width: 70%;
    }
    .cart-para {
        font-size: 13px;
    }
    .assest_store_btn {
        padding: 12px 25px 12px 25px;
        font-size: 14px;
    }
    #pills-home {
        grid-template-columns: 1fr 1fr;
    }
    .partner_trusted {
        justify-content: center;
        padding: 100px;
    }
     #hero {
        text-align: center;
    }
    #hero .animated {
        -webkit-animation: none;
        animation: none;
    }
    #hero .hero-img {
        text-align: center;
    }
    #hero .hero-img img {
        width: 50%;
    }
    .partner-logo, .partner-logo-s3 {
    max-width: 25%;
    width: 25%;
}
.team_data_1, .team_data_2, .team_data_3 {
    display: grid;
    grid-column-gap: 20px;
    justify-content: center;
    padding-top:30px;
    grid-template-columns: 50% 50%;
}
.box-container.b_down:nth-child(2) {
    border-width: 0 0px 1px 0px;
}
.box-container.b_down:nth-child(3) {
    border-width: 0 1px 1px 0px;
}
.box-container.left_border:nth-child(4) {
    border-width: 0 0px 1px 0;
}
.desk-roadmap{
    display: none;
}
.mobile-roadmap{
    display: block;
}
.roadmap-row {
    padding: 55px 15px 0;
}

.card.roadmap-card::after {
    width: 38px;
    right: -47px;
}

.card.roadmap-card.drop-crd::after {
    right: 0;
    z-index: -1;
    margin: 0 auto;
    left: 0;
    bottom: -38px;
    top: inherit;
    background-size: 100% 100%;
    transform: rotate(90deg);
}
.card.roadmap-card.reverce-rw::after {
    width: 38px;
    left: -48px;
    transform: rotate(180deg);
}
.card.roadmap-card.left-arw::after {
 right: 0;
    z-index: -1;
    margin: 0 auto;
    left: 0;
    bottom: -38px;
    top: inherit;
    background-size: 100% 100%;
    transform: rotate(90deg);
}

.card.roadmap-card.last-crd::after {
display: none;
}
.management_team {
    background: #000000;
    padding: 30px 0px;
    margin-top: 50px;
}
.staking_page_items {
    width: 100%;
    margin: auto;
}
.bitcoins_data {
    top: 10%;
}
.deposits_data {
    position: relative;
    top: 0;
    text-align: center;
}
.deposit_items {
    display: flex;
    padding-top: 0;
    gap: 15px;
    justify-content: center;
}
.deposit_data_2 {
    padding: 100px 0px 0;
}
.clone_btn{
    display: none;
}
.response-clnbtn {
    display: block;
}
.leftside_info h6 {
    font-size: 24px;
}
.timer_head h1 {
    font-size: 35px;
    width: 100%;
}
#clockdiv .timmer {
    width: 115px;
    height: 115px;
    line-height: 25px;
}
.timmer span {
    padding-top: 10px;
    display: inline-block;
}
.timer_head {
    margin-bottom: 40px;
}
.landing_ryt_data {
    margin-top: 30px;
}
.tok_info_head {
    margin-top: 50px;
}
.landing_token_informations.timer-tkn {
    padding-top: 0;
}
.landingpage_paragharph {
    padding-top: 10px;
    padding-bottom: 0;
}
.preslae-abt{
    padding-bottom: 15px;
}
.meta_landing {
    background: url(../img/preesale_ended.png);
    padding: 60px 0px 60px 0px;
}
.landing_token_informations {
    position: inherit;
    top: 0;
}
.landing_abt_head {
    margin-top: 40px;
}
.landingpage_paragharph p {
    color: #b9b9b9;
}
}



@media (max-width: 810px) {
    .hero_head_text {
        top: -38px;
    }
    .team_data_1,
    .team_data_2,
    .team_data_3 {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    .partner-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
    }
    #contact {
    padding: 100px 0px;
}
}

@media (max-width: 768px) {
        #hero h1 {
        font-size: 28px;
        line-height: 36px;
    }
    #hero h2 {
        font-size: 18px;
        line-height: 24px;
        margin-bottom: 30px;
    }
    #hero .hero-img img {
        width: 70%;
    }
    .footer_items {
        grid-template-columns: 1fr;
        text-align: center;
        grid-gap: 50px;
    }
    .ft_head_text::after {
        margin: 0 auto;
    }
    .ft_social_links {
        display: flex;
        width: 100%;
        margin-bottom: 15px;
        justify-content: center;
    }
    .ft_head_text {
        font-size: 24px;
    }
    .ft_head_text::after {
        top: 32px;
        width: 70px;
    }
    .footer_tags {
        font-size: 16px;
    }
    /* staking page  */
    .stake_imgs {
        top: -40px;
        width: 80px;
    }
    .data {
        top: -20px;
    }
    .current_balance {
        width: 100%;
        height: 140px;
        margin: auto;
    }
    .timer-btm ul li {
    font-size: 16px;
    line-height: 32px;
}
    .rewards_data {
    min-height: 140px;
}
    /* cooming soon  */
    .soon_text {
        font-size: 70px;
    }
    .soon_btn {
        padding: 12px 50px 12px 50px;
    }
    /* blockchain page  */
    .blockchain_head {
        top: 0%;
    }
   .block_para {
    font-size: 15px;
    width: 100%;
}
    .services_item_1,
    .services_item_2 {
        grid-template-columns: 1fr;
    }
    .bitcoins_data {
    top: 0;
    margin-top: 35px;
    text-align: center;
}
    .bitcoin_text {
        font-size: 27px;
    }
    .landing_timmer {
    padding: 40px 0px 30px 0px;
}
    .bitcoin_para {
        font-size: 15px;
        width: 100%;
    }
    .bitcoin_img {
        top: 0px;
    }
    .bitcoin_img {
        max-width: 200px;
    }
    .btc-img {
    text-align: center;
}
.deposits {
    text-align: center;
}
    /* metarix DAO page  */
    .metarix_bitcoins_data {
        top: 4%;
    }
    .meta_ado_items {
        width: 100%;
    }
    .metarix_bitcoins_bgg {
        flex-direction: column;
        gap: 166px;
    }
    .metarix_ado_img {
        width: 77%;
        height: 200px;
        top: -79%;
        left: 45px;
    }
    .ado_features-box {
        grid-template-columns: 1fr;
    }
    /* asset store page  */
    .asset_head {
        font-size: 47px;
    }
    .asset_para {
        width: 100%;
        font-size: 18px;
    }
    .cart-text {
        font-size: 14px;
    }
    .cart-bold_text {
        font-size: 18px;
    }
    .cart-imgs {
        width: 90%;
    }
    .cart-para {
        font-size: 19px;
    }
    .card_data {
    grid-template-columns: 1fr;
}
.b_down, .left_border {
    border-width: 0px 0px 1px 0px;
}
.box-container.b_down:nth-child(3) {
    border-width: 0 0px 1px 0px;
}
.box-container.left_border:nth-child(5) {
    border-width: 0 0px 1px 0;
}
.token_sale {
    background: #000000;
    padding: 40px 0px 10px;
}
.mobile-roadmap {
    display: none;
}
.desk-roadmap {
    display: block;
}
.roadmap-row {
    grid-template-columns: 1fr;
     grid-gap: 50px;
}

.card.roadmap-card:nth-child(3)::after {
    bottom: -35px;
}
.heading_para {
    padding: 25px 15px;
}
.row.roadmap-row.full-vw {
    display: none;
}
.mbl {
    display: block;
}
.card.roadmap-card::after {
 right: 0;
    z-index: -1;
    margin: 0 auto;
    left: 0;
    bottom: -35px;
    top: inherit;
    background-size: 100% 100%;
    transform: rotate(90deg);
}
.card.roadmap-card:nth-child(5)::after, .card.roadmap-card:nth-child(4)::after {
    background-size: 100% 100%;
    transform: rotate(90deg);
}
.card.roadmap-card::after {
    width: 30px;
}
.stacky_head {
    padding: 100px 15px 10px;
}
.staking_data_1 {
    padding-top: 40px;
     grid-gap: 70px;
   grid-template-columns: 1fr;
}
.main_left_text {
    top: 30%;
    left: 100px;
}
.main_right_text {
    top: 25%;
    right: 20px;
}
.right_text {
    font-size: 28px;
}
.left_sale, .right_sale2, .right_sale2 {
    width: 40%;
}
.community .main_left_text {
    top: 4%;
    width: 80%;
    left: 35px;
}
.community .right_text {
    font-size: 22px;
}
.community .right_para {
    font-size: 14px;
    padding-top: 3px;
    margin-bottom: 0;
}

.right_text {
    font-size: 20px;
}
.right_blockchain {
    text-align: center;
}
.heading_text {
    font-size: 25px;
}
.community .carousel {
    display: none;
}
.main_left_text.mobile-comunity {
    display: block;
    position: inherit;
    max-width: 500px;
    margin: 0 auto;
    width: 100%;
    padding: 0 15px;
}
.community {
    padding: 50px 0;
}
.market_place_data {
    padding: 40px 0px 0;
}
.nft_right_img {
    padding: 0px 0px 30px;
    text-align: center;
}
.main-head {
    top: 0;
}
.buttons_sdk_items {
    padding-top: 20px;
}
.features-box {
    padding: 25px 15px 50px 15px;
        grid-gap: 30px;
}
.metarix_artifix {
    padding: 30px 0;
}
.meta_landing {
    padding: 35px 0px 0px 0px;
}
.landing_token_informations {
    position: relative;
    top: 0;
    margin-top: 20px;
}
.tok_info_head {
    margin-bottom: 10px;
    margin-top: 35px;
}
.landing_abt_head {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 22px;
}
.ft_right_land {
    width: 100%;
    float: none;
    margin: 0 auto;
}
.token_sale_items {
    display: grid;
    justify-content: center;
    grid-template-columns: 50% 50%;
}
.features-box {
    grid-template-columns: 1fr;
    padding: 25px 15px 60px 15px;
    grid-gap: 20px;
}
.wallet_connections {
    display: block;
        padding: 25px 10px;
}
.preesale_wallet {
    padding:40px 0px 50px 0px;
}
.Pre_sale_ended {
    padding: 30px 0;
}
.sale_ended_paragraph p {
    font-size: 18px;
    width: 100%;
    margin: 30px auto;
    font-weight: 300;
}
}
@media (max-width: 640px) {
.desk-pro{
    display: none;
}
.mobile-pro{
    display: block;
}
.mask.rgba-indigo-light {
    text-align: center;
    margin-top: 50px;
}
.slide-img {
    text-align: center;
}
.slider-two img{
    width: 100%;
}

.metarixs_landing_logo img {
    width: 50px;
}
.metarixs_landing_logo {
    outline:2px solid #be5a3a;
    width: 70px;
    height: 70px;
}
.landing_heding p {
    width: 100%;
    font-size: 15px;
}
.tok_info_head {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 10px;
    margin-top: 35px;
}
.landing_token_informations {
    position: relative;
    top: 0;
    margin-top: 20px;
}
.landingpage_paragharph p {
    font-size: 16px;
    width: 100%;
        line-height: 28px;
}
#our_services {
    color: #FFF;
    padding: 70px 0px 80px 0px;
}
.timer_head h1 {
    font-size: 23px;
    width: 100%;
}
.landing_heding {
    padding: 35px 0 0;
}
}

@media (max-width: 568px) {
	.checkpoints-text {
    font-size: 16px;
        margin-bottom: 3px;
}
.checkpoints-para {
    padding-left: 35px;
    font-size: 14px;
}
	.rewards {
    padding: 5px 0 15px 0;
}
.rewards::after {
   display: none;
}
	.rewards_data {
    display: block;
    min-height: auto;
    padding: 25px;
}
	 .current_balance {
        width: 100%;
        height: auto;
            margin-bottom: 40px;
    }
        #hero .hero-img img {
        width: 80%;
    }
    #hero .btn-get-started {
        font-size: 16px;
        padding: 10px 24px 11px 24px;
    }
    .left_side_sale_data {
        display: flex;
        gap: 20px;
        justify-content: center;
    }
    /* staking pages  */
    .staking_data_1 {
        grid-template-columns: 1fr;
    }
    .stake_imgs {
        top: -46px;
        width: 100px;
    }
    .data {
        top: -38px;
    }
    .check-data {
        padding: 50px 10px;
    }
   
    /* metarix sdk  */
    .buttons_sdk_items {
        grid-template-columns: 1fr;
        grid-gap: 50px;
    }
    
    .community_items {
        top: -13%;
    }
    .community_para {
        padding: 2px;
    }
    .community_btn {
        font-size: 15px;
    }
    /* blockchain page  */
    .blockchain_main_data {
        padding: 50px 50px;
    }
    .our_services_data {
        padding: 0px 50px;
    }
    .deposits {
        padding: 50px;
    }
    /* metarix ADO page  */
    .metarix_ado_data {
        padding: 200px 0px 150px 50px;
        width: 100%;
    }
    .ado_features-box {
        grid-template-columns: 1fr;
        padding: 0px 50px;
    }
    .sdk_head_para {
        font-size: 15px;
        padding-bottom: 20px;
    }
    /* assest store page  */
    #pills-home {
        grid-template-columns: 1fr;
    }
    #hero h1 {
    font-size: 14px;
    line-height: 23px;
}

.carousel-fade .carousel-item {
    padding-top: 80px;
}
.box-head h3 {
    font-size: 17px;
}
.box-head p {
    font-size: 15px;
}
.box-img {
    text-align: center;
    height: 129px;
    padding-top: 20px;
}
.box-head {
    text-align: center;
    line-height: 2;
    padding: 0px 18px 20px 17px;
}
.token_sale.items {
    padding-top: 0;
}
.staking_rewads {
    display: block;
}
.tokens p {
    margin-top: 5px;
    text-align: left;
}
.token_sale_items {
    display: block;    
    margin: 20px 0px 40px 0px;
}
.sliders_texed {
    font-size: 23px;
}
.slider {
    padding: 40px 0;
}
.nft_links {
    padding: 80px 0px 30px;
}
img.footer_logo {
    margin-top: 30px;
}
#footer {
    padding: 15px;
}
#clockdiv {
    display: grid;
    font-size: 20px;
    gap: 0px;
    margin-top: 15px;
    grid-template-columns: 50% 50%;
}
#clockdiv .timmer {
    margin: 0 auto 30px;
}
}


@media (max-width: 478px) {
    .hero_head_text {
        top: 50px;
    }
    .roadmap-row {
        grid-template-columns: 1fr;
    }
    .team_data_1,
    .team_data_2,
    .team_data_3 {
        grid-template-columns: 1fr;
    }
    .card_data {
        grid-template-columns: 1fr;
    }
    .left_side_sale_data {
        flex-direction: row-reverse;
    }
    .partner-list {
        grid-template-columns: 1fr 1fr;
        padding: 0;
        margin:0;
        text-align: center;
    }
    .partner-logo, .partner-logo-s3 {
    max-width: 100%;
    width: 100%;
}
    /* staking page  */
    .rewards::after {
        display: none;
    }
    /* metarix sdk  */
    
    /* cooming soon  */
    .soon_text {
        font-size: 50px;
    }
    .soon_btn {
        padding: 10px 20px 10px 20px;
    }
    .bitcoin_text {
        font-size: 21px;
    }
    /* metarix ADO page  */
    .metarix_ado_img {
        width: 59%;
        height: 141px;
        top: -114%;
        left: 45px;
    }
    .metarix_ado_img {
        display: none;
    }
    .our_partners {
    padding: 30px 0px 0;
}
.partners-data {
    padding: 40px 0px;
}
.partners-data {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}
#footer {
    background-color: #000;
    padding: 30px 0;
}
.heading_text{
    font-size: 20px;
}
.heading_logo {
    width: 18px;
}
.sale_text {
    font-size: 14px;
}
.products_items_data_right {
    padding: 0 15px;
}
.staking_rew_items h6 {
    font-size: 18px;
    margin-bottom: 0;
}
.staking_rewads::after {
    height: 100%;
}
.staking_rewads {
    align-items: center;
}

}

@media (max-width: 375px) {
	.icon_links {
    margin: 2px !important;
}
    .team_data_1,
    .team_data_2,
    .team_data_3 {
        grid-template-columns: 1fr;
    }
    .partners-data {
        display: flex;
        justify-content: center;
    }
   
    /* staking page  */
    .rewards::after {
        display: none;
    }
    /* metarix sdk  */
    .features-box {
        grid-template-columns: 1fr;
    }
    /* blockchain page  */
    .bitcoins_data {
        top: 150%;
    }
    .bitcoin_para {
        width: 90%;
    }
    .bitcoin_img {
        top: -163px;
    }
    .bitcoin_img {
        max-width: 183px;
    }
    .partner-list {
    grid-template-columns: 1fr ;
}
}
</style>    