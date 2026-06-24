<?php
    include('../inc/functions.php');
    $stats = get_jobs_stats();
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../design/theme-dark/style.css">
        <title>Statistiques par emploi</title>
    </head>
    <body>
        <nav class="navbar">
        <ul>
            <li class="brand">Employés DB</li>
            <li><a href="index.php">Départements</a></li>
            <li><a href="search.php">Rechercher</a></li>
            <li><a href="stats.php" class="active">Statistiques</a></li>
            <li><a href="emp_form.php">Ajouter un employé</a></li>
            <li><a href="dept_form.php">Ajouter un departement</a></li>
        </ul>
    </nav>
    <div class="container">
    <h1>Statistiques par emploi</h1>
    <p><a href="index.php">&larr; Retour aux départements</a></p>
    <table class="table">
        <thead>
        <tr>
            <th>Emploi</th>
            <th>Hommes</th>
            <th>Femmes</th>
            <th>Total</th>
            <th>Salaire moyen</th>
        </tr>
        </thead>
        <?php foreach ($stats as $row) { ?>
        <tbody>
            <tr>
                <td><?= $row['title'] ?></td>
                <td><?= $row['nb_hommes'] ?></td>
                <td><?= $row['nb_femmes'] ?></td>
                <td><?= $row['nb_total'] ?></td>
                <td><?= number_format($row['salaire_moyen'], 0, ',', ' ') ?> €</td>
            </tr>
        </tbody>
        <?php } ?>
    </table>
    </div>
    </body>
</html>
