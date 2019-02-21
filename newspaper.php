<!DOCTYPE html>
<html>
<head>
	<title>Inktop Home</title>
	<link rel="stylesheet" type="text/css" href="styled.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea,input[type=email],input[type=tel] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  display: block;
  margin-left: auto;
  margin-right: auto;
}

input[type=submit]:hover {
  background-color: #45a049;
  transform: scale(1.1);
}

.containerform {
  border-radius: 5px;
  background: #eacda3;
  background: -webkit-linear-gradient(to right, #eacda3, #d6ae7b);
  background: linear-gradient(to right, #eacda3, #d6ae7b);
  padding: 20px;
  width: 850px;
  
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.newi{
	display: block;
  margin-left: auto;
  margin-right: auto;
}
.hvr-buzz-out{
	border-radius: 6px;
}
</style>
</head>
<body class="newsbody" style="background-image: url(http://midcitiesonline.com/images/newspaperbackground.jpg);">
<div class="container">
  <span class="text1news">Welcome to</span>
  <span class="text2">Inktop Publishers</span>
  
</div>
<img src="http://builderindia.in/images/inktop_logo.jpg" class="logo">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<hr size="6" class="line">
<br>
<!--<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdEAccUqPWiONybAYbbhrCWlQ2R2zY2_7kY7FoCPucp0LL_sQ/viewform" width="100%" height="800px" ></iframe>-->
<br><br>
<p class="downloads"><b>Click on the following button to view and download our newspaper  </b>  
<a href="http://online.flipbuilder.com/azhg/szxi/" download><button class="hvr-buzz-out"><b>Download</b></button></a>
</p>
<br><br>

<?php
$servername = "localhost";
$username="root";
$password="";
$dbname="logindb";
try{
$conn = mysqli_connect($servername, $username,$password,$dbname);
echo("");
}catch(MySQLi_Sql_Exception $ex){
echo("error in connection");
}
if(isset($_POST['submit'])){
$email=$_POST['email'];
$lookingfor=$_POST['lookingfor'];
$mobileno=$_POST['mobileno'];
$name=$_POST['name'];
$altemail=$_POST['altemail'];
$altmobileno=$_POST['altmobileno'];
$category=$_POST['category'];
$ad=$_POST['ad'];
$register_query =        "INSERT INTO `form`(`email`, `lookingfor`, `mobileno`, `name`, `altemail`, `altmobileno`, `category`, `ad`) VALUES ('$email','$lookingfor','$mobileno','$name','$altemail','$altmobileno','$category','$ad')";
try{
$register_result = mysqli_query($conn, $register_query);
if($register_result){
if(mysqli_affected_rows($conn)>0){

}else{
echo("error in registration");
}
 
}
}catch(Exception $ex){
echo("error".$ex->getMessage());
}
}
 
?>

<div class="containerform">
<form action="" method="post">
	<p><label for="email">Email Address: </label>
    <input type="email" id="email" name="email" placeholder="example@example.com" required></p>
    
    <p><label for="lookingfor">You Looking For?</label> <br><br>
    <input type="radio" id="lookingfor1" name="lookingfor" value="Bride">Bride <br><br>
    <input type="radio" id="lookingfor2" name="lookingfor" value="Groom">Groom </p> <br>
    <p><label for="mobileno">Mobile Number(For Official Purposes)</label>
    <input type="tel" name="mobileno" size="10" pattern="^\d{10}$" placeholder="Enter your mobile number" required></p>
    <p><label for="name">Name of the Candidate</label>
    <input type="text" name="name" id="name" placeholder="Enter candidate name" ></p>
    <p><label for="altemail">Alternate Email ID </label>
    <input type="email" id="altemail" name="altemail" placeholder="example@example.com"></p>
    <p><label for="altemail">Alternate Mobile Number </label>
    <input type="text" id="altmobileno" name="altmobileno" placeholder="Alternate Mobile Number" size="10"></p>
    <p><label for="category">Category to be Listed in (You are looking for Life Partner from this Category)</label><br>
    <select id="category" name="category">
      <option value="" disabled selected>Choose the category to be listed</option>
      <option value="castenobar">Caste No Bar</option>
      <option value="Agarwal/Aggarwal/Jain">Agarwal/Aggarwal/Jain</option>
      <option value="Punjabi/Sikh">Punjabi/Sikh</option>
      <option value="Arora/Khatri">Arora/Khatri</option>
      <option value="Doctor">Doctor</option>
      <option value="Engineer">Engineer</option>
      <option value="alliedservices">Allied Services (IAS/PCS)</option>
      <option value="Brahmin">Brahmin</option>
      <option value="Sindhi">Sindhi</option>
      <option value="NRI">NRI</option>
      <option value="differentlyabled">Differently Abled</option>
      <option value="Divorcee/Re-Marriage/Widow">Divorcee/Re-Marriage/Widow</option>
      <option value="manglik">Manglik</option>
      <option value="scstobc">SC/ST/OBC</option>
      <option value="jaat">Jaat</option>
    </select></p>
    <p><label for="ad">AD Message to be Displayed</label>
    <textarea id="subject" name="ad" placeholder="Any message to be displayed" style="height:200px"></textarea></p>
    <br>
    
    <input type="submit" value="Submit" name="submit">
</form>
</div>
</body>
</html>
</body>
</html>