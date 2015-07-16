<!DOCTYPE HTML>
<html>
<head>
    <title>Levrge | Monetize Your Social Networks</title>
    <!-- meta info -->
    <?php 
	include("config/connect.php");
	include 'meta-index.inc.php';
	?>
    <!-- Google fonts -->
    <?php include 'head-fonts.inc.php'; ?>
	<?php include 'head-bootstrap.inc.php'; ?>
	<?php include 'head-style.inc.php'; ?>

</head>

<body>


					<div class="global-wrap">
					
					<!-- //////////////////////////////////
					//////////////MAIN HEADER///////////// 
					////////////////////////////////////-->
					<?php include 'all-header.inc.php' ;?>
					<!-- LOGIN REGISTER LINKS CONTENT -->
					<?php include 'home-register.inc.php';?>
					
					
					<!-- END LOGIN REGISTER LINKS CONTENT -->
					
					
					<!-- TOP AREA -->
					<?php include 'home-slider.inc.php';?>
					<!-- END TOP AREA -->
					
					<!-- SEARCH AREA -->
					<?php include 'all-search.inc.php';?>
					<!-- END SEARCH AREA -->
					
					<div class="gap"></div>
					
					<!-- //////////////////////////////////
					//////////////END MAIN HEADER////////// 
					////////////////////////////////////-->
					
					
					<!-- //////////////////////////////////
					//////////////PAGE CONTENT///////////// 
					////////////////////////////////////-->
					
					
					
					<?php include 'home-content.inc.php';?>
					
					
					<!-- //////////////////////////////////
					//////////////END PAGE CONTENT///////// 
					////////////////////////////////////-->
					
					
					
					<!-- //////////////////////////////////
					//////////////MAIN FOOTER////////////// 
					////////////////////////////////////-->
					
					<?php include 'all-footer.inc.php';?>
					<!-- //////////////////////////////////
					//////////////END MAIN  FOOTER///////// 
					////////////////////////////////////-->
					
					
					
					<?php include 'all-js.inc.php';?>
					</div>
</body>


</html>
