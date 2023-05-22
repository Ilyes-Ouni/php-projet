<?php include "../question1/chercherEleve.php";
$numElecteur= $_POST["numElecteur"];
$votedFor= $_POST["votedFor"];

echo "$votedFor<br>";
echo $numElecteur;

if(!($votedFor)){
    echo "<script>alert('Champs vides'); </script>";
}else{
    if(!(chercherEleve($numElecteur))) {
        echo "Vous n’êtes pas inscrit";
    }else{
        if(chercherVoter($numElecteur)){
            echo "Vous avez déjà voté"; 
        }else{
            $fichier= fopen("../votes.txt", "a+");
            fwrite($fichier , "\n");
            
            $ch=$numElecteur. "#" .$votedFor."#";
            $nb= fwrite($fichier , $ch ."#");
            if ($nb)
                echo "<script> confirm('Inscription effectuée avec succès'); if(confirm) window.location.href = 'http://localhost/TP/Séance4/Revision/question2/votes.php'; </script>";
            fclose($fichier);
            
        }
    }
}


?>