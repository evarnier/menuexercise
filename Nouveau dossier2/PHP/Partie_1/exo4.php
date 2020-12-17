<html>
<head>
<link href="../page-menu.css" rel="stylesheet" >
</head>

<body>
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

            <li><a href="../tp final/index.html">tp final</a></li>
        </ul>
    </nav>
</div>
 
<?php

  function equation($a, $b, $c) 
  {
    echo "Recherche des solutions de l'équation $a x $a + $b x + $c";
    $delta = $b*$b - (4 * $a * $c);

    if ($delta < 0)
      echo "Cette équation n'a pas de solution.";

    if ($delta == 0)
      echo "Cette équation a une solution égale à ".-$b/(2*$a);
    
      if ($delta > 0){
      $solution1 = (-$b - sqrt($delta))/(2*$a);
      $solution2 = (-$b + sqrt($delta))/(2*$a);
    
      echo "Cette équation a deux solution: $solution1 et $solution2";
    }
  }
  equation(1, 2, 1);
?>
</body>


</html>