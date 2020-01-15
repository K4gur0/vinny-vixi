<?php

$msg_envoye = "";

if( $_POST ){
  
  // var_dump($pdo);

  // echo "Nom : $_POST[nom] <br>";
  // echo "Prénom : $_POST[prenom] <br>";
  // echo "Sujet : $_POST[sujet] <br>";
  // echo "Message : $_POST[message] <br>";
  // echo $date . "<br>";
  $date = date('d/m/Y G:i:s');

  $pdo->query("INSERT INTO message(nom, prenom, sujet, msg, date) VALUES ('$_POST[nom]', '$_POST[prenom]', '$_POST[sujet]', '$_POST[message]', '$date' ) ");

  $msg_envoye = "Votre message a bien été envoyer !";

}

?>


<section id="contact">

    <div class="titre">
        <h2>contact</h2>
    </div>


    <form class="form-horizontal" method="post" action="#contact">
<fieldset>

<!-- Form Name -->
<legend>Pour toute questions ou envie de partager, n'hésite surtout pas à me contacter !</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom</label>  
  <div class="col-md-8 col-lg-4">
  <input id="nom" name="nom" type="text" placeholder="Entrer votre Nom" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prenom">prenom</label>  
  <div class="col-md-8 col-lg-4">
  <input id="prenom" name="prenom" type="text" placeholder="Votre prénom" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sujet">Sujet</label>  
  <div class="col-md-8 col-lg-4">
  <input id="sujet" name="sujet" type="text" placeholder="Veuillez indiquez le sujet" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="message">Message</label>
  <div class="col-md-8 col-lg-4">                     
    <textarea class="form-control" id="message" name="message" style="resize:none;" placeholder="Taper votre message" required></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="bouton"></label>
  <div class="col-md-8 col-lg-4">
    <button id="bouton" name="bouton" class="btn btn-primary">Envoyer</button>
  </div>
</div>

<?php echo "<div> $msg_envoye </div>"  ?>

</fieldset>
</form>



    <div></div>

</section>



<style>

    section#contact
    {
        height:100vh;
    }
    .form-group
    {
    margin-bottom:0;
    }
    section#contact fieldset
    {
      padding-bottom: 200px;
    }

</style>
