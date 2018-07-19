<?php include 'php/database.php';?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generico</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<style>
	.panel-heading{
	color:red;
	}
	</style>
	
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				
				<a class="navbar-brand" href="#"><span>Generico</span></a>
			
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	


	<?php foreach($query as $r): ?>
	
	

			
			<div class="row">
				<div class="panel panel-primary">
					<div class="panel-heading"><?php echo $r['heading'];?>
					</div>
					<div class="panel-body">
					     <img id="blogimage" src="../admin/blogimage/<?php echo $r['image'];?>" alt=" " >
						 
						<p> <?php echo $r['content'];?></p>
						<p><span> Source : </span><?php echo $r['source'];?></p>
					</div>
				</div>
			</div>
			
			
               <?php endforeach; ?>
	


   

	</div><!--/.main-->
	
        <script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
