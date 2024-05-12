<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="stylesheet" href="css/login.css">
    <title>Registrácia</title>
</head>
<?php
    include('partials/header.php'); 
?> 
<section class="formular">
              <form action="index.php" method="post">
                    <h2>Registrácia</h2>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" placeholder="Váš email" required>
                    <label for="password">Heslo:</label>
                    <input type="password" id="password" name="password" placeholder="Vaše heslo" required >
                    <label for="confirm_password">Zopakovať heslo:</label>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Znova vaše heslo" required >
                    <input class="button" type="submit" name="user_register" value="Registrovať sa">
              </form>
</section>
<?php
    include_once('partials/footer.php')
?> 