<html>
<head>
<title>Register</title>
<style>
*{font-family:sans-serif;}
<!--f1{
display:flex;align-items:center;justify-content:center;
}-->
#f1{
background-color:white;width:45%;border-radius:5%;
margin:auto;
margin-top:50px;
}
.a1{
height:30px;width:200px;
}
label{
font-size:20px;margin-left:5px;
}
#s1{
height:35px;width:150px;background-color:#FF8C00;font-weight:bold;border-color:#FF8C00;font-size:17px;
}
#p1{
color:red;
}
<?php
$conn = new mysqli("localhost","root","password","Mobile_store");
if($conn -> connect_error){
echo "not connected successfully";
}
else
echo "connected successfully" ;
?>
</style>
</head>
<body style="background-image:url('https://static.vecteezy.com/system/resources/previews/001/370/039/non_2x/online-shopping-concept-with-mobile-phone-free-vector.jpg')">
<div id="f1">
<form style="margin-left:10%;padding:20px;" method="get">
<h1>Register</h1>
<label>Name</label><br><br>
<input type="text" name="reg" class="a1" placeholder="Name"><br><br>
<label>Password</label><br><br>
<input type="Password" name="pass1" class="a1" placeholder="Password" id="ps1" onkeyup="pass()"><span style="color:red;" id="pr1"></span><br><br>
<label>Confirm Password</label><br><br>
<input type="Password" name="pass2" class="a1" placeholder="Confirm Password" id="ps2" onkeyup="check()"><span style="color:red;" id="pr2"></span><br><br>
<label>Phone Numer</label><br><br>
<table>
<tr><td>
<input type="number" name="dep" placeholder="Phone Numer" class="a1" id="d1" onkeyup="depi();"></td>
<td>
<p id="p1" ></p></td></tr></table>
<br><br>
<input type="submit" value="Create Account" name="submit" id="s1" onclick="tick()">
</form>
</div>
<?php
if(isset($_GET["submit"])){
          session_start();
          $name=$_GET["reg"];
          $pass1=$_GET["pass1"];
          $pass2=$_GET["pass2"];
          $ph=$_GET["dep"];
          $sql= $conn->prepare("Insert into details(Name,Password,Phone_no) VALUES (?,?,?)");
          $sql->bind_param("sss",$name,$pass1,$ph);
          $sql->execute();
}
?>

<script>
function depi()
{
var a=document.getElementById("d1").value;
if(a>9999999999)
{
document.getElementById("p1").innerHTML="Enter 10 numbers only";
document.getElementById("d1").style.border="5px solid red";
}
else
{
document.getElementById("p1").innerHTML="";
document.getElementById("d1").style.border="5px solid green";
}
}
function pass(){
var b=document.getElementById("ps1").value;
var c=document.getElementById("ps2").value;
var ch3,ch4,format = /[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]+/,format1 = /\d/;
if(format.test(b)){
      ch3=true;}
else{
ch3=false;}
if(format1.test(b)){
ch4=true;}
else{
ch4=false;}
if(  b.length < 6 ||!ch3 || !ch4  ){
document.getElementById("pr1").innerHTML="!! Invalid password";
document.getElementById("ps1").style.border="5px solid red";
}
else
{
document.getElementById("pr1").innerHTML="";
document.getElementById("ps1").style.border="5px solid green";
}}
function check(){
var d=document.getElementById("ps1").value;
var e=document.getElementById("ps2").value;
if(d != e){
document.getElementById("pr2").innerHTML="!! Mismatch Password";
document.getElementById("ps2").style.border="5px solid red";
}
else
{
document.getElementById("pr2").innerHTML="";
document.getElementById("ps2").style.border="5px solid green";
}
}
function tick()
{
window.open('123.html');

}
</script>
</body>
</html>



