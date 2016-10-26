<!DOCTYPE html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>

<link rel="stylesheet" media="all" href="css/bootstrap.min.css"/>
<link rel="stylesheet" media="all" href="css/style.css"/>
<link rel="stylesheet" media="all" href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600" />

<title>Instagram Concept</title>
<meta name="description" content="_______"/>

<style>
	@font-face { font-family: 'Glyphicons Halflings'; src: url('/fonts/glyphicons-halflings-regular.eot'); }
</style>

</head>
<body>

<?php include('module-header.php'); ?>

<?php include('module-nav.php'); ?>

<main class="container-fluid" id="main">
	<div class="row">

		<div class="col-md-3" id="main-panel1">
			<?php include('module-profile.php'); ?>
		</div><!-- main-panel1 -->

		<div class="col-md-6" id="main-panel2">
			<?php include('module-media.php'); ?>
		</div><!-- main-panel2 -->

		<div class="col-md-3" id="main-panel3">
			<?php include('module-suggestions.php'); ?>
			<?php include('module-trending.php'); ?>
		</div><!-- main-panel3 -->

	</div><!-- row -->
</main>

<?php include('module-footer.php'); ?>

</body>
</html>