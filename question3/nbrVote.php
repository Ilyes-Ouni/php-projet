<?php
    function nbrVote($number){
        $compteur=0;
        $fichier = fopen("../votes.txt","r");
        while (!feof($fichier)){
            $l = fgets($fichier, 255);
            if($l){
                $t = explode('#', $l); 
                foreach ($t as $key => $value) 
                if($number == $value) $compteur++;
            }
        } return $compteur;
    }
?>