<?php
    // récipérer les notes de la session
    session_start();
    $notes = isset($_SESSION['notes']) ? $_SESSION['notes'] :  [];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <title>Notes</title>
</head>
<body>

<div class="alert alert-primary">
    Liste des notes : <a href="addnote.php">Add Note </a>
</div>

<ol>
    <?php foreach ($notes as $name => $description) { ?>
    <li>
        <?= $name ?> : <?= $description ?> : <a href="deleteNote.php?name=<?=$name?>">X</a>
    </li>
    <?php } ?>
</ol>

</body>
</html>
