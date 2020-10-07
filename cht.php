<?php
$conn = mysql_connect("localhost","root","follower1990") or die();
 $con = mysql_select_db("del") or die("error selecting db!");
$ro = "SELECT demul , ex ,ph FROM data ";
$u = mysql_query($ro);
while($row = mysql_fetch_array($u)){
$d[] ="{ Day: '" . $row["demul"] . "' }";
$ex[] = round($row["ex"],0);
$ph[] = round($row["ph"]);
}
$oo = implode(",",$d);
$ot = implode(",",$ex);
$ph = implode(",",$ph);

?>


<html>
<head>
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
<?php echo $oo; ?>
            ];

            var Keith = [
<?php echo $ot; ?>
   
            ];
			
			            var ph = [
<?php echo $ph; ?>
   
            ];

    
            // prepare jqxChart settings
            var settings = {
                title: "Fitness & exercise weekly scorecard",
                description: "Time spent in vigorous exercise",
                enableAnimations: true,
                showLegend: true,
                padding: { left: 5, top: 5, right: 40, bottom: 5 },
                titlePadding: { left: 90, top: 0, right: 0, bottom: 10 },
                source: days,
                source: days,
                xAxis:
                {
                    dataField: 'Day',
                    gridLines: { visible: true }
                },
                colorScheme: 'scheme02',
                valueAxis:
                {
                    visible: true,
                    title: { text: 'Time in minutes' }
                },
                seriesGroups:
                    [
                        {
                            type: 'stackedline',
                            source: Keith,
                            series: [
                                  {displayText: 'Keith' }
                            ]
                        },
						
						    {
                            type: 'stackedline',
                            source: ph,
                            series: [
                                  {displayText: 'ph' }
                            ]
                        },

                    ]
            };

            // setup the chart
            $('#jqxChart').jqxChart(settings);
        });
    </script>
</head>
<body>

	 <div style='height: 600px; width: 682px;'>
        <div id='host' style="margin: 0 auto; width: 850px; height: 400px;">
            <div id='jqxChart' style="width: 850px; height: 400px; position: relative; left: 0px; top: 0px;">
            </div>
        </div>
    </div>
<div style="width:670px; height:400px" id="jqxChart"></div>
</body>
</html>