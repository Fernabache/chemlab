<?php include("auth.php");?>
<html>
<head>
<title>
TGN - Data Management Page
</title>
<link rel="stylesheet" href="style/style.css" type="text/css"/>
</head>
<body >
<center>
<img src="image/admincp.png" onclick="parent.location='index.php'" id="img" style="width:30%;" alt="cpanel"/></center>
<center><h2 style="letter-spacing:3px;font-size:12pt">&raquo; ADD PHOTO CATEGORIES &laquo;</h2></center>
<script type="text/javascript" src="ajax.js"></script>
<script type="text/javascript" src="ajaxsearch.js"></script>
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript">
function tim(){
setInterval("result()" ,2000);

}
tim();
</script>

<center>
<?php
if(isset($_GET['msg']) && !empty($_GET['msg'])){
$g = $_GET['msg'];
echo "<p style='text-align:center;color:gray'>&raquo; $g &laquo;</p>" ;

}

?>


</center>
<div style="margin-left:3%;margin-right:3%;">
<?php include("add_c.php");?>
</div>
</body>
</html>