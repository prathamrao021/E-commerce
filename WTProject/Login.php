<?php
  #echo $_COOKIE['User'];
  if ((isset($_COOKIE["User"])))
  {
    header('Location: http://localhost/HTML%20Files/WTProject/index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />

    <title>Login</title>
    <style>
      .width100 {
        width: 100%;
      }
      body{
          background-repeat: no-repeat;
          background-size: cover;
          background-image: url("https://images.unsplash.com/photo-1576072446584-4955dfe17b86?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80");
      }
      .card-body{
          padding-bottom: 0;
      }
      .transparent {
        background-color: white;
        opacity: 0.9;
        /* border: 2px solid black; */
        box-shadow: 0 0 10px 2px black;
        margin-left: 10%;
        margin-right: 10%;
        padding: 20px;
        margin-top: 50px;
        /* padding-right: 20px; */
      }
      @media only screen and (max-width:950px) {
        body{
          background-size: auto;
          background-position: 50% 40%;
        }
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5" align="center">Login</h1>
      <div class="card transparent">
        <div class="card-body">
            <div style="background-image: linear-gradient(90deg ,violet,indigo,blue,green, yellow, orange, red); width: 100%; height: 5px; border-radius: 5px; margin-bottom: 10px;"></div>
          <form action="./Auth.php" method="POST">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label"
                >User Name</label
              >
              <input
                type="text"
                class="form-control"
                name="username"
                id="exampleInputEmail1"
                aria-describedby="emailHelp"
                onblur = "validate(this)"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Password</label
              >
              <input
                type="password"
                class="form-control"
                name="password"
                id="exampleInputPassword1"
                onblur="validate(this)"
              />
            </div>
            <!-- <div class="mb-3 form-check">
              <input
                type="checkbox"
                class="form-check-input"
                id="exampleCheck1"
              />
              <label class="form-check-label" for="exampleCheck1"
                >Remember Me</label
              >
            </div> -->
            
            <button type="submit" class="btn btn-dark width100">Login</button>
            <h6 class="mt-3" align="center">OR</h6>
            <a style="display: block;color: cornflowerblue;text-decoration: none;" href="./Registration.php" align="center">No Account? Register Now</a>
          </form>
        </div>
      </div>
    </div>

  </body>
</html>
