<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link href="https://bootswatch.com/5/flatly/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <title>Askan Bi Banque</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Askan Bi Banque</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <?php if (isset($_SESSION['auth'])): ?>
                    <?php if ($session->read('auth')->role === 'admin'): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Gestion des Agences</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=agenceController&task=create">Créer une
                                agence</a>
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="index.php?controller=agenceController&task=index">Lister les
                                agences</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Gestion des Agents</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=agentController&task=create">Créer un
                                agent</a>
                            <a class="dropdown-item" href="index.php?controller=agentController&task=index">Lister les
                                agents</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Gestion des Clients</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=clientController&task=create">Créer un
                                compte</a>
                            <a class="dropdown-item" href="index.php?controller=clientController&task=index">Lister les
                                clients</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Gestion des opérations</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=operationController&task=start">Nouvelle
                                opération</a>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php if (isset($_SESSION['auth'])): ?>
                    <?php if ($session->read('auth')->role === 'user'): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Ouverture de Compte</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=clientController&task=create">Créer un
                                compte</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Gestion des opérations</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.php?controller=operationController&task=start">Nouvelle
                                opération</a>
                        </div>
                    </li>
                    <?php endif; ?>
                    <?php endif; ?>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if (isset($_SESSION['auth'])): ?>
                    <li class="nav-item">
                        <a href="index.php?controller=authController&task=logout" class="nav-link">Déconnexion</a>
                    </li>
                    <?php else: ?>
                    <li class="nav-item">
                        <a href="index.php?controller=authController&task=index" class="nav-link">Connexion</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <?php if ($session->hasFlashes()): ?>
        <?php foreach ($session->getFlashes() as $type => $message): ?>
        <div class="alert alert-<?= $type ?>">
            <?= $message ?>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <?= $pageContent ?>
</body>

</html>