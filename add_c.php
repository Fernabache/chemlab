<div class="read">

<h3 style="padding-bottom:10px;border-bottom:1px dashed black">UPLOAD TEST DATA FOR ANALYSIS </h3>
<?php
require("result_upload.php");
?>


<?php
if(isset($_POST['subb'])){

$cat = $_POST['cate'];

$title = "";
if(isset($_POST["title"])){
foreach($_POST["title"] as $key){
$title = $key;
}

}

if(empty($cat)){
$msg = "<script type='text/javascript'>alert('Database Table Creation Failed! Please Check Your Connection')</script>";
echo $msg;
}
else{

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


$select = "INSERT INTO test_categories(under ,categories , reg_date) VALUES('$title' ,'$cat' , now())";
$valid = "SELECT * FROM test_categories WHERE categories  = '$cat' AND under  = '$title'  ";
$validate = mysql_query($valid) ;
$validnum = mysql_num_rows($validate);

if ($validnum != 1){

$resul = mysql_query($select) ;
if($resul){
$msg = "<script type='text/javascript'>alert('$title added successfully!!')</script>";
echo $msg;

}
else{
$msg = "<script type='text/javascript'>alert('Unable to query Database!!')</script>";
echo $msg;

}
}

else{

$msg = "<script type='text/javascript'>alert('$title Category Already Exist!!')</script>";
echo $msg;

}
}
}
}
else{
$msg = "<script type='text/javascript'>alert('parameter!!')</script>";

}
?>

<h3 style="padding-bottom:10px;border-bottom:1px dashed black">ADD TEST NAME</h3>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
<table cellpadding="5px" cellspacing="5px">
<tr>
<td>Test Categories</td>
<td>
<select name="titlel[]" class="optn">
<?php include('cats.php');?>
</select></td>

</tr>

<tr>
<td>Categories</td>
<td>
<select name="title[]" class="optn">
<option value="LabTest">Corrosion Rate Test </option>

</select>

</td>

</tr>


<tr>
<td>Add Title</td>
<td>
<input type="text" required="" autocomplete="off" class="textn" name="cate" placeholder="Add Title"/>
</td>

</tr>

<tr>
<td><input type="hidden" value="dacracker" name="subb" /></td>
</td>
<td>
<input type="image" class="wlo" src="image/sb.png" /></td>

</tr>

</table>

</form>


<h3 style="padding-bottom:10px;border-bottom:1px dashed black">DELETE TEST NAME</h3>

<form action="<?php echo $_SERVER['PHP_SELF'];?>"  method="POST">
<table cellpadding="5px" cellspacing="5px">
<tr>
<td>All Categories</td>
<td>
<select name="delth[]" class="optn">
<?php include('cats.php');?>
</select></td>

</tr>



<tr>
<td><input type="hidden" value="dacracker" name="categh" /></td>
</td>
<td>
<input type="image"  class="wlo" src="image/dell.png" /></td>

</tr>

</table>

</form>


<?php

if(isset($_POST['categh'])){


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


$select = "DELETE FROM test_categories WHERE categories  = '$delth'";
$valid = "SELECT * FROM test_categories WHERE categories  = '$delth'";
$validet = "DELETE FROM data WHERE test_cat  = '$delth'";
$validett = "DELETE FROM data_branch WHERE test_cat  = '$delth'";
$validate = mysql_query($valid) ;
$validnum = mysql_num_rows($validate) ;

if($validnum != 0){
$resule = mysql_query($validet) ;
$resulee = mysql_query($validett) ;
$resul = mysql_query($select) ;
if($resul){
$msg = "<script type='text/javascript'>alert('$delth deleted successfully!!')</script>";
header("location:result.php");

}
else{
$msg = "<script type='text/javascript'>alert('Unable to query Database!!')</script>";
echo $msg;

}
}

else{

$msg = "<script type='text/javascript'>alert('$delth Category Does not Exist!!')</script>";
echo $msg;

}
}
}
else{
$msg = "<script type='text/javascript'>alert('parameter!!')</script>";

}
?>

<?php
require("view.php");
?>
</div>
