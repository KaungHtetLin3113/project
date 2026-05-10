<?php
include "vendor/autoload.php";

use Helpers\Auth;

$user = Auth::check();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4" style="max-width: 800px;">
        <h1 class="h3 mb-3">Profile</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item">Name: <?= $user->name ?></li>
            <li class="list-group-item">Email: <?= $user->email ?></li>
            <li class="list-group-item">Phone: <?= $user->phone ?></li>
            <li class="list-group-item">Address: <?= $user->address ?></li>
        </ul>

        <a href="_actions/logout.php" class="text-danger">logout</a>

    </div>
</body>

</html>