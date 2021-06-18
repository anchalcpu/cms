<?php
include"connect.php";
$title="ae";

$page="dignity";
function fetch($id){
include"connect.php";
$title="ae";
$page="dignity";

$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['text'];
 return $data;
}
function color($id){
include"connect.php";
$title="ae";
$page="dignity";
$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['color'];
return $data;
}
function font($id){
include"connect.php";
$title="ae";
$page="dignity";
$sql = "SELECT * FROM edit WHERE domain= '$title' AND page='$page' AND text_id='$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$data = $row['font'];
return $data;
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <title>Dignity</title>
    <!--

    Template 2107 New Spot

	http://www.tooplate.com/view/2107-new-spot

    -->
    <link rel="stylesheet" href="style2.css">
      <script src="https://kit.fontawesome.com/0d794f7638.js" crossorigin="anonymous"></script>



<style>

</style>
</head>

<body>
 <section id="home">
  <header id="header" class="fixed-top ">
<div class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">

    <div class="container" style="background:white; margin-top:20px;">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo"> <img height="100" width="200" src="https://adoreearth.org/wp-content/uploads/2020/02/save-300x103.png" alt="Adore Earth" style="max-height: 75px;"> </a>


      <nav class="nav-menu d-none d-lg-block" >


        <ul class="navbar-nav ml-auto">
          <li class="active"><a href="index.php">Home</a></li>

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
    <div class="tm-container mx-auto">
       
        <section id="tm-section-2" class="tm-section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left">
                        <h2 class="tm-color-secondary mb-4"  contenteditable=<?php echo $edit;?> id="b1" onblur='saveText("b1")'><?php
if(fetch("b1"))
{echo fetch("b1");
}
Else{
Echo"
Lorem ipsum dolor site";}?></h2>
                        <p class="mb-4"  contenteditable=<?php echo $edit;?> id="b2" onblur='saveText("b2")'><?php
if(fetch("b2"))
{echo fetch("b2");
}
Else{
Echo"
Nullam erat dolor, ullamcorper et nisi nec, porta portitor nisi. Quisque lobortis sem ut facilisis
                            mattis. Sed eu pellentesque sapien, a finibus eros. Nunc ut ultricies augue.";}?></p>
                        <p class="mb-5" contenteditable=<?php echo $edit;?> id="b3" onblur='saveText("b3")'><?php 
if(fetch("b3"))
{echo fetch("b3");
}
Else{
Echo"
Mauris sagittis dui arcu, sed luctus metus faucibus nec. Sed vulputate ipsum massa, ut dapibus purus
                            volutpat vel. Interdum et malesuada fames ac ante.";}?></p>

                    </div>
                    <div class="col-xl-7 col-lg-6 tm-circle-img-container">
                        <img  class="rounded-circle tm-circle-img" src="<?php if(fetch("b4"))
{echo "img/".fetch("b4");} 
else{
Echo"
img/img-01.jpg" ;}?>" >
<input type="file" class="abc" id='b4' oninput='image("b4")'/>

                    </div>

                </div>
            </div>
        </section>
       
        
    </div>
<footer id="footer" style="background:#003649;color:white;">

    <div class="footer-top">
      <div class="container">
        <div class="row">
<br>
          <div class="col-lg-4 col-md-6 footer-contact">
            <br><h3>ADORE EARTH</h3>
            <p>
              <strong>Phone:</strong>+91 79804 60134<br>
              <strong>Email:</strong> contact@adoreearth.org<br>
            </p>
          </div>



        </div>
      </div>
    </div>

  </footer><!-- End Footer -->
    <!-- Footer-->
    <footer class="footer bg-primary small text-center text-white-50">Copyright ©Infovue</footer><?php
$que="SELECT * FROM webs WHERE domain='ae' ";
$res = mysqli_query($conn, $que);
$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
if($row){
?>

<script>
var x = document.getElementsByClassName("abc");

for(i=0;i<x.length;i++)
  {
  x[i].style.display = "none";
  }
 </script>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
 <!-- Third party plugin JS-->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
 <!-- Core theme JS-->
 <script src="js/scripts.js"></script>  
 <script src="js/main.js"></script>  
 <script src="js/jquery.min.js"></script>  

</body>
</html>