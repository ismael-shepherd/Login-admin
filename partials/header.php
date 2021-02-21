<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul class="navbar-nar">
      <?php if(est_connecte()): ?>
       <li class="nav-item"><a class="nav-link" href="../logout.php">Se déconnecter</a></li>
      <?php endif ?>
      </ul>
</body>
</html>