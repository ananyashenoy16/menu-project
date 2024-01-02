<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.html');
}

 ?>  
   
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Can Cafe</title>
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
     <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
       
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
</head>
<body>
      
       
      <header>
        
        <div class="bg-img">
          <img src="https://cdn.pixabay.com/photo/2022/05/17/05/03/vegetable-gravy-7201669_1280.jpg"  class="we" alt="">
        </div>
        <nav class="navbar">
          <div class="logo">
              <a href="#"><img src="images/welcome1.png" alt="sushi"></a>
          </div>
          <div class="nav-link" >
              <ul id="myul" >
                  <li class="cc" ><a href="cancafe.php">HOME</a></li>
                  <li class="cc" ><a href="menu.php">MENU</a></li>
                  <li class="cc" ><a href="smem.html">MEMBERSHIP</a></li>
                  <li class="cc" ><a href="about.html">ABOUT</a></li>
                  <a href="logout.php"> <button>LOG OUT</button></a>
              </ul>
          </div>
          <img class="menup" src="images/Capturejk.PNG" alt="sushi">
          </div>
            </div>
       
      </nav>
    
    <div class="text-box">
          <h1>CAN</h1>
          <h1>CAFE</h1>
    </div>

  </header>
 
      <div class="newbg">
      <section class="about_section layout_padding2-top layout_padding-bottom ">
      <center>
        <div >
            <h3 style=" font-size:40px ;color:#000;">
                 THERE'S NO ONE TO STOP WHEN YOU ARE HUNGRY <img src="https://www.svgrepo.com/show/490738/food-restaurant.svg" style="height:50px;width:50px;" alt="">
                
            </h3>
          </div>
        </center>
          <div class="container">
            <div class="row">
             
              <div class="col-md-6">
                <div class="img-box">
                  <!-- <iframe width="455" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" id="gmap_canvas" src="https://maps.google.com/maps?width=455&amp;height=350&amp;hl=en&amp;q=CANARA%20ENGINEERING%20COLLEGE%20Mangalore+(can%20cafe%20)&amp;t=&amp;z=12&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> <a href='https://www.easybooking.eu/'>Hotelprogramm</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=535c112d38594a87e317750d2cdabfb09eebe543'></script> -->
                  <img style="border-radius: 10px; width:455px;height:350px" src="https://cdn.pixabay.com/photo/2023/07/12/20/40/ai-generated-8123329_1280.png"  alt="">
                </div>
              </div>
               <div class="col-md-6">
                <div class="detail-box">
                 <div class="box1">
                  <h5 style="  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;;font-size:2rem;font-weight:550;">
                  Welcome to Can Cafe🍽️<br> Here every cup tells a story. Nestled in the heart of MANGALORE❤️, our charming cafe invites you to embark on a journey of flavors😋 and relaxation. 
                  </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>      
       
        <section class="price_section layout_padding">
          <CENter>
            <h3 style="color:#000 ; font-size:40px;">
              WE ARE FAMOUS FROM  AGES FOR <img src="https://www.svgrepo.com/show/490737/food-dish.svg"  style="height:70px;width:70px;">
          </h3>
          </CENter>
          <div class="container">
            <div class="heading_container">
            </div>
            <div class="price_container">
             
              <div class="box1">
                
                <div class="img-box">
                  <img style="border-radius: 100%;" src="images/golibaje.webp" alt="">
                </div>
                <hr> 
                <div class="detail-box">
                   <h6>
                          GOLI BAJE
                   </h6>
               
                 
                </div>
              </div>    
              <div class="box1">
                
                  <div class="img-box">
                    <img style="border-radius: 100%;" src="images/dose.webp" alt="">
                  </div>
                  <hr>
                  <div class="detail-box">
            
                     <h6>
                            MASALA DOSA
                     </h6>
                 
                   
                  </div>
                </div>    
                <div class="box1">
                
                  <div class="img-box">
                    <img style="border-radius: 100%;" src="images/naan.webp" alt="">
                  </div>
                  
                  <div class="detail-box">
            
                     <h6>
                            BUTTER NAAN COMBO
                     </h6>
                 
                   
                  </div>
                </div>     
          </div>
        </section>  
      </div>         
      <footer>
        <section class="info_section ">
          <div class="container">
            <div class="info_container">
              <div class="row">
              
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/location.png" alt="">
                      <span>
                        MANGLORE
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/phone.png" alt="">
                      <span>
                        +91 935384110
                      </span>
                    </a>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="info_contact">
                    <a href="">
                      <img src="images/mail.png" alt="">
                      <span>
                        Cancafe@gmail.com
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="info_form">
                <div class="d-flex justify-content-center">
                  <h5 class="info_heading">
                    FEEDBACK
                  </h5>
                </div>
                <form action="">
                  <div class="email_box">
                    <label for="email2">ENTER YOUR FEEDBACK HERE</label>
                    <input type="text" id="email2" required>
                  </div>
                  <div>
                    <button style="border:2px solid #fff;">
                      SUBMIT
                    </button>
                  </div>
              
                 
                </form>
              </div>
              <div class="info_social">
                <div class="d-flex justify-content-center">
                  <h5 class="info_heading">
                    Follow Us
                  </h5>
                </div>
                <div class="social_box">
                  <!-- <a href="">
                    <img src="images/fb.png" alt="">
                  </a> -->
                  <a href="">
                    <img src="images/twitter.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/linkedin.png" alt="">
                  </a>
                  <a href="">
                    <img src="images/insta.png" alt="">
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
      
        <!-- end info_section -->
      
        <!-- footer section -->
        <section class="container-fluid footer_section">
          <p>
            &copy; <span id="displayYear"></span> All Rights Reserved
          </p>
        </section>
        </footer>
        

    
</body>
<script>
      const menuHamburger = document.querySelector(".menup")
      const navLink = document.querySelector(".nav-link")
  
      menuHamburger.addEventListener('click',()=>{
      navLink.classList.toggle('menum');
      
      })
  
  </script>
</html>