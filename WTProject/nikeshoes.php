<?php  include 'redirect.php';  ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Nike Shoes</title>

    <style>
        .slide {
            border: 2px solid #212529;
            border-radius: 15px;
            overflow: hidden;
        }

        .carousel-item img {
            height: 50vh;
            object-fit: contain;
        }

        .carousel-control-prev:hover {
            background-color: black;
        }

        .carousel-control-next:hover {
            background-color: black;
        }
        .nav-link{
        color: white;
      }
      .nav-link:hover{
        text-shadow: 2px 2px 5px white;
        color: white;
      }
      .icon{
        color: white;
        margin-right: 20px;
        margin-bottom: 20px;
      }
      .icon:hover{
        text-shadow: 2px 2px 5px white;
        color: white;
      }
      .btn1 {
        width: 100%;
        color: white;
        text-decoration: none;
        font-weight: 700;
        font-size: 18px;
      }
      .btn1:hover a{
        text-shadow: 2px 2px 5px lightgrey;
      }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <!-- Carousel -->
                <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="5000">
                            <img src="./nike1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./nike2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./nike3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./nike4.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./nike5.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-1">

            </div>
            <div class="col-md-5">
                <h3>Nike Shoes(Black)</h3>
                <hr>
                <h5>#Nike Seller</h5>
                <br>
                <h5>Price: &#8377;2,800</h5>
                <p>In Stock</p>
                <br>
                <button type="button" class="btn btn-warning">Buy Now</button>
                <br><br>
                <h5>Description</h5>
                <hr>
                <ul>
                    <li>Closure: Lace-Up</li>
                    <li>Shoe Width: Medium</li>
                    <li>NSW RUNNING</li>
                    <li>WMNS NIKE WEARALLDAY</li>
                    <li>WHITE/BLACK</li>
                    <li>CJ1677-100</li>
                </ul>
                <br>

            </div>
        </div>
        <div>
            <h5>Product Details</h5>
            <hr>
            <p>
            <ul>
                <li><b>Product Dimensions</b> ‏ : ‎ 33 x 23 x 11 cm; 750 Grams</li>
                <li><b>Date First Available</b> ‏ : ‎ 8 August 2021</li>
                <li><b>Manufacturer</b> ‏ : ‎ .NIKE INDIA PVT LTD.</li>
                <li><b>ASIN </b>‏ : ‎ B0838KFS34</li>
                <li><b>Item model number</b> ‏ : ‎ CJ1677-100</li>
                <li><b>Country of Origin</b> ‏ : ‎ Vietnam</li>
                <li><b>Department</b> ‏ : ‎ Womens</li>
                <li><b>Manufacturer</b> ‏ : ‎ .NIKE INDIA PVT LTD., NIKE INDIA PVT LTD,GROUND & 1ST FLOOR OLYMPIA BUILDING,NO 66/1 BAGMANE TECH PARK,CV RAMAN NAGAR BANGALORE-560093 INDIA</li>
                <li><b>Packer</b> ‏ : ‎ NIKE INDIA PVT LTD,GROUND & 1ST FLOOR OLYMPIA BUILDING,NO 66/1 BAGMANE TECH PARK,CV RAMAN NAGAR BANGALORE-560093 INDIA</li>
                <li><b>Importer</b> ‏ : ‎ NIKE INDIA PVT LTD,GROUND & 1ST FLOOR OLYMPIA BUILDING,NO 66/1 BAGMANE TECH PARK,CV RAMAN NAGAR BANGALORE-560093 INDIA</li>
                <li><b>Item Weight</b> ‏ : ‎ 750 g</li>
                <li><b>Item Dimensions LxWxH</b> ‏ : ‎ 33 x 23 x 11 Centimeters</li>
                <li><b>Net Quantity</b> ‏ : ‎ 1 Set</li>
                <li><b>Generic Name</b> ‏ : ‎ LOW TOP</li>
                <li><b>Best Sellers Rank</b>: #30,262 in Shoes & Handbags (See Top 100 in Shoes & Handbags)</li>
            </ul>
            </p>
        </div>
        
    </div>
    <br><br>
    <footer style="height: 170px; background-color: #212529;color: white; margin-top: -6px;position: static;">
      <div class="container" style="vertical-align:middle;">
        
        <div class="row">
          <div class="col-md-4 col-sm-4">
            <a class="nav-link" href="./home.php" target="content">Home</a>
            <a class="nav-link" href="./Aboutus.php" target="content">About Us</a>
            <a class="nav-link" href="./Login.php" target="content">Logout</a>
          </div>
          <div class="col-md-6 col-sm-4">
            
          </div>
          <div class="col-md-2 col-sm-4 contact">
            <p>Contact us:</p>
            <a class="icon btn1" style="font-size:24px" href="#"><i class="fa fa-instagram"></i></a>
            <a class="icon btn1" style="font-size:24px" href="#"><i class="fa fa-facebook"></i></a>
            <a class="icon btn1" style="font-size:24px" href="#"><i class="fa fa-twitter"></i></a>
            <br>
            Email: xyz@gmail.com
          </div>
        </div>

      </div>
      <div></div>
    </footer>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

</body>

</html>