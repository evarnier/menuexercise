<html>

<head>
<link href="../page-menu.css" rel="stylesheet">
</head>

<div class="navbar">
    <nav>
        <ul>
            <li><a href="#">HTML</a>
                <ul>
               
                    <li><a href="../html/exo2.html">exo 2 html</a></li>
                    <li><a href="../html/exo3.html">exo 3 html</a></li>
                    <li><a href="../html/exo4.html">exo 4 html</a></li>
                    <li><a href="../html/exo6.html">exo 6 html</a></li>
                    
                </ul>
            </li>
            
            <li><a href="#">CSS</a>
                <ul>
                    <li><a href="../css/ExoCss_1">exo 1, 2, 3 css</a></li>
                </ul>
            </li>
            
            <li><a href="#">PHP</a>
                <ul>
                    <li><a href="../php/Partie_1/exo1.php">Partie 1 exo 1</a></li>
                    <li><a href="../php/Partie_1/exo2.php">Partie 1 exo 2</a></li>
                    <li><a href="../php/Partie_1/exo2,2.php">Partie 1 exo 3</a></li>
                    <li><a href="../php/Partie_1/exo3.php">Partie 1 exo 4</a></li>
                    <li><a href="../php/Partie_1/exo4.php">Partie 1 exo 5</a></li>
                    <li><a href="../php/Partie_1/exo5.php">Partie 1 exo 6</a></li>
                    <li><a href="../php/Partie_1/">Partie 1 exo 7</a></li>
                    <li><a href="../php/Partie_1/">Partie 1 exo 8</a></li>
                    <li><a href="../php/Partie_2/exo1part2.php">Partie 2 exo 1</a></li>
                    <li><a href="../php/Partie_2/exopart2.php">Partie 2 exo 2</a></li>
                    <li><a href="../php/Partie_2/">Partie 2 exo 3</a></li>
                    <li><a href="../php/Partie_2/exofinalpart2.php">Partie 2 exo final</a></li>
                </ul>
            </li>
            
            <li><a href="#">BDD</a>
                <ul>
                    <li><a href="../bdd/exo1td1.html">exo 1</a></li>
                    <li><a href="../bdd/exo2td1.html">exo 2</a></li>
                    <li><a href="../bdd/exo3td1.html">exo 3</a></li>
                    <li><a href="../bdd/exo4td1.html">exo 4</a></li>
                    <li><a href="../bdd/exo5d1.html">exo 5</a></li>
                    <li><a href="../bdd/exo6td1.html">exo 6</a></li>
                    <li><a href="../bdd/exo7td1.html">exo 7</a></li>
                </ul>
            </li>

            <li><a href="#">SQL</a></li>

            <li><a href="">MENU</a></li>
        </ul>
    </nav>
</div>
</html>



<?php

    /**
     * 
     * j. Langlace
     * fichier de fonction php
     */

    echo "fonction Chargé";

    /*onction qui affiche un formulaire de connexion à une page et qui prend en paramètre un mot de pass
Cette fonction vérifie que le mot de pass saisie dans le formulaire est le même que celui passé en paramètre avec la méthode POST */
    function afficheFormulaire($motDePass){
        $afficheForm = "KO";
        
        if(isset($_POST["mdp"])){
            echo "le mot de passe saisie est :  ".$_POST["mdp"];
            if($motDePass == $_POST["mdp"]){
                echo "super c'est le bon";
                $afficheForm = "OK";
            }else{
                echo " il n'est pas bon";
            }
        }else{
            echo "veuuilllez saisir formulare";
        }

        //j'affiche le formulaire uniquement si le mdp est pas saisie
        if ($afficheForm == "KO"){
            ?>
                <form action="" method="post" >
                <div >
                    <label for="name">Enter your name </label>
                    <input type="text" name="name" id="Zone0" required>
                </div>
                <div >
                    <label for="password">Enter your mdp: </label>
                    <input type="password" name="mdp" id="zone2" required>
                </div>
                <div >
                    <input type="submit" value="Connect toi!">
                </div>
                </form>
            <?PHP
        }    

        // je return OK ou KO selon si le user à saisir le mdp attendu en paramètre
        return $afficheForm;

    } 

?>
