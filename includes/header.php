<?php 
include($_SERVER['DOCUMENT_ROOT']."/config.php");
include($_SERVER['DOCUMENT_ROOT']."/functions.php"); 
$page = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metarix</title>

    <!-- Favicons -->
  <link href="images/fav_icon.png" rel="icon">
  <link href="images/fav_icon.png" rel="apple-touch-icon">
  
  <!-- bootstrap 5.0  -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- font awosome 4.7  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- owl crowsel slider link  -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" rel="stylesheet" />

  <!-- css file  -->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
   <!-- ======= Header ======= -->
    <?php 
      $headerclss = "";
      if($page == 'index.php' || $page == ""){
        $headerclss = "home_headback";
      }
    ?>
   <header id="header" class="header fixed-top <?=$headerclss?>">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.php" class="logo d-flex align-items-center">
        <img src="images/metarix_logo.png" alt="">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
          <li class="dropdown"><a href=""><span>Products</span> <i class="fa fa-chevron-down"></i></a>
            <ul>
              <li><a target="_blank" href="nft_marketplace.php">NFT Marketplace <sup>Coming Soon</sup></a></li>
              <!-- <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="fa fa-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li> -->
              <li><a target="_blank" href="https://launchpad.metarix.network/">LaunchPad</a></li>
              <li><a target="_blank" href="mtrx_blockchain.php">Metarix Blockchain</a></li>
              <li><a target="_blank" href="mtrx_app_store.php">Metarix App Store</a></li>
              <li><a target="_blank" href="mtrx_sdk.php">Game SDK</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="<?php echo BASE_URL; ?>#Token_sale">Token Sale</a></li>
          <li><a href="mtrx_claim.php">Claim</a></li>
          <li><a class="nav-link scrollto" href="contact.php">Contact Us</a></li>
          <li><a class="getstarted scrollto" target="_blank" href=" images/whitepaper/mtrx_whitepaper.pdf">Whitepaper</a></li>
          <li><a class="getstarted scrollto button-glow" target="_blank" href="https://launchpad.metarix.network/pool_detail/featured/62b1f253e4ee47a3e6a6a6f5">PreSale</a></li>

          <?php if($page == 'index.php' || $page == ""){?>
              <li>
                <div class="live_data">
                    <svg height="60" width="60" class="blinking">
                    <circle cx="40" cy="30" r="10" fill="green" />
                         Sorry, your browser does not support inline SVG.  
                    </svg> 

                    <div class="live_text">
                        <h6><span class="bl">Testnet is Live</span></h6>
                    </div>
                </div>
              </li>
          <?php }?>

          <?php if($page == 'mtrx_claim.php') { ?>
          <li><a class="getstarted scrollto" id="btn-connect" href="javascript:void(0);">Connect Wallet</a></li>
          <li><a class="getstarted scrollto" id="btn-disconnect" href="javascript:void(0);">Disconnect Wallet</a></li>
          <?php } ?>
        </ul>
        <i class="fa fa-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
