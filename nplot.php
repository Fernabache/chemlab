
<?php
if(isset($_GET["use"])){
$use = $_GET["use"];
$conn = mysql_connect("localhost","root","follower1990") or die();
 $con = mysql_select_db("kay") or die("error selecting db!");
$ro = "SELECT id ,weight , density ,time , crt , area FROM data WHERE test_cat='$use'";
$u = mysql_query($ro);
while($row = mysql_fetch_array($u)){
$id[] ="{ id: '" . $row["id"] . "' }";
$weight[] = abs(round($row["weight"],0));
$dens[] = abs(round($row["density"],0));
$crt[] = abs(round($row["crt"],0));
$are[] = abs(round($row["area"],0));
$time[] = abs(round($row["time"],0));

}
$i = implode(",",$id);
$w = implode(",",$weight);
$den = implode(",",$dens);
$crrt = implode(",",$crt);
$are = implode(",",$are);
$tim = implode(",",$time);
}else{
echo "Parameter missing!";
exit();
}
?>


<html>
<head>
<title>Kayne</title>
<link rel="stylesheet" href="style/style.css" type="text/css"/>

    <!-- add the jQuery script -->
    <script type="text/javascript" src="/del/jq/scripts/jquery.js"></script>	
    <!-- add the jQWidgets framework -->
    <script type="text/javascript" src="/del/jq/jqwidgets/jqxcore.js"></script>
    <!-- add one or more widgets -->
    <script type="text/javascript" src="/del/jq/jqwidgets/jqxbuttons.js"></script>
    <!-- add the jQWidgets base styles and one of the theme stylesheets -->
    <link rel="stylesheet" href="/del/jq/jqwidgets/styles/jqxbase.css" type="text/css" />
    <link rel="stylesheet" href="/del/jq/jqwidgets/styles/jqxdarkblue.css" type="text/css" />
		<script type="text/javascript" src="/del/jq/jqwidgets/jqxcore.js"></script>
	<script type="text/javascript" src="/del/jq/jqwidgets/jqxchart.js"></script>	
	<script type="text/javascript" src="/del/jq/jqwidgets/jqxdata.js"></script>
    <script type="text/javascript" src="/del/jq/jqwidgets/jqxdraw.js"></script>
    <script type="text/javascript" src="/del/jq/jqwidgets/jqxchart.core.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
            // prepare chart data as an array
            var days = [
<?php echo $i; ?>
            ];

            var weight = [
<?php echo $w; ?>
   
            ];
			
			           var density = [
<?php echo $den; ?>
   
            ];
			
			           var crt = [
<?php echo $crrt; ?>
   
            ];
			
			           var areaa = [
<?php echo $are; ?>
   
            ];
			
			           var tim = [
<?php echo $tim; ?>
   
            ];
			


    
            // prepare jqxChart settings
            var settings = {
                title: "Plot of corrosion rates",
                description: "This is a plot showing corrosion rates",
                enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 40, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: days,
                source: days,
                xAxis:
                {
                    dataField: 'id',
                    gridLines: { visible: true }
                },
                colorScheme: 'scheme02',
                valueAxis:
                {
                    visible: true,
                    title: { text: 'id' }
                },
                seriesGroups:
                    [
                        {
                            type: 'stackedline',
                            source: weight,
                            series: [
                                  {displayText: 'weight' }
                            ]
                        },
						
						                {
                            type: 'stackedline',
                            source: density,
                            series: [
                                  {displayText: 'density' }
                            ]
                        },
						
						                {
                            type: 'stackedline',
                            source: crt,
                            series: [
                                  {displayText: 'corrosion rate`' }
                            ]
                        },
						
						                {
                            type: 'stackedline',
                            source: areaa,
                            series: [
                                  {displayText: 'area' }
                            ]
                        },
						
						                {
                            type: 'stackedline',
                            source: tim,
                            series: [
                                  {displayText: 'time' }
                            ]
                        },
						
		

                    ]
            };

            // setup the chart
            $('#jqxChart').jqxChart(settings);
        });
    </script>
</head>
<body style="background-color:lightgreen;">
<div class="head"><center>
<img src="image/del.png" class="im"/>
</center>
</div>
<div style="margin-top:2%;margin-left:2%;margin-right:2%;">
<h3 style='letter-spacing:4pt;border-top:1px solid black;border-bottom:1px solid black;padding:10px;text-align:center;margin-bottom:2%;'>&raquo;CHART PLOT FOR <?php echo strtoupper($use);?>&laquo;</h3>

	 <div style='height: 600px; width: 682px;margin-left:20%;'>
        <div id='host' style="margin: 0 auto; width: 850px; height: 400px;">
            <div id='jqxChart' style="width: 850px; height: 400px; position: relative; left: 0px; top: 0px;">
            </div>
        </div>
    </div>
<div style="width:670px; height:400px;" id="jqxChart"></div>

</div>
</body>
</html>


