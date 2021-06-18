
<?php 
include"connect.php";
$title="ae";
If(isset($_GET["page"]))
{ $page=$_GET["$page"];
}
Else
{$page="index";
}
function fetch($id){
include"connect.php";
$title="ae";
If(isset($_GET["page"]))
{ $page=$_GET["$page"];
}
Else
{$page="index";
}
$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['text'];
 return $data;
}
function color($id){
include"connect.php";
$title="ae";
If(isset($_GET["page"]))
{ $page=$_GET["$page"];
}
Else
{$page="index";
}$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['color'];
return $data;
}
function font($id){
include"connect.php";
$title="ae";
If(isset($_GET["page"]))
{ $page=$_GET["$page"];
}
Else
{$page="index";
}$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['font'];
return $data;
}


if(isset($_POST["save"]))
{$template="ae";
 $sql="insert into webs(template_name,domain) values('$template','$title')";
$conn->query($sql)or die("Error: " . mysqli_error($conn));

}
$que="SELECT * FROM webs WHERE domain='$title' ";
$reso = mysqli_query($conn, $que);
$webrow = mysqli_fetch_array($reso,MYSQLI_ASSOC);
if($webrow){
$edit="false";}
Else{
$edit="true";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Adore Earth - Motivating Youth For Positive Actions </title>
    <link rel="icon" type="image/x-icon" href="https://adoreearth.org/wp-content/uploads/2020/02/save-300x103.png" />
    <!-- Font Awesome icons (free version)-->

    <script src="https://kit.fontawesome.com/0d794f7638.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />
<link href='https://fonts.googleapis.com/css?family=Kufam' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Baskerville' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Grandstander' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=pacifico' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Bungee Shade' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href='https://fonts.googleapis.com/css?family=Annie Use Your Telescope' rel='stylesheet'>



    <link
        href="https://fonts.googleapis.com/css2?family=Architects+Daughter&family=Dancing+Script&family=Indie+Flower&display=swap"
        rel="stylesheet">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://assets.ivdata.in/cms/adoreearth/css/styles.css" rel="stylesheet" />
  <link href="https://assets.ivdata.in/cms/adoreearth/style2.css" rel="stylesheet">

    <style>
.signup-section {
  padding: 10rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.5) 75%, #000000 100%), url(<?php if(fetch("a14"))
{echo "img/".fetch("a14");} 
else
{echo "https://adoreearth.org/wp-content/uploads/2020/01/children.jpg";}
?>);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}

.tooltipi {
  position: relative;
  display: inline-block;
}

.tooltipi .tooltiptext {
  visibility: hidden;
  text-align: center;
  border-radius: 6px;
  position: absolute;
  z-index: 1;
  top: auto;
  left: 50%;
  margin-left: -60px;
box-shadow: 0px 0px 10px rgba(127, 137, 161, 0.25);
Background:white;
}

.tooltipi:hover .tooltiptext {
  visibility: visible;
}
#demo {
  height:100%;
  position:relative;
  overflow:hidden;
}

.icon{
Padding:5px;
Font-size:20px;
Float:right;
Margin-top:-60px;
box-shadow: 0px 0px 10px rgba(127, 137, 161, 0.25);
} 

.green{
  background-color:#6fb936;
}
        .thumb{
            margin-bottom: 30px;
        }
        
        .page-top{
            margin-top:85px;
        }

   
img.zoom {
    width: 100%;
    height: 200px;
    border-radius:5px;
    object-fit:cover;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
}
        
 
.transition {
    -webkit-transform: scale(1.1); 
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
    .modal-header {
   
     border-bottom: none;
}
    .modal-title {
        color:#000;
    }
    .modal-footer{
      display:none;  
    }


.masthead {
  position: relative;
  width: 100%;
  height: auto;
  min-height: 35rem;
  padding: 15rem 0;
  background: linear-gradient(to bottom, rgba(0, 0, 0, 0.3) 0%, rgba(0, 0, 0, 0.7) 75%, #000000 100%), url(<?php if(fetch("a2"))
{echo "img/".fetch("a2");} 
else
{echo"https://adoreearth.org/wp-content/uploads/2020/05/WhatsApp-Image-2020-05-25-at-9.50.59-AM.jpeg";}?>);
  background-position: center;
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-size: cover;
}
           </style>
</head>

<body id="page-top">
   <!-- Navigation-->
    <section id="home">
  <header id="header" class="fixed-top ">
<div class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

    <div class="container" style="background:white; margin-top:20px;">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"> <img height="100" width="200" src="https://adoreearth.org/wp-content/uploads/2020/02/save-300x103.png" alt="Adore Earth" style="max-height: 75px;"> </a>


      <nav class="nav-menu d-none d-lg-block" >


        <ul class="navbar-nav ml-auto">
          <li class="active"><a href="">Home</a></li>

          <li class="drop-down"><a href="#">About</a>
            <ul>
              <li><a href="#mission">Our Mission</a></li>
              <li><a href="#vision">Our Vision</a></li>
            </ul>
          </li>

          <li  class="drop-down"><a href="countries.php">Countries</a>
<ul>
<li><a js-scroll-trigger text-black" href="#">UK</a></li>
                               <li> <a  js-scroll-trigger text-black" href="#">Ethiopia</a></li>
                                <li><a  js-scroll-trigger text-black" href="#">France</a></li>
                                <li><a  js-scroll-trigger text-black" href="#">Nepal</a></li>
                                <li><a js-scroll-trigger text-black" href="#">Netherland</a></li>
                                <li><a  js-scroll-trigger text-black" href="#">Nigeria</a></li>
                                <li><a  js-scroll-trigger text-black" href="#">Russia</a></li>
                                <li><a js-scroll-trigger text-black" href="#">Sri Lanka</a></li>
                                <li><a js-scroll-trigger text-black" href="#">Taiwan</a></li>
                                <li><a js-scroll-trigger text-black" href="#">Uganda</a></li>
                                <li><a  js-scroll-trigger text-black" href="#">Zimbamwe</a></li></ul>
</li>
          <li><a href="activities.php">Activities</a></li>
          <li class="drop-down"><a href="program.php">Programs</a>
               <ul>
              <li class="drop-down"><a href="young-leaders.php">Young Leaders</a>
                 <ul>
                  <li><a href="quest.php">Creative Quest</a></li>
                  <li><a href="improve.php">Vision For Improvement</a></li>
                  <li><a href="waste.php">Creative Waste Management</a></li>
                  <li><a href="reading.php">Happy Reading</a></li>
                  <li><a href="dignity.php">Dignity of Work</a></li>
                </ul></li>
              <li class="drop-down"><a href="">Webinars</a> <ul>
                  <li><a href="e-class.php">E-Class</a></li>
                  <li><a href="levelup.php">Level Up</a></li>
                  <li><a href="wings.php">Soaring for Wings</a></li>
                </ul></li>
              <li><a href="prograce.php">Prograce</a></li>
          <li><a href="sunshine.php">Sunshine</a></li>
              <li><a href="kindle.php">Kindle</a></li>
              <li><a href="spring.php">Spring</a></li>
              <li><a href="ignite.php">ignite</a></li></ul>

</li>
          <li><a href="blog.php">Blog</a></li>
          <li><a href="news.php">Newsletters</a></li>
          <li><a href="signup.html" target="_blank" class="btn btn-sm btn-primary btn-block text-center p-3" style="width: 110px; height: 50px;" role="button">Sign Up</a></li>

        </ul>

      </nav><!-- .nav-menu -->

</div>
    </div>
  </header><!-- End Header -->
</section>
<!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
            <div class="mx-auto text-center">
<div class="tooltipi">
                <h1 class="mx-auto my-0" style="font-family:<?php echo font("a1");?>;Color:<?php echo color("a1");?>;" contenteditable=<?php echo $edit;?> id="a1" onblur='saveText("a1")'><?php if(fetch("a1"))
{echo fetch("a1");
}
else
{ echo"Empowering power!!!";
}?></h1><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor1" onChange='color("a1","myColor1")'>
<select class="form-control" id="font2" onChange='font("a1","font2")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>


                <a id="volunteer" class="btn btn-primary js-scroll-trigger mt-5" href="signup.html" >Volunteer With
                    Us</a>
            </div>
        </div>
    </header>

<input type='file' id='a2' class="abc" oninput='image("a2")'/>
<!-- Projects-->
    <section class="projects-section bg-light">
        <div class="container">
            <!-- Featured Project Row-->
            <div class="row align-items-center no-gutters mb-4 mb-lg-5" id="about">
                <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" style="width: 700px; height: 600px;"
                        src="
<?php if(fetch("a5"))
{echo "img/".fetch("a5");} 
else
{echo"https://adoreearth.org/wp-content/uploads/2020/04/safsaf.jpeg";} ?>" />
<input type="file" id="a5" class="abc" oninput='image("a5")'/>

</div>

                <div class="col-xl-4 col-lg-5">
                    <div class="featured-text text-center text-lg-left">
<div class="tooltipi">

                        <h2 style="font-family:<?php echo font("a3");?>;Color:<?php echo color("a3");?>;"contenteditable=<?php echo $edit;?> id="a3" onblur='saveText("a3")'><?php if(fetch("a3"))
{echo fetch("a3");
}
else
{ echo"About us";
}?></h2><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor" onChange='color("a3","myColor")'>
<select class="form-control" id="font1" onChange='font("a3","font1")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>
<div class="tooltipi">
                        <p class="50 mb-0" contenteditable=<?php echo $edit;?> id="a4" onblur='saveText("a4")' style="font-family:<?php echo font("a4");?>;Color:<?php echo color("a4");?>;"><?php
if(fetch("a4"))
{echo fetch("a4");
}
Else{
Echo"Adore is a global voluntary group of college students and
                            professionals, who have come forward together to motivate the budding youth into taking
                            positive action. We conduct interactive sessions for children in schools, communities,
                            children’s homes, shelter homes so that they feel a sense of belongingness and flair as
                            successful and countable professional in the arena of their career, emerge as aware and
                            responsible citizens and better human beings.

                            The interactive sessions are on various subjects from Cleanliness to Soft skills, from
                            Career Orientation to Self-Development, etc. Our volunteers are located all over the world.
                            We DO NOT collect any funds for its work as all its associates work voluntarily."; }?></p><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor3" onChange='color("a4","myColor3")'>
<select class="form-control" id="font4" onChange='font("a4","font4")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>
                    </div>
                </div>
            </div>
<!-- Project One Row-->
            <section id="projects">
                <div id="mission" class="row justify-content-center no-gutters mb-5 mb-lg-0">
                    <div class="col-lg-6"><img class="img-fluid" style="height: 500px;"
                            src="
<?php if(fetch("a7"))
{echo "img/".fetch("a7");} 
else
{echo"https://adoreearth.org/wp-content/uploads/2020/02/WhatsApp-Image-2020-02-04-at-2.19.45-PM.jpeg";} ?>"  />
<input type="file" id="a7"class="abc" oninput='image("a7")'/>


                            </div>
                    <div class="col-lg-6">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-left">
<div class="tooltipi">

                                    <h2 class="" style="font-family:<?php echo font("a6");?>;Color:<?php echo color("a6");?>;" contenteditable=<?php echo $edit;?> id="a6" onblur='saveText("a6")'> <?php
if(fetch("a6"))
{echo fetch("a6");
}
Else{
Echo"Our Mission";
} ?></h2><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor2" onChange='color("a6","myColor2")'>
<select class="form-control" id="font3" onChange='font("a6","font3")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>
<div class="tooltipi">

 <p class="mb-0 text-50" contenteditable=<?php echo $edit;?> id="a9" onblur='saveText("a9")' style="font-family:<?php echo font("a9");?>;Color:<?php echo color("a9");?>;"><?php
if(fetch("a9"))
{echo fetch("a9");
}
Else{
Echo"Our neighbourhood, our Society, our world is our own,
                                        it’s our home. It’s our’s to take care of, our’s to improve, our’s to mold into
                                        a bundle of joy for everyone. Our aim is to inspire the youth, as a whole to
                                        dedicate their time and channelize their ideas into some positive and productive
                                        actions which improves their knowledge, polishes their skills, and enrich their
                                        thought process.

                                        As the youth volunteers come forward to work in their surroundings, they also
                                        benefit immensely. They develop confidence, communication and managerial skills,
                                        nurtures the much needed dynamism in them and the contentment of working with a
                                        meaningful cause is immense.";}?></p><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor4" onChange='color("a9","myColor4")'>
<select class="form-control" id="font5" onChange='font("a9","font5")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>

                                    <hr class="d-none d-lg-block mb-0 ml-0" />
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
                <!-- Project Two Row-->
                <div id="vision" class="row justify-content-center no-gutters">
                    <div class="col-lg-6" id="img1"><img class="img-fluid"style="width: 600px;"
                            src="<?php if(fetch("a8"))
{echo "img/".fetch("a8");} 
else
{echo"https://adoreearth.org/wp-content/uploads/2020/02/WhatsApp-Image-2020-02-04-at-2.18.10-PM-300x225.jpeg";} ?>"  />
<input type="file" id="a8" class="abc" oninput='image("a8")'/>
                            </div>
                    <div class="col-lg-6 order-lg-first">
                        <div class="text-center h-100 project">
                            <div class="d-flex h-100">
                                <div class="project-text w-100 my-auto text-center text-lg-right">
                                   <div class="tooltipi">
 <h2 class="" style="font-family:<?php echo font("a10");?>;Color:<?php echo color("a10");?>;" contenteditable=<?php echo $edit;?> id="a10" onblur='saveText("a10")'>
<?php
if(fetch("a10"))
{echo fetch("a10");
}
Else{
Echo"
Our Vision";}?></h2><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor5" onChange='color("a10","myColor5")'>
<select class="form-control" id="font6" onChange='font("a10","font6")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>


<div class="tooltipi">

                                    <p class="mb-0 text-50" contenteditable=<?php echo $edit;?> id="a11" onblur='saveText("a11")' style="font-family:<?php echo font("a11");?>;Color:<?php echo color("a11");?>;"><?php
if(fetch("a11"))
{echo fetch("a11");
}
Else{
Echo"
Our mission is to create a platform for the youth
                                        where they can reach out to perform their social responsibilities.";}?></p><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor6" onChange='color("a11","myColor6")'>
<select class="form-control" id="font7" onChange='font("a11","font7")'>
       <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>

                                    <hr class="d-none d-lg-block mb-0 mr-0" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

                <!-- ------------------------------------------->

<section class="signup-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-8 mx-auto text-center">
                    <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
<div class="tooltipi">                   
 <h1 class="text-capitalize mb-3" contenteditable=<?php echo $edit;?> id="a12" onblur='saveText("a12")' style="font-family:<?php echo font("a12");?>;Color:<?php echo color("a12");?>;"><?php
if(fetch("a12"))
{echo fetch("a12");
}
Else{
Echo"
Get in touch now";}?></h1>
<span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor7" onChange='color("a12","myColor7")'>
<select class="form-control" id="font8" onChange='font("a12","font8")'>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>


<div class="tooltipi">
                    <p class="text" contenteditable=<?php echo $edit;?> id="a13" onblur='saveText("a13")' style="font-family:<?php echo font("a13");?>;Color:<?php echo color("a13");?>;">
<?php
if(fetch("a13"))
{echo fetch("a13");
}
Else{
Echo"Come, join hands with us in full-filling our social responsibility and
                        spreading smiles.
                        Email:contact@adoreearth.org";}
?>
                    </p><span class="tooltiptext"><div class="form-group">
text color:<input type="color" id="myColor8" onChange='color("a13","myColor8")'>
<select class="form-control" id="font9" onChange='font("a13","font9")'>
        <option selected disabled>-font-</option>
        <option selected disabled>-font-</option>
        <option value="Baskerville"> Libre+Baskerville </option>
        <option value="Kufam">Kufam</option>
        <option value="Grandstander">Grandstander</option>
        <option value="Annie Use Your Telescope">Annie Use Your Telescope</option>
      <option value="Pacifico">Pacifico</option>pe">Annie Use Your Telescope</option>
      <option value="Barrio">Barrio</option>
      <option value="Bungee Shade">Bungee Shade</option></select>

</div></span>
</div>

                    <button class="btn btn-primary mx-auto" data-toggle="modal" type="button"
                        data-target="#contactform">Contact Us</button>
                    <div class="modal fade" id="contactform" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Contact Us</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="p-3">
                                        <form action="#">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        <label for="fname" class="mr-auto">First name</label>
                                                    </div>
                                                </div>
                                                <input type="text" name="fname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-3">
                                                        <label for="lname" class="mr-auto">Last name</label>
                                                    </div>
                                                </div>
                                                <input type="text" name="lname" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2">
                                                        <label for="email" class="mr-auto">Email</label>
                                                    </div>
                                                </div>
                                                <input type="email" name="email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-2 col-md-2">
                                                        <label for="cn" class="mr-auto">Contact</label>
                                                    </div>
                                                </div>
                                                <input type="number" name="cn" class="form-control">
                                            </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
<input type="file"  class="abc" id="a14" oninput='image("a14")'/>
                <!-- ------------------------------------------->

<div class="container page-top">

<p  class="abc" style='margin-left:200px;' onclick='display("ima")'> <I class='fa fa-edit icon'></I></p>
<div id="ima" style='float:right; display:none;'><input type="file" id='a15'oninput='image("a15")'/><input type="file" id='a16' oninput='image("a16")'/><input type="file" id='a17' oninput='image("a17")'/><input type="file" id='a18' oninput='image("a18")'/><input type="file" id='a19'oninput='image("a19")'/><input type="file" id='a20' oninput='image("a20")'/><input type="file" id='a21' oninput='image("a21")'/><input type="file" id='a22' oninput='image("a22")'/></div>

        <div class="row">


            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a15"))
{echo "img/".fetch("a15");} 
else{
Echo"https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a15"))
{echo "img/".fetch("a15");} 
else{
Echo"https://images.pexels.com/photos/62307/air-bubbles-diving-underwater-blow-62307.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                   
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a16"))
{echo "img/".fetch("a16");} 
else{
Echo"https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>"  class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a16"))
{echo "img/".fetch("a16");} 
else{
Echo"https://images.pexels.com/photos/38238/maldives-ile-beach-sun-38238.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="zoom img-fluid"  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a17"))
{echo "img/".fetch("a17");} 
else{
Echo"https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a17"))
{echo "img/".fetch("a17");} 
else{
Echo"https://images.pexels.com/photos/158827/field-corn-air-frisch-158827.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a18"))
{echo "img/".fetch("a18");} 
else{
Echo"https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a18"))
{echo "img/".fetch("a18");} 
else{
Echo"https://images.pexels.com/photos/302804/pexels-photo-302804.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a19"))
{echo "img/".fetch("a19");} 
else{
Echo"https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a19"))
{echo "img/".fetch("a19");} 
else{
Echo"https://images.pexels.com/photos/1038914/pexels-photo-1038914.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a20"))
{echo "img/".fetch("a20");} 
else{
Echo"https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a20"))
{echo "img/".fetch("a20");} 
else{
Echo"https://images.pexels.com/photos/414645/pexels-photo-414645.jpeg?auto=compress&cs=tinysrgb&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a21"))
{echo "img/".fetch("a21");} 
else{
Echo"https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a21"))
{echo "img/".fetch("a21");} 
else{
Echo"https://images.pexels.com/photos/56005/fiji-beach-sand-palm-trees-56005.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
             <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a href="<?php if(fetch("a22"))
{echo "img/".fetch("a22");} 
else{
Echo"https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="fancybox" rel="ligthbox">
                    <img  src="<?php if(fetch("a22"))
{echo "img/".fetch("a22");} 
else{
Echo"https://images.pexels.com/photos/1038002/pexels-photo-1038002.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940";}?>" class="zoom img-fluid "  alt="">
                </a>
            </div>
            
            
           
           
       </div>


    </div>


  <button class="btn btn-primary btn-sm js-scroll-trigger" onclick="topfunction()" id="topbtn" title="Go on top"><i
            class="fa fa-arrow-up"></i></button>
<footer id="footer" style="background:#003649;color:white;">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <br><h3>ADORE EARTH</h3>
            <p>
              <br><br>
              <strong>Phone:</strong>+91 79804 60134
<br>
              <strong>Email:</strong> contact@adoreearth.org<br>
            </p>
          </div>



        </div>
      </div>
    </div>

    <div class="container "col-lg-4 col-md-6 "> 
     <form action="index.php" method="post" enctype="multipart/form-data">
     <?php if(!$webrow){
Echo"<button type='submit' name='save' style='color:white;background-color:#009970;float:right;border: 2px solid white; margin-right:50px;' name='change'>submit/confirm</button>";}?>
</form>
    </div>
  </footer><!-- End Footer -->
    <!-- Footer-->
    <footer class="footer bg-primary small text-center text-white-50">Copyright ©Infovue</footer>

<?php
$que="SELECT * FROM webs WHERE domain='ae' ";
$res = mysqli_query($conn, $que);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
if($row){
?>
<script>
var x = document.getElementsByClassName("abc");
var y = document.getElementsByClassName("tooltiptext");

for(i=0;i<x.length;i++)
  {
  x[i].style.display = "none";
  }

for(i=0;i<y.length;i++)
  {
  y[i].style.display = "none";
  } </script>
<?php
}
?>

<script>
function saveText(c){
      var xr = new XMLHttpRequest();
      var url = "save.php";
      var text = document.getElementById(c).innerHTML;
      var vars = "newText="+text;
       var name="domain="+ '<?php echo $title; ?>';
 var file="page="+'<?php echo $page;?>';
      var id= "id="+c;
      xr.open ("POST",url,true);
      xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xr.send(vars+"&"+id+"&"+name+"&"+file);
    }
function image(c){
var formData = new FormData();
formData.append("img", document.getElementById(c).files[0]);
formData.append("id",c);
formData.append("domain",'<?php echo $title; ?>');
formData.append("page",'<?php echo $page;?>');

      var id= "id="+c;
      var xr = new XMLHttpRequest();
      var url = "save.php";
      xr.open ("POST",url,true);
      xr.send(formData);
    }
function color(c,d){
var xr = new XMLHttpRequest();
      var url = "save.php";
      var text = document.getElementById(d).value;
      var vars = "color="+text;
document.getElementById(c).style.color=text;
 var name="domain="+ '<?php echo $title; ?>';
 var file="page="+'<?php echo $page;?>';
      var id= "id="+c;
      xr.open ("POST",url,true);
      xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xr.send(vars+"&"+id+"&"+name+"&"+file);
    }
function font(c,d){
var xr = new XMLHttpRequest();
      var url = "save.php";
      var text = document.getElementById(d).value;
      var vars = "font="+text;
document.getElementById(c).style.fontFamily=text;
 var name="domain="+ '<?php echo $title; ?>';
 var file="page="+'<?php echo $page;?>';
      var id= "id="+c;
      xr.open ("POST",url,true);
      xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xr.send(vars+"&"+id+"&"+name+"&"+file);
    }
function display(c){
document.getElementById(c).style.display="block";
}
</script>
    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
  $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
    
    $(".zoom").hover(function(){
		
		$(this).addClass('transition');
	}, function(){
        
		$(this).removeClass('transition');
	});
});
   


</script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
 <script src="https://assets.ivdata.in/cms/adoreearth/js/jquery.min.js"></script>  

 <script src="https://assets.ivdata.in/cms/adoreearth/js/main.js"></script>  

</body>

</html>
