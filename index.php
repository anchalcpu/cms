<?php 
include"connect.php";
include"signin/login.php";


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <title>Antlo | HOME</title>
 
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
                        
                       <div class="preview">
                           <span class="mydivouter">
                            <img src="assets/images/slider/img-slide-1.jpg" alt="">
                            <input type="button" value="Edit this" class="mybuttonoverlap btn-primary">
                           </span>
                           <span class="mydivouter">
                            <img src="assets/images/slider/img-slide-2.jpg" alt="">
                            <input type="button" value="Edit this" class="mybuttonoverlap btn-primary">
                           </span>
                           <span class="mydivouter">
                            <img src="assets/images/slider/img-slide-3.jpg" alt="">
                            <input type="button" value="Edit this" class="mybuttonoverlap btn-primary">
                           </span>


                           <span class="mydivouter">
                            <img src="assets/images/slider/add.png" alt="">
                          <a href="settings_form.php">  <input type="button" value="Add New" class="mybuttonoverlap btn-warning"></a>
                           </span>
                           
                           
                        </div>
                            <!-- [ tabs ] end -->
                    </div>
                        <!-- [ Main Content ] end -->
                    </div>
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
