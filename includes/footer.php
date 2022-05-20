 <!-- footer started  -->
  <footer class="footer" id="footer" >
      <div class="container footer_data">
        <div class="row footer_items">
          <div class="col-xl-2 footer_left">
            <a href="index.php"><img class="footer_logo" src="img/footer-logo.png" alt=""></a>
          </div>
          <div class="col-xl-3">
            <h4 class="ft_head_text">Our Products</h4>
            <div class="ft_links">
                <a class="footer_tags" href="metarix_blockchain.php">Metarix Blockchain</a>
                <a class="footer_tags" href="metarix_sdk.php">Metarix SDK</a>
                <a class="footer_tags" href="market_place.php">Metarix Market Place</a>
                <a class="footer_tags" href="virtual_store.php">Virtual Map</a>
                <!-- <a class="footer_tags" href="metarix_DAO.php">Metarix DAO </a> -->
            </div>
          </div>
          <div class="col-xl-3">
            <h4 class="ft_head_text">Our Links</h4>
            <div class="ft_links">
                <a class="footer_tags" href="#Token">Token Sale</a>
                <a class="footer_tags" href="#Roadmap">Roadmap</a>
                <a class="footer_tags" href="#Teams">Team</a>
                <a class="footer_tags" href="contact.php">Contact Us</a>
                <li class="ftlightpaper">
                  <a target="_blank" href="img/lightpaper/Lightpaper.pdf">Light Paper</a>
                </li>
            </div>
          </div>
          <div class="col-xl-4">
            <h4 class="ft_head_text">Follow Us</h4>
            <div class="ft_social_links">
              <a target="_blank" href="https://www.facebook.com/The-Metarix-104132965453352 "><i class="fa icon_links fa-facebook" aria-hidden="true" ></i></a>
              <a target="_blank" href="https://www.instagram.com/the_metarix/"><i class="fa icon_links fa-instagram" aria-hidden="true"></i></a>
              <a target="_blank" href="https://www.linkedin.com/company/metarix/ "><i class="fa icon_links fa-linkedin-square" aria-hidden="true"></i></a>
              <a target="_blank" href="https://twitter.com/The_Metarix"><i class="fa icon_links fa-twitter" aria-hidden="true"></i></a>
              <a target="_blank" href="https://t.me/metarix_official"><i class="fa icon_links fa-telegram" aria-hidden="true"></i></a>
              <a target="_blank" href="https://www.youtube.com/channel/UCvrtvQGYuu-ZiSzIpO8noHw"><i class="fa icon_links fa-youtube-play" aria-hidden="true"></i></a>
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

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>
  <script src="js/custom.js"></script>
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
    //checkAmount();
    //setInterval(checkAmount, 5000);
  </script>
  




 

</body>

</html>