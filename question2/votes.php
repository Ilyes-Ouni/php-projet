<form method="POST" action="Votes_action.php">
<h1>Saisie des notes</h1><br><br>
Electeur N°: <input type="number" name="numElecteur"></input><br><br>
<h2>Les candidats</h2><br><br>

<div style="display: flex; flex-direction:row">
    <div>
        Fille<br>
        <?php
        echo "<ul>";
              $fichier= fopen("../eleves.txt", "r");
              while (!feof($fichier)){
                  $l = fgets($fichier, 255);
                  if($l){
                      $t = explode('#', $l);
                        if($t[5] == 'O' && $t[3] == 'F'){
                            echo "<li><input type='radio' name='votedFor' value=$t[0] required>  $t[1] $t[2]</input></li>";
                        } 
                  }
                }
              echo "</ul>";
        ?>
    </div>
    <div style="margin-left: 50px;">Garcons<br>
        <?php
        echo "<ul>";
              $fichier= fopen("../eleves.txt", "r");
              while (!feof($fichier)){
                  $l = fgets($fichier, 255);
                  if($l){
                      $t = explode('#', $l);
                        if($t[5] == 'O' && $t[3] == 'G'){
                            echo "<li><input type='radio' name='votedFor' value=$t[0] required>  $t[1] $t[2]</input></li>";
                        } 
                  }
                }
              echo "</ul>";
        ?>
        </div>
</div>

    <!--Buttons-->
    <button type="submit">Afficher</button>
     <button type="submit">Annuler</button>
</form>