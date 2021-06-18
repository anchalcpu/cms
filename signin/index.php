<?php
Include"connect.php";
if(isset($_POST["Signup"])){
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$password=$_POST["password"];
$contact=$_POST["phone"];
$confirm_password=$_POST["confirm_password"];
$rs=mysqli_query($conn,"select * from register where email='$email'")or die("Error: " . mysqli_error($conn));
if(mysqli_num_rows($rs)>0)
{
Echo'<script>alert("this Email Id is already registered")</script>';
}
Else{
if($confirm_password == $password)
{$password=md5($password); 
$sql="insert into register(fname, lname, email,contact, password) values('$fname','$lname','$email','$contact','$password')";
$conn->query($sql)or die("Error: " . mysqli_error($conn));

}
Else
{
Echo'<script>alert("password does not match try again")</script>';

}

}
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script> 
    <link rel="stylesheet" href="https://assets.ivdata.in/cms/signin/style.css" />
    <title>Sign in & Sign up Form</title>
<style>

.forgot{
  box-shadow: 0 5px 55px rgba(0,0,0,0.5);
Padding:20px;
height:70%;
Width:95%;
background:url("img/a.png");
Background-repeat:no-repeat;
Background-size:100% 100%;
Position:fixed;
  animation-name: example;
  animation-duration: 0.7s;
  z-index: 3;
Margin-top:20%;
Display:none;
}
@keyframes example {
  0%   { left:0px; top:-300px;height:0;}
  100% { left:0px; top:0px; }
}
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}
.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="../login.php" method="post" class="sign-in-form" id="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Email Id" name="email"/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password"/>
            </div>
            <p style="Color:blue;" onclick="display()">Forgot password?</p>

            <input type="submit" value="Login" name="Login" class="btn solid" />

          </form>
<div class="forgot" id="forgot" >
    <span class="close" onclick="remove()">&times;</span>

<center><div class="input-field" style="margin-top:10%;" >
              <i class="fa fa-envelope"></i>
              <input type="email" placeholder="Email Id" name="email" />
            </div>
            <input type="submit" value="Send link" name="Login" style="margin-left:15%;margin-top:5%;" class="btn solid" /></center>

</div>
          <form action="index.php" method="post" class="sign-up-form">
            <h3 class="title">Sign up</h3>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="First Name" name="fname"/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Last Name" name="lname"/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email Id"  name="email"/>
            </div>



                                    <div class="input-field ">
                                      <i class="fas fa-lock"></i>
                                        <input type="password" name="password" id="password" placeholder="Password" class="form-control" required/>
                        
                                    </div>


                                <div class="input-field ">
                                      <i class="fas fa-lock"></i>

                                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" class="form-control" oninput="pass()" required/>

                                </div>
<p id="demo"></p>



<div class="input-field">
<i class="fa fa-phone login-user" aria-hidden="true"></i>

                                        <input type="text"  placeholder="Contact No." name="phone" id="phone"  maxlength="10" minlength="10" class="form-control" pattern="[0-9]+" value="" required/>
                                            </div>

                                </select>


            <input type="submit" class="btn" value="Signup" name="Signup"/>
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
             
            </p> 
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
            
            </p> 
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
<script>
 function pass(){
 var c=document.getElementById("confirm_password").value;
 var d=document.getElementById("password").value;

if(c==d)
 { document.getElementById("demo").innerHTML = "matching";
  document.getElementById("demo").style.color = "green";

}
 else
  { document.getElementById("demo").innerHTML = "password does not match";
  document.getElementById("demo").style.color = "red";

}

}
 function display(){
 document.getElementById("forgot").style.display="block";

}
function remove(){
 document.getElementById("forgot").style.display="none";

}
</script>
    <script src="https://assets.ivdata.in/cms/signin/app.js"></script>
  </body>
</html>
