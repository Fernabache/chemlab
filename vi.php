<html>
<head>
<title>KAYNE-CORROSION RATE TEST RESULT</title>
<link rel="stylesheet" href="style/style.css" type="text/css"/>
</head>
<body>
<div class="head"><center>
<img src="image/del.png" class="im"/>
</center>
</div>

<div class="brdd">


<?php

if(isset($_POST['viewtest'])){


$delth = "";
if(isset($_POST["delth"])){

foreach($_POST["delth"] as $key){

$delth = $key;
}

}

require_once("connection.php");

$mysqlCommand = "
CREATE TABLE IF NOT EXISTS test_categories(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL ,
under TEXT NOT NULL,
categories TEXT NOT NULL,
reg_date TEXT NOT NULL
)
";
$queryTable = mysql_query($mysqlCommand);
if(!$queryTable){

$msg = "<script type='text/javascript'>alert('Database Table Creation Failed! Please Check Your Connection')</script>";
echo $msg;

}
else{
$validr = "SELECT * FROM data_branch WHERE test_cat  = '$delth' ";
$resuly = mysql_query($validr) ;
$tu = mysql_fetch_array($resuly);
$cc = $tu["corrosion_c"];

$valid = "SELECT * FROM data WHERE test_cat  = '$delth'";
$resul = mysql_query($valid) ;
$validnum = mysql_num_rows($resul);

if($validnum != 0){
?>
<h3 style='letter-spacing:4pt;border-top:1px solid black;border-bottom:1px solid black;padding:10px;text-align:center;margin-bottom:1%;'>&raquo;TEST RESULT FOR <?php echo strtoupper($delth);?>&laquo;</h3>
<table cellpadding="10px" border="1px" width="100%" class="red" cellspacing="0px"><tr align='left'><th>No.</th><th>Weight</th><th>Density.</th><th>Area</th><th>Time</th><th>Corrosion Rate</th></tr>
<?php
$counter = 0;
while($row=mysql_fetch_array($resul)){
$counter++;
$id = $row["id"];
$de = $row["weight"];
$ph = $row["density"];
$kd = $row["area"];
$hlb = $row["time"];
$k = $row["crt"];


?>
<tr>
<td><?php echo $counter;?></td>
<td><?php echo $de;?></td>
<td><?php echo $ph;?></td>
<td><?php echo $kd;?></td>
<td><?php echo $hlb;?></td>
<td><?php echo $k;?></td>


</tr>

<?php

}
?>
</table>
<div class="di">
<p>Parameters Given:&nbsp;&nbsp;&nbsp;&nbsp;  <b>Corrosion Cause = <?php echo $cc;?></b></p>
<center>

<img src="image/delplot.png" onclick="parent.location='nplot.php?use=<?php echo $delth;?>'" style="width:300px;padding:10px;"/>
</center>
</div>

<?php
}
else{

$msg = "<script type='text/javascript'>alert('Data not found for $delth!')</script>";
echo $msg;

}
}
}
else{
$msg = "<script type='text/javascript'>alert('parameter!!')</script>";

}
?>

</div>


</body>
</html>
