<?php
$id=$_GET['id'];
if(!isset($_GET['id'])){$id = 'homepage';}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head> 
		<title>Nanode - Network Application Node</title>		
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" /> 
		<meta name="description" content="If you want to change something, you need to measure it. Nanode helps you to measure the amount of electricity you use and generate in your home and sends the readings to the internet." /> 
		<meta name="keywords" content="nanode, energy, monitoring, emon, open energy," /> 
		<meta name="robots" content="index, follow" />
		<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />
		<link rel="stylesheet" media="screen" href="css/screen.css" type="text/css"/>
	</head>
	<body>
		<div id="container">
			<div id="header">
			<img src="images/nanode.png" alt="Nanode"/>
				<div id="menu"><?php include_once("php/navigation.php");?></div>
				<div id="login">
					<?php include_once("php/login.php");?>
				</div>
			</div>
			<div id="menu">
				<?php include_once("php/navigation.php");?>
			</div>
			<div id="search">
				<?php //include_once("php/search.php");?>
			</div>
			<div id="quote"><?php include_once("php/quotes.php");?></div>
			<div id="content">
				<?php include_once("php/$id.php");?>
			</div>
			<div id="footer">
				<?php include_once("php/footer.php");?>
			</div>
		</div>
	</body>
</html>
