<?php
///////// 1- fonction print_r //////// 
function jeprint_r($mavariable){
    echo "<small class=\"bg-primary text-white p-2\">var_dump :<pre class=\"alert alert-primary w-75\">";
    jeprint_r($mavariable);
    echo "</pre>";
}

/////// 2- fonction pour exécuter les prepare()///////
function executeRequete($requete, $parametres = array()){
    foreach ($parametres as $indice => $valeur){
        $parametres [$indice] = htmlspecialchars($valeur); 
        // on évite les injections SQL 
        global $pdoSITE; // global pdo SITE nous permet d accéder a la variable pdoSITE ET DE DIRE QU'ELLE DEVIENT GLOBAL
        $resultat = $pdoSITE -> prepare($requete); // on prepare la requete
        $succes = $resultat -> execute($parametres);// et on execute celle-ci 
        if ($succes === false){
            return false; // si la requete ne s'execute pas on retourne false

        } else {
            return $resultat;
            // fin if else 
        }
    }
} // fermeture de la fonction executeRequete

?>