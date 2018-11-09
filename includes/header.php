<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php include("functions/seo.php") ?>

	<title>
		<?php $result = seo(); echo $result[0]; ?>
	</title>

	<meta name="description" content="<?php $result = seo(); echo $result[1]; ?>">
	<meta name="keywords" content="<?php $result = seo(); echo $result[2]; ?>">

	<!-- Bootstrap -->
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">

	<!-- Fontawesome (Icones) -->
	<link rel="stylesheet" href="lib/fontawesome/css/all.css">

	<!-- CSS Principal -->
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/responsivo.css">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png" />
	<meta property="og:image" content="img/favicon.png" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>