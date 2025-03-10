<?php
session_start(); // Démarrer la session pour gérer les connexions
require 'db.php'; // Inclure la connexion à la base de données

// Vérifier si l'employé est déjà connecté
if (isset($_SESSION['employe_id'])) {
    header("Location: espace_employe.php"); // Rediriger vers l'espace employé
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil Employés - Smarttech</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .hero-section {
            background: url('background.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .hero-section h1 {
            font-size: 3rem;
            font-weight: bold;
        }
        .hero-section p {
            font-size: 1.5rem;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            font-size: 1.2rem;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="accueil_employes.php">Smarttech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="inscription_employe.php">S'inscrire</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="connexion_employe.php">Se connecter</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Hero -->
    <div class="hero-section">
        <div>
            <h1>Bienvenue chez Smarttech</h1>
            <p>Rejoignez notre équipe et accédez à votre espace employé.</p>
            <a href="inscription_employe.php" class="btn-custom">S'inscrire</a>
        </div>
    </div>

    <!-- Section Informations -->
    <div class="container mt-5">
        <h2>Pourquoi rejoindre Smarttech ?</h2>
        <p>
            Chez Smarttech, nous valorisons nos employés et leur offrons un environnement de travail dynamique et stimulant.
            En vous inscrivant, vous aurez accès à des outils modernes pour gérer vos tâches et collaborer avec vos collègues.
        </p>
        <p>
            <strong>Déjà inscrit ?</strong> <a href="connexion_employe.php">Connectez-vous ici</a>.
        </p>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Smarttech. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>