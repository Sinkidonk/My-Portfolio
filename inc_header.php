<!DOCTYPE html>

<html>
	<head>
		<!-- 
		Author: Alex Parys
		Date: 7/23/2020
		 -->
		<meta charset="UTF-8">
        <meta name="author" content="Alex Parys">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap css -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
		
		<!-- when use with the $pageTitle variable on other pages it help fill the page tab. -->
		<title><?php echo (isset($pageTitle)) ? $pageTitle : 'Some Content Site'; ?></title>
	</head>
	<body>
        <header class='jumbotron jumbotron-fluid'>
        <div class="container">
            <h1 class="display-4">Alex Parys Portfolio Website</h1>
            <p class="lead">
            Welcome to my little corner of the web.
            </p>
            
            </div>
        </header>
        
        <nav class="nav nav-pills nav-fill">
            <a class="nav-item nav-link <?php if($pageTitle == 'My Portfolio'){ echo " active";}?>" href="./index.php">Home</a>
            <a class="nav-item nav-link <?php if($pageTitle == 'Feature'){ echo " active";}?>" href="./feature.php">Feature</a>
            <a class="nav-item nav-link" href="#">Link</a>
            <a class="nav-item nav-link disabled" href="#">Disabled</a>
        </nav>