<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php      
        include "../includes/header.php"
    ?>

    <main>

    <?php
    session_start();
    ?>

    <div class="form-container">
    <h2>Contactez-nous</h2>
    <form action="tp.php" method="POST">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom">

      <label for="age">Age</label>
      <input type="number" id="age" name="age">

      <button type="submit">Envoyer</button>
    </form>
    </div>

    </main>

    <?php      
        include "../includes/footer.php"
    ?>


</body>
</html>
