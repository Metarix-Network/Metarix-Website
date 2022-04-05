<!-- Header started  -->
<?php include("includes/header.php"); ?>

<div class="metarixs_landing">


<section class="landing_timmer">
    <div class="container">
        <div class="row">
           <div class="timer_head">
               <h1>We Are Launching New Presale</h1>
               <p>A pre-sale is a targeted sale before your product actually goes live. You sell the idea of your course to a small portion of your audience before you’ve created all of your course content. Typically, you pre-sell by setting up your sales page, discounting your course, and sending an email out to your list (or communicating the sale to your audience in another way).</p>
           </div>
            <div id="clockdiv">
                <div class="timmer">
                    <span class="days"></span>
                    <div class="smalltext">Days</div>
                </div>
                <div class="timmer">
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                </div>
                <div class="timmer">
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                </div>
                <div class="timmer">
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <h2 class="landing_abt_head">About the Project</h2>
            <div class="col-md-6">
                <div class="landingpage_paragharph">
                    <p>Metarix is a fully Decentralized Blockchain platform for Gaming, NFT's and Metaverse. We at Metarix are dreaming to build the community owned decentralized blockchain platform. Our platform consists of Blockchain, DEX, NFT Marketplace, Metaverse , Virtual Land Parcels , SDK and much more.
                    We are dreaming of building a complete ecosystem for gaming projects to give users the one stop solution for all the gaming project needs. Metarix is a decentralized web 3.0 platform and is powered using the Metarix Chain a layer 2 solution on top of Ethereum using Ethereum's Scaling and security measures to ensure our users are protected. </p>
                </div>
            </div>
            <div class="col-md-6">
                 <div class="landingpage_paragharph">
                    <p>User's who participate in this private sale and stake with us are eligible for 50 percent discount on our land parcels subject to all the terms and conditions. Metarix Virtual Land project consists of 109,000 land parcels each of different size. You can buy virtual real estate property on Metarix chain and build anything you dream of in Metarix Metaverse using our own SDK. We provide additonal support from Building NFT's and Games to customizing them and even pushing your project to greater extent with all the resources of Metarix at your disposal. </p>
                </div>
            </div>
        </div>
    </div>
</section>





</div><!-- metarixs_landing ended  -->



<!-- footer  -->
<?php include("includes/footer.php"); ?>

    


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

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
initializeClock('clockdiv', deadline);
</script>