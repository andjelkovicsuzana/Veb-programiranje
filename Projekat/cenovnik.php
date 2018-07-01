<?php require_once 'includes/db.inc.php' ?>
<?php
$aktivna = "cenovnik";
$naslov = "cenovnik || školica matematike";


 ?>
<?php require_once 'includes/header.php' ?>
<h1 style="text-align:center;">Cenovnik</h1>
<main>

   <section class="cenovnik">
      <table><tr><td>Grupa</td><td>Fond casova</td><td>Cena pojedinačnih časova</td><td>Cena grupnih časova</td><td>Cena celog kursa</td></tr>
      <?php
      $sql = "SELECT * FROM cene ";
      $rez = mysqli_query($kon, $sql);

      if (mysqli_num_rows($rez) > 0) {
         while($pom = mysqli_fetch_assoc($rez)){
            echo "<tr><td>".$pom['ime']."</td><td>".$pom['fond']."</td><td>".$pom['pojedinacni']."</td><td>".$pom['grupni']."</td><td>".$pom['ceo']."</td></tr>";
         }
      }

      ?>
      </table>
   </section>



</main>
<?php mysqli_close($kon); ?>
<?php require_once 'includes/footer.php' ?>
