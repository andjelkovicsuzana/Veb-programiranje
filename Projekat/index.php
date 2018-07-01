<?php
$aktivna = "index";
$naslov = "naslovna strana || školica matematike";

 ?>
<?php require_once 'includes/header.php'; ?>
<main class="index">
   <section class="index-banner">
      <h1>Časovi matematike i matematika na lakši način</h1>
      <h3>Ovo je škola matematike za sve uzraste</h3>
   </section>
   <section class="tekst-naslovna">
      <h2>Matematika je teška bez <span>dobrog</span> vodiča</h2>
      <h4>Zato smo mi tu da vam pomognemo!</h4>
   </section>
   <div class="sekcija">
      <section class="sekcija1">
         <img src="media/raise-your-hand-to-ask.png">
         <h2 class="naslovi">pogledaj</h2>
         
         <p>Matematika je laka ako se predaje na pravi način. Mi verujemo da su vizuelne demonstracije veoma važne. Evo jednog primera demonstracije <a href = "https://www.youtube.com/watch?v=CAkMUdeB06o" target="_blank">Pitagorine teoreme</a>.</p>
         
      </section>
      <section class="sekcija2">
         <img src="media/open-book-top-view.png" >
         <h2 class="naslovi">uči</h2>
         <p>Primer našeg online predavanja možeš da vidiš <a href = "https://www.youtube.com/watch?v=8lF2XZWxV48" target="_blank">ovde</a>.</p>
      </section>
      <section class="sekcija3">
         <img src="media/lightbulb.png">
         <h2 class="naslovi">istraži</h2>
         <p>Istraži naš sajt, proveri da li ti odgovaramo i kontaktiraj nas. Ako te zanimaju cene možeš da odeš na <a href="cenovnik.php" target="_blank">cenovnik</a></p>
      </section>
   </div>
   <a href="kontakt.php"><button type="button" class="dugme-naslovna">Kontaktiraj nas</button></a>


</main>
<?php require_once 'includes/footer.php'; ?>
