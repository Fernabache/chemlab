<html>
<head>
<title>DelSak-</title>
<link rel="stylesheet" href="style/style.css" type="text/css"/>
</head>
<body>
<div class="head"><center>
<img src="image/timlab.png" class="im"/>
</center>
</div>



<div align="center">
<div class="bor">
	<fieldset class="fed"><legend class="leg">Compute all Parameters</legend>
<form method="POST" action="figure.php">
<table cellpadding="10px"cellspacing="0px" border="0px">
	
<tr>
<td>C<sub>1</sub></td>
<td><input type="text" name="cone" required="required" class="bm"/></td>

<td>C<sub>2</sub></td>
<td><input type="text" name="ctwo" required="required" class="bm"/></td>

<td>C<sub>3</sub></td>
<td><input type="text" name="cthree" required="required" class="bm"/></td>

<td>i-C<sub>4</sub></td>
<td><input type="text" name="icfour" required="required" class="bm"/></td>

<td>n-C<sub>4</sub></td>
<td><input type="text" name="ncfour" required="required" class="bm"/></td>

<td>i-C<sub>5</sub></td>
<td><input type="text" name="icf" required="required" class="bm"/></td>

</tr>


<tr>
<td>n-C<sub>5</sub></td>
<td><input type="text" name="ncf" required="required" class="bm"/></td>

<td>n-C<sub>7</sub></td>
<td><input type="text" name="ncs" required="required" class="bm"/></td>

<td>n-C<sub>8</sub></td>
<td><input type="text" name="nco" required="required" class="bm"/></td>

<td>n-C<sub>9</sub></td>
<td><input type="text" name="ncn" required="required" class="bm"/></td>

<td>n-C<sub>10</sub></td>
<td><input type="text" name="ncd" required="required" class="bm"/></td>

<td>Ethyln</td>
<td><input type="text" placeholder="" required="required" name="et" class="bm"/></td>

</tr>


<tr>
<td>Propyln</td>
<td><input type="text" name="pln" required="required" placeholder="" class="bm"/></td>

<td>n<sub>l</sub>(assume)</td>
<td><input type="text" name="nl" required="required" placeholder="" class="bm"/></td>

<td>n<sub>g</sub>(assume)</td>
<td><input type="text" name="ng" required="required" placeholder="" class="bm"/></td>

<td>T(<sup>o</sup>F)</td>
<td><input type="text" name="ng" required="required" placeholder="" class="bm"/></td>

<td>P(psia)</td>
<td><input type="text" name="ng" required="required" placeholder="" class="bm"/></td>


<td></td>
<td>
</td>

<td></td>
<td>

</td>

</tr>

</table>
<hr style="margin-top:2%;"/>
<input type="hidden" name="codevalidation" value="<?php echo sha1("Me is the developer of this timlab?");?>"/>
<input type="submit" class="bbn" style="margin-top:2%;" value="Calculate"/>
</form>
</fieldset>
</div>

</div>


</body>
</html>
