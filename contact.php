<?php 
session_start();
$message = $_SESSION['message'];
unset($_SESSION['message']);
?>
<!-- header  -->
<?php include("includes/header.php"); ?>




    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" >

        <div class="heading">
          <h1 class="text_gradient">CONTACT US </h1>
          <p class=" contactus_para">"Get in touch with us today!"</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
             <img class="cont_img" src="images/contact_us/contactpagelogo.png" alt="">
            <!-- <div class="info">
              <div class="address">
                <i class="fa fa-map-marker"></i>
                <h4>Location:</h4>
                <p>GBL LABS PRIVATE LIMITED Nakshatra Altitude Towers, Karmanghat,Hyderabad, Telangana, India</p>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4>Email:</h4>
                <p>support@metarix.network</p>
              </div>

              <div class="phone">
                <i class="fa fa-phone"></i>
                <h4>Call:</h4>
                <p>(1) 805 439 1288</p>
              </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15233.847672240532!2d78.52739861917146!3d17.34149214213274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb98834e519e89%3A0xa310cd2c89a4d912!2sKharmanghat%2C%20Telangana!5e0!3m2!1sen!2sin!4v1640602217294!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen="" loading="lazy"></iframe>
              
            </div> -->

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <!-- <form action="form/contact.php" id="contact_us_form" method="post" role="form" class="php-email-form"> -->
              <form id="contact_us_form" method="post" role="form" class="php-email-form">
			    <?php if(isset($message)){ ?>
				<div class="alert alert-success" role="alert">
					<?php echo $message; ?>
				</div>
			  <?php } ?>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="name" class="text_gradient">Your Name</label>
                  <input type="text" name="name" class="form-control" id="contact_name" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="name" class="text_gradient">Your Email</label>
                  <input type="email" class="form-control" name="email" id="contact_email" required>
                </div>
              </div>
              <div class="form-group">
                <label for="name" class="text_gradient">Subject</label>
                <input type="text" class="form-control" name="subject" id="contact_subject" required>
              </div>
              <div class="form-group">
                <label for="name" class="text_gradient">Message</label>
                <textarea class="form-control" name="message" id="contact_message" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading" class="text_gradient">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->

              <div class="contact_main_button">
                    <a class="btn1" href="javascript:void();">
                        <span><button type="button" id="send_contact_message">Send Message</button></span>
                    </a>
              </div>   
              <!-- <div class="text-center"><button type="submit">Send Message</button></div> -->

            </form>
          </div>

        </div>

        <div class="row">

        <div class="info">
              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4 class="text_gradient">Email:</h4>
                <a href="support@metarix.network">support@metarix.network</a>
              </div>

              <div class="email">
                <i class="fa fa-envelope"></i>
                <h4 class="text_gradient">Partner Email:</h4>
                <a href="partner@metarix.network">partner@metarix.network</a>
              </div>

        </div>


             


        </div>

      </div>
    </section><!-- End Contact Section -->

<!-- footer  -->
<?php include("includes/footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
/*------------------send contact----------------------*/
$('#send_contact_message').click(function() {
  var contact_name = $("#contact_name").val();
  var contact_email = $("#contact_email").val();
  var contact_subject = $("#contact_subject").val();
  var contact_message = $("#contact_message").val();

  if(contact_name == "")
  {
    Swal.fire(
        'Error!',
        'All fields required!',
        'error'
      );
    $("#contact_name").focus();
    return false;
  }
  else if(contact_email == "")
  {
    Swal.fire(
        'Error!',
        'All fields required!',
        'error'
      );
    $("#contact_email").focus();
    return false;
  }
  else if(IsEmail(contact_email)==false){
    Swal.fire(
        'Error!',
        'Please enter valid email.',
        'error'
      );
    $("#contact_email").focus();
    return false;
  }
 
  else if(contact_message == "")
  {
    Swal.fire(
        'Error!',
        'All fields required!',
        'error'
      );
    $("#contact_message").focus();
    return false;
  }
  else
  {
    $.ajax({
      url: "form/contact_aws.php",
      method:'post',
      data: {
        "type": "contact_us_client",
        "contact_name": contact_name,
        "contact_email": contact_email,
        "contact_subject": contact_subject,
        "contact_message": contact_message,
        },
      dataType: "json",
      beforeSend: function(){
        // Show image container
       //$("#loader-img").show();
      },
      success:function(response) {
        if(response.status == '1')
        {
          Swal.fire(
            'Success',
            response.message,
            'success'
          ).then((result) => {
            resetform();
        });
        }
        else
        {
           Swal.fire(
            'Error!',
            response.message,
            'error'
          );
        }
      },
      complete:function(data){
        // Hide image container
        //$("#loader-img").hide();
      }
    });
  }

  
  
});

function IsEmail(email) {
      var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      if(!regex.test(email)) {
        return false;
      }else{
        return true;
      }
    }

    /*function resetform()
    {
      $("#contact_name").val('');
      $("#contact_email").val('');
      $("#contact_phone").val('');
      $("#contact_company_name").val('');
      $("#contact_message").val('');
      $('#contact_services option').prop('selected', function() {
        return this.defaultSelected;
    });
      return true;
    }*/
  
</script>

