

<?php

try {

    //code...
$maBase=new PDO('mysql:host=192.168.64.116; dbname=evansexo2; charset=utf8','root', 'root');
$patient=$maBase->query("select * from patient");

while($patientResult = $patient->fetch()) {
    echo $patientResult['numSS'] . " " . $patientResult['nom'] . " " . $patientResult['prenom'];
}

} catch (exception $e) {
 echo 'probleme de connection';
 
}