<?php
/*actionner le boutton submit*/ 
if(isset($_POST['btn_submit'])){
        /*actionner tous les champs*/
        if(isset($_POST['user_email']) AND isset($_POST['user_pswd']) AND isset($_POST['check'])){
            /*si les champs ne sont pas vides on recupere les données !empty*/
            if(!empty($_POST['user_email']) AND !empty($_POST['user_pswd']) AND !empty($_POST['check'])){
                /*securiser les données inserées par l'utilisateur (filtrer) eviter des codes malveillants*/
                $name=htmlspecialchars($_POST['user_email']);
                $password=htmlspecialchars($_POST['user_pswd']);
                $checkbox=htmlspecialchars($_POST['check']);
                echo "bonjour $name merci pour votre connexion";
 
            }
        }
    }
/* on verifie d'abord si le champ email est rempli et s'il est vide il retourne (erreur)
  if(isset($_POST['user_email']) && empty($_POST['user_email'])){
      echo 'email obligatoire';
  }*/
?>
<form method="post" action="form.php" class="needs-validation" novalidate>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="user_pswd" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
</form>