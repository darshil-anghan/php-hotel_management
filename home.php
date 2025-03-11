<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php 

session_start();
if(!isset($_SESSION['Uname']))
{
    header("location:loginn.php");
        exit();
}
?>

<head>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale = 1.0">
    <title>Crowny Hotel</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-1.12.4.js"
        integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>
    <script src="c:\Users\sakshi davra\Desktop\Home Page\owl.carousel.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link sizes="HeightxWidth|any">
    <link rel="icon" href="logo/favicon.png" type="image/png">

<style>

    


.footer-section .single-footer-widget .widget-text p {
	font-size: 14px;
	line-height: 24px;
	letter-spacing: 0.5px;
	color: #ffffff;
	margin-left: 30px;
}

.footer-section .copyright-area {
	overflow: hidden;
	padding: 30px 0;
	border-top: 1px solid #ae9548;
}

.footer-section .copyright-area .copyright-text {
	float: left;
	font-size: 13px;
	font-family: "Open Sans", sans-serif;
	font-weight: 400;
	color: #ffffff;
	line-height: 24px;
}

.footer-section .copyright-area .copyright-text i {
	color: #000000;
}

.footer-section .copyright-area .copyright-text a {
	color: #ffffff;
	text-decoration: underline;
}

.footer-section .copyright-area .privacy-links {
	float: right;
	margin-right: 35px;
}

.footer-section .copyright-area .privacy-links a {
	display: inline-block;
	font-size: 12px;
	line-height: 14px;
	color: #ffffff;
	margin-right: 30px;
}


@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');


.container1 {
  max-width: 1170px;
  margin: auto;
}

.row {
  display: flex;
  flex-wrap: wrap;
}

ul {
    padding-left: 0px;
  list-style: none;
}

.footer {
  background-color: #24262b;
  padding: 70px 0;
}

.footer-col {
  width: 25%;
  padding: 0 0px;
}

.footer-col h4 {
  font-size: 18px;
  color: #ffffff;
  text-transform: capitalize;
  margin-bottom: 35px;
  font-weight: 500;
  position: relative;
}

.footer-col h4::before {
  content: '';
  position: absolute;
  left: 0;
  bottom: -10px;
  background-color: #e91e63;
  height: 2px;
  box-sizing: border-box;
  width: 50px;
}

.footer-col ul li:not(:last-child) {
  margin-bottom: 10px;
}

.footer-col ul li a {
  font-size: 16px;
  text-transform: capitalize;
  color: #ffffff;
  text-decoration: none;
  font-weight: 300;
  color: #bbbbbb;
  display: block;
  transition: all 0.3s ease;
}

.footer-col ul li a:hover {
  color: #ffffff;
  padding-left: 10px;
}

.footer-col .social-links a {
  display: inline-block;
  height: 40px;
  width: 40px;
  background-color: rgba(255, 255, 255, 0.2);
  margin: 3 20px 10px 0;
  text-align: center;

  border-radius: 50%;
  color: #ffffff;
  transition: all 0.5s ease;
}

.footer-col .social-links a:hover {
  color: #24262b;
  background-color: #000000;
}

.fab,
.far {
  font-weight: bold;
  margin-top: 10px;
}



.menu-icons {
  flex: 1;
  align-items: center;
  text-align: right;
}

.menu-icons img {
  width: 28px;
  margin-left: 40px;
  cursor: pointer;
}

.about {
          border-radius: 50%;
        }
        
/* tgt5tg5tg */
ul li .containerr {
  position: relative;
  width: 50%;
}

.menu-li{
    /* margin-top: 20px; */
}
.ul2{
    margin-top: 10px;
    margin-left: 5px;
}


.imagee {
  display: block;
  width: 45px;
  height: 50px;
  
	border-radius: 50%;
}

.overlayy {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 200%;
  opacity: 0;
  transition: .5s ease;
  background-color:#fffffff0;
border-radius: 50%;
}	

ul li .containerr:hover .overlayy {
  opacity: 1;
}

.textt {
  color: black;
  font-size: 12px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
  height: 100%;
  width: 100%;
}



/* /responsive/ */
@media(max-width: 767px) {
  .footer-col {
    width: 50%;
    margin-bottom: 40px;
  }
}

@media(max-width: 574px) {
  .footer-col {
    width: 100%;
  }
}

</style>


</head>

<body>
    <header>
        <div class="content flex_space">
            <div class="logo" style="margin-bottom: 75px;">
                <img src="logo/7.png" alt="" style="height: 40px; margin-top: -10px; ">

            </div>






            <div class="navlink" style="font-size: 18px;">

                <ul id="menulist" style="text-decoration: none;">
                        <li> <a href="room/room.php" style="text-decoration: none;"><i class="fa fa-fw fa-bed"></i>Room</a></li>
                        <li><a href="food/food.php" style="text-decoration: none;"><i class="fa fa-cutlery"></i>Food</a></li>
                         <li><a href="#footer" style="text-decoration: none;"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
                            <a class="btn btn-sm btn-dark rounded py-2 px-4" href="logout.php">Logout</a></li>
                </ul>
                <div class="ul2" style="float:right">
                <ul>
                    <li class="menu-li">   
                        <div class="containerr">
                            <img src="homeimage/home-img/user.png" alt="Avatar" class="imagee"  >
                            <div class="overlayy">
                            <div class="textt"><?php echo $_SESSION['Uname']; ?></div>

                        </div>
                    </li>
                </ul>
                </div>
                <span class="fa-fa-bars" onclick="menutoggle()"></span>

            </div>

        </div>

    </header>


    <script type="text/javascript">
        var menulist = document.getElementById('menulist');
        menulist.style.maxHeight = "0px";

        function menutoggle() {
            if (menulist.style, maxHeight == "8px") {
                menulist.style.maxheight = "100vh";
            }
            else {
                menulist.style.maxheight = "0px";
            }
        }
    </script>

    <section class="home">
        <div class="content">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="homeimage/home-img/50.jpg" alt="">
                    <div class="text" style="color:black;">
                    
                    
                    </div>

                </div>
                <div class="item">
                    <img src="homeimage/home-img/pool-cabanas.jpg" alt="">
                    <div class="text">

                    </div>
                </div>
                <div class="item">
                    <img src="homeimage/home-img/39.jpg" alt="">
                    <div class="text">


                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"
        integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            dots: false,
            navtext: ["<i class = 'fa fa-chevron-left'></i>", "<i class = 'fa fa-chevron-right'></i>"],
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })


    </script>

    <br>   
   
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s" style="background-color: #ffffff68;">
        <h6 class="section-title text-center text-primary text-uppercase">Our HOTEL</h6>
        <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">HOTEL</span></h1>
    </div>   <center><section>
     <video height="700" width="1200" autoplay muted>
                <source src="homeimage/home-img/Titanic_Mardan_Palace_Introductory_Video(1080p).mp4" type="video/mp4">
                Your browser does not support HTML video.
            </video>
    
    </section></center>
    <br><br>  
<div style="background-color: #9b96966a;">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title text-center text-primary text-uppercase">Our Rooms</h6>
                <h1 class="mb-5">Explore Our <span class="text-primary text-uppercase">Rooms</span></h1>
            </div>
        </div>
  

            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="homeimage/home-img/10.jpg" alt=""> </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Junior Suite</h5>
                               
                            </div>
                            <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room/room.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="homeimage/home-img/11.jpg" alt=""></div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Executive Suite</h5>
                                
                            </div>
                            <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room/room.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="room-item shadow rounded overflow-hidden">
                        <div class="position-relative">
                            <img class="img-fluid" src="homeimage/home-img/6.jpg" alt="">
                         </div>
                        <div class="p-4 mt-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h5 class="mb-0">Executive Suite</h5>
                                </div>
                            <p class="text-body mb-3">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                            <div class="d-flex justify-content-between">
                                <a class="btn btn-sm btn-dark rounded py-2 px-4" href="room/room.php">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="footer" id="footer">
        <div class="container1">
            <div class="row">
                <div class="footer-col">
                    <h4>company</h4>
                    <ul>
                        <li><a href="#">about us</a></li>
                        <li><a href="#">our services</a></li>
                        <li><a href="#">privacy policy</a></li>
                        <li><a href="#">affiliate program</a></li>
                    </ul>
                </center>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">returns</a></li>
                        <li><a href="#">status</a></li>
                        <li><a href="#">payment options</a></li>
                    </ul><br>
            </center>
                </div>
                <div class="footer-col">
                    <h4>Book Us</h4>
                    <ul>
                        <li><a href="#">Anywhere</a></li>
                        <li><a href="#">Journany</a></li>
                        <li><a href="#">Safe</a></li>
                        <li><a href="#">Seure</a></li>
                    </ul><br>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social-links">

    <a href="https://www.instagram.com/dsh_hotel/"><li><img src="homeimage/icon/insta.png"  height="40" width="40"></li></a>
 
    <a href="Loginn.php"><li><img src="homeimage/icon/facebook.png"  height="40" width="40"></li></a>
  
    <a href="Loginn.php"><li><img src="homeimage/icon/twitter.png"  height="40" width="40"></li></a>

    <a href="Loginn.php"><li><img src="homeimage/icon/lk.png"  height="40" width="40"></li></a> 

</div>
                </div>
                
            </div>
        </div>

    </footer>
    
</body>

</html>