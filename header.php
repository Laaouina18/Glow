<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electronic Shop</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- bootstrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- bootstrap links -->
    <!-- fonts links -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <!-- fonts links -->
</head>
<body>
        <!-- top navbar -->
        <div class="top-navbar">
      <a class="navbar-brand" href="index.php" id="logo"><span id="span1">Glow</span>Guru</a>
      <?php if (isset($_SESSION['user'])) {
          echo ' <div class="icons">

<a href="logout.php"><img src="./images/register.png" alt="" width="18px">Logout</a>

</div>';}else{ echo' <div class="icons">

    <a href="login.php"><img src="./images/register.png" alt="" width="18px">Login</a>
   
</div>';}?>
       
    </div>
    <!-- top navbar -->
