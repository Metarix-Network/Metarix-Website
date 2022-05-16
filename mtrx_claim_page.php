<?php include("includes/header.php"); ?>
<style type="text/css">
  #btn-disconnect{
    display: none;
  }
</style>


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
                           <h6 id="wallet_connect">Wallet not connected</h6>
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
                                <a class="clone_btn" target="_blank" href="https://bscscan.com/address/0x55382eeef32eb87aa27d13d7637954c344154151"> 0x55382eEEF32EB87AA27D13d7637954C344154151</a>  
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



    