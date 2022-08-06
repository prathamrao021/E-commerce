<?php

    $pid = $_POST['pid'];
    $servername = 'localhost';
    $username  = 'root';
    $password = '';
    $dbname = 'awl';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if($conn ->connect_error)
    {
        die($conn ->connect_error);
    }

    $sql = "SELECT * from products WHERE pid = ".$pid;

    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>

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
    <title><?php echo $row['pname']?></title>

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
                            <img src="<?php echo $row['pic1']?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo $row['pic2']?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo $row['pic3']?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo $row['pic4']?>" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="<?php echo $row['pic5']?>" class="d-block w-100" alt="...">
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
                <h3><?php echo $row['pname']?></h3>
                <hr>
                <h5>#<?php echo $row['pseller']?></h5>
                <br>
                <h5>Price: &#8377;<?php echo $row['productprice']?></h5>
                <p><?php 
                    if($row['stock'])
                    {
                        echo "In Stock";
                    }
                    else{
                        echo "Out of Stock";
                    }
                ?></p>
                <br>
                <button type="button" class="btn btn-warning">Buy Now</button>
                <br><br>
                <h5>Description</h5>
                <hr>
                <ul>
                    <li><?php echo $row['desc1']?></li>
                    <li><?php echo $row['desc2']?></li>
                    <li><?php echo $row['desc3']?></li>
                    <li><?php echo $row['desc4']?></li>
                    <li><?php echo $row['desc5']?></li>
                </ul>
                <br>

            </div>
        </div>
        <div>
            <h5>Product Details</h5>
            <hr>
            <p>
            <ul>
                <li><b>Product Dimensions</b> ‏ : ‎ <?php echo $row['pdimension']?></li>
                <li><b>Date First Available</b> ‏ : ‎ <?php echo $row['releasedate']?></li>
                <li><b>Manufacturer</b> ‏ : ‎ <?php echo $row['manu']?></li>
                <li><b>ASIN </b>‏ : ‎ <?php echo $row['asin']?></li>
                <li><b>Item model number</b> ‏ : ‎ <?php echo $row['modelno']?></li>
                <li><b>Country of Origin</b> ‏ : ‎ <?php echo $row['countryorigin']?></li>
                <li><b>Department</b> ‏ : ‎ <?php echo $row['department']?></li>
                <li><b>Manufacturer</b> ‏ : ‎ <?php echo $row['manu1']?></li>
                <li><b>Packer</b> ‏ : ‎ <?php echo $row['packer']?></li>
                <li><b>Importer</b> ‏ : ‎ <?php echo $row['importer']?></li>
                <li><b>Item Weight</b> ‏ : ‎ <?php echo $row['weight']?></li>
                <li><b>Item Dimensions LxWxH</b> ‏ : ‎ <?php echo $row['pdimension1']?></li>
                <li><b>Net Quantity</b> ‏ : ‎ <?php echo $row['quantity']?></li>
                <li><b>Generic Name</b> ‏ : ‎ <?php echo $row['genename']?></li>
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