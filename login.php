<html>
<head>
<title>Mobile Kart</title>
<style>
body{
display:flex;align-items:center;justify-content:center;
}
#d{
background-color:white;width:35%;border-radius:5%;
}
#i1{
height:150px;width:150px;
}
#p1{
font-size:35px;font-weight:bold;
}
#p{
font-size:25px;font-weight:bold;
}
.a1{
height:35px;width:280px;
}
.s1{
height:30px;width:280px;background-color:#FF8C00;font-weight:bold;border-color:#FF8C00;
}
.s1:hover{
	height:40px;width:300px;font-size:15px;
}

#ah1{
font-size:20px;
}
.t1{
text-decoration:none;color:#800000;
}
</style>
</head>
<body style="background-image:url('https://media.istockphoto.com/vectors/online-shopping-store-with-mobile-applicationdigital-marketing-and-vector-id1254797486');background-size:cover;">
<div id="d">
<table>
<tr style="position:relative;left:22%">
<td>
<img src="Mo kart.jpg" id="i1">
</td>
<td>
<p style="color:red;"id="p1">Mobile Kart</p></td>
</tr>
</table>
<form style="margin-left:20%;" method="post">
<p id="p">Sign into Your Account</p>
<input type="text"  placeholder="Customer_id" class="a1" name="e"><br><br><br>
<input type="text"  placeholder="Password" class="a1" name="pass1"><br><br><br>
<input type="submit" value="Login" name="login" class="s1"><br><br><br>
<table><tr><td>
<p style="font-size:20px">Don't have Account?</p></td>
<td>
<a href="http://localhost/Register.php" id="ah1"><u>Register</u></a></td></tr></table><br>
<pre style="font-size:20px;font-family:Times New Roman">
<a href="terms.html"  class="t1">Terms of Use</a>       <a href="privacy.html" class="t1">Privacy Policy</a>
</pre>
<?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "password";
                    $database = "Mobile_store";
                    $conn = new mysqli($servername,$username,$password,$database);
                    if($conn->connect_error)
					{
                      die("connection denied!!!!!" . $conn->connect_error);
                    }
                        
                    if($_SERVER["REQUEST_METHOD"]=="POST")
                    {
                        $customerid=$_POST["e"];
                        $pass1=$_POST["pass1"];

                        $sql = "select * from details where customer_id = '$customerid' and Password = '$pass1'";  
                        $result = mysqli_query($conn, $sql);  
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                        $count = mysqli_num_rows($result);  

                        if($count == 1){
                           header("Location:Home page.html");
                           echo "success";
                        }
                        else{
                          echo "no account found";
                        }
                    }
                ?>

</div>
</body>
</html>