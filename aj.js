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