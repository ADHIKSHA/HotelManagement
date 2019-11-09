<?php error_reporting(0); ?>
<?php  
$name=$_POST['Uname'];
$email=$_POST['Email'];
$no=$_POST['Phone'];
$star=$_POST['Nostar'];
$con=mysqli_connect('localhost:3307','root','','users');
mysqli_select_db($con,'users');
$sql="insert into user values ('Adhiksha','asthorat@gmail.com',8850492990,1)";
if(isset($_POST['submit']))
{
$sql="insert into feed(Name,Phone,Email,stars) values ($name,$email,$no,$star)";
mysqli_query($con,$sql);
mysqli_close($con);
}
?> 

<?php  
$file=file('process.csv');
foreach($file as $k){
$csv[]=explode(',',$k);

}
$status=($csv[1][0]);
$wait="wait.html";
if($status =="ready")
	{$img_link="ready.jpg";$acti="hello.php";$time="it's here!";}
else
{	$img_link="load.gif";
$time=($csv[1][1]);
}
?>  
<html>
<head>
<title>STATUS</title>
</head>
<body><br><br>
<p style="background:#F7F7F7;text-align:center;font-size:140%;">KNOW THE STATUS OF YOUR DISH</p>
<br><br><br><br>
<p style="text-align:center;background-color:#4CAF50;font-size:200%;">STAGE<br></p><p align="center" style="text-align:center;font-size:200%;background-color:red;width:100px;margin-left: auto;
  margin-right: auto;display:block;"><?php echo $status?></p>
<p style="text-align:center;font-color:green;font-size:150%;">It will take more:-<?php echo $time?> minutes</p>
<br>
<img src=<?php echo $img_link; ?> style="display: block;  margin-left: auto;  margin-right: auto;width: 20%;height:40%;" align="centre">
<br>
<a href=<?php if($status=="ready") echo $acti; else echo $wait; ?> ><p style="font-size:200%;">CLICK HERE TO END EXPERIENCE!</p></a>
</body>
</html>
