<!DOCTYPE html>
<html>
<title>My Account | My Movies DB</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="movie.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
table {border-collapse: collapse;width:80%;margin-left: 10px;}
td,th {border: 1px solid #dddddd;text-align: left;padding: 8px;}
tr:nth-child(even) {background-color: #dddddd;}
</style>

<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <a href="index.html"><h3 class="w3-padding-64"><b>My Movies DB</b></h3></a>
  </div>
  <div class="w3-bar-block">
   <a href="index.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-home"></i>&nbsp;Home</a> 
	<a href="search.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-search"></i>&nbsp;Search</a>
	<a href="myaccount.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-user"></i>&nbsp;My Account</a> 
    <!-- <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-sign-in"></i>&nbsp;Login</a> -->
    <a href="register.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-user"></i>&nbsp;Register</a> 
	<a href="logout.php" class="w3-bar-item w3-button w3-hover-white"><i class="fa fa-sign-out"></i>&nbsp;Logout</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>My Movies DB</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
