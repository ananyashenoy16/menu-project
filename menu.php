

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="favicon-32x32.png"/>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Our Menu</title>
        <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"
            />
            <script src="https://kit.fontawesome.com/b7a08da434.js" crossorigin="anonymous"></script>
        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

        <!-- fonts style -->
        <link href="css/style.css" rel="stylesheet" />
        <link href="style1.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="css/responsive.css" rel="stylesheet" />
        <script src="oo.js" defer></script>
        <style>
            .active{
                background-color: #ff4b2b;
            }
        </style>
    </head>
    <body>
        <header>
        <nav class="navbar">
          <div class="logo">
             <img src="images/welcome1.png" alt="">
          </div>
          <div class="nav-link" >
              <ul id="myul" >
                  <li class="cc" ><a href="cancafe.php">HOME</a></li>
                  <li class="cc" ><a href="menu.php">MENU</a></li>
                  <li class="cc" ><a href="smem.html">MEMBERSHIP</a></li>
                  <li class="cc showab" ><a href="">ABOUT</a>
                   <ul class="showAbout">
                    <li><a href="map.html
                    ">Get Directions</a></li>
                    
                    <li><a href="about.html">About Us</a></li>
                   </ul></li>
                   
                  <a href="login.html"> <button>Join as MEMBER</button></a>
              </ul>
          </div>
          <img class="menup" src="images/menu1.png" alt="sushi">
          </div>
            </div>
       
      </nav>
        </header>
     
        <section class="price_section layout_padding">
          <center> <h1>Today's Special</h1></center>
        
            <div class="container">
                <section class="main_menu">
                <button class="menu_btn myfood" onclick="filterSelection('breakfast')">Breakfast</button>
                <button class="menu_btn" onclick="filterSelection('lunch')">Meals</button>
                <button class="menu_btn" onclick="filterSelection('snacks')">Snacks</button>
            </section>
            <div class="popup">
            <div class="popup-content">
                <h3>X</h3>
            <h2>Special Discount</h2>
            <h5>Monthly membership is just @4099.Join with us now and get 15% of for the next month!</h5>
         
          <button class="join"><a href="smem.html"style="color:#FFF">Buy membership</a> </button>
        </div>
        </div>
            <div class="heading_container">
            </div>
            <div class="price_container">
               
                        <!-- -------------- breakfast-------------------- -->
                        <div class="filterDiv breakfast">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Idli
                        </h6>
                    </div>
                    <div class="img-box">
                        <img src="https://cdn.pixabay.com/photo/2017/06/16/11/38/breakfast-2408818_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="buy(0)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                    <div class="filterDiv breakfast">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Pulav
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 200px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2016/03/05/22/29/asian-1239294_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="buy(1)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <div class="filterDiv breakfast">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Poori
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 240px;
          height: 130px;"
                            src="https://imgs.search.brave.com/GXvodfreH7759Dg2si9SltfQr13lJ1Li7hxvAg5eA88/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbmRp/YW5hbWJyb3NpYS5j/b20vd3AtY29udGVu/dC91cGxvYWRzLzIw/MTkvMDUvQWxvby1Q/dXJpLS5qcGc" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="buy(2)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                   
                    <div class="filterDiv breakfast">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Masala Dosa
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style=" width: 240px;
          height: 130px;" src="https://cdn.pixabay.com/photo/2016/10/25/13/42/indian-1768906_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>50.00</span>
                        </h5>
                        <a onclick="buy(3)" >
                            Buy
                        </a>
                    </div>
                </div></div>
                
                    <div class="filterDiv breakfast">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Golibaje
                        </h6>
                    </div>
                    <div class="img-box">
                        <img style="  width: 240px;
          height: 130px;"
                            src="images/golibaje.webp" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="buy(4)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <!-- ----------lunch------------ -->
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                            South Indian Meals
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2012/07/09/07/48/eat-52075_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="buy(5)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                            North Indian Meal Combo
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2017/09/09/12/09/india-2731812_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="buy(6)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Curd Rice
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://imgs.search.brave.com/nt1YhxrIayHdEiSLtDwdzBKu6ALGPhFvrE3BwhnJSTk/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jLm5k/dHZpbWcuY29tLzIw/MjMtMDIvZzg1NWE1/NG9fYmVldHJvb3Qt/Y3VyZC1yaWNlXzYy/NXgzMDBfMDRfRmVi/cnVhcnlfMjMuanBn/P2ltPUZhY2VDcm9w/LGFsZ29yaXRobT1k/bm4sd2lkdGg9NjIw/LGhlaWdodD0zNTA" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>50.00</span>
                        </h5>
                        <a onclick="buy(6)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Biryani
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2022/02/12/15/00/biryani-7009110_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>90.00</span>
                        </h5>
                        <a onclick="buy(7)">
                            Buy
                        </a>
                    </div></div>
                </div>  
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Fried Rice
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2022/06/27/05/37/biryani-7286737_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>60.00</span>
                        </h5>
                        <a onclick="buy(8)">
                            Buy
                        </a>
                    </div></div>
                </div> 
              
                <div class="filterDiv lunch">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Noodles
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2019/08/30/09/17/noodles-4440831_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>70.00</span>
                        </h5>
                        <a onclick="buy(9)">
                            Buy
                        </a>
                    </div></div>
                </div> 
              
                  <!-- ---------------snacks------------- -->
                <div class="filterDiv snacks">
                        <div class="box">
                    <div class="name">
                        <h6>
                          Panipuri
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2022/03/23/15/40/panipuri-7087439_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>30.00</span>
                        </h5>
                        <a onclick="buy(10)">
                            Buy
                        </a>
                    </div></div>
                </div> 
                <div class="filterDiv snacks">
                        <div class="box">
                    <div class="name">
                        <h6>
                            Samosa
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2023/10/09/04/19/samosa-8303211_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>20.00</span>
                        </h5>
                        <a onclick="buy(11)">
                            Buy
                        </a>
                    </div></div>
                </div>
                <div class="filterDiv snacks">
                        <div class="box">
                    <div class="name">
                        <h6>
                          sandwich
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                            src="https://cdn.pixabay.com/photo/2012/05/26/15/27/sandwich-49244_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="buy(12)">
                            Buy
                        </a>
                    </div></div>
                </div>
                    <div class="filterDiv snacks">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Burger
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                         src="https://cdn.pixabay.com/photo/2016/03/05/19/02/abstract-1238247_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>50.00</span>
                        </h5>
                        <a onclick="buy(13)">
                            Buy
                        </a>
                    </div>
                    </div>
                </div> 
                <div class="filterDiv snacks">
                        <div class="box">
                    <div class="name">
                        <h6>
                           Pasta
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style=" width: 240px;
          height: 130px;"
                        src="https://cdn.pixabay.com/photo/2016/08/28/10/49/takeaway-1625652_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>40.00</span>
                        </h5>
                        <a onclick="buy(14)">
                            Buy
                        </a>
                    </div>
                    </div>
                </div> 
                    <div class="filterDiv snacks"><div class="box">
                    <div class="name">
                        <h6>
                           French Fries
                        </h6>
                    </div>
                    <div class="img-box">
                    <img style="  width: 240px;
          height: 130px;"
                        src="https://cdn.pixabay.com/photo/2018/06/25/16/57/potato-3497393_1280.jpg" alt="">
                    </div>
                    <div class="detail-box">
                        <h5>
                            <span>50.00</span>
                        </h5>
                        <a onclick="buy(15)">
                            Buy
                        </a>
                    </div>
                </div>
                </div>
            
            </div>
            
        </div>
        </section>
        <section class="main_menu">
            <img class="imga" src="https://cdn.pixabay.com/photo/2023/07/12/20/40/ai-generated-8123328_1280.png" alt="">
            <div class="khlass">
                <div class="inpo">
        
            
                        <p>Your Bill</p>
                      </div>
                    <input style="width:100% ;" id="bill" type="text"  class="billu"  value="ORDER:">
                    <input style="width:100% ;" id="bil" type="text" class="billu" value="PRICE:">
                    <input  style="width:100% ;" id="total" type="text" class="billu" value="TOTAL:">
                    <button class="confi" onclick="Total()">calculate</button>
                    <a href="https://rzp.io/l/uCHmkBxJ"><button class="confi">Checkout</button></a>
                </div>
            </div>
        </section>
     
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
                                            Address
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info_contact">
                                    <a href="">
                                        <img src="images/phone.png" alt="">
                                        <span>
                                            +91 7760803967
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="info_contact">
                                    <a href="">
                                        <img src="images/mail.png" alt="">
                                        <span>
                                            cancafe@gmail.com
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
                            <form action="https://formspree.io/f/moqgvdzy" method="POST">
                                <div class="email_box">
                  <label for="feedback">EMAIL</label>
                    <input type="email" id="email2" name="mail" required>
                    <label for="feedback">ENTER YOUR FEEDBACK HERE</label>
                    <input type="text" id="email2" name="feedback"required>
                  </div>
                                <div>
                                    <button  style="border:2px solid #fff;">
                                        Submit
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
        navLink.classList.toggle('menum')
        })
      
        // Update the filterSelection function to handle button clicks and change color

        // ... Your existing JavaScript code

document.addEventListener('DOMContentLoaded', function () {
    const popup = document.querySelector('.popup');
    const closeButton = document.querySelector('.popup h3');

    // Show the popup when the page loads
    popup.classList.add('showPopup');

    // Add an event listener to hide the popup when clicking the close button
    closeButton.addEventListener('click', function () {
        popup.classList.remove('showPopup');
    });
});



    </script>
    </script>
</html>