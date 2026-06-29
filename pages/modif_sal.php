<?php
    include('../inc/functions.php');
    $pourcentage=$_GET['pourcentage']??'';
    $submitted=isset($_GET['pourcentage']);
    if($submitted){
        set_salaries($pourcentage);
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../design/theme-dark/style.css">
        <title>Modification de salaire</title>
    </head>
    <body>
        <nav class="navbar">
        <ul>
            <li class="brand">Employés DB</li>
            <li><a href="index.php">Départements</a></li>
            <li><a href="search.php">Rechercher</a></li>
            <li><a href="stats.php">Statistiques</a></li>
            <li><a href="emp_form.php">Ajouter un employé</a></li>
            <li><a href="dept_form.php">Ajouter un departement</a></li>
            <li><a href="modif_sal.php" class="active">Modifier salaire</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Modification de salaire</h1>
        <p><a href="index.php">&larr; Retour aux départements</a></p>
        <div class="card">
            <form action="modif_sal.php" method="get">
                <div class="form-group">
                    <label for="age_max">Pourcentage d'ajout au salaire</label>
                    <p><input class="form-control" type="number" name="pourcentage">%</p>
                </div>
                <button type="submit" class="btn">Ajouter</button>
            </form>
        </div>
    </div>
    </body>
</html>
