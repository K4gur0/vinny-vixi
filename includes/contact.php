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

    <legend>Pour toute questions ou envie de partager, n'hésite surtout pas à me contacter !</legend>

    <form class="form-horizontal" method="post" action="#contact">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 col-lg-9 control-label" for="prenom"><p>Email</p></label>  
  <div class="col-md-8 col-lg-9">
  <input id="email" name="email" type="text" placeholder="Entrez votre @mail" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 col-lg-9 control-label" for="nom"><p>Nom</p></label>  
  <div class="col-md-8 col-lg-9">
  <input id="nom" name="nom" type="text" placeholder="Entrer votre Nom" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-8 col-lg-9 control-label" for="sujet"><p>Sujet</p></label>  
  <div class="col-md-8 col-lg-9">
  <input id="sujet" name="sujet" type="text" placeholder="Veuillez indiquez le sujet" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-8 col-lg-9 control-label" for="message"><p>Message</p></label>
  <div class="col-md-8 col-lg-9">                     
    <textarea class="form-control" id="message" name="message" style="resize:none;" placeholder="Taper votre message" required></textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-8 control-label" for="bouton"></label>
  <div class="col-md-8 col-lg-9">
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
    margin:0 auto 200px auto;
    padding: 30px 0;
    width: 50%;
    background: rgba(150,150,200,0.2);
    border-radius: 2px;
    box-shadow: 1px 1px 20px 10px rgba(0,0,20,0.7);
    }

    @media (max-width:1060px)
    {
      section#contact fieldset
      {
        width: 100%;
      }
    }

    label.control-label
    {
      margin: 10px 0 0 0;
      padding-right: 15px;
      padding-left: 15px;
    }
    label.control-label p 
    {
    margin-top: 0;
    margin-bottom: 0;
    background:black;
    }

    section#contact legend
    {
      text-align: center;
      margin:20px 0;
    }

</style>
