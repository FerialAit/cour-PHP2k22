<?php
// une première fonction 
function minpap(){
    echo"<p class=\"lead\">Minute papillon !</p>";
}
function quelJour(){
    setlocale(LC_ALL,'fr_FR');
    echo "<p class=\"alert alert-primary w-50 mx-auto text-center\">Nous sommes
    " . strftime('%A %e %B %Y') . ".</p>";
    echo "<p class=\"alert alert-primary w-50 mx-auto text-center\">We are 
    " . date("l j F Y") . ".</p>";
}
//  Création d'une fonction qui var_dump une  variable : très utile pour un tableu
function jeprint_r($mavariable){ 
    echo"<smal class=\"bg-primary text-white p-2 \">var_dump : <pre class=\alert alert_primary w-75\">";
    jeprint_r($mavariable);
    echo "</pre>";
}
?>