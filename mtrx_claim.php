<!-- header  -->
<?php include("includes/header.php"); ?>
<style type="text/css">
  #btn-disconnect{
    display: none;
  }
</style>

<section class="Claim_main_page">
    <div class="container">
        <div class="main_claim_page_data">
            <div class="wallet_conct_data">
                <div class="conectionshead">
                    <input type="hidden" id="copyRefrelInputCurrent" value="">
                    <img src="img/staking/plus_icon.png" alt="">
                    <h6 id="wallet_connect_text" class="desk-wlcont text_gradient">WALLET NOT CONNECTED!</h6>
                    <p id="wallet_connect">WALLET ADDRESS COMES HERE</p>
                    <!-- <h6 id="wallet_connect" class="responsive-wlcont">Wallet not connected!</h6> -->
                </div>
                <div class="claim_item_texed">
                    <h6>CLAIMED</h6>
                    <div class="claim_items">
                        <h6>0 MTRX</h6>
                        <p>OF</p>
                        <h6><span class="total_coins_show">0</span> MTRX</h6>
                    </div>
                </div>
                <div class="wallet_progress">
                    <div class="progress progress_white">
                        <div class="progress-bar" role="progressbar" style="width: 0%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> 
                    </div>
                    <span class="bold_info">0%</span>
                </div>

                <div class="right_wallet_conct">
                    <div class="ready_claim">
                        <h6 class=" text_gradient">BALANCE IN MTRX</h6>
                        <p id="total_coins_show" class="total_coins_show">0</p>
                    </div>
                    <div class="locked_balance">
                        <h6 class=" text_gradient">AMOUNT IN DOLLARS</h6>
                        <p id="total_coins_dollar">$</p>
                    </div>
                </div>
                <div class="widrowl_buttons">
                    <div class="claim_widrow_button">
                         <button type="button" disabled>WITHDRAW MTRX</button>
                    </div>
                     <!-- <a class="btn1" href="javascript:void()" style="cursor: not-allowed;">
                        <span>WITHDRAW MTRX</span>
                    </a> -->
                    <div class="redLabel">*Note: New MTRX(s) will reflect in every 12 hours.</div>
                </div>

            </div>
        </div>
        

    </div>
</section>



<!-- few notes -->

<section class="Few_Notes">
    <div class="few_notes_background">     
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="few_notes_pictures">
                        <img src="images/claim_page/few_notes.png" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="few_notes_data">
                        <div class="few_notes_heading">
                            <h2 class="text_gradient">FEW NOTES FOR THE USERS!</h2>
                        </div>
                        <div class="few_notes_items">
                            <h6>Claiming MTRX can be done at launch time. <br> Date and time will be announced later.</h6> 
                            <h6>20% TGE ( unlocked ).</h6>
                            <h6>80% vested, 5% weekly unlock.</h6> 
                            <h6>Remember to have a little BNB for gas fee, <br> when claiming your MTRX tokens.</h6> 
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Token Info  -->

<section class="Token_Info">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="token_info_data">
                    <h2 class="text_gradient">TOKEN INFO</h2>
                    <div class="token_info_items">
                        <div class="token_inf_bgg">
                            <div class="name">
                                <h4 class="text_gradient">NAME</h4>
                                <p>MTRX</p>
                            </div>
                            <div class="name">
                                <h4 class="text_gradient">ADDRESS</h4>
                                <input type="hidden" id="copyRefrelInputClaim" value="<?=TOKEN_ADDRESS?>">
                                <div class="adress-dta" id="token_info_address">
                                    <p><?=TOKEN_ADDRESS?></p>
                                    
                                    <span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltip"><img src="images/copy_icon.png" alt=""></span>
                                    <span class="cpy" onclick="copyToClipboard('#copyRefrelInputClaim')" id="myTooltipshow" style="display: none;"><i class="fa fa-check" aria-hidden="true"></i></span>

                                </div>
                               
                            </div>
                            <div class="name">
                                <h4 class="text_gradient">DECIMALS</h4>
                                <p>9</p>
                            </div>
                        </div>                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="token_info_picture">
                    <img src="images/claim_page/token_info.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

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
  $('#token_info_address p').css('background-color','#32a1fe');
  document.execCommand("copy");
  $temp.remove();
  $("#myTooltip").hide();
  $("#myTooltipshow").show();
}
</script>

