<html>
<head>
<link rel="stylesheet" href="ss.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>HOME PAGE</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<center>
<body>
<div class="div1">
<img src="images/i1.png"  style="width:100%;height:150px;">
<ul>
<li><a class="active" href="home.php">HOME</a></li>
<li><a  href="about.php">ABOUT</a></li>
<li><a  href="facilities.php">FACILITIES</a></li>
<li><a  href="course.php">COURSES</a></li>
<li><a  href="notification.php">NOTIFICATION</a></li>
<li><a  href="">RESULT</a></li>
<li><a  href="instruction.php">ADMISSION</a></li>
<li><a  href="register.php">SIGNUP</a></li>
</ul>   
</div>    
<div class="slideshow-container">

<div class="mySlides fade">
 
  <center><img src="images/i2.jpg" style="width:1000px;height:350px;"></center>
  
</div>

<div class="mySlides fade">

  <center><img src="images/i3.jpg" style="width:1000px;height:350px;"></center>
 
</div>

<div class="mySlides fade">

  <center><img src="images/i4.jpg" style="width:1000px;height:350px;"></center>

</div>

</div>
<br>


<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); 
}
 </script>
 </center>
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.251791552215!2d78.14496327421227!3d9.912975274527787!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c5077610d357%3A0x69066b558478379a!2sThiagarajar%20College!5e0!3m2!1sen!2sin!4v1673384827888!5m2!1sen!2sin" width="450" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<center>
<div class="contact">
<img src="images/logo.jpg" style="width:200px;height:250px;">
<h1>Contact</h1>
<h4>#139-140, Kamarajar Salai, Madurai - 625009, India</h4>
<h4>Tel: +91 452 2311875, Fax: +91 452 2312375</h4>
<h4>Email: principaltcarts@gmail.com</h4>
</div>
</center>
<div class="ic">
  <div class="ic1">
<a href="https://www.facebook.com/ThiagarajarArtsandScienceCollegeMadurai/" class="fa fa-facebook"></a>
<a href="https://twitter.com/ThiagarajarArts" class="fa fa-twitter"></a>
<a href="https://twitter.com/ThiagarajarArts" class="fa fa-google"></a>
<a href="https://in.linkedin.com/school/thiagarajar-college/" class="fa fa-linkedin"></a>
<a href="https://www.youtube.com/results?search_query=%23tcarts" class="fa fa-youtube"></a>
<a href="https://www.instagram.com/thiagarajararts/?hl=en" class="fa fa-instagram"></a>
  </div>
</div>
</body>

</html>
