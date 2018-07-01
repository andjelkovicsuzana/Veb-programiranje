<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/normalize.css">
   <link rel="stylesheet" href="css/style.css">
   <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Karma:400,700" rel="stylesheet">

   <title><?php echo $naslov; ?></title>
</head>
<body>

   <header>
      <a href="index.php" class="header-logo">školicam</a>
      <nav>
         <ul>
            <li><a href="index.php" <?php if ($aktivna =="index") { echo "class='aktivno'";} else { echo "class=''";} ?>>Početna</a></li>
            <li><a href="cenovnik.php" <?php if ($aktivna =="cenovnik") { echo "class='aktivno'";} else { echo "class=''";} ?>>Cenovnik</a></li>
            <li><a href="galerija.php" <?php if ($aktivna =="galerija") { echo "class='aktivno'";} else { echo "class=''";} ?> >Galerija</a></li>
            <li><a href="kursevi.php" <?php if ($aktivna =="kursevi") { echo "class='aktivno'";} else { echo "class=''";} ?>>Kursevi</a></li>
            <li><a href="kontakt.php" <?php if ($aktivna =="kontakt") { echo "class='aktivno'";} else { echo "class=''";} ?>>Kontakt</a></li>
         </ul>
      </nav>
   </header>
