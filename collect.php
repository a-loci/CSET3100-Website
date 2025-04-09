<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Data Collect</title>
</head>
<body>

<h1>Welcome</h1>

<p>First Name: <?php echo $_POST["firstname"]; ?></p>
<p>Last Name: <?php echo $_POST["lastname"]; ?></p>
<p>Age: <?php echo $_POST["age"]; ?></p>
<p>Uploaded Photo: <?php echo $_FILES["photo"]["name"]; ?></p>
<p>Favorite Color: <?php echo $_POST["favorite"]; ?></p>

</body>
</html>
