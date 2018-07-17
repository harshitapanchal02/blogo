<?php 
    session_start();
    if (isset($_SESSION['username'])) 
    {
      echo '<form action="includes/logout.inc.php" method="POST">
              <button type="submit"  style="float:right;background-color:purple;color:white; border: dotted dashed solid double;
    font-family: cursive;font-size:150%;margin-top:20px;margin-right:20px;" name="submit">LogOut</button>
            </form>';
    }     
?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" type="text/css" href="main.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style>
.container
{
    position: relative;
}

  
.b1 {
    background-color: purple; /* Green */
    border: dotted dashed solid double;
    font-family: cursive;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 30px;
    position: relative;
    top: 30%;
    left: 35%;
    cursor: pointer;
    text-shadow: 5px 5px #111111;
}

h2 {
    
    color: 008080;
    font-family: verdana;
    font-size: 150%;
    text-align: center;
    top:100%;
    left:50%;
}


h1 {
    top:0%;
    position: relative;
    color: red;
    font-family: cursive;
    font-size: 400%;
    text-align: center;
    text-shadow: 2px 2px #111111;
}
body {
    font-family: "Lato", sans-serif;
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
</head>
<body>

<!-- 
        <div class="css-slideshow"> 
            <figure> 
                <img src="a1.jpg" width="1000" height="370" /> 
                <figcaption><strong>CSS3:</strong> CSS3 delivers a...</figcaption> 
            </figure> 
            <figure> 
                <img src="bbb.jpg" width="1000" height="370" /> 
            <figcaption><strong>Semantics:</strong> Giving meaning to...</figcaption> 
            </figure> 
            <figure> 
                <img src="ccc.jpg" width="1000" height="370" /> 
            <figcaption><strong>Semantics:</strong> Giving meaning to...</figcaption> 
            </figure> 
 -->
        </div>
<div class="container">
    <div class="row">
        
        <div class="col-lg-12">
            <h1>Blogoholic</h1>
        </div>  
              
    </div>
    <div>
        <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="#">Home</a>
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

        <a href="aboutus.php">About us</a>
        </div>
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>        
    </div>
    <!-- <img src="f1.jpg"  width="1200" height="250"><br><br> -->

      <marquee direction="left" width=100%><font size=6 face=verdana color=red><p><b>-To BLOG=To share,To connect,To create,To inspire!!!....-BLOGGING is not rocket science,it's about being yourself and putting what you have into it!!!.....-The best form of expression is BLOGGING!!!</b><p></font></marquee>

    <div class="row">
        <div class="col-lg-12">
            <?php 
    
                if (isset($_SESSION['username'])) 
                {
                    echo "<a href='write.php'><button class='b1'>START WRITING</button></a>";
                }  
                else{
                    echo "<a href='login.php'><button class='b1'>START WRITING</button></a>";
                }   
            ?>
         
        </div>
        <div style="margin: auto; margin-top: 20em; margin-bottom: 2em;"></div>
    </div>
    <div></div>
    <div></div>
    <div class="row">
        <div class="col-lg-12">
            <H2>Featured Categories</H2>
        </div>
    </div>   
    <div class="row">
        <div class=" col-lg-4">
            <a href="blog.php?ca=PHOTOGRAPHY"><img src="images7.jpg" style="width:200px;height:200px;border:0;top:800;"></a>
 
        </div>
        <div class="col-lg-4">
             <a href="blog.php?ca=FASHION & LIFESTYLE"><img src="fashion.jpg" style="width:200px;height:200px;border:0;top:800;"></a>
  
        </div>
        <div class="col-lg-4">
             <a href="blog.php?ca=FOOD"><img src="food.jpg" style="width:200px;height:200px;border:0;top:800;"></a>
        </div>
         <div style="margin: auto; margin-top: 20em; margin-bottom: 2em;"></div>
    </div>
        <div class="col-lg-12">
            <a href="categories.php"><button class="b1">MORE CATEGORIES</button></a>
        </div>

    
    <div style="margin: auto; margin-top: 5em; margin-bottom: 2em;"></div> 
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