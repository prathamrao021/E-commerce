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
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>

    <title>Registration</title>
    <style>
      .width100 {
        width: 100%;
      }
      body {
        /* background-color: lightblue; */
        background-repeat: no-repeat;
        background-size: cover;
        background-image: url("https://images.unsplash.com/photo-1524282745852-a463fa495a7f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80");
      }
      body::-webkit-scrollbar { width: 0 !important }
      .transparent {
        box-shadow: 0 0 10px 2px black;
        opacity: 0.9;
        margin-left: 10%;
        margin-right: 10%;
        padding: 20px;
        margin-top: 50px;
        margin-bottom: 50px;
      }
      #cpass {
        color: red;
        display: none;
      }
      .input{
          border-left:3px solid black;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <h1 class="mt-5" align="center">Registration</h1>
      <div ng-app="app" ng-controller="altctrl" class="card transparent">
        <div class="card-body">
          <form class="regform" action="./welcom.php" id="form1" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label"
                >Name<span id="namevalid"></label
              >
              <input
                type="text"
                class="form-control input"
                id="name"
                onblur="validate(this)"
                name="name"             />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Eamil</label
              >
              <input
                type="email"
                class="form-control input"
                id="email"
                oninput="validate(this)"
                name="email"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Address</label
              >
              <input
                type="text"
                class="form-control input"
                id="exampleInputPassword1"
                oninput="validate(this)"
                name="address"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >City</label
              >
              <input
                type="text"
                class="form-control input"
                id="exampleInputPassword1"
                onblur="validate(this)"
                name="city"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >State</label
              >
              <input
                type="text"
                class="form-control input"
                id="state"
                onblur="validate(this)"
                name="state"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Birthdate</label
              >
              <input
                type="date"
                class="form-control input"
                id="birthdate"
                onblur="validate(this)"
                name="birthdate"
              />
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label"
                >Gender</label
              >
              <div class="mb-3 form-check">
                <input
                  name="gender"
                  type="radio"
                  class="form-check-input"
                  id="gender1"
                  value="Male"
                />
                <label class="form-check-label" for="exampleCheck1">Male</label>
              </div>
              <div class="mb-3 form-check">
                <input
                  name="gender"
                  type="radio"
                  class="form-check-input"
                  id="gender2"
                  value="Female"
                />
                <label class="form-check-label" for="exampleCheck1"
                  >Female</label
                >
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >User Name</label
                >
                <input
                  type="text"
                  class="form-control input"
                  id="username"
                  ng-model = "uname"
                  onblur="validate(this)"
                  name="username"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control input"
                  id="pass"
                  oninput="validate(this)"
                  name="password"
                />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label"
                  >Confirm Password<span id ="cpass">*Match the above Password</span></label
                >
                <input
                  type="password"
                  class="form-control input"
                  id="confirmpass"
                  oninput="validate(this)"
                />
              </div>
            </div>
            <button id="signup" type="submit" class="btn btn-dark width100">Sign Up</button>
            <h6 class="mt-3" align="center">OR</h6>
            <a style="display: block;color: cornflowerblue;text-decoration: none;" href="./Login.php" align="center">Already Registered? Login Now</a>
          </form>
        </div>
      </div>
    </div>
    <script>
        // var var1 = document.getElementById("name");
        // var1.addEventListener("input",function(e){
        //     // console.log(e.target.value)
        //     if (!e.target.value)
        //     {
        //         document.getElementById("input").style.borderLeft = "3px solid red";  
        //     }
        //     else{
        //         document.getElementById("input").style.borderLeft = "3px solid green";  
        //     }
            
        // })

          // $app = angular.module('app',[])
          // .controller('altctrl', function($scope)
          // {
          //   $scope.uname = 
          // })
          
          var id = setInterval(disable, 500);
          function disable()
          {
          var a = document.getElementById("name").value;
          var b = document.getElementById("email").value;
          var c = document.getElementById("state").value;
          var d = document.getElementById("gender1").checked;
          var e = document.getElementById("gender2").checked;
          var f = document.getElementById("username").value;
          var g = document.getElementById("pass").value;
          var h = document.getElementById("confirmpass").value;

          if (!a || !b || !c || (!d && !e) || !f || (g !== h) || !g || !h)
          {
              console.log("hi");
              document.getElementById("signup").disabled = true;
          }
          else
          {
            console.log("bye");
            document.getElementById("signup").disabled = false;
          }
          }

        function validate(e)
        {
            // console.log(e.value)
            if (!e.value)
            {
                e.style.borderLeft = "3px solid black"
            }
            else{
                e.style.borderLeft = "3px solid green"
            }
        }
        
    </script>
  </body>
</html>
