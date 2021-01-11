<?php
function getPDO()
{
    try {
        return new PDO('mysql:host=localhost;dbname=gbaf;charset=utf8', 'root', '');
    }
    catch(exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

function find($query)
{
    $pdo = getPDO();
    $query = $pdo->prepare($query);
    $query->execute();
    $data = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($data) >0) {
        return $data;
    }

    return [];
}

function insertUser($query, $nom, $prenom, $pseudo, $motDePasse, $question, $reponse)
{
    $pdo = getPDO();
    $query = $pdo->prepare($query);

    if ($query->execute(array(
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':pseudo' => $pseudo,
        ':motDePasse' => $motDePasse,
        ':question' => $question,
        ':reponse' => $reponse
        ))) {
        return 1;
    } else {
        return 2;
    }
}

if (isset($_POST['Name']) && isset($_POST['LastName']) && isset($_POST['UserName']) && isset($_POST['Password']) && isset($_POST['Question']) && isset($_POST['Answer'])) {
    $nom = $_POST['Name'];
    $prenom = $_POST['LastName'];
    $pseudo = $_POST['UserName'];
    $motDePasse = $_POST['Password'];
    $question = $_POST['Question'];
    $reponse = $_POST['Answer'];
    $query = 'INSERT INTO user(name, lastName, userName, password, question, answer) VALUES (:nom,:prenom,:pseudo,:motDePasse,:question,:reponse)';
    
    if(insertUser($query, $nom, $prenom, $pseudo, $motDePasse, $question, $reponse) == 1) {
        header('location: connexion.php');
    } else {
        echo "marche pas";
    }
}
?>