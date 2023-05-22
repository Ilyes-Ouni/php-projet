<form action="inscrire.php" method="post">
    <!--Inputs-->
    Numero <input type="numbre" name="Numero"><br><br>
    Nom <input type="text" name="Nom"><br><br>
    Prenom <input type="text" name="Prenom"><br><br>

    Genre <br>Fille<input type="radio" id="age1" name="F" value="F">
              Garcon<input type="radio" id="age1" name="G" value="G"><br><br>

    Niveau Scolaire     <select name="niveauScolaire">
                            <option value="7ème">7eme</option>
                            <option value="8ème">8eme</option>
                            <option value="9ème">9eme</option>
                        </select><br><br>

    Condidat <br>Oui<input type="radio" id="O" name="condidat" value="O">
                 Non<input type="radio" id="N" name="condidat" value="N"><br><br>

    <!--Buttons-->
    <button type="submit">Afficher</button>
     <button type="submit">Annuler</button>
  </form>

