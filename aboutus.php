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
<title>About us</title>
<style>
<style>
.container
{
    position: relative;
}
h1 {
    top:0%;
    position: relative;
    color: grey;
    font-family: cursive;
    font-size: 300%;
    text-align: center;
    text-shadow: 4px 3px black;
}
body{
  background-image: url("abg.jpg");
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
<body><body>
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
        <a href="aboutus.php">About us</a>
        </div>
        <span style="font-size:30px;cursor:pointer;font-family:verdana" onclick="openNav()">&#9776;</span>        
</div>

<h1>Blogoholic</h1>

<p style="font-size:50px;"><b>ABOUT US</b></p>
<p style="font-size:30px;"><b>HEY YOU !</b></p>

<p style="font-size:21px;"><b>Thanks for your interest in connecting with me! I’m super, genuinely glad you’re here. Below, you’ll find some FAQs about questions we frequently receive, as well as directions on how to contact me. For the quickest response, I recommend connecting with me on Twitter or Instagram. Those are the places I love to chat most and you’re likely to get a quicker response.</b></p>



<p style="font-size:36px;"><b>BLOGGING OR BUSINESS ADVICE</b></p>

<p style="font-size:21px;"><b>Chances are, I’ve probably answered your question somewhere on this blog — woohoo! Before sending an email, please use the “search” field in the sidebar of this site to see if you can find your answer on the blog. You can also check out my library of business tips and blogging tips.</b></P>


<p style="font-size:36px;"><b>GOT SOMETHING ELSE?</b></p>

<p style="font-size:21px;"><b>If I didn’t answer your question above or you’d like to email me about something else (even just to say hi!), then you can contact me here: blogoholic17@gmail.com. Thank you</b></p>

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