
<?php
$qu=$_POST['quantity'];
	$qus=$_POST['quantitys'];
		$qum=$_POST['quantitym'];
	$con=mysqli_connect('localhost:3307','root','','Table1');
	if(!$con){
		echo "Not connected";
}
	if(isset($_POST['submit'])){
		echo"********************************************************************************************* YOUR ORDER *******************************************************************************";
		echo "<br><br><br>";
	if(!empty($_POST['beverages'])) {
	$checked_count = count($_POST['beverages']);
	echo "=========="."You have selected following BEVERAGES:-==============<br><br>";
	foreach($_POST['beverages'] as $key => $selected) {
	echo $selected."=====>".$qu[$key] ;
	echo"<br>";
	$name=$selected;
	$i=0;
	if($name=="Coffee")
	{$i= 1;}
if($name=="Tea"){
$i= 2;}
if($name=="HotChocolate")
{$i =3;}
if($name=="SoftDrinks")
{$i= 4;}
if($name=="PaneerChilli")
{$i= 5;}
if($name=="PaneerKebab")
{$i= 6;}
if($name=="CheeseBalls")
{	$i= 7;}
if($name=="ChilliChicken")
{	$i= 8;}
if($name=="WhitePasta")
{	$i= 9;}
if($name=="BBQPizza")
{	$i= 10;}
if($name=="CheeseMacroni")
{$i= 11;}
if($name=="Roti")
{$i= 12;}
if($name=="PaneerChilliMasala")
{	$i =13;}
$sql="insert into tb1(ItemNo,Quantity) values ($i,$qu[$key])";
mysqli_query($con,$sql);
	}
	}
	
		if(!empty($_POST['Starters'])) {
	$checked_count = count($_POST['Starters']);
	echo "=============="."You have selected following STARTERS:-===============<br><br>";
	foreach($_POST['Starters'] as $keys=>$selected) {
	echo $selected."=====>".$qus[$keys];
	echo"<br>";
	$name=$selected;
	if($name=="Coffee")
	{$i= 1;}
if($name=="Tea"){
$i= 2;}
if($name=="HotChocolate")
{$i =3;}
if($name=="SoftDrinks")
{$i= 4;}
if($name=="PaneerChilli")
{$i= 5;}
if($name=="PaneerKebab")
{$i= 6;}
if($name=="CheeseBalls")
{	$i= 7;}
if($name=="ChilliChicken")
{	$i= 8;}
if($name=="WhitePasta")
{	$i= 9;}
if($name=="BBQPizza")
{	$i= 10;}
if($name=="CheeseMacroni")
{$i= 11;}
if($name=="Roti")
{$i= 12;}
if($name=="PaneerChilliMasala")
{	$i =13;}
$sql="insert into tb1(ItemNo,Quantity) values ($i,$qus[$keys])";
mysqli_query($con,$sql);
}
	}

		if(!empty($_POST['Main'])) {
	$checked_count = count($_POST['Main']);
	echo "=============="."You have selected following MAIN COURSE:-===============<br><br>";
	foreach($_POST['Main'] as $keyz=>$selected) {
	echo $selected."======> ".$qum[$keyz];
	echo "<br>";
	$name=$selected;
	if($name=="Coffee")
	{$i= 1;}
if($name=="Tea"){
$i= 2;}
if($name=="HotChocolate")
{$i =3;}
if($name=="SoftDrinks")
{$i= 4;}
if($name=="PaneerChilli")
{$i= 5;}
if($name=="PaneerKebab")
{$i= 6;}
if($name=="CheeseBalls")
{	$i= 7;}
if($name=="ChilliChicken")
{	$i= 8;}
if($name=="WhitePasta")
{	$i= 9;}
if($name=="BBQPizza")
{	$i= 10;}
if($name=="CheeseMacroni")
{$i= 11;}
if($name=="Roti")
{$i= 12;}
if($name=="PaneerChilliMasala")
{	$i =13;}
$sql="insert into tb1(ItemNo,Quantity) values ($i,$qum[$keyz])";
mysqli_query($con,$sql);
	}
	}
	}	
?>


<html>
<head>
<style>
   .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
  margin-left:700px;
}

.button1 {
  background-color: white; 
    margin-left:700px;
  color: black; 
  border: 2px solid #4CAF50;
}
.button1:hover {
  background-color: #4CAF50;
    margin-left:700px;
  color: white;
  align:middle;
}
</style>
</head>
<body>
<form method="post" action="expo.php">
<input type="submit" class= "button button1" Value="CONFIRM" name="CONFIRM">
</form> 
<a href="new.html" ><p style="align:center; font-size:20px;">Press here to Continue</p></a>
<p style="color:red;font-size:15px;">*please confirm order before proceding</p>
</body>
</html>
