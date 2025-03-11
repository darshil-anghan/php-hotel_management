<!DOCTYPE html>
<html lang="en">
<?php session_start(); ?>
<head>
    <link href="bootstrap.min.css" rel="stylesheet">
    <script type="module" src="https://unpk.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width , initial-scale = 1.0">
    <title>Crowny Hotel</title>
    <link rel="stylesheet" href="room/roomstyle.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-1.12.4.js" integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU=" crossorigin="anonymous"></script>



    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    
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
        
        
            </style>

</head>

<body>
    <header>
        <div class="content flex_space">
            <div class="logo" style="margin-bottom: 70px;">
                <!-- <img src="logo/7.png" alt="" style="height: 45px; margin-top: -10px; "> -->
<b style="font-size: 30px;">𝓓𝓢𝓗 𝓗𝓸𝓽𝓮𝓵</b>
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
    <br>
    <section class="book">
        <div class="Container flex_space">
            <div class="text">
                <h1><span>Book</span> Your rooms </h1>
            </div>
            <div class="form">
                <form class="grid">
                    <input type="date" placeholder="Araival Date">
                    <input type="date" placeholder="Departure Date">
                    <input type="number" placeholder="Adults">
                    <input type="number" placeholder="Children">                        
                    <button type="submit" value="btnsubmit" name="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>

        <!-- Room Start -->

        <div class="container-xxl py-5" style="background-color: rgba(70, 90, 202, 0.37);">
            <div class="container">
                <div class="row g-4">
                    <?php 
                    include_once "Conn.php";
                    $conn=connection();
                    $sql="select * from rooms";
                    $result=$conn->query($sql);
                    while($row=$result->fetch_assoc())
                    {
                                            ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="<?php echo $row['room_image']; ?>" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4"><?php echo $row['price']; ?>/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0"><?php echo $row['category'] ;?></h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $row['capacity'] ;?></small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $row['bath'] ;?></small>
                                    <?php if($row['wifi']=="yes")
                                    {
                                         ?>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <?php
                                    }
                                    if($row['ac']=="ac"){
                                    ?>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    <?php
                                    }
                                    ?>
                                </div>
                                   <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room1.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                    }?>

                    <!-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/21.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">6500/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    
                                </div>
                                 <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room2.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/25.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">7000/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Super Deluxe</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    
                                
                                </div>
                                 <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room3.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/lake-house.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">6000/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Super Deluxe</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    
                                    
                                </div>
                               <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room4.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/premium-room.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">6500/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room5.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/6.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">6500/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Junior Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                    <small class="border-end me-2 pe-3"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small><br>
                                    <small><img class="text-primary me-2"src="logo/air-conditioner.png" alt="" style="height: 20px; margin-top: 0px; "><i</i>A/c</small>
                                    
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room6.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/5.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">3500/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                 <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room7.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/11.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">4500/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room8.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="room-item shadow rounded overflow-hidden">
                            <div class="position-relative">
                                <img class="img-fluid" src="ig/10.jpg" alt="">
                                <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">4000/-RS/Night</small>
                            </div>
                            <div class="p-4 mt-2">
                                <div class="d-flex justify-content-between mb-3">
                                    <h5 class="mb-0">Executive Suite</h5>
                                    <div class="ps-2">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                </div>
                                <div class="d-flex mb-3">
                                   
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed</small>
                                    <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i>1 Bath</small>
                                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small> 
        
                                </div>
                                <p class="text-body mb-3"></p>
                                <div class="d-flex justify-content-between">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-4" href="room9.html">View Detail</a>
                                    <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                </div>
                            </div>
                        </div>
                    </div>-->
             
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
                    </div>
                    <div class="footer-col">
                        <h4>get help</h4>
                        <ul>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">RIDE</a></li>
                            <li><a href="#">returns</a></li>
                            <li><a href="#">status</a></li>
                            <li><a href="#">payment options</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>Book Us</h4>
                        <ul>
                            <li><a href="#">Anywhere</a></li>
                            <li><a href="#">Journany</a></li>
                            <li><a href="#">Safe</a></li>
                            <li><a href="#">Seure</a></li>
                        </ul>
                    </div>
                    <div class="footer-col">
                        <h4>follow us</h4>
                        <div class="social-links">
          
                          <a href="https://www.instagram.com/dsh_hotel/"><li><img src="room/icon/insta.png"  height="40" width="40"></li></a>
                           
                          <a href="Loginn.php"><li><img src="room/icon/facebook.png"  height="40" width="40"></li></a>
                            
                          <a href="Loginn.php"><li><img src="room/icon/twitter.png"  height="40" width="40"></li></a>
          
                          <a href="Loginn.php"><li><img src="room/icon/lk.png"  height="40" width="40"></li></a>
          
                        </div>
                    </div>
                    
                </div>
            </div>
          </footer>



    </body>
    </html>