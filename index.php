<?php

session_start();
//if (!isset($_SESSION['login']) || $_SESSION['login'] != true) {
// header("location: login.php");
//exit;
//}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="css1/styles.css ">

  <title>Toyota GR-Supra-MK5

  </title>
  <style>
    .navbarog {
      width: 100%;
      height: 58px;
      background-color: white;
      display: flex;
      justify-content: center;
      border: 2px solid black;
    }

    #myBtn {
      margin-left: 100px;
      background-color: transparent;
      cursor: pointer;
      width: 28px;

      border-radius: 50px;
      border: 1px solid white;
    }
  </style>
</head>

<body>

  <div class="cont">
    <?php


    if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
      $loggedin = true;
    } else {
      $loggedin = false;
    }
    echo ' <div class="navbarog">

      <nav class="navlist" style="    align-items: baseline;">
        <div class="logo">
          <img src="img/logo.png" alt="">
        </div>
        <ul>
          <li><a href="" class="a1">Home</a></li>

          <li><a href="">About</a></li>
          <li class="vehicle"><a href="">Vehicles</a></li>
          <li><a href="">Contact us</a></li>';
    if (!$loggedin) {
      echo ' <div class="login">
            <a href="login.php"> <button class="btnlog">Login</button></a>
             </div>';

    }
    if ($loggedin) {

      echo '<button id="myBtn"  data-bs-toggle="modal" data-bs-target="#exampleModal"><svg class="logimg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg></button>
      ';
    }

    echo ' </ul>

      </nav>
    </div>';

    ?>
    <div class="showprofile">
      <?php
      include 'logmordal.php';
      ?>
    </div>
    <div class="video">
      <video loop controls autoplay src="video/suprav.mp4" type="video/ogg"> </video>
      <div class="wordfloat">
        <h1>2024 GR SUPRA</h1>

        <p>Starting MSP $46,440*</p>

        <p class="sml">45th Anniversary Edition shown in Mikan Blast. Prototype shown. Professional driver on
          closed course. Do not attempt.</p>
      </div>
    </div>
  </div>

  <div>

    <div id="blkbar">
      <nav>
        <ul>
          <div class="grimg"><img src="img/grlogo.png" alt=""></div>
          <li><a class="active" href="">Overview</a></li>
          <li><a href="">Features</a></li>
          <li><a href="">Images</a></li>
          <li><a href="">More</a></li>
          <li><a href="">GR VAriants</a></li>
          <button class="build">Build</button>
        </ul>
      </nav>
    </div>

    <section id="Overview">
      <div class="containet-content">
        <h2 class="cont-content">Go beyond a victory lap.</h2>
        <p class="contp">With GR Supra’s turbocharged powerplant, impressive handling and racing-inspired interior, get
          ready to experience pure driving pleasure at every turn.</p>
      </div>
      <div class="slider">

        <div class="slides">
          <input type="radio" name="radio-btn" id="radio1">
          <input type="radio" name="radio-btn" id="radio2">
          <input type="radio" name="radio-btn" id="radio3">
          <input type="radio" name="radio-btn" id="radio4">
          <input type="radio" name="radio-btn" id="radio5">

          <div class="slide first">
            <img src="img/rd.png" alt="">
            <div class="name">Mikan Blast</div>
          </div>
          <div class="slide">
            <img src="img/blue.png" alt="">
            <div class="name" style="padding-left: 372px;">Stratosphere</div>
          </div>
          <div class="slide">
            <img src="img/white.png" alt="">
            <div class="name" style="    padding-left: 369px;">Absolute Zero</div>
          </div>
          <div class="slide">
            <img src="img/black.png" alt="">
            <div class="name" style="padding-left: 391px;">Nocturnal</div>
          </div>
          <div class="slide">
            <img src="img/red.png" alt="">
            <div class="name" style="    padding-left: 331px;">Renaissance Red 2.0</div>
          </div>



        </div>

        <div class="sltc">
          <hr style="width: 245px;border:2px solid black;
    background: black; margin-right:15px;"><span> Select Colour </span>
          <hr style="width: 245px;border:2px solid black;
    background: black;margin-left:15px;">
        </div>

        <div class="navigation-manual">
          <label for="radio1" class="manual-btn active2" id="red"></label>
          <label for="radio2" class="manual-btn" id="blue"></label>
          <label for="radio3" class="manual-btn" id="white"></label>
          <label for="radio4" class="manual-btn" id="black"></label>
          <label for="radio5" class="manual-btn" id="rd"></label>

        </div>

      </div>
  </div>
  <div class="display-word">
    <p class="worddis">Options shown. Prices and colors may vary by model.</p>
    <button class="btnbuild">Build</button>
  </div>
  </section>
  <div class="fet" style="padding-top: 100px;">
    <section id="feature">
      <div class="four-coloum">
        <div class="coloum1">
          <h1 class="fetword">GR Supra Specs</h1><button class="allspec">All specs</button>
        </div>
        <div class="coloum2">
          <hr>
          <div class="first">
            <p class="fir">2.0L 4-CYL. ENGINE</p>
            <strong>255 HP/295 Lb.-Ft. *</strong>
          </div>
          <div class="sec">
            <p class="fir">DRIVETRAIN</p>
            <strong>Rear-Wheel Drive</strong>
          </div>
        </div>
        <div class="coloum3">
          <hr>
          <div class="first">
            <p class="fir">3.0L 6-CYL. ENGINE</p>
            <strong>382 HP/368 Lb.-Ft. *</strong>
          </div>
          <hr>
          <div class="sec">
            <p class="fir">AVAILABLE AVS</p>
            <strong>Adaptive Variable Suspension</strong>
          </div>
        </div>
        <div class="coloum4">
          <hr>
          <div class="first">
            <p class="fir">TRANSMISSION</p>
            <strong>6-Speed iMT or 8-Speed AT</strong>
          </div>
          <hr>
          <div class="sec">
            <p class="fir">NATIONAL AUTO SPORT ASSOCIATION</p>
            <strong>Complimentary 1-Year Membership *</strong>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    window.onscroll = function () { myFunction() };

    var navbar = document.getElementById("blkbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  <script>
    function myFunction2() {
      var x = document.getElementById("showprofile");
      if (x.style.display === "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>
</body>

</html>