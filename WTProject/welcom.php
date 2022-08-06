<?php
    $name= $_POST["name"];
    $email= $_POST["email"];
    $address= $_POST["address"];
    $city= $_POST["city"];
    $state= $_POST["state"];
    $birthdate= $_POST["birthdate"];
    $gender= $_POST["gender"];
    $username1= $_POST["username"];
    $password1= $_POST["password"];

    #echo $name;
    #echo $gender;
    #echo $birthdate;

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
    $sql1 = "SELECT username FROM registration where username = '".$username1."'";
    $result = $conn->query($sql1);
    if (!empty($result) && $result->num_rows > 0)
    {
        $flag = false;
    }
    else
    {
        $flag = true;
        setcookie("User",$username1,time()+3600);
    }
    $sql = "INSERT INTO registration VALUES ('".$name."','".$email."','".$address."','".$city."','".$state."','".$birthdate."','".$gender."','".$username1."','".$password1."')";
    

    if ($flag == true && $conn -> query($sql) === TRUE )
    {
        #echo "New Record Inserted";
    }
    else{
        echo $conn -> error;
    }

    
?>

<html>
    <head>
        <title><?php
            if ($flag == true)
            {
                echo "Welcome";
            }
            else{
                echo "Registration Failed";
            }
        ?></title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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

    <?php
        if ($flag == true)
        {
            echo "<div class=\"container mt-5\">
            <h3>Welcome ".$name."</h3>
            <br>
            <p>

                Thank you to you for being here with us today. We are very pleased to be able to welcome you as from now on we are a community that will stay together forever.
                We expect that you will stay as long as possible with us as those who are new to the us are the most precious one to us.
                We are proud to be able to host it today here at this wonderful platform with all of you.
                <br>
                Before we get started, I would like to express my sincere appreciation to you who generously helped us make this platform come together to become a success. 
                We couldn’t have done it without you!
                <br>
                Our motto is <b>\"BEST of Awl to Awl\"</b>. So, we will always try to provide you the best, but in any situation(as per policy) you will be able to return it to us if you are not satisfied. Thank you for your valued business. We value your trust and confidence in us and sincerely appreciate you!
                Your commitment as a customer is much appreciated.
                <br><br>
                We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
                <br><br>
                Sincerely,
                <br><br>
                Pushparaj Kavara, CEO, Co-Founder</p>

            </p>
            <a type=\"button\" href=\"./index.php\" class=\"btn btn-success\">Skip to Home Page</a>
        </div>";
        }
        else{
            echo "<div class=\"container mt-5\">
            <h3>Welcome,</h3>
            <br>
            <p>
                <h3>Username Already Existed.</h3>
                <br>
                <p>Please try again using a different Username.(Try Including numbers and special characters in Username)</p>
                <br><br>
                Sincerely,
                <br><br>
                Pushparaj Kavara, CEO, Co-Founder</p>

            </p>
            <a type=\"button\" href=\"./Registration.php\" class=\"btn btn-success\">Go Back to Registration</a>
        </div>";
        }
    
    ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>