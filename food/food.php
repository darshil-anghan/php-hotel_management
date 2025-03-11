<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Touché</title>
<meta name="description" content="">
<meta name="author" content="">
<?php 

$conn=new mysqli("localhost","root","","projectdemo");


?>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="bootstrap.min.css" type="text/css">

<!-- Stylesheet
    ========================================sty========== -->
<link rel="stylesheet" type="text/css"  href="css/foodstyle.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->



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
        list-style: none;
        padding-left: 0px;

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

/* food table css */

table {
font-size:15px;
  width: 1250px;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
            width:48%;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }


      
          </style>




</head>
<body>
  
  <header>
    <div class="content flex_space">
        <div class="logo" style="margin-bottom: 75px;">
            <!-- <img src="logo/7.png" alt="" style="height: 60px; margin-top: -10px; "> -->
              <b style="font-size: 30px;">𝓓𝓢𝓗 𝓗𝓸𝓽𝓮𝓵</b>
        </div>

        <div class="navlink" style="font-size: 18px;">

            <ul id="menulist" style="text-decoration: none;">
            <li><a href="../home.php" style="text-decoration: none;"><i class="fa fa-fw fa-home"></i>Home</a></li>
            <li> <a href="../room/room.php" style="text-decoration: none;"><i class="fa fa-fw fa-bed"></i>Room</a></li>
            <li><a href="#footer" style="text-decoration: none;"><i class="fa fa-fw fa-envelope"></i>Contact</a></li>
                           
            <a class="btn btn-sm btn-dark rounded py-2 px-4" style="font-size:15px;" href="../logout.php">Logout</a>
                             
                        
                          
                   
                
            </ul>
            <div class="ul2" style="float:right">
                <ul>
                    <li class="menu-li">   
                        <div class="containerr">
                            <img src="img/user.png" alt="Avatar" class="imagee"  >
                            <div class="overlayy">
               
               
                            <div class="textt"> <div class="textt"><?php echo $_SESSION['Uname']; ?></div>
    </div>
    
                        </div>
                    </li>
                </ul>
                </div>
              
            <span class="fa-fa-bars" onclick="menutoggle()"></span>

        </div>

    </div>

</header>

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>Welcome to DSh Restaurant</h1>
            <p></p>
            <a href="#special" class="btn btn-custom btn-lg page-scroll">Special menu-item</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/30.jpg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Our Restaurant</h2>
          <hr>
          <p>wkdnkwf wjebfwef ddvief weenfinwef efiwe fnv wefwiwg wrvi</p>
          <h3>Awarded Chefs</h3>
          <p>jsjbwsj fibr rbrivber jrbgbe virfgv  brgirfg ggirefbgivr rfgiv</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->

<center><h1>Item Table</h1>


<table>
        <tr>
          
            <th>Category</th>
            <th>Item</th>
            <th>Price</th>
          </tr>
          <?php 
          $sql="select * from food";
          $result=mysqli_query($conn,$sql);
          while ($rows = mysqli_fetch_assoc( $result )) 
          { ?>
          
          <tr>
            <td><?php echo $rows['Category']; ?></td>
            <td><?php echo $rows['fname']; ?></td>
            <td>₹<?php echo $rows['price']; ?></td>
        </tr>
        <?php 
          }
        ?>
    </table>
    <?php
        // if ($result->num_rows > 0) {
        //     while ($row = $result->fetch_assoc()) {
        //         echo "<tr>";
               
        //         echo "<td>" . $row["category"] . "</td>";
        //         echo "<td>" . $row["item"] . "</td>";
        //         echo "<td>" . $row["price"] . "</td>";
        //         echo "</tr>";
        //     }
        // } else {
        //     echo "No products found.";
        // }
        // $conn->close();
        ?>
    </center>

<!-- end -->
 <div class="container">
    <div class="row">
      <div class="categories">
        </div>
    </div>
    <center><div>
      <h1>Special Items</h1>
    </div></center>
<div class="special" id="special">
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/cb.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Chole Bhature</h4>
              </div>
              <img src="img/portfolio/cb.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/pk.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Paneer Tika</h4>
              </div>
              <img src="img/portfolio/pk.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/ds.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dosa</h4>
              </div>
              <img src="img/portfolio/ds.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/guj.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Full Dish</h4>
              </div>
              <img src="img/portfolio/guj.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/gap.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Appam</h4>
              </div>
              <img src="img/portfolio/gap.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/bk.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Breakfast Combo</h4>
              </div>
              <img src="img/portfolio/bk.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/samosas.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Samosa</h4>
              </div>
              <img src="img/portfolio/samosas.jpg" class="img-responsive" alt="Project Title" > </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/patudi.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Patudi</h4>
              </div>
              <img src="img/portfolio/patudi.jpg" class="img-responsive" alt="Project Title" width="350"> </a> </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Pizaa</h4>
              </div>
              <img src="img/portfolio/09-large.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
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

                <a href="https://www.instagram.com/dsh_hotel/"><li><img src="icon/insta.png"  height="40" width="40"></li></a>
                 
                <a href="Loginn.php"><li><img src="icon/facebook.png"  height="40" width="40"></li></a>
                  
                <a href="Loginn.php"><li><img src="icon/twitter.png"  height="40" width="40"></li></a>

                <a href="Loginn.php"><li><img src="icon/lk.png"  height="40" width="40"></li></a>

              </div>
          </div>
          
      </div>
  </div>
</footer>


<!-- Call Reservation Section -->
<!-- Contact Section -->
</div>
</body>
</html>
