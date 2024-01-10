

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
      
    <!-- fonts style -->
    <link href="css/style.css" rel="stylesheet" />
   
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
        .reader{
            width: 500px;
           
        }
        body{
           
            background-size:cover;
            background-repeat:no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .scan{
            background:rgba(0,0,0,0.7);
            color:#000;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="logo">
           <img src="images/welcome1.png" alt="">
        </div>
        <div class="nav-link" >
            <ul id="myul" >
              
                <!-- <li class="cc" ><a href="admin.html">Scanner</a> -->
                 <ul>
                  <!-- <li><a href="">Personal ID</a></li> -->
                  <li><a href="map.html
                  ">Get Directions</a></li>
                  <li><a href="about.html">About Us</a></li>
                 </ul></li>
                 
                <a href="logout.php"> <button>LOG OUT</button></a>
            </ul>
        </div>
        <img class="menup" src="images/menu1.png" alt="sushi">
        </div>
          </div>
     
    </nav>
    <div id="you-qr-reader"></div>
    <div class="scan">
    <h1>Scanner</h1>
    <div style="display:flex;justify-content : center "></div>
        <div id="my-qr-reader" class="reader">

        </div>
    </div>
    </div>
    <script src="https://unpkg.com/html5-qrcode"></script>
    <script>
        function domReady(fn){
            if(document.readyState ==="complete"  || document.readyState ==="interactive"){
             setTimeout(fn,1)
            }
            else{
                document.addEventListener("DOMContentLoaded",fn)
            }
        }
        domReady(function(){
            var myqr= document.getElementById("you-qr-reader");
            var lastResult,countResults =0;
            function onScanSuccess(decodeText,decodeResult){
                if(decodeText !== lastResult ){
                    ++countResults;
                    lastResult =decodeText;
                    if(decodeText==='https://qrco.de/befqsw'){
                        alert(" You QR is a member" );   
                    }
                    else{
                    alert(" You QR is not a member");}
                    <!-- myqr.innerHTML= ` you scan ${countResults} :${decodeText}` -->
                }
            }
            var htmlscanner= new Html5QrcodeScanner(
                "my-qr-reader",{fps:10 ,qrbox:250})

                htmlscanner.render(onScanSuccess)
            
        })
    </script>
    <script>
      const menuHamburger = document.querySelector(".menup")
      const navLink = document.querySelector(".nav-link")
  
      menuHamburger.addEventListener('click',()=>{
      navLink.classList.toggle('menum');
      
      })
  
  </script>
</body>
</html>