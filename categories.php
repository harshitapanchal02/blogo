<?php 
    session_start();
    if (isset($_SESSION['username'])) 
    {
      echo '<form action="includes/logout.inc.php" method="POST">
              <button type="submit" style="float:right;background-color:purple;color:white; border: dotted dashed solid double;
    font-family: cursive;font-size:150%;margin-top:20px;margin-right:20px;" name="submit">LogOut</button>
            </form>';

    }     
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</head>
<style>
.container
{
    position: relative;
}
h1 {
    top:0%;
    position: relative;
    color: red;
    font-family: cursive;
    font-size: 450%;
    text-align: center;
    text-shadow: 2px 2px #111111;
}
body{
  background-image: url("bg.jpg");
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #f1f1f1;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #814356;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
div.relative {
    position: relative;
    left: 50px;
    top: 250px;
    font-family: "Times New Roman", Times, serif;
    color: black;
    font-family: verdana;
    font-size: 200%;
    text-align: center;
}

img:hover {
    box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    opacity: 0.4
}
.text {
  color: black;
  font-size: 16px;
  padding: 16px 32px;
  position: absolute;
    top: 50%;
    left: 10%;
    transform: translate(-50%, -50%);
    font-size: 18px;
}
</style>
<body>
<div class="container">
    <div>
    <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="home.php">Home</a>
    <div style="margin: auto;"></div>
    <div id="horizontalmenu"> 
    <!-- <li class="dropdown"> -->
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Blog<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="categories.php">Read</a></li>
            <li><a href="login.php">Write</a></li>
        </ul>
        </li>
        <!-- <ul><li><a href="#">read</a></li><li><a href="#">write</a></li></ul> </li> -->
    <div style="margin: auto;"></div>
    </div>

    <a href="aboutus.html">About us</a>
    </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>        
    </div>

    <div class="row">
        <div class="col-lg-12">
            <h1>Categories</h1>
        </div>  
    </div>
    <br><br>
    <div class="row">
        <div class=" col-lg-4">
             <a href="blog.php?ca=HEALTH"><input type="image" src="H1.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
        <div class="col-lg-4">
            <a href="blog.php?ca=TRAVEL"><input type="image" src="travel.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
        <div class="col-lg-4">
            <a href="blog.php?ca=FOOD"><input type="image" src="foodiee.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
         <div style="margin: auto; margin-top: 20em; margin-bottom: 2em;"></div>
    </div>
    <div class="row">
        <div class=" col-lg-4">
            <a href="blog.php?ca=TECHNOLOGY"><input type="image" src="techno.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
        <div class="col-lg-4">
            <a href="blog.php?ca=FASHION & LIFESTYLE"><input type="image" src="fa.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
        <div class="col-lg-4">
            <a href="blog.php?ca=PHOTOGRAPHY"><input type="image" src="pho.jpg" style="width:200px;height:200px;border:0;top:500;"></a>
        </div>
         <div style="margin: auto; margin-top: 20em; margin-bottom: 2em;"></div>
    </div>
</div>
 <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body> 
</html>