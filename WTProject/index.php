<?php  include 'redirect.php';  ?>

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
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>AWL</title>
    <style>
        body::-webkit-scrollbar {
        display: none;
        }
        .heading{
            color: red;
            font-weight: 600;
            font-size: 30px;
            padding: 0px;
        }
        .navbar-brand{
            /* border: 2px solid maroon; */
            /* border-radius: 15px; */
            padding: 7px;
            /* font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif; */
        }
        .carousel-item img{
            height: 600px;
            object-fit: cover;
        }
        .card{
            /* background-color: rgb(33,37,41); */
            color: white;
            width: 100%;
            margin-bottom: 20px;
        }
        .btn1{
            width: 100%;
            background-color: rgb(33,37,41);
            color: white;
            text-decoration: none;
            font-weight: 700;
            font-size: 18px;
        }
        .card-title{
            font-size: 18px;
        }
        .btn1:hover{
            color: rgb(204, 28, 28);
            /* font-size: ; */
        }
        
    </style>
  </head>
  <body>
      <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="./home.php" target="content"><span class="heading">Awl</span></a>
          <!-- <img style="height: 70px;width: auto;" src=""> -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="flase" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="./home.php" target="content">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="./Aboutus.php" target="content">About Us</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Products
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <!-- <li><a class="dropdown-item" href="#">Bose 700C</a></li>
                  <li><a class="dropdown-item" href="#">S21 Ultra</a></li>

                  <li><a class="dropdown-item" href="#">Galaxy Watch</a></li>
                  <li><a class="dropdown-item" href="#">iphone 12 pro</a></li>
                  <li><a class="dropdown-item" href="#">Macbook Air</a></li>
                  <li><a class="dropdown-item" href="#">Puma Jackets</a></li> -->
                  <?php
                  while ($row = $result->fetch_assoc()) {
                    echo
                    "<div>
                        <form target=\"content\" action=\"test.php\" method=\"POST\">
                          <input style=\"display: none;\" type=\"text\" name=\"pid\" value=\"" . $row['pid'] . "\" readonly/>
                          <button type=\"submit\" style=\"border: 0px; background-color: transparent;\">
                              <li><a class=\"dropdown-item\" target=\"content\">".$row['pname']."</a></li>
                          </button>
                        </form>
                        
                      </div>";
                  }
                  ?>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" onclick="logout(this)">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <iframe style="width: 100%;height:110vh;margin-bottom: -6px;" src="./home.php
      " name="content">
      
      </iframe>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script>
      function logout(e){
        document.cookie = "User=; expires=Thu, 01 Jan 1970 00:00:00 UTC;";

        location.reload();
      }
    </script>
  </body>
</html>