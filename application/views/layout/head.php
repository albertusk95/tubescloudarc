<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<?php
		$title = 'MyCloudStorageARC';
	?>
	<title><?php echo $title ?></title>
	
	<link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
	
	<script src="<?php echo base_url(); ?>js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
	
	<style>
		#saveandshare, #p-saveandshare, #cloudstor, #p-cloudstor {
			color : black;
		}
	
		#text-registrasi {
			border-radius : 5px;
			padding : 5px;
		}
		
		#create-account {
			margin : 12px 3px 35px 3px;
		}
		
		#header, #footer {
			background-color :#CCCCCC;
		}
		
		.carousel-inner > .item > img,
		.carousel-inner > .item > a > img {
			width: 50%;
			margin: auto;
		}
		
		#image1 {
			background-image : url(<?php echo base_url(); ?>assets/images/web-cloud.jpg);
			background-repeat: no-repeat;
			height: 350px;
			width: 800px;
		}
		
		#image2 {
			background-image : url(<?php echo base_url(); ?>assets/images/filesharing.png);
			background-repeat: no-repeat;
			height: 350px;
			width: 800px;
		}
		
	</style>
	
	</head>

<body>
<div id="wrapper">