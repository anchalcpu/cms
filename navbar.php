<?php
Include"connect.php";
$page="ncnfv";
$title="cms";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Antlo | Component</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Adore"/>

    <!-- fontawesome icon -->
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.php" class="b-brand">
                    
                    <span><img src="assets/images/logo.png" alt="" class="imglogo"></span>
                    
                    <span class="b-title">Antlo</span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar ">
                    <li  class="nav-item active">
                        <a href="index.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    <li class="nav-item pcoded-hasmenu">
                        <a href="components.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Components</span></a>
                        <ul class="pcoded-submenu">
                           
                    
                        <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Navbars</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Sliders</span></a>
                    </li>
                    <li  class="nav-item ">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-maximize"></i></span><span class="pcoded-mtext">Galleries</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-slack"></i></span><span class="pcoded-mtext">Articles</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-tag"></i></span><span class="pcoded-mtext">Services</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Contacts</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-corner-right-down"></i></span><span class="pcoded-mtext">Footers</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Cards</span></a>
                    </li>
                   
                </ul>
            </li>
                   <li class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Pages</span></a>
                        <ul class="pcoded-submenu">
                           
                    
                        <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-credit-card"></i></span><span class="pcoded-mtext">Index.html</span></a>
                    </li>
                    <li  class="nav-item">
                        <a href="" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Add more</span></a>
                    </li>
</ul>
</li>  
<li class="nav-item">
                        <a href="settings_form.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Add new Web</span></a></li>
                    
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.php" class="b-brand">
                   <div class="bg">
                    <span><img src="assets/images/logo.png" alt="" class="imglogo"></span>
                   </div>
                   <span class="b-title">Antlo</span>
               </a>
        </div>
        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
            
                
            </ul>
            <ul class="navbar-nav ml-auto">

                <li>
                    <a href="#"><i class="icon feather icon-plus-circle" style="font-size: 18px;" title="add new designs"></i> </a>
                </li>
               
                <li>
                   
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"style="font-size: 18px;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
<?php 
if(isset($_COOKIE["fname"])){
Echo"<span> {$_COOKIE["fname"]}</span>";
}
Else{
Echo"<span>USER NAME</span>";}
?>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="settings form/index.html" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="viewprofile.php" class="dropdown-item"> <i class="feather icon-user"></i> Profile</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
                
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="main row">
                <div class="templateholder col-3">
                <div class="Nav" id="navbar"> 
                    <kbd><b>Headers</b></kbd><br>
                  <img src="images/g.png" alt="">
                  <img src="assets/images/slider/img-slide-2.jpg" alt="">
                </div>
                <div class="secSliders" id="slider">
                    <kbd><b>sliders</b></kbd><br>
                    <img src="images/h.png" alt="">
                    <img src="assets/images/slider/img-slide-2.jpg" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
                  <div class="secGal" id="gallery">
                    <kbd><b>Gallery</b></kbd><br>
                    <img src="images/b.png" alt="">
                    <img src="assets/images/slider/img-slide-2.jpg" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
<div class="secArt" id="article">
                    <kbd><b>Articles</b></kbd><br>
                    <img src="images/a.png" alt="">
                    <img src="assets/images/slider/img-slide-2.jpg" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
<div class="secSer" id="service">
                    <kbd><b> Services</b></kbd><br>
                   <p onclick='save("Aghd")' id="header"> <img src="images/c.png" alt=""></p>
                    <img src="images/d.png" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
<div class="secCar" id="card">
                    <kbd><b> Cards</b></kbd><br>
                    <img src="images/i.png" alt="">
                  </div>
<div class="secCon" id="contact">
                    <kbd><b> Contacts</b></kbd><br>
                    <img src="images/e.png" alt="">
                    <img src="assets/images/slider/img-slide-2.jpg" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
<div class="secCon" id="footer">
                    <kbd><b> Footers</b></kbd><br>
                    <img src="images/f.png" alt="">
                    <img src="assets/images/slider/img-slide-2.jpg" alt="">
                    <img src="assets/images/slider/img-slide-3.jpg" alt="">
                  </div>
                </div>

                
                <div class="col-8 consolescreen text-center" id="cms">
<?php
Include"services1.php";

Include"services2.php";

?><p id="abc"></p>
                </div>
              </div>
              
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                   
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            
                               
                              
                             
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->


    <!-- Required Js -->
<script>
$(document).ready(function(){
   $('#header').click(function(){

   $('#cms').load("#cms"+"services2.php");

});

});

function save(c){
      var xr = new XMLHttpRequest();
      var url = "saves.php";
      var vars = "section="+c;

       var name="domain="+ '<?php echo $title; ?>';
 var file="page="+'<?php echo $page;?>';
      document.getElementById("abc").innerHTML=name;

      xr.open ("POST",url,true);
      xr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
      xr.send(vars+"&"+name+"&"+file);
    }

function display(c) {
  var elmnt = document.getElementById(c);
  elmnt.scrollIntoView({ behavior: 'smooth', block: 'start' });
}
</script>
   

<script src="assets/js/vendor-all.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/pcoded.min.js"></script>

    <script>
        function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the link that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
} 
 
    </script>
</body>
</html>
