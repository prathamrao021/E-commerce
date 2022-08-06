<?php include 'redirect.php';  ?>
<?php


$servername = 'localhost';
$username  = 'root';
$password = '';
$dbname = 'awl';

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die($conn->connect_error);
}

$sql = "SELECT * from products";

$result = $conn->query($sql);
// $row = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>AWL</title>
  <style>
    body::-webkit-scrollbar {
      display: none;
    }

    .carousel-item img {
      height: 600px;
      object-fit: cover;
    }

    .card {
      /* background-color: rgb(33,37,41); */
      color: white;
      width: 100%;
      margin-bottom: 20px;
    }

    .btn1 {
      width: 100%;
      color: white;
      text-decoration: none;
      font-weight: 700;
      font-size: 18px;
    }

    .card-title {
      font-size: 18px;
    }

    .btn2:hover {
      text-shadow: 2px 2px 5px lightgrey;
      /* font-size: ; */
    }

    .btn2:hover a {
      text-shadow: 2px 2px 5px lightgrey;
    }

    .btn1:hover a {
      text-shadow: 2px 2px 5px lightgrey;
    }

    .more {
      float: right;
    }

    .more:hover {
      box-shadow: 2px 2px 2px grey;
    }

    .nav-link {
      color: white;
    }

    .nav-link:hover {
      text-shadow: 2px 2px 5px white;
      color: white;
    }

    .icon {
      color: white;
      margin-right: 20px;
      margin-bottom: 20px;
    }

    .icon:hover {
      text-shadow: 2px 2px 5px white;
      color: white;
    }

    @media only screen and (max-width: 992px) {
      .proname {
        font-size: 12px;
      }
    }

    @media only screen and (max-width: 575px) {
      .proname {
        font-size: 18px;
      }
    }
  </style>
</head>

<body>
  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img src="https://images.unsplash.com/photo-1502982720700-bfff97f2ecac?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img src="https://images.unsplash.com/photo-1601836242545-7be3c010c141?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" class="d-block w-100" alt="...">
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

  <div class="container">
    <!-- Today's Top Deal -->
    <br />
    <h4>Today's Top Deal</h4>
    <hr />
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <a class="btn1" href="./rayban.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1621331122533-465bdcfa6e01?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title">RayBan Sunglasses</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="#" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a class="btn1" href="./nikeshoes.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1460353581641-37baddab0fa2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title">Nike Shoes(Black)</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="#" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a class="btn1" href="./cosmetics.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1187&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title">Foundation Pallate</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="#" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-3 col-sm-6">
        <a class="btn1" href="./fold3.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1628744398863-1877b197f2cc?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title">Samsung Fold 3</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="#" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>
    </div>

    <h4 style="display: inline">Top Rated Products</h4>
    <button type="button" class="btn btn-dark more">
      See More
    </button>
    <hr />
    <div class="row">

      <!-- <div class="col-md-2 col-sm-4">
          <form action="test.php" method="POST">
            <input style="display: none;" type="text" name="pid" value="<?php echo $row['pid'] ?>" readonly/>
            <button type="submit" style="border: 0px; background-color: transparent;">
              <a class="btn1" href="#" target="content">
                <div class="card bg-dark">
                  <img
                    src="https://images.unsplash.com/photo-1610196600828-517131fddddd?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80"
                    class="card-img-top"
                    alt="..."
                  />
                  <div class="card-body btn2">
                    <h5 class="card-title proname">Bose 700C V-2.0</h5>
                  </div>
                </div>
              </a>
            </button>
          </form>
           
        </div> -->

      <?php
      while ($row = $result->fetch_assoc()) {
        echo
        "<div class=\"col-md-2 col-sm-4\">
          <form action=\"test.php\" method=\"POST\">
          <input style=\"display: none;\" type=\"text\" name=\"pid\" value=\"" . $row['pid'] . "\" readonly/>
          <button type=\"submit\" style=\"border: 0px; background-color: transparent;\">
            <a class=\"btn1\" href=\"#\" target=\"content\">
              <div class=\"card bg-dark\">
                <img
                  src=\"" . $row['pic6'] . "\"
                  class=\"card-img-top\"
                  alt=\"...\"
                />
                <div class=\"card-body btn2\">
                  <h5 class=\"card-title proname\">" . $row['pname'] . "</h5>
                </div>
              </div>
            </a>
          </button>
        </form>
         
      </div>";
      }
      ?>

      <!-- <div class="col-md-2 col-sm-4">
        <a class="btn1" href="#" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1562275001-eba9b7e2462f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">Puma Jackets</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-2 col-sm-4">
        <a class="btn1" href="#" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">MacBook Air</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-2 col-sm-4">
        <a class="btn1" href="#" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1617997455403-41f333d44d5b?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">iPhone 12 Pro</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-2 col-sm-4">
        <a class="btn1" href="#" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1557438159-51eec7a6c9e8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">Galaxy Watch</h5>
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-2 col-sm-4">
        <a class="btn1" href="#" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1610945415295-d9bbf067e59c?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1171&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">S21 Ultra - Black</h5>
            </div>
          </div>
        </a>
      </div> -->
    </div>
    <!-- Quiz -->
    <h4>Play n Win</h4>
    <hr>
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <a class="btn1" href="./quiz1.php" target="_self">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1484069560501-87d72b0c3669?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">Quiz 1</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="./quiz1.php" target="content" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-4">
        <a class="btn1" href="./quiz2.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1588662886318-6b48b48143f6?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">Quiz 2</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="./quiz1.php" target="content" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>

      <div class="col-md-4 col-sm-4">
        <a class="btn1" href="./quiz3.php" target="content">
          <div class="card bg-dark">
            <img src="https://images.unsplash.com/photo-1458419948946-19fb2cc296af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" class="card-img-top" alt="..." />
            <div class="card-body btn2">
              <h5 class="card-title proname">Quiz 3</h5>
              <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
              <!-- <a class="btn1" href="./quiz1.php" target="content" class="btn btn-primary">>></a> -->
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

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




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>

</html>