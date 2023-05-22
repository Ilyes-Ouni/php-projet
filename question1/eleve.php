<?php 
class Eleve{
    public $idEleve;
    public $prenom;
    public $nom;
    public $genre;
    public $niveau;
    public $condidat;

    function __construct(){}

    function listEleves(){
        require_once('config.php');
        $cnx=new connexion();
        $pdo=$cnx->CNXbase();
        $req="SELECT * FROM eleves";
        $res=$pdo->query($req);
        return $res; 
    }

    function insertEleve($idEleve, $prenom, $nom, $genre, $niveau, $condidat){
        require_once('config.php');
        $cnx=new connexion();
        $pdo=$cnx->CNXbase();
        $req="insert into eleves(idEleve, prenom, nom, genre, niveau, condidat) values ('$idEleve', '$prenom', '$nom','$genre', '$niveau', '$condidat')";
        $pdo->exec($req);
    }

    function supprimerEleve($id){
        require_once('config.php');
        $cnx=new connexion();
        $pdo=$cnx->CNXbase();
        $req="DELETE FROM eleves WHERE idEleve=$id"; 
        $pdo->exec($req);
    }

    function getEleve($id){
        require_once('config.php');
        $cnx=new connexion();
        $pdo=$cnx->CNXbase();
        $req="SELECT * FROM eleves where idEleve=$id";
        $res=$pdo->query($req);
        $row =$res->fetch() ;
        return $row;
    }
}
?>