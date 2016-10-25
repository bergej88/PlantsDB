<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="UWO Project - Remake of USDA Plant Database">
    <meta name="keywords" content="">
    <meta name="author" content="Matt Springer, Ben Kletzine, Jeff Berger">

    <title>PlantDB - Home</title>

    <!-- Styles -->
    <link href="Content/bootstrap-3.3.7-dist/css/bootstrap.css" rel="stylesheet">
    <link href="Content/Styles/jquery-ui.css" rel="stylesheet">
    <link href="Content/Styles/main.css" rel="stylesheet">

</head>
<body>
<?php include('Layouts/topNavIndex.php') ?>

<!-- ============================== -->
<!-- == Content Section          == -->
<!-- ============================== -->

<?php include('Layouts/contentStartIndex.php')?>


<!-- Our Content Goes Here -->
<h1 class="page-header">Site Map</h1>

<ul>
    <li><a href="index.php">Home</a></li>

    <li>Tools</li>
    <li style="list-style: none">
        <ul>
            <li><a href="Tools/plantSearch.php">Plant Search</a></li>
            <li><a href="Tools/plantByState.php">Plant By State</a></li>
            <li><a href="Tools/documentation.php">Documentation</a></li>
            <li><a href="Tools/culturalPlants.php">Cultural Plants</a></li>
            <li><a href="Tools/hardinessZones.php">Hardiness Zones</a></li>
            <li><a href="Tools/ecologicalSites.php">Ecological Sites</a></li>
        </ul>
    </li>
    <li>About</li>
    <li style="list-style: none">
        <ul>
            <li><a href="About/ourDatabase.php">Our Database</a></li>
            <li><a href="About/citations.php">Citations</a></li>
            <li><a href="About/help.php">Help</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">The NPDT</a></li>
            <li><a href="#>Our Partners</a></li>
            <li><a href="#">Acknowledgements</a></li>
        </ul>
    </li>
    <li><a href="#">Contact</a></li>
    <li>Account</li>
    <li style="list-style: none">
        <ul>
            <li><a href="MyGarden/overview.php">Overview</a></li>
            <li><a href="MyGarden/myGarden.php">My Gardeb</a></li>
            <li><a href="MyGarden/plog.php">Plog</a></li>
            <li><a href="MyGarden/settings.php">Settings</a></li>
        </ul>
    </li>
</ul>



<?php include('Layouts/contentEndIndex.php')?>



<!-- ============================== -->
<!-- == Script Section           == -->
<!-- ============================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="Content/jQuery/jquery-3.1.1.js"></script>
<script src="Content/jQuery/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Content/bootstrap-3.3.7-dist/js/bootstrap.js"></script>
<script src="js/index.js"></script>

<!-- FROM THE OLD INDEX.HTML
		<div>
			<div>
				<h1>PLANTS</h1>
			</div>
			<div>
				<div>
					<a href=""><span class="navContainer">Thing1</span></a>
					<a href=""><span class="navContainer">Thing2</span></a>
					<a href="MyGarden/addplant.php"><span class="navContainer">Thing3</span></a>
					<a href=""><span class="navContainer">Register</span></a>
					<a href="Login/login.php"><span class="navContainer">Login</span></a>
				</div>
			</div>
		</div>
		<div id="centralFeatures">
			<div class="featureSection">
				<h2>My Garden Overview</h2>
				<div class="details">
					<p><span class="bold">Crops Planted:</span> x</p>
					<p><span class="bold">Yield:</span> y pounds/tons</p>
				</div>
			</div>
			<div class="featureSection">
				<h2>Recently Spotted</h2>
				<div class="details">
					<p><span class="bold">Scientific Name:</span> z</p>
					<p><span class="bold">Common Name:</span> w</p>
					<p><span class="bold">Spotted By:</span> v</p>
					<a><img/></a>
				</div>
			</div>
		</div>
    <div id="sideNav">
      <ul>
        <li><input id="searchText" type="text" name="searchTextField"></li>
        <li><input id="searchType" type="select" name="searchSelectType"><input id="searchSubmit" type="button"></li>
        <li><a>State Search</a></li>
        <li><a>Advanced Search</a></li>
        <li><a>Search Help</a></li>
      </ul>
    </div>

		<div>
			<p>
				<a href="http://validator.w3.org/check/referer">Validate Me</a>
			</p>
		</div>
-->

</body>
</html>