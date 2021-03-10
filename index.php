<?php
if(isset($_POST['submit'])){
  $ssc = trim($_POST['ssc']);
  $hsc = trim($_POST['hsc']);
  $cgpa = trim($_POST['cgpa']);
  $verbal = trim($_POST['verbal']);
  $logical = trim($_POST['logical']);
  $quants = trim($_POST['quant']);
  $my_command = escapeshellcmd("python ./model.py " .$ssc. " " .$hsc. " " .$cgpa. " " .$verbal. " " .$logical. " " .$quants);
  $command_output = shell_exec("$my_command 2>&1");
}
?>
<!-- PHP MYADMIN ABOVE -->
<html>
<!--From https://codepen.io/frytyler/pen/EGdtg-->
<head>
  <meta charset="UTF-8">
  <title>Salary Prediction</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
<style>
body {
  background-image: url('C:\Users\Swapnil\Desktop\SalaryPrediction\media-handler.jfif');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
</style>
  
</head>

<body>
 <div class="login">
	<h1><center>Predict Salary Analysis &#128176;</center></h1>


  <form action="" method="POST">
    
    <input type="text" name="ssc" placeholder="10 %" required="required" />
    <input type="text" name="hsc" placeholder="12 %" required="required" />
    <input type="text" name="cgpa" placeholder="CGPA in %" required="required" />
    <input type="text" name="verbal" placeholder="Verbal" required="required" />
    <input type="text" name="logical" placeholder="Logical" required="required" />
    <input type="text" name="quant" placeholder="Quants" required="required" />
    <input type="submit" name="submit" value="submit">		</form>
<?php
 echo "<center> $command_output</center>";
?> 

 </div>


</body>
</html>