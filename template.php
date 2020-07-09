<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'ProgrammationWeb3');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/2f1c04ee48.js"></script>
</head>

<body>
    <?php if (!empty($_SESSION['userName'])):?>
    <?php include 'navbar.php'; ?>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Prenom</th>
                <th scope="col">Nom</th>
                <th scope="col">Courriel</th>
                <th scope="col">Date de creation</th>
                <th scope="col">Date de modification</th>
                <th> </th>
            </tr>
        </thead>
        <tbody>
            <?php $query = 'select firstName,lastName,email,creationDate,modificationDate,id
from tp_user';
$result = mysqli_query($mysqli, $query); ?>
            <?php if (mysqli_num_rows($result) > 0): ?>
            <?php    while ($row = mysqli_fetch_array($result)):?>

            <tr>
                <td>
                    <?=$row['firstName']; ?>
                </td>
                <td>
                    <?=$row['lastName']; ?>
                </td>
                <td>
                    <?=$row['email']; ?>
                </td>
                <td>
                    <?=$row['creationDate']; ?>
                </td>
                <td>
                    <?=$row['modificationDate']; ?>
                </td>
                <td>
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                        <a href="index.php?action=delete&&id=<?=$row['id']; ?>"
                            class="navbar-brand">
                            <i class="fas fa-times"></i></a>
                        <a href="form.php?action=edit&&id=<?=$row['id']; ?>"
                            class="navbar-brand"><i class="fas fa-pen-square"></i></a>

                    </nav>
                </td>
            </tr>
            <?php endwhile; ?>
            <?php
            mysqli_free_result($result);
              mysqli_close($mysqli);
             ?>
            <?php endif; ?>
        </tbody>
    </table>


    <?php else: ?>
    <?php header('location:login.php'); ?>
    <?php endif; ?>

</body>

</html>