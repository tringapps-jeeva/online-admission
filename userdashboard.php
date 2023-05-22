<?php
@include 'config.php';
session_start();
if (isset($_SESSION['email'])) {
  //echo '<script type="text/javascript">document.getElementbyId("personal").innerHTML="true";</script>';
  // echo "<style>button{display:none;}</style>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Userdashboard</title>
  <link rel="stylesheet" href="css/userdash.css">
  <link rel="stylesheet" href="ss.css">
</head>

<body>
  <img src="images/i1.png">
  <div class="div2">
    <ul>
      <li><a class="active" href="home.php">HOME</a></li>
      <li><a href="about.php">ABOUT</a></li>
      <li><a href="facilities.php">FACILITIES</a></li>
      <li><a href="">COURSES</a></li>
      <li><a href="notification.php">NOTIFICATION</a></li>
      <li><a href="">RESULT</a></li>
      <li><a href="logout.php">LOGOUT</a></li>
    </ul>
  </div>
  <div class="wrapper">
    <div class="cards_wrap">
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
            </div>
            <div class="card_info">
              <p class="title">PERSONAL DETAILS</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" id="personal" onclick="window.location.href='admissionform.php'"
                class="personal">Click
                here</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
            </div>
            <div class="card_info">
              <p class="title">EDUCATIONAL DETAILS</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" class="educational" onclick="window.location.href='educationdetails.php'">Click
                here</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
            </div>
            <div class="card_info">
              <p class="title">OTHER DETAILS</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" class="other" onclick="window.location.href='otherdetails.php'">Click here</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
            </div>
            <div class="card_info">
              <p class="title">UPLOADING DOCUMENTS</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" class="documents" onclick="window.location.href='uploadfiles.php'">Click
                here</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
              <!-- Travel -->
            </div>
            <div class="card_info">
              <p class="title">PAYMENT</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" class="payment" onclick="window.location.href='selectedcourses.php'">Click
                here</button>
            </div>
          </div>
        </div>
      </div>
      <div class="card_item">
        <div class="card_inner">
          <div class="card_top">
          </div>
          <div class="card_bottom">
            <div class="card_category">
            </div>
            <div class="card_info">
              <p class="title">PRINT AND STATUS</p>
              <p>
              </p>
            </div>
            <div class="card_creator">
              <button type="button" class="print" onclick="window.location.href='printpage.php'">Click here</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

</body>
<script src="js/userdashboardscript.js"></script>



</html>