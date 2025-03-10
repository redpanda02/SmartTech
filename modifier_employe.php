<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $poste = $_POST['poste'];

    $stmt = $pdo->prepare("UPDATE employes SET nom = ?, prenom = ?, email = ?, telephone = ?, poste = ? WHERE id = ?");
    $stmt->execute([$nom, $prenom, $email, $telephone, $poste, $id]);

    header("Location: index.php");
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM employes WHERE id = ?");
$stmt->execute([$id]);
$employe = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier un Employé</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Modifier un Employé</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $employe['id'] ?>">
            <div class="mb-3">
                <label>Nom :</label>
                <input type="text" name="nom" class="form-control" value="<?= $employe['nom'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Prénom :</label>
                <input type="text" name="prenom" class="form-control" value="<?= $employe['prenom'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Email :</label>
                <input type="email" name="email" class="form-control" value="<?= $employe['email'] ?>" required>
            </div>
            <div class="mb-3">
                <label>Téléphone :</label>
                <input type="text" name="telephone" class="form-control" value="<?= $employe['telephone'] ?>">
            </div>
            <div class="mb-3">
                <label>Poste :</label>
                <input type="text" name="poste" class="form-control" value="<?= $employe['poste'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
</body>
</html>