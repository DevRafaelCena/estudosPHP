<?php
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Formulario Teste</p>

    <form action="script.php" method="post">
        <?php
            $msgError = isset($_SESSION['msgError']) ? $_SESSION['msgError'] :'';
            
            if(!empty($msgError)){echo $msgError;}
        ?>
    <p>You name: <input type="text" name="name"/></p>
    <p>You age: <input type="text" name="age"/></p>
    <p><input type="submit" /></p>



    </form>
</body>
</html>