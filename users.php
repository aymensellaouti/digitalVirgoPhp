<?php
include_once 'autoload.php';
$userRepository = new UserRepository();
$users = $userRepository->findAll();
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

<div class="container">
    <?php foreach($users as $user): ?>
        <div class="row alert <?php
        if ($user->role == 'admin') {
            echo "alert-primary";
        } else {
            echo "alert-secondary";}
        ?>
            ">
            <div class="col-10">
                <?= $user->username ?>
            </div>
            <!--<div class="col-2">
                <a href="userDetails.php?id=<?php /*= $user->id */?>" class="btn btn-success">
                    Détails
                </a>
                <a href="deleteDetails.php?id=<?php /*= $user->id */?>" class="btn btn-danger">
                    Delete
                </a>
            </div>-->
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>