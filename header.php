<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Paysagement, aménagement, Brossard, La Prairie, Candiac, Montréal, St-Lambert, La Prairie, GTL, G.T.L, vert, conception, excavation, entretien,paysager."
  <meta name="description" content="Aménagement et paysagement Brossard Prairie Candiac. Conception, aménagement paysager, excavation, entretien paysager, 	traitement de pelouse, commercial et industriel. Paysagiste. G.T.L. Créateur d'espace vert." />

  <meta name="author" content="1435, rue St-Alexandre, Montréal, Qc, J5R 2L8.à">

  <meta name="google-site-verification" content="wBipk09kfYhFA5jGmgoE5kZa9sdVWTDPwvz7F_Cb20o" />

  <title>RBV</title>

  <!-- Site Icon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Bootstrap Core CSS -->
  <link href="fonts/fonts.css" rel="stylesheet">

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/style.css" rel="stylesheet">

	<?php include_once('analyticstracking.php') ?>

</head>

<?php
	$uri_parts = explode('?', $_SERVER['REQUEST_URI'], 2);

	if($_GET["lang"] == "fr"){
		include_once("languages/main-fr.php");
		$l = "fr";
		$lo = "en";
	}else{
		$l = "en";
		$lo = "fr";
		include_once("languages/main-en.php");
	}
?>

<body>

    <!-- Navigation -->
    <nav class="white">
      <div class="home-button" >
				<img src="img/rbv_logo_blanc.png" alt="RBV - groupe de rap québécois"/>
			</div>
    </nav>
