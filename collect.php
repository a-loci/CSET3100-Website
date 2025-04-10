<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Data Collect</title>
</head>
<body>

<h1 class="welcome-php">Information Entered</h1>
<div class="background"></div>
  <ul class="navbar">
    <li><a href="index.html" class="active">Home Page</a></li> 
    <li><a href="plasmid.html">Plasmids</a></li>
    <li><a href="bdaddy.html">Big Daddy</a></li>
    <li><a href="littlesis.html">Little Sister</a></li>
    <li><a href="andrew.html">Andrew Ryan</a></li>
    <li><a href="rapture.html">Rapture</a></li>
  </ul>
<div class="font-fix">
<p>First Name: <?php echo $_POST["firstname"]; ?></p>
<p>Last Name: <?php echo $_POST["lastname"]; ?></p>
<p>Age: <?php echo $_POST["age"]; ?></p>
<p>Uploaded Photo: <?php echo $_FILES["photo"]["name"]; ?></p>
<p>Favorite Color: <?php echo $_POST["favorite"]; ?></p>
<p>Slave or Master: <?php echo $_POST["education"]; ?></p>
<p>Satisfaction Level: <?php echo $_POST["satisfaction"]; ?></p>
<p> Please click the navigation bar above. Please do not enter any more information. Your information has already been stored</p>
</div>

</body>
</html>
