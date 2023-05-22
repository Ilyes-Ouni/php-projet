<?php
    function chercherEleve($numero){
        $fichier= fopen("../eleves.txt", "r");
        while (!feof($fichier)){
            $l = fgets($fichier, 255);
            if($l){
                $t = explode('#', $l); 
                if($t[0] == $numero) return true;
            }
        }return false;
    }

    function chercherVoter($numero){
        $fichier= fopen("../votes.txt", "r");
        while (!feof($fichier)){
            $l = fgets($fichier, 255);
            if($l){
                $t = explode('#', $l); 
                if($t[0] == $numero) return true;
            }
        }return false;
    }
?>