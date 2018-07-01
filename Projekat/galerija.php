<?php
$aktivna = "galerija";
$naslov = "galerija || školica matematike";

 ?>
<?php require_once 'includes/header.php'; ?>

<script type = "text/javascript">
    var Images = ['media/img1.jpg','media/img2.jpg','media/img3.jpg','media/img6.jpg','media/img7.jpg'];

    var step = 1;

    function gallery() {
        document.getElementById('Imgs').src = Images[step];
        if (step < Images.length - 1) {
            step++;
        }
        else {
            step = 0;
        }
    }

window.onload = setInterval(gallery, 3000);
    
    
</script>
<h1 style="text-align:center;">Galerija</h1>
<main>
  <div>
    <img src = "media/img1.jpg" id = "Imgs" name = "slide" display = "initial" width = "900px" height = "560px">

   </div>  
   

</main>
<?php require_once 'includes/footer.php'; ?>
