<?php
if(isset($_POST["codevalidation"]) && !empty($_POST["codevalidation"])){
	
	require_once("functions.php");
	$t = 460 + $_POST["t"];
	$p = $_POST["p"];
	
	$cone = $_POST["cone"];
	$ctwo = $_POST["ctwo"];
	$cthree = $_POST["cthree"];
	
	$icfour = $_POST["icfour"];
	$ncfour = $_POST["ncfour"];
	$icf = $_POST["icf"];
	$ncf = $_POST["ncf"];
	$nch = $_POST["ncs"];
	$nco = $_POST["nco"];
	
	$ncn = $_POST["ncn"];
	$ncd = $_POST["ncd"];
	
	$et = $_POST["et"];
	$pln = $_POST["pln"];
	
	$nl = $_POST["nl"];
	$ng = $_POST["ng"];
	
	

	
	
	
	/**
	$form_one = exp(((-$a/($t*$t)) + $b - ($c * log($p)) + ($d/($p*$p))));
	
	$form_two = exp(((-$a/($t*$t)) + $b - ($c * log($p)) + ($d/($p))));
	
	$form_three = exp(((-$a/($t)) + $b - ($c * log($p))));
	
	*/
	
	
	
	
	}
	else{
	
	?>
	<script type="text/javascript" language="javascript">
	alert("Parameter Missing!pls try again");
	window.location="./";
	</script>
	<?php	
		
		}

?>
