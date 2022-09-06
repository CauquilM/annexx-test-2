<?php 
 $postal_code = htmlspecialchars($_POST["postal-code"]);
 $message;

 if(strlen($postal_code) != 5){
    $message = "Code postal invalide";
 }
 else
 {
    if (substr($postal_code, -5, 2) == "31") {
        $message = "Toulouse";
    }
    elseif(substr($postal_code, -5, 2) == "33"){
        $message = "Bordeaux";
    }
    else{
        $message = "Code postal inconnu";
    }
 }


?>

<p><?= $message ; ?></p>