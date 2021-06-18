<?php
Include"connect.php";
$section=$_POST["section"];
$domain=$_POST["domain"];
$page=$_POST["page"];
if ($section!=""){
 $sql="insert into sections(domain,page,name) values('$domain','$page','$section')";
$conn->query($sql)or die("Error: " . mysqli_error($conn));
}

$newText = $_POST["newText"];
$c=$_POST["id"];
$domain=$_POST["domain"];
$page=$_POST["page"];
if ($newText!=""){
$query="select * from edit where domain= '$domain' AND page='$page' AND text_id='$c' ";
$res=mysqli_query($conn,$query);
$rows = mysqli_fetch_array($res);
if(is_array($rows)) {
$sql="UPDATE edit SET text = '$newText' WHERE domain= '$domain' AND page='$page' AND text_id='$c' ";
	$result = mysqli_query($conn,$sql);}
Else{
 $sql="insert into edit(domain,page,text_id,text) values('$domain','$page','$c','$newText')";
$conn->query($sql)or die("Error: " . mysqli_error($conn));}
}

$image = $_FILES["img"]["name"];
$file_tem=$_FILES["img"]["tmp_name"];
$store="img/".$image;
if($image!=""){
$query="select * from edit where domain= '$domain' AND page='$page' AND text_id='$c' ";
$res=mysqli_query($conn,$query);
$rows = mysqli_fetch_array($res);
if(is_array($rows)) {
$sql="UPDATE edit SET text = '$image' WHERE domain= '$domain' AND page='$page' AND text_id='$c' ";
	$result = mysqli_query($conn,$sql);
move_uploaded_file($file_tem,$store);
}
Else{
 $sql="insert into edit(domain,page,text_id,text) values('$domain','$page','$c','$image')";
$conn->query($sql)or die("Error: " . mysqli_error($conn));
move_uploaded_file($file_tem,$store);}

}
$color = $_POST["color"];
if ($color!=""){
	$sql="UPDATE edit SET color = '$color' WHERE  domain= '$domain' AND page='$page' AND text_id='$c' ";
	$result = mysqli_query($conn,$sql);
}
$font = $_POST["font"];
if ($font!=""){
	$sql="UPDATE edit SET font = '$font' WHERE  domain= '$domain' AND page='$page' AND text_id='$c' ";
	$result = mysqli_query($conn,$sql);
}
$back = $_FILES["back"]["name"];
$sectionbg=$_POST["sectionbg"];

$file_tem1=$_FILES["back"]["tmp_name"];
$store="img/".$back;
if($back!=""){
$sql="UPDATE sections SET background = '$back' WHERE domain= '$domain' AND page='$page' AND name ='$sectionbg' ";
	$result = mysqli_query($conn,$sql);
move_uploaded_file($file_tem1,$store);


}

?>