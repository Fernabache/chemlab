<form action="importer.php" method="post" name="upload_excel" enctype="multipart/form-data">
						
<table cellpadding="5px" cellspacing="5px">

<tr>
<td>Test Categories</td>
<td>
<select name="type[]" required="" class="optn">
						<?php include('cats.php');?>
							</select>
</td>

</tr>
<tr>
<td>Corrosion Cause</td>
<td>
<select name="kem[]" class="optn">
<option value="Oxygen">Oxygen</option>
<option value="Galvaniz">Galvaniz</option>
<option value="Hydrogen Sulphide">Hydrogen Sulphide</option>
<option value="Chromium">Chromium</option>
<option value="Oxygen">Oxygen</option>
<option value="Oxygen">Oxygen</option>
</select> 

</td>

</tr>



<tr>
<td>Test Data (.csv)</td>
<td>
<input type="file" required="" name="file" id="" class=""/>
</td>

</tr>

<tr>
<td><input type="hidden" value="dacracker" name="subb" /></td>
</td>
<td>
<input type="image" class="wlo" src="image/ad.png" /></td>

</tr>

</table>
</form>