<html>
<head>php</head>
<body>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $fname=$_POST["fname"]; 
 $lname=$_POST["lname"]; 
 $uname=$_POST["uname"]; 
 $pname=$_POST["password"]; 
 $gname=$_POST["gender"]; 
 $aname=$_POST["option"];
 $phname=$_POST["tel"];  

 echo"First Name : $fname<br>";
 echo"Last Name  : $lname<br>";
 echo"User Name  : $uname<br>";
 echo"Password   : $pname<br>";
 echo"Gender     : $gname<br>";
 echo"Academic Year : $aname<br>";
 echo"Phone No   : $phname<br>";
}

?>
</body>
</html>