<?php
    $username1 = $_POST['username'];
    $password1 = $_POST['password'];


    $servername = "localhost";
    $username = "awladmin";
    $password = "Awl2211200118092001";
    $dbname= "awl";

    $flag = false;

    $conn = new mysqli ($servername,$username,$password,$dbname);

    if($conn -> connect_error)
    {
        die("Error:". $conn -> connect_error);
    }

    $sql = "SELECT username, password FROM registration WHERE username = '".$username1."' and password = '".$password1."' ";

    $result = $conn->query($sql);
    
    #echo $sql;

    if (!empty($result) && $result->num_rows > 0) {
        echo "<div class= \"container mt-5 \">
        <h3>Welcome ".$username1."</h3>
        <br>
        <p>
            We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
            <br><br>
            Sincerely,
            <br><br>
            Pushparaj Kavara, CEO, Co-Founder</p>

        </p>
        <a href=\"./index.php\" class=\"btn btn-primary\">Go to Home</a>
    </div>";
        $flag = true;

        setcookie("User",$username1,time()+3600);

    } else {
        echo "<div class= \"container mt-5 \">
        <h3>Authentication Failed.</h3>
        <br>
        <p>
            Please try again with correct Credentials(username or password)
            <br><br>

        </p>
        <a href=\"./Login.php\" class=\"btn btn-primary\">Go Back to Login</a>
    </div>";
        $flag = false;
    }
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>
        <?php
            if ($flag == true)
            {
                echo "Welcome";
            }
            else{
                echo "Login Failed";
            }
        ?>
    </title>
    <style>
        body{
            background-image: url("https://images.unsplash.com/photo-1561715276-a2d087060f1d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80");
            background-size: cover;
        }
        .container{
            background-color: lightgrey;
            padding: 15px;
            border-radius: 15px;
            opacity: 0.7;
        }
    </style>
  </head>
  <body>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
  </body>
</html>