<?php include('chart.php');
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="../../code/js/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style><div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		
	</head>
	<body>
<script src="../../code/js/highchart1.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<?php  charts(); ?>

	</body>
</html>
