
<!-- footer started  -->
<footer class="footer">
    <div class="footer_dats">
        <div class="container">
            <div class="row">
                <div class="footer_data_row">
                    <div class="ft_row_1 ">
                        <div class="footer_logo">
                            <img src="images/footer_logo.png" alt="">
                        </div>
                    </div>
                    <div class="ft_row_2">
                        <div class="footer_head">
                            <h2 class="text_gradient">Products</h2>
                        </div>
                        <div class="ft_links">
                            <a class="footer_tags" target="_blank" href="mtrx_blockchain.php">Metarix Blockchain</a>
                            <a class="footer_tags" target="_blank" href="https://launchpad.metarix.network/">LaunchPad</a>
                            <a class="footer_tags" target="_blank" href="mtrx_app_store.php">Metarix App Store</a>
                            <a class="footer_tags" target="_blank" href="mtrx_sdk.php">Game SDK</a>
                            <a class="footer_tags" target="_blank" href="comming_soon.php">Virtual Map</a>
                        </div>
                    </div>    
                    <div class="ft_row_3">
                        <div class="footer_head">
                            <h2 class="text_gradient">Links</h2>
                        </div>
                        <div class="ft_links">
                            <a class="footer_tags" href="<?php echo BASE_URL; ?>#Token_sale">Token Sale</a>
                            <a class="footer_tags" href="<?php echo BASE_URL; ?>#RoadMap">Roadmap</a>
                            <a class="footer_tags" href="<?php echo BASE_URL; ?>#TEAMS">Team</a>
                            <a class="footer_tags" target="_blank" href="contact.php">Contact Us</a>
                            <a class="footer_tags" target="_blank" href="images/lightpaper/mtrx_lightpaper.pdf">Light Paper</a>
                        </div>
                    </div>
                    <div class="ft_row_4">
                        <div class="footer_head">
                            <h2 class="text_gradient">Quick Links</h2>
                        </div>
                        <div class="ft_links">
                            <a class="footer_tags" target="_blank" href="https://testnest.metarix.network/">Testnet <sup >Live</sup></a>
                            <a class="footer_tags" target="_blank" href="comming_soon.php">MainNet <sup >Coming Soon</sup></a>
                        </div>
                    </div>
                    <div class="ft_row_5">
                        <div class="footer_head">
                            <h2 class="text_gradient">Follow us</h2>
                        </div>
                        <div class="ft_social_links">
                            <a target="_blank" href="https://www.facebook.com/The-Metarix-104132965453352 "> <img src="images/SOCIAL_ICONS/FB.png" alt=""></a>
                            <a target="_blank" href="https://www.instagram.com/the_metarix/"><img src="images/SOCIAL_ICONS/IG.png" alt=""></a>
                            <a target="_blank" href="https://www.linkedin.com/company/metarix/ "><img src="images/SOCIAL_ICONS/LI.png" alt=""></a>
                            <a target="_blank" href="https://twitter.com/The_Metarix"><img src="images/SOCIAL_ICONS/TW.png" alt=""></a>
                            <a target="_blank" href="https://t.me/metarix_official"><img src="images/SOCIAL_ICONS/TG.png" alt=""></a>
                            <a target="_blank" href="https://www.youtube.com/channel/UCvrtvQGYuu-ZiSzIpO8noHw"><img src="images/SOCIAL_ICONS/YT.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        
        </div>
        <div class="footer_ended">
            <h5 class="footer-ended_text">@Copyright Metarix 2022</h5>
        </div>
    </div>
</footer>


   
    <!-- owl crowsel  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js"></script>

   <!-- bootstrap 5.0  js -->
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   <script src="js/main.js"></script>
    <script src="js/custom.js"></script>
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


   <!-- Google Analytics -->
   <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z3HR2PVS87"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Z3HR2PVS87');
    </script>

    <script type="text/javascript">
function sendContactAdmin()
{
  

  var emRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
 
  var email=$('#email').val();
  if(email == "")
  {
   
    Swal.fire({
      text: 'Email field is required.',
      confirmButtonText: 'OK',
      confirmButtonColor: "#3085d6",
      icon: 'warning',
     }).then((result) => {
     })
    //alert('Email field is required.');
    $('#email').focus();
    return false;
    
  }
  else if(!emRegex.test(email)) {
    Swal.fire({
      text: 'Please enter valid email.',
      confirmButtonText: 'OK',
      confirmButtonColor: "#3085d6",
      icon: 'warning',
     }).then((result) => {
     })
    //alert('Please enter valid email.');
    $('#email').focus();
    return false;
  }
  else
  {
    //$.ajax({url: "form/subscribe_us.php", //using sendgrid
    $.ajax({url: "functions.php", //save in database
      method:"POST",
      data:{'email':email,'type':'subscribe'},
      dataType: "json",
      success: function(response){
        $('#email').val('');
        if(response.status == '1'){
          
          //alert('Thanks for Subscribe with us!.');
          Swal.fire({
          text: 'Thank you for subscribing with us!',
          confirmButtonText: 'OK',
          confirmButtonColor: "#3085d6",
          icon: 'success',
          
         }).then((result) => {
         })
        }
        else if(response.status == '2'){
          
          //alert('Thanks for Subscribe with us!.');
          Swal.fire({
          text: 'Thank you for subscribing with us!',
          confirmButtonText: 'OK',
          confirmButtonColor: "#3085d6",
          icon: 'success',
         }).then((result) => {
         })
        }
        else
        {
            Swal.fire({
              text: 'Something went wrong.',
              confirmButtonText: 'OK',
              confirmButtonColor: "#3085d6",
              icon: 'warning',
             }).then((result) => {
             })
             //alert('Something went wrong.');
                $('#email').focus();
                return false;
        }
      }
    });
  }
}
</script>

</body>
</html>