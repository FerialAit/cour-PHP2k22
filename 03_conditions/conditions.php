<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - Les conditions</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-dark">
    <!-- JUMBOTRON -->
    <div class="jumbotron  text-center">
        <h1 class="display-3">Cours PHP7 - Les conditions</h1>
        <hr>
        <p class="lead bg-light">On retrouve dans PHP la plupart des instructions de contrôle des scripts. Indispensables à la gestion du déroulement d'un algorithme quelconque, ces instructions sont présentes dans tous les langages. PHP utilise une syntaxe très proche de celle du langage C. Ceux qui ont déjà pratiqué un langage tel que le C ou plus simplement JavaScript seront en pays de connaissance.</p>
    </div>

    <!-- RANGEE PRINCIPALE -->
    <div class="row bg-light">
        <!-- La barre de navigation en include (penser à toujours ajouter le JS en fin de page)    --->
        <?php
        require('../inc/sidenav.inc.php');
        ?>
        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid bg-light">

                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="conditions"><u>1- Les conditions avec if</u></h2>
                    <div class="col-sm-12 col-md-4" id="if">
                        <h3 class="texte-center">1- If</h3>
                        <p>L'instructions <code>if</code>est la plus simple et la plus utilisée des instructions conditionelles.
                            Présente dans tous les langage de programation, elle est essentielles puisqu'elle permet d'orienter l'éxécution du script en fonction
                            de la valeur booléenne d'une espression</p>
                    </div>
                        <?php
                        $a = 100;
                        $b = 55;
                        $c = 25;
                        $d = 8;

                        if ($a > $b && $b > $c) {
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">Les deux conditions sont respectées.<p>";
                        }
                        ?>
                    </div>

                    <div class="col-sm-12 col-md-4" id="ifElse">
                        <h3 class="texte-center">2- If...Else</h3>
                        <p>L'instructions <code>if...Else</code> permet de traiter le cas ou l'expression conditionelle est TRUE et en meme temps d'écrire un traitement de rechange quand elle est evaluée à FALSE, ce qui ne permet pas une instruction if seul.
                         L'instruction ou le bloc qui suit <code>else</code> est alors le seule a étre execute.
                         L'execution continue alors ensuite normalement apres le bloc </p>
                    </div>
                        <?php
                        if ($a > $b) {
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">$a est supérieur à $b.</p>";
                        } else {
                            echo "<p class=\"alert alert-success w-75 mx-auto text-center\">$b est supérieur à $a.</p>";
                        }
                        ?>
                        <p>Le bloc qui suit les instruction if ou else peut contenir toutes sortes d'instructions,
                           y compris d'autres instructions if ...else.
                           Nous obtenons,dans ce cas , une syntaxe plus compléte. </p>
                    </div>

                    <div class="col-sm-12 col-md-4" id="ifElseIf">
                        <h3 class="texte-center">3- If...Else  if...else</h3>
                        <p>Nous aurons ici une syntaxe un peut plus compliqué de la forme suivante : <code>if (condition){} Else if(condition){} else {}</code> </p>
                        <p>Ici notre variable d est égale a 8 . On teste différentes conditions pour voir laquelle est vraie grace a un <code>if...else if...else</code>
                    Ici la premiere condition est vraie </p>
                    <?php
                    echo "<p class=\"alert alert-success w-75 mx-auto text-center\">";
                    if($d == 8){
                        echo "Réponse 1 : \$d = 8";
                    }else if($d != 10){
                        echo "Réponse 2 : \$d est différent de 10";
                    }else{
                       echo "Réponse 3 : Les conditions précedents sont fausses.";
                    }
                    ?>
                    </div> 
                    
            </main>
        </div>

    </div>
    <!-- FIN DU CONTENU PRINCIPAL -->
    <!-- LE FOOTER EN REQUIRE -->
    <?php
    require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>

</html>