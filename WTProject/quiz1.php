<?php  include 'redirect.php';  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <title>Quiz 1</title>
    <style>
      body {
        background-image: url("https://images.unsplash.com/photo-1484069560501-87d72b0c3669?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1170&q=80");
        background-size: cover;
      }
    </style>
  </head>

  <body>
    <div class="container mt-5">
      <h1 style="color: beige">QUIZ 1</h1>
      <p>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample"
          aria-expanded="false"
          aria-controls="collapseExample"
        >
          Qestion 1
        </button>
      </p>
      <div class="collapse" id="collapseExample">
        <div class="card card-body">
          <p>What's the Highest RAM provided by Samsung S21 Ultra?</p>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q1"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">4 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q1"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">12 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q1"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">16 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q1"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault2">8 GB</label>
          </div>
        </div>
      </div>
      <br />

      <p>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample1"
          aria-expanded="false"
          aria-controls="collapseExample1"
        >
          Qestion 2
        </button>
      </p>
      <div class="collapse" id="collapseExample1">
        <div class="card card-body">
          <p>What's the Highest ROM provided by Samsung S21 Ultra?</p>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q2"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">64 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q2"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">128 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q2"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">256 GB</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q2"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">512 GB</label>
          </div>
        </div>
      </div>
      <br />

      <p>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample3"
          aria-expanded="false"
          aria-controls="collapseExample3"
        >
          Qestion 3
        </button>
      </p>
      <div class="collapse" id="collapseExample3">
        <div class="card card-body">
          <p>Features of S21 Ultra</p>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q3"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">108 MP Main Camera</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q3"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">12 GB RAM in base model</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q3"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">256 GB ROM in base model</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q3"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">All of the above</label>
          </div>
        </div>
      </div>
      <br />

      <p>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample4"
          aria-expanded="false"
          aria-controls="collapseExample4"
        >
          Qestion 4
        </button>
      </p>
      <div class="collapse" id="collapseExample4">
        <div class="card card-body">
          <p>Refresh Rate of S21 Ultra?</p>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q4"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">60 Hz</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q4"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">120 Hz</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q4"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">90 Hz</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q4"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">144 Hz</label>
          </div>
        </div>
      </div>
      <br />

      <p>
        <button
          class="btn btn-primary"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#collapseExample5"
          aria-expanded="false"
          aria-controls="collapseExample5"
        >
          Qestion 5
        </button>
      </p>
      <div class="collapse" id="collapseExample5">
        <div class="card card-body">
          <p>Screen Size of S21 Ultra</p>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q5"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">6.7"</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q5"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">6.8"</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q5"
              id="flexRadioDefault1"
            />
            <label class="form-check-label" for="flexRadioDefault1">6.9"</label>
          </div>
          <div class="form-check">
            <input
              class="form-check-input"
              type="radio"
              name="q5"
              id="flexRadioDefault2"
            />
            <label class="form-check-label" for="flexRadioDefault2">7.0"</label>
          </div>
        </div>
      </div>
      <br>
      <button id="done" type="button" onclick="result()" class="btn btn-success">Done</button>
      <br><br>
      <div id="result" style="display: none;background-color: #198754; padding: 10px; height: 50px;color: white;font-size: large; border-radius: 15px;"></div>
      <br><br>
      <a href="./home.php" class="btn btn-warning">Back to Home</a>
      <br><br><br>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
      crossorigin="anonymous"
    ></script>
    <script>

      function result(){
        var x = document.getElementsByClassName("form-check");
        console.log(x);
        var count = 0
        var answer = ["16 GB","512 GB","All of the above","120 Hz","6.8\""];
        for (var i=0;i<=19;i++)
        {
          if (x[i].childNodes[1].checked)
          {
            for (var k=0;k<=4;k++)
            {
              if (answer[k]==x[i].children[1].innerText)
              {
                count++;
              }
            }
          }
        }
        console.log(count)

        document.getElementById("done").style.display = "none";

        var z = document.getElementById("result");

        z.style.display="block";
        z.innerHTML="	&#10003 Score: "+count+"/5";

        // x.children[0].enabled = "false";
      }

    </script>
  </body>
</html>
