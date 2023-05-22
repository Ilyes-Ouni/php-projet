<?php include "chercherEleve.php";
    $Numero = $_POST["Numero"];
    $Nom = $_POST["Nom"];
    $Prenom = $_POST["Prenom"];
    $Genre = $_POST["Genre"];
    $niveauScolaire = $_POST["niveauScolaire"];
    $condidat = $_POST["condidat"];

    if(chercherEleve($Numero)){
        echo "Eleve existant";
    }else{
        $fichier= fopen("../eleves.txt", "a+");
        fwrite($fichier , "\n");
        
        $ch=$Numero. "#" .$Nom."#".$Prenom."#".$Genre."#".$niveauScolaire."#".$condidat ;
        $nb= fwrite($fichier , $ch ."#");
        if ($nb)
        echo "<script> confirm('Inscription effectuée avec succès'); if(confirm) window.location.href = window.location.href.slice(0,-12)+'inscription.html'; </script>";
        fclose($fichier);
    }
?>