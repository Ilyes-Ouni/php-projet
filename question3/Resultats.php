<h1>Resultat des votes</h1><br><br>

<?php include "nbrVote.php";
$votes= fopen("../votes.txt", "r");
$eleves= fopen("../eleves.txt", "r");
echo "<table border='1'>";
    echo "<tr>  <th>Numéro</th> <th> Nom </th> <th>Prenom</th> <th>Genre</th> <th>Nombre de votes</th> </tr>";
while (!feof($votes)){
    $vo = fgets($votes, 255);
    if($vo){
        $v = explode('#', $vo);    
        if($v[0] > 0)
        while (!feof($eleves)){
            $el = fgets($eleves, 255);
            if($el){
                $e = explode('#', $el); 
                if($v[1] == $e[0]){
                    $nbr =nbrVote($v[1]);
                    echo "<tr>  <th>$e[0]</th> <th>$e[1]</th> <th>$e[2]</th> <th>$e[3]</th> <th>$nbr</th> </tr>";

                } 
            }
        }
    }
}
echo "</table>";
?>