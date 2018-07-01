<?php require_once 'includes/db.inc.php';?>
<?php
$aktivna = "kontakt";
$naslov = "kontakt || školica matematike";

$imeG = $emailG =  "";
$ime = $email = $komentar = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["ime"])) {
    $imeG = "Ime je neophodno";
  } else {
    $ime = test_input($_POST["ime"]);
  }

  if (empty($_POST["email"])) {
    $emailG = "Email je neophodan";
  } else {
    $email = test_input($_POST["email"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailG = "Neispravna email adresa";
    }
  }

  if (empty($_POST["komentar"])) {
    $komentar = "";
  } else {
    $komentar = test_input($_POST["komentar"]);
  }


}
if(!empty($_POST["ime"]) && !empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
   $sql = "INSERT INTO kontakt (ime, email, komentar) VALUES ('$ime', '$email', '$komentar')";

   if (!mysqli_query($kon, $sql)) {
       echo "Greška: " . $sql . "<br>" . mysqli_error($kon);
   }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;


}

 ?>
<?php require_once 'includes/header.php';?>
<h1 style="text-align:center;">Kontakt strana</h1>
<main class="forma">

   <form class="forma-kontakt" method="post" action="kontakt.php">

      <span class="greska"><?php echo $imeG; ?></span>
      Ime:
      <input type="text" name="ime" value="<?php echo $ime;?>">
      <span class="greska"><?php echo $emailG; ?></span>
      E-mail:
      <input type="email" name="email" value="<?php echo $email;?>">

      Komentar:
      <textarea name="komentar" rows="5" cols="40"><?php echo $komentar;?></textarea>

      <input type="submit" name="submit" class = "dugme-naslovna" value="Pošalji">
   </form>
   <section class="info">
      <h2>Informacije</h2>
      <p><strong>Adresa</strong>: Save Savića 56</p>
      <p><strong>Email</strong>: skolamate@gmail.com</p>
      <p><strong>Broj telefona</strong>: 064 344 05 20</p>

   </section>
</main>
<?php mysqli_close($kon); ?>
<?php require_once 'includes/footer.php'; ?>
