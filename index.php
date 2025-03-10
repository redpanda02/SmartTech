<?php
require 'db.php';
$query = $pdo->query("SELECT * FROM employes");
$employes = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Liste des Employés</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Liste des Employés</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Email</th>
                    <th>Téléphone</th>
                    <th>Poste</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employes as $employe) : ?>
                    <tr>
                        <td><?= $employe['id'] ?></td>
                        <td><?= $employe['nom'] ?></td>
                        <td><?= $employe['prenom'] ?></td>
                        <td><?= $employe['email'] ?></td>
                        <td><?= $employe['telephone'] ?></td>
                        <td><?= $employe['poste'] ?></td>
                        <td>
                            <a href="modifier_employe.php?id=<?= $employe['id'] ?>" class="btn btn-warning btn-sm">Modifier</a>
                            <a href="supprimer_employe.php?id=<?= $employe['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?');">Supprimer</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="ajouter_employe.php" class="btn btn-primary">Ajouter un Employé</a>
    </div>
</body>
</html>
