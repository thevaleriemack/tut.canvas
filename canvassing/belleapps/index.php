<!DOCTYPE html>
<!-- jQuery for navigation bar modified from: http://jsfiddle.net/tcloninger/e5qaD/ -->
<html>
  <head>
    <meta charset="utf-8" />
    <title>BelleApps</title>
    <meta name="description" content="BelleApps: ">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="css/style1.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/nav.js"></script>
    <script src="js/canvas807.js"></script>
    <script src="js/icons.js"></script>
  </head>
  <body style="background-color:black" >
    <!-- Smooth Scrolling: http://css-tricks.com/snippets/jquery/smooth-scrolling/ -->
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 700);
              return false;
            }
          }
        });
      });
    </script>

    <script>
      $(document).ready(function(){
        $("#menu_icon").click(function(){
          $(".link").slideToggle(200);
        });
        document.getElementById("menu_icon").innerHTML = '<img src="images/menu.png">';
      });


  </script>
  


    <?php include ("nav.html");?>
    <div class="fixed">
      <div class="header_image">
        <div id="app_button">
          <a href="#"><img src="images/app_store_big.png" alt="App Store"></a>
          <a href="#"><img src="images/android_big.png" alt="Android Store" width="190"></a>
        </div>
        <div class="blurb">
          <p>Peer-to-peer delivery<br> for everyday shoppers.</p>
        </div>
        
      </div>

    </div>

    

    <div class="cover">

      <div class="section" id="value"> 
        <div class="wrap">        
        <div class="container">
            <div class="column-left"><b><h1 style="font-size: 22px" class="black">SHOPPING LIST GUARANTEED</h1></b> Our deliverers are required to get you every item in order to make money. Pick the exact brand or go for the cheapest option. Compare delivery requests based on location and store. Be in touch with your deliverer for special request via the in-app text. </div>
            <div class="column-center"><b><h1 style="font-size: 22px" class="black"><br>NO EXTRA FEES</h1></b> No membership fees or price markup on your purchases. <br />You only pay a small delivery fee from $3 - $10 relative to order size. Save on gas and reduce your environmental impact by cutting down on the number of cars on the road.</div>
            <div class="column-right"><b><h1 style="font-size: 22px" class="black"><br>MAKE CASH</h1></b>As a deliverer, you make extra cash for helping out a friend or neighbor. Get paid for your normal routine as you go to your local grocery store or favorite take out restaurant. Option to donate the delivery fee to your favorite charity.</div>
            </div>
          
            <br><br><br><br><br>
          
    
          </div>
        <div class="howthisworks">
          <br><br> 
          <h1 style="font-size: 60px" class="white">How it works</h1>
          <h1 style="color:white;font-size: 30px;">&#9660;</h1>
          </div>
      </div>

      

      
      <div class="section y" id="diagram">
        <br><br>
      <canvas id="map" >
      </canvas>
        
        <div class="wrap ab">
          <div class="icon_wrap">
            
            <div class="icon_image" id="studying"><img src="icons/icon_studying.png" alt="studying"></div>
            <div class="icon_image" id="shopping"><img src="icons/icon_shopping.png" alt="shopping"></div>
            <div class="faders" id="faded"><h2 style="font-size: 64px;">Belle</h2></div>
            <div class="icon_image" id="list"><img src="icons/icon_list.png" alt="list"></div>
            <div class="icon_image" id="earn"><img src="icons/icon_earn.png" alt="earn"></div>
            <div class="icon_image" id="food"><img src="icons/icon_food.png" alt="food" width="240" height="240"></div>
            <div class="icon_image" id="miles"><img src="icons/icon_miles.png" alt="miles"></div>
            <div class="icon_image" id="money"><img src="icons/icon_money.png" alt="money" width="240" height="240"></div>
            <div class="icon_image" id="receipt"><img src="icons/icon_receipt.png" alt="receipt" width="160" height="160"></div>
            <div class="icon_image" id="route"><img src="icons/icon_route.png" alt="route"></div>
            <div class="icon_image" id="circle"><img src="icons/icon_circle.png" alt="circle" width="160" height="160"></div>
            <div class="icon_image" id="confirm"><h2 style="color:#0a192c; font-size: 30px;">Confirm <br />the bill</h2></div>
            <div class="icon_image" id="logo"><img src="icons/logo.png" alt="Belle Apps Logo" width="400" height="400"></div>
            </div>
        </div>

      </div>

      <!-- This part is hidden on desktop and shown on 700px width -->
      <div class="mobile_wrap">
         <div class="section y" id="mobile_diagram">

          <h1 class="white">How it works</h1>
            
            <div class="order">
              <img src="images/icon-w_studying.png">
              <div class="label o">You're hungry</div>
            </div>

            <div class="shopper">
              <img src="images/icon-w_shopping.png">
              <div class="label b">You're out shopping</div>
            </div>

            <div class="clear"></div>

            <div class="order">
              <img src="images/icon-w_list.png">
              <div class="label o">Place a request</div>
            </div>

            <div class="shopper">
              <img src="images/icon-w_earn.png">
            <div class="label b">Find a request</div>
              
            </div>

            <div class="clear"></div>


            <div class="order">
              <img src="images/icon-w_miles.png">
              <div class="label o">See your deliverer</div>
            </div>

            <div class="shopper">
              <img src="images/icon-w_route.png">
              <div class="label b">Accept delivery</div>
            </div>

            <div class="clear"></div>

            
            <div class="shopper">
            <img src="images/icon-w_receipt.png">
            <div class="circle">Confirm your bill</div>
            </div><br>
            
            
            <div class="order">
              <img src="images/icon-w_food.png">
              <div class="label o">You're happy</div>
            </div>

            <div class="shopper">
              <img src="images/icon-w_money.png">
              <div class="label b">You're happy</div>
            </div>

            <div class="clear"></div>
          </div>
        </div>

      <span id="about_anchor"></span>
      <div class="section" id="about">
        <div class="wrap">
          <div class="col">
            <h1>About Us</h1>
            
            <p><strong>Belle Apps</strong> is a peer-to-peer food delivery service where app users can customize their orders and receive deliveries to their dorm rooms. Using our automated matching algorithm based on user preferences - location, time of delivery, size of order - users requesting an order (‰??requesters‰??) will be matched with app users who are already en route to a store or who are currently shopping there (‰??deliverers‰??). With the automated pairing system, both the user requesting the order and user purchasing the order can make the most out of their time.</p>
            <br>

            <b>Co-Founders: </b>

            <br> <br> 
            <b> Aditya Agashe </b> <br>
            Student at Cornell College of Engineering, Class of 2017
            <br>
            <br>
            <b>Michelle Jang</b>
            <br>
            Student at Cornell College of Industrial and Labor Relations, Class of 2017
            <br>
            <br>
          </div>
          <div class="col">
            <h1>Donate To...</h1>
            As a deliverer, you may choose to donate the service fee to one of the following organizations.
            <br><br>
            <a href="http://www.crcfl.net/">
  <img src="images/cancer_resource_center.png" alt="crc" class="image">
</a>

<a href="http://www.cayugamed.org/">
<img src="images/cayuga_med_center.png" alt="cmc" class="image">
</a> 

<a href="http://tcpl.org/">
<img src="images/library.png" alt="library" class="image">
</a> 

<a href="http://www.plannedparenthood.org/">
<img src="images/planned_parenthood.png" alt="planned_parenthood" class="image">
</a> 

<a href="http://www.spcaonline.com/">
<img src="images/spca.png" alt="spca" class="image">
</a> 

<a href="http://www.stjude.org/stjude/v/index.jsp?vgnextoid=7b22b46b476a7410VgnVCM100000290115acRCRD">
<img src="images/st_jude.png" alt="Saint Jude's Children Hospital" class="image">
</a> 

          </div>
        </div>
      </div>

      <?php

      $email_to = "ava9@cornell.edu";
      $email_subject = "BelleApps Inquiry";

      $name = "";
      $email = "";
      $message = "";
      $header_message = "";
      $tel = "";

      $name_error = "";
      $email_error = "";
      $message_error = "";
      $tel_error = "";

      if (isset($_POST['submit']))
      {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);
        $tel = htmlspecialchars($_POST['tel']);


        if (empty($name)){
          $name_error = "<div class='error'>Please enter your name.</div>";
        }
        else if(preg_match("/^[a-zA-Z .'-]+$/", $name) == False)
        {
          $name_error = "<div class='error'>Please enter a valid name.</div>";
        }

        #$emailmatch = "/[A-z0-9]+@[A-z]+\.[A-z]$/";
        # || !preg_match($emailmatch, $email)
        
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
          $email_error = "<div class='error'>Please enter a valid email address.</div>";
        }
            
        if (empty($tel) || !(ctype_digit ($tel)) || !(strlen($tel) == 10)){
            $tel_error = "<div class='error'>Please enter a valid ten-digit telephone number.</div>";
            }
        
        if (empty($message)){
          $message_error = "<div class='error'>Please enter a message.</div>";
        }
        
        if (isset($message) && (strlen($message) > 400)){
          $message_error ="<div class='error'>Message is over maximum length.</div>";
        }
        
        if (isset($message) && (strlen($message) < 10)){
          $message_error ="<div class='error'>Message is too short to submit.</div>";
        }

         
        if (empty($name_error) && empty($email_error) && empty($message_error) && empty($tel_error))
        {
          $email_message = $name . " has sent the following message: \r\n" . $message;
          mail($email_to,$email_subject,$email_message);
          $header_message = "<div class='error'> Thank you for contacting us. We will be in touch with your very soon. </div> <br>"; 
          $name = '';
          $email = '';
          $message = '';
          $tel = '';
        }
      
      else
      {
        
      }
  }


      ?>

      <span id="contact_anchor"></span>
      <div class="section" id="contact">

        <div class="wrap">
          
          <footer class="index_footer">
            <h3>Contact Us</h3>
            <p>Aditya Agashe</p>
            <p>(518) 894-9898</p>
            <p><a href="mailto:info@belleapps.me">ava9@cornell.edu</a></p>
            <br>
            <p>&copy;2014 Belle Applications</p>
            
            <div class="social">
              <a href=""><img src="images/facebook.png" width="35" alt="fb"></a>
              <a href=""><img src="images/twitter.png" width="35" alt="twitter"></a>
            </div>
            <div class="footer_links">
              <a href="index.php#about_anchor">About Us</a> | 
              <a href="faq.php">FAQ</a> |
              <a href="jobs.php">Jobs</a>
            </div>
          </footer>

          
          <form class="form" action="index.php#contact" method="POST">
            <?php echo $header_message ?>
            
            <input name="name" id="name" type="text" required placeholder="Name" value="<?php echo $name ?>"><?php echo $name_error ?><br>
            
            <input name="email" id="email" type="email" required placeholder="Email" value="<?php echo $email ?>"><?php echo $email_error ?><br>
            
            <input name="tel" id="tel" placeholder="Telephone" required value="<?php echo $tel ?>" ><?php echo $tel_error?><br>
            
            <textarea name="message" id="message" required placeholder="Message"><?php echo $message ?></textarea>
            
            <?php echo $message_error ?><br>
            <button class="submit" name="submit" type="submit" value="submit">Send</button>
          </form>
        </div>
      </div>
    </div>

    
<script src="canvas807.js"></script>
<script src="icons.js"></script>

  </body>
</html>