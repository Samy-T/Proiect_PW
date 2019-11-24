<?php
// Initialize the session
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Log In</title>
    <link rel="icon" href="../images/Stema-EM.png" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/user.css" type="text/css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</head>
<body>
    <div id="back">
        <a href="../welcome.php">Go back to website</a>
    </div>
    <br>
    <h1 align="center">Bine ai venit, <?php echo htmlspecialchars($_SESSION["username"]); ?></h1>
    <div id="wrapper">
        <a href="../reservation/get_reservation.php" class="btn btn-primary btn-lg btn-block">Caut cazare</a>
        <a href="../reservation/show_reservation.php" class="btn btn-secondary btn-lg btn-block">Vizualizează rezervări</a>
        <hr>
        <a href="../accommodation/add_accommodation.php" class="btn btn-primary btn-lg btn-block">Ofer cazare</a>
        <a href="../accommodation/show_accommodation.php" class="btn btn-secondary btn-lg btn-block">Vizualizează cazare</a>
    </div>
</body>
</html>

