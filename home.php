<?php

    session_start();

    if(!isset($_SESSION['username'])){
        header('location:login.php');    /*with this code you won't be able to go back to the home page without login in*/
    }

?>

<!--
<html>
    <head>
        <title>HOME PAGE</title>
    </head>
    <body>
        <a href="logout.php">LOGOUT</a>
        <h1>WELCOME <?php echo $_SESSION['username']; ?></h1> 
    </body>
</html>
-->

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style_home.css">

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
    background-position: center;
    background-size: cover;
    background-image: url("images/4.jpg");
    min-height: 100%;
  }
  
.w3-bar .w3-button {
    padding: 16px;
  }

 /* continuied on style_home.css */
 

</style>

</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide"><i class="fa fa-home"></i>SMPP</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
      <a href="#news" class="w3-bar-item w3-button"><i class="fa fa-user"></i> NEWS</a>
      <a href="#stock_price" class="w3-bar-item w3-button"><i class="fa fa-th"></i> STOCK PRICE</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
      <div class="dropdown">
  <button class="dropbtn" onclick="myFunction()"><i class="fa fa-user-circle-o"></i> Welcome, <?php echo $_SESSION['username']; ?>
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-content" id="myDropdown">
  <a href="logout.php"><i class="fa fa-sign-out"></i> Log out</a>
    <!--
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
    -->
  </div>
  </div>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
  <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button">NEWS</a>
  <a href="#stock_price" onclick="w3_close()" class="w3-bar-item w3-button">STOCK PRICE</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
  <a href="#welcom" onclick="w3_close()" class="w3-bar-item w3-button">WELCOME</a>
  <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button">Log-Out</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small"><b>Stock Market Price Prediction</b></span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br>
    <span class="w3-large">Stop wasting time finding valuable companies, which could have been done with just one click.</span>
    <p><a href="https://stocks-dash.herokuapp.com/" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" target="_blank">Let's predict the price</a></p>
  </div> 
  
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">ABOUT THE WEBSITE</h3>
  <p class="w3-center w3-large">Key features of this website</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">SMPP</p>
      <p>Stock Market Price Prediction (SMPP) it is a website where you can predict the future price of the stock with just one click. <br> For more Info, Download the ppt and report for this project from <a href="#" class="ppt">here</a></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Motivation</p>
      <p>Investment is something which everyone is scared because they think it is kind of gambling, but for me, I have understood it long time ago that this is just a myth made by those people who are scared of doing the hard work in order to achieve great things.<br>So, to delete the myth I have create this website were you can find a suitable company to invest with just few steps.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>There are maany elements or various programs used for making this website which will be too long to write here. So, visit <a href="https://github.com/AnshulMajorProject/MajorProject" target="_blank" class="ppt">this page.</a></p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-handshake-o w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Grateful</p>
      <p>I am thankful to<b> Dr. Om Prakash Singh</b>, who is my supervisor, for his support and guidance in completion of this project.</p>
    </div>
  </div>
</div>

<!-- LIVE PRICE SECTION -->
<div class="w3-container w3-light-grey" style="padding:128px 16px" id="stock_price">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Live stock price.</h3>
      <p>Interested in knowing the current stock price of any company? Click the button below to know the price by simply entering the desired stock ticker symbol</p>
      <p><a href="https://finance.yahoo.com/" target="_blank" class="w3-button w3-black"><i class="fa fa-th"> </i> See the current stock price</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="images/6.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- NEWS SECTION -->
<div class="w3-container" style="padding:128px 16px" id="news">
  <h3 class="w3-center">TRENDING NEWS</h3>
  <p class="w3-center w3-large">The ones which impact the market most</p>
  <div class="w3-row-padding w3-grayscale" style="margin-top:64px">

    <div class="w3-col l3 m6 w3-margin-bottom">
    
      <div class="w3-card">
        <img src="images/8.png" alt="News Thumbnail" style="width:100%">
        <div class="w3-container">
          <h3>COMING SOON</h3>
          <p class="w3-opacity">Technology News</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam, voluptas.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i>  Contact</button></p>
        </div>
      </div>
      
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/8.png" alt="Jane" style="width:100%">
        <div class="w3-container">
          <h3>COMING SOON</h3>
          <p class="w3-opacity">International News</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/8.png" alt="Mike" style="width:100%">
        <div class="w3-container">
          <h3>COMING SOON</h3>
          <p class="w3-opacity">Business News</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="images/8.png" alt="Dan" style="width:100%">
        <div class="w3-container">
          <h3>COMING SOON</h3>
          <p class="w3-opacity">Political News</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
        </div>
      </div>
    </div>

  </div>
</div>

<!-- WEBSITE ELEMENTS -->
<div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
    <div class="w3-center"><h3>WEBSITE ELEMENTS</h3><br>
    </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">25%</span>
    <br>LSTM
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">25%</span>
    <br>Python
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">20%</span>
    <br>HTML, CSS,PHP, ...
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">30%</span>
    <br>Others
  </div>
</div>


<!-- WEBSITE FUNCTIONALITIES -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Website Functionalities.</h3>
      <p>Here you can see and analyse the proper function of the website. The percentage bars which you can see on the right side changes automatically with the status of the website. For now, as you can see everything is in optimal condition and functioning very efficiently.
      </p>
      <p>Furthermore, if you want to know the how this website functions or if you want to see the code, then you can visit my <a href="https://github.com/AnshulMajorProject/MajorProject" target="_blank" class="ppt">github</a> page. There you will find everything which will help you to deploy and run this website.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fa fa-file-code-o w3-margin-right"></i>API</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-code w3-margin-right"></i>Back-end applicaton</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Overall Website</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div class="w3-container" style="padding:128px 16px" id="contact">
  <h3 class="w3-center">CONTACT</h3>
  <p class="w3-center w3-large">Lets get in touch. Send me a message:</p>
  <div style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Sikkim, India</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +91 151515</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: anshul_201800259@smit.smu.edu.in</p>
    <br>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
    </div>
</div>

    <!-- SMIT IMAGE -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <img src="images/smit_3.jpg"  style="width:100%;margin-top:48px">
    </div>
    
  
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <a href="https://github.com/AnshulMajorProject/MajorProject" target="_blank"><i class="fa fa-github w3-hover-opacity"></i></a>
  </div>
  <p><a href="https://github.com/AnshulMajorProject/MajorProject" title="W3.CSS" target="_blank" class="w3-hover-text-green">Anshul Pandey Production</a></p>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

/*------ DROPDOWN --------*/

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}

</script>

</body>
</html>
