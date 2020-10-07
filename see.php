 <?php
/**
 * Charts 4 PHP
 *
 * @author Shani <support@chartphp.com> - http://www.chartphp.com
 * @version 1.2.3
 * @license: see license.txt included in package
 */
 $conn = mysql_connect("localhost","root","follower1990") or die();
 $con = mysql_select_db("del") or die("error selecting db!");
$ro = "SELECT demul , ex FROM data ";
$u = mysql_query($ro);
while($row = mysql_fetch_array($u)){
$d[] = $row["demul"];
$ex[] = abs(round($row["ex"],0));
}
$oo = implode(",",$d);
$ot = implode(",",$ex);

include("chart/lib/inc/chartphp_dist.php");
	$p = new chartphp();

	// set few params
	$p->data = array(array(implode(",",$ex)),array(implode(",",$d)));
	$p->chart_type = "line";

	// render chart and get html/js output
	$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="chart/lib/js/jquery.min.js"></script>
        <script src="chart/lib/js/chartphp.js"></script>
        <link rel="stylesheet" href="chart/lib/js/chartphp.css">
    </head>
    <body>
        <div style="width:40%; min-width:450px;">
            <?php echo $out; ?>
        </div>
    </body>
</html>



 
