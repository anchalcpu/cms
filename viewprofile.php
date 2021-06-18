<?php 
include"connect.php";
include"signin/login.php";
if(isset($_COOKIE["email"])){
$email=$_COOKIE["email"];
}
$email="dsgfv";
$query="select * from register where email= '$email'";
$res=mysqli_query($conn,$query);
$rows = mysqli_fetch_array($res);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Antlo | View Profile</title>
 
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
    <link rel="stylesheet" href="assets/css/viewprofile.css">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
   <!--
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    -->

</head>

<body>
    <!-- [ Pre-loader ] start -->
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
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- [ breadcrumb ] start -->
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            
                        </div>
                    </div>
                </div>
                <!-- [ breadcrumb ] end -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            
                            <!------ Include the above in your HEAD tag ---------->
                            
                            <div class="container emp-profile">
                                        <form method="post">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="profile-img">
                                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="profile-head">
                                                                <h5>
<?php 
Echo"<span> {$rows["fname"]}</span>";


?>
                                                                     </h5>
                                                                <h6>
<?php
if(isset($rows["profession"])){
Echo"<span> {$rows["profession"]}</span>";}
Else{
Echo"Profession:";
}
?>

                                                                   
                                                                </h6>
                                                           
                                                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="profile-work">
                                               <p>SKILLS</p>
<?php 
Echo"<a>{$rows["skills"]}</a><br/>";

?><a href="">Web Designer</a><br/>
                                                        <a href="">Web Developer</a><br/>
                                                        <a href="">WordPress</a><br/>
                                                        <a href="">WooCommerce</a><br/>
                                                        <a href="">PHP, .Net</a><br/>
                                                    </div>
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="tab-content profile-tab" id="myTabContent">
                                                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                                    
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Name</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><?php 
Echo"{$rows["fname"]}";


?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Email</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><?php 
Echo"{$rows["email"]}";

?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Phone</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><?php 
Echo"{$rows["contact"]}";

?></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Profession</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p><?php 
Echo"{$rows["profession"]}";
?>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                                                   
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label>Total Projects</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <p>230</p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <label>Your Bio</label><br/>
                                                                    <p>Your detail description</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>           
                                    </div>
                           
                        </div>
                            <!-- [ tabs ] end -->
                    </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- [ Main Content ] end -->

    

   
    <!-- Required Js -->
<script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="assets/js/pcoded.min.js"></script>

</body>
</html>
